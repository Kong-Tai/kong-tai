@extends('layouts.app')

@section('content')

        <view-portfolio
        :portfolio="{{ json_encode($portfolio) }}"
        >
        </view-portfolio>

        <!-- start related work section -->
        <section class="wow fadeIn bg-light-gray" style="visibility: visible; animation-name: fadeIn;">
            <div class="container-fluid padding-thirteen-lr lg-no-padding-lr sm-padding-15px-lr">
                <div class="row">
                    <div class="col-12 col-lg-8 col-md-10 mx-auto text-center last-paragraph-no-margin">
                        <h4 class="alt-font font-weight-600 text-extra-dark-gray">Related Work</h4>
                    </div>
                </div>
                <div class="row no-gutters">
                    <div class="col filter-content overflow-hidden">
                        <ul class="portfolio-grid work-4col gutter-large hover-option6 lightbox-portfolio" style="position: relative; height: 363.366px;">
                            <li class="grid-sizer"></li>
                            <!-- start  portfolio item -->
                            <li class="design web photography grid-item fadeInUp last-paragraph-no-margin" style="visibility: visible; animation-name: fadeInUp; position: absolute; left: 0%; top: 0px;">
                                <figure>
                                    <div class="portfolio-img bg-deep-pink position-relative text-center overflow-hidden">
                                        <img src="images/portfolio-item27.jpg" alt="" data-no-retina="">
                                        <div class="portfolio-icon">
                                            <a href="single-project-page-01.html"><i class="fas fa-link text-extra-dark-gray" aria-hidden="true"></i></a>
                                            <a class="gallery-link" title="IMAGE TITLE" href="images/portfolio-item27.jpg"><i class="fas fa-search text-extra-dark-gray" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                    <figcaption class="bg-white">
                                        <div class="portfolio-hover-main text-center">
                                            <div class="portfolio-hover-box align-middle">
                                                <div class="portfolio-hover-content position-relative">
                                                    <a href="single-project-page-01.html"><span class="line-height-normal font-weight-600 text-small alt-font margin-5px-bottom text-extra-dark-gray text-uppercase d-block">Herbal Beauty Salon</span></a>
                                                    <p class="text-medium-gray text-extra-small text-uppercase">Branding and Identity</p>
                                                </div>
                                            </div>
                                        </div>
                                    </figcaption>
                                </figure>
                            </li>
                            <!-- end portfolio item -->
                            <!-- start portfolio item -->
                            <li class="advertising grid-item fadeInUp last-paragraph-no-margin" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp; position: absolute; left: 25%; top: 0px;">
                                <figure>
                                    <div class="portfolio-img bg-deep-pink position-relative text-center overflow-hidden">
                                        <img src="images/portfolio-item40.jpg" alt="" data-no-retina="">
                                        <div class="portfolio-icon">
                                            <a href="single-project-page-02.html"><i class="fas fa-link text-extra-dark-gray" aria-hidden="true"></i></a>
                                            <a class="gallery-link" title="IMAGE TITLE" href="images/portfolio-item40.jpg"><i class="fas fa-search text-extra-dark-gray" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                    <figcaption class="bg-white">
                                        <div class="portfolio-hover-main text-center">
                                            <div class="portfolio-hover-box align-middle">
                                                <div class="portfolio-hover-content position-relative">
                                                    <a href="single-project-page-02.html"><span class="line-height-normal font-weight-600 text-small alt-font margin-5px-bottom text-extra-dark-gray text-uppercase d-block">Tailoring Interior</span></a>
                                                    <p class="text-medium-gray text-extra-small text-uppercase">Branding and Brochure</p>
                                                </div>
                                            </div>
                                        </div>
                                    </figcaption>
                                </figure>
                            </li>
                            <!-- end portfolio item -->
                            <!-- start portfolio item -->
                            <li class="branding photography advertising web grid-item fadeInUp last-paragraph-no-margin" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp; position: absolute; left: 49.9999%; top: 0px;">
                                <figure>
                                    <div class="portfolio-img bg-deep-pink position-relative text-center overflow-hidden">
                                        <img src="images/portfolio-item28.jpg" alt="" data-no-retina="">
                                        <div class="portfolio-icon">
                                            <a href="single-project-page-03.html"><i class="fas fa-link text-extra-dark-gray" aria-hidden="true"></i></a>
                                            <a class="gallery-link" title="IMAGE TITLE" href="images/portfolio-item28.jpg"><i class="fas fa-search text-extra-dark-gray" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                    <figcaption class="bg-white">
                                        <div class="portfolio-hover-main text-center">
                                            <div class="portfolio-hover-box align-middle">
                                                <div class="portfolio-hover-content position-relative">
                                                    <a href="single-project-page-03.html"><span class="line-height-normal font-weight-600 text-small alt-font margin-5px-bottom text-extra-dark-gray text-uppercase d-block">Designblast Inc</span></a>
                                                    <p class="text-medium-gray text-extra-small text-uppercase">Web and Photography</p>
                                                </div>
                                            </div>
                                        </div>
                                    </figcaption>
                                </figure>
                            </li>
                            <!-- end portfolio item -->
                            <!-- start portfolio item -->
                            <li class="design photography grid-item fadeInUp last-paragraph-no-margin" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp; position: absolute; left: 74.9999%; top: 0px;">
                                <figure>
                                    <div class="portfolio-img bg-deep-pink position-relative text-center overflow-hidden">
                                        <img src="images/portfolio-item30.jpg" alt="" data-no-retina="">
                                        <div class="portfolio-icon">
                                            <a href="single-project-page-04.html"><i class="fas fa-link text-extra-dark-gray" aria-hidden="true"></i></a>
                                            <a class="gallery-link" title="IMAGE TITLE" href="images/portfolio-item30.jpg"><i class="fas fa-search text-extra-dark-gray" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                    <figcaption class="bg-white">
                                        <div class="portfolio-hover-main text-center">
                                            <div class="portfolio-hover-box align-middle">
                                                <div class="portfolio-hover-content position-relative">
                                                    <a href="single-project-page-04.html"><span class="line-height-normal font-weight-600 text-small alt-font margin-5px-bottom text-extra-dark-gray text-uppercase d-block">HardDot Stone</span></a>
                                                    <p class="text-medium-gray text-extra-small text-uppercase">Branding and Identity</p>
                                                </div>
                                            </div>
                                        </div>
                                    </figcaption>
                                </figure>
                            </li>
                            <!-- end portfolio item -->
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- end portfolio section -->
@endsection
