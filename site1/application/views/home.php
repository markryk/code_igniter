<?php $this->load->view('header'); ?>    
    <div class="linha">
        <section>
            <div class="coluna col3 sidebar">
                <h3>clientes satisfeitos</h3>
                <ul class="sem marcador sem padding">
                    <li><a href="">nome da empresa 1</a></li>
                    <li><a href="">nome da empresa 2</a></li>
                    <li><a href="">nome da empresa 3</a></li>
                    <li><a href="">nome da empresa 4</a></li>
                    <li><a href="">nome da empresa 5</a></li>
                    <li><a href="">nome da empresa 6</a></li>
                    <li><a href="">nome da empresa 7</a></li>
                </ul>
                <a href="<?php echo base_url('clientes'); ?>" class="botao"> Ver todos &raquo;</a>
            </div>
            <div class="coluna col9">
                <h2>Ultimo trabalho: <em>Empresa ABC</em></h2>
                <img src="<?php echo base_url('assets/img/thumb-grande.jpg') ?>" alt=""/>
                <p>paragrafo aleatorio</p>
                <a href="<?php echo base_url('clientes'); ?>" class="botao"> Ver outros trabalhos &raquo;</a>
            </div>
        </section>
    </div>
    <div class="conteudo-extra">
        <div class="linha">
            <div class="coluna col7">
                <section>
                    <h2>como um site pode ajudar a sua empresa</h2>
                    <p>paragrafo aleatorio</p>
                    <P>pararafo aleatorio</P>
                    <p>paragrafo aleatorio</p>
                </section>
            </div>
            <?php $this->load->view('noticias'); ?>
        </div>
    </div>
<?php $this->load->view('footer'); ?>