<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pagina extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('url');
	}

	public function index() {
		$dados['titulo'] = 'MarkRyk site';
		$this->load->view('home', $dados);
	}

	public function clientes() {
		$dados['titulo'] = 'Clientes - MarkRyk site';
		$this->load->view('clientes', $dados);
	}

	public function servicos() {
		$dados['titulo'] = 'O que eu faço - MarkRyk site';
		$this->load->view('servicos', $dados);
	}

	public function sobre() {
		$dados['titulo'] = 'Sobre mim - MarkRyk site';
		$this->load->view('sobre', $dados);
	}

	public function contato() {
		$dados['titulo'] = 'Fale comigo - MarkRyk site';
		$this->load->view('contato', $dados);
	}
}