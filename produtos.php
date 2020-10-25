<?php
    require_once('conection.php')
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Produtos - Full Stack Eletro</title>
    <link rel="stylesheet" type="text/css" href="./css/style.css">
    <script src="./scripts/script.js"></script>
</head>
<body>
    <!-- main menu -->
    <?php
        include_once('menu.html');
    ?>
    <!-- end menu-->
    <header>
        <h2>Produtos</h2>
    </header>
    <hr>
    <div class="container">
        <div class="produtos">
            <h3>Categorias</h3>
            <ul>
                <li onclick="todasCategoria()">Todos os produtos (12)</li>
                <li onclick="exibirCategoria('geladeira')">Geladeiras (3)</li>
                <li onclick="exibirCategoria('fogao')">Fogões (2)</li>
                <li onclick="exibirCategoria('microondas')">Microondas (3)</li>
                <li onclick="exibirCategoria('lavadora')">Lavadora de roupas (2)</li>
                <li onclick="exibirCategoria('lava-louca')">Lava-louças (2)</li>
            </ul>
        </div>
    
        <div class="lista-prod">
        
            <?php
                $sql = "select * from produtos";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    while($rows = $result->fetch_assoc()) {

            ?>
                <div class="box-item" id="<?php echo $rows["categoria"]; ?>">
                    <img src="<?php echo $rows["imagem"]; ?>" alt="<?php echo $rows["categoria"]; ?>"  width="120px" onclick="destaque(this)">
                    <br>
                    <p class="item"><?php echo $rows["descricao"]; ?></p>
                    <hr>
                    <p class="pant">R$ <?php echo $rows["preco"]; ?></p>
                    <p class="patual">R$ <?php echo $rows["preco_venda"]; ?></p>
                </div>
            <?php 
                    }
                }
                else {
                    echo "Não há produtos cadastrados";
                }
            ?>
        </div>
    </div>
    <footer class="footer">
        <p class="formas-pag">Formas de pagamento</p>
        <img src="./imagens/forma-pagamentos.jpg" alt="Formas de pagamento" width="15%">
        <p>&copy; Recode Pro</p>
    </footer>
</body>
</html>