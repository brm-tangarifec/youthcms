<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-06-10 18:03:53
         compiled from "..\views\taberna\creaMultimedia.html" */ ?>
<?php /*%%SmartyHeaderCode:24359575b4759860516-10859810%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4aeb4857fc355db099e2432bba8eadb074980f82' => 
    array (
      0 => '..\\views\\taberna\\creaMultimedia.html',
      1 => 1456246771,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24359575b4759860516-10859810',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'seccion' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_575b47598a2ba2_70526953',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_575b47598a2ba2_70526953')) {function content_575b47598a2ba2_70526953($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("taberna/headerCont.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<!--Editor js-->
       
        <!--FIn editor-->

        <div class="wrapper row-offcanvas row-offcanvas-left">
                                <h2>Seleccione el tipo de multimedia o documento</h2>
                                <ul>
                                    <li  class="addM" data-mult="galeria" >Galeria</li>
                                    <li  class="addM" data-mult="estatico" >Estatico</li>
                                    <li  class="addM" data-mult="video" >Video</li>
                                    <li  class="addM" data-mult="capsula" >Capsula</li>
                                    <li  class="addM" data-mult="pdf" >Pdf</li>
                                </ul>
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
                                    <input type="hidden" name="idSeccion" id="idSeccion" value="<?php echo $_smarty_tpl->tpl_vars['seccion']->value;?>
" class='limpiar'/>
                                </span>
    </div>
    <div class="galeria" style="display:none;">
        <div class="galeriaC">Haz click para agregar un campo</div>
        <div class="galeriaG">
            <!--Se generan los inputs-->
            <form name="gdrGaleria" id="gdrGaleria" method="POST">
            <p><label for="galeriai"><input type="text" class="" id="galeriai" name="galeriai" placeholder="ingresa la url" /></label></p>
            
            <button class="azul-oscuro  btn btn-submit galeriaGuardar">Guardar</button>
            </form>
        </div>
    </div>
    <div class="estatico" style="display:none;">
        <div class="estaticoC">Haz click para agregar un campo</div>
        <div class="estaticoG">
            <!--Se generan los inputs-->
            <form name="gdrEstatico" id="gdrEstatico" method="POST">
            <p><label for="estaticoi"><input type="text" class="" id="estaticoi" name="estaticoi" placeholder="ingresa la url" /></label></p>
            
            <button class="azul-oscuro  btn btn-submit galeriaGuardar">Guardar</button>
            </form>
        </div>
    </div>
    <div class="video" style="display:none;">
        <div class="videoC">Haz click para agregar un campo</div>
        <div class="videoG">
            <!--Se generan los inputs-->
            <form name="gdrVideo" id="gdrVideo" method="POST">
            <p><label for="videoi"><input type="text" class="" id="videoi" name="videoi" placeholder="ingresa la url" /></label></p>
            
            <button class="azul-oscuro  btn btn-submit galeriaGuardar">Guardar</button>
            </form>
        </div>
    </div>
    <div class="capsula" style="display:none;">
        <div class="capsulaC">Haz click para agregar un campo</div>
        <div class="capsulaG">
            <!--Se generan los inputs-->
            <form name="gdrCapsulacapsula" id="gdrCapsula" method="POST">
            <p><label for="capsulai"><input type="text" class="" id="capsulai" name="capsulai" placeholder="ingresa la url" /></label></p>
            
            <button class="azul-oscuro  btn btn-submit galeriaGuardar">Guardar</button>
            </form>
        </div>
    </div>
    <div class="pdf" style="display:none;">
        <div class="pdfC">Haz click para agregar un campo</div>
        <div class="pdfG">
            <!--Se generan los inputs-->
            <form name="gdrPdf" id="gdrPdf" method="POST">
            <p><label for="pdfi"><input type="text" class="" id="pdfi" name="pdfi" placeholder="ingresa la url" /></label></p>
            
            <button class="azul-oscuro btn btn-submit galeriaGuardar">Guardar</button>
            </form>
        </div>
    </div>

<?php echo $_smarty_tpl->getSubTemplate ("taberna/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
