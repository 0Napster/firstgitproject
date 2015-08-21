<?php

/**
* The datas for this specific page
*/

// Global
$page = "index";
$url = "";
$social= "social11";
$sections = array(
    "menu",
//    "slogan",
//    "section-client",
//    "section-ourOffer",
//    "section-promoSeparator",
//    "section-ourreferences",
//    "footer-fr"
);
$specificScripts = array(
    array(
        "libs" => "slick.min"
    ),
    array(
        "script" => "carrouselSitePro"
    )
);

// Head
$head_title = "Peroogue HOME";
$head_description = "Portfolio v2";

// Menu

$menu_leftText1 = "Fonctionnalités";
$menu_leftLink1 = "/plateforme-elearning-fonctionnalites";

$menu_features_Text1 = "Outil-auteur";
$menu_features_Link1 = "/plateforme-elearning-fonctionnalites?sct=lms-creation&showSct=switchingFeature";
$menu_features_Text2 = "Diffuser et gérer<br>les formations";
$menu_features_Link2 = "/plateforme-elearning-fonctionnalites?sct=lms-diffusion-gestion&showSct=switchingFeature";
$menu_features_Text3 = "Suivi temps-réel";
$menu_features_Link3 = "/plateforme-elearning-fonctionnalites?sct=lms-analytics&showSct=switchingFeature";
$menu_features_Text4 = "LMS intégré & sécurisé";
$menu_features_Link4 = "/plateforme-elearning-fonctionnalites?sct=lms-integration&showSct=switchingFeature";
$menu_features_Text5 = "Full SCORM compliance";
$menu_features_Link5 = "/scorm";

$menu_leftText2 = "Solutions";
$menu_leftLink2 = "/entreprises";
$menu_solutions_Text1 = "Entreprises";
$menu_solutions_Link1 = "/entreprises";
$menu_solutions_Text2 = "Organismes de formation";
$menu_solutions_Link2 = "/creer-des-formations-elearning-et-blended-learning";
$menu_solutions_Text3 = "Enseignement supérieur";
$menu_solutions_Link3 = "/education";
$menu_solutions_Text4 = "Tarifs";
$menu_solutions_Link4 = "/tarifs";
$menu_solutions_Text5 = "360Engagement Suite";
$menu_solutions_Link5 = "/360Recruiting";

$menu_submenu_enseignement_Text1 = "Executive Education";
$menu_submenu_enseignement_Link1 = "/executive-education";
$menu_submenu_enseignement_Text2 = "Formation initiale";
$menu_submenu_enseignement_Link2 = "/formation-initiale";
$menu_submenu_enseignement_Text3 = "MOOC & innovation pédagogique";
$menu_submenu_enseignement_Link3 = "/MOOC-organisme-de-formation";
$menu_submenu_enseignement_Text4 = "FOAD : Formez 100% à distance";
$menu_submenu_enseignement_Link4 = "/FOAD-organisme-de-formation";
$menu_submenu_enseignement_Text5 = "Mes clients veulent du elearning";
$menu_submenu_enseignement_Link5 = "/elearning-organisme-de-formation";
$menu_submenu_enseignement_Text6 = "Formations linguistiques";
$menu_submenu_enseignement_Link6 = "/formations-linguistiques";

$menu_submenu_OF_Text1 = "Executive Education";
$menu_submenu_OF_Link1 = "/executive-education";
$menu_submenu_OF_Text2 = "FOAD : formez 100% à distance";
$menu_submenu_OF_Link2 = "/FOAD-organisme-de-formation";
$menu_submenu_OF_Text3 = "Mes clients veulent du elearning";
$menu_submenu_OF_Link3 = "/elearning-organisme-de-formation";
$menu_submenu_OF_Text4 = "Formation Réglementaire";
$menu_submenu_OF_Link4 = "/formation-reglementaire";
$menu_submenu_OF_Text5 = "MOOC & Innovation pédagogique";
$menu_submenu_OF_Link5 = "/MOOC-organisme-de-formation";
$menu_submenu_OF_Text6 = "Formation initiale";
$menu_submenu_OF_Link6 = "/formation-initiale";
$menu_submenu_OF_Text7 = "Agence de communication";
$menu_submenu_OF_Link7 = "/solutions-agence-de-communication";
$menu_submenu_OF_Text8 = "Cabinet de conseil";
$menu_submenu_OF_Link8 = "/solutions-cabinet-de-conseil";
$menu_submenu_OF_Text9 = "Formations linguistiques";
$menu_submenu_OF_Link9 = "/formations-linguistiques";

