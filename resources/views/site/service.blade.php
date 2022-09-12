<!-- ======= Services Section ======= -->
<section id="services" class="services section-bg">
  <div class="container" data-aos="fade-up">

    <header class="section-header">
      <h3>Services</h3>
      <p>Laudem latine persequeris id sed, ex fabulas delectus quo. No vel partiendo abhorreant vituperatoribus.</p>
    </header>
@php
    $number=[100,200,300,100,200,300];
    $color=['#ff689b','#e98e06','#3fcdc7','#41cf2e','#2282ff','#8660fe']
@endphp
    <div class="row g-5">
@foreach ($services as $service )
<div class="col-md-6 col-lg-4 {{ ($loop->index==0)?'wow bounceInUp':''  }} " data-aos="zoom-in" data-aos-delay="{{ $number[$loop->index] }}">
    <div class="box">
      <div class="icon" style="background: #fceef3;"><i class="{{ $service->icon }}" style="color: {{ $color[$loop->index] }};"></i></div>
      <h4 class="title"><a href="">{{ $service->title_en }}</a></h4>
      <p class="description">{!!  $service->content_en !!}</p>
    </div>
  </div>
@endforeach


  </div>

  </div>
</section>
