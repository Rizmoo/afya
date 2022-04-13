<?php

namespace App\Actions\Fortify;

use App\Models\Provider;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;
use Rinvex\Subscriptions\Models\Plan;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {



        $validations = [
            'name' => ['required', 'string', 'max:255'],
            'phone_number' => ['required', 'string', 'max:255','unique:users'],
//            'type' => ['required','in:customer,merchant', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
        ];

        if ($input['type'] === 'merchant') {
            $validations['provider_type'] = ['required'];
            $validations['bio'] = ['required', 'string'];
            $validations['website'] = ['required', 'string', 'max:255'];
        }

        Validator::make($input,$validations)->validate();

        if ($input['type'] === 'merchant') {
            $company = new Provider();
            $company->name = $input['company_name'];
            $company->email = $input['company_email'];
//            $company->website = $input['website'];
            $company->latitude = $input['latitude'];
            $company->longitude = $input['longitude'];
            $company->provider_type_id = $input['provider_type'];
            $company->description = $input['bio'];
            $company->save();
        }

//        dd($company);

        $user =  User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'type' => $input['type'],
            'provider_id' => $company->id ?? null,
            'password' => Hash::make($input['password']),
        ]);



        if ($input['type'] === 'merchant')
        {
            $plan = Plan::find($input['plan']);

            if (!$plan->isFree()) {
                $inv = new \App\Models\Invoice();
                $inv->customer_id = $user->id;
                $inv->amount = $plan->price;
                $inv->plan_id = $plan->id;
                $inv ->save();
            } else {
                $user-> newPlanSubscription($plan->name . ' - ' . 'Main', $plan);
            }
        }

        return $user;
    }
}
