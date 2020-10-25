<?php
    require_once('conection.php');

    if (isset($_POST['nome'])){
        $nome = $_POST['nome'];
        $end = $_POST['end'];
        $tel = $_POST['tel'];
        $prod = $_POST['prod'];
        $v_unit = $_POST['v_unit'];
        $qtd = $_POST['qtd'];
        $v_tot = $_POST['v_tot'];
        $sql = "insert into pedidos (nome, endereco, telefone, produto, valor_unitario, quantidade, valor_total) 
                values ('$nome', '$end', '$tel', '$prod', ${v_unit}, ${qtd}, ${v_tot})";
        $result = $conn->query($sql);
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Full Stack Eletro</title>
    <link rel="stylesheet" type="text/css" href="./css/style.css">
</head>
<body>
    <!-- main menu -->
    <?php
        include_once('menu.html');
    ?>
    <!-- end menu-->

    <main class="pedido" action="">
        <form method="post" action="">
        <h4>Nome</h4>
        <input name="nome" type="text" required>
        <h4>Endereço</h4>
        <input name="end" type="text" required>
        <h4>Telefone</h4>
        <input name="tel" type="number" required>
        <h4>Produto</h4>
        <input name="prod" type="text-area" required>
        <h4>Valor unitário</h4>
        <input name="v_unit" type="number" required>
        <h4>Quantidade</h4>
        <input name="qtd" type="number" required>
        <h4>Valor total</h4>
        <input name="v_tot" type="number" required>
        <input type="submit" value="Enviar">
        </form>
    </main>

    <footer class="footer">
        <p class="formas-pag">Formas de pagamento</p>
        <img src="./imagens/forma-pagamentos.jpg" alt="Formas de pagamento" width="15%">
        <p>&copy; Recode Pro</p>
    </footer>
</body>
</html>