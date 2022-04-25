<!doctype html>

<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title> <?php echo $titulo; ?></title>
        <link rel="stylesheet" href="assets/css/normalize.css"/>
        <link rel="stylesheet" href="assets/css/estilo.css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet"/>

        <!--<link rel="stylesheet" href="<?php //echo base_url('assets/css/estilo.css') ?>" />-->
        <!--<link rel="stylesheet" href="<?php //echo base_url('assets/css/normalize.css') ?>"/>-->

    </head>
    <body>
        <div class="header">
            <div class="linha">
                <header>
                    <div class="coluna col2">
                        <img width="100" height="auto" src="<?php echo base_url('assets/img/icon.png'); ?>">
                    </div>
                    <div class="coluna col3 sem-margin">
                        <h1 class="logo">
                            <?php 
                                /*if ($nome_site = $this->option->get_option('nome_site')): echo $nome_site;
                                else: echo "Falta configurar";
                                endif;*/
                                echo $this->option->get_option('nome_site', 'Falta configurar');
                            ?>
                        </h1>
                    </div>
                    <div class="coluna col7">
                        <nav>
                            <ul class="menu inline sem-marcador">
                                <li><a href="<?php echo base_url(); ?>"> Home </a></li>                         
                                <li><a href="clientes"> Clientes </a></li>                                
                                <li><a href="servicos"> Serviços </a></li>                                
                                <li><a href="sobre"> Sobre </a></li>                                
                                <li><a href="contato"> Contato </a></li>

                                <!--<li><a href="<?php echo base_url(); ?>"> Home </a></li>
                                <li><a href="<?php //echo base_url('clientes'); ?>"> Clientes </a></li>
                                <li><a href="<?php //echo base_url('servicos'); ?>"> Serviços </a></li>
                                <li><a href="<?php //echo base_url('sobre'); ?>"> Sobre </a></li>
                                <li><a href="<?php //echo base_url('contato'); ?>"> Contato </a></li>-->
                            </ul>
                        </nav>
                    </div>
                </header>
            </div>
        </div>