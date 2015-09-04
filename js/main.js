// Detection du type de devices

var isMobile = {
    Android: function () {
        return navigator.userAgent.match(/Android/i);
    },
    BlackBerry: function () {
        return navigator.userAgent.match(/BlackBerry/i);
    },
    iOS: function () {
        return navigator.userAgent.match(/iPhone|iPad|iPod/i);
    },
    Opera: function () {
        return navigator.userAgent.match(/Opera Mini/i);
    },
    any: function () {
        return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera());
    }
};

if (isMobile.any()) {
    //$(".world-map").css("opacity", "0");
    //$(".world-map-container,.world-map-points").css("width", "550");
    //$(".animated,.world-map-points").css("opacity", "1");
}
else {
    // Animation des Sections en fonction du scroll

    $('.row').waypoint(function () {
        $('.row').addClass('fadeInUp');
    }, {
        offset: '60%'
    });
}

$(document).ready(function () {
    $('.father-circle').addClass('fadeInUp skills-animated');
});

// Gradient aléatoire pour le background du body

var gradient = ['lizard', 'servQuick', 'titanium', 'mirage', 'instagram', 'steelgray'];
var randomclass = Math.floor(Math.random() * gradient.length);
$('body').addClass(gradient[randomclass]);







