<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-02-05 15:24:23
         compiled from "../views/editar.html" */ ?>
<?php /*%%SmartyHeaderCode:103879682256b10fd85e6c51-84978134%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f0088f58b20d10fcddea3ecd1795e84b80ee301e' => 
    array (
      0 => '../views/editar.html',
      1 => 1454693737,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '103879682256b10fd85e6c51-84978134',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_56b10fd8693511_89338988',
  'variables' => 
  array (
    'usuarios' => 0,
    'usuario' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56b10fd8693511_89338988')) {function content_56b10fd8693511_89338988($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title></title>
  <link rel="stylesheet" href="">
</head>
<body>
  <form action="/mvc/update/" method="POST">
    <?php  $_smarty_tpl->tpl_vars['usuario'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['usuario']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['usuarios']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['usuario']->key => $_smarty_tpl->tpl_vars['usuario']->value) {
$_smarty_tpl->tpl_vars['usuario']->_loop = true;
?>
    <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['usuario']->value['id'];?>
">
    <table>
      <tr>
        <th>Nombre</th><td><input type="text" name="nombre" value="<?php echo $_smarty_tpl->tpl_vars['usuario']->value['nombre'];?>
"></td>
      </tr>
      <tr>
        <th>Apellido</th><td><input type="text" name="apellido" value="<?php echo $_smarty_tpl->tpl_vars['usuario']->value['apellido'];?>
"></td>
      </tr>
      <tr>
        <th>Documento</th><td><input type="text" name="documento" value="<?php echo $_smarty_tpl->tpl_vars['usuario']->value['documento'];?>
"></td>
      </tr>
      <tr>
        <th>Email</th><td><input type="text" name="email" value="<?php echo $_smarty_tpl->tpl_vars['usuario']->value['email'];?>
"></td>
      </tr>
      <tr>
        <td colspan="2"><input type="submit" value="Enviar"></td>
      </tr>
    </table> 
    <?php } ?>
    </form>
</body>
</html><?php }} ?>
