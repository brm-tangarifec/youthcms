<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-06-15 10:59:17
         compiled from "..\views\taberna\creaMultimedia.html" */ ?>
<?php /*%%SmartyHeaderCode:24359575b4759860516-10859810%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4aeb4857fc355db099e2432bba8eadb074980f82' => 
    array (
      0 => '..\\views\\taberna\\creaMultimedia.html',
      1 => 1466006355,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24359575b4759860516-10859810',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_575b47598a2ba2_70526953',
  'variables' => 
  array (
    'seccion' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_575b47598a2ba2_70526953')) {function content_575b47598a2ba2_70526953($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("taberna/headerCont.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<!--Editor js-->
       
        <!--FIn editor-->
    <section class="container-fluid editor">
       <div class="row">
            <div class="col-lg-8 col-lg-offset-2 primerPos">
                                <h2>Seleccione el tipo de multimedia o documento</h2>
                                <ul class="lista-tipo">
                                    <li  class="addM" data-mult="galeria" > <i class="glyphicon glyphicon-picture"></i> Galería</li>
                                    <li  class="addM" data-mult="estatico" > <i class="glyphicon glyphicon-align-left"></i>Estático</li>
                                    <li  class="addM" data-mult="video" ><i class="glyphicon glyphicon-record"></i>Video</li>
                                    <li  class="addM" data-mult="capsula" ><i class="glyphicon glyphicon-option-horizontal"></i> Cápsula</li>
                                    <!-- <li  class="addM" data-mult="pdf" >Pdf</li> -->
                                </ul>
                               <div class="form-inline">
                                    <div class="form-group">
                                        <label>Posición</label>
                                        <select class="form-control" name="posicion" id="posicion">
                                            <option value="">Seleccionar...</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                        </select>
                                        
                                    </div>
                                    <input type="hidden" name="idSeccion" id="idSeccion" value="<?php echo $_smarty_tpl->tpl_vars['seccion']->value;?>
" class='limpiar'/>
                               </div>
                               
    </div>
    <div class="col-lg-8 col-lg-offset-2 ingreso">
    <div class="galeria" style="display:none;">
        <h2>Ingresa la multimedia o documento</h2>
        <div class="galeriaC">Haz click para agregar un campo</div>
        <div class="galeriaG">
            <!--Se generan los inputs-->
            <form name="gdrGaleria" id="gdrGaleria" method="POST" enctype="multipart/form-data">
            <p>
                <label for="galeriai"><input type="text" class="form-control" id="galeriai" name="galeriai" placeholder="ingresa la url" /></label>
                <label for="galeriaposicioni"><input type="number" class="form-control" id="galeriaposicioni" name="galeriaposicioni" size="2" maxlength="2" min="1" max="10" placeholder="posicion" /></label>
                <textarea class="form-control" id="galeriadescripcioni" name="galeriadescripcioni" style="width: 733px !important;"></textarea>
            </p>
            
            <button class="azul-oscuro btn btn-submit galeriaGuardar">Guardar</button>
            </form>
        </div>
    </div>
    <div class="estatico" style="display:none;">
        <div class="estaticoC">Haz click para agregar un campo</div>
        <div class="estaticoG">
            <!--Se generan los inputs-->
            <form name="gdrEstatico" id="gdrEstatico" method="POST" enctype="multipart/form-data">
            <p>
                <label for="estaticoi"><input type="text" class="form-control" id="estaticoi" name="estaticoi" placeholder="ingresa la url" /></label>
            </p>
            
            <button class="azul-oscuro  btn btn-submit galeriaGuardar">Guardar</button>
            </form>
        </div>
    </div>
    <div class="video" style="display:none;">
        <div class="videoC" style="cursor:pointer;"><p style="fotn-size=17px;">Haz click para agregar un campo</p></div>
        <div class="videoG">
            <!--Se generan los inputs-->
            <p>Por favor, ingrese el id del video</p>
            <p>Por favor, ingrese la posición de los videos</p>
            <form name="gdrVideo" id="gdrVideo" method="POST">
            <p>
                <label for="videoi"><input type="text" class="iframegeneraVideoO form-control" id="videoi" name="videoi" placeholder="ingresa la url" /></label>
                <label for="videoposicioni"><input type="number" class="form-control" id="videoposicioni" name="videoposicioni" size="2" maxlength="2" min="1" max="10" placeholder="posicion" /></label>
                <textarea class="form-control" id="videodescripcioni" name="videodescripcioni" style="width: 733px !important;"></textarea>

            </p>
            
            <button class="azul-oscuro  btn btn-submit galeriaGuardar">Guardar</button>
            </form>
            <div class="iframegeneraVideo"></div>
        </div>
    </div>
    <div class="capsula" style="display:none;">
        <div class="capsulaC">Haz click para agregar un campo</div>
        <div class="capsulaG">
            <!--Se generan los inputs-->
            <form name="gdrCapsulacapsula" id="gdrCapsula" method="POST" enctype="multipart/form-data">
            <p>
                <label for="capsulai"><input type="text" class="form-control" id="capsulai" name="capsulai" placeholder="ingresa la url" /></label>
                <label for="capsulaposicioni"><input type="number" class="form-control" id="capsulaposicioni" name="capsulaposicioni" size="2" maxlength="2" min="1" max="10" placeholder="posicion" /></label>
                <textarea class="form-control" id="capsuladescripcioni" name="capsuladescripcioni" style="width: 733px !important;"></textarea>
            </p>
            
            <button class="azul-oscuro  btn btn-submit galeriaGuardar">Guardar</button>
            </form>
        </div>
    </div>
    <div class="pdf" style="display:none;">
        <div class="pdfC">Haz click para agregar un campo</div>
        <div class="pdfG">
            <!--Se generan los inputs-->
            <form name="gdrPdf" id="gdrPdf" method="POST" enctype="multipart/form-data">
            <p>
                <label for="pdfi"><input type="file" class="pdfUpload form-control" id="pdfi" name="pdfi" placeholder="ingresa la url" /></label>
                <label for="pdfposicioni"><input type="number" class="form-control" id="posicioni" name="posicioni" size="2" maxlength="2" min="1" max="10" placeholder="posicion" /></label>
               <textarea class="form-control" id="pdfdescripcioni" name="pdfdescripcioni" style="width: 733px !important;"></textarea>
            </p>

            
            <button class="azul-oscuro btn btn-submit galeriaGuardar">Guardar</button>
            </form>
        </div>
    </div>
</div>
       </div>

</section>
 <?php echo '<script'; ?>
 type="text/javascript" src="/js/taberna/multimedia.js"><?php echo '</script'; ?>
>
<?php echo $_smarty_tpl->getSubTemplate ("taberna/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
