<?php
require 'conexao.php';

$nome = $_POST['produto'];
$preco = $_POST['preco'];
$estoque =  $_POST['estoque'];

$sql = "INSERT INTO produtos (nome, preco, quantidade) VALUES (:nome, :preco, :quantidade)";
$stmt = $pdo->prepare($sql);

$stmt->bindParam(':nome', $nome);
$stmt->bindParam(':preco', $preco);
$stmt->bindParam(':quantidade', $estoque);

echo '<!DOCTYPE html>
<html lang="pt-br">
<head>
    <style>
        body {
            display: flex;
            justify-content: center;  
            align-items: center;    
            height: 100vh;          
            font-family: Montserrat;
            background-color: #FFF5E1ed;
            text-align: center;
        }
        button {
            padding: 10px 20px;
            margin: 10px;
            border-radius: 8px;
            border: none;
            background-color: #F5B7B1;
            color: white;
            cursor: pointer;
            transition: 0.3s;
        }
        button:hover {
            background-color: #F5B7B1;
        }
        h2 {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>';

if ($stmt->execute()) {
    echo "<div>
            <h2>Produto inserido com sucesso!</h2>
            <a href='form_cadastrar.php'><button type='button'>Voltar ao cadastro de crepes</button></a>
            <a href='index.php'><button type='button'>Ir à tela inicial</button></a>
          </div>";
} else {
    echo "<div>
            <h2>Erro ao inserir produto.</h2>
            <a href='form_cadastrar.php'><button type='button'>Voltar</button></a>
          </div>";
}
echo '</body></html>';
?>
