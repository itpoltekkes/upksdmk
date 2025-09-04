@extends('landing.app2')

@section('content')
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
                                {{-- <img src="assets/img/course/course-details.png" alt="Course Image"> --}}
                                {{-- <span class="tag"><i class="fas fa-clock"></i> 03 WEEKS</span> --}}
                                <span class="tag bg-theme">BEST SELLER</span>
                            </div>
                            <div class="course-meta style2">
                                <span><i class="fal fa-file"></i>55 JPL</span>
                                <span><i class="fal fa-user"></i>25 Peserta</span>
                                <span><i class="fal fa-file"></i>15 SKP</span>
                            </div>
                            <h2 class="course-title">Emergency Dental</h2>
                            
                        </div>
                        <div class="course-single-bottom">
                            <ul class="nav course-tab" id="courseTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link active" id="description-tab" data-bs-toggle="tab" href="#Coursedescription" role="tab" aria-controls="Coursedescription" aria-selected="true"><i class="fa-regular fa-bookmark"></i>Ringkasan</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="productTabContent">
                                <div class="tab-pane fade show active" id="Coursedescription" role="tabpanel" aria-labelledby="description-tab">
                                    <div class="course-description">
                                        <h5 class="h5">Tentang Pelatihan</h5>
                                        <p>Terapis Gigi dan Mulut, bertujuan untuk memberikan pelatihan dalam meningkatkan
                                            kemampuan penanganan kegawatdaruratan bagi terapis gigi dan mulut dalam memberikan
                                            pelayanan sesuai kompetensinya</p>
                                        <h5 class="h5 mt-40">Target peserta</h5>
                                        <div class="row mt-25">
                                            <div class="col-lg-6">
                                                <div class="checklist mb-4">
                                                    <ul>
                                                        <li>Terapis Gigi</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="https://forms.gle/2Xgh5JwZ5nZdbhRr5" class="th-btn style ">Daftar Pelatihan</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    
@stop