
var app_id = '1000170106703203';
var scopes = 'public_profile,email';
var idP;
window.fbAsyncInit = function() {
    FB.init({
      appId      : '1000170106703203',
      xfbml      : true,
      version    : 'v2.5'
    });

      FB.getLoginStatus(function (response) {
          statusChangeCallback(response, function () {
          }
        );
        });
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));

    var token;

      var statusChangeCallback = function (response, callback) {
        if (response.status === 'connected') {
          getFacebookData();
        } else {
          callback(false);
        }
      };

      var checkLoginState = function (callback) {
        FB.getLoginStatus(function (response) {
          callback(response);
        });
      };

      var getFacebookData = function () {
        obtenerFotoPerfil()
        FB.api('/me', 'get', { access_token: token, fields: 'id,first_name,last_name,email' } ,function (response) {
          //console.log(response);
          //console.log(response.first_name);
          jQuery("#idRs").val('');
          jQuery("#nombres").val('');
          jQuery("#apellidos").val('');
          jQuery("#email").val('');
          jQuery("#idRs").val(response.id).attr('data','fb');
          idP=jQuery('#idRs');
          jQuery("#nombres").val(response.first_name).parent().addClass('input-activo');
          jQuery("#nombres").val(response.first_name).parent().addClass('input-activo');
          jQuery("#apellidos").val(response.last_name).parent().addClass('input-activo');
          jQuery("#email").val(response.email).parent().addClass('input-activo');
           if(window.location.hash=='#logout'){
             jQuery("#idRs").val('');      
           }
          //loginProf(idP);

        });
      };

      var facebookLogin = function () {
        checkLoginState(function (data) {
            FB.login(function (response) {
             token = response.authResponse.accessToken;
              if (response.status === 'connected')
                getFacebookData();
            }, {
              scope: 'email'});
        });
      };

      var facebookLogout = function () {
        checkLoginState(function (data) {
          if (data.status === 'connected') {
            FB.logout(function (response) {
              jQuery('#facebook-session').before(btn_login);
              jQuery('#facebook-session').remove();
            });
          }
        });

      };



      jQuery(document).on('click', '.btn-fb', function (e) {
        e.preventDefault();

        facebookLogin();
        setTimeout(function(){
          var idP=jQuery("#idRs");
          loginProf(idP);
        }, 2000);
      });

      function obtenerFotoPerfil(){
        FB.api('/me/picture?width=325&height=325', function(responseI) {
          var profileImage = responseI.data.url;
            //var fbid=jQuery("#pictureP").val(profileImage);
            //console.log(profileImage);
            jQuery('.img-perfil img').attr('src',profileImage);
       });
      }

      function logout() {
            FB.logout(function(response) {
              // user is now logged out
            });
        }

/*Funciones para Gmail*/

 // Your Client ID can be retrieved from your project in the Google
      // Developer Console, https://console.developers.google.com
      var CLIENT_ID = '748503973765-uv55tu56a892kiaiumcv71aokj7dcdts.apps.googleusercontent.com';

      var SCOPES = ['https://www.googleapis.com/auth/plus.me','https://www.googleapis.com/auth/userinfo.email','https://www.googleapis.com/auth/userinfo.profile'];

      var googleUser = {};

  var startApp = function() {
    gapi.load('auth2', function(){
      // Retrieve the singleton for the GoogleAuth library and set up the client.
      auth2 = gapi.auth2.init({
        client_id: CLIENT_ID,
        //cookiepolicy: 'single_host_origin',
        // Request scopes in addition to 'profile' and 'email'
        scope: 'https://www.googleapis.com/auth/plus.me'
      });
     attachSignin(document.getElementById('btn-g'));
    });
  };

  function attachSignin(element) {
     console.log(element.id);
    auth2.attachClickHandler(element, {},
        function(googleUser) {
          //console.log(googleUser);
      jQuery("#idRs").val('');
      jQuery("#nombres").val('');
      jQuery("#apellidos").val('');
      jQuery("#email").val('');
      jQuery("#idRs").val(googleUser.getBasicProfile().getId()).attr('data','g+');
      idP=jQuery('#idRs');
      jQuery("#nombres").val(googleUser.getBasicProfile().getGivenName()).parent().addClass('input-activo');
      jQuery("#apellidos").val(googleUser.getBasicProfile().getFamilyName()).parent().addClass('input-activo');
      jQuery("#email").val(googleUser.getBasicProfile().getEmail()).parent().addClass('input-activo');
      jQuery('.img-perfil img').attr('src',googleUser.getBasicProfile().getImageUrl());
      if(window.location.hash=='#logout'){
        jQuery("#idRs").val('');      
      }
      loginProf(idP);
    });
  }

  function signOut() {
    var auth2 = gapi.auth2.getAuthInstance();
    auth2.signOut().then(function () {
      console.log('User signed out.');
    });
  }

