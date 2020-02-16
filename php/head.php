<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="generator" content="Bludit">


<!-- Dynamic title tag -->
<?php echo Theme::metaTagTitle(); ?>

<?php echo Theme::headDescription(); ?>

<!-- Dynamic description tag -->
<?php echo Theme::metaTagDescription(); ?>

<!-- Include Favicon -->
<?php echo Theme::favicon('img/favicon.png'); ?>

<!-- Include CSS Bootstrap file from Bludit Core -->
<?php echo Theme::cssBootstrap(); ?>

<!-- Include CSS Styles from this theme -->
<?php echo Theme::css('css/style.css'); ?>

<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Raleway:400,300,600" type="text/css"  media="all">
<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Lato:400,300italic,700" type="text/css" media="all">
<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Source+Sans+Pro:400,400italic" type="text/css" media="all">
                             
<?php echo Theme::css('css/normalize.css'); ?>
<?php echo Theme::css('css/skeleton.css'); ?>
<?php echo Theme::css('css/happy.css'); ?>

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

<!-- Load Bludit Plugins: Site head -->
<?php Theme::plugins('siteHead'); ?>
