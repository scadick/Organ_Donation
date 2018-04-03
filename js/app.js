$(document).foundation();


(function() {
    "use strict";

    // Nav
    var navToggle = document.querySelector(".menu-icon");
    var nav = document.querySelector("#mainNav");
    var close = document.querySelector("#closeButton");
    var show;
    var resize = window.matchMedia("(min-width: 40em)");

    widthCheck();

    function navFix() {
        if(nav.classList.contains("hide")) {
            nav.classList.remove("hide");
            show = "false";
        }else if(nav.style.display == "none") {
            nav.classList.add("navShow");
            show = "true";
        }else if(!nav.classList.contains("hide")){
            nav.classList.add("hide");
            show = "false";
        }else if(nav.style.display == "block") {
            nav.style.display == "none";
            show = "false";
        }
    }

    function closeFix() {
        if(show == "true") {
            nav.classList.remove("navShow");
            show = "false";
        }
    }

    function widthCheck() {
        if(window.innerWidth < 640) {
            nav.classList.remove("hide");
            navToggle.removeEventListener('click', navFix, false);
            close.removeEventListener('click', closeFix, false);
        }else{
            nav.classList.add("hide");
            navToggle.addEventListener('click', navFix, false);
            close.addEventListener('click', closeFix, false);
        }
    }

    window.addEventListener('resize', widthCheck);

    //basic lightbox
    var boxType = "";

    function popLightbox(e) {
        //debugger;
        window.scrollTo(0, 0);
        document.body.style.overflow = "hidden";
        if(e.currentTarget.id == "shareButton") {
            boxType = document.querySelector('.shareBox');
        }else if(e.currentTarget.classList.contains("playButton")){
            boxType = document.querySelector('.videoBox');
        }else if(e.currentTarget.classList.contains("driveImage") || e.currentTarget.classList.contains("driveTitle")) {
            boxType = document.querySelector('.driveBox');
        }

        let lightbox = boxType.querySelector('.lightbox');
        lightbox.style.display = 'block';

        let lightboxClose = lightbox.querySelector('.close-lightbox');
        lightboxClose.addEventListener('click', closeLightbox, false);
    }

    function closeLightbox() {
        //debugger;
        document.body.style.overflow = "scroll";
        let lightbox = document.querySelector('.lightbox');
        lightbox.style.display = 'none';
    }

    if(window.location.href.indexOf("stories") > -1) {
        var stories = document.querySelector(".userSubmitted");
        var storiesToggle = stories.querySelectorAll("a");
        var share = document.querySelector("#shareButton");

        share.addEventListener('click', popLightbox, false);
    }else if(window.location.href.indexOf("index") > -1) {
        var videoToggle = document.querySelector(".playButton");
        videoToggle.addEventListener('click', popLightbox, false);
    }else if(window.location.href.indexOf("drives") > -1) {
        var driveToggle = document.querySelectorAll(".driveTitle");
        var driveToggleImg = document.querySelectorAll(".driveImage");

        driveToggle.forEach(function(element, index) {
            element.addEventListener('click', popLightbox, false);
        });
        driveToggleImg.forEach(function(element, index) {
            element.addEventListener('click', popLightbox, false);
        });
    }
})();