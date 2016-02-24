<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-02-16 19:00:25
         compiled from "..\views\edit.html" */ ?>
<?php /*%%SmartyHeaderCode:362456c237e61152a0-16658161%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b831e6f3a2f340beb7a05bb1f986426b900febf5' => 
    array (
      0 => '..\\views\\edit.html',
      1 => 1455639558,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '362456c237e61152a0-16658161',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_56c237e622e6e4_85669635',
  'variables' => 
  array (
    'seccion' => 0,
    'edita' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56c237e622e6e4_85669635')) {function content_56c237e622e6e4_85669635($_smarty_tpl) {?>    <!-- <h3 class="box-title">Responsive Hover Table</h3> -->
<!-- </div> -->

    <div class="box-tools m-b-15">
        <div class="input-group">
            <input type="text" name="table_search" class="form-control input-sm pull-right" style="width: 150px;" placeholder="Search"/>
            <div class="input-group-btn">
                <button class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
            </div>
        </div>
</div>
    <table class="table table-hover">
        <tr>
            <th>ID</th>
            <th>NOMBRE</th>
            <th>PADRE</th>
            <th>PUBLICA</th>
            <th>MASCARA URL</th>
            <th>TITULO SEO</th>
            <th>DESCRIPCIÓN SEO</th>
            <th>FECHA INICIO</th>
            <th>FECHA FIN</th>
        </tr>
       <?php  $_smarty_tpl->tpl_vars['edita'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['edita']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['seccion']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['edita']->key => $_smarty_tpl->tpl_vars['edita']->value) {
$_smarty_tpl->tpl_vars['edita']->_loop = true;
?>
            <td>
              <input class='' name="idSec" id="idSec" disabled="disabled" value="<?php echo $_smarty_tpl->tpl_vars['edita']->value->id;?>
" size='1'/>
            </td>
            <td>
              <input class='' name="nombSec" id="nombSec" value="<?php echo $_smarty_tpl->tpl_vars['edita']->value->nombre;?>
"/>
            </td>
            <td>
              <select><option value="<?php echo $_smarty_tpl->tpl_vars['edita']->value->idPadre[0]->id;?>
"><?php echo $_smarty_tpl->tpl_vars['edita']->value->idPadre[0]->nombre;?>
</option></select>
            </td>
            <td>
              <?php if ($_smarty_tpl->tpl_vars['edita']->value->produccionVisible=='S') {?> 
                <label>Si</label>
                <input type="radio" name="visoble<?php echo $_smarty_tpl->tpl_vars['edita']->value->id;?>
" checked="checked" value="S" >
                <label>No</label>
                <input type="radio" name="visoble<?php echo $_smarty_tpl->tpl_vars['edita']->value->id;?>
" value="N" >
              <?php } else { ?>
                <label>Si</label>
                <input type="radio" name="visoble<?php echo $_smarty_tpl->tpl_vars['edita']->value->id;?>
"  value="S" >
                <label>No</label>
                <input type="radio" name="visoble<?php echo $_smarty_tpl->tpl_vars['edita']->value->id;?>
" checked="checked" value="N" >
              <?php }?>
            </td>
            <td>
              <input class='' name="mascUrl" id="mascUrl" value="<?php echo $_smarty_tpl->tpl_vars['edita']->value->mascaraUrl;?>
"/>
            </td>
            <td>
              <input type="text" class="" name="titleSeo" id="titleSeo" value="<?php echo $_smarty_tpl->tpl_vars['edita']->value->tituloSeo;?>
"/>
            </td>
            <td>
              <input type="text" class="" name="descSeo" id="descSeo" value="<?php echo $_smarty_tpl->tpl_vars['edita']->value->descripcionSeo;?>
"/>
            </td>
            <td>
              <input type="date" name="fechaIni" id="fechaIni" value="<?php echo $_smarty_tpl->tpl_vars['edita']->value->fechaInicio;?>
"/>
            </td>
            <td>
              <input type="date" name="fechaIni" id="fechaIni" value="<?php echo $_smarty_tpl->tpl_vars['edita']->value->fechaFin;?>
"/>
            </td>
           
            <td><span class="glyphicon glyphicon-ok" data-seccion="<?php echo $_smarty_tpl->tpl_vars['edita']->value->id;?>
"></span></td>
        </tr>
        <?php } ?>
          </table>
<!-- /.box-body -->
    
<?php }} ?>
