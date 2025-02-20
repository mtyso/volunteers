<br><br>
<div class="container-fluid service">
    <div class="container">
        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
            <h1 class="section-title display-5 mb-4">Our volunteering events </h1>
            <p class="mb-0">Celebrating Our Past Events – See the Impact We’ve Made Together! Explore the successful volunteer events we've already completed and the positive change they've created in the community. From hands-on projects to impactful initiatives, these events showcase the power of collective action in making a difference.
            </p>
        </div>

        <div class="section">
            @if(Auth::user() && Auth::user()->is_admin)
                <a href="{{ route('events.create') }}" class="btn btn-primary mb-4">Create Event</a>
            @endif
            <div class="micro-slider row g-4">
                @foreach ($events as $e) 
                    <div class="slider-item s1 " data-href="/events/{{$e->id}}" > 
                        <div class="service-img">
                            <img src="/img/{{$e->img}}" class="img-fluid rounded-top w-100" alt="Image">
                        </div>
                        <div class="rounded-bottom p-4">
                            <a href="" class="h4 d-inline-block mb-4" > {{$e->name}} </a>
                            <div class="row testimonial-title">
                                <div class="col" style="justify-content: space-between; display: flex;">
                                    <p class="mb-0"><i class="bi bi-geo-alt"></i> {{$e->place}}</p>
                                    <p class="mb-0"><i class="bi bi-calendar-event"></i> {{$e->date}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach 
            </div>
        </div>
    </div>
</div>
