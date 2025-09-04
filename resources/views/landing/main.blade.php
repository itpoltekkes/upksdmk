@extends('landing.app')

@section('content')
<!--==============================
Hero Area
==============================-->
    <div class="th-hero-wrapper hero-1" id="hero">
        <div class="hero-slider-1 th-carousel" data-fade="true" data-slide-show="1" data-md-slide-show="1" data-dots="true">

            <div class="th-hero-slide">
                <div class="th-hero-bg" data-overlay="title" data-opacity="8" data-bg-src="assets/img/hero/hero_bg_1_3.jpg"></div>
                <div class="container">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-md-6">
                            <div class="hero-style1">
        
                                <h1 class="hero-title text-white" data-ani="slideinleft" data-ani-delay="0.4s">Selamat Datang di UPK SDMK <span class="text-theme">BANDUNG.</span></h1>
                                <p class="hero-text" data-ani="slideinleft" data-ani-delay="0.6s">semoga menjadi langkah awal untuk meningkatkan kompetensi, membangun karakter, dan memperluas wawasan kita.</p>
                                <div class="btn-group" data-ani="slideinleft" data-ani-delay="0.8s">
                                    <!-- <a href="contact.html" class="th-btn style3">Get Started<i class="fas fa-arrow-right ms-2"></i></a> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 text-lg-end text-center">
                            <div class="hero-img1">
                                <img src="assets/img/hero/hero_thumb_1_3.jpg" alt="hero">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hero-shape shape1">
                    <img src="assets/img/hero/shape_1_1.png" alt="shape">
                </div>
                <div class="hero-shape shape2">
                    <img src="assets/img/hero/shape_1_2.png" alt="shape">
                </div>
                <div class="hero-shape shape3"></div>

                <div class="hero-shape shape4 shape-mockup jump-reverse" data-right="3%" data-bottom="7%">
                    <img src="assets/img/hero/shape_1_3.png" alt="shape">
                </div>
                <div class="hero-shape shape5 shape-mockup jump-reverse" data-left="0" data-bottom="0">
                    <img src="assets/img/hero/shape_1_4.png" alt="shape">
                </div>
            </div>
        </div>
    </div>
    <!--======== / Hero Section ========-->

    <!--==============================
About Area  
==============================-->
    <div class="space overflow-hidden" id="about-sec">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6">
                    <div class="img-box1 mb-40 mb-xl-0">
                        <div class="img1">
                            <img class="tilt-active" src="assets/img/normal/upk.jpg" alt="About">
                        </div>
                        <div class="shape-mockup about-shape1 jump" data-left="-67px" data-bottom="0">
                            <img src="assets/img/normal/about_1_shape1.png" alt="img">
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="title-area mb-30">
                        <span class="sub-title"><i class="fal fa-book me-2"></i> Tentang UPKSDMK Bandung</span>
                        <h2 class="sec-title">Selamat datang di UPKSDMK Bandung</h2>
                    </div>
                    <p class="mt-n2 mb-25">merupakan singkatan dari Unit Pengembangan Kompetensi Sumber Daya Manusia Kesehatan Bandung. Ini adalah sebuah unit pelatihan yang berada di bawah Politeknik Kesehatan Kemenkes Bandung, bertujuan untuk meningkatkan kompetensi tenaga kesehatan melalui berbagai program pelatihan dan pengembangan profesional. </p>
                    <p class="mb-30">UPKSDMK secara umum berfungsi sebagai pusat unggulan untuk menyelenggarakan pelatihan, pendampingan, dan kegiatan pengembangan kompetensi tenaga kesehatan, sesuai kebutuhan terkini sektor pelayanan kesehatan</p>
                    <p class="mb-30">Pencapaian Akreditasi A menunjukkan bahwa program pelatihan yang diselenggarakan UPKSDMK Bandung memenuhi standar tertinggi dari Kementerian Kesehatan—termasuk dalam kurikulum, metode pengajaran, fasilitas, dan kompetensi instruktur. </p>
                    
                    <div class="btn-group mt-40">
                        <!-- <a href="about.html" class="th-btn">Selengkapnya<i class="fa-regular fa-arrow-right ms-2"></i></a> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--==============================
