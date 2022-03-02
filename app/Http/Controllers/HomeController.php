<?php

namespace App\Http\Controllers;

use App\Models\HomeSlider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function __invoke(Request $request)
    {
        if (Auth::user() -> type == 'internal')
        {

            return view('dashboard');
        }elseif (Auth::user() -> type == 'merchant')
        {
            return  view('merchant.dashboard');
        }else
        {


            return view('welcome');
        }

    }
}
