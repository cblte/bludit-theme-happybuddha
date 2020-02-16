<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<?php echo Theme::headTitle(); ?>
<?php echo Theme::headDescription(); ?>

<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Raleway:400,300,600" type="text/css"  media="all">
<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Lato:400,300italic,700" type="text/css" media="all">
<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Source+Sans+Pro:400,400italic" type="text/css" media="all">
                             
<?php echo Theme::css('css/normalize.css'); ?>
<?php echo Theme::css('css/skeleton.css'); ?>
<?php echo Theme::css('css/happy.css'); ?>

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">



<?php echo Theme::favicon('img/favicon.png'); ?>

<!-- Load Bludit Plugins: Site head -->
<?php Theme::plugins('siteHead'); ?>