jQuery(document).ready(function(){
    startApp();

    /*Valiadción de formulario de login*/
    /*validacion de formulario de fiesta*/
  $("#login").validate({

         debug: true,

        /*Contenedor y clase donde se pinta el error*/
        errorElement: "div",
        errorClass: "alert-danger",

        /*Campos para validar en form para pedir fiesta*/

      rules: {
             loginUsuario:       {required: true, email: true },
             loginPassword:       {required: true},
             },

      /*Mensajes en caso de dar error para cada input*/

      messages: {
        loginUsuario:{
          required:'Ingrese el nombre de usuario',
          email :'El usuario es el e-mail'
        },
        loginPassword:{
          required:'Ingrese su contraseña'
        }
       

             },

      errorPlacement: function (error, element) {

          error.insertAfter(element);
   

      },

      

  });
});
jQuery(document).on('click','.logout',function(){
  logout();
  signOut();
  setTimeout(function(){ window.location='/logout/'; }, 3000);
  
});
/*Funcion de login*/
function loginProf(idP) {

  //console.log(idP);

  var revisaUsu=idP.val(),
  rrs=idP.attr('data'),
  urlRr='/registroYouthP/';
 //console.log(revisaUsu);
 //console.log(rrs);
  jQuery.ajax({
    url: urlRr,
    dataType:'json' ,
    type: 'POST',
    data:{
      revisaIdRs: revisaUsu,
      rrs:rrs,
    },
    success: function (data){
      //console.log(data);
      if(data!=0){
        window.location= "/perfil/";
      }
      
    }

  });

}


/*Traer ciudades*/
jQuery(document).on('change','#departamento',function(){
  var depto=jQuery(this).val();
  var urlC='/ciudades/';
    jQuery.ajax({
      url: urlC,
      dataType:'json',
      type: 'POST',
      data:{
        idDepto:depto
      },
      success: function (data){
        var totalCiudades=data.length;
        
          var ciudades="";
          ciudades+=" <option value=''></option>";
          for(f=0; f<totalCiudades; f++)
            {
             
              ciudades+="<option value="+data[f].id+">"+data[f].nombre+"</option>";
            }
            //ciudades+="<option value='otroC'>OTRO</option>";

            jQuery('#ciudad').html(ciudades);
            jQuery("#ciudad").removeAttr("disabled");
        
      }

    });
});


