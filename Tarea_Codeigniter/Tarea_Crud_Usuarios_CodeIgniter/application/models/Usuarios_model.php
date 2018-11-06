<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios_model extends CI_Model{

    public $msj = "";

    public function __construct() {
        //llamamos al constructor de la clase padre
        parent::__construct();
         
        //cargamos la base de datos
        $this->load->database();
    }

    //funcion para agregar
    public function insertUser($datos){
        
        $result = $this->db->insert('usuarios', $datos);
        if($result){
            $msj = "Se registro de manera correcta.";
        }
        else{
            $msj = "No se pudo registrar.";
        }
        return $msj;
    }

    public function readUser(){
        $datos = $this->db->get('usuarios');
        return $datos->result();
    }

    public function deleteUser($cedula){
        $this->db->where('cedula', $cedula);
		$verificar = $this->db->delete('usuarios');
        if($verificar){
            return true;
        }
        else{
           return false;
        }
    }

}

?>