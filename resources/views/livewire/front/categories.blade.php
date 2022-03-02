<div>
    <section class="space">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <div class="sec_title position-relative text-center mb-5">
                        <h6 class="text-muted mb-0">Popular Services</h6>
                        <h2 class="ft-bold">Browse Top <span class="theme-cl">Services</span></h2>
                    </div>
                </div>
            </div>

            <!-- row -->
            <div class="row align-items-center">
                @foreach($categories as $category)
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6">
                    <div class="cats-wrap text-center">
                        <a href="{{ route('shop.category', $category) }}" class="cats-box d-block rounded bg-white shadow px-2 py-4">
                            <div class="text-center mb-2 mx-auto position-relative d-inline-flex align-items-center justify-content-center p-3 theme-bg-light circle"><i class="lni lni-laptop-phone fs-lg theme-cl"></i></div>
                            <div class="cats-box-caption">
                                <h4 class="fs-md mb-0 ft-medium m-catrio">{{ $category -> name }}</h4>
                                <span class="text-muted">{{ $category -> providers -> count() }} Providers</span>
                            </div>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
            <!-- /row -->

{{--            <div class="row justify-content-center">--}}
{{--                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">--}}
{{--                    <div class="position-relative text-center">--}}
{{--                        <a href="#" class="btn btn-md bg-dark rounded text-light hover-theme">Browse All Categories<i class="lni lni-arrow-right-circle ml-2"></i></a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

        </div>
    </section>
</div>
