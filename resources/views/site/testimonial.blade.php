<!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container" data-aos="zoom-in">
        {{--  testimonials  --}}
        <header class="section-header">
          <h3>Testimonials</h3>
        </header>

        <div class="row justify-content-center">
          <div class="col-lg-8">

            <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
              <div class="swiper-wrapper">
                @foreach ($testimonials as $testimonial )
                <div class="swiper-slide">
                    <div class="testimonial-item">
                      <img src="{{asset('image/testimonials/'.$testimonial->image)}}" class="testimonial-img" alt="">
                      <h3>{{$testimonial->$name }}</h3>
                      <h4>{{$testimonial->$job  }}</h4>
                      <p>
                        {{ $testimonial->$comment }}
                    </p>
                    </div>
                  </div>
                @endforeach
                </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->
