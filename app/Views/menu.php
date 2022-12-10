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
    <nav class="main-menu bg-secondary">
        <ul>
            <li>
                <a href="<?php echo base_url('Empleados/dashboard'); ?>">
                    <i class="fa fa-home "></i>
                    <span class="nav-text">
                        Dashboard
                    </span>
                </a>

            </li>
            <li class="has-subnav">
                <a href="<?php echo base_url('CargaAController/DataCarga'); ?>">
                <i class="fa fa-laptop" aria-hidden="true"></i>
                    <span class="nav-text">
                        Carga Académica
                    </span>
                </a>
            </li>
            <li class="has-subnav">
                <a href="<?php echo base_url('Empleados/DataEmpleados'); ?>">
                
                <i class="fa fa-list-alt" aria-hidden="true"></i>
                    <span class="nav-text">
                        Empleados
                    </span>
                </a>
            </li>
            <li class="has-subnav">
                <a href="<?php echo base_url('Materias/DataMateria'); ?>">
                <i class="fa fa-book" aria-hidden="true"></i>
                    <span class="nav-text">
                        Materias
                    </span>
                </a>

            </li>
            <li>
                <a href="<?php echo base_url('Materiasasignacion/DataMateriaanidada'); ?>">
                <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                    <span class="nav-text">
                        Asignación de materias
                    </span>
                </a>
            </li>
            <li>
                <a href="<?php echo base_url('CarreraController/DataCarrera'); ?>">
                <i class="fa fa-table" aria-hidden="true"></i>
                    <span class="nav-text">
                        Carreras
                    </span>
                </a>
            </li>
            <li class="has-subnav">
                <a href="<?php echo base_url('Cargocontroller/DataCargo'); ?>">
                    <i class="fa fa-users"></i>
                    <span class="nav-text">
                        Cargo Empleados
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