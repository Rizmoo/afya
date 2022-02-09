@extends('layouts.front')

@section('content')
    <div class="home-banner margin-bottom-0" style="background:#eff6f2 url({{ asset('front/assets/img/banner-3.jpg') }}) no-repeat;">
        <div class="container">
            <div class="row justify-content-start">
                <div class="col-xl-6 col-lg-9 col-md-12 col-sm-12 col-12">
                    <div class="banner_caption text-left mb-4">
                        <h1 class="banner_title ft-bold mb-1">Get  <span class="theme-cl">Health Services</span><br>On Afya</h1>
                        <p class="fs-md ft-regular">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-10 col-md-12 col-sm-12 col-12">

{{--                    <form class="bg-white rounded p-1">--}}
{{--                        <div class="row no-gutters">--}}
{{--                            <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12 col-12">--}}
{{--                                <div class="form-group mb-0 position-relative">--}}
{{--                                    <input type="text" class="form-control lg left-ico" placeholder="Job Title, Keyword or Company" />--}}
{{--                                    <i class="bnc-ico lni lni-search-alt"></i>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-xl-5 col-lg-4 col-md-4 col-sm-12 col-12">--}}
{{--                                <div class="form-group mb-0 position-relative">--}}
{{--                                    <select class="custom-select lg b-0">--}}
{{--                                        <option value="1">Choose Categories</option>--}}
{{--                                        <option value="2">Information Technology</option>--}}
{{--                                        <option value="3">Cloud Computing</option>--}}
{{--                                        <option value="4">Engineering Services</option>--}}
{{--                                        <option value="5">Healthcare/Pharma</option>--}}
{{--                                        <option value="6">Telecom/ Internet</option>--}}
{{--                                        <option value="7">Finance/Insurance</option>--}}
{{--                                    </select>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-xl-2 col-lg-3 col-md-3 col-sm-12 col-12">--}}
{{--                                <div class="form-group mb-0 position-relative">--}}
{{--                                    <button class="btn full-width custom-height-lg theme-bg text-white fs-md" type="button">Find Job</button>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </form>--}}

{{--                    <div class="top-searches-key">--}}
{{--                        <ul class="p-0 mt-4 align-items-center d-flex">--}}
{{--                            <li><span class="text-dark ft-medium medium">Top Searches:</span></li>--}}
{{--                            <li><a href="javascript:void(0);" class="">WordPress</a></li>--}}
{{--                            <li><a href="javascript:void(0);" class="">Magento</a></li>--}}
{{--                            <li><a href="javascript:void(0);" class="">HTML5</a></li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}

                </div>
            </div>
        </div>
    </div>

    <livewire:front.categories/>


{{--    <section class="middle gray">--}}
{{--        <div class="container">--}}

{{--            <div class="row justify-content-center">--}}
{{--                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">--}}
{{--                    <div class="sec_title position-relative text-center mb-5">--}}
{{--                        <h6 class="text-muted mb-0">Trending Jobs</h6>--}}
{{--                        <h2 class="ft-bold">All Popular <span class="theme-cl">Listed jobs</span></h2>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <!-- row -->--}}
{{--            <div class="row align-items-center">--}}

{{--                <!-- Single -->--}}
{{--                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">--}}
{{--                    <div class="job_grid rounded ">--}}
{{--                        <div class="position-absolute ab-left"><button type="button" class="p-3 border circle d-flex align-items-center justify-content-center bg-white text-gray"><i class="lni lni-heart-filled position-absolute snackbar-wishlist"></i></button></div>--}}
{{--                        <div class="position-absolute ab-right"><span class="medium theme-cl theme-bg-light px-2 py-1 rounded">Full Time</span></div>--}}
{{--                        <div class="job_grid_thumb mb-3 pt-5 px-3">--}}
{{--                            <a href="job-detail.html" class="d-block text-center m-auto"><img src="assets/img/c-1.png" class="img-fluid" width="70" alt="" /></a>--}}
{{--                        </div>--}}
{{--                        <div class="job_grid_caption text-center pb-3 px-3">--}}
{{--                            <h4 class="mb-0 ft-medium medium"><a href="employer-detail.html" class="text-dark fs-md">UI/UX Web Designer</a></h4>--}}
{{--                            <div class="jbl_location"><i class="lni lni-map-marker mr-1"></i><span>San Francisco</span></div>--}}
{{--                        </div>--}}
{{--                        <div class="job_grid_footer pt-2 pb-4 px-3 d-flex align-items-center justify-content-between">--}}
{{--                            <div class="row">--}}
{{--                                <div class="df-1 text-muted col-6 mb-2"><i class="lni lni-briefcase mr-1"></i>Web Design</div>--}}
{{--                                <div class="df-1 text-muted col-6 mb-2"><i class="lni lni-wallet mr-1"></i>3-4 Lakhs PA.</div>--}}
{{--                                <div class="df-1 text-muted col-6"><i class="lni lni-users mr-1"></i>02 Vacancy</div>--}}
{{--                                <div class="df-1 text-muted col-6"><i class="lni lni-timer mr-1"></i>3 days ago</div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <!-- Single -->--}}
{{--                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">--}}
{{--                    <div class="job_grid rounded ">--}}
{{--                        <div class="position-absolute ab-left"><button type="button" class="p-3 border circle d-flex align-items-center justify-content-center bg-white text-gray"><i class="lni lni-heart-filled position-absolute snackbar-wishlist"></i></button></div>--}}
{{--                        <div class="position-absolute ab-right"><span class="medium bg-light-warning text-warning px-2 py-1 rounded">Part Time</span></div>--}}
{{--                        <div class="job_grid_thumb mb-3 pt-5 px-3">--}}
{{--                            <a href="job-detail.html" class="d-block text-center m-auto"><img src="assets/img/c-2.png" class="img-fluid" width="70" alt="" /></a>--}}
{{--                        </div>--}}
{{--                        <div class="job_grid_caption text-center pb-3 px-3">--}}
{{--                            <h4 class="mb-0 ft-medium medium"><a href="employer-detail.html" class="text-dark fs-md">UI/UX Web Designer</a></h4>--}}
{{--                            <div class="jbl_location"><i class="lni lni-map-marker mr-1"></i><span>San Francisco</span></div>--}}
{{--                        </div>--}}
{{--                        <div class="job_grid_footer pt-2 pb-4 px-3 d-flex align-items-center justify-content-between">--}}
{{--                            <div class="row">--}}
{{--                                <div class="df-1 text-muted col-6 mb-2"><i class="lni lni-briefcase mr-1"></i>Web Design</div>--}}
{{--                                <div class="df-1 text-muted col-6 mb-2"><i class="lni lni-wallet mr-1"></i>3-4 Lakhs PA.</div>--}}
{{--                                <div class="df-1 text-muted col-6"><i class="lni lni-users mr-1"></i>02 Vacancy</div>--}}
{{--                                <div class="df-1 text-muted col-6"><i class="lni lni-timer mr-1"></i>3 days ago</div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <!-- Single -->--}}
{{--                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">--}}
{{--                    <div class="job_grid rounded ">--}}
{{--                        <div class="position-absolute ab-left"><button type="button" class="p-3 border circle d-flex align-items-center justify-content-center bg-white text-gray"><i class="lni lni-heart-filled position-absolute snackbar-wishlist"></i></button></div>--}}
{{--                        <div class="position-absolute ab-right"><span class="medium bg-light-purple text-purple px-2 py-1 rounded">Contract</span></div>--}}
{{--                        <div class="job_grid_thumb mb-3 pt-5 px-3">--}}
{{--                            <a href="job-detail.html" class="d-block text-center m-auto"><img src="assets/img/c-3.png" class="img-fluid" width="70" alt="" /></a>--}}
{{--                        </div>--}}
{{--                        <div class="job_grid_caption text-center pb-3 px-3">--}}
{{--                            <h4 class="mb-0 ft-medium medium"><a href="employer-detail.html" class="text-dark fs-md">UI/UX Web Designer</a></h4>--}}
{{--                            <div class="jbl_location"><i class="lni lni-map-marker mr-1"></i><span>San Francisco</span></div>--}}
{{--                        </div>--}}
{{--                        <div class="job_grid_footer pt-2 pb-4 px-3 d-flex align-items-center justify-content-between">--}}
{{--                            <div class="row">--}}
{{--                                <div class="df-1 text-muted col-6 mb-2"><i class="lni lni-briefcase mr-1"></i>Web Design</div>--}}
{{--                                <div class="df-1 text-muted col-6 mb-2"><i class="lni lni-wallet mr-1"></i>3-4 Lakhs PA.</div>--}}
{{--                                <div class="df-1 text-muted col-6"><i class="lni lni-users mr-1"></i>02 Vacancy</div>--}}
{{--                                <div class="df-1 text-muted col-6"><i class="lni lni-timer mr-1"></i>3 days ago</div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <!-- Single -->--}}
{{--                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">--}}
{{--                    <div class="job_grid rounded ">--}}
{{--                        <div class="position-absolute ab-left"><button type="button" class="p-3 border circle d-flex align-items-center justify-content-center bg-white text-gray"><i class="lni lni-heart-filled position-absolute snackbar-wishlist"></i></button></div>--}}
{{--                        <div class="position-absolute ab-right"><span class="medium bg-light-danger text-danger px-2 py-1 rounded">Enternship</span></div>--}}
{{--                        <div class="job_grid_thumb mb-3 pt-5 px-3">--}}
{{--                            <a href="job-detail.html" class="d-block text-center m-auto"><img src="assets/img/c-4.png" class="img-fluid" width="70" alt="" /></a>--}}
{{--                        </div>--}}
{{--                        <div class="job_grid_caption text-center pb-3 px-3">--}}
{{--                            <h4 class="mb-0 ft-medium medium"><a href="employer-detail.html" class="text-dark fs-md">UI/UX Web Designer</a></h4>--}}
{{--                            <div class="jbl_location"><i class="lni lni-map-marker mr-1"></i><span>San Francisco</span></div>--}}
{{--                        </div>--}}
{{--                        <div class="job_grid_footer pt-2 pb-4 px-3 d-flex align-items-center justify-content-between">--}}
{{--                            <div class="row">--}}
{{--                                <div class="df-1 text-muted col-6 mb-2"><i class="lni lni-briefcase mr-1"></i>Web Design</div>--}}
{{--                                <div class="df-1 text-muted col-6 mb-2"><i class="lni lni-wallet mr-1"></i>3-4 Lakhs PA.</div>--}}
{{--                                <div class="df-1 text-muted col-6"><i class="lni lni-users mr-1"></i>02 Vacancy</div>--}}
{{--                                <div class="df-1 text-muted col-6"><i class="lni lni-timer mr-1"></i>3 days ago</div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <!-- Single -->--}}
{{--                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">--}}
{{--                    <div class="job_grid rounded ">--}}
{{--                        <div class="position-absolute ab-left"><button type="button" class="p-3 border circle d-flex align-items-center justify-content-center bg-white text-gray"><i class="lni lni-heart-filled position-absolute snackbar-wishlist"></i></button></div>--}}
{{--                        <div class="position-absolute ab-right"><span class="medium bg-light-purple text-purple px-2 py-1 rounded">Contract</span></div>--}}
{{--                        <div class="job_grid_thumb mb-3 pt-5 px-3">--}}
{{--                            <a href="job-detail.html" class="d-block text-center m-auto"><img src="assets/img/c-5.png" class="img-fluid" width="70" alt="" /></a>--}}
{{--                        </div>--}}
{{--                        <div class="job_grid_caption text-center pb-3 px-3">--}}
{{--                            <h4 class="mb-0 ft-medium medium"><a href="employer-detail.html" class="text-dark fs-md">UI/UX Web Designer</a></h4>--}}
{{--                            <div class="jbl_location"><i class="lni lni-map-marker mr-1"></i><span>San Francisco</span></div>--}}
{{--                        </div>--}}
{{--                        <div class="job_grid_footer pt-2 pb-4 px-3 d-flex align-items-center justify-content-between">--}}
{{--                            <div class="row">--}}
{{--                                <div class="df-1 text-muted col-6 mb-2"><i class="lni lni-briefcase mr-1"></i>Web Design</div>--}}
{{--                                <div class="df-1 text-muted col-6 mb-2"><i class="lni lni-wallet mr-1"></i>3-4 Lakhs PA.</div>--}}
{{--                                <div class="df-1 text-muted col-6"><i class="lni lni-users mr-1"></i>02 Vacancy</div>--}}
{{--                                <div class="df-1 text-muted col-6"><i class="lni lni-timer mr-1"></i>3 days ago</div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <!-- Single -->--}}
{{--                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">--}}
{{--                    <div class="job_grid rounded ">--}}
{{--                        <div class="position-absolute ab-left"><button type="button" class="p-3 border circle d-flex align-items-center justify-content-center bg-white text-gray"><i class="lni lni-heart-filled position-absolute snackbar-wishlist"></i></button></div>--}}
{{--                        <div class="position-absolute ab-right"><span class="medium theme-cl theme-bg-light px-2 py-1 rounded">Full Time</span></div>--}}
{{--                        <div class="job_grid_thumb mb-3 pt-5 px-3">--}}
{{--                            <a href="job-detail.html" class="d-block text-center m-auto"><img src="assets/img/c-6.png" class="img-fluid" width="70" alt="" /></a>--}}
{{--                        </div>--}}
{{--                        <div class="job_grid_caption text-center pb-3 px-3">--}}
{{--                            <h4 class="mb-0 ft-medium medium"><a href="employer-detail.html" class="text-dark fs-md">UI/UX Web Designer</a></h4>--}}
{{--                            <div class="jbl_location"><i class="lni lni-map-marker mr-1"></i><span>San Francisco</span></div>--}}
{{--                        </div>--}}
{{--                        <div class="job_grid_footer pt-2 pb-4 px-3 d-flex align-items-center justify-content-between">--}}
{{--                            <div class="row">--}}
{{--                                <div class="df-1 text-muted col-6 mb-2"><i class="lni lni-briefcase mr-1"></i>Web Design</div>--}}
{{--                                <div class="df-1 text-muted col-6 mb-2"><i class="lni lni-wallet mr-1"></i>3-4 Lakhs PA.</div>--}}
{{--                                <div class="df-1 text-muted col-6"><i class="lni lni-users mr-1"></i>02 Vacancy</div>--}}
{{--                                <div class="df-1 text-muted col-6"><i class="lni lni-timer mr-1"></i>3 days ago</div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <!-- Single -->--}}
{{--                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">--}}
{{--                    <div class="job_grid rounded ">--}}
{{--                        <div class="position-absolute ab-left"><button type="button" class="p-3 border circle d-flex align-items-center justify-content-center bg-white text-gray"><i class="lni lni-heart-filled position-absolute snackbar-wishlist"></i></button></div>--}}
{{--                        <div class="position-absolute ab-right"><span class="medium bg-light-danger text-danger px-2 py-1 rounded">Enternship</span></div>--}}
{{--                        <div class="job_grid_thumb mb-3 pt-5 px-3">--}}
{{--                            <a href="job-detail.html" class="d-block text-center m-auto"><img src="assets/img/c-7.png" class="img-fluid" width="70" alt="" /></a>--}}
{{--                        </div>--}}
{{--                        <div class="job_grid_caption text-center pb-3 px-3">--}}
{{--                            <h4 class="mb-0 ft-medium medium"><a href="employer-detail.html" class="text-dark fs-md">UI/UX Web Designer</a></h4>--}}
{{--                            <div class="jbl_location"><i class="lni lni-map-marker mr-1"></i><span>San Francisco</span></div>--}}
{{--                        </div>--}}
{{--                        <div class="job_grid_footer pt-2 pb-4 px-3 d-flex align-items-center justify-content-between">--}}
{{--                            <div class="row">--}}
{{--                                <div class="df-1 text-muted col-6 mb-2"><i class="lni lni-briefcase mr-1"></i>Web Design</div>--}}
{{--                                <div class="df-1 text-muted col-6 mb-2"><i class="lni lni-wallet mr-1"></i>3-4 Lakhs PA.</div>--}}
{{--                                <div class="df-1 text-muted col-6"><i class="lni lni-users mr-1"></i>02 Vacancy</div>--}}
{{--                                <div class="df-1 text-muted col-6"><i class="lni lni-timer mr-1"></i>3 days ago</div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <!-- Single -->--}}
{{--                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">--}}
{{--                    <div class="job_grid rounded ">--}}
{{--                        <div class="position-absolute ab-left"><button type="button" class="p-3 border circle d-flex align-items-center justify-content-center bg-white text-gray"><i class="lni lni-heart-filled position-absolute snackbar-wishlist"></i></button></div>--}}
{{--                        <div class="position-absolute ab-right"><span class="medium bg-light-warning text-warning px-2 py-1 rounded">Part Time</span></div>--}}
{{--                        <div class="job_grid_thumb mb-3 pt-5 px-3">--}}
{{--                            <a href="job-detail.html" class="d-block text-center m-auto"><img src="assets/img/c-8.png" class="img-fluid" width="70" alt="" /></a>--}}
{{--                        </div>--}}
{{--                        <div class="job_grid_caption text-center pb-3 px-3">--}}
{{--                            <h4 class="mb-0 ft-medium medium"><a href="employer-detail.html" class="text-dark fs-md">UI/UX Web Designer</a></h4>--}}
{{--                            <div class="jbl_location"><i class="lni lni-map-marker mr-1"></i><span>San Francisco</span></div>--}}
{{--                        </div>--}}
{{--                        <div class="job_grid_footer pt-2 pb-4 px-3 d-flex align-items-center justify-content-between">--}}
{{--                            <div class="row">--}}
{{--                                <div class="df-1 text-muted col-6 mb-2"><i class="lni lni-briefcase mr-1"></i>Web Design</div>--}}
{{--                                <div class="df-1 text-muted col-6 mb-2"><i class="lni lni-wallet mr-1"></i>3-4 Lakhs PA.</div>--}}
{{--                                <div class="df-1 text-muted col-6"><i class="lni lni-users mr-1"></i>02 Vacancy</div>--}}
{{--                                <div class="df-1 text-muted col-6"><i class="lni lni-timer mr-1"></i>3 days ago</div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--            </div>--}}
{{--            <!-- row -->--}}

{{--            <div class="row justify-content-center">--}}
{{--                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">--}}
{{--                    <div class="position-relative text-center">--}}
{{--                        <a href="job-search-v1.html" class="btn btn-md theme-bg rounded text-light hover-theme">Explore More Jobs<i class="lni lni-arrow-right-circle ml-2"></i></a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--        </div>--}}
{{--    </section>--}}

    <section class="middle gray">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <div class="sec_title position-relative text-center mb-5">
                        <h6 class="text-muted mb-0">Our Reviews</h6>
                        <h2 class="ft-bold">What Our Customer <span class="theme-cl">Saying</span></h2>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <div class="review-slide px-3">

                        <!-- single review -->
                        <div class="single_review px-2">
                            <div class="reviews_wrap position-relative bg-white rounded py-4 px-4">
                                <div class="rw-header d-flex align-items-center justify-content-start">
                                    <div class="rv-110-thumb position-relative verified-author"><img src="assets/img/team-3.jpg" class="img-fluid circle" width="70" alt="" /></div>
                                    <div class="rv-110-caption pl-3">
                                        <h4 class="ft-medium fs-md mb-0 lh-1">Alvin B. Washington</h4>
                                        <p class="p-0 m-0">Co Founder</p>
                                    </div>
                                </div>
                                <div class="rw-header d-flex mt-3">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                </div>
                            </div>
                        </div>

                        <!-- single review -->
                        <div class="single_review px-2">
                            <div class="reviews_wrap position-relative bg-white rounded py-4 px-4">
                                <div class="rw-header d-flex align-items-center justify-content-start">
                                    <div class="rv-110-thumb"><img src="assets/img/team-4.jpg" class="img-fluid circle" width="70" alt="" /></div>
                                    <div class="rv-110-caption pl-3">
                                        <h4 class="ft-medium fs-md mb-0 lh-1">Lavera C. Clifford</h4>
                                        <p class="p-0 m-0">Team Manager</p>
                                    </div>
                                </div>
                                <div class="rw-header d-flex mt-3">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                </div>
                            </div>
                        </div>

                        <!-- single review -->
                        <div class="single_review px-2">
                            <div class="reviews_wrap position-relative bg-white rounded py-4 px-4">
                                <div class="rw-header d-flex align-items-center justify-content-start">
                                    <div class="rv-110-thumb position-relative verified-author"><img src="assets/img/team-2.jpg" class="img-fluid circle" width="70" alt="" /></div>
                                    <div class="rv-110-caption pl-3">
                                        <h4 class="ft-medium fs-md mb-0 lh-1">Linda S. Riggs</h4>
                                        <p class="p-0 m-0">Project Manager</p>
                                    </div>
                                </div>
                                <div class="rw-header d-flex mt-3">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                </div>
                            </div>
                        </div>

                        <!-- single review -->
                        <div class="single_review px-2">
                            <div class="reviews_wrap position-relative bg-white rounded py-4 px-4">
                                <div class="rw-header d-flex align-items-center justify-content-start">
                                    <div class="rv-110-thumb"><img src="assets/img/team-5.jpg" class="img-fluid circle" width="70" alt="" /></div>
                                    <div class="rv-110-caption pl-3">
                                        <h4 class="ft-medium fs-md mb-0 lh-1">Chris L. Hazel</h4>
                                        <p class="p-0 m-0">Web Designer</p>
                                    </div>
                                </div>
                                <div class="rw-header d-flex mt-3">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                </div>
                            </div>
                        </div>

                        <!-- single review -->
                        <div class="single_review px-2">
                            <div class="reviews_wrap position-relative bg-white rounded py-4 px-4">
                                <div class="rw-header d-flex align-items-center justify-content-start">
                                    <div class="rv-110-thumb position-relative verified-author"><img src="assets/img/team-1.jpg" class="img-fluid circle" width="70" alt="" /></div>
                                    <div class="rv-110-caption pl-3">
                                        <h4 class="ft-medium fs-md mb-0 lh-1">Mark Jukerberg</h4>
                                        <p class="p-0 m-0">PHP Developer</p>
                                    </div>
                                </div>
                                <div class="rw-header d-flex mt-3">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="space min pt-0">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <div class="sec_title position-relative text-center mb-4">
                        <h6 class="text-muted mb-0">Latest Artcles</h6>
                        <h2 class="ft-bold">Pickup New <span class="theme-cl">Updates</span></h2>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">


               <livewire:front.list-blogs/>

            </div>

        </div>
    </section>
@endsection
