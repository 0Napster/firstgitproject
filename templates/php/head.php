<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<meta name="MobileOptimized" content="width=1246"/>
<?php require_once "config.php"; ?>
<script type="text/javascript">
    window.currentPage = "<?php echo $page; ?>";
    window.chosen_language = "<?php echo getenv('REQUEST_LANG'); ?>";
</script>
<meta name="keywords" content="<?php
switch (getenv('REQUEST_LANG')) {
    case 'fr':
        echo 'test fr';
        break;
    case 'en':
        echo 'test en';
        break;
}
?>"/>
<meta name="author" content="Peroogue" lang="<?php echo getenv('REQUEST_LANG'); ?>"
      xml:lang="<?php echo getenv('REQUEST_LANG'); ?>"/>
<meta name="copyright" content="Peroogue" lang="<?php echo getenv('REQUEST_LANG'); ?>"
      xml:lang="<?php echo getenv('REQUEST_LANG'); ?>"/>
<meta name="description" content="<?php echo $head_description; ?>">
<meta name="robots" content="index, follow, noarchive">
<meta name="application-name" content="Peroogue">
<meta name="DC.language" content="<?php echo getenv('REQUEST_LANG'); ?>">
<meta name="DC.format" content="text/html">
<meta name="DC.publisher" content="Peroogue">
<meta property="og:url" content="<?php echo 'http://fr.peroogue.fr/' . $url; ?>">
<meta property="og:site_name" content="Peroogue">
<meta property="og:type" content="article">
<meta property="og:title" content="<?php echo $head_title; ?>">
<meta property="og:image"
      content="<?php echo 'http://fr.' . DOMAINPeroogue . '/images/global/social/' . $social . '.jpg'; ?>">
<meta property="og:description" content="<?php echo $head_description; ?>">
<link rel="image_src" href="<?php echo 'http://fr.' . DOMAINPeroogue . '/images/global/social/' . $social . '.jpg'; ?>">
<meta itemprop="image" content="<?php echo 'http://fr.' . DOMAINPeroogue . '/images/global/social/' . $social . '.jpg'; ?>">
<title><?php echo $head_title; ?></title>
<link rel="icon" href="/images/favicon.png?v=3">
<link media="all" rel="stylesheet" type="text/css" href="<?php echo '/styles/css/' . $page . '.css' . "?v=4"; ?>"/>
<link media="all" rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans:300italic,600italic,300,600,800"/>
<script type="text/javascript" src="/js/libs/modernizr.custom.js"></script>
<script type="text/javascript">
    var rules = document.createElement("div").style;
    Modernizr.addTest("displaytable", function () {
        try {
            rules.display = "table";
            return rules.display == "table";
        } catch (e) {
            return false;
        }
    });
    if (!Modernizr.displaytable) {
        window.location = "unsupported.html";
    }
</script>

