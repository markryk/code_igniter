<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Noticia extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->model('option_model', 'option');
		$this->load->model('noticia_model', 'noticia');
	}

	public function index() {
		redirect('noticia/listar', 'refresh'); //método padrão
		//para onde vai, qdo eu clicar em noticia
	}

	public function listar() {
		//verifica se o usuário está logado
		verifica_login();

		//carrega view
		$dados['titulo'] = 'MarkRyk site - Listagem de notícias';
		$dados['h2'] = "Listagem de notícias";
		$dados['tela'] = "listar";
		$dados['noticias'] = $this->noticia->get();
		$this->load->view('painel/noticias', $dados);
	}

	public function cadastrar() {
		//verifica se o usuário está logado
		verifica_login();

		//Regras da validação
		$this->form_validation->set_rules('titulo', 'TITULO', 'trim|required');
		$this->form_validation->set_rules('conteudo', 'CONTEUDO', 'trim|required');

		//Verifica a validação
		if($this->form_validation->run() == FALSE):
			if(validation_errors()):
				set_msg(validation_errors());
			endif;
		else:
			$this->load->library('upload', config_upload());
			if ($this->upload->do_upload('imagem')):
				//upload foi efetuado
				$dados_upload = $this->upload->data();
				$dados_form = $this->input->post();
				$dados_insert['titulo'] = $dados_form['titulo'];
				$dados_insert['conteudo'] = $dados_form['conteudo'];
				$dados_insert['imagem'] = $dados_upload['file_name'];
				//salvar no banco de dados
				if ($id = $this->noticia->salvar($dados_insert)):
					set_msg('<p> Notícia cadastrada com sucesso. </p>');
					redirect('noticia/listar', 'refresh');
				else:
					set_msg('<p> Erro! Notícia não cadastrada </p>');
				endif;
			else:
				//erro no upload
				$msg = $this->upload->display_errors();
				$msg .= '<p> São permitidos arquivos JPG e PNG de até 512KB. </p>';
				set_msg($msg);
			endif;
		endif;

		//carrega view
		$dados['titulo'] = 'MarkRyk site - Cadastro de notícias';
		$dados['h2'] = "Cadastro de notícias";
		$dados['tela'] = "cadastrar";
		$this->load->view('painel/noticias', $dados);
	}
}