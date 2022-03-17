<!doctype html>

<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Lucas Ribeiro - Desenvolvimento web</title>
        <link rel="stylesheet" href="css/normalize.css"/>
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet"/>
        <link rel="stylesheet" href="css/estilo.css" />
    </head>
    <body>
        <div class="header">
            <div class="linha">
                <header>
                    <div class="coluna col4">
                        <h1 class="logo">Lucas Monteiro Ribeiro</h1>
                    </div>
                    <div class="coluna col8">
                        <nav>
                            <ul class="menu inline sem-marcador">
                                <li><a href="index.html">home</a></li>
                                <li><a href="clientes.html">clientes</a></li        >
                                <li><a href="servicos">serviços</a></li>
                                <li><a href="sobre.html">sobre</a></li>
                                <li><a href="contato.html">contato</a></li>
                            </ul>
                        </nav>
                    </div>
                </header>
            </div>
        </div>
        <div class="linha">
            <section>
                <div class="coluna col5 sidebar">
                    <h3>Localização</h3>
                    <img src="imagens/mapa.jpg" alt=""/>
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
                <div class="coluna col5">
                    <h3>ultimas noticias</h3>
                    <ul class="sem marcador sem padding noticias">
                        <li>
                            <img src="imagens/thumb-pequena.jpg" alt=""/>
                            <h4>titulo da noticia</h4>
                            <p>outro paragrafo aleatorio <a href="">leia mais &raquo;</a></p>
                        </li>

                        <li>
                            <img src="imagens/thumb-pequena.jpg" alt=""/>
                            <h4>titulo da noticia</h4>
                            <p>outro paragrafo aleatorio <a href="">leia mais &raquo;</a></p>
                        </li>

                        <li>
                            <img src="imagens/thumb-pequena.jpg" alt=""/>
                            <h4>titulo da noticia</h4>
                            <p>outro paragrafo aleatorio <a href="">leia mais &raquo;</a></p>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
        <div class="footer">
            <div class="linha">
                <footer>
                    <div class="coluna col12">
                        <sapn>&COPY; 2018 - Lucas Ribeiro Desenvolvimento web</sapn>
                    </div>
                </footer>
            </div>    
        </div>
    </body>
</html>