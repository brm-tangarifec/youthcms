<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-03-03 00:39:24
         compiled from "..\views\youth\secciones.html" */ ?>
<?php /*%%SmartyHeaderCode:359556d7be3feddc84-60049086%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9cb692e23cbcb3c7fa4398330207a08f623f0b85' => 
    array (
      0 => '..\\views\\youth\\secciones.html',
      1 => 1456983553,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '359556d7be3feddc84-60049086',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_56d7be3ff24192_42557970',
  'variables' => 
  array (
    'multimedia' => 0,
    'pos' => 0,
    'descripcionCapsulaK' => 0,
    'descripcionCapsula' => 0,
    'CapsulaH' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56d7be3ff24192_42557970')) {function content_56d7be3ff24192_42557970($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("base/headerHome.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<!--Carga titulo-->

<!--Carga Contenido Slider Capsula-->
<!--Slider PPAl-->


	<?php  $_smarty_tpl->tpl_vars['descripcionCapsulaK'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['descripcionCapsulaK']->_loop = false;
 $_smarty_tpl->tpl_vars['pos'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['multimedia']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['descripcionCapsulaK']->key => $_smarty_tpl->tpl_vars['descripcionCapsulaK']->value) {
$_smarty_tpl->tpl_vars['descripcionCapsulaK']->_loop = true;
 $_smarty_tpl->tpl_vars['pos']->value = $_smarty_tpl->tpl_vars['descripcionCapsulaK']->key;
?>
		<?php if ($_smarty_tpl->tpl_vars['pos']->value==1) {?>
		 <section class="container-fluid u-no-border slider-ppal slider-entrenate">
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
		       	   	<?php echo $_smarty_tpl->tpl_vars['descripcionCapsula']->value['descripcion'];?>

		       		</div>
		     		 </div>
		     	 <?php } ?>
		      
		    </div>
		    <!--Controls--><a href="#carrusel-ppal" role="button" data-slide="prev" class="left carousel-control"><span aria-hidden="true" class="icon icon-circle-left"></span><span class="sr-only">Prev</span></a><a href="#carrusel-ppal" role="button" data-slide="next" class="right carousel-control"><span aria-hidden="true" class="icon icon-circle-right"></span><span class="sr-only">Next</span></a>
		  </div>
		</section>
	
  		  <!--/-más información-->
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['pos']->value>1&&$_smarty_tpl->tpl_vars['pos']->value<=4) {?>

				<?php if ($_smarty_tpl->tpl_vars['pos']->value==2) {?>
					<section class="container-fluid mask-arrow">

					<!--más información-->
					<div class="go-down">
					<p class="azul-oscuro-text">Más información</p><a href="#" class="icon icon-circle-left down naranja-text"></a>
					</div>
					<?php  $_smarty_tpl->tpl_vars['descripcionCapsula'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['descripcionCapsula']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['descripcionCapsulaK']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['descripcionCapsula']->key => $_smarty_tpl->tpl_vars['descripcionCapsula']->value) {
$_smarty_tpl->tpl_vars['descripcionCapsula']->_loop = true;
?>

						<?php echo $_smarty_tpl->tpl_vars['descripcionCapsula']->value['descripcion'];?>


					<?php } ?>

				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['pos']->value==3) {?>
					<?php  $_smarty_tpl->tpl_vars['descripcionCapsula'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['descripcionCapsula']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['descripcionCapsulaK']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['descripcionCapsula']->key => $_smarty_tpl->tpl_vars['descripcionCapsula']->value) {
$_smarty_tpl->tpl_vars['descripcionCapsula']->_loop = true;
?>

						<?php echo $_smarty_tpl->tpl_vars['descripcionCapsula']->value['descripcion'];?>


					<?php } ?>

				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['pos']->value==4) {?>
					<?php  $_smarty_tpl->tpl_vars['descripcionCapsula'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['descripcionCapsula']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['descripcionCapsulaK']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['descripcionCapsula']->key => $_smarty_tpl->tpl_vars['descripcionCapsula']->value) {
$_smarty_tpl->tpl_vars['descripcionCapsula']->_loop = true;
?>

						<?php echo $_smarty_tpl->tpl_vars['descripcionCapsula']->value['descripcion'];?>


					<?php } ?>
							</section>
				<?php }?>
	
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['pos']->value==5) {?>
					<?php  $_smarty_tpl->tpl_vars['descripcionCapsula'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['descripcionCapsula']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['descripcionCapsulaK']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['descripcionCapsula']->key => $_smarty_tpl->tpl_vars['descripcionCapsula']->value) {
$_smarty_tpl->tpl_vars['descripcionCapsula']->_loop = true;
?>

						<?php echo $_smarty_tpl->tpl_vars['descripcionCapsula']->value['descripcion'];?>


					<?php } ?>

				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['pos']->value==6) {?>
						 <!--Capsulas-->
					<section class="container-fluid u-no-border home-capsulas">
					  <div class="row">
					    <h2 class="text-center">Cápsulas</h2>
					    <div class="col-lg-6 col-md-6 col-sm-10 col-xs-12 col-lg-offset-3 col-md-offset-3 col-sm-offset-1">
					    	<?php  $_smarty_tpl->tpl_vars['CapsulaH'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['CapsulaH']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['descripcionCapsulaK']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['CapsulaH']->key => $_smarty_tpl->tpl_vars['CapsulaH']->value) {
$_smarty_tpl->tpl_vars['CapsulaH']->_loop = true;
?>
							      <article class="capsula">
							        <figure class="img-capsula"><div class=" embed-responsive embed-responsive-16by9"><iframe height="200" width="200" src="https://www.youtube.com/embed/<?php echo $_smarty_tpl->tpl_vars['CapsulaH']->value['url'];?>
" class="embed-responsive-item" frameborder="0" allowfullscreen></iframe></div></figure>
							         <div class="text-capsula">
							       	<?php echo $_smarty_tpl->tpl_vars['CapsulaH']->value['descripcion'];?>

							       </div>
							        </div>
							      </article>
					    	<?php } ?>
					    </div>
					  </div>
					  <!--/-Capsulas-->
					</section>

				<?php }?>
	<?php } ?>
	<!-- Paso 1 -->
	
	
	
<!--Fin contenido-->
<?php echo $_smarty_tpl->getSubTemplate ("base/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
