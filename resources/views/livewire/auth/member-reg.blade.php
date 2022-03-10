<div>
    <section class="gm-style">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-body">
                            <div class="text-center px-4"><img class="login-intro-img" src="img/bg-img/36.png" alt=""></div>
                            <!-- Register Form -->
                            <div class="register-form mt-4">
                                <h6 class="mb-3 text-center">Register.</h6>
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
                                    <div class="form-group">
                                        <x-jet-label value="{{ __('Name') }}" />

                                        <x-jet-input wire:model="name" class="{{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name"
                                                     :value="old('name')"  autofocus autocomplete="name" />
                                        <x-jet-input-error for="name"></x-jet-input-error>
                                    </div>
                                    <input type="hidden" name="type" value="customer" >



                                    <div class="form-group">
                                        <x-jet-label value="{{ __('Email') }}" />

                                        <x-jet-input wire:model="email" class="{{ $errors->has('email') ? 'is-invalid' : '' }}" type="email" name="email"
                                                     :value="old('email')"  />
                                        <x-jet-input-error for="email"></x-jet-input-error>
                                    </div>

                                    <div class="form-group">
                                        <x-jet-label value="{{ __('Password') }}" />

                                        <x-jet-input wire:model="password" class="{{ $errors->has('password') ? 'is-invalid' : '' }}" type="password"
                                                     name="password"  autocomplete="new-password" />
                                        <x-jet-input-error for="password"></x-jet-input-error>
                                    </div>

                                    <div class="form-group">
                                        <x-jet-label value="{{ __('Confirm Password') }}" />

                                        <x-jet-input class="form-control" type="password" name="password_confirmation"  autocomplete="new-password" />
                                    </div>


                                    <div class="mb-0">
                                        <div class="d-flex justify-content-center align-items-baseline">

                                            <x-jet-button>
                                                {{ __('Register') }}
                                            </x-jet-button>
                                        </div>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>
