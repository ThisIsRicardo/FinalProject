<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/estilos/login.css">

    <title>Login</title>
</head>

<body>
    <?= $this->include('recursos.php') ?>
    <?php

    if (session()->getFlashdata('estado')) {
        echo session()->getFlashdata('estado');
    }
    ?>

    <!------ Include the above in your HEAD tag ---------->
    <div class="container login-container">
        <div class="row">
            <div class="col-md-8 login-form-1 ">
                <img src="<?php echo base_url(); ?>/img/loginEnhanced.png" width="600" height="480" class="rounded mx-auto d-block">
                
            </div>
            <div class="col-md-4 login-form-2">
                <form action="<?php echo base_url('controlador/validation'); ?>" method="POST">
                <h1 class="text-center ">BIENVENIDOO</h1>
                <h4 class="lead text-center ">Login</h4>
                <img src="<?php echo base_url(); ?>/img/logoUpesWeb.png" width="200" height="200" class="rounded mx-auto d-block">
                <form>
                    <div class="form-group">
                    
                        <input type="text" class="form-control" placeholder="Email" value="" name="email"/><br>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Contraseña" value=""  name="password"/><br>
                    </div>
                    <div class="form-group text-center">
                        <input type="submit" class="btnSubmit btn btn-secondary" value="Iniciar Sesión" />
                    </div><br>
                   
                </form>
            </div>
        </div>
    </div>
</body>

</html>