//hamburger menu - aub niet zomaar aan komen :)
(function () {
    $('.menu-wrapper').on('click', function () {
        $('.hamburger-menu').toggleClass('animate');
        $('.mobile-nav').toggleClass('active');
        $('body').toggleClass('scroll');
        $('#mobile-nav').addClass('opened')
    })
})();


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

//make cookie save timer (14 days & 1 day)
var cookieTimer14 = new Date();
var cookieTimer1 = new Date();

// add 14 days & 1 day
cookieTimer14.setDate(cookieTimer14.getDate() + 14);
cookieTimer1.setDate(cookieTimer1.getDate() + 1);

//accept cookies
(function () {
    $('#cookieAccept').on('click', function () {
        document.cookie = "cookieAccept=1;"
        $('.cookies-popup').addClass('hide')
    });
    $('#cookieDecline').on('click', function () {
        document.cookie = "cookieAccept=2; expires=" + cookieTimer1 + ";";
        $('.cookies-popup').addClass('hide')
    });
})();


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

var cookieCurrentStatus = getCookie("cookieAccept");

//remove cookie popup if cookies are accepted

(function () {
    if (cookieCurrentStatus === "1") {
        $('.cookies-popup').addClass('hide')
    } else if (cookieCurrentStatus === "2") {
        $('.cookies-popup').addClass('hide')
    }
})();

//cookie popup - offerte
//makes cookie if all cookies (cookieAccept) is accepted
$(document).ready(function () {
    $("#close-popup").click(function () {
        $('.popup').fadeOut("slow");
        $('body').removeClass("scroll");
        if (cookieCurrentStatus === "1") {
            document.cookie = "popupClosed=1; expires=" + cookieTimer14 + ";";
        }
    });
});

var cookieStatusOfferte = getCookie("popupClosed");

(function () {
    if (cookieStatusOfferte == "1") {
        $('body').removeClass("scroll");
        $('.popup').addClass("hide")
    }
})();

//cookie if page is cached
(function() {
    var isCached = performance.getEntriesByType("navigation")[0].transferSize === 0;
    if (isCached == true) {
        $('.loader-wrapper').addClass("hide")
    }
})();

////end cookies functions

