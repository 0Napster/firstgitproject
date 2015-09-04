var Menu = Menu || {};

Menu.myMenu = (function ($) {
    var _loaderFinish = false,
        _lastScrollPosition = 0,
        _currentScrollPosition = 0,
        _body = $("body"),
        _html = $("html"),
        _headerBar = $('#header'),
        _circularButton = $(".circular-button"),
        _halfCircularMenu = $(".circular-menu"),

        _checkSizeOfWindow = function () {
            if ("matchMedia" in window) {
                $(document).ready(function () {
                    if (window.matchMedia("(min-width:767px)").matches) {
                        $('#header').addClass('fadeInDown');
                        _circularButton.css("opacity", "0");
                        _headerBar.css("z-index", "");
                    } else {
                        _headerBar.removeClass("showBar").css("opacity", "0").css("z-index", "9");
                        _circularButton.css("opacity", "1");
                    }
                });
            }
        },

    /*
     *  Initialisation de la "barre de chargement sur le header"
     *  Initialisation des variables de couleurs
     *
     */
        _initMenuProgressBar = function () {
            var loader = $(".loader-anim"),
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

            if (_body.hasClass("instagram")) {
                loader.css("background-color", colorInstagram);
                animateLoader();
            } else if (_body.hasClass("mirage")) {
                loader.css("background-color", colorMirage);
                animateLoader();
            } else if (_body.hasClass("titanium")) {
                loader.css("background-color", colorTitanium);
                animateLoader();
            } else if (_body.hasClass("steelgray")) {
                loader.css("background-color", colorSteelgray);
                animateLoader();
            } else if (_body.hasClass("lizard")) {
                loader.css("background-color", colorLizard);
                animateLoader();
            } else if (_body.hasClass("servQuick")) {
                loader.css("background-color", colorServQuick);
                animateLoader();
            }
        },
    /*
     *  Initialisation du menu circulaire
     */
        _initCircularMenu = function () {
            var menuEvent = false;

            function openNav() {
                menuEvent = true;
                _circularButton.html('-');
                _halfCircularMenu.addClass("visible");
            }

            function closeNav() {
                menuEvent = false;
                _circularButton.html('+');
                _halfCircularMenu.removeClass("visible");
            }

            _circularButton.on("click", function () {
                if (!menuEvent) {
                    openNav();
                } else {
                    if (_halfCircularMenu.hasClass("visible")) {
                        closeNav();
                    }
                }
            });
            //_html.on("click", function () {
            //    closeNav();
            //})
        },


    //var circularMenu = $(".childrens-circles");
    //TweenLite.to(circularMenu, 2, {
    //    backgroundColor: "#ff0000",
    //    width: "50%",
    //    top: "100px",
    //    ease: Power2.easeInOut
    //});

    /*
     * Initialisation des animations de la barre header:
     * 1- Quand le scroll est détecté réduire l'opacité a 0.75
     * La barre prend 0.8 secondes pour reprendre le fade initial
     * 2 - Si l'utilisateur scroll vers le bas = cache la barre avec une animation vers le haut / scroll vers le haut = affiche la barre avec une animation vers le bas
     */

        _initMenuScrollActions = function () {
            var timer,
                animateBackgroundTransparency = function () {
                    clearTimeout(timer);
                    _headerBar.stop();
                    _headerBar.css("backgroundColor", "rgba(255, 255, 255, 0.80)");
                    timer = setTimeout(function () {
                        _headerBar.animate({"backgroundColor": "rgba(255, 255, 255, 1)"}, 800);
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
                            //if (_lastScrollPosition !== 0 && _headerBar.find(".submenu").css("visibility") !== "visible") {
                            _headerBar.removeClass("showBar").addClass("hideBar");
                            //}
                            // Scroll up
                        } else {
                            _headerBar.removeClass("hideBar").addClass("showBar");
                        }
                        _lastScrollPosition = _currentScrollPosition;
                    }
                };
            // Ecouteur d'évenement sur le scroll
            $(window).on("scroll", function () {
                if ($(window).width() > 767) {
                    menuUpAndDown();
                    animateBackgroundTransparency();
                }
            });
            // Fonction exécutée au redimensionnement du navigateur
            function resizing() {
                if ("matchMedia" in window) {
                    if (window.matchMedia("(min-width:769px)").matches) {
                        _headerBar.removeClass("fadeOutUp").addClass("fadeInDown");
                        _circularButton.html('+');
                        _circularButton.css("opacity", "0");
                        _halfCircularMenu.removeClass("visible");

                    } else {
                        _headerBar.removeClass("fadeInDown").addClass("fadeOutUp");
                        _circularButton.css("opacity", "1");
                    }
                }
            }

            // On lie l'événement resize à la fonction
            $(window).on("resize", resizing);
        };
    return {
        launchMenuSettings: function () {
            _checkSizeOfWindow();
            _initMenuProgressBar();
            _initMenuScrollActions();
            _initCircularMenu();
        }
    };
})(jQuery);

Menu.myMenu.launchMenuSettings();