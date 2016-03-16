<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-03-16 17:35:40
         compiled from "..\views\youth\registro.html" */ ?>
<?php /*%%SmartyHeaderCode:3055256e329da6d7b12-42227129%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0da40ad4e1d0229a202f23097f0db389ccdb8e21' => 
    array (
      0 => '..\\views\\youth\\registro.html',
      1 => 1458161012,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3055256e329da6d7b12-42227129',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_56e329da70e626_62465998',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56e329da70e626_62465998')) {function content_56e329da70e626_62465998($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("base/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

  <!--Slider PPAl-->
  <section class="container-fluid u-no-border slider-ppal slider-registro">
    <div id="carrusel-ppal" data-ride="carousel" class="carousel slide">
      <!--wrapper -->
      <div role="listbox" class="carousel-inner">
        <!--item-->
        <div class="item active">
          <div class="carousel-caption">
            <h1>Regístrate</h1>
            <p>
              y ten acceso a conocimiento de la mejor calidad sobre aquellas habilidades que te pueden facilitar el proceso de búsqueda y ubicación laboral.
              
            </p>
            <div class="button-container azul-claro"><i class="icon icon-orientate"></i></div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/-Slider PPAl-->
  <section class="container-fluid bg-registro">
    <!--más información-->
    <div class="go-down">
      <p class="azul-oscuro-text">Más información</p><a href="#" class="icon icon-circle-left down naranja-text"></a>
    </div>
    <!--/-más información-->
    <article class="row">
      <form id="registro" method="">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-lg-offset-3 col-md-offset-3 col-sm-offset-3">
          <p class="text-center">Todos los campos son obligatorios</p>
          <!--Botón registro con Facebook-->
          <button type="button" class="btn btn-fb">
            <span>Conéctate con facebook</span> <i class="icon icon-fb"></i>
            
          </button>
          <!--/-Botón registro con Facebook-->
          <!--Botón registro con Google+-->
          <button type="button" id="btn-g" class="btn btn-g"><i class="icon icon-g"></i> <span>Conéctate con google +</span></button>
          <!--/-Botón registro con Google+-->
          
          <!--img de perfil-->
          <div class="form-group img-perfil"><img src="/fbappCasaBienestar/images/profile-placeholder.jpg" class="img-responsive"></div>
          <!--/-img de perfil-->
          <!--redId-->
          <input type="hidden" class="form-control" value="" id="idRs" name="idRs">
          <!--Nombres-->
          <div class="form-group">
            <label for="nombres">Nombres:</label>
            <input type="text" id="nombres" name="nombres" class="form-control">
          </div>
          <!--/-Nombres-->
          <!--Apellidos-->
          <div class="form-group">
            <label for="apellidos">Apellidos:</label>
            <input type="text" id="apellidos" name="apellidos" class="form-control">
          </div>
          <!--/-Apellidos-->
          <!--celular-->
          <div class="form-group">
            <label for="celular">Celular:</label>
            <input type="text" id="celular" name="celular" class="form-control">
          </div>
          <!--/-celular-->
          <!--direccion-->
          <div class="form-group">
            <label for="direccion">Dirección:</label>
            <input type="text" id="direccion" name="direccion" class="form-control">
          </div>
          <!--/-direccion-->
          <!--email-->
          <div class="form-group">
            <label for="email">Email:</label>
            <input type="text" id="email" name="email" class="form-control">
          </div>
          <!--/-email-->
          <!--Genero-->
          <div class="form-group">
            <label for="tipo">Género:</label>
            <select name="genero" class="form-control genero" id="genero">
              <option value=""></option>
              <option value=""></option>
              <option value="M">M</option>
              <option value="F">F</option>
            </select>
          </div>
          <!--/-Tipo de documento-->
          <!--Tipo de documento-->
          <div class="form-group">
            <label for="tipo">Tipo de documento:</label>
            <select name="tipo" class="form-control tipo" id="tipo">
              <option value=""></option>
              <option value="CC">C.C</option>
              <option value="CE">C.E</option>
              <option value="TI">T.I</option>
            </select>
          </div>
          <!--/-Tipo de documento-->
          <!--documento-->
          <div class="form-group">
            <label for="documento">Número de documento:</label>
            <input type="text" id="documento" name="documento" class="form-control">
          </div>
          <!--/-documento-->
          <!--nacimiento-->
          <div class="form-group">
            <label for="nacimiento">Fecha de nacimiento:</label>
            <input type="text" id="nacimiento" name="nacimiento" onfocus="(this.type='date')" onblur="(this.type='text')" class="form-control">
          </div>
          <!--/-nacimiento-->
          <!--Ciudad-->
          <div class="form-group">
            <label for="Ciudad">Departamento:</label>
            <select name="departamento" class="form-control departamento" id="departamento">
              <option value=""></option>
              <option value="1">2</option>
              <option value="2">3</option>
              <option value="3">4</option>
            </select>
          </div>
          <!--/-Ciudad-->
          <!--Ciudad-->
          <div class="form-group">
            <label for="Ciudad">Ciudad:</label>
            <select name="ciudad" class="form-control ciudad" id="ciudad">
              <option value=""></option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
            </select>
          </div>
          <!--/-Ciudad-->
          <!--Acepto términos-->
          <div class="checkbox">
            <input type="checkbox" name="terminos" id="terminos" value="S">
            <label for="terminos">
              Acepto los términos y condiciones establecidos en los avisos legales:
              <a href="#">Politica de Privacidad</a> y <a href="#">Politica de Tratamiento de datos</a>
            </label>
          </div>
          <!--/-Acepto términos-->
          <button type="submit" class="btn btn-submit azul-oscuro">Enviar</button>
        </div>
      </form>
    </article>
  </section>
  <!--Footer-->
  

<?php echo $_smarty_tpl->getSubTemplate ("base/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
