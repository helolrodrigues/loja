<?php
    include "cabecalho.php"
?>
<Body>

 <style>
        body, .container {
            background-color: #FFff;
            font-family: Montserrat;
        }

        th, td {
            padding: 10px;
            text-align: left;
            background-color: #FFF5E1ed; 
        }
        .btn-group .btn {
            color:#ffff;
            background-color: #A67B5B;
        }

        .table thead th {
        background-color: #ffff; 
        color: #D84B16;
        font-weight: bold;
    }
    </style>


    <div class="container">
        <table class="table">
            <thead>
                <tr>
                <th scope="col">ID</th>
                <th scope="col">NOME</th>
                <th scope="col">PREÇO</th>
                <th scope="col">QUANTIDADE</th>
                <th scope="col">OPÇÕES</th>
                </tr>
            </thead>
            <tbody>


        <?php
            require 'conexao.php';
            $sql = "SELECT * FROM produtos";
            $stmt = $pdo->query($sql);
            while ($produto = $stmt->fetch(PDO::FETCH_ASSOC)) {
                echo "<tr>";
                echo "<td>". $produto['id']."</td>";
                echo "<td>". $produto['nome']."</td>";
                echo "<td>". $produto['preco']."</td>";
                echo "<td>". $produto['quantidade']."</td>";
                echo "
                <td>
                <div class='btn-group' role='group'>
                            <a href = 'form.atualizar.php?id=".$produto['id']."'type='button' class='btn btn-warning'>Atualizar</a>
                            <a href = '#' type='button' class='btn btn-danger'>Apagar</a>
                        </div>
                        </td>
                        ";
                echo"</tr>";
            }
        ?>
            </tbody>
        </table>
    </div>
</Body>