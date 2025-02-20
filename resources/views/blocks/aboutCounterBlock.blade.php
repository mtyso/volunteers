<br><br>
<div class="container-fluid feature pb-5">
    <div class="container p-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
            <h1 class="section-title display-5 mb-4" >Our impact at a glance</h1>
            <p class="mb-0">At Al-Khwarizmi Volunteers, we measure the power of volunteerism in real numbers. From hours donated to projects completed, our volunteers drive tangible change in the community. Explore how your time and effort contribute to creating lasting impact, and see how together, we’re building a stronger, more engaged society.
            </p>
        </div>
            <div class="row text-center w-100">
                @foreach ($glance as $g) 
                    <div class="col-md-4">
                        <div class="counter-box">
                            <div class="counter" data-target="{{$g->number}}">0</div>
                            <p class="counter-label">{{$g->name}}</p>
                        </div>
                    </div>
                @endforeach
            </div>       
    </div>
</div>

<script>
    // Counter animation script
    const counters = document.querySelectorAll('.counter');
    counters.forEach(counter => {
        counter.innerText = '0';

        const updateCounter = () => {
            const target = +counter.getAttribute('data-target');
            const current = +counter.innerText;

            const increment = target / 150;

            if (current < target) {
                counter.innerText = `${Math.ceil(current + increment)}`;
                setTimeout(updateCounter, 50);
            } else {
                counter.innerText = target;
            }
        };

        updateCounter();
    });
</script>