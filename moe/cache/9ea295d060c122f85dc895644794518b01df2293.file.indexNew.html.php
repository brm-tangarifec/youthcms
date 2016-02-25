<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-02-25 18:00:20
         compiled from "..\views\youth\indexNew.html" */ ?>
<?php /*%%SmartyHeaderCode:2302456ce8187c06449-87898421%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9ea295d060c122f85dc895644794518b01df2293' => 
    array (
      0 => '..\\views\\youth\\indexNew.html',
      1 => 1456441218,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2302456ce8187c06449-87898421',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_56ce8187cb60f1_21747740',
  'variables' => 
  array (
    'multimedia' => 0,
    'pos' => 0,
    'descripcionCapsulaK' => 0,
    'descripcionCapsula' => 0,
    'GeleriaC' => 0,
    'videoH' => 0,
    'elearningH' => 0,
    'CapsulaH' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56ce8187cb60f1_21747740')) {function content_56ce8187cb60f1_21747740($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("base/headerHome.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

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
		       	   	<?php echo $_smarty_tpl->tpl_vars['descripcionCapsula']->value['descipcion'];?>

		       		</div>
		     		 </div>
		     	 <?php } ?>
		      
		    </div>
		    <!--Controls--><a href="#carrusel-ppal" role="button" data-slide="prev" class="left carousel-control"><span aria-hidden="true" class="icon icon-circle-left"></span><span class="sr-only">Prev</span></a><a href="#carrusel-ppal" role="button" data-slide="next" class="right carousel-control"><span aria-hidden="true" class="icon icon-circle-right"></span><span class="sr-only">Next</span></a>
		  </div>
		</section>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['pos']->value==2) {?>
			 <!--/-Slider PPAl-->
			 	<section class="container-fluid">
			    <!--slider destacados-->
			    <article class="row">
			      <div class="col-lg-12">
			        <div class="slider-destacado">
			 	<?php  $_smarty_tpl->tpl_vars['GeleriaC'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['GeleriaC']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['descripcionCapsulaK']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['GeleriaC']->key => $_smarty_tpl->tpl_vars['GeleriaC']->value) {
$_smarty_tpl->tpl_vars['GeleriaC']->_loop = true;
?>
			          <div class="slide">
			            <figure><a href="#"><img src="<?php echo $_smarty_tpl->tpl_vars['GeleriaC']->value['url'];?>
" alt="Destacado" title="Destacado" class="img-responsive"></a></figure>
			            <?php echo utf8_encode($_smarty_tpl->tpl_vars['GeleriaC']->value['descipcion']);?>

			          </div>
			          
		     	<?php } ?>
			        </div>
			      </div>
			    </article>
			
	    	<!--/-slider destacados-->
			 <!--datos youth-->
   			<article class="row objetivos">
   			  <h2 class="text-center">Nuestro compromiso en Colombia 2015 - 2018</h2>
   			  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
   			    <h3 class="naranja-text">500</h3>
   			    <p>oportunidades de empleo</p>
   			  </div>
   			  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
   			    <h3 class="magenta-text">2.100</h3>
   			    <p>capacitaciones a jóvenes</p>
   			  </div>
   			  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
   			    <h3 class="verde-text">97.000</h3>
   			    <p>orientaciones vocacionales</p>
   			  </div>
   			  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
   			    <h3 class="purpura-text">500</h3>
   			    <p>nuevas plazas para estudiantes</p>
   			  </div>
   			</article>
   			<!--/-datos youth-->
   			</section>
			  
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['pos']->value==3) {?>

			 <!--video contenedor-->

 				 <section class="container-fluid video-iniciativa mask-arrow">
 					<h2 class="text-center">¿En qué consiste esta iniciativa?</h2>
 				 	<article class="row">
 				 		 <?php  $_smarty_tpl->tpl_vars['videoH'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['videoH']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['descripcionCapsulaK']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['videoH']->key => $_smarty_tpl->tpl_vars['videoH']->value) {
$_smarty_tpl->tpl_vars['videoH']->_loop = true;
?>
		 				   		<div class="col-lg-12">
		 				     		<div class="embed-responsive embed-responsive-16by9">
		 				       			<iframe src="https://www.youtube.com/embed/<?php echo $_smarty_tpl->tpl_vars['videoH']->value['url'];?>
" frameborder="0" class="embed-responsive-item"></iframe>
		 				     		</div>
		 				     		<?php echo $_smarty_tpl->tpl_vars['videoH']->value['descipcion'];?>

						 <?php } ?>
 				   </div>
 				 </article>
 				</section>
 		<!--/-video contenedor-->
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['pos']->value==4) {?>
			<section class="container-fluid home-learning mask-after">
  				  <!--Seccion E-learning-->
			   <div class="row">
			     <div class="col-lg-6 col-md-6 col-sm-8 col-xs-12 col-md-offset-3 col-sm-offset-2 e-learning-home">
			       <h2 class="text-center amarillo">
			         <i class="icon icon-elearning"></i> Cursos e-learning
			         
			       </h2>
			       <?php  $_smarty_tpl->tpl_vars['elearningH'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['elearningH']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['descripcionCapsulaK']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['elearningH']->key => $_smarty_tpl->tpl_vars['elearningH']->value) {
$_smarty_tpl->tpl_vars['elearningH']->_loop = true;
?>
		 				   		
			       	<div class="box">
		 				<?php echo $_smarty_tpl->tpl_vars['elearningH']->value['descipcion'];?>

			     		</div>
					 <?php } ?>
			   </div>
			   <!--/-Seccion E-learning-->

			 </section>
			 <?php }?>
			 <?php if ($_smarty_tpl->tpl_vars['pos']->value==5) {?>
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
						        <figure class="img-capsula"><a href="#"><iframe src="https://www.youtube.com/embed/<?php echo $_smarty_tpl->tpl_vars['CapsulaH']->value['url'];?>
" frameborder="0" class="embed-responsive-item"></iframe></a></figure>
						       	<?php echo $_smarty_tpl->tpl_vars['CapsulaH']->value['descipcion'];?>

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
