<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
    <style>
    	.table {
    		background-color: #fff;
    		align-items: center;
    		margin: 0 auto;
    		padding: 15px 10px; 
    	}
    	
    	.table td {
    		padding 0 5px;
    	}
    	
    	.btn__cadastrar {
    		font-weight: bolder;
    	}
    </style>
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

        <center>
        <br>
        <h1 style="font-weight: bolder; font-size: 28px; color: #fff;">Listagem de Whyskys</h1>
        <br>
        <br>
        <a href="whyskys_formulario.php" class="btn__cadastrar" role="button">Cadastrar Whysky</a>
        </center>

    <?php

    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $banco = "bar";

    $conn = new mysqli($servidor, $usuario, $senha, $banco);

    if ($conn->connect_error) {
        die("Erro: " . $conn->connect_error);
    } else {
        //echo "Conectado com o banco!";
    }

    $consulta = "SELECT * FROM `whiskys`";
    $result = $conn->query($consulta);

    if ($result->num_rows > 0) {
    ?>

    <table class="table"><th scope="col"></th>
            </tr>
        </thead>
        <tbody>


    <?php
        while($row = $result->fetch_assoc()) {
            //echo $row["id"]. " - " . $row["nome"] . " <a href=\"excluir_curso.php?id=". $row["id"] ."\">Excluir</a> <br>";
            
            echo "<tr>";
            echo "<th scope=\"row\">". $row["id"] ."</th>";
            echo "<td>". $row["nome"] ."</td>";
            echo "<td>". $row["preco"] ."</td>";
            echo "<td><a href=\"whyskys_exclui.php?id=". $row["id"] ."\">Excluir</a></td>";
            echo "</tr>";
        }
    ?>

        </tbody>
    </table>

    <?php
    } else {
        echo "0 itens";
    }
    $conn->close();


    ?>
       

        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Preço</th>
                
    
      
    </nav>
    
</body>
</html>
    </nav>


</body>
</html>
