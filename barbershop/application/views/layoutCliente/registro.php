<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">

        <meta content="Admin Dashboard" name="description" />
        <meta content="Themesdesign" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <link rel="shortcut icon" href="upcube/images/favicon.ico">

        <link href="<?php echo base_url();?>assets/template/upcube/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url();?>assets/template/upcube/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url();?>assets/template/upcube/css/style.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="<?php echo base_url();?>assets/template/inputfile/inputfile.css">

    </head>

    <body>

        <div class="registeracount" ></div>
        <div class="wrapper-page">

            <div class="card">
                <div class="card-body">

                  <h4 class="text-muted text-center font-18"><b>Register</b></h4>

                    <div class="p-3">
                        <form class="form-horizontal m-t-20" action="<?php echo base_url();?>clientes/usuario/registro" method="post" enctype="multipart/form-data">

                            <div class="form-group row">
                                <div class="col-12">
                                    <input class="form-control" type="text" required="" placeholder="Nombres" name="nombres" >
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-12">
                                    <input class="form-control" type="email" required="" placeholder="Email" name="email" >
                                </div>
                            </div>



                            <div class="form-group row">
                                <div class="col-12">
                                    <input class="form-control" type="password" required="" placeholder="Password" name="password">
                                </div>
                            </div>


                            <div class="input-file-container">
                                <input class="input-file" id="my-file" type="file" name="imagen" >
                                <label tabindex="0" for="my-file" class="input-file-trigger">Selecione...</label>
                            </div>

                            <div class="form-group row">
                                <div class="col-12">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                        <label class="custom-control-label font-weight-normal" for="customCheck1">I accept <a href="#" class="text-muted">Terms and Conditions</a></label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group text-center row m-t-20">
                                <div class="col-12">
                                    <button class="btn btn-info btn-block waves-effect waves-light" type="submit">Register</button>
                                </div>
                            </div>

                            <div class="form-group m-t-10 mb-0 row">
                                <div class="col-12 m-t-20 text-center">
                                    <a href="<?php echo base_url();?>clientes/login" class="text-muted">Already have account?</a>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>


        <!-- jQuery  -->
        <script src="<?php echo base_url();?>assets/template/assets/js/jquery.min.js"></script>
        <script src="<?php echo base_url();?>assets/template/assets/js/popper.min.js"></script>
        <script src="<?php echo base_url();?>assets/template/assets/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url();?>assets/template/upcube/js/modernizr.min.js"></script>
        <script src="<?php echo base_url();?>assets/template/assets/js/waves.js"></script>
        <script src="<?php echo base_url();?>assets/template/assets/js/jquery.slimscroll.js"></script>
        <script src="<?php echo base_url();?>assets/template/assets/js/jquery.nicescroll.js"></script>
        <script src="<?php echo base_url();?>assets/template/assets/js/jquery.scrollTo.min.js"></script>
        <script src="<?php echo base_url();?>assets/template/assets/js/app.js"></script>

    </body>
</html>
