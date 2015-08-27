$(document).ready(function () {
    $('#header').addClass('fadeInDown');
    $('.father-circle').addClass('fadeInUp skills-animated');
});

// Gradient aléatoire pour le background du body

var gradient = ['lizard', 'servQuick', 'titanium', 'mirage', 'instagram', 'steelgray'];
var randomclass = Math.floor(Math.random() * gradient.length);
$('body').addClass(gradient[randomclass]);







