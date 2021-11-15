const $ = require('jquery');
require('slick-carousel');

$('.slickslider-hero').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    variableWidth: true,
    centerMode: true,
    autoplay: true,
    autoplaySpeed: 3000,
});


// hamburger menu - aub niet zomaar aan komen
(function () {
    $('.menu-wrapper').on('click', function () {
        $('.hamburger-menu').toggleClass('animate');
        $('.mobile-nav').toggleClass('active');
        $('body').toggleClass('scroll');
        $('nav').toggleClass('transparent');
        $('#mobile-nav').addClass('opened')
    });
})();

// nav onscroll function
window.onscroll = function () {
    scrollFunction()
};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        $('nav.main').addClass('scroll');
    } else {
        $('nav.main').removeClass('scroll');
    }
}

////cookies function

// make cookie save timer (14 days & 1 day)
var cookieTimer14 = new Date();
var cookieTimer1 = new Date();

// add 14 days & 1 day
cookieTimer14.setDate(cookieTimer14.getDate() + 14);
cookieTimer1.setDate(cookieTimer1.getDate() + 1);


//function to call cookie type
function getCookie(cname) {
    var name = cname + "=";
    var ca = document.cookie.split(';');
    for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') c = c.substring(1);
        if (c.indexOf(name) == 0) return c.substring(name.length, c.length);
    }
    return "";
}

//// end cookies functions
(function () {
    $('#cookieAccept').on('click', function () {
        document.cookie = "cookieAccept=true;"
        $('.cookies-popup').addClass('hide')
    });
    $('#cookieDecline').on('click', function () {
        document.cookie = "cookieAccept=false; expires=" + cookieTimer1 + ";";
        $('.cookies-popup').addClass('hide')
    });
})();

// set cookie to var
var cookieCurrentStatus = getCookie("cookieAccept");

// hide popup cookie accept if already chosen
(function () {
    if ((cookieCurrentStatus !== "true") && (cookieCurrentStatus !== "false")) {
        $('.cookies-popup').removeClass('hide')
    }
})();

//cookie popup - offerte
//makes cookie if all cookies (cookieAccept) is accepted
$(document).ready(function () {
    $("#close-popup").click(function () {
        $('.popup').fadeOut("slow");
        $('body').removeClass("scroll");
        if (cookieCurrentStatus === "true") {
            document.cookie = "popupClosed=true; expires=" + cookieTimer14 + ";";
        }
    });
});

var cookieStatusOfferte = getCookie("popupClosed");

(function () {
    if (cookieStatusOfferte == "true") {
        $('body').removeClass("scroll");
        $('.popup').addClass("hide")
    }
})();

//cookie if page is cached
(function () {
    var isCached = performance.getEntriesByType("navigation")[0].transferSize === 0;
    if (isCached == true) {
        $('.loader-wrapper').addClass("hide")
    }
})();

//Linkedin popup

if (window.location.pathname == "/") {

    setTimeout(
        function () {
            $('#linkedin_POP').addClass('active');
            setTimeout(function () {
                $('#linkedin_POP').addClass('fixedPOS');
            }, 1000)
        }, 4000
    )
}

(function() {
    $('#linkedin_close').on('click', function() {
        $('#linkedin_POP').addClass('close');
        setTimeout(function (){
            $('#linkedin_POP').addClass('hidden');
        }, 900)
    });
    $('#linkedin_close_two').on('click', function() {
        $('#linkedin_POP').addClass('close');
        setTimeout(function (){
            $('#linkedin_POP').addClass('hidden');
        }, 900)
    });
})();

//About
(function () {
    $("#member-jelle").click(function () {
        $("#member-jelle").addClass('active')
        $("#member-marco").removeClass('active')
        $("#member-tin").removeClass('active')
        $("#member-yeno").removeClass('active')
        $(".member-jelle").removeClass('hidden')
        $(".member-marco").addClass('hidden')
        $(".member-tin").addClass('hidden')
        $(".member-yeno").addClass('hidden')
    });
    $("#member-marco").click(function () {
        $("#member-jelle").removeClass('active')
        $("#member-marco").addClass('active')
        $("#member-tin").removeClass('active')
        $("#member-yeno").removeClass('active')
        $(".member-jelle").addClass('hidden')
        $(".member-marco").removeClass('hidden')
        $(".member-tin").addClass('hidden')
        $(".member-yeno").addClass('hidden')
    });
    $("#member-tin").click(function () {
        $("#member-jelle").removeClass('active')
        $("#member-marco").removeClass('active')
        $("#member-tin").addClass('active')
        $("#member-yeno").removeClass('active')
        $(".member-jelle").addClass('hidden')
        $(".member-marco").addClass('hidden')
        $(".member-tin").removeClass('hidden')
        $(".member-yeno").addClass('hidden')
    });
    $("#member-yeno").click(function () {
        $("#member-jelle").removeClass('active')
        $("#member-marco").removeClass('active')
        $("#member-tin").removeClass('active')
        $("#member-yeno").addClass('active')
        $(".member-jelle").addClass('hidden')
        $(".member-marco").addClass('hidden')
        $(".member-tin").addClass('hidden')
        $(".member-yeno").removeClass('hidden')
    });
})();

