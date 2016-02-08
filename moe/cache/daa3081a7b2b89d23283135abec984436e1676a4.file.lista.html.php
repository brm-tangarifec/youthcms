<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-02-04 02:29:39
         compiled from "../views/lista.html" */ ?>
<?php /*%%SmartyHeaderCode:94987406056b2bfc5198582-52908334%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'daa3081a7b2b89d23283135abec984436e1676a4' => 
    array (
      0 => '../views/lista.html',
      1 => 1454570967,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '94987406056b2bfc5198582-52908334',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_56b2bfc52095b8_03093142',
  'variables' => 
  array (
    'usuarios' => 0,
    'usuario' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56b2bfc52095b8_03093142')) {function content_56b2bfc52095b8_03093142($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title></title>
  <link rel="stylesheet" href="">
</head>
<body>
  <td><a href="insertar">Insertar</a></td>
  <table>
    <tr>
      <th>Nombre</th>
      <th>Apellido</th>
      <th>Documento</th>
      <th>Email</th>
      <th></th>
      <th></th>
    </tr> 
    <?php  $_smarty_tpl->tpl_vars['usuario'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['usuario']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['usuarios']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['usuario']->key => $_smarty_tpl->tpl_vars['usuario']->value) {
$_smarty_tpl->tpl_vars['usuario']->_loop = true;
?>
      <tr>
        <td><?php echo $_smarty_tpl->tpl_vars['usuario']->value['nombre'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['usuario']->value['apellido'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['usuario']->value['documento'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['usuario']->value['email'];?>
</td>
        <td><a href="editar/<?php echo encrypt($_smarty_tpl->tpl_vars['usuario']->value['id']);?>
">Editar</a></td>
        <td><a href="delete/<?php echo encrypt($_smarty_tpl->tpl_vars['usuario']->value['id']);?>
">Eliminar</a></td>
      </tr>
    <?php } ?>
  </table> 
</body>
</html><?php }} ?>
