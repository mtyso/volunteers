<br><br>
<div class="container-fluid faq-section pb-5">
    <div class="container pb-5 overflow-hidden">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
            <h1 class="section-title display-5 mb-4" >Frequently Asked Questions</h1>
            <p class="mb-0">Got Questions? We’ve Got Answers! Browse through our Frequently Asked Questions to find all the information you need about volunteering, events, and how you can get involved. Whether you're a first-time volunteer or a seasoned pro, we're here to help you every step of the way!
            </p>
        </div>
        <div class="row g-5 align-items-center">
            <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.2s">
                <div class="accordion accordion-flush bg-light rounded p-5" id="accordionFlushSection">
                    @foreach ($faq as $f) 
                        <div class="accordion-item rounded-top">
                            <h2 class="accordion-header" id="flush-heading{{$f->numid}} ">
                                <button class="accordion-button collapsed rounded-top" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#flush-collapse{{$f->numid}}" aria-expanded="false"
                                    aria-controls="flush-collapse{{$f->numid}}">
                                    {{$f->question}}
                                </button>
                            </h2>
                            <div id="flush-collapse{{$f->numid}}" class="accordion-collapse collapse"
                                aria-labelledby="flush-heading{{$f->numid}}" data-bs-parent="#accordionFlushSection">
                                <div class="accordion-body">{{$f->answer}}</div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.2s">
                <div class="bg-primary rounded">
                    <img src="/img/main.png" class="img-fluid w-100" alt="">
                </div>
            </div>
        </div>
    </div>
</div>