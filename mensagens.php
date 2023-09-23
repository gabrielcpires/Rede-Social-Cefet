<?php require_once "validador_acesso.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="css/mensagens.css" rel="stylesheet" />
  <title>Document</title>
</head>

<body>
  
<?php include "menu.inc";?>
<? require_once "validador_acesso.php";?>

  <div id="principal">
    <div class="contatos">
      <p>Contatos</p>
      <hr>
      <div class="search-contatos">
        <input type="text" placeholder="Pesquisar Mensagens">
      </div>
      <div class="contato main">
        <div class="publicar-perfil">
          <a href=""> <img src="assets/foto1.jpg" alt=""></a>
        </div>
        <div class="nome">
          <a href="">Zequinha Gato a Jato
          <div class="ultima-mensagem">
            Vlw.
          </div></a>
        </div>
      </div>

      <div class="contato">
        <div class="publicar-perfil">
          <a href=""> <img src="assets/foto2.jpg" alt=""></a>
        </div>
        <div class="nome">
          <a href="">Rrrominhaa</a>
          <div class="ultima-mensagem">
            Blz, na sala a gente resolve.
          </div>
        </div>
      </div>

      <div class="contato">
        <div class="publicar-perfil">
          <a href=""> <img src="assets/foto3.jpg" alt=""></a>
        </div>
        <div class="nome">
          <a href="">TinTin</a>
          <div class="ultima-mensagem">
            Vai almoçar aqui hj?
          </div>
        </div>
      </div>

      <div class="contato">
        <div class="publicar-perfil">
          <a href=""> <img src="assets/foto4.jpg" alt=""></a>
        </div>
        <div class="nome">
          <a href="">Marcola</a>
          <div class="ultima-mensagem">
            Vai na academia quando? Tem que parar de pular perna!
          </div>
        </div>
      </div>

      <div class="contato">
        <div class="publicar-perfil">
          <a href=""> <img src="assets/cronograma.jpg" alt=""></a>
        </div>
        <div class="nome">
          <a href="">INFO - 3</a>
          <div class="ultima-mensagem">
            Achei paia essa camisa.
          </div>
        </div>
      </div>

    </div>
    <div class="aba-mensagens">
      <section class="mensagens">
        <div class="cabecalho">
          <div class="avatar">
            <img src="assets/foto1.jpg" alt="Avatar do usuário 1">
          </div>
          <div class="informacoes">
            <h3>Zequinha Gato a Jato</h3>
            <p>Calouro do Centro Federal de Educação Tecnológica de Minas Gerais - Contagem
            </p>
          </div>
        </div>
        <ul class="mensagens-lista">
          <li class="mensagem recebida">
            <div class="avatar">
              <img src="assets/foto.jpg" alt="Avatar do usuário 2">
            </div>
            <div class="conteudo">
              <p>Eai, posso te ajudar com as máterias do técnico</p>
              <span class="data">10:30</span>
            </div>
          </li>
          <li class="mensagem enviada">
            <div class="avatar">
              <img src="assets/foto1.jpg" alt="Avatar do usuário 2">
            </div>
            <div class="conteudo">
              <p>Po, estou aceitando</p>
              <span class="data">10:32</span>
            </div>
          </li>
          <li class="mensagem recebida">
            <div class="avatar">
              <img src="assets/foto.jpg" alt="Avatar do usuário 2">
            </div>
            <div class="conteudo">
              <p>Quando vc vai ter um horário livre para conversarmos</p>
              <span class="data">10:36</span>
            </div>
          </li>
          <li class="mensagem enviada">
            <div class="avatar">
              <img src="assets/foto1.jpg" alt="Avatar do usuário 2">
            </div>
            <div class="conteudo">
              <p>Tenho o segundo horário de terça livre</p>
              <span class="data">10:38</span>
            </div>
          </li>
          <li class="mensagem recebida">
            <div class="avatar">
              <img src="assets/foto.jpg" alt="Avatar do usuário 2">
            </div>
            <div class="conteudo">
              <p>Pode ser então, até</p>
              <span class="data">10:39</span>
            </div>
          </li>
          <li class="mensagem enviada">
            <div class="avatar">
              <img src="assets/foto1.jpg" alt="Avatar do usuário 2">
            </div>
            <div class="conteudo">
              <p>Vlw.</p>
              <span class="data">10:42</span>
            </div>
          </li>
          <!-- Mais mensagens -->
        </ul>
        <div class="enviar-mensagem">
          <input type="text" placeholder="Mensagem">
          <div class="img-enviar">
            <div> <a href="" title="Enviar"> <img src="assets/enviar.svg" alt=""></a></div>
          </div>
        </div>
      </section>
    </div>
  </div>
</body>

</html>