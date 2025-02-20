<br><br>
<div class="text-center mx-auto  wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
    <h4 class="text-primary">Our Team</h4>
    <h1 class="display-5 ">Meet Our Coordinating Team </h1>
  </div>
  <section class="container">
    <div class="swiper mySwiper1 container">
      <div class="swiper-wrapper content">
      @foreach ($adminteam as $ateam) 
      <div class="swiper-slide card" style="height: auto;">
          <div class="card-content">
            <div class="image">
              <img src="/img/{{$ateam->img}}" alt="">
            </div>
  
            <div class="media-icons">
              <a href="https://{{$ateam->tgusername}}.t.me" target="_blank"><i class="fab fa-telegram"></i></a>
              <a href="https://www.instagram.com/{{$ateam->instagramlink}}" target="_blank"><i class="fab fa-instagram" ></i></a>
            </div>
            <br>
            <div class="name-profession">
              <span class="name"> {{$ateam->name}} {{$ateam->surname}}</span>
              <span class="profession">{{$ateam->rolename}}</span>
  
            </div>
  
          </div>
        </div>
        @endforeach
  
      </div>
    </div>
  
    <div class="swiper-button-next swiper-button-next-1"></div>
    <div class="swiper-button-prev swiper-button-prev-1"></div>
    <div class="swiper-pagination"></div>
  </section>