<?php
    include "cabecalho.php"

?>
<body>
    <div class="container">
        <h2>CADASTRE O SEU PRODUTO!</h2>
        <form action= "inserir.php" method= "POST">
            <div class="mb-3">
                <input type="text" name="produto" class="form-control" placeholder="Digite o nome do produto">
            </div>
            <div class="mb-3">
                <input type="text" name="preco" class="form-control" placeholder="Digite o preço do produto">
            </div>
            <div class="mb-3">
                <input type="text" name="estoque" class="form-control" placeholder="Digite a quantidade de produto">
                </div>
            <button type="submit" class="btn btn-outline-secondary">Cadastrar</button>
        </form>
    </div>
<style>
       html, body {
    height: 100%; 
    display: flex; 
    justify-content: center; 
    align-items: center; 
    text-align: center; 
    font-family: Montserrat;
    background-color: #FFF5E1ed;
       }

       h2{
        color: #D84B16;
       }

    </style>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous">
    </script>
</body>
</html>