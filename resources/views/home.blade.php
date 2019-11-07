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

        <home-portfolio
        :portfolio="{{ json_encode($portfolio) }}"
        :categories="{{ json_encode($categories) }}"
        ></home-portfolio>
        <home-counter></home-counter>
        <home-gallery></home-gallery>
@endsection
