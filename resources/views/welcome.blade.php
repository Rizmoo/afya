@extends('layouts.front')

@section('content')
    <div class="home-banner margin-bottom-0" style="background:#eff6f2 url({{ asset('front/assets/img/banner-3.jpg') }}) no-repeat;">
        <div class="container">
            <div class="row justify-content-start">
                <div class="col-xl-6 col-lg-9 col-md-12 col-sm-12 col-12">
                    <div class="banner_caption text-left mb-4">
                        <h1 class="banner_title ft-bold mb-1">Get  <span class="theme-cl">Health Services</span><br>On Afya</h1>
                        <p class="fs-md ft-regular">Welcome to Afya</p>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-10 col-md-12 col-sm-12 col-12">

                </div>
            </div>
        </div>
    </div>

    <livewire:front.providertypes/>
    <livewire:front.categories/>



@endsection
