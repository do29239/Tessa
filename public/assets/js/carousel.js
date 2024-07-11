//BRAND SLIDES
document.addEventListener('DOMContentLoaded', function() {
    const slider = document.querySelector('.brand-slides');
    const slides = Array.from(document.querySelectorAll('.brand-item'));
    const slideWidth = slides[0].clientWidth;  // Width of one slide

    // Define the auto-scroll function
    function autoScroll() {
        slider.scrollBy({ left: slideWidth, behavior: 'smooth' });

        // Check if the first slide is out of view, then move it to the end
        if (slider.scrollLeft >= slideWidth) {
            let firstSlide = slider.removeChild(slides[0]);  // Remove the first slide
            slider.appendChild(firstSlide);  // Append it to the end
            slides.push(firstSlide);  // Add it back to the array at the end
            slides.shift();  // Remove the first element from the array
            slider.scrollLeft -= slideWidth;  // Adjust scrollLeft to keep the flow seamless
        }
    }

    // Set the initial auto-scroll interval
    let autoScrollInterval = setInterval(autoScroll, 1500);

    // Setup event listeners for mouse enter and mouse leave
    slider.addEventListener('mouseenter', () => clearInterval(autoScrollInterval));
    slider.addEventListener('mouseleave', () => autoScrollInterval = setInterval(autoScroll, 1500));
    slider.addEventListener('touchstart', () => clearInterval(autoScrollInterval), {passive: true});
    slider.addEventListener('touchend', () => autoScrollInterval = setInterval(autoScroll, 1500), {passive: true});
});
//BRAND SLIDES --END--


