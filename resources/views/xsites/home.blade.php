@extends('layouts.frontends')
@section('content')
    
        <!-- ======= Hero Section ======= -->
        <section id="hero" class="d-flex justify-content-center align-items-center" style="background: url('{{config('xsekolah.image_banner_url')}}');">
            <div class="container position-relative" data-aos="zoom-in" data-aos-delay="100">
                <h1>{{config('xsekolah.welcome_message')}}</h1>
                <p style="color: white;">{{config('xsekolah.welcome_message2')}}</p>
                <a href="/login" class="btn-get-started">LOGIN</a>
            </div>
        </section><!-- End Hero -->

        <main id="main">

            <!-- ======= Popular Courses Section ======= -->
            <section id="popular-courses" class="courses">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
               

                </div>

            </div>
            </section><!-- End Popular Courses Section -->


        </main><!-- End #main -->
@stop