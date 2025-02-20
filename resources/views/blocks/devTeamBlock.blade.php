<br><br>
<div class="container-fluid team" style="justify-content:center;">
    <div class="container ">
        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
            <h1 class="section-title display-5 mb-4">Our Developers </h1>
            <p class="mb-0">Meet the Innovators Behind the Platform – Our talented development team has worked tirelessly to bring this website to life. With a passion for technology and a commitment to empowering communities, they’ve created a seamless experience for volunteers and organizations alike. Thank you for making it all possible!
            </p>
        </div>
        <div class="row g-4 my-6 p-5" style="justify-content: center">
            @foreach ($devteam as $d) 
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="/img/{{$d->img}}" class="img-fluid" alt="">
                        </div>
                        <div class="team-title">
                            <h4 class="mb-0">{{$d->name}} {{$d->surname}}</h4>
                            <p class="mb-0">{{$d->rolename}}</p>
                        </div>
                        <div class="team-icon">
                            <a class="btn btn-primary btn-sm-square rounded-circle me-3" href="https://{{$d->tgusername}}.t.me" target="_blank"><i
                                    class="fab fa-telegram"></i></a>
                            <a class="btn btn-primary btn-sm-square rounded-circle me-0" href="https://www.instagram.com/{{$d->instagramlink}}" target="_blank"><i
                                    class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>