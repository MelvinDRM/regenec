<!-- <?php include "sitecake/server/sitecake_entry.php"; ?> -->
<?php $thisPage="registro"; ?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>CLGC - Registro</title>
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
      <div id="info" class="container sc-content-editableRegistro1">
        <h3>Registro de participantes</h3>
        <p>Para la asistencia al I Congreso Latinoamericano de Gen&eacutetica para la Conservaci&oacuten contamos con diferentes fechas de registro:</p>
        
        <br>
        <table id="regTable">
          <thead>
            <tr>
              <th rowspan="2">Fechas</th>
              <th colspan="2">Miembros ReGeneC</th>
              <th colspan="2">No miembros de ReGeneC</th>
            </tr>
            <tr>
              <th>Estudiantes</th>
              <th>Profesionales</th>
              <th>Estudiantes</th>
              <th>Profesionales</th>
            </tr>
          </thead>
          <tbody>
          <tr>
            <td>Registro temprano (28 de febrero de 2014)</td>
            <td>260 USD</td>
            <td>280 USD</td>
            <td>280 USD</td>
            <td>300 USD</td>
          </tr>
          <tr>
            <td>Registro regular (23 de abril de 2014)</td>
            <td>280 USD</td>
            <td>300 USD</td>
            <td>300 USD</td>
            <td>320 USD</td>
          </tr>
          <tr>
            <td>Registro tard&iacuteo (hasta el 5 de mayo de 2014)</td>
            <td>300 USD</td>
            <td>320 USD</td>
            <td>320 USD</td>
            <td>340 USD</td>
          </tr>
          </tbody>
        </table>
        <small>El registro se realizar&aacute en l&iacutenea y quedar&aacute abierto pr&oacuteximamente.</small>
      </div>
      <br>
      <div id="info" class="container sc-content-editableRegistro2">
        <h3>Cursos</h3>
        <p>El costo de cada curso ser&aacute de 30 USD. Los cursos “Introducci&oacuten a la Gen&eacutetica para la Conservaci&oacuten” y “Diseño de proyectos en Gen&eacutetica para la Conservaci&oacuten” estar&aacuten abiertos s&oacutelo para estudiantes/profesionales que no hayan participado previamente del Taller de Gen&eacutetica para la Conservaci&oacuten organizado por ReGeneC. Al curso “Secuenciaci&oacuten de pr&oacutexima generaci&oacuten y su uso en la Gen&eacutetica para la Conservaci&oacuten” podr&aacuten postular profesionales con conocimientos en herramientas de gen&eacutetica molecular. Para postular a los cursos seleccione:</p>
        <ul>
          <li><a target="_blank" href="formCursoGenetica.php">Introducci&oacuten a la GC</a></li>
          <li><a target="_blank" href="formCursoDiseno.php">Diseño de proyectos</a></li>
          <li><a target="_blank" href="formCursoSecuenciacion.php">Secuenciaci&oacuten de pr&oacutexima generaci&oacuten</a></li>
        </ul>
        <br>
        <h3>Becas de viaje</h3>
        <p>Existe un n&uacutemero limitado de becas de viaje, las cuales ofrecen apoyo parcial para asistir al congreso. Si desea postular presione <a target="_blank" href="formSolicitudBeca.php">aqu&iacute</a></p>
        <br>
        <h3>Pol&iacutetica de cancelaciones</h3>
        <p>Por favor, tenga en cuenta que usted puede cancelar su registro hasta un mes antes del inicio del congreso, recibiendo un reembolso de su pago. Sin embargo, se realizar&aacute un cargo del 10% por gastos administrativos sobre todas las cancelaciones. Las cancelaciones solicitadas durante el mes previo al congreso ser&aacuten reembolsadas en un 50% y aquellas solicitadas despu&eacutes del 5 de Mayo no recibir&aacuten reembolso. Para solicitar la cancelaci&oacuten de su registro por favor escriba a <a href="mailto:latgencon@gmail.com">latgencon@gmail.com</a></p>
        <br>
        <h3>Carta de Invitaci&oacuten</h3>
        <p>Si necesita una carta de invitaci&oacuten, con el objetivo de conseguir fondos, puede solicitarla v&iacutea E-mail a Gaby Montiel, a trav&eacutes de la direcci&oacuten de correo electr&oacutenico <a href="mailto:latgencon@gmail.com">latgencon@gmail.com</a></p>
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
