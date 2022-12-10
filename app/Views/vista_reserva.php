<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reserva</title>
</head>

<body>
    <?= $this->include('recursos.php') ?>
    <?= $this->include('menu.php') ?>
    <?php

    if (session()->getFlashdata('estado')) {
        echo session()->getFlashdata('estado');
    }
    ?>

    <div class="container pt-3 ">
        <div class="card">
            <div class="card-header lead text-center text-light bg-dark">
                Datos de la reserva
            </div>
            <div class="card-body">

                
                <br>
                <br>
                <table id="tablaE" class="mb-2 table table-striped table-bordered border-primary table-hover display">

                    <thead>
                        <th>ID CLIENTE</th>
                        <th>NOMBRES</th>
                        <th>APELLIDOS</th>
                        <th>DIAS</th>
                        <th>TELÉFONO</th>
                        <th>DIRECCION</th>
                        <th>DUI</th>
                        <th>ACCIONES</th>
                    </thead>
                    <tbody>
                        <?php if ($auto) : ?>
                            <?php foreach ($auto as $row) : ?>
                                <tr>
                                    <td><?php echo $row['id']; ?></td>
                                    <td><?php echo $row['nombres']; ?></td>
                                    <td><?php echo $row['apellido']; ?></td>
                                    <td><?php echo $row['dias']; ?></td>
                                    <td><?php echo $row['telefono']; ?></td>
                                    <td><?php echo $row['direccion']; ?></td>
                                    <td><?php echo $row['dui']; ?></td>
                                    <td>
                                    <a href="<?= base_url('controlador/edit/'.$row['id'])?>" type="button" class="btn btn-outline-info"><i class="fa-solid fa-pen"></i></a>
                                        <a href="<?= base_url()?>/controlador/delete/<?=$row['id']?>" type="button" class="btn btn-outline-danger"><i class="fa-regular fa-trash-can"></i></a>
                                        <path d="M9.5 0a.5.5 0 0 1 .5.5.5.5 0 0 0 .5.5.5.5 0 0 1 .5.5V2a.5.5 0 0 1-.5.5h-5A.5.5 0 0 1 5 2v-.5a.5.5 0 0 1 .5-.5.5.5 0 0 0 .5-.5.5.5 0 0 1 .5-.5h3Z"/>
                                        <path d="M3 2.5a.5.5 0 0 1 .5-.5H4a.5.5 0 0 0 0-1h-.5A1.5 1.5 0 0 0 2 2.5v12A1.5 1.5 0 0 0 3.5 16h9a1.5 1.5 0 0 0 1.5-1.5v-12A1.5 1.5 0 0 0 12.5 1H12a.5.5 0 0 0 0 1h.5a.5.5 0 0 1 .5.5v12a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5v-12Z"/>
                                        <path d="M10.854 7.854a.5.5 0 0 0-.708-.708L7.5 9.793 6.354 8.646a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0l3-3Z"/>
                                        </svg></a>
                                       
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </tbody>
                </table>

            </div>
        </div>
    </div>


    <script>
        $(document).ready(function() {
            $('#tablaE').DataTable({
                scrollY: '50vh',
                scrollCollapse: true,
                dom: 'Bfrtip',
                reponsive: true,
                paging: true,
                buttons: [{
                        extend: 'excelHtml5',
                        text: '<i class="fas fa-file-excel"></i>',
                        titleAttr: 'Exportar a Excel',
                        className: 'btn btn-success'
                    },
                    {
                        extend: 'pdfHtml5',
                        text: '<i class="fas fa-file-pdf"></i>',
                        titleAttr: 'Exportar a PDF',
                        className: 'btn btn-danger'
                    },
                    {
                        extend: 'print',
                        text: '<i class="fas fa-print"></i>',
                        titleAttr: 'Imprimir',
                        className: 'btn btn-info'
                    }



                ]
            });
        });
    </script>

</body>

</html>