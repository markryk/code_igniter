<?php $this->load->view('header'); ?>
<div class="linha">
    <section>
        <div class="coluna col8">
            <h2> <?php echo $not_titulo; ?> </h2>
            <?php echo $not_conteudo; ?>
        </div>

        <div class="coluna col4 sidebar">
            <h3> Dados do post </h3>
            <img src="<?php echo base_url('uploads./'.$not_imagem) ?>" alt="<?php echo $not_titulo; ?>"/>
            <ul>
                <li> Publicada em: </li>
                <li> Autor: </li>
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