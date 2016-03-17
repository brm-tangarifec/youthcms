<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-03-17 10:36:34
         compiled from "..\views\base\header.html" */ ?>
<?php /*%%SmartyHeaderCode:1906956e328c94ecfb3-54260364%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'de1312a86d0f1d495fa24e1996cb551bfc917dfb' => 
    array (
      0 => '..\\views\\base\\header.html',
      1 => 1458170749,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1906956e328c94ecfb3-54260364',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_56e328c94f4cb4_53806039',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56e328c94f4cb4_53806039')) {function content_56e328c94f4cb4_53806039($_smarty_tpl) {?><!DOCTYPE html><!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="es-CO"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang="es-CO"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang="es-CO"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="es-CO"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <title>Cartelera de vacantes de aliados | NESTLÉ® - Iniciativa por los Jóvenes</title>
  <meta name="description" content="NESTLÉ® | Iniciativa por los Jóvenes">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!--link rel="stylesheet" href="/css/animate.css">
  <link rel="stylesheet" href="/css/bootstrap.min.css"-->

<!--   <link rel="stylesheet" href="/css/jquery.bxslider.css"> -->
  <link rel="stylesheet" href="/css/youth.min.css">
  <?php echo $_smarty_tpl->getSubTemplate ("base/youthCss.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

  <!--font-->
  <link href="https://fonts.googleapis.com/css?family=Alfa+Slab+One" rel="stylesheet" type="text/css"><!--[if lt IE]>
  <?php echo '<script'; ?>
 src="//html5shiv.googlecode.com/svn/trunk/html5.js"><?php echo '</script'; ?>
>
  <![endif]-->
  <?php echo '<script'; ?>
 src="/js/libs/modernizr-2.6.2.min.js"><?php echo '</script'; ?>
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
                  <!--Botón registro con Facebook-->
                  <button type="button" class="btn btn-fb">
                    <span>Conéctate con facebook</span> <i class="icon icon-fb"></i>
                    
                  </button>
                  <!--/-Botón registro con Facebook-->
                  <!--Botón registro con Google+-->
                  <button type="button" class="btn btn-g"><i class="icon icon-g"></i> <span>Conéctate con google +</span></button>
                  <!--/-Botón registro con Google+-->
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
                      <input type="checkbox" name="recordar">
                      <label for="recordar">Recordar mi cuenta
                      </label>
                    </div>
                    <button id="login-submit" type="submit" class="btn btn-login amarillo">Ingresar</button>
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
          <h1 class="logo"><a href="/"><img src="/images/logo-youth.svg" alt="NESTLÉ® | Iniciativa por los Jóvenes" title="NESTLÉ® | Iniciativa por los Jóvenes" class="img-responsive"></a></h1>
        </div>
        <div class="col-lg-2 col-md-2 hidden-xs">				
          <p class="pais">Colombia</p>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 col-lg-offset-5 col-md-offset-5 col-sm-offset-5">
          
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
                <li><a href="/orientate/">Oriéntate</a></li>
                <li><a href="/entrenate/">Entrénate</a></li>
                <li><a href="/empleate/">Empléate</a></li>
                <li><a href="/oportunidades/">+ Oportunidades</a></li>
              </ul>
            </div>
            <!--/-Menu-->
          </div>
        </nav>
      </div>
    </section>
  </header>
  <!--/-header--><?php }} ?>
