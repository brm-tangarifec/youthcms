<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-02-22 11:06:05
         compiled from "..\views\taberna\creaContenido.html" */ ?>
<?php /*%%SmartyHeaderCode:1386656cb31ed138ea8-99500369%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8b58d0373be9b1b7441bcb67b3c89df238fad9c8' => 
    array (
      0 => '..\\views\\taberna\\creaContenido.html',
      1 => 1456152909,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1386656cb31ed138ea8-99500369',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'seccion' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_56cb31ed17b538_29751238',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56cb31ed17b538_29751238')) {function content_56cb31ed17b538_29751238($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("taberna/headerCont.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<!--Editor js-->
       
        <!--FIn editor-->

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
                                            <h1>Ingresa el título</h1>
                                        </div>
                                        <!--Contenido editable-->
                                        <div class="clear"></div>
                                        <div class="col-md-8 contenidoEditable contenido-texto">
                                            <p>Haz click sobre el texto para ingresar un contenido</p>
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
