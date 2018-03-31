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

    // About Page
    var Atabs = document.querySelectorAll('.aboutTab');
    var content = document.querySelectorAll('.aboutSection');
    var appliedClass = "";
    var activeTab = "";

    function tabChange(e, index) {
        content.forEach(function(element, index) {
            if (index == e.currentTarget.id){
                content[index].classList.remove("hide");
                Atabs[index].classList.add("aboutActive");
                activeTab.classList.remove("aboutActive");
                activeTab = Atabs[index];
                appliedClass.classList.add("hide");
                appliedClass = content[index];
                
            }
        });
    }

    Atabs.forEach(function(element, index) {
        element.addEventListener('click', tabChange, false);
        element.id = index;
        if(!content[index].classList.contains("hide")) {
            appliedClass = content[index];
            activeTab = Atabs[index];
        }
    });

    // Drives Page
    var tabsBar = document.querySelector("#drivesTabs");
    var Dtabs = tabsBar.querySelectorAll("a");
    var Dtabactive;

    function driveType(e, index) {
        if (e.currentTarget.id === "0"){
            Dtabs[0].classList.add("driveTypeActive");
            Dtabactive.classList.remove("driveTypeActive");
            Dtabactive = Dtabs[0];
        } else {
            Dtabs[1].classList.add("driveTypeActive");
            Dtabactive.classList.remove("driveTypeActive");
            Dtabactive = Dtabs[1];
        }
    }

    Dtabs.forEach(function(element, index) {
        element.addEventListener('click', driveType, false);
        element.id = index;
        Dtabactive = Dtabs[0];
    });


})();