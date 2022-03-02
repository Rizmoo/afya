<div>
    <div class="home-map-banner half-map">

        <div class="fs-left-map-box">
            <div class="home-map fl-wrap">
                <div class="hm-map-container fw-map">
{{--                    <div id="map"></div>--}}
                    <x-maps-leaflet :zoomLevel="6" :centerPoint="['lat' => 52.16, 'long' => 5]" :markers="[['lat' => 52.16444513293423, 'long' => 5.985622388024091]]"></x-maps-leaflet>
                </div>
            </div>
        </div>

        <div class="fs-inner-container">
            <div class="fs-content">

                <div class="row">
                    <div class="col-xl-12 col-md-12 col-sm-12">
                        <div class="cl-justify">

                            <div class="cl-justify-first">
                            </div>

                            <div class="cl-justify-last">
                                <div class="d-flex align-items-center justify-content-left">

                                    <div class="dlc-list ml-2">
                                        <select class="form-control sm rounded">
                                            <option>Show 20</option>
                                            <option>Show 30</option>
                                            <option>Show 40</option>
                                            <option>Show 50</option>
                                            <option>Show 100</option>
                                            <option>Show 250</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- row -->
                <div class="row align-items-center">

                    @forelse($providers as $provider)
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">


                            <div class="jbr-wrap text-left border rounded">
                                <div class="cats-box rounded bg-white d-flex align-items-start justify-content-between px-3 py-3">
                                    <div class="cats-box rounded bg-white d-flex align-items-start">
                                        <div class="text-center"><img src="assets/img/c-2.png" class="img-fluid" width="70" alt=""></div>
                                        <div class="cats-box-caption pl-3">
                                            <div class="jb-list01">
                                                <div class="jb-list-01-title"><h5 class="ft-medium mb-1">
                                                        <a href="{{ route('shop.provider', $provider -> provider) }}">{{ $provider -> provider -> name }}</a>
                                                    </h5>
                                                </div>
                                                <div class="jb-list-01-info d-block mb-2">
                                                    <span class="text-muted mr-2"><i class="lni lni-map-marker mr-1"></i>{{ $provider -> provider -> address }}</span>
                                                    <span class="text-muted mr-2"><i class="lni lni-briefcase mr-1"></i>{{ $provider -> provider -> email }}</span>
                                                    <span class="text-muted mr-2"><i class="lni lni-star-filled mr-1"></i>{{ $provider -> provider -> phone }}</span>
{{--                                                    <span class="text-muted mr-2"><i class="lni lni-money-protection mr-1"></i>$80k - $100k</span>--}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-center"><button type="button" class="p-3 border circle d-flex align-items-center justify-content-center bg-white text-gray"><i class="lni lni-heart-filled position-absolute snackbar-wishlist"></i></button></div>
                                </div>
                            </div>


                        </div>
                    @empty
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">


                        <div class="jbr-wrap text-left border rounded">
                            <div class="cats-box rounded bg-white d-flex align-items-start justify-content-between px-3 py-3">
                                <div class="cats-box rounded bg-white d-flex align-items-start">
                                    <div class="text-center"><img src="assets/img/c-2.png" class="img-fluid" width="70" alt=""></div>
                                    <div class="cats-box-caption pl-3">
                                        <div class="jb-list01">
                                            <div class="jb-list-01-title"><h5 class="ft-medium mb-1">
                                                    <a href="#">No Providers Yet. Check later</a>
                                                </h5>
                                                </div>

                                        </div>

                                    </div>
                                </div>
                                <div class="text-center"><button type="button" class="p-3 border circle d-flex align-items-center justify-content-center bg-white text-gray"><i class="lni lni-heart-filled position-absolute snackbar-wishlist"></i></button></div>
                            </div>
                        </div>


                    </div>
                    @endforelse

                </div>

            </div>
        </div>

    </div>
    <div class="clearfix"></div>
</div>

@push('scripts')
    <!-- Map -->
    <script src="https://maps.google.com/maps/api/js?key="></script>
    <script src="{{ asset('front/assets/js/map_infobox.js') }}"></script>
    <script src="{{ asset('front/assets/js/markerclusterer.js') }}"></script>
    <script src="{{ asset('front/assets/js/map.js') }}"></script>
    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->

    <script>
        function openSearch() {
            document.getElementById("Search").style.display = "block";
        }
        function closeSearch() {
            document.getElementById("Search").style.display = "none";
        }
    </script>
@endpush
