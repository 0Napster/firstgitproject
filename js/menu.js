var Menu = Menu || {};

Menu.myMenu = (function ($) {
    var _loaderFinish = false,
        _lastScrollPosition = 0,
        _currentScrollPosition = 0,

    /*
     *  Initialisation de la "barre de chargement sur le header"
     *  Initialisation des variables de couleurs
     *
     */
        _initMenuProgressBar = function () {
            var body = $("body"),
                loader = $(".loader-anim"),
                colorInstagram = "#517FA4",
                colorMirage = "#3A6073",
                colorTitanium = "#859398",
                colorSteelgray = "#928DAB",
                colorLizard = "#D7D2CC",
                colorServQuick = "#485563";

            function animateLoader() {
                loader.animate({"width": "100%"}, 2000, "easeInCirc", function () {
                    _loaderFinish = true;
                        setTimeout(function () {
                        loader.animate({"height": "0%"}, 50, "linear");
                    }, 1000);
                });
            }

            if (body.hasClass("instagram")) {
                loader.css("background-color", colorInstagram);
                animateLoader();
            } else if (body.hasClass("mirage")) {
                loader.css("background-color", colorMirage);
                animateLoader();
            } else if (body.hasClass("titanium")) {
                loader.css("background-color", colorTitanium);
                animateLoader();
            } else if (body.hasClass("steelgray")) {
                loader.css("background-color", colorSteelgray);
                animateLoader();
            } else if (body.hasClass("lizard")) {
                loader.css("background-color", colorLizard);
                animateLoader();
            } else if (body.hasClass("servQuick")) {
                loader.css("background-color", colorServQuick);
                animateLoader();
            }
        },

    /*
     * Initialisation des animations de la barre header:
     * 1- Quand le scroll est détecté réduire l'opacité a 0.75
     * La barre prend 0.8 secondes pour reprendre le fade initial
     * 2 - Si l'utilisateur scroll vers le bas = cache la barre avec une animation vers le haut / scroll vers le haut = affiche la barre avec une animation vers le bas
     */

        _initMenuScrollActions = function () {
            var timer,
                headerBar = $('#header'),
                animateBackgroundTransparency = function () {
                    clearTimeout(timer);
                    headerBar.stop();
                    headerBar.css("backgroundColor", "rgba(255, 255, 255, 0.80)");
                    timer = setTimeout(function () {
                        headerBar.animate({"backgroundColor": "rgba(255, 255, 255, 1)"}, 800);
                    }, 300);
                },
                menuUpAndDown = function () {
                    _currentScrollPosition = $(window).scrollTop();
                    if (_currentScrollPosition >= 0) {
                        // Scroll bas
                        if (_currentScrollPosition > _lastScrollPosition) {
                            /* Deux conditions pour cacher le menu :
                             First, check that the scroll is not due to the previous navigation
                             Secondly, check that the submenu is not visible */
                            //if (_lastScrollPosition !== 0 && headerBar.find(".submenu").css("visibility") !== "visible") {
                            headerBar.removeClass("showBar").addClass("hideBar");
                            //}
                            // Scroll up
                        } else {
                            headerBar.removeClass("hideBar").addClass("showBar");
                        }
                        _lastScrollPosition = _currentScrollPosition;
                    }
                };
            if (Modernizr.rgba) {
                $(window).on("scroll", function () {
                    menuUpAndDown();
                    if ($(window).width() > 767) {
                        animateBackgroundTransparency();
                    }
                });
            }
        };
    return {
        launchMenuSettings: function () {
            _initMenuProgressBar();
            _initMenuScrollActions();
        }
    };
})(jQuery);

Menu.myMenu.launchMenuSettings();


