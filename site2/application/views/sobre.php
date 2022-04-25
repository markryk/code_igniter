<?php $this->load->view('header'); ?>
<div class="linha">
    <section>
        <div class="coluna col8">
            <h2 class="font"> Sobre mim </h2>
            <p> Marcos Henrique, também conhecido como Mark, Designer gráfico e desenvolvedor web, eterno aprendiz de novas tecnologias... Prazer, eu 🙂 </p>
        </div>

        <div class="coluna col4 sidebar">
            <h2 class="font"> Formação Profissional </h2>
            <img src="<?php echo base_url('assets/img/formatura.jpg') ?>" alt=""/>

            <ul>
                <li> Análise e desenvolvimento de sistemas pela Fatene </li>
            </ul>
            <br>

            <h2 class="font"> Áreas de conhecimento em desenvolvimento web </h2>
            <ul>
                <li> HTML e CSS </li>
                <li> Bootstrap </li>
                <li> Javascript e Jquery </li>
                <li> PHP </li>
                <li> Codeigniter </li>
            </ul>
            <br>

            <h2 class="font"> Áreas de conhecimento em design gráfico </h2>
            <ul>
                <li> Inkscape e GIMP </li>
                <li> Photoshop e Illustrator </li>
            </ul>
        </div>
    </section>
</div>
<div class="conteudo-extra">
    <div class="linha">
        <div class="coluna col7">
            <section>
                <h2></h2>
                <p></p>
                <p></p>
                <p></p>
            </section>
        </div>
        <?php $this->load->view('noticias'); ?>
    </div>
</div>
<?php $this->load->view('footer'); ?>