Servce Area  
==============================-->
    <section class="space" data-bg-src="assets/img/bg/course_bg_1.png" id="course-sec">
        <div class="container">
            <div class="mb-35 text-center text-md-start">
                <div class="row align-items-center justify-content-between">
                    <div class="col-md-8">
                        <div class="title-area mb-md-0">
                            <span class="sub-title"><i class="fal fa-book me-2"></i> Pelatihan dan Peningkatan Kompetensi</span>
                            <h2 class="sec-title">Kegiatan yang akan datang</h2>
                        </div>
                    </div>
                    <div class="col-md-auto">
                        <!-- <a href="course.html" class="th-btn">Lihat Semua<i class="fa-solid fa-arrow-right ms-2"></i></a> -->
                    </div>
                </div>
            </div>
            <div class="row slider-shadow th-carousel course-slider-1" data-slide-show="4" data-ml-slide-show="3" data-lg-slide-show="3" data-md-slide-show="2" data-sm-slide-show="1" data-arrows="true">
                <div class="col-md-6 col-lg-4">
                    <div class="course-box">
                        <div class="course-img">
                            <img src="assets/img/course/btcls.jpg" alt="img">
                        </div>
                        <div class="course-content">
                            <div class="course-rating">
                                <div class="star-rating" role="img" aria-label="Rated 4.00 out of 5">
                                    <span style="width:79%">Rated <strong class="rating">4.50</strong> out of 5</span>
                                </div>(4.7)
                            </div>
                            <h3 class="course-title"><a href="/btcls">Pelatihan Basic Trauma Cardiac Life Support (BTCLS)</a></h3>
                            <div class="course-meta">
                                <span><i class="fal fa-file"></i>55 JPL</span>
                                <span><i class="fal fa-user"></i>Kuota 25 Peserta</span>
                                <span><i class="fal fa-chart-simple"></i>Pemula</span>
                            </div>
                            <div class="course-author">
                                <div class="offer-tag">Rp. 1.500.000</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="course-box">
                        <div class="course-img">
                            <img src="assets/img/course/flyerCI.jpg" alt="img">
                        </div>
                        <div class="course-content">
                            <div class="course-rating">
                                <div class="star-rating" role="img" aria-label="Rated 4.00 out of 5">
                                    <span style="width:79%">Rated <strong class="rating">4.00</strong> out of 5</span>
                                </div>(4.7)
                            </div>
                            <h3 class="course-title"><a href="/preceptor-mentorship">Preceptorship dan Mentorship</a></h3>
                            <div class="course-meta">
                                <span><i class="fal fa-file"></i>55 JPL</span>
                                <span><i class="fal fa-user"></i>Kuota 30 Peserta</span>
                                <span><i class="fal fa-chart-simple"></i>Pemula</span>
                            </div>
                            <div class="course-author">
                                
                                <div class="offer-tag">Rp. 1.250.000</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="course-box">
                        <div class="course-img">
                            <img src="assets/img/course/no-image.png" alt="img">
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
                                <span><i class="fal fa-user"></i>Kuota 25 Peserta</span>
                                <span><i class="fal fa-chart-simple"></i>Peserta</span>
                            </div>
                            <div class="course-author">
                                <div class="offer-tag">Rp. 1.500.000</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--==============================
