<?php

namespace App\Controllers;


use App\Models\Modelo;


class Controlador extends BaseController
{

    public function getData()
    {
        $m = model(Modelo::class);
        $data['auto'] = $m->mostrar();

        return view('vista_reserva', $data);
    }

    public function getdashboard()
    {

        return view('dashboard');
    }


    /*public function getCrear()
    {

        return view('/empleado/crear_empleado');
    }

    public function postAlmacenar()
    {

        $m = model(Modelo::class);
        $data = [
            'nombres' => $this->request->getPost('nombre_e'),
            'apellidos' => $this->request->getPost('apellido_e'),
            'dui' => $this->request->getPost('dui_e'),
            'telefono' => $this->request->getPost('telefono_e'),
            'fecha_nacimiento' => $this->request->getPost('fecha_nacimiento_e'),
            'fecha_contratacion' => $this->request->getPost('fecha_contratacion_e'),
            'direccion' => $this->request->getPost('direccion_e'),
            'estado_civil' => $this->request->getPost('estado_e'),
            'genero' => $this->request->getPost('genero_e'),
            'municipio' => $this->request->getPost('municipio_e'),
            'departamento' => $this->request->getPost('departamento_e'),
            //'foto' => $this->request->getPost('foto_e'),
        ];
        $m->save($data);


        return redirect()->to(base_url('Empleados/Crear'))->with('estado', '<script> swal("Exitoso", "Registro Guardado correctamente!", "success");</script>');
    }

    public function getdelete($id_empleado = null)
    {
        $delem = new EmpleadoModel();
        $delem->delete($id_empleado);
        return redirect()->to(base_url('Empleados/DataEmpleados'))->with('estado', '<script> swal("Exitoso", "Registro Eliminado correctamente!", "success");</script>');
    }

    public function getedit($id_empleado)
    {
        $model = new EmpleadoModel();
        $data = $model->getId($id_empleado);
        echo view('empleado/editar_empleado', compact('data'));
    }
    public function getdetails($id_empleado)
    {
        $model = new EmpleadoModel();
        $data = $model->getdetails($id_empleado);
        echo view('empleado/show_details', compact('data'));
    }

    public function postupdate()
    {


        $data = [
            'nombres' => $_POST['nombre_e'],
            'apellidos' => $_POST['apellido_e'],
            'dui' => $_POST['dui_e'],
            'telefono' => $_POST['telefono_e'],
            'fecha_nacimiento' => $_POST['fecha_nacimiento_e'],
            'fecha_contratacion' => $_POST['fecha_contratacion_e'],
            'direccion' => $_POST['direccion_e'],
            'estado_civil' => $_POST['estado_e'],
            'genero' => $_POST['genero_e'],
            'municipio' => $_POST['municipio_e'],
            'departamento' => $_POST['departamento_e'],
            //'foto' => $_POST['foto_e'],
        ];

        $id_empleado = $_POST['id'];
        $m = new EmpleadoModel();
        $m->updateDatos($id_empleado, $data);
        return redirect()->to(base_url('Empleados/DataEmpleados'))->with('estado', '<script> swal("Exitoso", "Registro Editado correctamente!", "success");</script>');
    }*/

    public function postValidation()
    {

        $email = $_POST['email'];
        $password = $_POST['password'];

        if ($email == 'adminupes@upes.com' && $password == 12345) {

            return redirect()->to(base_url('controlador/Data'))->with('estado', '<script> swal("Exitoso", "Sesión Iniciada Correctamente!", "success");</script>');
        } else {
            echo '<script>
    alert("Error, Información Incorrecta!");
    history.go(-1);
    </script>';
        }
    }
}