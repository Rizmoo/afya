<div>

    <div class="bg-cover py-5" style="background:#28b661 url(assets/img/bn-2.jpg) no-repeat;" data-overlay="2">
        <div class="ht-200"></div>
    </div>

    <section class="pb-5 pt-0">
        <div class="container">
            <div class="row">

                <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12">

                    <div class="d-block ovr_top">
                        <div class="jbd-flex d-flex align-items-center justify-content-start mb-4">
                            <div class="jbd-01-thumb position-relative z-index-1">
                                <img src="{{ asset('front/assets/img/c-1.png') }}" class="img-fluid" width="90" alt="" />
                            </div>
                        </div>
                    </div>

                    <div class="rounded mb-4">
                        <div class="jbd-01 mt-3">

                            <div class="jbd-01-caption mb-4 mt-4">
                                <div class="tbd-title">
                                    <h4 class="mb-3 ft-medium fs-lg mt-3">{{ $provider -> name }}
                                        <img src="{{ asset('front/assets/img/verify.svg') }}" class="ml-1" width="12" alt="">
                                    </h4>
                                </div>
{{--                                <div class="jbd-list">--}}
{{--                                    <span class="px-2 py-1 rounded theme-cl theme-bg-light mr-2"><i class="lni lni-briefcase mr-1"></i>Full Time</span>--}}
{{--                                    <span><i class="lni lni-map-marker mr-1"></i>San Francisco, USA</span>--}}
{{--                                    <span class="px-2 py-1 rounded text-warning bg-light-warning ml-2"><i class="lni lni-star mr-1"></i>Featured</span>--}}
{{--                                    <span class="rounded ml-2"><i class="lni lni-money-protection mr-1"></i>$85k - 100k PA.</span>--}}
{{--                                </div>--}}
                            </div>

                            <div class="jbd-details mb-4">
                                <h5 class="ft-medium fs-md">Bio</h5>
                                <p>
                                    {{ $provider -> description }}
                                </p>

                            </div>

                            <div class="jbd-details mb-4">
                                <h5>Services:</h5>
                                <div class="position-relative row">
                                    <div class="col-lg-12 col-md-12 col-12">
                                        @foreach($provider -> services as $service)
                                        <div class="mb-2 mr-4 ml-lg-0 mr-lg-4">
                                            <div class="d-flex align-items-center">
                                                <div class="rounded-circle bg-light-success theme-cl p-1 small d-flex align-items-center justify-content-center">
                                                    <i class="fas fa-check small"></i>
                                                </div>
                                                <h6 class="mb-0 ml-3 text-muted fs-sm"> {{ $service -> service -> name }}.</h6>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>


                        </div>

                    </div>

                </div>

                <!-- Sidebar -->
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                    <livewire:front.make-appointment :provider="$provider"/>
                </div>

            </div>
        </div>
    </section>

</div>
