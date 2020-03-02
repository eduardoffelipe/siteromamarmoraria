<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produtos extends CI_Controller {

	public function index()
	{
		$dados['titulo'] = "Marmoraria Roma :: Produtos";

		$this->load->view('templates/header', $dados);
		$this->load->view('pages/produtos', $dados);
		$this->load->view('templates/footer', $dados);
	}
}
