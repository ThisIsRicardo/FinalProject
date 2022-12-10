<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar Reserva</title>
</head>

<body>
    <?= $this->include('recursos.php') ?>
    <?= $this->include('menu.php') ?>

    <?php

    use Kint\Zval\Value;

    if (session()->getFlashdata('estado')) {
        echo session()->getFlashdata('estado');
    }
    ?>

    <div class="card col-6 mx-auto my-5">
        <div class="card-header text-center lead text-light bg-dark">
            Formulario para Modificación de Reserva
        </div>
        <div class="card-body">
            <a href="<?php echo base_url('controlador/Data'); ?>" role="button" class="btn btn-outline-dark mb-5 text-left"><i class="fa-solid fa-arrow-left"></i> Volver</a>
            <form action="<?= base_url('controlador/update') ?>" method="POST">
                <div class="row g-3">
                    <div class="col">
                        <label class="form-label"><strong><small>Nombres:</small></strong></label>
                        <input type="text" class="form-control" value="<?= $data['nombres']?>" name="nombre_e">
                    </div>
                </div>
                    <div class="col">
                        <label class="form-label"><strong><small>Apellidos:</small></strong></label>
                        <input type="text" class="form-control" value="<?= $data['apellido']?>" placeholder="Ex. McGill Campbell" name="apellido_e">
                    </div>
                
                <div class="col">
                        <label class="form-label"><strong><small>Días:</small></strong></label>
                        <input type="number" class="form-control" value="<?= $data['dias']?>" placeholder="Ex. McGill Campbell" name="dias">
                    </div>
                
                    <div class="col">
                        <label class="form-label"><strong><small>Teléfono:</small></strong></label>
                            <input type="text" class="form-control"  value="<?= $data['telefono']?>" placeholder="Ex. 7799-6644" name="telefono_e">
                    </div>
                

                
                    <div class="col">
                        <label class="form-label"><strong><small>Dirección:</small></strong></label>
                        <input class="form-control" value="<?= $data['direccion']?>" placeholder="Ex. Bosques de la paz, Ilopango Calle 6C Casa #44" name="direccion_e">
                    </div>
                
                
                    <div class="col">
                        <label class="form-label"><small><strong>DUI:</strong></small></label>
                        <input type="text" class="form-control" value="<?= $data['dui']?>" placeholder="Ex. 00628709-6" name="dui_e">
                    </div>
                
                
                    <div class="col">
                        <label class="form-label"><strong><small>Comentario</small></strong></label>
                        <input type="text" class="form-control" name="comentario" value="<?= $data['comentario']?>">
                    </div>
                
                <input type="hidden" name="id" value="<?= $data['id']?>">
                <div class="text-center">
                    
                <button type="submit" class="btn btn-dark mt-4 justify-content-center">Editar</button>
          </div>
        </div>
        </form>
    </div>
    


</body>

</html>