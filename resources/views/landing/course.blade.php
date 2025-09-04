@extends('landing.app2')

@section('content')
<!--==============================
    Breadcumb
============================== -->
    <div class="breadcumb-wrapper " data-bg-src="assets/img/bg/bg.jpg" data-overlay="title" data-opacity="8">
        <div class="breadcumb-shape" data-bg-src="assets/img/bg/breadcumb_shape_1_1.png">
        </div>
        <div class="shape-mockup breadcumb-shape2 jump d-lg-block d-none" data-right="30px" data-bottom="30px">
            <img src="assets/img/bg/breadcumb_shape_1_2.png" alt="shape">
        </div>
        <div class="shape-mockup breadcumb-shape3 jump-reverse d-lg-block d-none" data-left="50px" data-bottom="80px">
            <img src="assets/img/bg/breadcumb_shape_1_3.png" alt="shape">
        </div>
        <div class="container">
            <div class="breadcumb-content text-center">
                <h1 class="breadcumb-title">Semua Pembelajaran</h1>
                <ul class="breadcumb-menu">
                    <li>Pelajari beragam topik dari mentor yang berpengalaman di bidangnya</li>
                </ul>
            </div>
        </div>
    </div>
    <!--==============================
Project Area  
==============================-->
    <!--==============================
Servce Area  
==============================-->
    <section class="space-top space-extra2-bottom">
        <div class="container">
            <div class="row">
                <div class="col-xl-9 col-lg-8 order-lg-2">
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade" id="tab-grid" role="tabpanel" aria-labelledby="tab-shop-grid">
                        </div>
                        <div class="tab-pane fade active show" id="tab-list" role="tabpanel" aria-labelledby="tab-shop-list">
                            <div class="row gy-30">
                                <div class="col-md-6 col-xl-4">
                                    <div class="course-box style2">
                                        <div class="course-img">
                                            <img src="assets/img/course/course_1_1.png" alt="img">
                                        </div>
                                        <div class="course-content">
                                            <div class="course-rating">
                                                <div class="star-rating" role="img" aria-label="Rated 4.00 out of 5">
                                                    <span style="width:79%">Rated <strong class="rating">4.00</strong> out of 5</span>
                                                </div>(4.7)
                                            </div>
                                            <h3 class="course-title"><a href="/preceptor-mentorship">Preceptor Mentorship</a></h3>
                                            <div class="course-meta">
                                                <span><i class="fal fa-file"></i>55 JPL</span>
                                                <span><i class="fal fa-user"></i>25 Peserta</span>
                                                <span><i class="fal fa-file"></i>15 SKP</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 col-xl-4">
                                    <div class="course-box style2">
                                        <div class="course-img">
                                            <img src="assets/img/course/course_1_1.png" alt="img">
                                        </div>
                                        <div class="course-content">
                                            <div class="course-rating">
                                                <div class="star-rating" role="img" aria-label="Rated 4.00 out of 5">
                                                    <span style="width:79%">Rated <strong class="rating">4.00</strong> out of 5</span>
                                                </div>(4.7)
                                            </div>
                                            <h3 class="course-title"><a href="/btcls">Pelatihan Basic Trauma Cardiac Life Support (BTCLS)</a></h3>
                                            <div class="course-meta">
                                                <span><i class="fal fa-file"></i>55 JPL</span>
                                                <span><i class="fal fa-user"></i>25 Peserta</span>
                                                <span><i class="fal fa-file"></i>15 SKP</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 col-xl-4">
                                    <div class="course-box style2">
                                        <div class="course-img">
                                            <img src="assets/img/course/course_1_1.png" alt="img">
                                        </div>
                                        <div class="course-content">
                                            <div class="course-rating">
                                                <div class="star-rating" role="img" aria-label="Rated 4.00 out of 5">
                                                    <span style="width:79%">Rated <strong class="rating">4.00</strong> out of 5</span>
                                                </div>(4.7)
                                            </div>
                                            <h3 class="course-title"><a href="/dental">Emergency Dental</a></h3>
                                            <div class="course-meta">
                                                <span><i class="fal fa-file"></i>55 JPL</span>
                                                <span><i class="fal fa-user"></i>25 Peserta</span>
                                                <span><i class="fal fa-file"></i>15 SKP</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 order-lg-1">
                    <aside class="sidebar-area sidebar-shop">
                        <div class="widget widget_search  ">
                            <form class="search-form">
                                <input type="text" placeholder="Cari Pembelajaran">
                                <button type="submit"><i class="far fa-search"></i></button>
                            </form>
                        </div>
                        <div class="widget widget_categories style2  ">
                            <h3 class="widget_title">Program Pembelajaran</h3>
                            <ul>
                                <li>
                                    <ul class="sub-cat">
                                        <li><input id="pelatihanCheck" name="pelatihanCheck" type="checkbox">
                                            <label for="pelatihanCheck">Pelatihan<span class="checkmark"></span>
                                        </li>
                                        <li><input id="designcheck" name="designcheck" type="checkbox" >
                                            <label for="designcheck">Workshop<span class="checkmark"></span>
                                        </li>
                                        <li><input id="devcheck" name="devcheck" type="checkbox">
                                            <label for="devcheck">Webinar<span class="checkmark"></span>
                                        </li>
                                        <li><input id="photocheck" name="photocheck" type="checkbox">
                                            <label for="photocheck">Konferensi<span class="checkmark"></span>
                                        </li>
                                        <li><input id="musiccheck" name="musiccheck" type="checkbox">
                                            <label for="musiccheck">Seminar<span class="checkmark"></span>
                                        </li>
                                        
                                    </ul>
                                </li>
                                
                            </ul>
                        </div>
                        <div class="widget widget_price_filter style2  ">
                            <h4 class="widget_title">Biaya</h4>
                            <ul>
                                <li><input id="freecheck" name="freecheck" type="checkbox" checked>
                                    <label for="freecheck">Gratis<span class="checkmark"></span></label>
                                </li>
                                <li><input id="paidcheck" name="paidcheck" type="checkbox">
                                    <label for="paidcheck">Bayar<span class="checkmark"></span></label>
                                </li>
                            </ul>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </section>
@stop