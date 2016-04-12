<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-04-08 15:32:15
         compiled from "..\views\youth\perfil.html" */ ?>
<?php /*%%SmartyHeaderCode:67595708154fe0d1e4-02435494%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '457085c302e21c89603246f437bc45624fd52580' => 
    array (
      0 => '..\\views\\youth\\perfil.html',
      1 => 1458688993,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '67595708154fe0d1e4-02435494',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'datosUsu' => 0,
    'usuario' => 0,
    'deptos' => 0,
    'departamento' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5708154fe99c05_52071827',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5708154fe99c05_52071827')) {function content_5708154fe99c05_52071827($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("base/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<!--Slider PPAl-->

<section class="container-fluid u-no-border slider-ppal slider-perfil">
  <div id="carrusel-ppal" data-ride="carousel" class="carousel slide"></div>
</section>
<!--/-Slider PPAl-->
<section class="container-fluid bg-registro">
  <article class="row">
    <?php  $_smarty_tpl->tpl_vars['usuario'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['usuario']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['datosUsu']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['usuario']->key => $_smarty_tpl->tpl_vars['usuario']->value) {
$_smarty_tpl->tpl_vars['usuario']->_loop = true;
?>

    <form id="perfil" method="post">
      <h1 class="col-lg-offset-2 col-md-offset-2 col-sm-offset-2">Editar Cuenta</h1>
      <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 col-lg-offset-2 col-md-offset-2 col-sm-offset-2"><img src="<?php echo $_smarty_tpl->tpl_vars['usuario']->value['imgPerfil'];?>
" class="img-responsive"/>
        <!-- <div class="subir-img">
          <label for="perfil">Selecciona tu archivo</label>
          <input type="file" name="perfil" id="perfil"/>
        </div> -->
        <h3>Foto de Perfil</h3>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <h3>Información Básica</h3>
        <!--Nombres-->
        <div class="form-group input-activo">
          <label for="nombres">Nombres:</label>
          <input type="hidden" id="idusr" name="idusr" value="<?php echo $_smarty_tpl->tpl_vars['usuario']->value['id'];?>
" class="form-control"/>
          <input type="text" id="nombres" name="nombres" value="<?php echo $_smarty_tpl->tpl_vars['usuario']->value['nombre'];?>
" class="form-control"/>
        </div>
        <!--/-Nombres-->
        <!--Apellidos-->
        <div class="form-group input-activo">
          <label for="apellidos">Apellidos:</label>
          <input type="text" id="apellidos" name="apellidos" value="<?php echo $_smarty_tpl->tpl_vars['usuario']->value['apellido'];?>
" class="form-control"/>
        </div>
        <!--/-Apellidos-->
        <!--celular-->
        <div class="form-group input-activo">
          <label for="celular">Celular:</label>
          <input type="text" id="celular" name="celular" value="<?php echo $_smarty_tpl->tpl_vars['usuario']->value['telefono'];?>
" class="form-control"/>
        </div>
        <!--/-celular-->
        <!--direccion-->
        <div class="form-group input-activo">
          <label for="direccion">Dirección:</label>
          <input type="text" id="direccion" name="direccion" value="<?php echo $_smarty_tpl->tpl_vars['usuario']->value['direccion'];?>
" class="form-control"/>
        </div>
        <!--/-direccion-->
        <!--email-->
        <div class="form-group input-activo">
          <label for="email">Email:</label>
          <input type="text" id="email" name="email" value="<?php echo $_smarty_tpl->tpl_vars['usuario']->value['email'];?>
" class="form-control"/>
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
        <div class="form-group input-activo">
          <label for="documento">Número de documento:</label>
          <input type="text" id="documento" name="documento" value="<?php echo $_smarty_tpl->tpl_vars['usuario']->value['numeroDocumento'];?>
" class="form-control"/>
        </div>
        <!--/-documento-->
        <!--nacimiento-->
        <div class="form-group input-activo"> 
          <label for="nacimiento">Fecha de nacimiento:</label>
          <input type="text" id="nacimiento" name="nacimiento" onfocus="(this.type='date')" onblur="(this.type='text')" value="<?php echo $_smarty_tpl->tpl_vars['usuario']->value['fechaNacimiento'];?>
" class="form-control"/>
        </div>
        <!--/-nacimiento-->
        <!--Departamento-->
          <div class="form-group">
            <label for="Departamento">Departamento:</label>

            <select name="departamento" class="form-control departamento" id="departamento">
              <option value=""></option>
               <?php  $_smarty_tpl->tpl_vars['departamento'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['departamento']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['deptos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['departamento']->key => $_smarty_tpl->tpl_vars['departamento']->value) {
$_smarty_tpl->tpl_vars['departamento']->_loop = true;
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['departamento']->value['id'];?>
"><?php echo utf8_decode($_smarty_tpl->tpl_vars['departamento']->value['nombre']);?>
</option>
                <?php } ?>
            </select>
          </div>
        <!--Ciudad-->
        <div class="form-group input-activo">
          <label for="Ciudad">Ciudad:</label>
           <select name="ciudad" class="form-control ciudad" id="ciudad" disabled>
              <option value=""></option>
            </select>
        </div>
        <!--/-Ciudad-->
        <button type="button" id="updatePer" class="btn btn-submit azul-oscuro">Actualizar perfil</button>
        
        <!-- <h3>Cambiar Clave</h3> -->
        <!--cambio de clave-->
        <!-- <div class="form-group">
          <label for="password">Nueva clave:</label>
          <input type="text" id="password" name="password" class="form-control"/>
        </div> -->
        <!--/-cambio de clave-->
        <!-- <button type="button" class="btn btn-submit azul-oscuro">Cambiar clave</button> -->
      </div>
      <input type="hidden" id="tipoDocumentoTr" name="tipoDocumentoTr"  value="<?php echo $_smarty_tpl->tpl_vars['usuario']->value['tipoDocumento'];?>
" class="form-control"/>
      <input type="hidden" id="generoTr" name="generoTr"  value="<?php echo $_smarty_tpl->tpl_vars['usuario']->value['genero'];?>
" class="form-control"/>
        <input type="hidden" id="deptoTr" name="deptoTr"  value="<?php echo $_smarty_tpl->tpl_vars['usuario']->value['idDepto'];?>
" class="form-control"/>
        <input type="hidden" id="ciudadTr" name="ciudadTr"  value="<?php echo $_smarty_tpl->tpl_vars['usuario']->value['idCiudad'];?>
" class="form-control"/>
    </form>
    <?php } ?>
  </article>
</section>

<?php echo $_smarty_tpl->getSubTemplate ("base/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
