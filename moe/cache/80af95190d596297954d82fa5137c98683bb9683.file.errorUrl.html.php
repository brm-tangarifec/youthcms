<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-04-13 10:46:41
         compiled from "..\views\errorUrl.html" */ ?>
<?php /*%%SmartyHeaderCode:137556f2c1a574b435-14170143%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '80af95190d596297954d82fa5137c98683bb9683' => 
    array (
      0 => '..\\views\\errorUrl.html',
      1 => 1460559431,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '137556f2c1a574b435-14170143',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_56f2c1a5781f30_96688489',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56f2c1a5781f30_96688489')) {function content_56f2c1a5781f30_96688489($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("base/header-404.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<!--Slider PPAl-->

<section class="container-fluid content-404 mask-arrow">
  <div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6"><img src="/images/404.svg" alt="404" title="404" class="img-responsive"></div>
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
      <h1>
        Buscar el primer empleo no es fácil,
        debes seguir intentándolo.
        Vuelve después que aquí
        <strong class="purpura-text">te asesoraremos.</strong>
        
        
      </h1><a href="/" role="button" class="btn btn-404 purpura">Ir al home</a>
    </div>
  </div>
</section>
<section class="container-fluid orientate mask-after">
  <!--vacantes-->
  <article class="row">
    <div class="col-lg-12">
      <h2 class="text-center verde">
        <i class="icon icon-orientate"></i> Comienza tu ruta al éxito laboral
        
      </h2>
    </div>
    <div class="col-lg-12 tab-content">
      <div id="hojas-de-vida" role="tabpanel" class="tab-pane active">
        <div class="header azul-claro"><img src="/images/icon-hoja-vida.png" alt="Hoja de vida" title="Hoja de vida" class="img-responsive">
          <h3>Tu pasaporte</h3>
        </div>
        <p>Objetivo: Elaborar la hoja de vida más efectiva al momento de postular.</p>
        <p class="text-right"><a href="#" class="btn btn-tab btn-azul-claro">Empieza tu ruta</a></p>
      </div>
    </div>
  </article>
  <!--/-vacantes-->

<?php echo $_smarty_tpl->getSubTemplate ("base/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
