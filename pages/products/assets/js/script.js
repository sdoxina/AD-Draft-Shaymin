document.addEventListener("DOMContentLoaded", function () {
    const navbar = document.querySelector(".navbar");
    const navLinks = document.querySelectorAll(".nav-link");
    const logoImg = document.querySelector(".navbar-img");

    // Define logo image paths
    const logoDefault = "/assets/img/outlastLgWhite.png"; // before scroll
    const logoScrolled = "/assets/img/outlastLgRed.png"; // after scroll
  
    window.addEventListener("scroll", function () {
        if (window.scrollY > 50) {
            navbar.classList.add("scrolled");
            if (logoImg) logoImg.src = logoScrolled;
        } else {
            navbar.classList.remove("scrolled");
            if (logoImg) logoImg.src = logoDefault;
        }
    });
  });