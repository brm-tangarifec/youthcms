<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-02-08 13:10:23
         compiled from "../views/insert.html" */ ?>
<?php /*%%SmartyHeaderCode:3841795756b8d86944dde9-09390618%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e801d9e73f539e6a962759181ff58643abe34502' => 
    array (
      0 => '../views/insert.html',
      1 => 1454955022,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3841795756b8d86944dde9-09390618',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_56b8d869520a69_25512365',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56b8d869520a69_25512365')) {function content_56b8d869520a69_25512365($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title></title>
  <link rel="stylesheet" href="">
</head>
<body>
  <form action="/mvc/aggregate" method="POST">
    <table>
      <tr>
        <th>Name</th><td><input type="text" name="name" value=""></td>
      </tr>
      <tr>
        <th>Document</th><td><input type="text" name="document" value=""></td>
      </tr>
      <tr>
        <th>Email</th><td><input type="text" name="email" value=""></td>
      </tr>
      <tr>
        <td colspan="2"><input type="submit" value="Enviar"></td>
      </tr>
    </table> 
    </form>
</body>
</html><?php }} ?>
