
var slideIndex = 1; // Bắt đầu từ slide đầu tiên

function showSlides(n) {
    let slides = document.getElementsByClassName("slide");

    if (n > slides.length) {
        slideIndex = 1;
    }

    if (n < 1) {
        slideIndex = slides.length;
    }

    for (let i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }

    slides[slideIndex - 1].style.display = "block";
}

function plusSlides(n) {
    showSlides(slideIndex += n);
}

showSlides(slideIndex);

// Tự động chuyển slide sau một khoảng thời gian
function autoSlide() {
    plusSlides(1);
    setTimeout(autoSlide, 2000); // Đổi slide mỗi 2 giây
}

autoSlide();
