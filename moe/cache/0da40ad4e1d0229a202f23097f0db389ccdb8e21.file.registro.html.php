<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-05-17 17:10:08
         compiled from "..\views\youth\registro.html" */ ?>
<?php /*%%SmartyHeaderCode:3055256e329da6d7b12-42227129%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0da40ad4e1d0229a202f23097f0db389ccdb8e21' => 
    array (
      0 => '..\\views\\youth\\registro.html',
      1 => 1463523004,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3055256e329da6d7b12-42227129',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_56e329da70e626_62465998',
  'variables' => 
  array (
    'deptos' => 0,
    'departamento' => 0,
  ),
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
      <form id="registro" method="post" name="registro">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-lg-offset-3 col-md-offset-3 col-sm-offset-3">
          <p class="text-center">Todos los campos son obligatorios</p>
          <!--Botón registro con Facebook-->
          <button type="button" class="btn btn-fb" onclick="dataLayer.push({'Registrate-apis': 'Facebook', 'event': 'Registrate-redes'});">
            <span>Conéctate con facebook</span> <i class="icon icon-fb"></i>
            
          </button>
          <!--/-Botón registro con Facebook-->
          <!--Botón registro con Google+-->
          <button type="button" id="btn-g" class="btn btn-g" onclick="dataLayer.push({'Registrate-apis': 'Gmail', 'event': 'Registrate-redes'});"><i class="icon icon-g"></i> <span>Conéctate con google +</span></button>
          <!--/-Botón registro con Google+-->
          
          <!--img de perfil-->
          <div class="form-group img-perfil"><img src="/images/profile-placeholder.jpg" class="img-responsive"></div>
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
              <option value="M">Masculino</option>
              <option value="F">Femenino</option>
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
               <?php  $_smarty_tpl->tpl_vars['departamento'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['departamento']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['deptos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['departamento']->key => $_smarty_tpl->tpl_vars['departamento']->value) {
$_smarty_tpl->tpl_vars['departamento']->_loop = true;
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['departamento']->value['id'];?>
"><?php echo utf8_encode($_smarty_tpl->tpl_vars['departamento']->value['nombre']);?>
</option>
                <?php } ?>
            </select>
          </div>
          <!--/-Ciudad-->
          <!--Ciudad-->
          <div class="form-group">
            <label for="Ciudad">Ciudad:</label>
            <select name="ciudad" class="form-control ciudad" id="ciudad" disabled>
              <option value=""></option>
            </select>
          </div>
          <!--/-Ciudad-->
          <div class="block-pass">
            <!--contraseña-->
            <div class="form-group">
              <label for="password">Contraseña:</label>
              <input type="text" id="password" name="password" onfocus="(this.type='text')" onblur="(this.type='password')" class="form-control">
            </div>
            <!--/-contraseña-->
            <!--confirmar contraseña-->
            <div class="form-group">
              <label for="confirmPass">Confirmar Contraseña:</label>
              <input type="text" id="confirmPass" name="confirmPass" onfocus="(this.type='text')" onblur="(this.type='password')" class="form-control">
            </div>
            <!--/-confirmar contraseña-->
            <!--requerido de contraseña-->
            <div class="mensajes-pass"></div>
            <!--/-requerido de contraseña-->
          </div>
          <!--Acepto términos-->
          <div class="checkbox">
            <input type="checkbox" name="terminos" id="terminos" value="S">
            <label for="terminos">
              Acepto los términos y condiciones establecidos en los avisos legales:
              <a href="#">Politica de Privacidad</a> y <a href="#">Politica de Tratamiento de datos</a>
            </label>
          </div>
          <!--Captcha-->
          <div class="g-recaptcha" data-sitekey="6LdUHSATAAAAAGAdX7sZHhsrKDoVMOIyHj3-ouRE"></div>
          <!--F captca-->
          <!--/-Acepto términos-->
          <button type="button" id="registroUser" class="btn btn-submit azul-oscuro" onclick="dataLayer.push({'event': 'enviar-formulario-registro'});"
>Enviar</button>
        </div>
      </form>

          <!--mensaje de registro-->
      <div class="mensaje-reg-exitoso col-lg-4 col-md-4 col-sm-12 col-lg-offset-4 col-md-offset-4 col-sm-offset-4">

      </div>
          <!--/-mensaje de registro-->
    </article>
  </section>
  <!--Footer-->
  

<?php echo $_smarty_tpl->getSubTemplate ("base/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
