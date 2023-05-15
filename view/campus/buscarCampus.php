<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<?php $path = 'http://' . $_SERVER["HTTP_HOST"] . '/TABWEB'; ?>

<head>
    <meta charset="UTF-8">
    <title>Busca de Campus</title>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
    <link href="../../arquivos/css/bootstrap.min.css" rel="stylesheet">
    <script src="../../arquivos/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="../../arquivos/js/busca.cep.js"></script>
</head>

<body>
    <?php include("../../menu.php") ?>
    <div class="progress" role="progressbar" aria-label="Info example" aria-valuenow="57" aria-valuemin="0" aria-valuemax="100">
        <div class="progress-bar bg-info text-dark" style="width: 57%">57%</div>
    </div>
    <div class="container">
        <div class="row mb-4 mt-4">
            <div class="alert alert-light" role="alert">
                <h1>Busca de Campus</h1>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                <label class="form-check-label" for="defaultCheck1">
                    check out
                </label>
            </div>
        </div>
        <div class="row">
            <?php
            try {
                $conexao = new PDO("mysql:host=localhost; dbname=projetoweb2", "root", "");
            } catch (PDOException $e) {
                die('aconteceu um erro: ' . $e->getMessage());
            }

            try {
                $sql = "select * from campus";
                $resultado = $conexao->query($sql);
                if ($resultado->rowCount() > 0) {
            ?>
                    <table class="table" sumary=" Aqui mostra as Tabelas Campus cadastrados">
                        <Caption> Tabelas de Campus"></Caption>
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nome Campus</th>
                                <th scope="col">CEP</th>
                                <th scope="col">Apagar</th>
                                <th scope="col">Editar</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            while ($linha = $resultado->fetch()) {
                                echo "<tr>";
                                echo "<td>" . $linha['idCampus'] . "</td>";
                                echo "<td>" . $linha['nomeCampus'] . "</td>";
                                echo "<td>" . $linha['CEP'] . "</td>";
                                echo "<td><a href=\"../../repositorio/campus/removerCampus.php?idCampus=" . $linha['idCampus'] . "\" class=\"btn btn-danger\">Remover</a></td>";
                                echo "<td><a href=\"editarCampus.php?idCampus=" . $linha['idCampus'] . "\" class=\"btn btn-secondary\">Editar</a></td>";
                                echo "</tr>";
                            }
                            ?>
                        </tbody>
                    </table>
            <?php
                }
            } catch (PDOException $e) {
                die('aconteceu um erro: ' . $e->getMessage());
            }
            ?>
        </div>

        <p>
            <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseWidthExample" aria-expanded="false" aria-controls="collapseWidthExample">
                Taco
            </button>
        </p>
        <div style="min-height: 120px;">
            <div class="collapse collapse-horizontal" id="collapseWidthExample">
                <div class="card card-body" style="width: 540px;">
                    <h1>Oque é um taco</h1>
                    Taco é uma comida típica do México que tem origem no Império Azteca. O taco mexicano original é feito com farinha de milho, sendo que o milho é tão popular no México como o feijão é no Brasil.
                    <a href="https://www.tudoreceitas.com/receita-de-tacos-mexicanos-original-1592.html"><img src="../../arquivos/imagens/taco.jpeg" class="media-object  img-responsive img-thumbnail" alt="imagem de um site de como fazer Taco muito bom"></a>

                </div>
            </div>
        </div>
    </div>
</body>

</html>