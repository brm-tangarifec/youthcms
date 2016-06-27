<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-06-27 10:26:43
         compiled from "..\views\base\header-404.html" */ ?>
<?php /*%%SmartyHeaderCode:28319570e69e1897837-48927139%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e00998ffba842b365c2de68195cac1235f960f03' => 
    array (
      0 => '..\\views\\base\\header-404.html',
      1 => 1466616171,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28319570e69e1897837-48927139',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_570e69e18aef36_18823038',
  'variables' => 
  array (
    'titulo' => 0,
    'descripcionS' => 0,
    'loggueado' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_570e69e18aef36_18823038')) {function content_570e69e18aef36_18823038($_smarty_tpl) {?><!DOCTYPE html><!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="es-CO"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang="es-CO"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang="es-CO"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="es-CO"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <title><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</title>
  <meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['descripcionS']->value;?>
">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="/images/favicon.ico" type="image/x-icon">
  <!--link rel="stylesheet" href="/css/animate.css">
  <link rel="stylesheet" href="/css/bootstrap.min.css"-->

<!--   <link rel="stylesheet" href="/css/jquery.bxslider.css"> -->
  <link rel="stylesheet" href="/css/youth.min.css?21312312301">
  <?php echo $_smarty_tpl->getSubTemplate ("base/youthCss.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

  <!--font-->
  <link href="https://fonts.googleapis.com/css?family=Alfa+Slab+One" rel="stylesheet" type="text/css"><!--[if lt IE]>
  <?php echo '<script'; ?>
 src="//html5shiv.googlecode.com/svn/trunk/html5.js"><?php echo '</script'; ?>
>
  <![endif]-->
  <?php echo '<script'; ?>
 src="/js/libs/modernizr-2.6.2.min.js?21312312301"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="/js/youth/registro/client.js?onload=checkAuth"><?php echo '</script'; ?>
>
</head>
<body class="pg-404">
  <!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-5ZM4VB" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<?php echo '<script'; ?>
>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start': new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-5ZM4VB');<?php echo '</script'; ?>
>
<!-- End Google Tag Manager -->

  <!--mensajes del sistema-->
  <div class="mensajes-sistema"></div>
  <!--/-mensajes del sistema-->
  <!--header-->
  <header>
    <section class="container-fluid">
      <?php if ($_smarty_tpl->tpl_vars['loggueado']->value==0) {?>
      <!--sin l-->
      <!--Form login-->
      <div class="login-wrapper">
        <div class="row">
          <div class="col-lg-12">
            <div class="close"><i class="glyphicon glyphicon-remove-circle"></i></div>
            <h2>Inicio de sesión</h2>
            <!--Botón registro con Facebook-->
            <button type="button" class="btn btn-fb" >
              <span>Conéctate con facebook</span> <i class="icon icon-fb"></i>
              
            </button>
            <!--/-Botón registro con Facebook-->
            <!--Botón registro con Google+-->
            <button type="button" class="btn btn-g" id="btn-g"><i class="icon icon-g"></i> <span>Conéctate con google +</span></button>
            <!--/-Botón registro con Google+-->
            <form id="login" method="POST" action="/loginUser/">
              <!--Usuario-->
              <div class="form-group">
                <label for="loginUsuario">Usuario:</label>
                <input type="text" id="loginUsuario" name="loginUsuario" class="form-control">
              </div>
              <!--Contraseña-->
              <div class="form-group">
                <label for="loginPassword">Contraseña: </label>
                <input type="text" id="loginElingreso" name="loginElingreso" class="form-control">
              </div>
              <input type="hidden" class="form-control" value="" id="idRs" name="idRs">
              <!--Recordarme-->
              <!-- <div class="checkbox">
                <input type="checkbox" name="recordar">
                <label for="recordar">Recordar mi cuenta
                </label>
              </div> -->
              <button id="login-submit" type="submit" class="btn btn-login amarillo">Ingresar</button>
              <p>
                <a href="#">¿Olvidaste tu contraseña?</a> / Eres nuevo, <a href="/registro/">regístrate</a>
                
              </p>
            </form>
          </div>
        </div>
      </div>
      <!--/-Form login-->
      <div class="row">
        <!--Logo-->
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
          <h2 class="logo"><a href="/"><img src="/images/logo-youth.svg" alt="NESTLÉ® | Iniciativa por los Jóvenes" title="NESTLÉ® | Iniciativa por los Jóvenes" class="img-responsive"></a></h2>
        </div>
        <div class="col-lg-2 col-md-2 hidden-xs">       
          <p class="pais">Colombia</p>
        </div>
        <!--sin l-->
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 col-lg-offset-5 col-md-offset-5 col-sm-offset-5">
          <p class="user-tools">
            <a href="/registro/">Registrarse</a><br />
            <a class="show-login" href="#login">Iniciar Sesión</a>
          </p>
          
        </div>



        <!--/-Logo-->
      </div>
      <?php } else { ?>
      <!--Con L-->
      <div class="row">
        <!--Logo-->
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
          <h2 class="logo"><a href="/"><img src="/images/logo-youth.svg" alt="NESTLÉ® | Iniciativa por los Jóvenes" title="NESTLÉ® | Iniciativa por los Jóvenes" class="img-responsive"></a></h2>
        </div>
        <div class="col-lg-2 col-md-2 hidden-xs">       
          <p class="pais">Colombia</p>
        </div>
        <!--sin l-->
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 col-lg-offset-5 col-md-offset-5 col-sm-offset-5">
          <p class="user-tools">
            <a href="/perfil/">Ver perfil</a><br />
            <a href="/logout/" class="logout">Cerrar Sesión</a>
          </p>
          
        </div>

        

        <!--/-Logo-->
      </div>
      <?php }?>

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
