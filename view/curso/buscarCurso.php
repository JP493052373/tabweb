<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<?php $path = 'http://' . $_SERVER["HTTP_HOST"] . '/TABWEB'; ?>

<head>
    <meta charset="UTF-8">
    <title>Busca de Curso</title>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
    <link href="../../arquivos/css/bootstrap.min.css" rel="stylesheet">
    <script src="../../arquivos/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="../../arquivos/js/busca.cep.js"></script>
</head>

<body>
    <?php include("../../menu.php") ?>
    <div class="progress" role="progressbar" aria-label="Info example" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
        <div class="progress-bar bg-info text-dark" style="width: 100%">100%</div>

    </div>
    <div class="container">
        <div class="row mb-4 mt-4">
            <div class="alert alert-light" role="alert">
                <h1>Busca de Curso</h1>
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
                $sql = "SELECT * FROM curso as cur inner join area as ar on cur.idArea = ar.idArea 
                inner join campus as cam on cur.idCampus = cam.idCampus;";

                $resultado = $conexao->query($sql);
                if ($resultado->rowCount() > 0) {
            ?>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nome Curso</th>
                                <th scope="col">Nota Curso</th>
                                <th scope="col">Área</th>
                                <th scope="col">Campus</th>
                                <th scope="col">Epagar</th>
                                <th scope="col">Editar</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            while ($linha = $resultado->fetch()) {
                                echo "<tr>";
                                echo "<td>" . $linha['idCurso'] . "</td>";
                                echo "<td>" . $linha['nomeCurso'] . "</td>";
                                echo "<td>" . $linha['notaCurso'] . "</td>";
                                echo "<td>" . $linha['nomeArera'] . "</td>";
                                echo "<td>" . $linha['nomeCampus'] . "</td>";
                                echo "<td><a href=\"../../repositorio/curso/removerCurso.php?idCurso=" . $linha['idCurso'] . "\" class=\"btn btn-danger\">Remover</a></td>";
                                echo "<td><a href=\"editarCurso.php?idCurso=" . $linha['idCurso'] . "\" class=\"btn btn-secondary\">Editar</a></td>";
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

        <div class="card text-bg-dark mb-3" style="max-width: 30rem;">
            <div class="card-header">Comentários</div>
            <div class="form-floating">
                <div class="card-body">
                    <h5 class="card-title">Deixe seu comentário abaixo </h5>

                    <textarea class="form-control" placeholder="Escreva um comentario" id="floatingTextarea2" style="height: 100px"></textarea>

                </div>
                <figure>

                    <figcaption class="blockquote-footer">
                        Obs: <cite title="Source Title"> O comentário não será salvo!</cite>
                    </figcaption>
                </figure>


            </div>

        </div>




</body>


</html>