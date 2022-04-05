<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if(!function_exists('set_msg')):
	function set_msg($msg=NULL){
		$ci = & get_instance();
		$ci->session->set_userdata('aviso', $msg);
	}
endif;

if(!function_exists('get_msg')):
	function get_msg($destroy=TRUE){
		$ci = & get_instance();
		$retorno = $ci->session->userdata('aviso');
		if($destroy) $ci->session->unset_userdata('aviso');
		return $retorno;
	}
endif;

if(!function_exists('verifica_login')):
	//verifica se o usuário está logado; se não, redireciona para outra página
	function verifica_login($redirect='setup/login'){
		$ci = & get_instance();
		if($ci->session->userdata('logged') != TRUE):
			set_msg('<p> Acesso restrito! Faça login para continuar </p>');
			redirect($redirect, 'refresh');
		endif;
	}
endif;

if(!function_exists('config_upload')):
	//define as configurações de upload de imagens/arquivos
	function config_upload($path='./uploads', $types='jpg|png', $size=512){
		$config['upload_path'] = $path;
		$config['allowed_types'] = $types;
		$config['max_size'] = $size;
		return $config;
	}
endif;