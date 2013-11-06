<!-- /* <?php include "sitecake/server/sitecake_entry.php"; ?> */ -->
<?php $thisPage="home"; ?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>CLGC - Home</title>
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
      <div class="row">
          <?php include 'sidebar.php'; ?>
          <section id="info" class="testimonial col-md-7 sc-content-editableIndex">
            <p>El I Congreso Latinoamericano de Gen&eacutetica para la Conservaci&oacuten (CLGC) es organizado por la Red de Gen&eacutetica para la Conservaci&oacuten, ReGeneC, en el marco de la celebraci&oacuten de sus primeros 10 años. Tendr&aacute lugar en el litoral central de Venezuela, en el estado Vargas, sobre el Mar Caribe. En el marco de esta reuni&oacuten cient&iacutefica esperamos compartir, como comunidad, los frutos (investigaci&oacuten, docencia, premios) de todos los miembros de la Red con otros investigadores y estudiantes que desarrollan su trabajo en Am&eacuterica Latina y, de esta manera, conocer sobre los avances de la gen&eacutetica para la conservaci&oacuten, su tendencia y discutir sobre las perspectivas a futuro.</p>
            <p>El <a href="programa.php">programa</a> del Congreso contempla conferencias, presentaciones originales en formato de ponencias orales y carteles, as&iacute como foros, simposios y cursos.</p>
            <p>Este encuentro representa, adem&aacutes, una oportunidad para evaluar la labor realizada por la Red durante este tiempo, tanto en la difusi&oacuten de herramientas moleculares para apoyar la soluci&oacuten de problemas de conservaci&oacuten, como en la formaci&oacuten de estudiantes y profesionales en esa materia.</p>
            <p>La <a target="_blank" href="http://www.regenec.org">Red de Gen&eacutetica para la Conservaci&oacuten</a> est&aacute conformada por profesionales asociados a universidad e institutos de investigaci&oacuten de diferentes pa&iacuteses de Am&eacuterica Latina, que participan en calidad de profesores y todo el conjunto de estudiantes y profesionales que han tomado alguno de los cursos. Sus or&iacutegenes se remontan a noviembre de 2004, cuando tuvo lugar, en Caracas - Venezuela, el primer taller, el cual cont&oacute con cursos donde participaron estudiantes de cinco pa&iacuteses. Desde entonces hemos tenido nueve cursos, que han atendido a m&aacutes de 200 estudiantes de Argentina, Bolivia, Brasil, Colombia, Costa Rica, Cuba, Chile, Ecuador, Guatemala, Honduras, M&eacutexico, Nicaragua, Panam&aacute, Paraguay, Per&uacute, Uruguay, Venezuela. El funcionamiento de ReGeneC descansa en un Comit&eacute Ejecutivo, canalizado a trav&eacutes de la Coordinaci&oacuten Ejecutiva. </p>
            <p>La recepci&oacuten de res&uacutemenes para presentaciones orales o carteles y la postulaci&oacuten a cursos podr&aacute realizarse hasta el <a href="resumenes.php">10 de enero de 2014</a> y el cierre del registro regular ser&aacute el <a href="registro.php">23 de abril de 2014</a>.</p>
            <p>Se dispone de algunas becas de viaje, para las cuales deben postular al momento de someter su resumen o postular a los cursos.</p>
            <p>Adicionalmente, gracias al apoyo de la Asociaci&oacuten Americana de Gen&eacutetica (The Amererican Genetic Association), tendremos un n&uacutemero especial de Journal of Heredity, el cual incluir&aacute los trabajos originales presentados en el Congreso, que sometidos por sus autores, cumplan con todos los requisitos de la revista y del comit&eacute editorial.</p>
          </section>
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
