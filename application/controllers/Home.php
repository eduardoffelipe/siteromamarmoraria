<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$dados['titulo'] = "Marmoraria Roma :: Home";

		$this->load->view('templates/header', $dados);
		$this->load->view('pages/index', $dados);
		$this->load->view('templates/footer', $dados);
	}
}
