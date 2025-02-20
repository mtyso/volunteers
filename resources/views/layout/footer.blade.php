@yield('content')

<!-- Footer Start -->
<div class="container-fluid footer py-5 wow fadeIn" data-wow-delay="0.2s">
    <div class="container py-5 border-start-0 border-end-0"
        style="border: 1px solid; border-color: rgb(255, 255, 255, 0.08);">
        <div class="row g-5">
            <div class="col-md-6 col-lg-6 col-xl-4">
                <div class="footer-item">
                    <a href="index.html" class="p-0">
                        <h4 class="text-white"> Al-Kwarizmi Volunteers </h4>
                    </a>
                    <p class="mb-4">Join our volunteer family. Be part of something amazing.</p>
                    <div class="d-flex justify-content-center">
                        <div class="d-flex justify-content-center flex-shrink-0 mb-4">
                            <a class="btn btn-light rounded-pill py-3 px-4 px-md-5 me-2" href="#"><i
                                    class="fas fa-play-circle me-2"></i> Watch Video</a>
                            <a class="btn btn-primary rounded-pill py-3 px-4 px-md-5 ms-2" href="#">Learn More</a>
                        </div>
                    </div>  
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-2">
                <div class="footer-item">
                    <h4 class="text-white mb-4">Quick Links</h4>
                    <a href="/home"><i class="fas fa-angle-right me-2"></i> Home</a>
                    <a href="/about"><i class="fas fa-angle-right me-2"></i> About Us</a>
                    <a href="/events"><i class="fas fa-angle-right me-2"></i> Events</a>
                    <a href="/upcomings"><i class="fas fa-angle-right me-2"></i> Upcoming Events</a>
                    <a href="/ourteam"><i class="fas fa-angle-right me-2"></i> Our Team</a>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="footer-item">
                    <h4 class="text-white mb-4">Pages</h4>
                    <a href="/partners"><i class="fas fa-angle-right me-2"></i> Our Partners</a>
                    <a href="/ourteam"><i class="fas fa-angle-right me-2"></i> Our Team</a>
                    <a href="/reviews"><i class="fas fa-angle-right me-2"></i> Reviews</a>
                    <a href="/FAQ"><i class="fas fa-angle-right me-2"></i> FAQ</a>
                    <a href="/contact"><i class="fas fa-angle-right me-2"></i> Contact us</a>

                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="footer-item">
                    <h4 class="text-white mb-4">Contact Info</h4>
                    <div class="d-flex align-items-center">
                        <i class="fas fa-map-marker-alt text-primary me-3"></i>
                        <p class="text-white mb-0">8838+58J, Mahtumkuli Street, Tashkent</p>
                    </div>
                    <div class="d-flex align-items-center">
                        <i class="fas fa-envelope text-primary me-3"></i>
                        <p class="text-white mb-0">aslbeksalixov24@gmail.com</p>
                    </div>
                    <div class="d-flex align-items-center">
                        <i class="fa fa-phone-alt text-primary me-3"></i>
                        <p class="text-white mb-0">(+998) 95 073 7313</p>
                    </div>
                    <div class="d-flex align-items-center mb-4">
                        <i class="fab fa-firefox-browser text-primary me-3"></i>
                        <p class="text-white mb-0">akv.uz</p>
                    </div>
                    <div class="d-flex">
                        <a class="btn btn-primary btn-md-square rounded-circle me-3" href="https://t.me/akv_uz"
                            target="_blank"><i class="fab fa-telegram"></i></a>
                        <a class="btn btn-primary btn-md-square rounded-circle me-2"
                            href="https://www.instagram.com/al_khwarizmi_volunteers?igsh=Y3NoNGs2ejA1MWtq"
                            target="_blank"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->

<!-- Copyright Start -->

<!-- Copyright End -->


<!-- Back to Top -->
<a href="#" class="btn btn-primary btn-lg-square rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>


<!-- JavaScript Libraries -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src="/lib/wow/wow.min.js"></script>
<script src="/lib/easing/easing.min.js"></script>
<script src="/lib/waypoints/waypoints.min.js"></script>
<script src="/lib/counterup/counterup.min.js"></script>
<script src="/lib/lightbox/js/lightbox.min.js"></script>
<script src="/lib/owlcarousel/owl.carousel.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/micro-slider@1.0.9/dist/micro-slider.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/hammer.js/2.0.8/hammer.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" ></script>
<script>
    var swiper1 = new Swiper(".mySwiper1", {
    slidesPerView: 3,
    spaceBetween: 30,
    slidesPerGroup: 3,
    loop: true,
    loopFillGroupWithBlank: true,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    navigation: {
        nextEl: ".swiper-button-next-1", 
        prevEl: ".swiper-button-prev-1",
    },
});

var swiper2 = new Swiper(".mySwiper2", {
    slidesPerView: 3,
    spaceBetween: 30,
    slidesPerGroup: 3,
    loop: true,
    loopFillGroupWithBlank: true,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    navigation: {
        nextEl: ".swiper-button-next-2", 
        prevEl: ".swiper-button-prev-2",
    },
});

var swiper2 = new Swiper(".mySwiper3", {
    slidesPerView: 3,
    spaceBetween: 30,
    slidesPerGroup: 3,
    loop: true,
    loopFillGroupWithBlank: true,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    navigation: {
        nextEl: ".swiper-button-next-3", 
        prevEl: ".swiper-button-prev-3",
    },
});

</script>

    

<!-- Template Javascript -->
<script src="/js/main.js"></script>
<script src="/js/event.js"></script>
</body>

</html>

