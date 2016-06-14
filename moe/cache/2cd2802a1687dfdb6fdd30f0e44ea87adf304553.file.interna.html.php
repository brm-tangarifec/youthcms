<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-06-14 10:32:00
         compiled from "..\views\youth\interna.html" */ ?>
<?php /*%%SmartyHeaderCode:1864456e328c9435603-09513578%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2cd2802a1687dfdb6fdd30f0e44ea87adf304553' => 
    array (
      0 => '..\\views\\youth\\interna.html',
      1 => 1465488537,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1864456e328c9435603-09513578',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_56e328c94dd5b0_06411889',
  'variables' => 
  array (
    'multimedia' => 0,
    'pos' => 0,
    'descripcionCapsulaK' => 0,
    'descripcionCapsula' => 0,
    'tituloC' => 0,
    'contenido' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56e328c94dd5b0_06411889')) {function content_56e328c94dd5b0_06411889($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("base/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<!--Pone la multimedia-->
<?php  $_smarty_tpl->tpl_vars['descripcionCapsulaK'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['descripcionCapsulaK']->_loop = false;
 $_smarty_tpl->tpl_vars['pos'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['multimedia']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['descripcionCapsulaK']->key => $_smarty_tpl->tpl_vars['descripcionCapsulaK']->value) {
$_smarty_tpl->tpl_vars['descripcionCapsulaK']->_loop = true;
 $_smarty_tpl->tpl_vars['pos']->value = $_smarty_tpl->tpl_vars['descripcionCapsulaK']->key;
?>
	<?php if ($_smarty_tpl->tpl_vars['pos']->value==1) {?>
	 <section class="container-fluid u-no-border slider-ppal">
	  <div id="carrusel-ppal" data-ride="carousel" class="carousel slide">
	    <!--wrapper -->
	    <div role="listbox" class="carousel-inner">
	      <!--item-->
	      	<?php  $_smarty_tpl->tpl_vars['descripcionCapsula'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['descripcionCapsula']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['descripcionCapsulaK']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['descripcionCapsula']->key => $_smarty_tpl->tpl_vars['descripcionCapsula']->value) {
$_smarty_tpl->tpl_vars['descripcionCapsula']->_loop = true;
?>
	      	
	      	 	<?php if ($_smarty_tpl->tpl_vars['descripcionCapsula']->value['orden']=='1') {?>
	      			<div class="item active">
	      		<?php } else { ?>
	      			<div class="item">
	      		<?php }?>
	       		<div class="carousel-caption">
	       	   	<?php echo utf8_decode($_smarty_tpl->tpl_vars['descripcionCapsula']->value['descripcion']);?>

	       		</div>
	     		 </div>
	     	 <?php } ?>
	      
	    </div>
	    <!--Controls--><a href="#carrusel-ppal" role="button" data-slide="prev" class="left carousel-control"><span aria-hidden="true" class="icon icon-circle-left"></span><span class="sr-only">Prev</span></a><a href="	#carrusel-ppal" role="button" data-slide="next" class="right carousel-control"><span aria-hidden="true" class="icon icon-circle-right"></span><span class="sr-only">Next</span></a>
	  </div>
	</section>
	<?php }?>
<?php } ?>
<!--Carga titulo-->
 <!--/-Slider PPAl-->
  <section class="container-fluid">
    <!--más información-->
    <div class="go-down">
      <p class="azul-oscuro-text">Más información</p><a href="#" class="icon icon-circle-left down purpura-text"></a>
    </div>
    <!--/-más información-->
    <article class="row contenido">
		<h1><?php echo $_smarty_tpl->tpl_vars['tituloC']->value;?>
</h1>
		<?php echo $_smarty_tpl->tpl_vars['contenido']->value;?>

    </article>
  </section>
<!--Fin contenido-->
<?php echo $_smarty_tpl->getSubTemplate ("base/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