/*Logueo con usuario y contraseña*/
jQuery(document).on('click','#login-submit',function(){

  if(jQuery('#login').valid()){
    //console.log('valido');
    var user=jQuery('#loginUsuario').val();
    var pass=jQuery('#loginPassword').val();
    var urlL='/loginUser/';
    jQuery.ajax({
      url: urlL,
      dataType:'json',
      type: 'POST',
      data:{
        usuario:user,
        pass:pass
      },
      success: function (data){
        console.log(data);
        if(data=='exito'){
          //console.log('hola');
          window.location= "/perfil/";

        }else{
          jQuery('.mensajes-sistema').html(data);
        }
        
      }

    });
  }else{
     //console.log('no valido');
    return false
  }
});
jQuery(document).on('change','#password',function(){


    jQuery("#password").each(function () {
        var validated =  true;
        if(this.value.length < 8){
          console.log('menor');
          $('.mensajes-pass').append('<p>La contraseña no debe ser menor a ocho caracteres</p>').show('fade');
            validated = false;
        }
        if(!/\d/.test(this.value)){
            console.log('digito');
          $('.mensajes-pass').append('<p>La contraseña debe contener al menos un digito</p>').show('fade');
            validated = false;
        }
        if(!/[a-z]/.test(this.value)){
          console.log('minuscula');
          $('.mensajes-pass').append('<p>La contraseña debe contener al menos una minúscula </p>').show('fade');
            validated = false;          
        }
        if(!/[A-Z]/.test(this.value)){
          console.log('mayuscula');
          $('.mensajes-pass').append('<p>La contraseña debe contener al menos una mayúscula</p>').show('fade');
            validated = false;
        }
        if(!/[`~!@#$%^&*()_°¬|+\-=?;:'",.<>\{\}\[\]\\\/]/gi.test(this.value)){
            console.log('especiales');
          $('.mensajes-pass').append('<p>La contraseña debe contener al menos un caracter especial</p>').show('fade');
            validated = false;
          
        }
        /*Se ponen los errores en el html*/
        //jQuery('div').text(validated ? "pass" : "fail");
        // use DOM traversal to select the correct div for this input above
    });


});


var Base64 = {


    _keyStr: "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=",


    encode: function(input) {
        var output = "";
        var chr1, chr2, chr3, enc1, enc2, enc3, enc4;
        var i = 0;

        input = Base64._utf8_encode(input);

        while (i < input.length) {

            chr1 = input.charCodeAt(i++);
            chr2 = input.charCodeAt(i++);
            chr3 = input.charCodeAt(i++);

            enc1 = chr1 >> 2;
            enc2 = ((chr1 & 3) << 4) | (chr2 >> 4);
            enc3 = ((chr2 & 15) << 2) | (chr3 >> 6);
            enc4 = chr3 & 63;

            if (isNaN(chr2)) {
                enc3 = enc4 = 64;
            } else if (isNaN(chr3)) {
                enc4 = 64;
            }

            output = output + this._keyStr.charAt(enc1) + this._keyStr.charAt(enc2) + this._keyStr.charAt(enc3) + this._keyStr.charAt(enc4);

        }

        return output;
    },


    decode: function(input) {
        var output = "";
        var chr1, chr2, chr3;
        var enc1, enc2, enc3, enc4;
        var i = 0;

        input = input.replace(/[^A-Za-z0-9\+\/\=]/g, "");

        while (i < input.length) {

            enc1 = this._keyStr.indexOf(input.charAt(i++));
            enc2 = this._keyStr.indexOf(input.charAt(i++));
            enc3 = this._keyStr.indexOf(input.charAt(i++));
            enc4 = this._keyStr.indexOf(input.charAt(i++));

            chr1 = (enc1 << 2) | (enc2 >> 4);
            chr2 = ((enc2 & 15) << 4) | (enc3 >> 2);
            chr3 = ((enc3 & 3) << 6) | enc4;

            output = output + String.fromCharCode(chr1);

            if (enc3 != 64) {
                output = output + String.fromCharCode(chr2);
            }
            if (enc4 != 64) {
                output = output + String.fromCharCode(chr3);
            }

        }

        output = Base64._utf8_decode(output);

        return output;

    },

    _utf8_encode: function(string) {
        string = string.replace(/\r\n/g, "\n");
        var utftext = "";

        for (var n = 0; n < string.length; n++) {

            var c = string.charCodeAt(n);

            if (c < 128) {
                utftext += String.fromCharCode(c);
            }
            else if ((c > 127) && (c < 2048)) {
                utftext += String.fromCharCode((c >> 6) | 192);
                utftext += String.fromCharCode((c & 63) | 128);
            }
            else {
                utftext += String.fromCharCode((c >> 12) | 224);
                utftext += String.fromCharCode(((c >> 6) & 63) | 128);
                utftext += String.fromCharCode((c & 63) | 128);
            }

        }

        return utftext;
    },

    _utf8_decode: function(utftext) {
        var string = "";
        var i = 0;
        var c = c1 = c2 = 0;

        while (i < utftext.length) {

            c = utftext.charCodeAt(i);

            if (c < 128) {
                string += String.fromCharCode(c);
                i++;
            }
            else if ((c > 191) && (c < 224)) {
                c2 = utftext.charCodeAt(i + 1);
                string += String.fromCharCode(((c & 31) << 6) | (c2 & 63));
                i += 2;
            }
            else {
                c2 = utftext.charCodeAt(i + 1);
                c3 = utftext.charCodeAt(i + 2);
                string += String.fromCharCode(((c & 15) << 12) | ((c2 & 63) << 6) | (c3 & 63));
                i += 3;
            }

        }

        return string;
    }

}
    
    
    
var input = document.getElementById('confirmPass');

jQuery(document).on('blur','#confirmPass',function(){
  var codi=Base64.encode(input.value);
  //console.log(codi);
  jQuery('#password').val(codi);
  jQuery('#confirmPass').val(codi);
});

jQuery(document).on('focus','#password',function(){

  jQuery('.mensajes-pass p').remove('p')
});