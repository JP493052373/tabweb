<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<?php $path = 'http://' . $_SERVER["HTTP_HOST"] . '/TABWEB'; ?>

<head>
    <meta charset="UTF-8">
    <title>Editar Campus</title>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
    <link href="../../arquivos/css/bootstrap.min.css" rel="stylesheet">
    <script src="../../arquivos/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="../../arquivos/js/busca.cep.js"></script>
</head>

<body>
    <?php include("../../menu.php") ?>
    <div class="progress" role="progressbar" aria-label="Info example" aria-valuenow="37" aria-valuemin="0" aria-valuemax="100">
        <div class="progress-bar bg-info text-dark" style="width: 37%">37%</div>
    </div>
    <div class="container">
        <div class="row mb-4 mt-4">
            <div class="alert alert-light" role="alert">
                <h1>Editar Campus</h1>
            </div>
        </div>
        <?php
        try {
            $conexao = new PDO("mysql:host=localhost; dbname=projetoweb2", "root", "");
        } catch (PDOException $e) {
            die("Ocorreu um erro inesperado " . $e->getMessage());
        }

        $idCampus = $_GET['idCampus'];

        try {
            $sql = "select * from campus where idCampus = " . $idCampus;
            $resultado = $conexao->query($sql);
            if ($resultado->rowCount() > 0) {
                $linha = $resultado->fetch();

        ?>
                <form action="../../repositorio/campus/editarCampus.php" method="POST">
                    <input value="<?php echo $linha['idCampus'] ?>" type="text" name="idCampus" id="idCampus" hidden>
                    <div class="row mb-3">
                        <div class="col col-md-8">
                            <label class="form-label" for="idnome">Nome</label>
                            <input class="form-control" value="<?php echo $linha['nomeCampus'] ?>" type="text" name="nome" id="idnome">
                        </div>
                        <div class="col col-md-4">
                            <label class="form-label" for="idcep">CEP</label>
                            <input class="form-control" value="<?php echo $linha['CEP'] ?>" type="number" name="cep" id="idcep">
                        </div>
                    </div>
            <?php
            }
        } catch (PDOException $e) {
            die("Ocorreu um erro " . $e->getMessage());
        }
            ?>
            <div class="row mb-3">
                <div class="col col-md-4">
                    <label class="form-label" for="idrua">Rua</label>
                    <input class="form-control" type="text" name="rua" id="idrua">
                </div>
                <div class="col col-md-4">
                    <label class="form-label" for="idbairro">Bairro</label>
                    <input class="form-control" type="text" name="bairro" id="idbairro">
                </div>
                <div class="col col-md-3">
                    <label class="form-label" for="idcidade">Cidade</label>
                    <input class="form-control" type="text" name="cidade" id="idcidade">
                </div>
                <div class="col col-md-1">
                    <label class="form-label" for="iduf">UF</label>
                    <input class="form-control" type="text" name="uf" id="iduf">
                </div>
            </div>
            <input class="btn btn-primary" type="submit" value="Salvar">
                </form>
    </div>

</body>
<ol class="list-group list-group-numbered">
    <li class="list-group-item d-flex justify-content-between align-items-start">
        <div class="row">
            <div class="ms-12 ">
                <div class="fw-bold">PHP</div>
                <div class="fw-bold">Clique no texto abaixo para saber mais </div>



                <div class="row">

                    <div>
                        <a href=" https://www.hostinger.com.br/tutoriais/o-que-e-php-guia-basico#:~:text=PHP%20%C3%A9%20uma%20linguagem%20de%20script%20do%20tipo%20server%2Dside,aberto%20e%20suas%20funcionalidades%20vers%C3%A1teis." class="btn btn-dark "> PHP é uma linguagem de script do tipo server-side com diversos propósitos. Porém, ela é principalmente utilizada para gerar conteúdos dinâmicos num site. Trata-se de uma linguagem altamente popular devido à sua natureza de código aberto e suas funcionalidades versáteis.</a>
                    </div>

                </div>



    </li>
    <li class="list-group-item d-flex justify-content-between align-items-start">
        <div class="row">
            <div class="fw-bold">HTML </div>
            <div class="fw-bold">Clique no texto abaixo para saber mais </div>


            <div class="row">

                <div>
                    <a href=" https://www.totvs.com/blog/developers/o-que-e-html/#:~:text=Sigla%20para%20HyperText%20Markup%20Language,v%C3%ADdeos%2C%20por%20meio%20dos%20hipertextos." class="btn btn-dark "> Sigla para HyperText Markup Language — Linguagem de Marcação de Hipertexto —, o HTML é o componente base da web. Isso quer dizer que ele permite a construção de websites e a inserção de novos conteúdos, como imagens e vídeos, por meio dos hipertextos.</a>
                </div>

            </div>


    </li>

</ol>

</html>