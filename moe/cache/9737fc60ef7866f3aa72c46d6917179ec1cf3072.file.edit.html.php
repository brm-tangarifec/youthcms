<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-02-08 13:20:45
         compiled from "../views/edit.html" */ ?>
<?php /*%%SmartyHeaderCode:21777780056b8da79410386-57900970%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9737fc60ef7866f3aa72c46d6917179ec1cf3072' => 
    array (
      0 => '../views/edit.html',
      1 => 1454955644,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21777780056b8da79410386-57900970',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_56b8da794bf8a7_84108035',
  'variables' => 
  array (
    'persons' => 0,
    'person' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56b8da794bf8a7_84108035')) {function content_56b8da794bf8a7_84108035($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title></title>
  <link rel="stylesheet" href="">
</head>
<body>
  <form action="/mvc/update/" method="POST">
    <?php  $_smarty_tpl->tpl_vars['person'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['person']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['persons']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['person']->key => $_smarty_tpl->tpl_vars['person']->value) {
$_smarty_tpl->tpl_vars['person']->_loop = true;
?>
    <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['person']->value['id'];?>
">
    <table>
      <tr>
        <th>Name</th><td><input type="text" name="name" value="<?php echo $_smarty_tpl->tpl_vars['person']->value['name'];?>
"></td>
      </tr>
      <tr>
        <th>Document</th><td><input type="text" name="document" value="<?php echo $_smarty_tpl->tpl_vars['person']->value['document'];?>
"></td>
      </tr>
      <tr>
        <th>Email</th><td><input type="text" name="email" value="<?php echo $_smarty_tpl->tpl_vars['person']->value['email'];?>
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
