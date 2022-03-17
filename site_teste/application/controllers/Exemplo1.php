<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Exemplo1 extends CI_Controller {

	function __construct(){
		parent::__construct();
		//$this->load->model('Exemplo1_model');
		$this->load->model('Exemplo1_model', "apelido_model");
	}

	public function index() {
		$dados['titulo'] = "Primeira view";
		$dados['conteudo'] = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";
		//echo "Executado método do Controller";
		$this->load->view('exemplo1', $dados);
	}

	public function login() {
		/*echo "Executado método login do controller e passado o parâmetro ";
		echo $this->uri->segment(3);*/
		//$this->Exemplo1_model->salvar();
		$this->apelido_model->salvar();
	}
}
