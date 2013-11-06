<?php $thisPage="resumenes"; ?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>CLGC - Formulario Registro</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
        <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/flexslider.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/font-awesome-ie7.min.css">
        
        <script src="js/vendor/jquery-1.8.0.min.js" type="text/javascript"></script>  
        <!--[if lt IE 9]>
          <script src="js/modernizr.custom.js"></script>
        <![endif]-->
        <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
        <script src="js/vendor/jquery.flexslider-min.js" type="text/javascript"></script>
        <script src="js/vendor/functions.js" type="text/javascript"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->
    <?php include 'header.php'; ?>

    <?php include 'jumbotron.php'; ?>

    <div id="main" class="container">
        <div id="iframe">
            <iframe src="https://docs.google.com/spreadsheet/embeddedform?formkey=dHdBcFFMSmF5R2ZFMl9hblFJNG1KT1E6MA" width="100%" height="2990" frameborder="0" marginheight="0" marginwidth="0">Cargando...</iframe>
        </div>

      <hr>

      <?php include 'footer.php'; ?>
    </div> <!-- /container -->

    <!--<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.1.min.js"><\/script>')</script>-->
    
    <!--<script src="js/vendor/jquery-1.10.1.min.js"></script>-->
    <script src="js/vendor/bootstrap.min.js"></script>

    <script src="js/main.js"></script>

    <!--<script>
        var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
        (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
        g.src='//www.google-analytics.com/ga.js';
        s.parentNode.insertBefore(g,s)}(document,'script'));
    </script>-->
    </body>
</html>
