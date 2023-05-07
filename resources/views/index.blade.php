@extends('layout')
@section('content')
<!-- ======= Hero Section ======= -->
<div id="hero" class="hero route bg-image" style="background-image: url(<?php echo url('public/assets/img/hero-bg.jpg'); ?>);">
    <div class="overlay-itro"></div>
    <div class="hero-content display-table">
        <div class="table-cell">
            <div class="container">
                <!--<p class="display-6 color-d">Hello, world!</p>-->
                <h1 class="hero-title mb-4">I'm Shekhar Pandey</h1>
                <p class="hero-subtitle"><span class="typed" data-typed-items="Web Developer, Freelancer, Singer, Traveler, Artist"></span></p>
                <!-- <p class="pt-3"><a class="btn btn-primary btn js-scroll px-4" href="#about" role="button">Learn More</a></p> -->
            </div>
        </div>
    </div>
</div>
<!-- End Hero Section -->

<main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about-mf sect-pt4 route">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="box-shadow-full">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-sm-6 col-md-5">
                                        <div class="about-img">
                                            <img src="<?php echo url('public/assets/img/about-img.png'); ?>" class="img-fluid rounded b-shadow-a" alt="">
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-7">
                                        <div class="about-info">
                                            <p><span class="title-s">Name: </span> <span>Shekhar Pandey</span></p>
                                            <p><span class="title-s">Profile: </span> <span>Backend Developer</span></p>
                                            <p><span class="title-s">Email: </span> <span>pandeyshekhar47@gmail.com</span></p>
                                            <p><span class="title-s">Phone: </span> <span>+91 8392947045</span></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="skill-mf">
                                    <p class="title-s">Skills</p>
                                    <span>LARAVEL</span> <span class="pull-right">85%</span>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 85%;" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <span>CODEIGNITER</span> <span class="pull-right">75%</span>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <span>JAVASCRIPT</span> <span class="pull-right">50%</span>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <span>JQUERY</span> <span class="pull-right">90%</span>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="about-me pt-4 pt-md-0">
                                    <div class="title-box-2">
                                        <h5 class="title-left">
                                            About me
                                        </h5>
                                    </div>
                                    <p class="lead">
                                        As a highly skilled Backend Developer with years of experience working with Laravel and CodeIgniter frameworks, I am passionate about developing scalable and efficient web applications that drive business growth and achieve organizational objectives.
                                    </p>
                                    <p class="lead">
                                        My technical expertise in backend development is complemented by strong problem-solving skills, enabling me to tackle complex challenges with ease and deliver effective solutions in a timely manner.
                                    </p>
                                    <p class="lead">
                                        If you are looking for a talented and dedicated Backend Developer who is passionate about delivering high-quality software solutions, then look no further.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End About Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services-mf pt-5 route">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="title-box text-center">
                        <h3 class="title-a">Services</h3>
                        <p class="subtitle-a">Here's how I can help you</p>
                        <div class="line-mf"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="service-box">
                        <div class="service-ico">
                            <span class="ico-circle"><i class="bi bi-bar-chart"></i></span>
                        </div>
                        <div class="service-content">
                            <h2 class="s-title">Web Development</h2>
                            <p class="s-description text-center">
                                As a backend developer, I specialize in building web applications using the Laravel and CodeIgniter frameworks. With these frameworks, I can create robust and scalable web solutions that meet the needs of businesses of all sizes. From custom web development to e-commerce platforms, I have the skills to build web applications like CRMs, admin panels and many other type of applications that meet the needs of my clients.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-box">
                        <div class="service-ico">
                            <span class="ico-circle"><i class="bi bi-binoculars"></i></span>
                        </div>
                        <div class="service-content">
                            <h2 class="s-title">Api Development</h2>
                            <p class="s-description text-center">
                                I also specialize in API development using Laravel and CodeIgniter. APIs are the backbone of modern web applications, and I can create custom APIs that meet the needs of any business. From RESTful APIs to SOAP APIs, I can create APIs that provide a seamless and intuitive experience for end-users. By using the latest technologies and industry best practices, I can build APIs that are secure, scalable, and easy to use.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-box">
                        <div class="service-ico">
                            <span class="ico-circle"><i class="bi bi-calendar4-week"></i></span>
                        </div>
                        <div class="service-content">
                            <h2 class="s-title">Database Management</h2>
                            <p class="s-description text-center">
                                When it comes to database creation and management, I have extensive experience working with MySQL. From database design to data migration and backup, I can create and manage databases that meet the needs of any business. Whether you need a database for a small web application or a large-scale e-commerce platform, I can help you create and manage a database that is secure, scalable, and easy to use.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- <div class="col-md-4">
                    <div class="service-box">
                        <div class="service-ico">
                            <span class="ico-circle"><i class="bi bi-briefcase"></i></span>
                        </div>
                        <div class="service-content">
                            <h2 class="s-title">Web Design</h2>
                            <p class="s-description text-center">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni adipisci eaque autem fugiat! Quia,
                                provident vitae! Magni
                                tempora perferendis eum non provident.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-box">
                        <div class="service-ico">
                            <span class="ico-circle"><i class="bi bi-card-checklist"></i></span>
                        </div>
                        <div class="service-content">
                            <h2 class="s-title">Photography</h2>
                            <p class="s-description text-center">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni adipisci eaque autem fugiat! Quia,
                                provident vitae! Magni
                                tempora perferendis eum non provident.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-box">
                        <div class="service-ico">
                            <span class="ico-circle"><i class="bi bi-brightness-high"></i></span>
                        </div>
                        <div class="service-content">
                            <h2 class="s-title">Graphic Design</h2>
                            <p class="s-description text-center">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni adipisci eaque autem fugiat! Quia,
                                provident vitae! Magni
                                tempora perferendis eum non provident.
                            </p>
                        </div>
                    </div>
                </div>
            </div> -->
            </div>
    </section>
    <!-- End Services Section -->

    <!-- ======= Counter Section ======= -->
    <div class="section-counter paralax-mf bg-image" style="background-image: url(<?php echo url('public/assets/img/counters-bg.jpg'); ?>)">
        <div class="overlay-mf"></div>
        <div class="container position-relative">
            <div class="row">
                <div class="col-sm-3 col-lg-3">
                    <div class="counter-box counter-box pt-4 pt-md-0">
                        <div class="counter-ico">
                            <span class="ico-circle"><i class="bi bi-check"></i></span>
                        </div>
                        <div class="counter-num">
                            <p data-purecounter-start="0" data-purecounter-end="450" data-purecounter-duration="1" class="counter purecounter"></p>
                            <span class="counter-text">WORKS COMPLETED</span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 col-lg-3">
                    <div class="counter-box pt-4 pt-md-0">
                        <div class="counter-ico">
                            <span class="ico-circle"><i class="bi bi-journal-richtext"></i></span>
                        </div>
                        <div class="counter-num">
                            <?php
                            $startDate = new DateTime('2022-03-01');
                            $endDate = new DateTime();
                            $interval = $startDate->diff($endDate);
                            $years = $interval->y;
                            $months = $interval->m;
                            $decimal = round($months / 12, 1);
                            $total = $years + $decimal;
                            ?>
                            <p id="experience-counter" data-start="0" data-end="<?php echo $total; ?>" data-decimal="1" class="counter"></p>
                            <span class="counter-text">YEARS OF EXPERIENCE</span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 col-lg-3">
                    <div class="counter-box pt-4 pt-md-0">
                        <div class="counter-ico">
                            <span class="ico-circle"><i class="bi bi-people"></i></span>
                        </div>
                        <div class="counter-num">
                            <p data-purecounter-start="0" data-purecounter-end="550" data-purecounter-duration="1" class="counter purecounter"></p>
                            <span class="counter-text">TOTAL CLIENTS</span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 col-lg-3">
                    <div class="counter-box pt-4 pt-md-0">
                        <div class="counter-ico">
                            <span class="ico-circle"><i class="bi bi-award"></i></span>
                        </div>
                        <div class="counter-num">
                            <p data-purecounter-start="0" data-purecounter-end="48" data-purecounter-duration="1" class="counter purecounter"></p>
                            <span class="counter-text">AWARD WON</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Counter Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="work" class="portfolio-mf sect-pt4 route">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="title-box text-center">
                        <h3 class="title-a">
                            Portfolio
                        </h3>
                        <p class="subtitle-a">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                        </p>
                        <div class="line-mf"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="work-box">
                        <a href="<?php echo url('public/assets/img/work-1.jpg'); ?>" data-gallery="portfolioGallery" class="portfolio-lightbox">
                            <div class="work-img">
                                <img src="<?php echo url('public/assets/img/work-1.jpg'); ?>" alt="" class="img-fluid">
                            </div>
                        </a>
                        <div class="work-content">
                            <div class="row">
                                <div class="col-sm-8">
                                    <h2 class="w-title">Lorem impsum dolor</h2>
                                    <div class="w-more">
                                        <span class="w-ctegory">Web Design</span> / <span class="w-date">18 Sep. 2018</span>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="w-like">
                                        <a href="javascript:void(0)"> <span class="bi bi-plus-circle"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="work-box">
                        <a href="<?php echo url('public/assets/img/work-2.jpg'); ?>" data-gallery="portfolioGallery" class="portfolio-lightbox">
                            <div class="work-img">
                                <img src="<?php echo url('public/assets/img/work-2.jpg'); ?>" alt="" class="img-fluid">
                            </div>
                        </a>
                        <div class="work-content">
                            <div class="row">
                                <div class="col-sm-8">
                                    <h2 class="w-title">Loreda Cuno Nere</h2>
                                    <div class="w-more">
                                        <span class="w-ctegory">Web Design</span> / <span class="w-date">18 Sep. 2018</span>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="w-like">
                                        <a href="javascript:void(0)"> <span class="bi bi-plus-circle"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="work-box">
                        <a href="<?php echo url('public/assets/img/work-3.jpg'); ?>" data-gallery="portfolioGallery" class="portfolio-lightbox">
                            <div class="work-img">
                                <img src="<?php echo url('public/assets/img/work-3.jpg'); ?>" alt="" class="img-fluid">
                            </div>
                        </a>
                        <div class="work-content">
                            <div class="row">
                                <div class="col-sm-8">
                                    <h2 class="w-title">Mavrito Lana Dere</h2>
                                    <div class="w-more">
                                        <span class="w-ctegory">Web Design</span> / <span class="w-date">18 Sep. 2018</span>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="w-like">
                                        <a href="javascript:void(0)"> <span class="bi bi-plus-circle"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="work-box">
                        <a href="<?php echo url('public/assets/img/work-4.jpg'); ?>" data-gallery="portfolioGallery" class="portfolio-lightbox">
                            <div class="work-img">
                                <img src="<?php echo url('public/assets/img/work-4.jpg'); ?>" alt="" class="img-fluid">
                            </div>
                        </a>
                        <div class="work-content">
                            <div class="row">
                                <div class="col-sm-8">
                                    <h2 class="w-title">Bindo Laro Cado</h2>
                                    <div class="w-more">
                                        <span class="w-ctegory">Web Design</span> / <span class="w-date">18 Sep. 2018</span>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="w-like">
                                        <a href="javascript:void(0)"> <span class="bi bi-plus-circle"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="work-box">
                        <a href="<?php echo url('public/assets/img/work-5.jpg'); ?>" data-gallery="portfolioGallery" class="portfolio-lightbox">
                            <div class="work-img">
                                <img src="<?php echo url('public/assets/img/work-5.jpg'); ?>" alt="" class="img-fluid">
                            </div>
                        </a>
                        <div class="work-content">
                            <div class="row">
                                <div class="col-sm-8">
                                    <h2 class="w-title">Studio Lena Mado</h2>
                                    <div class="w-more">
                                        <span class="w-ctegory">Web Design</span> / <span class="w-date">18 Sep. 2018</span>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="w-like">
                                        <a href="javascript:void(0)"> <span class="bi bi-plus-circle"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="work-box">
                        <a href="<?php echo url('public/assets/img/work-6.jpg'); ?>" data-gallery="portfolioGallery" class="portfolio-lightbox">
                            <div class="work-img">
                                <img src="<?php echo url('public/assets/img/work-6.jpg'); ?>" alt="" class="img-fluid">
                            </div>
                        </a>
                        <div class="work-content">
                            <div class="row">
                                <div class="col-sm-8">
                                    <h2 class="w-title">Studio Big Bang</h2>
                                    <div class="w-more">
                                        <span class="w-ctegory">Web Design</span> / <span class="w-date">18 Sep. 2017</span>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="w-like">
                                        <a href="javascript:void(0)"> <span class="bi bi-plus-circle"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End Portfolio Section -->

    <!-- ======= Testimonials Section ======= -->
    <div id="testimonials" class="testimonials paralax-mf bg-image" style="background-image: url(<?php echo url('public/assets/img/overlay-bg.jpg'); ?>)">
        <div class="overlay-mf"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                        <div class="swiper-wrapper">

                            <div class="swiper-slide">
                                <div class="testimonial-box">
                                    <div class="author-test">
                                        <img src="<?php echo url('public/assets/img/testimonial-2.jpg'); ?>" alt="" class="rounded-circle b-shadow-a">
                                        <span class="author">Xavi Alonso</span>
                                    </div>
                                    <div class="content-test">
                                        <p class="description lead">"Working with Shekhar was an incredible experience! Their expertise in web development and attention to detail resulted in a beautifully designed and highly functional website. They were easy to communicate with and made sure to understand my needs every step of the way. I couldn't be happier with the final product!"</p>
                                    </div>
                                </div>
                            </div><!-- End testimonial item -->

                            <div class="swiper-slide">
                                <div class="testimonial-box">
                                    <div class="author-test">
                                        <img src="<?php echo url('public/assets/img/testimonial-4.jpg'); ?>" alt="" class="rounded-circle b-shadow-a">
                                        <span class="author">Marta Socrate</span>
                                    </div>
                                    <div class="content-test">
                                        <p class="description lead">"I had the pleasure of collaborating with Shekhar on a web development project and I must say, they exceeded my expectations. Their technical skills and ability to problem-solve were impressive, and they were always professional and responsive. They truly went above and beyond to deliver a top-notch product. I highly recommend them!"</p>
                                    </div>
                                </div>
                            </div><!-- End testimonial item -->
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>

                    <!-- <div id="testimonial-mf" class="owl-carousel owl-theme">

        </div> -->
                </div>
            </div>
        </div>
    </div><!-- End Testimonials Section -->

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog-mf sect-pt4 route">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="title-box text-center">
                        <h3 class="title-a">Blogs</h3>
                        <p class="subtitle-a">Welcome to my blog! I'm excited to share with you my latest ideas and insights on travel and web design. Check out some of my recent posts below:</p>
                        <div class="line-mf"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="card card-blog">
                        <div class="card-img">
                            <a href="javascript:void(0)"><img src="<?php echo url('public/assets/img/api-development.jpg'); ?>" alt="" class="img-fluid"></a>
                        </div>
                        <div class="card-body">
                            <div class="card-category-box">
                                <div class="card-category">
                                    <h6 class="category">API Development</h6>
                                </div>
                            </div>
                            <h3 class="card-title"><a href="javascript:void(0)">5 Common Mistakes to Avoid When Developing APIs</a></h3>
                            <p class="card-description">Learn to avoid common pitfalls in API development and improve the reliability and usability of your applications.</p>
                        </div>
                        <div class="card-footer">
                            <div class="post-author">
                                <a href="#">
                                    <img src="<?php echo url('public/assets/img/about-img.png'); ?>" alt="" class="avatar rounded-circle">
                                    <span class="author">Shekhar Pandey</span>
                                </a>
                            </div>
                            <div class="post-date">
                                <span class="bi bi-clock"></span> 07 May
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-blog">
                        <div class="card-img">
                            <a href="javascript:void(0)"><img src="<?php echo url('public/assets/img/web-development.jpg'); ?>" alt="" class="img-fluid"></a>
                        </div>
                        <div class="card-body">
                            <div class="card-category-box">
                                <div class="card-category">
                                    <h6 class="category">Web Development</h6>
                                </div>
                            </div>
                            <h3 class="card-title"><a href="javascript:void(0)">How to Use ReactJS to Build a Modern Web Application</a></h3>
                            <p class="card-description">Get a step-by-step guide on building a modern web application using ReactJS, a popular JavaScript library nowadays.</p>
                        </div>
                        <div class="card-footer">
                            <div class="post-author">
                                <a href="#">
                                    <img src="<?php echo url('public/assets/img/about-img.png'); ?>" alt="" class="avatar rounded-circle">
                                    <span class="author">Shekhar Pandey</span>
                                </a>
                            </div>
                            <div class="post-date">
                                <span class="bi bi-clock"></span> 07 May
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-blog">
                        <div class="card-img">
                            <a href="javascript:void(0)"><img src="<?php echo url('public/assets/img/aws.jpg'); ?>" alt="" class="img-fluid"></a>
                        </div>
                        <div class="card-body">
                            <div class="card-category-box">
                                <div class="card-category">
                                    <h6 class="category">Amazon Web Services</h6>
                                </div>
                            </div>
                            <h3 class="card-title"><a href="javascript:void(0)">Scaling your Web App with AWS Lambda</a></h3>
                            <p class="card-description">Discover how AWS Lambda can help scale your web application and handle increasing traffic without compromising on performance.</p>
                        </div>
                        <div class="card-footer">
                            <div class="post-author">
                                <a href="#">
                                    <img src="<?php echo url('public/assets/img/about-img.png'); ?>" alt="" class="avatar rounded-circle">
                                    <span class="author">Shekhar Pandey</span>
                                </a>
                            </div>
                            <div class="post-date">
                                <span class="bi bi-clock"></span> 07 May
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Blog Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="paralax-mf footer-paralax bg-image sect-mt4 route" style="background-image: url(<?php echo url('public/assets/img/overlay-bg.jpg'); ?>)">
        <div class="overlay-mf"></div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="contact-mf">
                        <div id="contact" class="box-shadow-full">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="title-box-2">
                                        <h5 class="title-left">
                                            Contact me
                                        </h5>
                                    </div>
                                    <div>
                                        <form action="javascript:void(0)" method="post" role="form" class="php-email-form" autocomplete="off">
                                            <div class="row">
                                                <div class="col-md-12 mb-3">
                                                    <div class="form-group">
                                                        <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 mb-3">
                                                    <div class="form-group">
                                                        <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 mb-3">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 text-center my-3">
                                                    <div class="loading">Loading</div>
                                                    <div class="error-message"></div>
                                                    <div class="sent-message">Your message has been sent. Thank you!</div>
                                                </div>
                                                <div class="col-md-12 text-center">
                                                    <button type="submit" class="button button-a button-big button-rouded">Send Mail</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="title-box-2 pt-4 pt-md-0">
                                        <h5 class="title-left">
                                            Get in Touch
                                        </h5>
                                    </div>
                                    <div class="more-info">
                                        <p class="lead">"Hello, my name is Shekhar Pandey, and I am a Software Developer. I am passionate about developing and always strive to provide high-quality work to my clients.</p>
                                        <p class="lead">Thank you for visiting my website, and I look forward to hearing from you soon!"</p>
                                        <p class="lead">If you are interested in working together or have any questions, please don't hesitate to reach out to me using the contact form above.</p>
                                        <ul class="list-ico">
                                            <li><span class="bi bi-geo-alt"></span> Sector 51, Noida, Uttar Pradesh</li>
                                            <li><span class="bi bi-phone"></span> +91 8392947045</li>
                                            <li><span class="bi bi-envelope"></span> pandeyshekhar47@gmail.com</li>
                                        </ul>
                                    </div>
                                    <div class="socials">
                                        <ul>
                                            <!-- <li><a href="" target="_blank"><span class="ico-circle"><i class="bi bi-facebook"></i></span></a></li> -->
                                            <li><a href="https://instagram.com/theshekharpandey?igshid=ZGUzMzM3NWJiOQ==" target="_blank"><span class="ico-circle"><i class="bi bi-instagram"></i></span></a></li>
                                            <li><a href="https://twitter.com/Pandeyshekhar47?t=fOXsVRKD_0t-dTRy2rXWtw&s=09" target="_blank"><span class="ico-circle"><i class="bi bi-twitter"></i></span></a></li>
                                            <li><a href="https://www.linkedin.com/in/shekhar-pandey-a37852224" target="_blank"><span class="ico-circle"><i class="bi bi-linkedin"></i></span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Contact Section -->

</main>
<!-- End #main -->
@endsection