Why choose us Area  
==============================-->
    <div class="why-area-1 space overflow-hidden">

        <div class="shape-mockup why-shape-1 jump" data-top="10%" data-left="7%">
            <img src="assets/img/normal/about_1_shape1.png" alt="img">
        </div>

        <div class="shape-mockup why-shape-2" data-bg-src="assets/img/normal/wcu_1_shape1.png"></div>

        <div class="shape-mockup why-shape-3 jump-reverse" data-bottom="25%" data-right="-3%">
            <img src="assets/img/normal/wcu_1_shape1.png" alt="img">
        </div>

        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6">
                    <div class="wcu-img-1">
                        <div class="img1">
                            <img src="assets/img/normal/upk2.jpg" alt="img">
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="wcu-wrap1">
                        <div class="title-area mb-25">
                            <span class="sub-title"><i class="fal fa-book me-2"></i> WHY CHOOSE US</span>
                        </div>
                        <div class="row gy-4">
                            <div class="col-md-6">
                                <div class="wcu-box">
                                    <div class="wcu-box_icon">
                                        <i class="fas fa-check-circle"></i>
                                    </div>
                                    <div class="wcu-box_details">
                                        <h3 class="box-title">Akreditasi A dari Kemenkes</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="wcu-box">
                                    <div class="wcu-box_icon">
                                        <i class="fas fa-check-circle"></i>
                                    </div>
                                    <div class="wcu-box_details">
                                        <h3 class="box-title">Fasilitas Lengkap & Berbasis Teknologi</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="wcu-box">
                                    <div class="wcu-box_icon">
                                        <i class="fas fa-check-circle"></i>
                                    </div>
                                    <div class="wcu-box_details">
                                        <h3 class="box-title">Pengajar Berpengalaman & Tersertifikasi</h3>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="wcu-box">
                                    <div class="wcu-box_icon">
                                        <i class="fas fa-check-circle"></i>
                                    </div>
                                    <div class="wcu-box_details">
                                        <h3 class="box-title">Sertifikat Resmi yang Diakui Nasional</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--==============================
Counter Area  
==============================-->
    <div class="container">
        <div class="counter-area-1 bg-theme" data-bg-src="assets/img/bg/counter-bg_1.png">
            <div class="row justify-content-between">
                <div class="col-sm-6 col-xl-4 counter-card-wrap">
                    <div class="counter-card">
                        <h2 class="counter-card_number"><span class="counter-number">3.9</span>k<span class="fw-normal">+</span></h2>
                        <p class="counter-card_text"><strong>Pelatihan</strong> Selesai</p>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-4 counter-card-wrap">
                    <div class="counter-card">
                        <h2 class="counter-card_number"><span class="counter-number">15.8</span>k<span class="fw-normal">+</span></h2>
                        <p class="counter-card_text"><strong>Peningkatan Kompetensi</strong> Selesai</p>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-4 counter-card-wrap">
                    <div class="counter-card">
                        <h2 class="counter-card_number"><span class="counter-number">97.5</span>k<span class="fw-normal">+</span></h2>
                        <p class="counter-card_text"><strong>Peserta</strong> Lulus</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--==============================
