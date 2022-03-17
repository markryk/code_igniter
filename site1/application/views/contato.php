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
            <form action="">
                <label for="nome">Seu nome: </label>
                <input type="text" name="nome" id="nome"/>
                <label for="email">Seu email:</label>
                <input type="email" name="email" id="email" />
                <label for="assunto">Assunto:</label>
                <input type="assunto" name="assunto" id="assunto" />
                <label for="mensagem">Escreva sua mensagem</label>
                <textarea name="mensagem: " id="mensagem"></textarea>
                <input type="submit" class="botao" name="enviar" value="Enviar &raquo;" />
            </form>
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