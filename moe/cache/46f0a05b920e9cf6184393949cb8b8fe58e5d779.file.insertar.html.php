<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-02-04 02:29:47
         compiled from "../views/insertar.html" */ ?>
<?php /*%%SmartyHeaderCode:195823305456b2c019639114-51133889%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '46f0a05b920e9cf6184393949cb8b8fe58e5d779' => 
    array (
      0 => '../views/insertar.html',
      1 => 1454570959,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '195823305456b2c019639114-51133889',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_56b2c019671a94_81463287',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56b2c019671a94_81463287')) {function content_56b2c019671a94_81463287($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title></title>
  <link rel="stylesheet" href="">
</head>
<body>
  <form action="/exampleMvc/pruebaMvc/agregar" method="POST">
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
