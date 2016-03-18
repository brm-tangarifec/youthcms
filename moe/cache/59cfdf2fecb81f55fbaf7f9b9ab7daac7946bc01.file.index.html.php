<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-03-18 15:30:07
         compiled from "..\views\cursos\hojaVida\index.html" */ ?>
<?php /*%%SmartyHeaderCode:1877256e9dc4c1f91d5-81720320%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '59cfdf2fecb81f55fbaf7f9b9ab7daac7946bc01' => 
    array (
      0 => '..\\views\\cursos\\hojaVida\\index.html',
      1 => 1458333005,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1877256e9dc4c1f91d5-81720320',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_56e9dc4c2a8e76_28478867',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56e9dc4c2a8e76_28478867')) {function content_56e9dc4c2a8e76_28478867($_smarty_tpl) {?><!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Hoja de Vida - Iniciativa por los Jóvenes</title>


	<?php echo '<script'; ?>
 src="/js/cursos/hojavida/js/plantilla.js" type="text/javascript"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="/js/cursos/hojavida/js/jquery-2.1.1.min.js" type="text/javascript"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript">
	$(document).ready(function() { var id; var minRes=479; var maxRes=520;
			if ($(window).width()>maxRes){ $("#pantallaMovil").hide(); }
			if ($(window).width()<minRes){ $("#pantallaMovil").css('visibility','visible'); $("#pantallaMovil").show();}
			$(window).resize(function() {  clearTimeout(id);  id = setTimeout(doneResizing, 10);});
			function doneResizing(){
				if ($(window).width()<minRes){ $("#pantallaMovil").css('visibility','visible'); $("#pantallaMovil").show(); }
				if ($(window).width()>maxRes){  $("#pantallaMovil").hide();} } });
	<?php echo '</script'; ?>
>

	<link href="/css/cursos/hojavida/css/estilos.css" rel="stylesheet" type="text/css">
</head>
<body onLoad="iniciar()" >
	<div id="pantallaMovil" > Por favor utilice su dispositivo en modo horizontal</div>
	

		<div class="contenidosPages">


		
	</div>
</body>
</html>
<?php }} ?>
