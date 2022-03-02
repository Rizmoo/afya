<div>
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12">
                <div class="_dashboard_content bg-white rounded mb-4">
                    <div class="_dashboard_content_header br-bottom py-3 px-3">
                        <div class="_dashboard__header_flex">
                            <h4 class="mb-0 ft-medium fs-md"><i class="fa fa-file mr-1 theme-cl fs-sm"></i>Register</h4>
                        </div>
                    </div>

                    <div class="_dashboard_content_body py-3 px-3">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <input wire:model="type" type="hidden" name="type" value="merchant">
                            <input type="hidden" name="plan" value="{{ $plan }}" >

                            <div class="col-xl-12 col-lg-12 col-md-12">
                                <div class="row">


                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <label class="text-dark ft-medium">Email Address</label>
                                            <input wire:model="email" value="{{ old('email') }}" name="email"  type="text" class="form-control rounded" placeholder="Email">
                                        </div>
                                    </div>

                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <label class="text-dark ft-medium">Name</label>
                                            <input wire:model="name" name="name" value="{{ old('name') }}"  type="text" class="form-control rounded" placeholder="User">
                                        </div>
                                    </div>

                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <label class="text-dark ft-medium">Specialisms</label>
                                            <select wire:model="provider_type" name="provider_type"  class="form-control rounded">
                                                <option value="">Select type</option>
                                                @foreach($provider_types as $prov)
                                                <option value="{{ $prov -> id }}">{{ $prov -> name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <label  class="text-dark ft-medium">City</label>
                                            <input wire:model="county" value="{{ old('county') }}" name="county" type="text" class="form-control" placeholder="City">
                                        </div>
                                    </div>

                                    <div class="col-xl-12 col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <label class="text-dark ft-medium">Bio</label>
                                            <textarea wire:model="bio"  name="bio" class="form-control rounded" placeholder="Bio">{{ old('bio') }}</textarea>
                                        </div>
                                    </div>



                                    <div class="col-xl-12 col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <label class="text-dark ft-medium">Full Address</label>
                                            <input  wire:model="address" value="{{ old('address') }}" name="address" type="text" class="form-control" placeholder="#10 Marke Juger, SBI Road">
                                        </div>
                                    </div>

                                    <input type="hidden" name="longitude" value="36.8196418">
                                    <input type="hidden" name="latitude" value="-1.286295">

                                    <div class="col-xl-4 col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <label class="text-dark ft-medium">Website</label>
                                            <input wire:model="website" value="{{ old('website') }}" name="website" type="text" class="form-control" placeholder="">
                                        </div>
                                    </div>

                                    <div class="col-xl-4 col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <label class="text-dark ft-medium">Phone</label>
                                            <input wire:model="phone" value="{{ old('phone_number') }}" name="phone_number" type="text" class="form-control" placeholder="">
                                        </div>
                                    </div>

                                    <div class="col-xl-4 col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <label class="text-dark ft-medium">Facebook Page</label>
                                            <input wire:model="fb" value="{{ old('fb') }}" name="fb" type="text" class="form-control" placeholder="">
                                        </div>
                                    </div>

                                    <div class="col-md-12 mt-5">

                                        <h5>Other  Info</h5>
                                        <hr>
                                    </div>


                                    <div class="col-xl-6 col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <label class="text-dark ft-medium">Company Email</label>
                                            <input wire:model="company_email" value="{{ old('company_email') }}" name="company_email" type="email" class="form-control" placeholder="">
                                        </div>
                                    </div>

                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <label class="text-dark ft-medium">Name</label>
                                            <input wire:model="company_name" value="{{ old('company_name') }}" name="company_name" type="text" class="form-control" placeholder="">
                                        </div>
                                    </div>

                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <label class="text-dark ft-medium">Password</label>
                                            <input wire:model="password" name="password" type="password" class="form-control" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <label class="text-dark ft-medium">Password</label>
                                            <input wire:model="password_confirmation" name="password_confirmation" type="password" class="form-control" placeholder="">
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-md ft-medium text-light rounded theme-bg">Register</button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
