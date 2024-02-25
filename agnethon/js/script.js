document.addEventListener("DOMContentLoaded", function() {
    let index = 0;
    const slides = document.querySelector('.slides');
    const slideWidth = slides.offsetWidth;
    const totalSlides= slides.children.length;
    function changeSlide() {
      // Move slides to the left
      slides.style.transform = `translateX(-${index * slideWidth}px)`;
      
      // Increment index and reset if needed
      index++;
      if (index >= totalSlides) {
        index = 0;
      }
      
      // Call the function again after a certain time (e.g., 2 seconds)
      setTimeout(changeSlide, 2000);
    }
    
    // Start the slideshow
    changeSlide();
});