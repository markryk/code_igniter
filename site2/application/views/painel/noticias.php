<?php $this->load->view('painel/header'); ?>
<body>
    <div class="linha">
        <div class="coluna col2">
            <ul class="sem-marcador sem-padding">
                <li><a href="<?php echo base_url('noticia/cadastrar'); ?>"> INSERIR </a></li>
                <li><a href="<?php echo base_url('noticia/listar'); ?>"> LISTAR </a></li>
            </ul>
        </div>
        <div class="coluna col10">
            <h2><?php echo $h2; ?></h2>
            <?php
                if($msg = get_msg()):
                    echo '<div class="msg-box">'.$msg.'</div>';
                endif;
                switch ($tela):
                    case 'listar':
                        if (isset($noticias) && sizeof($noticias) > 0):
                            ?>
                            <table>
                                <thead>
                                    <th align="left"> Título </th>
                                    <th align="right"> Ações </th>
                                </thead>
                                <tbody>
                                    <?php foreach($noticias as $linha): ?>
                                    <tr>
                                        <td class="titulo-noticia"><?php echo $linha->titulo; ?></td>
                                        <td align="right" class="acoes">
                                            <?php echo anchor('noticia/editar/'.$linha->id, 'Editar'); ?> |
                                            <?php echo anchor('noticia/excluir/'.$linha->id, 'Excluir'); ?> |
                                            <?php echo anchor('post/'.$linha->id, 'Ver', array('target' => '_blank')); ?>
                                        </td>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                            <?php
                        else:
                            echo '<div class="msg-box"><p> Nenhuma notícia cadastrada! </p></div>';
                        endif;
                    break;
                    case 'cadastrar':
                        echo form_open_multipart();
                        echo form_label('Titulo: ', 'titulo');
                        echo form_input('titulo', set_value('titulo'));
                        echo form_label('Conteudo: ', 'conteudo');
                        echo form_textarea('conteudo', to_html(set_value('conteudo')), array('class' => 'editorhtml'));
                        echo form_label('Imagem da notícia (thumbnail): ', 'imagem');
                        echo form_upload('imagem');
                        echo form_submit('enviar', 'Salvar notícia', array('class' => 'botao'));
                        echo form_close();
                    break;
                    case 'editar':
                        echo form_open_multipart();
                        echo form_label('Titulo: ', 'titulo');
                        echo form_input('titulo', set_value('titulo', to_html($noticia->titulo)));
                        echo form_label('Conteudo: ', 'conteudo');
                        echo form_textarea('conteudo', to_html(set_value('conteudo', to_html($noticia->conteudo))), array('class' => 'editorhtml'));
                        echo form_label('Imagem da notícia (thumbnail): ', 'imagem');
                        echo form_upload('imagem');
                        echo '<p><small> Imagem atual: </small><br><img src="'.base_url('uploads/'.$noticia->imagem).'" class="thumb-edicao"></p>';
                        echo form_submit('enviar', 'Salvar notícia', array('class' => 'botao'));
                        echo form_close();
                    break;
                    case 'excluir':
                        echo form_open_multipart();
                        echo form_label('Titulo: ', 'titulo');
                        echo form_input('titulo', set_value('titulo', to_html($noticia->titulo)));
                        echo form_label('Conteudo: ', 'conteudo');
                        echo form_textarea('conteudo', to_html(set_value('conteudo', $noticia->conteudo)), array('class' => 'editorhtml'));
                        echo '<p><small> Imagem: </small><br><img src="'.base_url('uploads/'.$noticia->imagem).'" class="thumb-edicao"></p>';
                        echo form_submit('enviar', 'Excluir notícia', array('class' => 'botao'));
                        echo form_close();
                    break;
                endswitch;
            ?>
        </div>
    </div>        
</body>
<?php $this->load->view('painel/footer'); ?>