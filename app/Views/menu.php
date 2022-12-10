<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- menu -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/estilos/menu.css">
    
    <!-- iconos -->
    <!-- <script src="" crossorigin="anonymous"></script> -->

    <title>Menu</title>
</head>

<body>

    <div class="area"></div>
    <nav class="main-menu bg-dark">
        <ul>
            <li>
                <a href="#">
                    <i class="fa fa-home "></i>
                    <span class="nav-text">
                        Home
                    </span>
                </a>

            </li>
            <li class="has-subnav">
                <a href="#">
                <i class="fa fa-laptop" aria-hidden="true"></i>
                    <span class="nav-text">
                        Example 2
                    </span>
                </a>
            </li>
            <li class="has-subnav">
                <a href="#">
                
                <i class="fa fa-list-alt" aria-hidden="true"></i>
                    <span class="nav-text">
                        Example 3
                    </span>
                </a>
            </li>
            <li class="has-subnav">
                <a href="#">
                <i class="fa fa-book" aria-hidden="true"></i>
                    <span class="nav-text">
                        Example 4
                    </span>
                </a>

            </li>
            <li>
                <a href="#">
                <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                    <span class="nav-text">
                        Example 5
                    </span>
                </a>
            </li>
            <li>
                <a href="#">
                <i class="fa fa-table" aria-hidden="true"></i>
                    <span class="nav-text">
                        Example 6
                    </span>
                </a>
            </li>
            <li class="has-subnav">
                <a href="#">
                    <i class="fa fa-users"></i>
                    <span class="nav-text">
                        Example 7
                    </span>
                </a>
            </li>

        </ul>

        <ul class="logout">
            <li>
                <a href="<?php echo base_url('Login/login'); ?>">
                    <i class="fa fa-power-off "></i>
                    <span class="nav-text">
                        Cerrar Sesión
                    </span>
                </a>
            </li>
        </ul>
    </nav>
</body>

</html>