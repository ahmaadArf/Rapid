
    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio section-bg">
      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h3 class="section-title">Our Portfolio</h3>
        </header>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              @foreach ($categries as $categry)
              <li data-filter=".filter-{{ $categry->$name }}">{{ $categry->$name }}</li>
              @endforeach
            </ul>
          </div>
        </div>
        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
            @foreach ($detailes  as $detaile )
            <div class="col-lg-4 col-md-6 portfolio-item filter-{{ $detaile->PortfolioCategry->$name }}">
                <div class="portfolio-wrap">
                  <img  src="{{asset('image/detaileImages/'.$detaile->PortfolioDetaileImages->first()->path)}}" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4><a href="{{ route('site.portfolio-details',['catogry'=>$detaile->PortfolioCategry->$name,'id'=>$detaile->id]) }}">{{ $detaile->$name }}</a></h4>
                    <p>{{ $detaile->PortfolioCategry->$name }}</p>
                    <div>
                      <a href="{{asset('image/detaileImages/'.$detaile->PortfolioDetaileImages->first()->path)}}" data-gallery="portfolioGallery" title="{{ $detaile->$name }}" class="link-preview portfolio-lightbox"><i class="bi bi-plus"></i></a>
                      <a href="{{ route('site.portfolio-details',['catogry'=>$detaile->PortfolioCategry->$name,'id'=>$detaile->id]) }}" class="link-details" title="More Details"><i class="bi bi-link"></i></a>
                    </div>
                  </div>
                </div>
              </div>

            @endforeach

{{--
          <div class="col-lg-4 col-md-6 portfolio-item filter-web" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <img src="{{asset('siteasset/assets/img/portfolio/web3.jpg')}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="{{ route('site.portfolio-details',$detaile->id) }}">Web 3</a></h4>
                <p>Web</p>
                <div>
                  <a href="{{asset('siteasset/assets/img/portfolio/web3.jpg')}}" class="link-preview portfolio-lightbox" data-gallery="portfolioGallery" title="Web 3"><i class="bi bi-plus"></i></a>
                  <a href="portfolio-details.html" class="link-details" title="More Details"><i class="bi bi-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <img src="{{asset('siteasset/assets/img/portfolio/app2.jpg')}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="portfolio-details.html">App 2</a></h4>
                <p>App</p>
                <div>
                  <a href="{{asset('siteasset/assets/img/portfolio/app2.jpg')}}" class="link-preview portfolio-lightbox" data-gallery="portfolioGallery" title="App 2"><i class="bi bi-plus"></i></a>
                  <a href="portfolio-details.html" class="link-details" title="More Details"><i class="bi bi-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="{{asset('siteasset/assets/img/portfolio/card2.jpg')}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="portfolio-details.html">Card 2</a></h4>
                <p>Card</p>
                <div>
                  <a href="{{asset('siteasset/assets/img/portfolio/card2.jpg')}}" class="link-preview portfolio-lightbox" data-gallery="portfolioGallery" title="Card 2"><i class="bi bi-plus"></i></a>
                  <a href="portfolio-details.html" class="link-details" title="More Details"><i class="bi bi-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <img src="{{asset('siteasset/assets/img/portfolio/web2.jpg')}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="portfolio-details.html">Web 2</a></h4>
                <p>Web</p>
                <div>
                  <a href="{{asset('siteasset/assets/img/portfolio/web2.jpg')}}" class="link-preview portfolio-lightbox" data-gallery="portfolioGallery" title="Web 2"><i class="bi bi-plus"></i></a>
                  <a href="portfolio-details.html" class="link-details" title="More Details"><i class="bi bi-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <img src="{{asset('siteasset/assets/img/portfolio/app3.jpg')}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="portfolio-details.html">App 3</a></h4>
                <p>App</p>
                <div>
                  <a href="{{asset('siteasset/assets/img/portfolio/app3.jpg')}}" class="link-preview portfolio-lightbox" data-gallery="portfolioGallery" title="App 3"><i class="bi bi-plus"></i></a>
                  <a href="portfolio-details.html" class="link-details" title="More Details"><i class="bi bi-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="{{asset('siteasset/assets/img/portfolio/card1.jpg')}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="portfolio-details.html">Card 1</a></h4>
                <p>Card</p>
                <div>
                  <a href="{{asset('siteasset/assets/img/portfolio/card1.jpg')}}" class="link-preview portfolio-lightbox" data-gallery="portfolioGallery" title="Card 1"><i class="bi bi-plus"></i></a>
                  <a href="portfolio-details.html" class="link-details" title="More Details"><i class="bi bi-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <img src="{{asset('siteasset/assets/img/portfolio/card3.jpg')}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="portfolio-details.html">Card 3</a></h4>
                <p>Card</p>
                <div>
                  <a href="{{asset('siteasset/assets/img/portfolio/card3.jpg')}}" class="link-preview portfolio-lightbox" data-gallery="portfolioGallery" title="Card 3"><i class="bi bi-plus"></i></a>
                  <a href="portfolio-details.html" class="link-details" title="More Details"><i class="bi bi-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <img src="{{asset('siteasset/assets/img/portfolio/web1.jpg')}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="portfolio-details.html">Web 1</a></h4>
                <p>Web</p>
                <div>
                  <a href="{{asset('siteasset/assets/img/portfolio/web1.jpg')}}" class="link-preview portfolio-lightbox" data-gallery="portfolioGallery" title="Web 1"><i class="bi bi-plus"></i></a>
                  <a href="portfolio-details.html" class="link-details" title="More Details"><i class="bi bi-link"></i></a>
                </div>
              </div>
            </div>
          </div>  --}}

        </div>

      </div>
    </section><!-- End Portfolio Section -->
