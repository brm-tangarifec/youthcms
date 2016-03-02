<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-03-02 16:18:47
         compiled from "..\views\taberna\creaContenido.html" */ ?>
<?php /*%%SmartyHeaderCode:1386656cb31ed138ea8-99500369%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8b58d0373be9b1b7441bcb67b3c89df238fad9c8' => 
    array (
      0 => '..\\views\\taberna\\creaContenido.html',
      1 => 1456953526,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1386656cb31ed138ea8-99500369',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_56cb31ed17b538_29751238',
  'variables' => 
  array (
    'imagenes' => 0,
    'imagen' => 0,
    'seccion' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56cb31ed17b538_29751238')) {function content_56cb31ed17b538_29751238($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("taberna/headerCont.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<!--Editor js-->
<style type="text/css">
     
.muestraImagenes{
    display: inline;
}
</style>     
        <!--FIn editor-->
        <div class="muestraImagenes">
            <?php  $_smarty_tpl->tpl_vars['imagen'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['imagen']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['imagenes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['imagen']->key => $_smarty_tpl->tpl_vars['imagen']->value) {
$_smarty_tpl->tpl_vars['imagen']->_loop = true;
?>
            <p>RUTA: <?php echo $_smarty_tpl->tpl_vars['imagen']->value;?>

                <img src="<?php echo $_smarty_tpl->tpl_vars['imagen']->value;?>
" height="70px" width="70px"></p>

            <?php } ?>
        </div>
        <div class="wrapper row-offcanvas row-offcanvas-left">
                                <div class="panel-body table-responsive CreaContenido">
                                    <p>Para crear contenido se debe dar click sobre lo que se desea agregar</p>
                                    <div class="box-tools m-b-15">
                                        <div class="input-group">
                                            <input type="text" name="table_search" class="form-control input-sm pull-right" style="width: 150px;" placeholder="Search"/>
                                            <div class="input-group-btn">
                                                <button class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>

                                            </div>
                                        </div>
                                    </div>
                                    <form name="agregaContenido" id="agregaContenido" method="POST">
                                    <div class="row">
                                        <h2>Creación de Contenido</h2>
                                        <label for="titulo">Titulo</label>
                                        <div class="col-md-12 contenidoEditable titulo-contenido">
                                            <input type="text" name="titulo" id="titulo" value=""/>
                                        </div>
                                        <div class="col-md-12 contenidoEditable titulo-contenido">
                                            <input type="text" name="titulo" id="titulo" value=""/>
                                        </div>
                                        <!--Contenido editable-->
                                        <div class="clear"></div>
                                        <div class="col-md-8 contenidoEditable contenido-texto">
                                            <textarea class="form-control" id="contenidoNew" name="contenidoNew" style="width: 733px !important;"></textarea>
                                         </div>
                                         <div class="col-md-4">
                                            <span>Visible</span>
                                            <label for="visble">Si</label>
                                            <input type="radio" name="visible" id="visible" value="S" class='limpiar' >
                                            <label for="visble">No</label>
                                            <input type="radio" name="visible" id="visible" value="N" class='limpiar' >
                                            <span>Posición</span>
                                            <select name="posicion" id="posicion">
                                                <option value="">Seleccionar...</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                            </select>
                                         </div>
                                         <div class="col-md-6">
                                            <label for="fechaInicio">Fecha Inicio</label>
                                           <input type="date" name="fechaIni" id="fechaIni" value="" class='limpiar'/>
                                         </div>
                                         <div class="col-md-6">
                                         <label for="fechaFin">Fecha Fin</label>
                                            <input type="date" name="fechaFin" id="fechaFin" value="" class='limpiar'/>
                                            <input type="hidden" name="idSeccion" id="idSeccion" value="<?php echo $_smarty_tpl->tpl_vars['seccion']->value;?>
" class='limpiar'/>
                                         </div>
                                        <!--Contenido editable-->
                                    </div>
                                 </form>
                                </div><!-- /.box-body -->
</div>

<?php echo $_smarty_tpl->getSubTemplate ("taberna/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
