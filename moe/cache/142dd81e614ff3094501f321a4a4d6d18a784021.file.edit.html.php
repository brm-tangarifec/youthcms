<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-06-29 16:45:27
         compiled from "..\views\taberna\edit.html" */ ?>
<?php /*%%SmartyHeaderCode:14240575b471364d056-44419324%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '142dd81e614ff3094501f321a4a4d6d18a784021' => 
    array (
      0 => '..\\views\\taberna\\edit.html',
      1 => 1467236722,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14240575b471364d056-44419324',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_575b471375e797_92371627',
  'variables' => 
  array (
    'tienePadre' => 0,
    'seccion' => 0,
    'edita' => 0,
    'padres' => 0,
    'padre' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_575b471375e797_92371627')) {function content_575b471375e797_92371627($_smarty_tpl) {?>    <!-- <h3 class="box-title">Responsive Hover Table</h3> -->
<!-- </div> -->

    <table class="table table-hover">
        <tr>
            <th>ID</th>
            <th>NOMBRE</th>
            <?php if ($_smarty_tpl->tpl_vars['tienePadre']->value!='') {?>
            <th>PADRE</th>
            <?php }?>
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
            <?php if ($_smarty_tpl->tpl_vars['edita']->value->idPadre!='') {?>
            <td>
            <select name="padre" id="padre">
              <?php  $_smarty_tpl->tpl_vars['padre'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['padre']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['padres']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['padre']->key => $_smarty_tpl->tpl_vars['padre']->value) {
$_smarty_tpl->tpl_vars['padre']->_loop = true;
?>
                <?php if ($_smarty_tpl->tpl_vars['edita']->value->idPadre[0]->id==$_smarty_tpl->tpl_vars['padre']->value['id']) {?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['padre']->value['id'];?>
" selected><?php echo $_smarty_tpl->tpl_vars['padre']->value["nombre"];?>
</option>
                <?php } else { ?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['padre']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['padre']->value["nombre"];?>
</option>
                <?php }?>
              <?php } ?>
            </select>
            
            </td>
            <?php } else { ?>
            <input type="hidden" name="padre" id="padre" disabled="disabled" value="0" size='1'/>
            <?php }?>
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
              
              <textarea name="descSeo" id="descSeo" value=""><?php echo $_smarty_tpl->tpl_vars['edita']->value->descripcionSeo;?>
</textarea>
            </td>
            <td>
              <input type="date" name="fechaIni" id="fechaIni" value="<?php echo $_smarty_tpl->tpl_vars['edita']->value->fechaInicio;?>
"  onfocus="(this.type='date')" onblur="(this.type='text')" placeholder="YYYY-MM-DD"/>
            </td>
            <td>
              <input type="date" name="fechaFin" id="fechaFin" value="<?php echo $_smarty_tpl->tpl_vars['edita']->value->fechaFin;?>
"  onfocus="(this.type='date')" onblur="(this.type='text')" placeholder="YYYY-MM-DD"/>
            </td>
           
            <td><span class="glyphicon glyphicon-ok" id="editaS" data-seccion="<?php echo $_smarty_tpl->tpl_vars['edita']->value->id;?>
" style="cursor:pointer;"></span></td>
        </tr>
        <?php } ?>
          </table>
<!-- /.box-body -->
    
<?php }} ?>
