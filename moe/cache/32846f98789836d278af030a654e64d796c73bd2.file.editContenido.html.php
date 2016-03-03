<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-03-02 11:35:13
         compiled from "..\views\taberna\editContenido.html" */ ?>
<?php /*%%SmartyHeaderCode:1487156d5f137e07bc1-37268741%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '32846f98789836d278af030a654e64d796c73bd2' => 
    array (
      0 => '..\\views\\taberna\\editContenido.html',
      1 => 1456936510,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1487156d5f137e07bc1-37268741',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_56d5f137e463c4_17741677',
  'variables' => 
  array (
    'contenido' => 0,
    'editar' => 0,
    'seccion' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56d5f137e463c4_17741677')) {function content_56d5f137e463c4_17741677($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("taberna/headerCont.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<!--Editor js-->
<style type="text/css">
input.fechaBt {
    position: relative;
    width: 150px; height: 20px;
    color: white;
}

.fechaBt:before {
    position: absolute;
    top: 3px; left: 3px;
    content: attr(data-date);
    display: inline-block;
    color: black;
}

.fechaBt::-webkit-datetime-edit, input::-webkit-inner-spin-button, input::-webkit-clear-button {
    display: none;
}

.fechaBt::-webkit-calendar-picker-indicator {
    position: absolute;
    top: 3px;
    right: 0;
    color: black;
    opacity: 1;
}
</style>      
        <!--FIn editor-->
    <?php  $_smarty_tpl->tpl_vars['editar'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['editar']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['contenido']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['editar']->key => $_smarty_tpl->tpl_vars['editar']->value) {
$_smarty_tpl->tpl_vars['editar']->_loop = true;
?>
   

    

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
                                        <h1><?php echo $_smarty_tpl->tpl_vars['editar']->value['titulo'];?>
</h1>
                                    </div>
                                    <!--Contenido editable-->
                                    <div class="clear"></div>
                                    <div class="col-md-8 contenidoEditable contenido-texto">
                                        <p><?php echo $_smarty_tpl->tpl_vars['editar']->value['contenido'];?>
</p>
                                     </div>
                                     <div class="col-md-4">
                                        <span>Visible</span>
                                        visible
                                        <?php if (!isset($_smarty_tpl->tpl_vars['editar']) || !is_array($_smarty_tpl->tpl_vars['editar']->value)) $_smarty_tpl->createLocalArrayVariable('editar');
if ($_smarty_tpl->tpl_vars['editar']->value['visible'] = "S") {?>
                                            <label for="visble">Si</label>
                                            <input type="radio" name="visible" id="visible" value="S" checked class='limpiar' >
                                            <label for="visble">No</label>
                                            <input type="radio" name="visible" id="visible" value="N" class='limpiar' > 
                                        <?php } else { ?>
                                            <label for="visble">Si</label>
                                            <input type="radio" name="visible" id="visible" value="S" class='limpiar' >
                                            <label for="visble">No</label>
                                            <input type="radio" name="visible" id="visible" value="N" selected class='limpiar' >
                                        <?php }?>
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
                                       <input type="date" name="fechaIni" id="fechaIni" class="fechaBt"  data-date="" data-date-format="YYYY-MM-DD HH:mm:ss" value="<?php echo $_smarty_tpl->tpl_vars['editar']->value['fechaInicio'];?>
" class='limpiar'/>
                                     </div>
                                     <div class="col-md-6">
                                     <label for="fechaFin">Fecha Fin</label>
                                        <input type="date" name="fechaFin" id="fechaFin" class="fechaBt" data-date="" data-date-format="YYYY-MM-DD HH:mm:ss" value="<?php echo $_smarty_tpl->tpl_vars['editar']->value['fechaFin'];?>
"  class='limpiar'/>
                                        <input type="hidden" name="idSeccion" id="idSeccion" value="<?php echo $_smarty_tpl->tpl_vars['seccion']->value;?>
" class='limpiar'/>
                                     </div>
                                    <!--Contenido editable-->
                                </div>
                             </form>
                            </div><!-- /.box-body -->
        </div>
    <?php echo printVar($_smarty_tpl->tpl_vars['editar']->value);?>

    <?php } ?>
<?php echo $_smarty_tpl->getSubTemplate ("taberna/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
