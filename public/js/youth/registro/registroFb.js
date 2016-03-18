
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
          loginProf(idP);

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
      });

      function obtenerFotoPerfil(){
        FB.api('/me/picture?width=325&height=325', function(responseI) {
          var profileImage = responseI.data.url;
            //var fbid=jQuery("#pictureP").val(profileImage);
            //console.log(profileImage);
            jQuery('.img-perfil img').attr('src',profileImage);
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
     //console.log(element.id);
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
      loginProf(idP);
    });
  }
jQuery(document).ready(function(){
    startApp();
});

/*Funcion de login*/
function loginProf(idP) {

  //console.log(idP);

  var revisaUsu=idP.val(),
  rrs=idP.attr('data'),
  urlRr='/fbappCasaBienestar/registroYouthP/';
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
      console.log(data);
      if(data!=0){
        window.location= "/fbappCasaBienestar/perfil/";
      }
      
    }

  });

}


/*Traer ciudades*/
jQuery(document).on('change','#departamento',function(){
  console.log('hola, me cambiaron');
  var depto=jQuery(this).val();
  var urlC='/fbappCasaBienestar/ciudades/';
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
             
              ciudades+="<option value="+data[f].idCiudad+">"+data[f].nombre+"</option>";
            }
            //ciudades+="<option value='otroC'>OTRO</option>";

            jQuery('#ciudad').html(ciudades);
            jQuery("#ciudad").removeAttr("disabled");
        
      }

    });
});

jQuery(document).on('change','',function(){


    jQuery("#password").each(function () {
        var validated =  true;
        if(this.value.length < 8)
          console.log('menor');
            validated = false;
        if(!/\d/.test(this.value))
            console.log('digito');
            validated = false;
        if(!/[a-z]/.test(this.value))
          console.log('minuscula');
            validated = false;
        if(!/[A-Z]/.test(this.value))
          console.log('mayuscula');
            validated = false;
        if(/[^0-9a-zA-Z]/.test(this.value))
          console.log('numerosyletras');
            validated = false;
        if(/^[a-zA-Z0-9!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]*$/.test(this.value))
            console.log('especiales');
            validated = false;
        /*Se ponen los errores en el html*/
        jQuery('div').text(validated ? "pass" : "fail");
        // use DOM traversal to select the correct div for this input above
    });


});