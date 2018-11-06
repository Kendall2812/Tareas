<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller {

    //controlador por defecto
    public function index()
    {
        $this->load->view("usuario/register");
    }

    public function view_user(){
        //llamo a el modelo
        $this->load->model("Usuarios_model");
        $tabla['datos'] = $this->Usuarios_model->readUser();
        $this->load->view("usuario/delete",$tabla);
    }
    
    //funcion para agregar
    public function insertUser(){
        $cedula = $_POST['cedula'];

        $datos = array();
        $datos['cedula'] = $_POST['cedula'];
        $datos['nombre'] = $_POST['nombre'];
        $datos['apellido'] = $_POST['apellido'];
        $datos['telefono'] = $_POST['telefono'];

        //llamo a el modelo
        $this->load->model("Usuarios_model");
        $mensaje['msj'] = $this->Usuarios_model->insertUser($datos);
        $this->load->view("usuario/register",$mensaje);
    }

    public function deleteUser(){ 
        $cedula = $_POST['cedula'];
        $this->load->model("Usuarios_model");
        $result = $this->Usuarios_model->deleteUser($cedula);
        if($result){
            redirect(base_url('usuarios/view_user'));
        }
        else{
            redirect(base_url('usuarios/view_user'));
        }
        
    }

}