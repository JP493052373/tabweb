<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<?php $path = 'http://' . $_SERVER["HTTP_HOST"] . '/TABWEB'; ?>

<head>
    <meta charset="UTF-8">
    <title>Cadastro de Área</title>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
    <link href="../../arquivos/css/bootstrap.min.css" rel="stylesheet">
    <script src="../../arquivos/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src=../../arquivos/js/busca.cep.js"></script>
</head>

<body>
    <?php include("../../menu.php") ?>

    <div class="progress" role="progressbar" aria-label="Info example" aria-valuenow="63" aria-valuemin="0" aria-valuemax="100">


        <div class="progress-bar bg-info text-dark" style="width: 63%">63%</div>
    </div>
    <div class="container">
        <div class="row mb-4 mt-4">
            <div class="alert alert-light" role="alert">
                <h1>Cadastro de Área</h1>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                <label class="form-check-label" for="defaultCheck1">
                    check out
                </label>
            </div>
        </div>
        <form action="../../repositorio/area/salvarArea.php" method="POST">
            <div class="row mb-3">
                <div class="col col-md-12">
                    <label class="form-label" for="idnome">Nome</label>
                    <input class="form-control" type="text" name="nome" id="idnome">
                </div>
            </div>
            <input class="btn btn-primary" type="submit" value="Salvar">

        </form>



    </div>


</body>
<div class="alert " role="alert">
    <h4 class="alert-primary">Dica de Área</h4>
    <p>Caso não souber que Area por acima utilize um dos exemplos abaixo.</p>

    <table class="table table-bordered border-primary">

        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Áreas</th>
                <th scope="col">5</th>
                <td> Engenharias</td>

            </tr>
        </thead>
        <tbody">
            <tr>
                <th scope="row">1</th>
                <td>Ciências Agrárias</td>
                <th scope="col">6</th>
                <td>Ciências Humanas</td>

            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Ciências Biológicas</td>
                <th scope="col">7</th>
                <td>Ciências Sociais Aplicadas</td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>Ciências da Saúde</td>
                <th scope="col">8</th>
                <td>Linguística, Letras e Artes</td>
            </tr>
            <tr>
                <th scope="row">4</th>
                <td>Ciências Exatas e da Terra</td>
                <th scope="col">9</th>
                <td>Publicidade e Propaganda</td>

            </tr>

            </tbody>
    </table>


    <hr>
    <p class="mb-0">Utilize a que você achar melhor .</p>
    <p class="mb-0">Para saber mais sobre as áreas clique no botão abaixo para ser direcionado para o site .</p>
    <a href="https://www.gupy.io/blog/lista-de-profissoes#2-ci-ncias-biol-gicas" class="btn btn-success">Link</a>
</div>


</html>