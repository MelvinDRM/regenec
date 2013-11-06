<div class="navbar navbar-inverse navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a target="_blank" id="logo" class="navbar-brand" href="http://www.regenec.org"><img src="img/regenec.png"></a>
    </div>
    <div class="navbar-collapse collapse">
      <ul class="nav navbar-nav">
        <li <?php if ($thisPage=="home") 
echo " id=\"active\""; ?>><a href="index.php">Inicio</a></li>
        <li <?php if ($thisPage=="registro") 
echo " id=\"active\""; ?>><a href="registro.php">Registro</a></li>
        <li <?php if ($thisPage=="programa") 
echo " id=\"active\""; ?>><a href="programa.php">Programa</a></li>
        <li <?php if ($thisPage=="resumenes") 
echo " id=\"active\""; ?>><a href="resumenes.php">Res&uacutemenes</a></li>
        <li <?php if ($thisPage=="becas") 
echo " id=\"active\""; ?> class="hidden-sm hidden-md"><a href="informacionVisitante.php">Informaci&oacuten Visitante</a></li>

        <li <?php if ($thisPage=="becas") 
echo " id=\"active\""; ?> class="visible-sm visible-md"><a href="informacionVisitante.php">Informaci&oacuten</a></li>
        <li <?php if ($thisPage=="pyo") 
echo " id=\"active\""; ?> class="hidden-sm hidden-md"><a href="organizacionYPatrocinantes.php">Organizaci&oacuten y Patrocinantes</a></li>
        <li <?php if ($thisPage=="pyo") 
echo " id=\"active\""; ?> class="visible-sm visible-md"><a href="organizacionYPatrocinantes.php">Organizaci&oacuten</a></li>
      </ul>
    </div><!--/.navbar-collapse -->
  </div>
</div>