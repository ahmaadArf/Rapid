@extends('site.master')
@section('title','Home | '.env('APP_NAME'))
@section('content')
@php
    $name = 'name_'.app()->currentLocale();
    $job = 'job_'.app()->currentLocale();
    $comment = 'comment_'.app()->currentLocale();
    $questionn = 'question_'.app()->currentLocale();
    $answer = 'answer_'.app()->currentLocale();
@endphp
@include('site.hero')
<main id="main">
    @include('site.about')

    @include('site.service')

    @include('site.whyUs')

    <!-- ======= Call To Action Section ======= -->
    <section id="call-to-action" class="call-to-action">
      <div class="container" data-aos="zoom-out">
        <div class="row">
          <div class="col-lg-9 text-center text-lg-start">
            <h3 class="cta-title">Call To Action</h3>
            <p class="cta-text"> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="#">Call To Action</a>
          </div>
        </div>

      </div>
    </section>

    @include('site.feature')

    @include('site.portfolio')

    @include('site.testimonial')

    @include('site.team')

    @include('site.client')

    @include('site.pricing')

    @include('site.faq')

  </main>
@stop
