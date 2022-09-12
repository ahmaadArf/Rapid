
    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients">
      <div class="container" data-aos="zoom-in">

        <header class="section-header">
          <h3>Our Clients</h3>
        </header>

        <div class="clients-slider swiper">
          <div class="swiper-wrapper align-items-center">
            @foreach ($clinets as $clinet )
            <div class="swiper-slide"><img src="{{asset('image/clients/'.$clinet->image)}}" class="img-fluid" alt=""></div>

            @endforeach
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Clients Section -->
