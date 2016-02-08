<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-02-08 13:16:29
         compiled from "../views/list.html" */ ?>
<?php /*%%SmartyHeaderCode:62270680856b8d838bab7b8-98007382%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2511f8286571633e65e499ee9a7cde4719558e20' => 
    array (
      0 => '../views/list.html',
      1 => 1454955386,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '62270680856b8d838bab7b8-98007382',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_56b8d838c04995_38877246',
  'variables' => 
  array (
    'persons' => 0,
    'person' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56b8d838c04995_38877246')) {function content_56b8d838c04995_38877246($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title></title>
  <link rel="stylesheet" href="">
</head>
<body>
  <td><a href="insert">Insertar</a></td>
  <table>
    <tr>
      <th>Name</th>
      <th>Document</th>
      <th>Email</th>
      <th></th>
      <th></th>
    </tr> 
    <?php  $_smarty_tpl->tpl_vars['person'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['person']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['persons']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['person']->key => $_smarty_tpl->tpl_vars['person']->value) {
$_smarty_tpl->tpl_vars['person']->_loop = true;
?>
      <tr>
        <td><?php echo $_smarty_tpl->tpl_vars['person']->value['name'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['person']->value['document'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['person']->value['email'];?>
</td>
        <td><a href="edit/<?php echo encrypt($_smarty_tpl->tpl_vars['person']->value['id']);?>
">Editar</a></td>
        <td><a href="delete/<?php echo encrypt($_smarty_tpl->tpl_vars['person']->value['id']);?>
">Eliminar</a></td>
      </tr>
    <?php } ?>
  </table> 
</body>
</html><?php }} ?>
