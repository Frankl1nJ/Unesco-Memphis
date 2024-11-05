function afficherTexteCompletFr() {
    var moreText = document.getElementById("moreText2");
    var btn = document.getElementById("lirePlusBtn2");

    if (moreText.style.display === "none" || moreText.style.display === "") {
        moreText.style.display = "block";
        btn.innerHTML = "Lire moins";
    } else {
        moreText.style.display = "none";
        btn.innerHTML = "Lire plus";
    }
}

function afficherTexteCompletEn() {
    var moreText = document.getElementById("moreText2");
    var btn = document.getElementById("lirePlusBtn2");

    if (moreText.style.display === "none" || moreText.style.display === "") {
        moreText.style.display = "block";
        btn.innerHTML = "Read less";
    } else {
        moreText.style.display = "none";
        btn.innerHTML = "Read more";
    }
}

function afficherTexteCompletCn() {
    var moreText = document.getElementById("moreText2");
    var btn = document.getElementById("lirePlusBtn2");

    if (moreText.style.display === "none" || moreText.style.display === "") {
        moreText.style.display = "block";
        btn.innerHTML = "阅读更少";
    } else {
        moreText.style.display = "none";
        btn.innerHTML = "阅读更多";
    }
}

var slideIndex = 1;

function showSlides(n) {
var i;
var slides = document.getElementsByClassName("custom-slider");
var dots = document.getElementsByClassName("dot");
var texts = document.querySelectorAll('.slide-text .text-item');

if (n > slides.length) {
slideIndex = 1
}
if (n < 1) {
slideIndex = slides.length
}
for (i = 0; i < slides.length; i++) {
slides[i].style.display = "none";
}
for (i = 0; i < dots.length; i++) {
dots[i].className = dots[i].className.replace(" active", "");
}
for (i = 0; i < texts.length; i++) {
texts[i].classList.remove("active");
}
slides[slideIndex - 1].style.display = "block";
dots[slideIndex - 1].className += " active";
texts[slideIndex - 1].classList.add("active");
}

function plusSlides(n) {
showSlides(slideIndex += n);
}

function currentSlide(n) {
showSlides(slideIndex = n);
}

showSlides(slideIndex);

