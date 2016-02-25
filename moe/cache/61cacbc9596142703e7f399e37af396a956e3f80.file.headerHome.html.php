<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-02-24 23:22:31
         compiled from "..\views\base\headerHome.html" */ ?>
<?php /*%%SmartyHeaderCode:701756ce8187dd33b0-25437743%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '61cacbc9596142703e7f399e37af396a956e3f80' => 
    array (
      0 => '..\\views\\base\\headerHome.html',
      1 => 1456265130,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '701756ce8187dd33b0-25437743',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_56ce8187e34e40_45826919',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56ce8187e34e40_45826919')) {function content_56ce8187e34e40_45826919($_smarty_tpl) {?><!DOCTYPE html><!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="es-CO"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang="es-CO"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang="es-CO"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="es-CO"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <title>NESTLÉ® | Iniciativa por los Jóvenes</title>
  <meta name="description" content="NESTLÉ® | Iniciativa por los Jóvenes">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/youth/css/animate.css">
  <link rel="stylesheet" href="/youth/css/bootstrap.min.css">
  <link rel="stylesheet" href="/youth/css/jquery.bxslider.css">
  <link rel="stylesheet" href="/youth/css/style.css">
  <!--font-->
  <link href="https://fonts.googleapis.com/css?family=Alfa+Slab+One" rel="stylesheet" type="text/css"><!--[if lt IE]>
  <?php echo '<script'; ?>
 src="//html5shiv.googlecode.com/svn/trunk/html5.js"><?php echo '</script'; ?>
>
  <![endif]-->
  <?php echo '<script'; ?>
 src="/youth/js/libs/modernizr-2.6.2.min.js"><?php echo '</script'; ?>
>
</head>
<body>
  <!--header-->
  <header>
    <section class="container-fluid">
      <!--Form login-->
      <div class="login-wrapper">
        <div class="row">
          <div class="col-lg-12">
            <div class="close"><i class="glyphicon glyphicon-remove-circle"></i></div>
            <h2>Inicio de sesión</h2>
            <form id="login" method="">
              <!--Usuario-->
              <div class="form-group">
                <label for="login-usuario">Usuario:</label>
                <input type="text" id="login-usuario" name="login-usuario" class="form-control">
              </div>
              <!--Contraseña-->
              <div class="form-group">
                <label for="login-password">Contraseña: </label>
                <input type="text" id="login-password" name="login-password" class="form-control">
              </div>
              <!--Recordarme-->
              <div class="checkbox">
                <input type="checkbox">
                <label for="">Recordar mi cuenta
                </label>
              </div>
              <button id="login-submit" type="button" class="btn btn-login amarillo">Ingresar</button>
              <p>
                <a href="#">¿Olvidaste tu contraseña?</a> / Eres nuevo, <a href="registro.php">regístrate</a>
                
              </p>
            </form>
          </div>
        </div>
      </div>
      <!--/-Form login-->
      <div class="row">
        <!--Logo-->
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
          <h1 class="logo"><a href="index.php"><img src="images/logo-youth.svg" alt="NESTLÉ® | Iniciativa por los Jóvenes" title="NESTLÉ® | Iniciativa por los Jóvenes" class="img-responsive"></a></h1>
        </div>
        <div class="col-lg-2 col-md-2 hidden-xs">				
          <p class="pais">Colombia</p>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 col-lg-offset-5 col-md-offset-5 col-sm-offset-5">
          <p class="user-tools">
            <a href="registro.php">Registrarse</a><br />
            <a class="show-login" href="#login">Iniciar Sesión</a>
          </p>
        </div>
        <!--/-Logo-->
      </div>
    </section>
    <section class="container-fluid container-menu">
      <div class="row">
        <nav class="navbar navbar-default">
          <div class="container-fluid">
            <!--boton responsive-->
            <div class="navbar-header">
              <button type="button" data-toggle="collapse" data-target="#menu" aria-expanded="false" class="navbar-toggle collapsed"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            </div>
            <!--/-boton responsive-->
            <!--Menu-->
            <div id="menu" class="collapse navbar-collapse">
              <ul class="nav navbar-nav">
                <li><a href="orientate.php">Oriéntate</a></li>
                <li><a href="entrenate.php">Entrénate</a></li>
                <li><a href="empleate.php">Empléate</a></li>
                <li><a href="oportunidades.php">+ Oportunidades</a></li>
              </ul>
            </div>
            <!--/-Menu-->
          </div>
        </nav>
      </div>
    </section>
  </header><?php }} ?>
