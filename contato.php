<?php
    require_once('conection.php');

    if (isset($_POST['nome']) && isset($_POST['msg'])){
        $nome = $_POST['nome'];
        $msg = $_POST['msg'];

        $sql = "insert into comentarios (nome, msg) values ('$nome', '$msg')";
        $result = $conn->query($sql);
    }
    
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Contato - Full Stack Eletro</title>
    <link rel="stylesheet" type="text/css" href="./css/style.css">
</head>
<body>
    <!-- main menu -->
    <?php
        include_once('menu.html');
    ?>
    <!-- end menu-->
    <header>
        <h2>Contato</h2>
    </header>
    <hr>
    <div class="container-contato">
        
        <div class="contato">
            <img src="./imagens/email.png" width="40px">
            contato@fullstackeletro.com
        </div>
        <div class="contato">
            <img src="./imagens/whatsapp.png" width="40px">
            (11) 99999-9999
        </div>

    </div>
    <form method="post" action="">
        <h4>Nome: </h4>
        <input name="nome" type="text" style="width: 400px">
        <h4>Mensagem: </h4>
        <textarea name="msg" style="width: 400p"></textarea>

        <input type="submit" value="Enviar">
    </form>
    
    <?php
        $sql = "select * from comentarios";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($rows = $result->fetch_assoc()) {
                echo "Data: ". $rows['data']. "<br>";
                echo "Nome: ". $rows['nome']. "<br>";
                echo "Mensagem: ". $rows['msg']. "<br>";
                echo "<hr>";
            }
        }
        else {
            echo "Sem comentários";
        }
    ?>

    <footer class="footer">
        <p class="formas-pag">Formas de pagamento</p>
        <img src="./imagens/forma-pagamentos.jpg" alt="Formas de pagamento" width="15%">
        <p>&copy; Recode Pro</p>
    </footer>
</body>
</html>