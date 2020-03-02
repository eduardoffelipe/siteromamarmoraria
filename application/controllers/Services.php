<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Services extends CI_Controller {

	public function index()
	{
		$dados['titulo'] = "Marmoraria Roma :: Serviços";

		$this->load->view('templates/header', $dados);
		$this->load->view('pages/servicos', $dados);
		$this->load->view('templates/footer', $dados);
	}
}
