// JavaScript Code
let currentSlideIndex = 0;
const slides = document.querySelectorAll('.carousel-item');
const totalSlides = slides.length;
document.addEventListener('DOMContentLoaded', function() {
    let currentSlideIndex = 0;
    const slides = document.querySelectorAll('.carousel-item');
    const totalSlides = slides.length;
    const carouselBackground = document.querySelector('.carousel-background');
    const animationClasses = ['animate-up', 'animate-right', 'animate-down', 'animate-left'];
    let lastAnimationIndex = -1;

    function showSlide(index, animation) {
        const currentSlide = slides[currentSlideIndex];
        const nextSlide = slides[index];

        // Set the current slide as a background
        carouselBackground.style.backgroundImage = `url('${currentSlide.querySelector('img').src}')`;

        slides.forEach(slide => {
            slide.classList.remove('active');
            slide.style.opacity = '0';
            animationClasses.forEach(animClass => slide.classList.remove(animClass));
        });

        // Add the new animation class to the next slide
        nextSlide.classList.add(animation);
        nextSlide.classList.add('active');
        nextSlide.style.opacity = '1';

        currentSlideIndex = index;
    }

    function getNextAnimation() {
        lastAnimationIndex = (lastAnimationIndex + 1) % animationClasses.length;
        return animationClasses[lastAnimationIndex];
    }

    // Function to go to the next slide
    function toNextSlide() {
        const nextSlideIndex = (currentSlideIndex < totalSlides - 1) ? currentSlideIndex + 1 : 0;
        showSlide(nextSlideIndex, getNextAnimation());
    }

    // Controls click event listeners
    document.querySelector('.carousel-control.prev').addEventListener('click', toNextSlide);
    document.querySelector('.carousel-control.next').addEventListener('click', toNextSlide);

    // Initialize the carousel
    showSlide(currentSlideIndex, getNextAnimation());

    // Set interval for automatic slide change every 1 second
    setInterval(toNextSlide, 4000);
});
document.addEventListener('DOMContentLoaded', function() {
    let currentSlideIndex = 0;
    const slides = document.querySelectorAll('.carousel-item');
    const totalSlides = slides.length;
    const animationClasses = ['animate-up', 'animate-right', 'animate-down', 'animate-left'];
    let lastAnimationIndex = -1; // To track the last used animation

    function showSlide(index, animation) {
        slides.forEach(slide => {
            slide.classList.remove('active');
            slide.style.opacity = '0';
            // Remove all animation classes
            animationClasses.forEach(animClass => slide.classList.remove(animClass));
        });

        // Add a new animation class
        slides[index].classList.add(animation);
        slides[index].classList.add('active');
        slides[index].style.opacity = '1';
    }

    function getNextAnimation() {
        lastAnimationIndex = (lastAnimationIndex + 1) % animationClasses.length;
        return animationClasses[lastAnimationIndex];
    }

    document.querySelector('.carousel-control.prev').addEventListener('click', () => {
        currentSlideIndex = currentSlideIndex > 0 ? currentSlideIndex - 1 : totalSlides - 1;
        showSlide(currentSlideIndex, getNextAnimation());
    });

    document.querySelector('.carousel-control.next').addEventListener('click', () => {
        currentSlideIndex = currentSlideIndex < totalSlides - 1 ? currentSlideIndex + 1 : 0;
        showSlide(currentSlideIndex, getNextAnimation());
    });

    // Initialize the first slide without animation
    slides[currentSlideIndex].classList.add('active');
    slides[currentSlideIndex].style.opacity = '1';
});

function showSlide(index) {
    slides.forEach(slide => {
        slide.classList.remove('active');
        slide.style.opacity = '0';
    });

    slides[index].classList.add('active');
    slides[index].style.opacity = '1';
}

document.querySelector('.carousel-control.prev').addEventListener('click', () => {
    currentSlideIndex = currentSlideIndex > 0 ? currentSlideIndex - 1 : totalSlides - 1;
    showSlide(currentSlideIndex);
});

document.querySelector('.carousel-control.next').addEventListener('click', () => {
    currentSlideIndex = currentSlideIndex < totalSlides - 1 ? currentSlideIndex + 1 : 0;
    showSlide(currentSlideIndex);
});

// Initialize the first slide.
showSlide(currentSlideIndex);

document.addEventListener('DOMContentLoaded', function() {
    const slider = document.querySelector('.brand-slides');
    const slides = Array.from(document.querySelectorAll('.brand-item'));
    const slideWidth = slides[0].clientWidth;  // Width of one slide

    let isDown = false;
    let startX;
    let scrollLeft;

    slider.addEventListener('mousedown', (e) => {
        isDown = true;
        startX = e.pageX - slider.offsetLeft;
        scrollLeft = slider.scrollLeft;
    });

    slider.addEventListener('mouseleave', () => {
        isDown = false;
    });

    slider.addEventListener('mouseup', () => {
        isDown = false;
    });

    slider.addEventListener('mousemove', (e) => {
        if (!isDown) return;
        e.preventDefault();
        const x = e.pageX - slider.offsetLeft;
        const walk = (x - startX) * 3;  // Adjust sensitivity as needed
        slider.scrollLeft = scrollLeft - walk;
    });

    // Auto-scroll functionality adjusted to continuously move one slide at a time and recycle old slides
    let autoScroll = setInterval(() => {
        slider.scrollBy({ left: slideWidth, behavior: 'smooth' });

        // Check if the first slide is out of view, then move it to the end
        if (slider.scrollLeft >= slideWidth) {
            let firstSlide = slider.removeChild(slides[0]);  // Remove the first slide
            slider.appendChild(firstSlide);  // Append it to the end
            slides.push(firstSlide);  // Add it back to the array at the end
            slides.shift();  // Remove the first element from the array
            slider.scrollLeft -= slideWidth;  // Adjust scrollLeft to keep the flow seamless
        }
    }, 3000);
});
