window.onload = function() {
    var slides = document.querySelectorAll('.slide');
    var currentSlide = 0;

    function showSlide(n) {
        slides[currentSlide].style.display = 'none';
        currentSlide = (n + slides.length) % slides.length;
        slides[currentSlide].style.display = 'block';
    }

    showSlide(0); 

    setInterval(function() {
        showSlide(currentSlide + 1);
    }, 3000); 
};