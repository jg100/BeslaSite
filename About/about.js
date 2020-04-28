function nextSlide(x) {
    showSlides(slideIndex += x);


}

function showSlides(n) {
    var i; //counter

    var slides = document.getElementsByClassName("slides");
    if(n > slides.length) {
        slideIndex = 1;
    }

    if(n < slides.length) {
        slideIndex = n;
    }

    for(i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    slides[slideIndex - 1].style.display = "block";
}