<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-02-23 17:16:21
         compiled from "..\views\base\footer.html" */ ?>
<?php /*%%SmartyHeaderCode:2983956ccda355cad30-36980516%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3489d712dcb797377864627ac63b435fd463ba82' => 
    array (
      0 => '..\\views\\base\\footer.html',
      1 => 1456265140,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2983956ccda355cad30-36980516',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_56ccda355cebb9_77970732',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56ccda355cebb9_77970732')) {function content_56ccda355cebb9_77970732($_smarty_tpl) {?>  <!--Footer-->
  <footer class="container-fluid">
    <div class="peel hidden-xs"></div>
    <div class="row hidden-sm hidden-xs">
      <div class="col-lg-2 col-md-2 col-sm-2">
        <h3>Acerca de la Iniciativa por los Jóvenes</h3>
        <ul>
          <li>Manifiesto</li>
          <li>Infografía de los ejes</li>
        </ul>
      </div>
      <div class="col-lg-2 col-md-2 col-sm-2">
        <h3>Empléate</h3>
        <ul>
          <li>Historias colaboradores Nestlé&reg;</li>
          <li>Vacantes Nestlé&reg; (Taleo)</li>
        </ul>
      </div>
      <div class="col-lg-2 col-md-2 col-sm-2">
        <h3>Entrénate</h3>
        <ul>
          <li>Convocatorias Becarios</li>
          <li>Testimonios</li>
          <li>Yocuta</li>
          <li>SENA</li>
        </ul>
      </div>
      <div class="col-lg-2 col-md-2 col-sm-2">
        <h3>Oriéntate</h3>
        <ul>
          <li>Voluntariado</li>
          <li>Descripción de Cursos E-Learning</li>
          <li>Simposios</li>
        </ul>
      </div>
      <div class="col-lg-2 col-md-2 col-sm-2">
        <h3>Más Oportunidades</h3>
        <ul>
          <li>Vacantes Cadena de Valor</li>
          <li>Testimonios</li>
        </ul>
      </div>
      <div class="col-lg-2 col-md-2 col-sm-2">
        <h3>Cursos E-Learning</h3>
        <ul>
          <li>Proyecto de vida y orientación vocacional</li>
          <li>Búsqueda laboral y hojas de vida ganadoras</li>
          <li>Entrevistas de trabajo exitosas</li>
        </ul>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-8 col-md-8 col-sm-10 col-xs-12 col-lg-offset-2 col-md-offset-2 col-sm-offset-1">
        <p class="text-center">
          <a href="#">Políticas de privacidad </a>  |  <a href="#"> Ver información corporativa</a>   |  <a href="#"> Política de tratamiento de datos personales</a>
          
        </p>
        <p class="text-center">
          NESTLÉ&reg; Colombia 2016 - Todos los derechos reservados
          
          
        </p>
      </div>
    </div>
  </footer>
  <!--/-Footer-->
  <!--Scripts-->
  <?php echo '<script'; ?>
 src="/youth/js/libs/jquery.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="/youth/js/libs/bootstrap.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="/youth/js/youth.ini.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="/youth/js/libs/jquery.bxslider.min.js"><?php echo '</script'; ?>
>
  <!--BX Slider-->
  <?php echo '<script'; ?>
>
    
    if ( $(window).width() <= 780 ){
    
    	$('.slider-destacado').bxSlider({
    		minSlides: 1,
    		slideWidth: 338,
    		slideMargin: 10,
    		moveSlides: 1,
    		pager:false,
    		mode: 'vertical',
    		nextText: '',
    	    prevText: ''
    	});
    
    	}else{
    	$('.slider-destacado').bxSlider({
    	  minSlides: 3,
    	  maxSlides: 3,
    	  slideWidth: 338,
    	  slideMargin: 10,
    	  moveSlides: 1,
    	  pager:false,
    	  nextText: '',
    	  prevText: ''
    	});
    	};
  <?php echo '</script'; ?>
>
</body></html><?php }} ?>
