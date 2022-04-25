<?php $this->load->view('header'); ?>
<div class="linha">
    <section>
        <div class="coluna col5 sidebar">
            <h2 class="font"> Localização </h2>
            <img src="<?php echo base_url('assets/img/mapa.jpg') ?>" alt=""/>
            <ul class="sem padding sem marcador">
                <li> Rua Xxx Xxxxxx, 888 </li>
                <li> Bairro Xxxxxxx </li>
                <li> Fortaleza - CE</li>
            </ul>
            <h2 class="font"> Contato direto </h2>
            <ul class="sem padding sem marcador">
                <li> Fone: <strong> (XX) Xxxxx-xxxx </strong>
                <li> Email: <strong> marcus.henrick.marcushenrick@gmail.com </strong></li>
            </ul>
        </div>
        <div class="coluna col7 contato">
            <h2 class="font">Envie uma mensagem</h2>

            <?php
                if ($form_error):
                    echo "<p>".$form_error."</p>";
                endif;
                echo form_open('pagina/contato');
                echo form_label('Seu nome: ', 'nome');
                echo form_input('nome', set_value('nome'));
                echo form_label('Seu email', 'email');
                echo form_input('email', set_value('email'));
                echo form_label('Assunto: ', 'assunto');
                echo form_input('assunto', set_value('assunto'));
                echo form_label('Mensagem: ', 'mensagem');
                echo form_textarea('mensagem', set_value('mensagem'));
                echo form_submit('enviar', 'Enviar mensagem', array('class' => 'botao'));
                echo form_close();
            ?>
        </div>
    </section>
</div>
<div class="conteudo-extra">
    <div class="linha">
        <div class="coluna col6">
            <section>
                <h2 class="font"> Minhas redes sociais</h2>
                <a href="https://www.instagram.com/marcushenrick_dwg/" target="_blank"><ion-icon name="logo-instagram"></ion-icon></a>
                <a href="https://github.com/markryk" target="_blank"><ion-icon name="logo-github"></ion-icon></a>
                <a href="https://gitlab.com/markryk" target="_blank"><ion-icon name="logo-gitlab"></ion-icon></a>
                <a href="https://www.linkedin.com/in/marcos-henrique-1536b41b2/" target="_blank"><ion-icon name="logo-linkedin"></ion-icon></a>
            </section>
        </div>
        <div class="coluna">
            <?php $this->load->view('noticias'); ?>
        </div>
    </div>
</div>
<?php $this->load->view('footer'); ?>