<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-06-09 15:44:34
         compiled from "..\views\base\youthJs.html" */ ?>
<?php /*%%SmartyHeaderCode:65165759d532e40f32-96375398%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '81aa17f511d5d907f15a6c447db44f082bacfde2' => 
    array (
      0 => '..\\views\\base\\youthJs.html',
      1 => 1465504660,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '65165759d532e40f32-96375398',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'SeccionJs' => 0,
    'archivo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5759d532e4cab0_42272619',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5759d532e4cab0_42272619')) {function content_5759d532e4cab0_42272619($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['SeccionJs']->value!='') {?>
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