Team Area  
==============================-->
    <div class="team-area overflow-hidden space" id="team-sec">
        <div class="shape-mockup team-bg-shape1 jump-reverse d-xxl-block d-none" data-left="-2%" data-top="0">
            <img src="assets/img/team/team-shape_1_1.png" alt="img">
        </div>

        <div class="shape-mockup team-bg-shape2 jump d-xxl-block d-none" data-left="40%" data-top="20%">
            <img src="assets/img/team/team-shape_1_2.png" alt="img">
        </div>

        <div class="shape-mockup team-bg-shape3 jump" data-left="5%" data-bottom="9%">
            <img src="assets/img/team/team-shape_1_3.png" alt="img">
        </div>

        <div class="shape-mockup team-bg-shape4 spin" data-left="40%" data-bottom="20%">
            <img src="assets/img/team/team-shape_1_4.png" alt="img">
        </div>

        <div class="shape-mockup team-bg-shape5 jump d-lg-block d-none" data-right="-7%" data-top="10%">
            <img src="assets/img/team/team-shape_1_5.png" alt="img">
        </div>

        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 mb-40 mb-xl-0">
                    <div class="title-area mb-30">
                        <span class="sub-title"><i class="fal fa-book me-2"></i> Instruktur</span>
                        <h2 class="sec-title">Pengajar Kami</h2>
                        <p class="sec-text mt-20">Di UPKSDMK Bandung, kami percaya bahwa keberhasilan pembelajaran berawal dari pengajar yang berkompeten dan berdedikasi. Tim instruktur kami terdiri dari para profesional di bidang kesehatan yang memiliki Pengalaman luas di lapangan dan dunia pendidikan ,  Kualifikasi akademik dan sertifikasi resmi dari lembaga terpercaya dan Komitmen tinggi untuk membimbing peserta mencapai kompetensi terbaik</p>
                        <p class="sec-text">Dengan perpaduan teori terkini, praktik langsung, dan pendekatan pembelajaran yang interaktif, instruktur kami siap membantu Anda menguasai keterampilan yang relevan dan teruji.</p>
                    </div>
                   
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="team-card team-card-1-1 team-card-1-1-active mt-0">
                        <div class="team-img-wrap">
                            <div class="team-img">
                                <img src="assets/img/team/1-1.jpeg" alt="Team">
                            </div>
                        </div>
                        <div class="team-hover-wrap">
                            <div class="team-social">
                                <a href="#" class="icon-btn">
                                    <i class="far fa-plus"></i>
                                </a>
                                <div class="th-social">
                                    <a target="_blank" href="https://vimeo.com/"><i class="fab fa-vimeo-v"></i></a>
                                    <a target="_blank" href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                    <a target="_blank" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                                    <a target="_blank" href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                </div>
                            </div>
                            <div class="team-content">
                                <h3 class="team-title"><a href="team-details.html">Dr Asep Setiawan, SKp., M.Kes</a></h3>
                                <span class="team-desig">Fasilitator</span>
                            </div>
                        </div>
                    </div>
                    <div class="team-card team-card-1-1">
                        <div class="team-img-wrap">
                            <div class="team-img">
                                <img src="assets/img/team/1-4.jpeg" alt="Team">
                            </div>
                        </div>
                        <div class="team-hover-wrap">
                            <div class="team-social">
                                <a href="#" class="icon-btn">
                                    <i class="far fa-plus"></i>
                                </a>
                                <div class="th-social">
                                    <a target="_blank" href="https://vimeo.com/"><i class="fab fa-vimeo-v"></i></a>
                                    <a target="_blank" href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                    <a target="_blank" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                                    <a target="_blank" href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                </div>
                            </div>
                            <div class="team-content">
                                <h3 class="team-title"><a href="team-details.html">Dr. Anah Sasmita, S.Kp.,M.Kes</a></h3>
                                 <span class="team-desig">Fasilitator</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="team-card team-card-1-2 mt-md-0">
                        <div class="team-img-wrap">
                            <div class="team-img">
                                <img src="assets/img/team/1-2.jpg" alt="Team">
                            </div>
                        </div>
                        <div class="team-hover-wrap">
                            <div class="team-social">
                                <a href="#" class="icon-btn">
                                    <i class="far fa-plus"></i>
                                </a>
                                <div class="th-social">
                                    <a target="_blank" href="https://vimeo.com/"><i class="fab fa-vimeo-v"></i></a>
                                    <a target="_blank" href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                    <a target="_blank" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                                    <a target="_blank" href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                </div>
                            </div>
                            <div class="team-content">
                                <h3 class="team-title"><a href="team-details.html">Iim Susanti, S.Kep.,Ners</a></h3>
                                <span class="team-desig">Fasilitator</span>
                            </div>
                        </div>
                    </div>
                    <div class="team-card team-card-1-2 team-card-1-2-active">
                        <div class="team-img-wrap">
                            <div class="team-img">
                                <img src="assets/img/team/1-3.jpg" alt="Team">
                            </div>
                        </div>
                        <div class="team-hover-wrap">
                            <div class="team-social">
                                <a href="#" class="icon-btn">
                                    <i class="far fa-plus"></i>
                                </a>
                                <div class="th-social">
                                    <a target="_blank" href="https://vimeo.com/"><i class="fab fa-vimeo-v"></i></a>
                                    <a target="_blank" href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                    <a target="_blank" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                                    <a target="_blank" href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                </div>
                            </div>
                            <div class="team-content">
                                <h3 class="team-title"><a href="team-details.html">Lubis Bambang, M.Kes.</a></h3>
                                <span class="team-desig">Pengendali Pelatihan</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--==============================
