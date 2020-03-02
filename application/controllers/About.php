<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

	public function index()
	{
		$dados['titulo'] = "Marmoraria Roma :: Sobre Nós";

		$this->load->view('templates/header', $dados);
		$this->load->view('pages/about', $dados);
		$this->load->view('templates/footer', $dados);
	}
}
