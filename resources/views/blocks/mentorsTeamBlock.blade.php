<br><br>
<div class="text-center mx-auto  wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
    <h4 class="text-primary">Our Mentors</h4>
    <h1 class="display-5 ">Meet Our Mentors </h1>
  </div>
  <section class="container">
    <div class="swiper mySwiper3 container">
      <div class="swiper-wrapper content">
      @foreach ($menteam as $menteam) 
      <div class="swiper-slide card" style="height: auto;">
          <div class="card-content">
            <div class="image">
              <img src="/img/{{$menteam->img}}" alt="">
            </div>
  
            <div class="media-icons">
              <a href="https://{{$menteam->tgusername}}.t.me" target="_blank"><i class="fab fa-telegram"></i></a>
              <a href="https://www.instagram.com/{{$menteam->instagramlink}}" target="_blank"><i class="fab fa-instagram" ></i></a>
            </div>
            <br>
            <div class="name-profession">
              <span class="name"> {{$menteam->name}} {{$menteam->surname}}</span>
              <span class="profession">{{$menteam->rolename}}</span>
  
            </div>
  
          </div>
        </div>
        @endforeach
  
      </div>
    </div>
  
    <div class="swiper-button-next swiper-button-next-3"></div>
    <div class="swiper-button-prev swiper-button-prev-3"></div>
    <div class="swiper-pagination"></div>
  </section>