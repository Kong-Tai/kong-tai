@extends('layouts.app')

@section('content')
        <!-- start page title section -->
        <section class="wow fadeIn parallax" data-stellar-background-ratio="0.5" style="background-image: url(&quot;images/parallax-bg39.jpg&quot;); background-position: 0px 0px; visibility: visible; animation-name: fadeIn;">
            <div class="opacity-medium bg-extra-dark-gray"></div>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 d-flex flex-column justify-content-center text-center extra-small-screen page-title-large">
                        <!-- start page title -->
                        <h1 class="text-white-2 alt-font font-weight-600 letter-spacing-minus-1 margin-10px-bottom">Blog list</h1>
                        <span class="text-white-2 opacity6 alt-font">Lorem Ipsum is simply dummy text printing</span>
                        <!-- end page title -->
                    </div>
                </div>
            </div>
        </section>

        <!-- start post content section -->
        <all-post />
        <!-- end post content section -->
@endsection
