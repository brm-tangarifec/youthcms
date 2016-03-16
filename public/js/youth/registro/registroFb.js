
var app_id = '1000170106703203';
var scopes = 'public_profile,email';
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
          console.log(response);
          //console.log(response.first_name);
          jQuery("#nombres").val(response.first_name).parent().addClass('input-activo');
          jQuery("#apellidos").val(response.last_name).parent().addClass('input-activo');
          jQuery("#email").val(response.email).parent().addClass('input-activo');


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
            console.log(profileImage);
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
        //scope: 'additional_scope'
      });
      attachSignin(document.getElementById('btn-g'));
    });
  };

  function attachSignin(element) {
     console.log(element.id);
    auth2.attachClickHandler(element, {},
        function(googleUser) {
          console.log(googleUser.getBasicProfile());
         /* document.getElementById('name').innerText = "Signed in: " +
              googleUser.getBasicProfile().getName();
        }, function(error) {
          alert(JSON.stringify(error, undefined, 2));
        });*/
      jQuery("#nombres").val(googleUser.getBasicProfile().getGivenName()).parent().addClass('input-activo');
      jQuery("#apellidos").val(googleUser.getBasicProfile().getFamilyName()).parent().addClass('input-activo');
      jQuery("#email").val(googleUser.getBasicProfile().getEmail()).parent().addClass('input-activo');
    });
  }
jQuery(document).ready(function(){
    startApp();
});