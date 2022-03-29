<!doctype html>

<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title> <?php echo $titulo; ?></title>
        <link rel="stylesheet" href="<?php echo base_url('assets/css/normalize.css') ?>"/>
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet"/>
        <link rel="stylesheet" href="<?php echo base_url('assets/css/estilo.css') ?>" />
        <link rel="stylesheet" href="<?php echo base_url('assets/css/painel.css') ?>" />
    </head>
    <body>
        <div class="header">
            <div class="linha">
                <header>
                    <div class="coluna col4">
                        <h1 class="logo"> MarkRyk Site - Painel </h1>
                    </div>
                    <div class="coluna col8">
                        <nav>
                            <ul class="menu inline sem-marcador">
                                <li><a target="_blank" href="<?php echo base_url(); ?>"> Ver site </a></li>
                                <li><a href="<?php echo base_url('noticia'); ?>"> Notícias </a></li        >
                                <li><a href="<?php echo base_url('setup'); ?>"> Configurações </a></li>
                                <li><a href="<?php echo base_url('setup/logout'); ?>"> Sair </a></li>
                            </ul>
                        </nav>
                    </div>
                </header>
            </div>
        </div>