Contact Area  
==============================-->
    <div class="space-top">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="title-area mb-lg-0 text-lg-start text-center">
                        <span class="sub-title"><i class="fal fa-book me-2"></i>Kerjasama</span>
                        <h2 class="sec-title mb-0">Mitra Kami <span class="text-theme"><span class="counter-number">7</h2>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="client-wrap text-lg-end text-center">
                        <div class="row gy-40">
                            <div class="col-3">
                                <a href="blog.html" class="client-thumb">
                                    <img src="assets/img/client/hpgabi.jpg" alt="img">
                                </a>
                            </div>
                            <div class="col-3">
                                <a href="blog.html" class="client-thumb">
                                    <img src="assets/img/client/hpmi.jpg" alt="img">
                                </a>
                            </div>
                            <div class="col-3">
                                <a href="blog.html" class="client-thumb">
                                    <img src="assets/img/client/ikmi.jpg" alt="img">
                                </a>
                            </div>
                            <div class="col-3">
                                <a href="blog.html" class="client-thumb">
                                    <img src="assets/img/client/dinkeskrw.png" alt="img">
                                </a>
                            </div>
                            <div class="col-3">
                                <a href="blog.html" class="client-thumb">
                                    <img src="assets/img/client/ppni.png" alt="img">
                                </a>
                            </div>
                            <div class="col-3">
                                <a href="blog.html" class="client-thumb">
                                    <img src="assets/img/client/anhata.jpg" alt="img">
                                </a>
                            </div>
                            <div class="col-3">
                                <a href="blog.html" class="client-thumb">
                                    <img src="assets/img/client/bali.jpg" alt="img">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--==============================
