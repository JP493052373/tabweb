<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<?php $path = 'http://' . $_SERVER["HTTP_HOST"] . '/TABWEB'; ?>

<head>
    <meta charset="UTF-8">
    <title>Cadastro de Campus</title>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
    <link href="../../arquivos/css/bootstrap.min.css" rel="stylesheet">
    <script src="../../arquivos/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="../../arquivos/js/busca.cep.js"></script>
</head>

<body>
    <?php include("../../menu.php") ?>
    <div class="progress" role="progressbar" aria-label="Info example" aria-valuenow="47" aria-valuemin="0" aria-valuemax="100">
        <div class="progress-bar bg-info text-dark" style="width: 47%">47%</div>
    </div>
    <div class="container">
        <div class="row mb-4 mt-4">
            <div class="alert alert-light" role="alert">
                <h1>Cadastro de Campus</h1>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                <label class="form-check-label" for="defaultCheck1">
                    check out
                </label>
            </div>
        </div>
        <form action="../../repositorio/campus/salvarCampus.php" method="POST">
            <div class="row mb-3">
                <div class="col col-md-8">
                    <label class="form-label" for="idnome">Nome</label>
                    <input class="form-control" type="text" name="nome" id="idnome" required>

                </div>
                <div class="col col-md-4">
                    <label class="form-label" for="idcep">CEP</label>
                    <input class="form-control" type="number" name="cep" id="idcep" required>
                    <div class="overflow-x-auto">Dica de Cep valido Ex:79310-442 </div>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col col-md-4">
                    <label class="form-label" for="idrua">Rua</label>
                    <input class="form-control" type="text" name="rua" id="idrua" required>

                </div>
                <div class="col col-md-4">
                    <label class="form-label" for="idbairro">Bairro</label>
                    <input class="form-control" type="text" name="bairro" id="idbairro" required>

                </div>
                <div class="col col-md-3">
                    <label class="form-label" for="idcidade">Cidade</label>
                    <input class="form-control" type="text" name="cidade" id="idcidade" required>

                </div>
                <div class="col col-md-1">
                    <label class="form-label" for="iduf">UF</label>
                    <input class="form-control" type="text" name="uf" id="iduf" required>

                </div>
            </div>
            <input class="btn btn-primary" type="submit" value="Salvar">
        </form>
    </div>

    <div class="card-group">
        <div class="card">
            <a href="https://www.ifms.edu.br/noticias/2023/semana-do-meio-ambiente-sera-realizada-em-dez-municipios"><img src="../../arquivos/imagens/tad.png" class="card-img-top" alt="Meio ambiente imagem"></a>
            <div class="card-body">
                <h5 class="card-title">Semana do meio Ambiente</h5>
                <p class="card-text">O Instituto Federal de Mato Grosso do Sul (IFMS) realiza a partir de 31 de maio mais uma edição da Semana do Meio Ambiente (SMA), realizada anualmente em celebração ao Dia Mundial do Meio Ambiente, comemorado em 5 de junho.</p>
                <p class="card-text"><small class="text-body-secondary">Atualizado no dia 09/05/2023 16h46</small></p>
            </div>
        </div>
        <div class="card">
            <a href="https://midiamax.uol.com.br/cotidiano/emprego-concurso/2022/isencao-para-novos-alunos-de-cursos-tecnicos-da-ifms-termina-nesta-terca-feira/"><img src="../../arquivos/imagens/ea.jpeg" class="card-img-top" alt="Ifms imagem"></a>

            <div class="card-body">
                <h5 class="card-title">IFMS</h5>
                <p class="card-text">Isenção para novos alunos de cursos técnicos do IFMS termina nesta terça-feira.</p>
                <p class="card-text"><small class="text-body-secondary">Atulizado no dia 10/05/2023</small></p>
            </div>
        </div>
        <div class="card">
            <a href="https://www.ifms.edu.br/noticias/2023/ultimos-dias-de-inscricoes-para-bolsista-do-qualifica-mais"><img src="../../arquivos/imagens/bolsa.png" class="card-img-top" alt="qualifica imagem"></a>
            <div class="card-body">
                <h5 class="card-title">Últimos dias de inscrições para bolsista do Qualifica Mais</h5>
                <p class="card-text">O Instituto Federal de Mato Grosso do Sul (IFMS) recebe até a próxima sexta-feira, 12, as inscrições para seleção de bolsistas que atuarão em cursos de Formação Inicial e Continuada (FIC) que serão ofertados em 2023 por meio do Programa Qualifica Mais EnergIF.</p>
                <p class="card-text"><small class="text-body-secondary">10/05/2023 08h42</small></p>
            </div>
        </div>
    </div>



</body>



</html>