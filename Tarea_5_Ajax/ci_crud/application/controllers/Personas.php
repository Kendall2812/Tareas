<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Personas extends CI_Controller {

	public function __construct()
	{
	 	parent::__construct();
		$this->load->helper('url');
	 	$this->load->model('persona_model');
	}


	public function index()
	{
		$data['person']=$this->persona_model->get_all_person();
		$this->load->view('view_personas',$data);
	}
	public function perosona_add()
	{
		$data = array(
			'cedula' => $this->input->post('cedula'),
			'nombre' => $this->input->post('nombre'),
			'apellido' => $this->input->post('apellido'),
			'telefono' => $this->input->post('telefono'),
		);
		$insert = $this->persona_model->pers_add($data);
		echo json_encode(array("status" => TRUE));
	}

	public function person_delete($id)
	{
		$this->persona_model->delete_by_id($id);
		echo json_encode(array("status" => TRUE));
	}



}
