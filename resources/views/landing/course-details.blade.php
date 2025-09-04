@extends('landing.app2')

@section('content')
<div class="breadcumb-wrapper " data-bg-src="assets/img/bg/breadcumb-bg.jpg" data-overlay="title" data-opacity="8">
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
                <h1 class="breadcumb-title">Courses Details</h1>
                <ul class="breadcumb-menu">
                    <li><a href="index.html">Home</a></li>
                    <li>Courses Details</li>
                </ul>
            </div>
        </div>
    </div>
    <!--==============================
Project Area  
==============================-->
    <!--==============================
Event Area  
==============================-->
    <section class="space-top space-extra2-bottom">
        <div class="container">
            <div class="row">
                <div class="col-xxl-12 col-lg-12">
                    <div class="course-single">
                        <div class="course-single-top">
                            <div class="course-img">
                                <img src="assets/img/course/course-details.png" alt="Course Image">
                                {{-- <span class="tag"><i class="fas fa-clock"></i> 03 WEEKS</span> --}}
                                <span class="tag bg-theme">BEST SELLER</span>
                            </div>
                            <div class="course-meta style2">
                                <span><i class="fal fa-file"></i>Lesson 8</span>
                                <span><i class="fal fa-user"></i>Students 60+</span>
                                <span><i class="fal fa-chart-simple"></i>Beginner</span>
                            </div>
                            <h2 class="course-title">Education Software and PHP and JS System Script</h2>
                            
                        </div>
                        <div class="course-single-bottom">
                            <ul class="nav course-tab" id="courseTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link active" id="description-tab" data-bs-toggle="tab" href="#Coursedescription" role="tab" aria-controls="Coursedescription" aria-selected="true"><i class="fa-regular fa-bookmark"></i>Overview</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="productTabContent">
                                <div class="tab-pane fade show active" id="Coursedescription" role="tabpanel" aria-labelledby="description-tab">
                                    <div class="course-description">
                                        <h5 class="h5">Description</h5>
                                        <p>Rapidiously develop parallel e-markets via worldwide paradigms. Quickly synergize cutting-edge scenarios and professional results. Assertively deliver cross-media results before client-centric results. Uniquely initiate intuitive communities through process-centric internal or "organic" sources. Energistically reinvent distinctive value via parallel services. Phosfluorescently deploy extensive paradigms vis-a-vis cross-unit manufactured products. Uniquely coordinate impactful services whereas team building e-services. Globally grow multimedia based benefits vis-a-vis client-based niches.</p>
                                        <p>Professionally expedite synergistic technology without out-of-the-box human capital. Enthusiastically coordinate state of the art leadership after professional manufactured products. Distinctively enhance future-proof e-services whereas functionalized partnerships. Quickly streamline focused paradigms via orthogonal "outside the box" thinking. Rapidiously administrate 2.0 total linkage for cross-platform channels.</p>
                                        <h5 class="h5 mt-40">What Will You Learn?</h5>
                                        <p>Quickly synergize cutting-edge scenarios and professional results. Assertively deliver cross-media results before client-centric results. Uniquely initiate intuitive communities through process-centric internal or "organic" sources. Energistically reinvent distinctive value via parallel services extensive paradigms cross-unit manufactured products.</p>
                                        <div class="row mt-25">
                                            <div class="col-lg-6">
                                                <div class="checklist mb-4">
                                                    <ul>
                                                        <li>Learn Figma Basic to Advanced Design</li>
                                                        <li>Justo non mauris pretium at tempor justo.</li>
                                                        <li>Phasellus enim magna, varius et comm.</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="checklist">
                                                    <ul>
                                                        <li>Ut nullar Tellus, leafed eulimid pellet</li>
                                                        <li>Phaseolus denim magna various.</li>
                                                        <li>Sed consequent just non mauri's.</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <h5 class="h5 mt-40">Certification</h5>
                                        <p>It is designed to validate the knowledge, skills, and competencies of individuals in a specific area of study or professional field. The certification program is meticulously designed to ensure that candidates have acquired a comprehensive understanding of the subject matter. It encompasses both theoretical knowledge and practical application, allowing candidates to demonstrate their expertise in real-world scenarios.</p>
                                    </div>
                                    <a href="cart.html" class="th-btn style ">Buy Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
@stop