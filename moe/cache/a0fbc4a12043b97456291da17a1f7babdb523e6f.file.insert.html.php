<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-03-02 20:50:33
         compiled from "..\views\taberna\insert.html" */ ?>
<?php /*%%SmartyHeaderCode:2320756cce241da5fa9-11805813%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a0fbc4a12043b97456291da17a1f7babdb523e6f' => 
    array (
      0 => '..\\views\\taberna\\insert.html',
      1 => 1456969821,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2320756cce241da5fa9-11805813',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_56cce241ea7ce0_85182750',
  'variables' => 
  array (
    'padre' => 0,
    'papa' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56cce241ea7ce0_85182750')) {function content_56cce241ea7ce0_85182750($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("taberna/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


        <section class="container-fluid ">
           
            <!-- Right side column. Contains the navbar and content of the page -->
            <div class="row">

                <!-- Main content -->
                <div class="col-xs-12">
                            <div class="panel">
                                <header class="panel-heading">
                                    Secciones

                                </header>
                                <!--Lista Secciones-->
                                <div class="panel-body table-responsive listaSecciones">
                                    <div class="box-tools m-b-15">
                                        <div class="input-group">
                                            <input type="text" name="table_search" class="form-control input-sm pull-right" style="width: 150px;" placeholder="Search"/>
                                            <div class="input-group-btn">
                                                <button class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                    <form name="agregaSeccion" id="agregaSeccion" method="POST">
                                        <table class="table table-hover">
                                                <tr>
                                                   <th>NOMBRE</th>
                                                    <th>PADRE</th>
                                                    <th>PUBLICA</th>
                                                    <th>MASCARA URL</th>
                                                    <th>TITULO SEO</th>
                                                    <th>DESCRIPCIÓN SEO</th>
                                                    <th>FECHA INICIO</th>
                                                    <th>FECHA FIN</th>
                                                </tr>
                                                    <td>
                                                      <input class='limpiar' name="nombSec" id="nombSec" value=""/>
                                                    </td>
                                                    <td>
                                                      <select name="idPadre" id="idPadre" class='limpiar'>
                                                        <option name="idPadre" value="">RAIZ</option>
                                                        <?php  $_smarty_tpl->tpl_vars['papa'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['papa']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['padre']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['papa']->key => $_smarty_tpl->tpl_vars['papa']->value) {
$_smarty_tpl->tpl_vars['papa']->_loop = true;
?>
                                                        <option name="idPadre" value="<?php echo $_smarty_tpl->tpl_vars['papa']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['papa']->value['nombre'];?>
</option>
                                                        <?php } ?>
                                                      </select>
                                                    </td>
                                                    <td>
                                                       
                                                        <label>Si</label>
                                                        <input type="radio" name="visible" id="visible" value="S" class='limpiar' >
                                                        <label>No</label>
                                                        <input type="radio" name="visible" id="visible" value="N" class='limpiar' >
                                                      
                                                    </td>
                                                    <td>
                                                      <input class='limpiar' name="mascUrl" id="mascUrl" value=""/>
                                                    </td>
                                                    <td>
                                                      <input type="text" class="limpiar" name="titleSeo" id="titleSeo" value=""/>
                                                    </td>
                                                    <td>
                                                      <input type="text" class="limpiar" name="descSeo" id="descSeo" value=""/>
                                                    </td>
                                                    <td>
                                                      <input type="date" name="fechaIni" id="fechaIni" value="" class='limpiar'/>
                                                    </td>
                                                    <td>
                                                      <input type="date" name="fechaFin" id="fechaFin" value="" class='limpiar'/>
                                                    </td>
                                                   
                                                    <td><span class="glyphicon glyphicon-ok agregaSec" data-seccion=""></span></td>
                                                </tr>
                                         </table>
                                    </form>
                                </div><!-- /.box-body -->
                                <!--Fin de lista secciones-->
                                <!--Edicion de secciones-->
                                <div class="panel-body table-responsive edicion">
                                </div>
                                <!--Fin Edicion de secciones-->
                            </div><!-- /.box -->
                        </div>
                    </div>
                </section><!-- /.content -->

        <?php echo $_smarty_tpl->getSubTemplate ("taberna/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
