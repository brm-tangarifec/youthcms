<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-04-08 14:50:32
         compiled from "..\views\base\youthCss.html" */ ?>
<?php /*%%SmartyHeaderCode:2195556e3322cd95af9-40134780%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ceefa0b77283e0e0257277e52109d9d8503ec2d2' => 
    array (
      0 => '..\\views\\base\\youthCss.html',
      1 => 1460132630,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2195556e3322cd95af9-40134780',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_56e3322cdbcc07_03660814',
  'variables' => 
  array (
    'SeccionCss' => 0,
    'archivox' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56e3322cdbcc07_03660814')) {function content_56e3322cdbcc07_03660814($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['SeccionCss']->value!='') {?>
	<?php  $_smarty_tpl->tpl_vars['archivox'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['archivox']->_loop = false;
 $_smarty_tpl->tpl_vars['contador'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['SeccionCss']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['archivox']->key => $_smarty_tpl->tpl_vars['archivox']->value) {
$_smarty_tpl->tpl_vars['archivox']->_loop = true;
 $_smarty_tpl->tpl_vars['contador']->value = $_smarty_tpl->tpl_vars['archivox']->key;
?>
	<link rel="stylesheet" href="/css/youth/<?php echo $_smarty_tpl->tpl_vars['archivox']->value;?>
">
	<?php } ?>
<?php }?><?php }} ?>
