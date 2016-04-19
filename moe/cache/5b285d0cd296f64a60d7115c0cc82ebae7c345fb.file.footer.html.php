<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-04-15 14:41:18
         compiled from "..\views\base\footer.html" */ ?>
<?php /*%%SmartyHeaderCode:1697256e32011ef0f19-45428600%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5b285d0cd296f64a60d7115c0cc82ebae7c345fb' => 
    array (
      0 => '..\\views\\base\\footer.html',
      1 => 1460676422,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1697256e32011ef0f19-45428600',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_56e32011f1bea5_50766660',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56e32011f1bea5_50766660')) {function content_56e32011f1bea5_50766660($_smarty_tpl) {?>  <!--Footer-->
  <footer class="container-fluid">
    <div class="peel hidden-xs"></div>
    
    <div class="row">
      <div class="col-lg-8 col-md-8 col-sm-10 col-xs-12 col-lg-offset-2 col-md-offset-2 col-sm-offset-1">
        <p class="text-center">
          <a href="https://www.consumidor.nestle.com.co/politicas-privacidad" target="_blank">Políticas de privacidad </a>  |  <a href="http://corporativa.nestle.com.co/" target="_blank"> Ver información corporativa</a>   |  <a href="https://www.consumidor.nestle.com.co/politicas-datos" target="_blank"> Política de tratamiento de datos personales</a>
          
        </p>
        <p class="text-center">
          Nestlé&reg; Colombia 2016 - Todos los derechos reservados
          
          
        </p>
      </div>
    </div>
  </footer>
  <!--/-Footer-->
  <!--Scripts-->
  <?php echo '<script'; ?>
 src="/js/libs/jquery.js?1232123"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="/js/libs/bootstrap.min.js?1232123"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="/js/jquery.cookie.js?1232123"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="/js/youth.ini.js?1232125"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="/js/libs/jquery.validate.js?1232123"><?php echo '</script'; ?>
>
   <?php echo '<script'; ?>
 src="/js/libs/additional-methods.js?1232123"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="/js/libs/jquery.bxslider.min.js?1232123"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="/js/youth/youthfunciones.js?123456"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="/js/youth/registro/registroFb.js?13513"><?php echo '</script'; ?>
>
  <?php echo $_smarty_tpl->getSubTemplate ("base/youthJs.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

  <div class="cargajs"></div>
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