Testimonial Area  
==============================-->
    <section class="testi-area-1 overflow-hidden space-bottom" data-bg-src="assets/img/bg/testi_bg_1.png">
        <div class="shape-mockup testi-bg-shape1 jump" data-right="0" data-top="50%">
            <img src="assets/img/testimonial/testi-bg-shape_1_1.png" alt="img">
        </div>
        <div class="shape-mockup testi-bg-shape2 spin" data-left="0" data-top="15%">
            <img src="assets/img/testimonial/testi-bg-shape_1_2.png" alt="img">
        </div>
        <div class="container">
            <div class="title-area text-center mb-50">
                <span class="sub-title"><i class="fal fa-book me-2"></i> Testimoni</span>
                <h2 class="sec-title">Kata mereka</h2>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="th-carousel testi-slider1 dot-style2 row" id="testimonial-slider1" data-slide-show="2" data-ml-slide-show="2" data-lg-slide-show="1" data-md-slide-show="1" data-dots="true" data-arrows="false">
                        <div class="col-lg-6">
                            <div class="testi-box">
                                <div class="testi-box-bg-shape">
                                    <svg width="150" height="137" viewBox="0 0 150 137" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0 9.99951C0 4.47666 4.47715 -0.000488281 10 -0.000488281H140C145.523 -0.000488281 150 4.47666 150 9.99951V10.5803C150 13.3951 148.814 16.0796 146.732 17.9747L18.8619 134.394C17.0205 136.07 14.6199 137 12.1297 137H10C4.47715 137 0 132.522 0 127V9.99951Z" fill="#0D5EF4" />
                                    </svg>
                                </div>
                                <div class="testi-box_content">
                                    <div class="testi-box_img">
                                        <img src="assets/img/testimonial/f.png" alt="Avater">
                                    </div>
                                    <p class="testi-box_text">“Sebagai calon tenaga kesehatan, saya merasa beruntung bisa mengikuti pelatihan di sini. Ilmu dan pengalaman yang saya dapat menjadi bekal berharga untuk karier ke depan”</p>
                                </div>
                                <div class="testi-box_bottom">
                                    <div>
                                        <h3 class="testi-box_name">Siti Nurjanah</h3>
                                        <span class="testi-box_desig">Peserta Pelatihan Keperawatan Gawat Darurat</span>
                                    </div>
                                    <div class="testi-box_review">
                                        <i class="fa-solid fa-star-sharp"></i>
                                        <i class="fa-solid fa-star-sharp"></i>
                                        <i class="fa-solid fa-star-sharp"></i>
                                        <i class="fa-solid fa-star-sharp"></i>
                                        <i class="fa-solid fa-star-sharp"></i>
                                        (4.7)
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="testi-box">
                                <div class="testi-box-bg-shape">
                                    <svg width="150" height="137" viewBox="0 0 150 137" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0 9.99951C0 4.47666 4.47715 -0.000488281 10 -0.000488281H140C145.523 -0.000488281 150 4.47666 150 9.99951V10.5803C150 13.3951 148.814 16.0796 146.732 17.9747L18.8619 134.394C17.0205 136.07 14.6199 137 12.1297 137H10C4.47715 137 0 132.522 0 127V9.99951Z" fill="#0D5EF4" />
                                    </svg>
                                </div>
                                <div class="testi-box_content">
                                    <div class="testi-box_img">
                                        <img src="assets/img/testimonial/m.png" alt="Avater">
                                    </div>
                                    <p class="testi-box_text">“Kami mengirim beberapa staf untuk pelatihan di UPKSDMK Bandung, hasilnya terlihat nyata. Kinerja mereka meningkat dan lebih percaya diri.”</p>
                                </div>
                                <div class="testi-box_bottom">
                                    <div>
                                        <h3 class="testi-box_name">Drs. Hendra Santoso</h3>
                                        <span class="testi-box_desig">Kepala Puskesmas</span>
                                    </div>
                                    <div class="testi-box_review">
                                        <i class="fa-solid fa-star-sharp"></i>
                                        <i class="fa-solid fa-star-sharp"></i>
                                        <i class="fa-solid fa-star-sharp"></i>
                                        <i class="fa-solid fa-star-sharp"></i>
                                        <i class="fa-solid fa-star-sharp"></i>
                                        (4.7)
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="testi-box">
                                <div class="testi-box-bg-shape">
                                    <svg width="150" height="137" viewBox="0 0 150 137" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0 9.99951C0 4.47666 4.47715 -0.000488281 10 -0.000488281H140C145.523 -0.000488281 150 4.47666 150 9.99951V10.5803C150 13.3951 148.814 16.0796 146.732 17.9747L18.8619 134.394C17.0205 136.07 14.6199 137 12.1297 137H10C4.47715 137 0 132.522 0 127V9.99951Z" fill="#0D5EF4" />
                                    </svg>
                                </div>
                                <div class="testi-box_content">
                                    <div class="testi-box_img">
                                        <img src="assets/img/testimonial/f.png" alt="Avater">
                                    </div>
                                    <p class="testi-box_text">“Lokasinya strategis, sertifikatnya diakui secara nasional, dan pembelajarannya dikemas dengan cara yang interaktif. Sangat puas!”</p>
                                </div>
                                <div class="testi-box_bottom">
                                    <div>
                                        <h3 class="testi-box_name">Yuliana Pertiwi, A.Md.Keb</h3>
                                        <span class="testi-box_desig">Pelatihan Kader Posyandu</span>
                                    </div>
                                    <div class="testi-box_review">
                                        <i class="fa-solid fa-star-sharp"></i>
                                        <i class="fa-solid fa-star-sharp"></i>
                                        <i class="fa-solid fa-star-sharp"></i>
                                        <i class="fa-solid fa-star-sharp"></i>
                                        <i class="fa-solid fa-star-sharp"></i>
                                        (4.7)
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="testi-box">
                                <div class="testi-box-bg-shape">
                                    <svg width="150" height="137" viewBox="0 0 150 137" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0 9.99951C0 4.47666 4.47715 -0.000488281 10 -0.000488281H140C145.523 -0.000488281 150 4.47666 150 9.99951V10.5803C150 13.3951 148.814 16.0796 146.732 17.9747L18.8619 134.394C17.0205 136.07 14.6199 137 12.1297 137H10C4.47715 137 0 132.522 0 127V9.99951Z" fill="#0D5EF4" />
                                    </svg>
                                </div>
                                <div class="testi-box_content">
                                    <div class="testi-box_img">
                                        <img src="assets/img/testimonial/m.png" alt="Avater">
                                    </div>
                                    <p class="testi-box_text">“Pelatihannya intensif namun menyenangkan. Instruktur membimbing dengan sabar dan memberikan simulasi kasus yang sangat realistis.”</p>
                                </div>
                                <div class="testi-box_bottom">
                                    <div>
                                        <h3 class="testi-box_name">Ahmad Setiawan, S.Kep., Ns</h3>
                                        <span class="testi-box_desig">Peserta Pelatihan Keperawatan Gawat Darurat</span>
                                    </div>
                                    <div class="testi-box_review">
                                        <i class="fa-solid fa-star-sharp"></i>
                                        <i class="fa-solid fa-star-sharp"></i>
                                        <i class="fa-solid fa-star-sharp"></i>
                                        <i class="fa-solid fa-star-sharp"></i>
                                        <i class="fa-solid fa-star-sharp"></i>
                                        (4.7)
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--==============================
Blog Area  
==============================-->
    <!-- <section class="overflow-hidden space" id="blog-sec">
        <div class="container">
            <div class="mb-35 text-center text-md-start">
                <div class="row align-items-center justify-content-between">
                    <div class="col-md-8">
                        <div class="title-area mb-md-0">
                            <span class="sub-title"><i class="fal fa-book me-2"></i> Berita</span>
                            <h2 class="sec-title">Berita Terkini</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row slider-shadow th-carousel blog-slider-1" data-slide-show="3" data-lg-slide-show="2" data-md-slide-show="2" data-sm-slide-show="1" data-arrows="true">
                <div class="col-md-6 col-xl-4">
                    <div class="th-blog blog-single style2">
                        <div class="blog-img">
                            <a href="blog-details.html"><img src="assets/img/blog/blog-1-1.jpg" alt="Blog Image"></a>
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <a class="author" href="blog.html"><i class="fa-light fa-user"></i>by David Smith</a>
                                <a href="blog.html"><i class="fa-light fa-clock"></i>05 Jun, 2023</a>
                            </div>
                            <h4 class="box-title"><a href="blog-details.html">Educate, Empower, Excel: Discover the Power of Learning!</a>
                            </h4>
                            <a href="blog-details.html" class="link-btn">Read More Details<i class="fas fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-xl-4">
                    <div class="th-blog blog-single style2">
                        <div class="blog-img">
                            <a href="blog-details.html"><img src="assets/img/blog/blog-1-2.jpg" alt="Blog Image"></a>
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <a class="author" href="blog.html"><i class="fa-light fa-user"></i>by David Smith</a>
                                <a href="blog.html"><i class="fa-light fa-clock"></i>03 Jun, 2023</a>
                            </div>
                            <h4 class="box-title"><a href="blog-details.html">Enrich Your Mind, Envision Your Future: Education for Success</a>
                            </h4>
                            <a href="blog-details.html" class="link-btn">Read More Details<i class="fas fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-xl-4">
                    <div class="th-blog blog-single style2">
                        <div class="blog-img">
                            <a href="blog-details.html"><img src="assets/img/blog/blog-1-3.jpg" alt="Blog Image"></a>
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <a class="author" href="blog.html"><i class="fa-light fa-user"></i>by David Smith</a>
                                <a href="blog.html"><i class="fa-light fa-clock"></i>10 Jul, 2023</a>
                            </div>
                            <h4 class="box-title"><a href="blog-details.html">University class starting soon while the lovely valley team work</a>
                            </h4>
                            <a href="blog-details.html" class="link-btn">Read More Details<i class="fas fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-xl-4">
                    <div class="th-blog blog-single style2">
                        <div class="blog-img">
                            <a href="blog-details.html"><img src="assets/img/blog/blog-1-1.jpg" alt="Blog Image"></a>
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <a class="author" href="blog.html"><i class="fa-light fa-user"></i>by David Smith</a>
                                <a href="blog.html"><i class="fa-light fa-clock"></i>02 Apr, 2023</a>
                            </div>
                            <h4 class="box-title"><a href="blog-details.html">Educate, Empower, Excel: Discover the Power of Learning!</a>
                            </h4>
                            <a href="blog-details.html" class="link-btn">Read More Details<i class="fas fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-xl-4">
                    <div class="th-blog blog-single style2">
                        <div class="blog-img">
                            <a href="blog-details.html"><img src="assets/img/blog/blog-1-2.jpg" alt="Blog Image"></a>
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <a class="author" href="blog.html"><i class="fa-light fa-user"></i>by David Smith</a>
                                <a href="blog.html"><i class="fa-light fa-clock"></i>03 Jun, 2023</a>
                            </div>
                            <h4 class="box-title"><a href="blog-details.html">Enrich Your Mind, Envision Your Future: Education for Success</a>
                            </h4>
                            <a href="blog-details.html" class="link-btn">Read More Details<i class="fas fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-xl-4">
                    <div class="th-blog blog-single style2">
                        <div class="blog-img">
                            <a href="blog-details.html"><img src="assets/img/blog/blog-1-3.jpg" alt="Blog Image"></a>
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <a class="author" href="blog.html"><i class="fa-light fa-user"></i>by David Smith</a>
                                <a href="blog.html"><i class="fa-light fa-clock"></i>10 Jul, 2023</a>
                            </div>
                            <h4 class="box-title"><a href="blog-details.html">University class starting soon while the lovely valley team work</a>
                            </h4>
                            <a href="blog-details.html" class="link-btn">Read More Details<i class="fas fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section> -->
    <!--==============================
