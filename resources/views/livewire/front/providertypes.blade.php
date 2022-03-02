<div>
    <section class="space">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <div class="sec_title position-relative text-center mb-5">
                        <h2 class="ft-bold">Browse Top <span class="theme-cl">Providers</span></h2>
                    </div>
                </div>
            </div>

            <!-- row -->
            <div class="row align-items-center">

                @foreach($types as $type)
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6">
                        <div class="cats-wrap text-center">
                            <a href="{{ route('shop.types', $type) }}" class="cats-box d-block rounded bg-white shadow px-2 py-4">
                                <div class="text-center mb-2 mx-auto position-relative d-inline-flex align-items-center justify-content-center  theme-bg-light">
                                    {{--                                    <i class="lni lni-laptop-phone fs-lg theme-cl"></i>--}}
                                    <img src="{{ $type ->getLastMediaUrl() }}" class="img-thumbnail">
                                </div>
                                <div class="cats-box-caption">
                                    <h4 class="fs-md mb-0 ft-medium m-catrio">{{ $type -> name }}</h4>
                                    <span class="text-muted">{{ $type -> providers -> count() }} Providers</span>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach


            </div>

        </div>
    </section>
</div>