$menu_submenu_engagement_Text1 = "360Recruiting";
$menu_submenu_engagement_Link1 = "/360Recruiting";
$menu_submenu_engagement_Text2 = "360Onboarding";
$menu_submenu_engagement_Link2 = "/360Onboarding";
$menu_submenu_engagement_Text3 = "360Performance";
$menu_submenu_engagement_Link3 = "/360Performance";
$menu_submenu_engagement_Text4 = "360Compensation";
$menu_submenu_engagement_Link4 = "/360Compensation";
$menu_submenu_engagement_Text5 = "360Succession";
$menu_submenu_engagement_Link5 = "/360Succession";

$menu_submenu_entreprises_Text1 = "Full LMS";
$menu_submenu_entreprises_Link1 = "/lms-global-pour-mon-entreprise";
$menu_submenu_entreprises_Text2 = "Elearning rapide et facile";
$menu_submenu_entreprises_Link2 = "/elearning";
$menu_submenu_entreprises_Text3 = "Formation Produit";
$menu_submenu_entreprises_Link3 = "/elearning-formation-produit";
$menu_submenu_entreprises_Text4 = "Formation des commerciaux";
$menu_submenu_entreprises_Link4 = "/former-des-commerciaux";
$menu_submenu_entreprises_Text5 = "MOOC";
$menu_submenu_entreprises_Link5 = "/mooc-dentreprise";
$menu_submenu_entreprises_Text6 = "COOC";
$menu_submenu_entreprises_Link6 = "/cooc-dentreprise";
$menu_submenu_entreprises_Text6bis = "SPOC";
$menu_submenu_entreprises_Link6bis = "/spoc-dentreprise";
$menu_submenu_entreprises_Text7 = "Formation des nouveaux entrants";
$menu_submenu_entreprises_Link7 = "/elearning-formation-nouveaux-entrants";
$menu_submenu_entreprises_Text8 = "Formation réglementaire";
$menu_submenu_entreprises_Link8 = "/elearning-formation-reglementaire";
$menu_submenu_entreprises_Text9 = "Tutoriel logiciel";
$menu_submenu_entreprises_Link9 = "/elearning-formation-logiciel";
$menu_submenu_entreprises_Text10 = "Social Learning";
$menu_submenu_entreprises_Link10 = "/social-learning-lms";
$menu_submenu_entreprises_Text11 = "Transformation digitale";
$menu_submenu_entreprises_Link11 = "/votre-digitalisation";

$menu_mobileText = "Education";

$menu_inscription = "Inscription";
$menu_connexion = "Connexion";

$menu_title = "<span class='coupure979 coupure767 bigTitle'>Le LMS de l'ère digitale</span>";

$menu_withButton = true;
$menu_classButton = "popup-contact button360 orange";
$menu_textButton = "Contacter un conseiller";

// Section Client

$clients_logos = array(
    "orange",
    "ESSEC",
    "credit_agricole",
    "HEC",
    "SciencesPo",
    "ecolepolytechnique",
    "Danone",
    "havas",
    "pernod",
    "essilor",
    "sncf",
    "MMA",
    "hermes",
    "coface",
    "clearchanel",
    "michel_augustin",
    "AFD",
    "nespresso",
    "bouchara_recordati",
    "velux",
    "suez",
    "france_fermetures",
    "black_decker",
    "editions_lefebvre",
    "sodexo",
    "april",
    "spie",
    "BNP_paribas",
    "pole_emploi"
);

// Our offer

$ouroffer_slogan = "Pour déployer une transformation digitale et en mesurer l'impact<br>360Learning est la solution opérationnelle idéale";
$ouroffer_firstPoint = "Réduire de 90%<br>la durée des cycles métier";
$ouroffer_secondPoint = "Pour transformer rapidement l'Entreprise<br>sans limite, à coût constant";
$ouroffer_thirdPoint = "Multiplier les interactions lors<br>du changement : les business se parlent";
$ouroffer_fourthPoint = "Une DRH pionnière du digital pour<br>satisfaire les collaborateurs de toutes générations";
$ouroffer_fifthPoint = "360Learning vous accompagne au quotidien :<br>méthodologie, suivi des objectifs, utilisation";
$ouroffer_discover = "Découvrir 360Learning";
$ouroffer_link = "/plateforme-elearning-fonctionnalites";

// Promo Separator
$separator_title = "Aller plus loin avec<br>la formation au digital";
$separator_description = "Bâtissez votre entreprise étendue<br>Formez vos clients et vos partenaires<br>Monétisez vos formations<br>Renforcez votre marque-employeur";
$separator_textButton = "Contacter un Conseiller";
$separator_popup_type = "popup-contact";

// Our references

$ourreferences_paragraph = "Le spécialiste français de la formation en ligne.";

?>

<?php
    /**
    * Main template
    */
    require "templates/php/mainstructure.php";
?>