Contact Area  
==============================-->
    <div class="space-bottom" id="contact-sec">
        <div class="container">
            <div class="map-sec">
                <div class="map">
                    <iframe src="https://www.google.com/maps/embed/v1/place?q=Politeknik%20Kesehatan%20Kemenkes%20Bandung&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-5 mb-30 mb-xl-0">
                    <div class="me-xxl-5 mt-60">
                        <div class="title-area mb-25">
                            <h2 class="border-title h3">Hubungi kami</h2>
                        </div>
                        <div class="contact-feature">
                            <div class="contact-feature-icon">
                                <i class="fal fa-location-dot"></i>
                            </div>
                            <div class="media-body">
                                <p class="contact-feature_label">Alamat</p>
                                <a href="https://www.google.com/maps" class="contact-feature_link">Jl Pajajaran No 56 <br>Bandung</a>
                            </div>
                        </div>
                        <div class="contact-feature">
                            <div class="contact-feature-icon">
                                <i class="fal fa-phone"></i>
                            </div>
                            <div class="media-body">
                                <p class="contact-feature_label">No HP</p>
                                <a href="tel:+011456586986" class="contact-feature_link">Mobile:<span>(+65) - 48596 - 5789</span></a>
                                <a href="tel:+011456586986" class="contact-feature_link">Phone: <span>(+00) - 12543 - 4165</span></a>
                            </div>
                        </div>
                        <div class="contact-feature">
                            <div class="contact-feature-icon">
                                <i class="fal fa-clock"></i>
                            </div>
                            <div class="media-body">
                                <p class="contact-feature_label">Jam Operasional</p>
                                <span class="contact-feature_link">Senin - Jumat 08:00 - 16:00</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-7">
                    <div class="contact-form-wrap" data-bg-src="assets/img/bg/contact_bg_1.png">
                        <span class="sub-title">Customer Service</span>
                        <h2 class="border-title">Kontak Kami</h2>
                        <!-- <form action="mail.php" method="POST" class="contact-form ajax-contact"> -->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control style-white" name="name" id="name" placeholder="Nama*">
                                        <i class="fal fa-user"></i>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="email" class="form-control style-white" name="email" id="email" placeholder="Email*">
                                        <i class="fal fa-envelope"></i>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <select name="subject" id="subject" class="single-select nice-select form-select style-white">
                                            <option value="" disabled selected hidden>Pelatihan*</option>
                                            <option value="Web Design">Web Design</option>
                                            <option value="Web Development">Web Development</option>
                                            <option value="Engine Diagnostics">Engine Diagnostics</option>
                                            <option value="Digital Marketing">Digital Marketing</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="tel" class="form-control style-white" name="number" id="number" placeholder="Phone Number*">
                                        <i class="fal fa-phone"></i>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group ">
                                        <textarea name="message" id="message" cols="30" rows="3" class="form-control style-white" placeholder="Tuliskan Pesan*"></textarea>
                                        <i class="fal fa-pen"></i>
                                    </div>
                                </div>
                                <div class="form-btn col-12 mt-10">
                                    <button class="th-btn">Kirim<i class="fas fa-long-arrow-right ms-2"></i></button>
                                </div>
                            </div>
                            <p class="form-messages mb-0 mt-3"></p>
                        <!-- </form> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop