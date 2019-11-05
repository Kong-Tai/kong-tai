@extends('layouts.app')

@section('content')
        <!-- start hero section -->
        <section id="home" class="p-0 parallax mobile-height md-position-relative wow fadeIn" data-stellar-background-ratio="0.5" style="background-image:url('images/pofo-demo-parallax.jpg');">
            <div class="opacity-medium bg-extra-dark-gray d-xl-none"></div>
            <div class="container position-relative full-screen">
                <div class="slider-typography">
                    <div class="slider-text-middle-main sm-padding-15px-lr">
                        <div class="slider-text-middle alt-font text-white-2">
                            <div class="col-lg-6 col-md-7 padding-30px-right">
                                <div class="text-white-2-transparent mb-3 text-leftside-line text-medium-gray">YOUNG-BLOOD</div>
                                <h5 class="font-weight-500">Kong-Tai</h5>
                                <h1 class="font-weight-500 margin-40px-bottom demo-heading" style="background: linear-gradient(to right, #B21F1F 3%, #F6C81D 40%,  #296330 90%);">Humble African Tech</h1>
                                <a class="btn btn-small btn-rounded btn-transparent-deep-pink inner-link" href="#demos">About Kong-Tai<i class="ti-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end hero section -->
        <section id="portfolio" class="half-section wow fadeIn">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-8 text-center last-paragraph-no-margin">
                        <span class="text-extra-large d-block alt-font text-extra-dark-gray margin-10px-bottom font-weight-600">Check Out Our All Ready Demos</span>
                        <p class="width-75 lg-width-90 sm-width-100 mx-auto">A great collection of beautiful website templates for your need. Choose the best suitable template and start customizing it.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- start portfolio -->
        <section class="bg-charcoal-gray wow fadeIn p-0" style="visibility: visible; animation-name: fadeIn;">
            <div class="bg-black">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-12">
                            <!-- start filter navigation -->
                            <ul class="portfolio-filter nav nav-tabs justify-content-center portfolio-filter-tab-2 border-none font-weight-600 alt-font text-center text-small padding-35px-tb">
                                <li class="nav-item active"><a href="javascript:void(0);" data-filter="*" class="nav-link text-white-2 text-very-small">All</a></li>
                                <li class="nav-item"><a href="javascript:void(0);" data-filter=".classic" class="nav-link text-white-2 text-very-small">Classic</a></li>
                                <li class="nav-item"><a href="javascript:void(0);" data-filter=".creative" class="nav-link text-white-2 text-very-small">Creative</a></li>
                                <li class="nav-item"><a href="javascript:void(0);" data-filter=".portfolio" class="nav-link text-white-2 text-very-small">Portfolio</a></li>
                                <li class="nav-item"><a href="javascript:void(0);" data-filter=".blog" class="nav-link text-white-2 text-very-small">Blog</a></li>
                                <li class="nav-item"><a href="javascript:void(0);" data-filter=".other" class="nav-link text-white-2 text-very-small">Other</a></li>
                            </ul>
                            <!-- end filter navigation -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col filter-content overflow-hidden padding-100px-all md-padding-15px-all">
                        <ul class="portfolio-grid work-4col alt-font text-center hover-option11 gutter-extra-large" style="/* position: relative; */height: 2895.75px;">
                            <li class="grid-sizer"></li>
                            <!-- start portfolio item -->
                            <li class="grid-item classic fadeInUp" style="visibility: visible;animation-name: fadeInUp;/* position: absolute; *//* left: 0%; *//* top: 0px; */">
                                <a href="/single-work" target="_blank">
                                    <div class="portfolio-img bg-extra-dark-gray"><img src="images/pofo-portfolio-classic-corporate.jpg" alt="" data-no-retina=""></div>
                                    <span class="portfolio-item-title">Classic Corporate</span>
                                </a>
                            </li>
                            <!-- end portfolio item -->
                            <!-- start portfolio item -->
                            <li class="grid-item classic fadeInUp" data-wow-delay="0.2s" style="visibility: visible;animation-delay: 0.2s;animation-name: fadeInUp;position: absolute;left: 25%;top: 0px;">
                                <a href="/single-work" target="_blank">
                                    <div class="portfolio-img bg-extra-dark-gray"><img src="images/pofo-portfolio-digital-agency.jpg" alt="" data-no-retina=""></div>
                                    <span class="portfolio-item-title">Digital Agency</span>
                                </a>
                            </li>
                            <!-- end portfolio item -->
                            <!-- start portfolio item -->
                            <li class="grid-item creative fadeInUp" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp; position: absolute; left: 50%; top: 0px;">
                                <a href="/single-work" target="_blank">
                                    <div class="portfolio-img bg-extra-dark-gray"><img src="images/pofo-portfolio-creative-studio.jpg" alt="" data-no-retina=""></div>
                                    <span class="portfolio-item-title">Creative Studio</span>
                                </a>
                            </li>
                            <!-- end portfolio item -->
                            <!-- start portfolio item -->
                            <li class="grid-item classic fadeInUp" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp; position: absolute; left: 75%; top: 0px;">
                                <a href="/single-work" target="_blank">
                                    <div class="portfolio-img bg-extra-dark-gray"><img src="images/pofo-portfolio-interactive-agency.jpg" alt="" data-no-retina=""></div>
                                    <span class="portfolio-item-title">Interactive Agency</span>
                                </a>
                            </li>
                            <!-- end portfolio item -->
                            <!-- start portfolio item -->
                            <li class="grid-item classic fadeInUp" style="visibility: visible; animation-name: fadeInUp; position: absolute; left: 0%; top: 394.063px;">
                                <a href="/single-work" target="_blank">
                                    <div class="portfolio-img bg-extra-dark-gray"><img src="images/pofo-portfolio-web-agency.jpg" alt="" data-no-retina=""></div>
                                    <span class="portfolio-item-title">Web Agency</span>
                                </a>
                            </li>
                            <!-- end portfolio item -->
                            <!-- start portfolio item -->
                            <li class="grid-item classic fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp; position: absolute; left: 25%; top: 394.063px;">
                                <a href="/single-work" target="_blank">
                                    <div class="portfolio-img bg-extra-dark-gray"><img src="images/pofo-portfolio-classic-one-page.jpg" alt="" data-no-retina=""></div>
                                    <span class="portfolio-item-title">Classic One Page</span>
                                </a>
                            </li>
                            <!-- end portfolio item -->
                            <!-- start portfolio item -->
                            <li class="grid-item creative fadeInUp" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp; position: absolute; left: 50%; top: 394.063px;">
                                <a href="/single-work" target="_blank">
                                    <div class="portfolio-img bg-extra-dark-gray"><img src="images/pofo-portfolio-creative-business.jpg" alt="" data-no-retina=""></div>
                                    <span class="portfolio-item-title">Creative Business</span>
                                </a>
                            </li>
                            <!-- end portfolio item -->
                            <!-- start portfolio item -->
                            <li class="grid-item classic fadeInUp" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp; position: absolute; left: 75%; top: 394.063px;">
                                <a href="/single-work" target="_blank">
                                    <div class="portfolio-img bg-extra-dark-gray"><img src="images/pofo-portfolio-innovation-agency.jpg" alt="" data-no-retina=""></div>
                                    <span class="portfolio-item-title">Innovation Agency</span>
                                </a>
                            </li>
                            <!-- end portfolio item -->
                            <!-- start portfolio item -->
                            <li class="grid-item creative fadeInUp" style="visibility: visible; animation-name: fadeInUp; position: absolute; left: 0%; top: 788.126px;">
                                <a href="/single-work" target="_blank">
                                    <div class="portfolio-img bg-extra-dark-gray"><img src="images/pofo-portfolio-small-business.jpg" alt="" data-no-retina=""></div>
                                    <span class="portfolio-item-title">Small Business</span>
                                </a>
                            </li>
                            <!-- end portfolio item -->
                            <!-- start portfolio item -->
                            <li class="grid-item portfolio fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp; position: absolute; left: 25%; top: 788.126px;">
                                <a href="/single-work" target="_blank">
                                    <div class="portfolio-img bg-extra-dark-gray"><img src="images/pofo-portfolio-minimal.jpg" alt="" data-no-retina=""></div>
                                    <span class="portfolio-item-title">Minimal Portfolio</span>
                                </a>
                            </li>
                            <!-- end portfolio item -->
                            <!-- start portfolio item -->
                            <li class="grid-item classic fadeInUp" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp; position: absolute; left: 50%; top: 788.126px;">
                                <a href="/single-work" target="_blank">
                                    <div class="portfolio-img bg-extra-dark-gray"><img src="images/pofo-portfolio-classic-start-up.jpg" alt="" data-no-retina=""></div>
                                    <span class="portfolio-item-title">Classic Start-Up</span>
                                </a>
                            </li>
                            <!-- end portfolio item -->
                            <!-- start portfolio item -->
                            <li class="grid-item portfolio fadeInUp" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp; position: absolute; left: 75%; top: 788.126px;">
                                <a href="/single-work" target="_blank">
                                    <div class="portfolio-img bg-extra-dark-gray"><img src="images/pofo-portfolio-parallax.jpg" alt="" data-no-retina=""></div>
                                    <span class="portfolio-item-title">Parallax Portfolio</span>
                                </a>
                            </li>
                            <!-- end portfolio item -->
                            <!-- start portfolio item -->
                            <li class="grid-item blog fadeInUp" style="visibility: visible; animation-name: fadeInUp; position: absolute; left: 0%; top: 1182.19px;">
                                <a href="/single-work" target="_blank">
                                    <div class="portfolio-img bg-extra-dark-gray"><img src="images/pofo-portfolio-blog-clean.jpg" alt="" data-no-retina=""></div>
                                    <span class="portfolio-item-title">Blog Clean</span>
                                </a>
                            </li>
                            <!-- end portfolio item -->
                            <!-- start portfolio item -->
                            <li class="grid-item creative fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp; position: absolute; left: 25%; top: 1182.19px;">
                                <a href="/single-work" target="_blank">
                                    <div class="portfolio-img bg-extra-dark-gray"><img src="images/pofo-portfolio-branding-agency.jpg" alt="" data-no-retina=""></div>
                                    <span class="portfolio-item-title">Branding Agency</span>
                                </a>
                            </li>
                            <!-- end portfolio item -->
                            <!-- start portfolio item -->
                            <li class="grid-item blog fadeInUp" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp; position: absolute; left: 50%; top: 1182.19px;">
                                <a href="/single-work" target="_blank">
                                    <div class="portfolio-img bg-extra-dark-gray"><img src="images/pofo-portfolio-blog-personal.jpg" alt="" data-no-retina=""></div>
                                    <span class="portfolio-item-title">Blog Personal</span>
                                </a>
                            </li>
                            <!-- end portfolio item -->
                            <!-- start portfolio item -->
                            <li class="grid-item portfolio fadeInUp" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp; position: absolute; left: 75%; top: 1182.19px;">
                                <a href="/single-work" target="_blank">
                                    <div class="portfolio-img bg-extra-dark-gray"><img src="images/pofo-portfolio-photographer.jpg" alt="" data-no-retina=""></div>
                                    <span class="portfolio-item-title">Photographer Portfolio</span>
                                </a>
                            </li>
                            <!-- end portfolio item -->
                            <!-- start portfolio item -->
                            <li class="grid-item portfolio fadeInUp" style="visibility: visible; animation-name: fadeInUp; position: absolute; left: 0%; top: 1576.25px;">
                                <a href="/single-work" target="_blank">
                                    <div class="portfolio-img bg-extra-dark-gray"><img src="images/pofo-portfolio-metro-portfolio.jpg" alt="" data-no-retina=""></div>
                                    <span class="portfolio-item-title">Metro Portfolio</span>
                                </a>
                            </li>
                            <!-- end portfolio item -->
                            <!-- start portfolio item -->
                            <li class="grid-item blog fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp; position: absolute; left: 25%; top: 1576.25px;">
                                <a href="/single-work" target="_blank">
                                    <div class="portfolio-img bg-extra-dark-gray"><img src="images/pofo-portfolio-blog-masonry.jpg" alt="" data-no-retina=""></div>
                                    <span class="portfolio-item-title">Blog Masonry</span>
                                </a>
                            </li>
                            <!-- end portfolio item -->
                            <!-- start portfolio item -->
                            <li class="grid-item creative fadeInUp" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp; position: absolute; left: 50%; top: 1576.25px;">
                                <a href="/single-work" target="_blank">
                                    <div class="portfolio-img bg-extra-dark-gray"><img src="images/pofo-portfolio-creative-designer.jpg" alt="" data-no-retina=""></div>
                                    <span class="portfolio-item-title">Creative Designer</span>
                                </a>
                            </li>
                            <!-- end portfolio item -->
                            <!-- start portfolio item -->
                            <li class="grid-item blog fadeInUp" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp; position: absolute; left: 75%; top: 1576.25px;">
                                <a href="/single-work" target="_blank">
                                    <div class="portfolio-img bg-extra-dark-gray"><img src="images/pofo-portfolio-blog-grid.jpg" alt="" data-no-retina=""></div>
                                    <span class="portfolio-item-title">Blog Grid</span>
                                </a>
                            </li>
                            <!-- end portfolio item -->
                            <!-- start portfolio item -->
                            <li class="grid-item portfolio fadeInUp" style="visibility: visible; animation-name: fadeInUp; position: absolute; left: 0%; top: 1970.32px;">
                                <a href="/single-work" target="_blank">
                                    <div class="portfolio-img bg-extra-dark-gray"><img src="images/pofo-portfolio-personal.jpg" alt="" data-no-retina=""></div>
                                    <span class="portfolio-item-title">Personal Portfolio</span>
                                </a>
                            </li>
                            <!-- end portfolio item -->
                            <!-- start portfolio item -->
                            <li class="grid-item portfolio fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp; position: absolute; left: 25%; top: 1970.32px;">
                                <a href="/single-work" target="_blank">
                                    <div class="portfolio-img bg-extra-dark-gray"><img src="images/pofo-portfolio-multiple-carousel.jpg" alt="" data-no-retina=""></div>
                                    <span class="portfolio-item-title">Multiple Carousel Portfolio</span>
                                </a>
                            </li>
                            <!-- end portfolio item -->
                            <!-- start portfolio item -->
                            <li class="grid-item other fadeInUp" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp; position: absolute; left: 50%; top: 1970.32px;">
                                <a href="/single-work" target="_blank">
                                    <div class="portfolio-img bg-extra-dark-gray"><img src="images/pofo-under-maintenance.jpg" alt="" data-no-retina=""></div>
                                    <span class="portfolio-item-title">Under Maintenance</span>
                                </a>
                            </li>
                            <!-- end portfolio item -->
                            <!-- start portfolio item -->
                            <li class="grid-item other fadeInUp" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp; position: absolute; left: 75%; top: 1970.32px;">
                                <a href="/single-work" target="_blank">
                                    <div class="portfolio-img bg-extra-dark-gray"><img src="images/pofo-portfolio-coming-soon.jpg" alt="" data-no-retina=""></div>
                                    <span class="portfolio-item-title">Coming Soon</span>
                                </a>
                            </li>
                            <!-- end portfolio item -->
                            <!-- start portfolio item -->
                            <li class="grid-item other fadeInUp" style="visibility: visible; animation-name: fadeInUp; position: absolute; left: 0%; top: 2235px;">
                                <a href="/single-work" target="_blank">
                                    <div class="portfolio-img bg-extra-dark-gray"><img src="images/pofo-portfolio-coming-soon-02.jpg" alt="" data-no-retina=""></div>
                                    <span class="portfolio-item-title">Coming Soon - Style 02</span>
                                </a>
                            </li>
                            <!-- end portfolio item -->
                            <!-- start portfolio item -->
                            <li class="grid-item creative fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp; position: absolute; left: 25%; top: 2235px;">
                                <a href="/single-work" target="_blank">
                                    <div class="portfolio-img bg-extra-dark-gray"><img src="images/pofo-portfolio-left-menu-classic.jpg" alt="" data-no-retina=""></div>
                                    <span class="portfolio-item-title">Creative Simple Portfolio</span>
                                </a>
                            </li>
                            <!-- end portfolio item -->
                            <!-- start portfolio item -->
                            <li class="grid-item portfolio fadeInUp" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp; position: absolute; left: 50%; top: 2235px;">
                                <a href="/single-work" target="_blank">
                                    <div class="portfolio-img bg-extra-dark-gray"><img src="images/pofo-portfolio-full-screen-vertical.jpg" alt="" data-no-retina=""></div>
                                    <span class="portfolio-item-title">Vertical Portfolio</span>
                                </a>
                            </li>
                            <!-- end portfolio item -->
                            <!-- start portfolio item -->
                            <li class="grid-item portfolio fadeInUp" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp; position: absolute; left: 75%; top: 2235px;">
                                <a href="/single-work" target="_blank">
                                    <div class="portfolio-img bg-extra-dark-gray"><img src="images/pofo-portfolio-centered-slides.jpg" alt="" data-no-retina=""></div>
                                    <span class="portfolio-item-title">Centered Slides Portfolio</span>
                                </a>
                            </li>
                            <!-- end portfolio item -->
                            <!-- start portfolio item -->
                            <li class="grid-item portfolio fadeInUp" style="visibility: visible; animation-name: fadeInUp; position: absolute; left: 0%; top: 2499.69px;">
                                <a href="/single-work" target="_blank">
                                    <div class="portfolio-img bg-extra-dark-gray"><img src="images/home-creative-agency.jpg" alt="" data-no-retina=""></div>
                                    <span class="portfolio-item-title">Creative Agency <span class="new-demo">NEW</span></span>
                                </a>
                            </li>
                            <!-- end portfolio item -->
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- end portfolio -->

        <!-- start product slider section -->
        <section id="gallery" class="bg-light-gray  wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-8 text-center margin-80px-bottom lg-margin-50px-bottom sm-margin-30px-bottom last-paragraph-no-margin">
                        <span class="text-extra-large d-block alt-font text-extra-dark-gray margin-10px-bottom font-weight-600">Elegant and Impressive Portfolio Pages</span>
                        <p class="width-80 md-width-90 sm-width-100 mx-auto">Not just the homepage, we have designed many different beautiful portfolio single pages to achieve your different needs.</p>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col swiper-presentation black-move overflow-hidden sm-position-relative sm-no-padding-lr swiper-container-initialized swiper-container-horizontal">
                        <div class="swiper-wrapper" style="transition-duration: 0ms; transform: translate3d(-3401.13px, 0px, 0px);"><div class="swiper-slide padding-10px-all swiper-slide-duplicate" data-swiper-slide-index="2" style="width: 265.75px; margin-right: 30px;">
                                <a href="single-project-page-03.html" target="_blank"><img src="images/pofo-portfolio-layout-img-03.jpg" class="width-100 box-shadow-large" alt="" data-no-retina=""></a>
                            </div><div class="swiper-slide padding-10px-all swiper-slide-duplicate" data-swiper-slide-index="3" style="width: 265.75px; margin-right: 30px;">
                                <a href="single-project-page-04.html" target="_blank"><img src="images/pofo-portfolio-layout-img-04.jpg" class="width-100 box-shadow-large" alt="" data-no-retina=""></a>
                            </div><div class="swiper-slide padding-10px-all swiper-slide-duplicate" data-swiper-slide-index="4" style="width: 265.75px; margin-right: 30px;">
                                <a href="single-project-page-05.html" target="_blank"><img src="images/pofo-portfolio-layout-img-05.jpg" class="width-100 box-shadow-large" alt="" data-no-retina=""></a>
                            </div><div class="swiper-slide padding-10px-all swiper-slide-duplicate" data-swiper-slide-index="5" style="width: 265.75px; margin-right: 30px;">
                                <a href="single-project-page-06.html" target="_blank"><img src="images/pofo-portfolio-layout-img-06.jpg" class="width-100 box-shadow-large" alt="" data-no-retina=""></a>
                            </div><div class="swiper-slide padding-10px-all swiper-slide-duplicate swiper-slide-duplicate-prev" data-swiper-slide-index="6" style="width: 265.75px; margin-right: 30px;">
                                <a href="single-project-page-07.html" target="_blank"><img src="images/pofo-portfolio-layout-img-07.jpg" class="width-100 box-shadow-large" alt="" data-no-retina=""></a>
                            </div><div class="swiper-slide padding-10px-all swiper-slide-duplicate swiper-slide-duplicate-active" data-swiper-slide-index="7" style="width: 265.75px; margin-right: 30px;">
                                <a href="single-project-page-08.html" target="_blank"><img src="images/pofo-portfolio-layout-img-08.jpg" class="width-100 box-shadow-large" alt="" data-no-retina=""></a>
                            </div>
                            <!-- start slider item -->
                            <div class="swiper-slide padding-10px-all swiper-slide-duplicate-next" data-swiper-slide-index="0" style="width: 265.75px; margin-right: 30px;">
                                <a href="single-project-page-01.html" target="_blank"><img src="images/pofo-portfolio-layout-img-01.jpg" class="width-100 box-shadow-large" alt="" data-no-retina=""></a>
                            </div>
                            <!-- end slider item -->
                            <!-- start slider item -->
                            <div class="swiper-slide padding-10px-all" data-swiper-slide-index="1" style="width: 265.75px; margin-right: 30px;">
                                <a href="single-project-page-02.html" target="_blank"><img src="images/pofo-portfolio-layout-img-02.jpg" class="width-100 box-shadow-large" alt="" data-no-retina=""></a>
                            </div>
                            <!-- end slider item -->
                            <!-- start slider item -->
                            <div class="swiper-slide padding-10px-all" data-swiper-slide-index="2" style="width: 265.75px; margin-right: 30px;">
                                <a href="single-project-page-03.html" target="_blank"><img src="images/pofo-portfolio-layout-img-03.jpg" class="width-100 box-shadow-large" alt="" data-no-retina=""></a>
                            </div>
                            <!-- end slider item -->
                            <!-- start slider item -->
                            <div class="swiper-slide padding-10px-all" data-swiper-slide-index="3" style="width: 265.75px; margin-right: 30px;">
                                <a href="single-project-page-04.html" target="_blank"><img src="images/pofo-portfolio-layout-img-04.jpg" class="width-100 box-shadow-large" alt="" data-no-retina=""></a>
                            </div>
                            <!-- end slider item -->
                            <!-- start slider item -->
                            <div class="swiper-slide padding-10px-all" data-swiper-slide-index="4" style="width: 265.75px; margin-right: 30px;">
                                <a href="single-project-page-05.html" target="_blank"><img src="images/pofo-portfolio-layout-img-05.jpg" class="width-100 box-shadow-large" alt="" data-no-retina=""></a>
                            </div>
                            <!-- end slider item -->
                            <!-- start slider item -->
                            <div class="swiper-slide padding-10px-all" data-swiper-slide-index="5" style="width: 265.75px; margin-right: 30px;">
                                <a href="single-project-page-06.html" target="_blank"><img src="images/pofo-portfolio-layout-img-06.jpg" class="width-100 box-shadow-large" alt="" data-no-retina=""></a>
                            </div>
                            <!-- end slider item -->
                            <!-- start slider item -->
                            <div class="swiper-slide padding-10px-all swiper-slide-prev" data-swiper-slide-index="6" style="width: 265.75px; margin-right: 30px;">
                                <a href="single-project-page-07.html" target="_blank"><img src="images/pofo-portfolio-layout-img-07.jpg" class="width-100 box-shadow-large" alt="" data-no-retina=""></a>
                            </div>
                            <!-- end slider item -->
                            <!-- start slider item -->
                            <div class="swiper-slide padding-10px-all swiper-slide-active" data-swiper-slide-index="7" style="width: 265.75px; margin-right: 30px;">
                                <a href="single-project-page-08.html" target="_blank"><img src="images/pofo-portfolio-layout-img-08.jpg" class="width-100 box-shadow-large" alt="" data-no-retina=""></a>
                            </div>
                            <!-- end slider item -->
                        <div class="swiper-slide padding-10px-all swiper-slide-duplicate swiper-slide-next" data-swiper-slide-index="0" style="width: 265.75px; margin-right: 30px;">
                                <a href="single-project-page-01.html" target="_blank"><img src="images/pofo-portfolio-layout-img-01.jpg" class="width-100 box-shadow-large" alt="" data-no-retina=""></a>
                            </div><div class="swiper-slide padding-10px-all swiper-slide-duplicate" data-swiper-slide-index="1" style="width: 265.75px; margin-right: 30px;">
                                <a href="single-project-page-02.html" target="_blank"><img src="images/pofo-portfolio-layout-img-02.jpg" class="width-100 box-shadow-large" alt="" data-no-retina=""></a>
                            </div><div class="swiper-slide padding-10px-all swiper-slide-duplicate" data-swiper-slide-index="2" style="width: 265.75px; margin-right: 30px;">
                                <a href="single-project-page-03.html" target="_blank"><img src="images/pofo-portfolio-layout-img-03.jpg" class="width-100 box-shadow-large" alt="" data-no-retina=""></a>
                            </div><div class="swiper-slide padding-10px-all swiper-slide-duplicate" data-swiper-slide-index="3" style="width: 265.75px; margin-right: 30px;">
                                <a href="single-project-page-04.html" target="_blank"><img src="images/pofo-portfolio-layout-img-04.jpg" class="width-100 box-shadow-large" alt="" data-no-retina=""></a>
                            </div><div class="swiper-slide padding-10px-all swiper-slide-duplicate" data-swiper-slide-index="4" style="width: 265.75px; margin-right: 30px;">
                                <a href="single-project-page-05.html" target="_blank"><img src="images/pofo-portfolio-layout-img-05.jpg" class="width-100 box-shadow-large" alt="" data-no-retina=""></a>
                            </div><div class="swiper-slide padding-10px-all swiper-slide-duplicate" data-swiper-slide-index="5" style="width: 265.75px; margin-right: 30px;">
                                <a href="single-project-page-06.html" target="_blank"><img src="images/pofo-portfolio-layout-img-06.jpg" class="width-100 box-shadow-large" alt="" data-no-retina=""></a>
                            </div></div>
                        <div class="swiper-button-next swiper-button-black-highlight d-block d-lg-none" tabindex="0" role="button" aria-label="Next slide"></div>
                        <div class="swiper-button-prev swiper-button-black-highlight d-block d-lg-none" tabindex="0" role="button" aria-label="Previous slide"></div>
                    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
                </div>
            </div>
        </section>
        <!-- end product slider section -->

        <!-- start creative blog -->
        <section id="blog" class="bg-charcoal-gray wow fadeIn">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-8 text-center margin-80px-bottom md-margin-50px-bottom sm-margin-30px-bottom last-paragraph-no-margin">
                        <span class="text-extra-large d-block alt-font text-white-2 margin-10px-bottom font-weight-600">Creative Blog Style</span>
                        <p class="width-70 md-width-80 sm-width-100 mb-0 mx-auto">Professional blog layouts with many different listing styles and various post formats like image, gallery, slider, video, audio and quote.</p>
                    </div>
                </div>
            </div>
            <div class="containe-fluid padding-15px-lr">
                <div class="row">
                    <div class="col-12 text-center wow fadeIn">
                        <img src="images/pofo-creativeblog-style.png" alt="" />
                    </div>
                    <div class="col-12 text-center margin-80px-top md-margin-50px-top sm-margin-30px-top wow fadeIn">
                        <a href="/blog" class="btn btn-large btn-rounded btn-deep-pink">Explore Blog Topics</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- end creative blog -->
@endsection
