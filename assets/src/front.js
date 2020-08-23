import "@theme/init.scss";

import "bootstrap/js/dist/tooltip";
import "bootstrap/js/dist/collapse";
import "bootstrap/js/dist/dropdown";
import "bootstrap/js/dist/modal";
import "bootstrap/js/dist/tab";

import "@mdi/font/css/materialdesignicons.min.css";

import "owl.carousel/dist/assets/owl.carousel.css";
import "owl.carousel";

import "lightbox2/dist/css/lightbox.css";
import lightbox from "lightbox2/dist/js/lightbox";

document.addEventListener("DOMContentLoaded", () => {
    $('.slides-carousel').owlCarousel({
        items: 1,
        margin: 30,
        loop: true,
        autoplay: true,
        autoplayTimeout: 5000,
        autoplaySpeed: 2000,
        autoplayHoverPause: true,
        dots: true
    });

    lightbox.option({
        wrapAround: true,
        showImageNumberLabel: false
    });
});