<?php
    include 'cabecalho.php';
    $id= $_GET['id'];
?>

<body>
    <div class="container">
        <h2>ATUALIZAÇÃO DE PRODUTO</h2>
        <?php
require 'conexao.php';
$sql = "SELECT * FROM produtos WHERE id= $id";
$stmt = $pdo->query($sql);
$produto = $stmt->fetch(PDO::FETCH_ASSOC);


//echo "ID: " . $produto['id'] . "<br>";
//echo "Nome: " . $produto['nome'] . "<br>";
//echo "Preço: R$" . $produto['preco'] . "<br>";
//echo "Estoque: " . $produto['estoque'] . "<br><br>";

?>
        <form action= "#" method= "POST">
            <div class="mb-3">
               Nome: <input  value=
               "
               <?php
               echo $produto['nome'];
               ?>
               " 
               type="text" name="produto" class="form-control" >
            </div>
            <div class="mb-3">
                Preço: <input value=
                "
                <?php
                echo $produto['preco'];
                ?>
                "
                type="text" name="preco" class="form-control" >
            </div>
            <div class="mb-3">
                Quantidade: <input value=
                "
                <?php
                echo $produto['quantidade'];
                ?>
                "
                type="text" name="estoque" class="form-control">
                </div>
            <button type="submit" class="btn btn-outline-secondary">Atualizar</button>
        </form>
    </div>


    <style>
            h1{
                color: #D84B16;
            }

            h2{
                color:#D2b48c;
            }
        html, body {
    height: 100%; 
    display: flex; 
    justify-content: center; 
    align-items: center; 
    text-align: center; 
    font-family: Montserrat;
    background-color: #FFF5E1ed;
}
    btn-group{
        font-family: Montserrat;
    }

        </style>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous">
    </script>
</body>
</html>