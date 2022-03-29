<!doctype html>

<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title> <?php echo $titulo; ?></title>
        <link rel="stylesheet" href="<?php echo base_url('assets/css/normalize.css') ?>"/>
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet"/>
        <link rel="stylesheet" href="<?php echo base_url('assets/css/estilo.css') ?>" />
    </head>
    <body>
        <div class="header">
            <div class="linha">
                <header>
                    <div class="coluna col4">
                        <h1 class="logo">
                            <?php 
                                /*if ($nome_site = $this->option->get_option('nome_site')): echo $nome_site;
                                else: echo "Falta configurar";
                                endif;*/
                                echo $this->option->get_option('nome_site', 'Falta configurar');
                            ?>
                        </h1>
                    </div>
                    <div class="coluna col8">
                        <nav>
                            <ul class="menu inline sem-marcador">
                                <li><a href="<?php echo base_url(); ?>"> Home </a></li>
                                <li><a href="<?php echo base_url('clientes'); ?>"> Clientes </a></li>
                                <li><a href="<?php echo base_url('servicos'); ?>"> Serviços </a></li>
                                <li><a href="<?php echo base_url('sobre'); ?>"> Sobre </a></li>
                                <li><a href="<?php echo base_url('contato'); ?>"> Contato </a></li>
                            </ul>
                        </nav>
                    </div>
                </header>
            </div>
        </div>