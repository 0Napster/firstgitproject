<!DOCTYPE html>
<html>
<head>
    <?php require "templates/php/head.php"; ?>
    <script type="text/javascript" src="/js/libs/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.3/jquery-ui.min.js"></script>
</head>
<body class="lang-<?php echo getenv('REQUEST_LANG'); ?> gradient">
<div id="wrapper">
    <?php
    foreach ($sections as &$section) {
        require "templates/php/" . $section . ".php";
    }
    unset($section);
    ?>
</div>

<!-- JavaScript libraries -->

<script type="text/javascript" src="/js/libs/jquery.waypoints.min.js"></script>
<script type="text/javascript" src="/js/libs/bootstrap.min.js"></script>
<!--        <script type="text/javascript" src="/js/libs/TweenMax.min.js"></script>-->
<script type="text/javascript" src="/js/libs/slick.min.js"></script>

<!-- Common JavaScript code -->

<?php
if (DOMAINPeroogue === "peroogue.fr") {
    echo "<script type='text/javascript' src='/js/min/common.min.js'></script>";
} else {
    echo "<script type='text/javascript' src='/js/min/concat.js'></script>";
}
?>
<!-- Specific JavaScript code -->
<?php
if (isset($specificScripts)) {
    foreach ($specificScripts as $script) {
        if (isset($script["libs"])) {
            echo "<script type='text/javascript' src='/js/libs/" . $script["libs"] . ".js'></script>";
        } else if (isset($script["script"])) {
            echo "<script type='text/javascript' src='/js/" . $script["script"] . ".js'></script>";
        } else if (isset($script["externalScript"])) {
            echo "<script type='text/javascript' src='" . $script["externalScript"] . "'></script>";
        }
    }
}
?>
</body>
</html>
