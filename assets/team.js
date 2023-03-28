const slider = document.getElementById('slider');
const prev = document.getElementById('prev');
const next = document.getElementById('next');
const slides = document.querySelectorAll('#slider > div');
const slideWidth = slides[0].offsetWidth;
const slideHeight = slides[0].offsetHeight;
const slideCount = slides.length;
const slideDuration = 700;
const slideDelay = 5000;
const slideInterval = slideDuration + slideDelay;
let currentIndex = 0;
let timer;

function slideTo(newIndex) {
    const duration = slideDuration;
    const increment = Math.abs(currentIndex - newIndex) / (currentIndex - newIndex);
    let position = currentIndex * -slideWidth;
    const start = performance.now();
    requestAnimationFrame(function slide() {
        const currentTime = performance.now();
        const time = Math.min(1, ((currentTime - start) / duration));
        const easedT = easeInOutCubic(time);
        slider.style.transform = `translate3d(${position + (easedT * increment * slideWidth)}px, 0, 0)`;
        if (time < 1) {
            requestAnimationFrame(slide);
        } else {
            currentIndex = newIndex;
        }
    });
}

function slideNext() {
    if (currentIndex < slideCount - 1) {
        slideTo(currentIndex + 1);
    } else {
        slideTo(0);
    }
}

function slidePrev() {
    if (currentIndex > 0) {
        slideTo(currentIndex - 1);
    } else {
        slideTo(slideCount - 1);
    }
}

function startTimer() {
    timer = setInterval(slideNext, slideInterval);
}

function stopTimer() {
    clearInterval(timer);
}

function easeInOutCubic(t) {
    return t < .5 ? 4 * t * t * t : (t - 1) * (2 * t - 2) * (2 * t - 2) + 1;
}

prev.addEventListener('click', function() {
    slidePrev();
    stopTimer();
    startTimer();
});

next.addEventListener('click', function() {
    slideNext();
    stopTimer();
    startTimer();
});

slider.addEventListener('mouseenter', stopTimer);
slider.addEventListener('mouseleave', startTimer);

startTimer();


