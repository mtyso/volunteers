<br><br>
<div class="text-center mx-auto  wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
    <h4 class="text-primary">Media Team</h4>
    <h1 class="display-5 ">Meet Our Media Team </h1>
  </div>
  <section class="container">
    <div class="swiper mySwiper2 container">
      <div class="swiper-wrapper content">
      @foreach ($mediateam as $mteam) 
      <div class="swiper-slide card" style="height: auto;">
          <div class="card-content">
            <div class="image">
              <img src="/img/{{$mteam->img}}" alt="">
            </div>
  
            <div class="media-icons">
              <a href="https://{{$mteam->tgusername}}.t.me" target="_blank"><i class="fab fa-telegram"></i></a>
              <a href="https://www.instagram.com/{{$mteam->instagramlink}}" target="_blank"><i class="fab fa-instagram" ></i></a>
            </div>
            <br>
            <div class="name-profession">
              <span class="name"> {{$mteam->name}} {{$mteam->surname}}</span>
              <span class="profession">{{$mteam->rolename}}</span>
  
            </div>
  
          </div>
        </div>
        @endforeach
  
      </div>
    </div>
  
    <div class="swiper-button-next swiper-button-next-2"></div>
    <div class="swiper-button-prev swiper-button-prev-2"></div>
    <div class="swiper-pagination"></div>
  </section>