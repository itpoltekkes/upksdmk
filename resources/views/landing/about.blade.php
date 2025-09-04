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
                <h1 class="breadcumb-title">Tentang Kami</h1>
                <ul class="breadcumb-menu">
                    <li>Unit Pengembangan Kompetensi Sumber Daya Manusia Kesehatan Bandung</li>
                </ul>
            </div>
        </div>
    </div>
   
    <!--==============================
About Area  
==============================-->
    <div class="overflow-hidden overflow-hidden bg-smoke space" id="about-sec" data-bg-src="assets/img/bg/about-5-bg.png">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 mb-50 mb-xl-0">
                    <div class="img-box4">
                        <div class="img1">
                            <img class="tilt-active" src="assets/img/normal/upk2.jpg" alt="About">
                        </div>
                        <div class="about-grid">
                            <h3 class="about-grid_year"><span class="counter-number">1</span>k+</h3>
                            <p class="about-grid_text">Tenaga Kesehatan Telah Dilatih Bersama Kami</p>
                        </div>
                        <div class="img2">
                            <img class="tilt-active" src="assets/img/normal/upk3.jpg" alt="About">
                        </div>
                        <div class="shape1 shape-mockup jump" data-bottom="0" data-left="-46px">
                            <img src="assets/img/normal/about_5_1shape.png" alt="About">
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="title-area mb-35">
                        <span class="sub-title"><i class="fal fa-book me-2"></i> Tentang Kami</span>
                        <h2 class="sec-title">Tentang UPKSDMK Bandung</h2>
                    </div>
                    <p class="mt-n2 mb-25">merupakan singkatan dari Unit Pengembangan Kompetensi Sumber Daya Manusia Kesehatan Bandung. Ini adalah sebuah unit pelatihan yang berada di bawah Politeknik Kesehatan Kemenkes Bandung, bertujuan untuk meningkatkan kompetensi tenaga kesehatan melalui berbagai program pelatihan dan pengembangan profesional.

                    UPKSDMK secara umum berfungsi sebagai pusat unggulan untuk menyelenggarakan pelatihan, pendampingan, dan kegiatan pengembangan kompetensi tenaga kesehatan, sesuai kebutuhan terkini sektor pelayanan kesehatan

                    Pencapaian Akreditasi A menunjukkan bahwa program pelatihan yang diselenggarakan UPKSDMK Bandung memenuhi standar tertinggi dari Kementerian Kesehatan—termasuk dalam kurikulum, metode pengajaran, fasilitas, dan kompetensi instruktur. </p>
                    
                    <div class="row align-items-center">
                        <div class="col-md-auto">
                            <div class="about-grid_img mb-30 mb-md-0">
                                <img src="assets/img/normal/upk4.jpg" alt="img">
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="checklist">
                                <ul>
                                    <li>Pelatihan Tenaga Kesehatan</li>
                                    <li>Workshop dan Sertifikat Kemenkes</li>
                                    <li>Fasilitas Modern</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

     <!--==============================
Service Area  
==============================-->
    <section class="overflow-hidden space">
        <div class="container">
            <div class="title-area text-center">
                <span class="sub-title"><i class="fal fa-book me-2"></i> Apa yang dapat kami lakukan</span>
                <h2 class="sec-title">Pengembangan Kompetensi SDM Kesehatan untuk Indonesia Maju</h2>
            </div>
            <div class="row gy-4 justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="service-card style3">
                        <div class="service-card-content">
                            <div class="service-card-icon">
                                <img src="assets/img/icon/service-icon-3-1.svg" alt="Icon">
                            </div>
                            <h3 class="box-title">Belajar Dari Mana Saja</h3>
                            <p class="service-card-text"> Mendukung pembelajaran berbasis digital dan blended learning, sehingga peserta dapat belajar fleksibel kapan saja dan di mana saja.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="service-card style3">
                        <div class="service-card-content">
                            <div class="service-card-icon">
                                <img src="assets/img/icon/service-icon-3-2.svg" alt="Icon">
                            </div>
                            <h3 class="box-title">Instruktur Profesional</h3>
                            <p class="service-card-text"> Didukung oleh instruktur berpengalaman di bidang kesehatan dan pendidikan, baik akademisi maupun praktisi.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="service-card style3">
                        <div class="service-card-content">
                            <div class="service-card-icon">
                                <img src="assets/img/icon/service-icon-3-3.svg" alt="Icon">
                            </div>
                            <h3 class="box-title">Dukungan 24/7</h3>
                            <p class="service-card-text"> Layanan administrasi dan helpdesk siap membantu kebutuhan peserta pelatihan kapan saja.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop