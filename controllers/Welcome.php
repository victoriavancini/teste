<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('welcome_message');
	}
	
	public function formulario()
	{
		$this->load->view('form');
	}
	
		public function sobre()
	{
		$this->load->view('sobre');
	}


	public function post()
	{
		require_once APPATH."models/user.php";
		$this->load->model('model');
		$m = $this->model;
		$m->insert(new Usuario($_POST["nome"]));
	}
	
	public function listar()
	{
		require_once APPATH."models/user.php";
		$this->load->model('model');
		$m = $this->model;
		$usuarios= $m->searchAll();
		$data['usuarios'] = $usuarios;
		print_r($usuarios);
	}
	
	
}
