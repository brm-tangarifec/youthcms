<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-02-23 17:52:37
         compiled from "..\views\youth\interna.html" */ ?>
<?php /*%%SmartyHeaderCode:855356ccda274e9070-57476185%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9fe366e0b932cdee334925c3127a857fefdff9b9' => 
    array (
      0 => '..\\views\\youth\\interna.html',
      1 => 1456267956,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '855356ccda274e9070-57476185',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_56ccda27517e84_77151048',
  'variables' => 
  array (
    'titulo' => 0,
    'contenido' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56ccda27517e84_77151048')) {function content_56ccda27517e84_77151048($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("base/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<!--Carga titulo-->
<h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>
<?php echo $_smarty_tpl->tpl_vars['contenido']->value;?>

<!--Fin contenido-->
<?php echo $_smarty_tpl->getSubTemplate ("base/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
