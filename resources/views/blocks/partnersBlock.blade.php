<br><br>
<div class="container-fluid feature pb-5">
    <div class="container pb-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
            <h1 class="section-title display-5 mb-4" >Our partners</h1>
            <p class="mb-0">At Al-Khwarizmi Volunteers, we understand that meaningful change happens through collaboration. Our volunteer partners play a vital role in expanding our reach and enhancing our impact within the community. Together, we create opportunities for individuals to engage, learn, and grow through service. Join us in honoring their support and dedication!
            </p>
        </div>
        <div class="row g-4">
            @foreach ($partners as $p) 
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="feature-item p-4">
                        <div class="feature-icon p-4 mb-4">
                            <img class="img-fluid" src="/img/{{$p->img}}" alt="">
                        </div>
                        <h4>{!! $p->name !!}</h4>
                        <div class="blbla2">
                            <p class="mb-4">{{$p->content}}</p>
                        </div>
                        <br>
                        <a class="btn btn-primary rounded-pill py-2 px-4" href="/events/{{$p->event_id}}">Go to Event</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>