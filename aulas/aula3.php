<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">

    <title>Aula 3</title>
    <style>
        .vermelho{
            color: red;
        }
        .d-none{
            display: none;
        }
    </style>
</head>
<body>
    <h1>Texto para testar o CSS</h1>
    <p onclick="alert('Você me clicou!')">Clique-me Alert</p>
    <p onclick="alerta()">Clique-me Função</p>
    <p onclick="alertaComTexto('Cliquei', ' no susto')">Clique-me Função com parametro</p>
    <p id="clique" class="qualquer-classe">Clique-me Função sem ser inline</p>
  <form action="inserir.php" method="post">
        <input type="text" name="nome" id="nome" placeholder="Nome">  <p class="erro-nome vermelho d-none">Nome é obrigatório</p>

    <input type="text" name="sobrenome" id="sobrenome" placeholder="Sobrenome">
    <input type="email" name="email" id="email" placeholder="Email">
    <input type="password" name="senha" id="senha" placeholder="Senha">
    <button id="btn-submit" type="submit">Enviar</button>
  </form>
  <div>
    <button id="sumir" type="button">Sumir</button>
    <button id="aparecer" type="button">Aparecer</button>
  </div>
  
    
    <script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>
   <script src="assets/js/script.js"></script>

</body>
</html>