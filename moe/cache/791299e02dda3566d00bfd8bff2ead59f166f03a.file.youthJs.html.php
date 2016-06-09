<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-06-09 11:47:17
         compiled from "..\views\base\youthJs.html" */ ?>
<?php /*%%SmartyHeaderCode:447356e3322cde7b87-19135417%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '791299e02dda3566d00bfd8bff2ead59f166f03a' => 
    array (
      0 => '..\\views\\base\\youthJs.html',
      1 => 1465488537,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '447356e3322cde7b87-19135417',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_56e3322cdf7587_55956298',
  'variables' => 
  array (
    'SeccionJs' => 0,
    'archivo' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56e3322cdf7587_55956298')) {function content_56e3322cdf7587_55956298($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['SeccionJs']->value!='') {?>
	<?php  $_smarty_tpl->tpl_vars['archivo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['archivo']->_loop = false;
 $_smarty_tpl->tpl_vars['contador'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['SeccionJs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['archivo']->key => $_smarty_tpl->tpl_vars['archivo']->value) {
$_smarty_tpl->tpl_vars['archivo']->_loop = true;
 $_smarty_tpl->tpl_vars['contador']->value = $_smarty_tpl->tpl_vars['archivo']->key;
?>
	<?php echo '<script'; ?>
 src="/js/youth/<?php echo $_smarty_tpl->tpl_vars['archivo']->value;?>
?1313"><?php echo '</script'; ?>
>	
	<?php } ?>
<?php }?>

<?php }} ?>
