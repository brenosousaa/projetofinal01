<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="formulario.css">
  <title>Document</title>
</head>
<body>
  <nav>
    <div class="menu__principal">
        <div class="menu">
            <img src="imagens/coquetel (1).png" alt="" class="logo">
        </div>
        <div class="menu__opcs">
            <ul>
                <li><a href="">Contatos</a></li>
                <li><a href="">Serviços</a></li>
                <li><a href="" class="whyskys__button">Whyskys</a></li>
            </ul>
        </div>
    </div>
    <section>
        <form action="coqueteis_insere.php" method="post" >
            <h2>Cadastre Coqueteis</h2>
            <div>
                <input type="text" name="nome" id="nome" placeholder="Digite o nome...">
            </div>
            <div>
                <input type="text" name="preco" id="preco" placeholder="Digite o preço...">
            </div>
            <button type="submit">Cadastrar</button>
        </form>
    </section>
</nav>
</body>
</html>
