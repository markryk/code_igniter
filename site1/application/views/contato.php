<?php $this->load->view('header'); ?>
<div class="linha">
    <section>
        <div class="coluna col5 sidebar">
            <h3>Localização</h3>
            <img src="<?php echo base_url('assets/img/mapa.jpg') ?>" alt=""/>
            <ul class="sem padding sem marcador">
                <li>Rua Guaratingueta 568</li>
                <li>Bairro Cidade Salvador</li>
                <li>jacareí - SP</li>
            </ul>
            <h3>Contato Direto</h3>
            <ul class="sem padding sem marcador"
                <li>Fone:<strong>(00) 39529884</strong>
                <li>Email: <strong>luckas.ribeiro2015@gmail.com</strong></li>
                <li>Skype: <strong>Lucas Ribeiro</strong></li>
            </ul>
        </div>
        <div class="coluna col7 contato">
            <h2>Envie uma mensagem</h2>

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
        <div class="coluna col7">
            <section>
                <h2>metodo alternativo de contato</h2>
                <p>chama no zap la que eu respondo: (12) 988775469</p>
                <p>se nao conseguir pau no seu cu otario huahuah</p>
                </p>
            </section>
        </div>
        <?php $this->load->view('noticias'); ?>
    </div>
</div>
<?php $this->load->view('footer'); ?>