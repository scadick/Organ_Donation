(function() {
    "use strict";

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

    //Process Menu
    var circleBox = document.querySelector("#circles");
    var circles = circleBox.querySelectorAll("a");
    var arrowLeft = document.querySelector(".arrowLeft");
    var arrowRight = document.querySelector(".arrowRight");
    var process = document.querySelector("#process");
    var paratag = process.querySelector("p");
    var para = ["In Ontario, organ and tissue donation is coordinated and managed by Trillium Gift of Life Network. Though everyone is a potential donor, you may be surprised to learn that the opportunity for organ donation is rare, because of the need to sustain a patient on a ventilator. In fact, you are five times more likely to need an organ transplant during your lifetime than to have the opportunity to donate one. On average, only three per cent of hospital deaths occur in circumstances that may lead to organ donation. This is not the case for tissue donation, which can take place in most cases when someone has died, as long as the tissue is suitable for transplantation.",
    "Because opportunities for organ donation are relatively rare and the impact is life-saving, it's important that Ontarians give serious thought to organ and tissue donation and register their consent to donate. By registering, you are essentially making a decision to help save lives after death through organ and tissue donation. By making this decision, you give hope to patients waiting for a life saving or life enhancing transplant and their families.",
    "Your decision to register is confidential. It is stored in a Ministry of Health and Long-Term Care database and it will only be disclosed to Trillium Gift of Life Network at the appropriate time, once it has been determined that lifesaving efforts have failed. Specially trained staff will then share registration details with your family during end-of-life discussions, to help them make a choice about donation. By registering your consent to donate, you relieve your family of the burden of making this decision on your behalf.",
    "Once a family has consented to donation, testing is done to confirm the medical suitability of the organs and tissue, and to determine which patients waiting for organ transplantation are the best match for the donated organs. This includes a medical and social history of the donor, similar to the questionnaire completed when donating blood. Trillium Gift of Life Network works closely with a team of healthcare professionals to support grieving families through this process, and to ensure that as many people as possible benefit from the generous gift of organs and/or tissue.",
    "Recovery of organs occurs in the operating room and it is done with skill and respect by physicians. Donation typically does not impact funeral or burial plans, and it often occurs while families are making these arrangements and contacting others. In fact, an open casket funeral is possible. Trillium Gift of Life Network stays in contact with families during this time to inform them when organ and tissue recovery is complete and to share some general information on the recipients.",
    "Through the Donor Family Support program, Trillium Gift of life Network provides continued support, as well as the opportunity to communicate anonymously with recipients. Donor families are recognized and honoured at an annual Celebration of Life, an event held to acknowledge and celebrate the extraordinary gift donor families have given."]
    var activeCircle;

    arrowLeft.style.opacity = "0.5";

    function menuChange(e) {
        circles.forEach(function(element, index) {
            if (index == e.currentTarget.id){
                circles[index].classList.add("active");
                activeCircle.classList.remove("active");
                activeCircle = circles[index];
                paratag.innerHTML = para[index];
             }
        });
    }

    function menu(e) {
        var count = activeCircle.id;

        if(e.currentTarget === arrowLeft) {
            count -= 1;
        } else {
            count++;
        }
        if( count >= 0 && count < circles.length) {
            circles[count].classList.add("active");
            paratag.innerHTML = para[count];
            activeCircle.classList.remove("active");
            activeCircle = circles[count];
            arrowLeft.style.opacity = "1";
            arrowRight.style.opacity = "1";
        }
        if(count < 1){
            arrowLeft.style.opacity = "0.5";
        }else if(count >= circles.length - 1) {
            arrowRight.style.opacity = "0.5";
        }
    }

    circles.forEach(function(element, index) {
        element.addEventListener('click', menuChange, false);
        element.id = index;
        if(circles[index].classList.contains("active")) {
            activeCircle = circles[index];
        }
    });

    arrowLeft.addEventListener('click', menu, false);
    arrowRight.addEventListener('click', menu, false);
})();