<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<?php $path = 'http://' . $_SERVER["HTTP_HOST"] . '/TABWEB'; ?>

<head>
    <meta charset="UTF-8">
    <title>Busca de Area</title>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
    <link href="../../arquivos/css/bootstrap.min.css" rel="stylesheet">
    <script src="../../arquivos/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src=../../arquivos/js/busca.cep.js"></script>
</head>

<body>
    <?php include("../../menu.php") ?>
    <div class="progress" role="progressbar" aria-label="Info example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
        <div class="progress-bar bg-info text-dark" style="width: 75%">75%</div>
    </div>
    <div class="container">
        <div class="row mb-4 mt-4">
            <div class="alert alert-light" role="alert">
                <h1>Busca de Area</h1>
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
                $sql = "select * from area";
                $resultado = $conexao->query($sql);
                if ($resultado->rowCount() > 0) {
            ?>
                    <table class="table" sumary=" Tabelas  de Área Aqui mostra as Tabelas Área cadastrados">
                        <Caption>"Tabelas de Área"></Caption>
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nome Area</th>
                                <th scope="col">Apagar</th>
                                <th scope="col">Editar</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            while ($linha = $resultado->fetch()) {
                                echo "<tr>";
                                echo "<td>" . $linha['idArea'] . "</td>";
                                echo "<td>" . $linha['nomeArera'] . "</td>";
                                echo "<td><a href=\"../../repositorio/area/removerArea.php?idArea=" . $linha['idArea'] . "\" class=\"btn btn-danger\">Remover</a></td>";
                                echo "<td><a href=\"editarArea.php?idArea=" . $linha['idArea'] . "\" class=\"btn btn-secondary\">Editar</a></td>";
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

    </div>

    <div class="d-flex position-relative" style="max-width: 540rem;">


        <a href="https://www.ifms.edu.br/noticias/ifms-abre-curso-online-moodle-para-educadores#:~:text=Liberdade%20%C3%A9%20a%20palavra%20que,a%20dist%C3%A2ncia%20Moodle%20para%20Educadores."><img src="../../arquivos/imagens/muu.png" class="flex-shrink-0 me-3" alt="Imagem do moodle no  site do ifms de noticias"></a>

        <div>

            <h5 class="mt-0">IFMS abre curso online Moodle para Educadores</h5>
            <div class="text-bg-dark p-3">
                Servidores do IFMS e qualquer pessoa interessada em elaborar cursos online podem se inscrever no curso, <br>
                oferecido pelo Centro de Referência em Educação a Distância (Cread) da instituição.<br>
                Com duração de 30 horas, o curso é livre, ou seja, não possui tutoria.<br>
                O estudante determina o ritmo de estudos e, ao final, recebe o certificado.<br>
                O acesso às aulas pode ser feito por meio de qualquer dispositivo conectado à internet, inclusive plataformas<br>
                mobile (tablet, celular, entre outros).<br>
                ...
                <p>Para Mais informações Clique na Imagem</p>

            </div>
        </div>


    </div>




</body>


</html>