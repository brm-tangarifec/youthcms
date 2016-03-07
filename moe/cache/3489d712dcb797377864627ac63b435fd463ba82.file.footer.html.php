<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-03-03 22:11:33
         compiled from "..\views\base\footer.html" */ ?>
<?php /*%%SmartyHeaderCode:2983956ccda355cad30-36980516%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3489d712dcb797377864627ac63b435fd463ba82' => 
    array (
      0 => '..\\views\\base\\footer.html',
      1 => 1457060858,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2983956ccda355cad30-36980516',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_56ccda355cebb9_77970732',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56ccda355cebb9_77970732')) {function content_56ccda355cebb9_77970732($_smarty_tpl) {?>  <!--Footer-->
  <footer class="container-fluid">
    <div class="peel hidden-xs"></div>
    
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
 src="/fbappCasaBienestar/jovenesnestle_com_co/js/libs/jquery.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="/fbappCasaBienestar/jovenesnestle_com_co/js/libs/bootstrap.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="/fbappCasaBienestar/jovenesnestle_com_co/js/youth.ini.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="/fbappCasaBienestar/jovenesnestle_com_co/js/libs/jquery.bxslider.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="/fbappCasaBienestar/jovenesnestle_com_co/js/youth/youthfunciones.js"><?php echo '</script'; ?>
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
