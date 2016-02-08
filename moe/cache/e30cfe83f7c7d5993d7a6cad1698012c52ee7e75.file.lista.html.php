<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-02-03 10:01:02
         compiled from "../views/lista.html" */ ?>
<?php /*%%SmartyHeaderCode:175298206456b2162e1e6d55-91300377%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e30cfe83f7c7d5993d7a6cad1698012c52ee7e75' => 
    array (
      0 => '../views/lista.html',
      1 => 1450068580,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '175298206456b2162e1e6d55-91300377',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'usuarios' => 0,
    'usuario' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_56b2162e213339_29566718',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56b2162e213339_29566718')) {function content_56b2162e213339_29566718($_smarty_tpl) {?><!DOCTYPE html>
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
