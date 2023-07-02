<!DOCTYPE html>
<html style="background: url('<?php echo base_url();?>assets/fondo.jpg');background-repeat: no-repeat;background-size: cover;"


>  <head>
        <meta charset="utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>Barberia</title>
        <meta content="Admin Dashboard" name="description"/>
        <meta content="Lt" name="author"/>
        <meta name="google-signin-scope" content="profile email">
        <meta name="google-signin-client_id" content="815790752895-46pn1717c19ttf8ivqdcm8g11gii4s95.apps.googleusercontent.com">
        <!-- App Icons -->
        <link rel="shortcut icon" href="<?php echo base_url();?>assets/administrador/images/favicon.svg">

        <!-- App css -->
        <link href="<?php echo base_url();?>assets/administrador/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url();?>assets/administrador/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url();?>assets/administrador/css/style.css" rel="stylesheet" type="text/css" />
         <script src="https://apis.google.com/js/platform.js" async defer></script>
    </head>


    <body style="background: none;"
>

        <!-- Begin page -->
        <div class="registeracount"></div>
        <div class="wrapper-page">

            <div class="card">
                <div class="card-body">

                    <h3 class="text-center mt-0 m-b-15">
                        <a href="index.html" class="logo logo-admin"><img src="<?php echo base_url();?>assets/administrador/images/logo-dark.svg" alt="12" style="
    height: 36px;
"></a>
                    </h3>

                    <h4 class="text-muted text-center font-18"><b>Iniciar Sesión</b></h4>

                    <div class="p-3">
    <div class="g-signin2" data-onsuccess="onSignIn" data-theme="dark"></div>
                    </div>

                </div>
            </div>
        </div>



        <!-- jQuery  -->
        <script src="<?php echo base_url();?>assets/administrador/js/jquery.min.js"></script>
        <script src="<?php echo base_url();?>assets/administrador/js/popper.min.js"></script>
        <script src="<?php echo base_url();?>assets/administrador/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url();?>assets/administrador/js/modernizr.min.js"></script>
        <script src="<?php echo base_url();?>assets/administrador/js/waves.js"></script>
        <script src="<?php echo base_url();?>assets/administrador/js/jquery.slimscroll.js"></script>
        <script src="<?php echo base_url();?>assets/administrador/js/jquery.nicescroll.js"></script>
        <script src="<?php echo base_url();?>assets/administrador/js/jquery.scrollTo.min.js"></script>

        <!-- App js -->
        <script src="<?php echo base_url();?>assets/administrador/js/appcustomer.js"></script>
        <script>
		function onSignIn(googleUser) {
            var id_token = googleUser.getAuthResponse().id_token;
			var profile = googleUser.getBasicProfile();
			
            var xhr = new XMLHttpRequest();
            xhr.open('POST', '<?php echo base_url(); ?>clientes/Login/verificar');
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            xhr.onload = function() {
               if(xhr.readyState == 4 && xhr.status == 200) {
                    location.href="<?php echo base_url(); ?>#corte";
                }
            };
            xhr.send('idtoken=' + id_token + '&name=' + profile.getName() + '&imagen=' + profile.getImageUrl() + '&email=' + profile.getEmail());
        }
</script>
    </body>
</html>
