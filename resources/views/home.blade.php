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
                                <div class="text-white-2-transparent mb-3 text-leftside-line text-medium-gray">YOUNG BLOOD</div>
                                <h1 class="font-weight-500 margin-40px-bottom demo-heading" style="background: linear-gradient(to right, #B21F1F 3%, #F6C81D 40%,  #296330 90%);">I am a Humble African</h1>
                                <a class="btn btn-small btn-rounded btn-transparent-deep-pink inner-link" href="#demos">Explore Demo<i class="ti-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end hero section -->
        <section id="demos" class="half-section wow fadeIn">
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
                                <a href="home-classic-corporate.html" target="_blank">
                                    <div class="portfolio-img bg-extra-dark-gray"><img src="images/pofo-portfolio-classic-corporate.jpg" alt="" data-no-retina=""></div>
                                    <span class="portfolio-item-title">Classic Corporate</span>
                                </a>
                            </li>
                            <!-- end portfolio item -->
                            <!-- start portfolio item -->
                            <li class="grid-item classic fadeInUp" data-wow-delay="0.2s" style="visibility: visible;animation-delay: 0.2s;animation-name: fadeInUp;position: absolute;left: 25%;top: 0px;">
                                <a href="home-classic-digital-agency.html" target="_blank">
                                    <div class="portfolio-img bg-extra-dark-gray"><img src="images/pofo-portfolio-digital-agency.jpg" alt="" data-no-retina=""></div>
                                    <span class="portfolio-item-title">Digital Agency</span>
                                </a>
                            </li>
                            <!-- end portfolio item -->
                            <!-- start portfolio item -->
                            <li class="grid-item creative fadeInUp" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp; position: absolute; left: 50%; top: 0px;">
                                <a href="home-creative-studio.html" target="_blank">
                                    <div class="portfolio-img bg-extra-dark-gray"><img src="images/pofo-portfolio-creative-studio.jpg" alt="" data-no-retina=""></div>
                                    <span class="portfolio-item-title">Creative Studio</span>
                                </a>
                            </li>
                            <!-- end portfolio item -->
                            <!-- start portfolio item -->
                            <li class="grid-item classic fadeInUp" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp; position: absolute; left: 75%; top: 0px;">
                                <a href="home-classic-interactive-agency.html" target="_blank">
                                    <div class="portfolio-img bg-extra-dark-gray"><img src="images/pofo-portfolio-interactive-agency.jpg" alt="" data-no-retina=""></div>
                                    <span class="portfolio-item-title">Interactive Agency</span>
                                </a>
                            </li>
                            <!-- end portfolio item -->
                            <!-- start portfolio item -->
                            <li class="grid-item classic fadeInUp" style="visibility: visible; animation-name: fadeInUp; position: absolute; left: 0%; top: 394.063px;">
                                <a href="home-classic-web-agency.html" target="_blank">
                                    <div class="portfolio-img bg-extra-dark-gray"><img src="images/pofo-portfolio-web-agency.jpg" alt="" data-no-retina=""></div>
                                    <span class="portfolio-item-title">Web Agency</span>
                                </a>
                            </li>
                            <!-- end portfolio item -->
                            <!-- start portfolio item -->
                            <li class="grid-item classic fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp; position: absolute; left: 25%; top: 394.063px;">
                                <a href="home-classic-one-page.html" target="_blank">
                                    <div class="portfolio-img bg-extra-dark-gray"><img src="images/pofo-portfolio-classic-one-page.jpg" alt="" data-no-retina=""></div>
                                    <span class="portfolio-item-title">Classic One Page</span>
                                </a>
                            </li>
                            <!-- end portfolio item -->
                            <!-- start portfolio item -->
                            <li class="grid-item creative fadeInUp" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp; position: absolute; left: 50%; top: 394.063px;">
                                <a href="home-creative-business.html" target="_blank">
                                    <div class="portfolio-img bg-extra-dark-gray"><img src="images/pofo-portfolio-creative-business.jpg" alt="" data-no-retina=""></div>
                                    <span class="portfolio-item-title">Creative Business</span>
                                </a>
                            </li>
                            <!-- end portfolio item -->
                            <!-- start portfolio item -->
                            <li class="grid-item classic fadeInUp" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp; position: absolute; left: 75%; top: 394.063px;">
                                <a href="home-classic-innovation-agency.html" target="_blank">
                                    <div class="portfolio-img bg-extra-dark-gray"><img src="images/pofo-portfolio-innovation-agency.jpg" alt="" data-no-retina=""></div>
                                    <span class="portfolio-item-title">Innovation Agency</span>
                                </a>
                            </li>
                            <!-- end portfolio item -->
                            <!-- start portfolio item -->
                            <li class="grid-item creative fadeInUp" style="visibility: visible; animation-name: fadeInUp; position: absolute; left: 0%; top: 788.126px;">
                                <a href="home-creative-small-business.html" target="_blank">
                                    <div class="portfolio-img bg-extra-dark-gray"><img src="images/pofo-portfolio-small-business.jpg" alt="" data-no-retina=""></div>
                                    <span class="portfolio-item-title">Small Business</span>
                                </a>
                            </li>
                            <!-- end portfolio item -->
                            <!-- start portfolio item -->
                            <li class="grid-item portfolio fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp; position: absolute; left: 25%; top: 788.126px;">
                                <a href="home-portfolio-minimal.html" target="_blank">
                                    <div class="portfolio-img bg-extra-dark-gray"><img src="images/pofo-portfolio-minimal.jpg" alt="" data-no-retina=""></div>
                                    <span class="portfolio-item-title">Minimal Portfolio</span>
                                </a>
                            </li>
                            <!-- end portfolio item -->
                            <!-- start portfolio item -->
                            <li class="grid-item classic fadeInUp" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp; position: absolute; left: 50%; top: 788.126px;">
                                <a href="home-classic-start-up.html" target="_blank">
                                    <div class="portfolio-img bg-extra-dark-gray"><img src="images/pofo-portfolio-classic-start-up.jpg" alt="" data-no-retina=""></div>
                                    <span class="portfolio-item-title">Classic Start-Up</span>
                                </a>
                            </li>
                            <!-- end portfolio item -->
                            <!-- start portfolio item -->
                            <li class="grid-item portfolio fadeInUp" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp; position: absolute; left: 75%; top: 788.126px;">
                                <a href="home-portfolio-parallax.html" target="_blank">
                                    <div class="portfolio-img bg-extra-dark-gray"><img src="images/pofo-portfolio-parallax.jpg" alt="" data-no-retina=""></div>
                                    <span class="portfolio-item-title">Parallax Portfolio</span>
                                </a>
                            </li>
                            <!-- end portfolio item -->
                            <!-- start portfolio item -->
                            <li class="grid-item blog fadeInUp" style="visibility: visible; animation-name: fadeInUp; position: absolute; left: 0%; top: 1182.19px;">
                                <a href="home-blog-clean.html" target="_blank">
                                    <div class="portfolio-img bg-extra-dark-gray"><img src="images/pofo-portfolio-blog-clean.jpg" alt="" data-no-retina=""></div>
                                    <span class="portfolio-item-title">Blog Clean</span>
                                </a>
                            </li>
                            <!-- end portfolio item -->
                            <!-- start portfolio item -->
                            <li class="grid-item creative fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp; position: absolute; left: 25%; top: 1182.19px;">
                                <a href="home-creative-branding-agency.html" target="_blank">
                                    <div class="portfolio-img bg-extra-dark-gray"><img src="images/pofo-portfolio-branding-agency.jpg" alt="" data-no-retina=""></div>
                                    <span class="portfolio-item-title">Branding Agency</span>
                                </a>
                            </li>
                            <!-- end portfolio item -->
                            <!-- start portfolio item -->
                            <li class="grid-item blog fadeInUp" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp; position: absolute; left: 50%; top: 1182.19px;">
                                <a href="home-blog-personal.html" target="_blank">
                                    <div class="portfolio-img bg-extra-dark-gray"><img src="images/pofo-portfolio-blog-personal.jpg" alt="" data-no-retina=""></div>
                                    <span class="portfolio-item-title">Blog Personal</span>
                                </a>
                            </li>
                            <!-- end portfolio item -->
                            <!-- start portfolio item -->
                            <li class="grid-item portfolio fadeInUp" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp; position: absolute; left: 75%; top: 1182.19px;">
                                <a href="home-portfolio-photographer.html" target="_blank">
                                    <div class="portfolio-img bg-extra-dark-gray"><img src="images/pofo-portfolio-photographer.jpg" alt="" data-no-retina=""></div>
                                    <span class="portfolio-item-title">Photographer Portfolio</span>
                                </a>
                            </li>
                            <!-- end portfolio item -->
                            <!-- start portfolio item -->
                            <li class="grid-item portfolio fadeInUp" style="visibility: visible; animation-name: fadeInUp; position: absolute; left: 0%; top: 1576.25px;">
                                <a href="home-portfolio-metro.html" target="_blank">
                                    <div class="portfolio-img bg-extra-dark-gray"><img src="images/pofo-portfolio-metro-portfolio.jpg" alt="" data-no-retina=""></div>
                                    <span class="portfolio-item-title">Metro Portfolio</span>
                                </a>
                            </li>
                            <!-- end portfolio item -->
                            <!-- start portfolio item -->
                            <li class="grid-item blog fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp; position: absolute; left: 25%; top: 1576.25px;">
                                <a href="home-blog-masonry.html" target="_blank">
                                    <div class="portfolio-img bg-extra-dark-gray"><img src="images/pofo-portfolio-blog-masonry.jpg" alt="" data-no-retina=""></div>
                                    <span class="portfolio-item-title">Blog Masonry</span>
                                </a>
                            </li>
                            <!-- end portfolio item -->
                            <!-- start portfolio item -->
                            <li class="grid-item creative fadeInUp" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp; position: absolute; left: 50%; top: 1576.25px;">
                                <a href="home-creative-designer.html" target="_blank">
                                    <div class="portfolio-img bg-extra-dark-gray"><img src="images/pofo-portfolio-creative-designer.jpg" alt="" data-no-retina=""></div>
                                    <span class="portfolio-item-title">Creative Designer</span>
                                </a>
                            </li>
                            <!-- end portfolio item -->
                            <!-- start portfolio item -->
                            <li class="grid-item blog fadeInUp" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp; position: absolute; left: 75%; top: 1576.25px;">
                                <a href="home-blog-grid.html" target="_blank">
                                    <div class="portfolio-img bg-extra-dark-gray"><img src="images/pofo-portfolio-blog-grid.jpg" alt="" data-no-retina=""></div>
                                    <span class="portfolio-item-title">Blog Grid</span>
                                </a>
                            </li>
                            <!-- end portfolio item -->
                            <!-- start portfolio item -->
                            <li class="grid-item portfolio fadeInUp" style="visibility: visible; animation-name: fadeInUp; position: absolute; left: 0%; top: 1970.32px;">
                                <a href="home-portfolio-personal.html" target="_blank">
                                    <div class="portfolio-img bg-extra-dark-gray"><img src="images/pofo-portfolio-personal.jpg" alt="" data-no-retina=""></div>
                                    <span class="portfolio-item-title">Personal Portfolio</span>
                                </a>
                            </li>
                            <!-- end portfolio item -->
                            <!-- start portfolio item -->
                            <li class="grid-item portfolio fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp; position: absolute; left: 25%; top: 1970.32px;">
                                <a href="home-portfolio-multiple-carousel.html" target="_blank">
                                    <div class="portfolio-img bg-extra-dark-gray"><img src="images/pofo-portfolio-multiple-carousel.jpg" alt="" data-no-retina=""></div>
                                    <span class="portfolio-item-title">Multiple Carousel Portfolio</span>
                                </a>
                            </li>
                            <!-- end portfolio item -->
                            <!-- start portfolio item -->
                            <li class="grid-item other fadeInUp" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp; position: absolute; left: 50%; top: 1970.32px;">
                                <a href="maintenance.html" target="_blank">
                                    <div class="portfolio-img bg-extra-dark-gray"><img src="images/pofo-under-maintenance.jpg" alt="" data-no-retina=""></div>
                                    <span class="portfolio-item-title">Under Maintenance</span>
                                </a>
                            </li>
                            <!-- end portfolio item -->
                            <!-- start portfolio item -->
                            <li class="grid-item other fadeInUp" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp; position: absolute; left: 75%; top: 1970.32px;">
                                <a href="coming-soon.html" target="_blank">
                                    <div class="portfolio-img bg-extra-dark-gray"><img src="images/pofo-portfolio-coming-soon.jpg" alt="" data-no-retina=""></div>
                                    <span class="portfolio-item-title">Coming Soon</span>
                                </a>
                            </li>
                            <!-- end portfolio item -->
                            <!-- start portfolio item -->
                            <li class="grid-item other fadeInUp" style="visibility: visible; animation-name: fadeInUp; position: absolute; left: 0%; top: 2235px;">
                                <a href="coming-soon-02.html" target="_blank">
                                    <div class="portfolio-img bg-extra-dark-gray"><img src="images/pofo-portfolio-coming-soon-02.jpg" alt="" data-no-retina=""></div>
                                    <span class="portfolio-item-title">Coming Soon - Style 02</span>
                                </a>
                            </li>
                            <!-- end portfolio item -->
                            <!-- start portfolio item -->
                            <li class="grid-item creative fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp; position: absolute; left: 25%; top: 2235px;">
                                <a href="home-creative-simple-portfolio.html" target="_blank">
                                    <div class="portfolio-img bg-extra-dark-gray"><img src="images/pofo-portfolio-left-menu-classic.jpg" alt="" data-no-retina=""></div>
                                    <span class="portfolio-item-title">Creative Simple Portfolio</span>
                                </a>
                            </li>
                            <!-- end portfolio item -->
                            <!-- start portfolio item -->
                            <li class="grid-item portfolio fadeInUp" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp; position: absolute; left: 50%; top: 2235px;">
                                <a href="home-portfolio-full-screen-vertical.html" target="_blank">
                                    <div class="portfolio-img bg-extra-dark-gray"><img src="images/pofo-portfolio-full-screen-vertical.jpg" alt="" data-no-retina=""></div>
                                    <span class="portfolio-item-title">Vertical Portfolio</span>
                                </a>
                            </li>
                            <!-- end portfolio item -->
                            <!-- start portfolio item -->
                            <li class="grid-item portfolio fadeInUp" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp; position: absolute; left: 75%; top: 2235px;">
                                <a href="home-portfolio-centered-slides.html" target="_blank">
                                    <div class="portfolio-img bg-extra-dark-gray"><img src="images/pofo-portfolio-centered-slides.jpg" alt="" data-no-retina=""></div>
                                    <span class="portfolio-item-title">Centered Slides Portfolio</span>
                                </a>
                            </li>
                            <!-- end portfolio item -->
                            <!-- start portfolio item -->
                            <li class="grid-item portfolio fadeInUp" style="visibility: visible; animation-name: fadeInUp; position: absolute; left: 0%; top: 2499.69px;">
                                <a href="home-creative-agency.html" target="_blank">
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
@endsection
