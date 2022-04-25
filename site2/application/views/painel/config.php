<?php $this->load->view('painel/header'); ?>
<body>
    <div class="linha">
        <div class="coluna col3">&nbsp;</div>
        <div class="coluna col6">
            <h2><?php echo $h2; ?></h2>
            <?php
                if($msg = get_msg()):
                    echo '<div class="msg-box">'.$msg.'</div>';
                endif;
                echo form_open();
                echo form_label('Nome para login: ', 'login');
                echo form_input('login', set_value('login'), array('autofocus' => 'autofocus'));
                echo form_label('Email do administrador do site: ', 'email');
                echo form_input('email', set_value('email'));
                echo form_label('Senha: (para manter senha anterior, deixe em branco)', 'senha');
                echo form_password('senha');
                echo form_label('Repita a senha: ', 'senha2');
                echo form_password('senha2');
                echo form_label('Nome do site: ', 'nome_site');
                echo form_input('nome_site', set_value('nome_site'));
                echo form_submit('enviar', 'Salvar dados', array('class' => 'botao'));
                echo form_close();
            ?>
        </div>
        <div class="coluna col3">&nbsp;</div>
    </div>        
</body>
<?php $this->load->view('painel/footer'); ?>