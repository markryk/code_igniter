<?php $this->load->view('header'); ?>
<div class="linha">
    <section>
        <div class="coluna col4 sidebar">
            <h2 class="font"> O que eu faço? </h2>
            <img src="<?php echo base_url('assets/img/ideia.jpg') ?>" alt=""/>
            <ul>
                <li> Identidade visual </li>
                <li> Layout para sites </li>
                <li> Sites corporativos </li>
                <li> Lojas virtuais </li>
                <li> Email e marketing </li>
                <li> Marketing </li>
                <li> Consultoria estratégica </li>
            </ul>
        </div>
        <div class="coluna col8">
            <h2> Identidade visual </h2>
            <p> Lorem ipsum para identidade visual </p>

            <h2> Layout para sites </h2>
            <p> Lorem ipsum para layout para sites </p>

            <h2> Sites corpotativos </h2>
            <p> Lorem ipsum para sites corporativos </p>

            <h2> Lojas virtuais </h2>
            <p> Lorem ipsum para lojas virtuais </p>

            <h2> Email e marketing </h2>
            <p> Lorem ipsum para email e marketing </p>

            <h2> Marketing </h2>
            <p> Lorem ipsum para marketing </p>

            <h2> Consultoria estratégica </h2>
            <p> Lorem ipsum para consultoria estratégica </p>
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