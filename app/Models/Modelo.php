<?php

    namespace App\Models;

use CodeIgniter\Model;

    //Primera clase para el modelo que hereda de la clase por defecto para modelos en Codeigniter
    class Modelo extends Model {

        //Propiedades para el Mapeo de la tabla en la base de datos
        //En esta caso para la tabla de Empleados 
        protected $table = 'reserva';
        protected $primaryKey = 'id';
        //protected $useAutoIncrement = true;
        protected $allowedFields = [
            'nombres',
            'apellido',
            'dias',
            'telefono',
            'direccion',
            'fecha_contratacion',
            'direccion',
            'dui',
            'comentario',
        ];

        public function mostrar(){
            $db = db_connect();
            $sql = "SELECT * FROM  reserva ";

            $quey = $db->query($sql);
            return $quey->getResult('array');
        }

        public function getId($id){
            return $this->where('id',$id)->first($id);
        }

        public function getdetails($id){
            return $this->where('id',$id)->first($id);
        }

        public function updateDatos($id, $data){
            return $this->update($id, $data);
        }

    }
?>