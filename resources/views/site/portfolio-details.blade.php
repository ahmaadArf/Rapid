@extends('site.master')
@section('title','Portfolio Details | '.env('APP_NAME'))
@php
    $name = 'name_'.app()->currentLocale();
    $description = 'description_'.app()->currentLocale();
@endphp
  @section('content')
  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="{{ route('site.index') }}">Home</a></li>
          <li>Portfolio Details</li>
        </ol>
        <h2>Portfolio Details</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-8">
            <div class="portfolio-details-slider swiper">
              <div class="swiper-wrapper align-items-center">
                @foreach ($detaile->PortfolioDetaileImages as $image )
                <div class="swiper-slide">
                    <img src="{{ asset('image/detaileImages/'.$image->path) }}" alt="">
                  </div>
                @endforeach

              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="portfolio-info">
              <h3>Project information</h3>
              <ul>
                {{--   --}}
                <li><strong>Category</strong>: {{ $detaile->PortfolioCategry->$name }}  </li>
                <li><strong>Client</strong>: {{ $detaile->client->$name  }}</li>
                <li><strong>Project date</strong>: {{ $detaile->project_Date}}</li>
                <li><strong>Project URL</strong>: <a href="{{ $detaile->project_URL}}">{{ $detaile->project_URL}}</a></li>
              </ul>
            </div>
            <div class="portfolio-description">
              <h2>This is an example of portfolio detail</h2>
              <p>
                {!! $detaile->$description !!}
            </p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Details Section -->

  </main><!-- End main -->
@stop
