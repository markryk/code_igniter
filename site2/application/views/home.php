<?php $this->load->view('header'); ?>
    <div class="linha">
        <section>
            <div class="coluna col3 sidebar">
                <h2 class="font"> Clientes satisfeitos </h2>
                <ul class="sem marcador sem padding">
                    <li><a href=""> Nome da empresa 1 </a></li>
                    <li><a href=""> Nome da empresa 2 </a></li>
                    <li><a href=""> Nome da empresa 3 </a></li>
                    <li><a href=""> Nome da empresa 4 </a></li>
                    <li><a href=""> Nome da empresa 5 </a></li>
                    <li><a href=""> Nome da empresa 6 </a></li>
                    <li><a href=""> Nome da empresa 7 </a></li>
                </ul>
                <!--<a href="<?php //echo base_url('clientes'); ?>" class="botao"> Ver todos &raquo;</a>-->
                <a href="clientes" class="botao"> Ver todos &raquo;</a>
            </div>
            <div class="coluna col9">
                <h2 class="font"> Site feito com CodeIgniter no backend </h2>
                <!--<img src="<?php //echo base_url('assets/img/thumb-grande.jpg') ?>" alt=""/>-->
                <img src="assets/img/codeigniter2.png" alt=""/>
                <p> CodeIgniter is an Application Development Framework - a toolkit - for people who build web sites using PHP. Its goal is to enable you to develop projects much faster than you could if you were writing code from scratch, by providing a rich set of libraries for commonly needed tasks, as well as a simple interface and logical structure to access these libraries. CodeIgniter lets you creatively focus on your project by minimizing the amount of code needed for a given task.</p>
                <!--<a href="<?php //echo base_url('clientes'); ?>" class="botao"> Ver outros trabalhos &raquo;</a>-->
            </div>
        </section>
    </div>
    <div class="conteudo-extra">
        <div class="linha">
            <div class="coluna col7">
                <section>
                    <h2 class="font"> Como um site pode ajudar a sua empresa </h2>
                    <p> Lorem ipsum dolor sit amet... </p>
                    <p> Lorem ipsum dolor sit amet... </p>
                    <p> Lorem ipsum dolor sit amet... </p>
                </section>
            </div>
            <?php $this->load->view('noticias'); ?>
        </div>
    </div>
<?php $this->load->view('footer'); ?>