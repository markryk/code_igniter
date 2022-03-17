<?php $this->load->view('header'); ?>
<div class="linha">
    <section>
        <div class="coluna col8">
            <h2>sobre mim</h2>
            <p>meu nome é Lucas Monteiro Ribeiro, sou estudante da Faculdadede tecnologia de são jose dos campos no curso de analise
                e desenvolvimentode sistemas, (Fatecde sao jose dos campos).
            </p>
        </div>

        <div class="coluna col4 sidebar">
            <h3>Formação Profissional</h3>
            <img src="<?php echo base_url('assets/img/formatura.jpg') ?>" alt=""/>
            <ul>
                <li>estudante do curso de analise e desenvolvimento de sistemas na Faculdadede de tecnologia de sao jose dos campos.</li>
                <li>Especialidade em Desenvolvimento web</li>
            </ul>
            <h3>Areas de conhecimento</h3>
            <ul>
                <li>HTML e CSS</li>
                <li>Bootstrap</li>
                <li>java script e jquery</li>
                <li>PHP</li>
                <li>codeigniter</li>
            </ul>
        </div>
    </section>
</div>
<div class="conteudo-extra">
    <div class="linha">
        <div class="coluna col7">
            <section>
                <h2>Curiosidades</h2>
                <p>paragrafo aleatorio</p>
                <P>pararafo aleatorio</P>
                <p>paragrafo aleatorio</p>
            </section>
        </div>
        <?php $this->load->view('noticias'); ?>
    </div>
</div>
<?php $this->load->view('footer'); ?>