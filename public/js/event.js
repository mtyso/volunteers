document.addEventListener('DOMContentLoaded', () => {
  
  //===== MICRO-SLIDER begin
  const __ms = document.querySelector('.micro-slider');
  const __msSlider = new MicroSlider(__ms, { indicators: true, indicatorText: '' });
  const hammer = new Hammer(__ms);
  const __msTimer = 2000;
  let __msAutoplay = setInterval(() => __msSlider.next(), __msTimer);
    
  // Detect mouseenter event
  __ms.onmouseenter = function(e) {
      clearInterval(__msAutoplay); 
      console.log(e.type + ' mouse detected');
  }
  
  // Detect mouseleave event
  __ms.onmouseleave = function(e) {
      clearInterval(__msAutoplay); 
      __msAutoplay = setInterval(() => __msSlider.next(), __msTimer);
      console.log(e.type + ' mouse detected');
  }
  
  // Detect mouseclick event
  __ms.onclick = function(e) {
      clearInterval(__msAutoplay); 
      console.log(e.type + ' mouse detected');
  }
  
  // Detect gesture tap event with hammer.js library
  hammer.on('tap', function(e) {
      clearInterval(__msAutoplay);
      console.log(e.type + ' gesture detected');
  });
  
  // Detect gesture swipe event with hammer.js library
  hammer.on('swipe', function(e) {
      clearInterval(__msAutoplay); 
      __msAutoplay = setInterval(() => __msSlider.next(), __msTimer);
      console.log(e.type + ' gesture detected');
  });

  // Handle slider item clicks
  let slideLink = document.querySelectorAll('.slider-item');
  if (slideLink && slideLink !== null && slideLink.length > 0){
      slideLink.forEach(el => {
          el.addEventListener('click', e => {
              e.preventDefault(); // Prevent any default behavior like opening in a new tab

              // Get the href from the data-href attribute
              let href = el.dataset.href;

              // Check if the href is valid and not '#'
              if (href && href !== '#') {
                  window.location.href = href; // This will open the link in the same tab
              }
          });
      });
  }

  //===== MICRO-SLIDER end
});
document.addEventListener('DOMContentLoaded', () => {
  
  //===== MICRO-SLIDER begin
  const __ms = document.querySelector('.micro-slider');
  const __msSlider = new MicroSlider(__ms, { indicators: true, indicatorText: '' });
  const hammer = new Hammer(__ms);
  const __msTimer = 2000;
  let __msAutoplay = setInterval(() => __msSlider.next(), __msTimer);
    
  // Detect mouseenter event
  __ms.onmouseenter = function(e) {
      clearInterval(__msAutoplay); 
      console.log(e.type + ' mouse detected');
  }
  
  // Detect mouseleave event
  __ms.onmouseleave = function(e) {
      clearInterval(__msAutoplay); 
      __msAutoplay = setInterval(() => __msSlider.next(), __msTimer);
      console.log(e.type + ' mouse detected');
  }
  
  // Detect mouseclick event
  __ms.onclick = function(e) {
      clearInterval(__msAutoplay); 
      console.log(e.type + ' mouse detected');
  }
  
  // Detect gesture tap event with hammer.js library
  hammer.on('tap', function(e) {
      clearInterval(__msAutoplay);
      console.log(e.type + ' gesture detected');
  });
  
  // Detect gesture swipe event with hammer.js library
  hammer.on('swipe', function(e) {
      clearInterval(__msAutoplay); 
      __msAutoplay = setInterval(() => __msSlider.next(), __msTimer);
      console.log(e.type + ' gesture detected');
  });

  // Handle slider item clicks
  let slideLink = document.querySelectorAll('.slider-item');
  if (slideLink && slideLink !== null && slideLink.length > 0){
      slideLink.forEach(el => {
          el.addEventListener('click', e => {
              e.preventDefault(); // Prevent any default behavior like opening in a new tab

              // Get the href from the data-href attribute
              let href = el.dataset.href;

              // Check if the href is valid and not '#'
              if (href && href !== '#') {
                  window.location.href = href; // This will open the link in the same tab
              }
          });
      });
  }

  //===== MICRO-SLIDER end
});
document.addEventListener('DOMContentLoaded', () => {
  
  //===== MICRO-SLIDER begin
  const __ms = document.querySelector('.micro-slider');
  const __msSlider = new MicroSlider(__ms, { indicators: true, indicatorText: '' });
  const hammer = new Hammer(__ms);
  const __msTimer = 2000;
  let __msAutoplay = setInterval(() => __msSlider.next(), __msTimer);
    
  // Detect mouseenter event
  __ms.onmouseenter = function(e) {
      clearInterval(__msAutoplay); 
      console.log(e.type + ' mouse detected');
  }
  
  // Detect mouseleave event
  __ms.onmouseleave = function(e) {
      clearInterval(__msAutoplay); 
      __msAutoplay = setInterval(() => __msSlider.next(), __msTimer);
      console.log(e.type + ' mouse detected');
  }
  
  // Detect mouseclick event
  __ms.onclick = function(e) {
      clearInterval(__msAutoplay); 
      console.log(e.type + ' mouse detected');
  }
  
  // Detect gesture tap event with hammer.js library
  hammer.on('tap', function(e) {
      clearInterval(__msAutoplay);
      console.log(e.type + ' gesture detected');
  });
  
  // Detect gesture swipe event with hammer.js library
  hammer.on('swipe', function(e) {
      clearInterval(__msAutoplay); 
      __msAutoplay = setInterval(() => __msSlider.next(), __msTimer);
      console.log(e.type + ' gesture detected');
  });

  let slideLink = document.querySelectorAll('.slider-item');
  if (slideLink && slideLink !== null && slideLink.length > 0){
      slideLink.forEach(el => {
          el.addEventListener('click', e => {
              e.preventDefault(); // Prevent any default behavior like opening in a new tab

              // Get the href from the data-href attribute
              let href = el.dataset.href;

              // Check if the href is valid and not '#'
              if (href && href !== '#') {
                  window.location.href = href; // This will open the link in the same tab
              }
          });
      });
  }

  //===== MICRO-SLIDER end
});
