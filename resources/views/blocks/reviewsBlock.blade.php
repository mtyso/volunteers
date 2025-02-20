<br><br>
<div class="container-fluid testimonial pb-5">
    <div class="container pb-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
            <h1 class="section-title display-5 mb-4">Our Guests' Reviews</h1>
            <p class="mb-0">At al-Kwarizmi Volunteers, we believe that the heart of our community thrives
                through the selfless dedication of volunteers. Their stories, experiences, and insights not only
                inspire others but also help us grow and improve our initiatives. This section is dedicated to
                sharing genuine reviews for our incredible volunteers, showcasing their journeys, the impact
                they’ve made, and the joy they’ve found in giving back.
            </p>
        </div>
        <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.2s">
            @foreach ($reviews as $r) 
                <div class="testimonial-item">
                    <div class="testimonial-quote-left">
                        <i class="fas fa-quote-left fa-2x"></i>
                    </div>
                    <br><br>
                    <div class="testimonial-avatar-container">
                        <a href="/events/{{$r->event_id}}"><img src="/img/{{$r->event_img}}" alt="photo of {{$r->name}}" class="testimonial-avatar"></a>
                    </div>
                    <div class="testimonial-text">
                        <p class="mb-0">{{$r->content}}</p>
                    </div>
                    <div class="testimonial-title">
                        
                        <div>
                            <h4 class="mb-0">{{$r->name}} {{$r->surname}}</h4>
                            <a class="mb-0" href="/events/{{$r->event_id}}">{{$r->eventname}}</a>
                        </div>
                        <div>
                            <div class="d-flex text-primary">
                                @for($i=1; $i <= $r->stars; $i++) 
                                    <i class="fas fa-star"></i>
                                @endfor
                                
                            </div>
                        </div> 
                    </div>
                    
                    <div class="testimonial-quote-right">
                        
                        <i class="fas fa-quote-right fa-2x"></i>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>