<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<?php $path = 'http://' . $_SERVER["HTTP_HOST"] . '/TABWEB'; ?>

<head>
    <meta charset="UTF-8">
    <title>Editar Curso</title>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
    <link href="../../arquivos/css/bootstrap.min.css" rel="stylesheet">
    <script src="../../arquivos/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="../../arquivos/js/busca.cep.js"></script>
</head>

<body>
    <?php include("../../menu.php") ?>
    <div class="progress" role="progressbar" aria-label="Info example" aria-valuenow="81" aria-valuemin="0" aria-valuemax="100">
        <div class="progress-bar bg-info text-dark" style="width: 81%">81%</div>
    </div>
    <div class="container">
        <div class="row mb-4 mt-4">
            <div class="alert alert-light" role="alert">
                <h1>Editar Curso</h1>
            </div>
        </div>
        <?php
        try {
            $conexao = new PDO("mysql:host=localhost; dbname=projetoweb2", "root", "");
        } catch (PDOException $e) {
            die("Ocorreu um erro inesperado " . $e->getMessage());
        }

        $idCurso = $_GET['idCurso'];

        try {
            $sql = "select * from curso where idCurso = " . $idCurso;
            $resultado = $conexao->query($sql);
            if ($resultado->rowCount() > 0) {
                $linha = $resultado->fetch();

        ?>
                <form action="../../repositorio/curso/editarCurso.php" method="POST">
                    <input value="<?php echo $linha['idCurso'] ?>" type="text" name="idCurso" id="idCurso" hidden>
                    <div class="row mb-3">
                        <div class="col col-md-9">
                            <label class="form-label" for="idnome">Nome Curso</label>
                            <input class="form-control" value="<?php echo $linha['nomeCurso'] ?>" type="text" name="nome" id="idnome">
                        </div>
                        <div class="col col-md-3">
                            <label class="form-label" for="idnota">Nota do Curso</label>
                            <input class="form-control" type="number" value="<?php echo $linha['notaCurso'] ?>" name="nota" id="idnota">
                        </div>
                    </div>
            <?php
            }
        } catch (PDOException $e) {
            die("Ocorreu um erro " . $e->getMessage());
        }
            ?>
            <div class="row mb-3">
                <div class="col col-md-6">
                    <label class="form-label" for="idcampus">Campus</label>

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
                            <select class="form-control" name="campus">
                                <?php
                                while ($linha = $resultado->fetch()) {
                                    echo "<option value=\"" . $linha['idCampus'] . "\">" . $linha['nomeCampus'] . "</option>";
                                }
                                ?>
                            </select>
                    <?php
                        }
                    } catch (PDOException $e) {
                        die('aconteceu um erro: ' . $e->getMessage());
                    }
                    ?>

                </div>

                <div class="col col-md-6">
                    <label class="form-label" for="idarea">Área</label>

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
                            <select class="form-control" name="area">
                                <?php
                                while ($linha = $resultado->fetch()) {
                                    echo "<option value=\"" . $linha['idArea'] . "\">" . $linha['nomeArera'] . "</option>";
                                }
                                ?>
                            </select>
                    <?php
                        }
                    } catch (PDOException $e) {
                        die('aconteceu um erro: ' . $e->getMessage());
                    }
                    ?>

                </div>

            </div>
            <input class="btn btn-primary" type="submit" value="Salvar">
                </form>
    </div>

</body>
<h5 class="mt-0">Abertas inscrições para curso de Microempreendedor Individual</h5>
<div class="d-flex position-relative" style="max-width: 640rem;">



    <a href="https://www.ifms.edu.br/noticias/2023/abertas-inscricoes-para-curso-de-microempreendedor-individual"><img src="../../arquivos/imagens/st.png" class="img-thumbnail" alt="Imagem qualifica"></a>

    <div>


        <div class="text-bg-dark p-3">
            <p> O Instituto Federal de Mato Grosso do Sul (IFMS) está com inscrições abertas para vagas remanescentes no curso de Formação Inicial e Continuada (FIC) de Microempreendedor Individual (MEI). </p>
            São ofertadas 250 vagas, com turmas no primeiro e segundo semestre. O curso acontece na modalidade presencial, por meio da linha de Fomento bolsa-formação do programa “Qualifica Mais Progredir”, com aulas no Campus Campo Grande, no período noturno.</br>

            ...
            <p>Para Mais informações Clique na Imagem</p>

        </div>
    </div>


</div>


</html>