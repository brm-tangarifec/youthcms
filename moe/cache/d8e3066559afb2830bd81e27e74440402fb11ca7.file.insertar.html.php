<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-02-05 12:35:56
         compiled from "../views/insertar.html" */ ?>
<?php /*%%SmartyHeaderCode:102734858456a7c4a5125a33-84931692%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd8e3066559afb2830bd81e27e74440402fb11ca7' => 
    array (
      0 => '../views/insertar.html',
      1 => 1454693743,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '102734858456a7c4a5125a33-84931692',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_56a7c4a5150b49_88835074',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56a7c4a5150b49_88835074')) {function content_56a7c4a5150b49_88835074($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title></title>
  <link rel="stylesheet" href="">
</head>
<body>
  <form action="/mvc/agregar" method="POST">
    <table>
      <tr>
        <th>Nombre</th><td><input type="text" name="nombre" value=""></td>
      </tr>
      <tr>
        <th>Apellido</th><td><input type="text" name="apellido" value=""></td>
      </tr>
      <tr>
        <th>Documento</th><td><input type="text" name="documento" value=""></td>
      </tr>
      <tr>
        <th>Email</th><td><input type="text" name="email" value=""></td>
      </tr>
      <tr>
        <th>Password</th><td><input type="text" name="password" value=""></td>
      </tr>
      <tr>
        <td colspan="2"><input type="submit" value="Enviar"></td>
      </tr>
    </table> 
    </form>
</body>
</html><?php }} ?>
