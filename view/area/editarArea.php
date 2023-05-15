<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<?php $path = 'http://' . $_SERVER["HTTP_HOST"] . '/TABWEB'; ?>

<head>
    <meta charset="UTF-8">
    <title>Editar Área</title>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
    <link href="../../arquivos/css/bootstrap.min.css" rel="stylesheet">
    <script src="../../arquivos/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="../../arquivos/js/busca.cep.js"></script>
</head>

<body>
    <?php include("../../menu.php") ?>
    <div class="progress" role="progressbar" aria-label="Info example" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100">
        <div class="progress-bar bg-info text-dark" style="width: 55%">55%</div>
    </div>
    <div class="container">
        <div class="row mb-4 mt-4">
            <div class="alert alert-light" role="alert">
                <h1>Editar Área</h1>
            </div>
        </div>
        <?php
        try {
            $conexao = new PDO("mysql:host=localhost; dbname=projetoweb2", "root", "");
        } catch (PDOException $e) {
            die("Ocorreu um erro inesperado " . $e->getMessage());
        }

        $idArea = $_GET['idArea'];

        try {
            $sql = "select * from area where idArea = " . $idArea;
            $resultado = $conexao->query($sql);
            if ($resultado->rowCount() > 0) {
                $linha = $resultado->fetch();

        ?>
                <form action="../../repositorio/area/editarArea.php" method="POST">
                    <input value="<?php echo $linha['idArea'] ?>" type="text" name="idArea" id="idArea" hidden>
                    <div class="row mb-3">
                        <div class="col col-md-12">
                            <label class="form-label" for="idnome">Nome</label>
                            <input class="form-control" value="<?php echo $linha['nomeArera'] ?>" type="text" name="nome" id="idnome">
                        </div>
                    </div>
            <?php
            }
        } catch (PDOException $e) {
            die("Ocorreu um erro " . $e->getMessage());
        }
            ?>

            <input class="btn btn-primary" type="submit" value="Salvar">
                </form>
    </div>


</body>
<di>
    _____________________________________________________________________________________________________________________________________________________________________________________________________
</di>
<nav id="navbar-example2" class="navbar bg-body-tertiary px-3 mb-3">
    <a class="navbar-brand" href="https://www.ifms.edu.br/noticias">Notícias Ifms</a>
    <ul class="nav nav-pills">
        <li class="nav-item">
            <a class="nav-link" href="#scrollspyHeading1">Editar Área</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#scrollspyHeading2">Notícia.1</a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Outras Notícias</a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#scrollspyHeading3">Notícia.2</a></li>
                <li><a class="dropdown-item" href="#scrollspyHeading4">Notícia.3</a></li>
                <li>
                    <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="#scrollspyHeading5">Notícia.4</a></li>

            </ul>
        </li>
    </ul>
</nav>
<div data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-root-margin="0px 0px -40%" data-bs-smooth-scroll="true" class="scrollspy-example bg-body-tertiary p-4 rounded-2" tabindex="0">
    <h4 id="scrollspyHeading1">Últimos dias para inscrição de bolsistas na Universidade Aberta do Brasil</h4>
    <div class="d-flex position-relative" style="max-width: 640rem;">


        <a href="https://www.ifms.edu.br/noticias/2023/ultimos-dias-de-inscricao-para-bolsista-da-universidade-aberta-do-brasil"><img src="../../arquivos/imagens/uni.png" class=" img-thumbnail" alt="Imagem do site do ifms de noticias"></a>

        <div>

            <div class="text p-4">
                <p>Seguem até a próxima segunda-feira, 8, as inscrições para seleção de profissionais interessados em atuar como bolsistas do Instituto Federal de Mato Grosso do Sul (IFMS) no âmbito da Universidade Aberta do Brasil (UAB).</p>
                <p>A seleção se destina ao cadastro reserva para professor formador e tutor a distância (edital nº 024/2023), cuja prioridade de convocação é de professores do Instituto Federal, e para coordenador de cursos e coordenador de tutoria (edital n° 025/2023), seleção exclusiva para servidores da instituição.</p>


            </div>

        </div>


    </div>
    <p>Para Mais informações clique na imagem acima</p>


    <h4 id="scrollspyHeading2">Relatório traz os resultados institucionais de 2022</h4>
    <div class="d-flex position-relative" style="max-width: 6240rem;">


        <a href="https://www.ifms.edu.br/noticias/2023/relatorio-traz-os-resultados-institucionais-de-2022"><img src="../../arquivos/imagens/get.png" class=" img-thumbnail" alt="Imagem do site do ifms de noticias"></a>

        <div>

            <div class="text p-4">
                <p>Está disponível para consulta o Relatório de Gestão (RG) do ano de 2022 do Instituto Federal de Mato Grosso do Sul (IFMS). O documento, elaborado anualmente e enviado ao Tribunal de Contas da União (TCU), traz a prestação de contas da instituição, sendo um dos principais instrumentos de comunicação entre governo, cidadãos e seus representantes.</p>



            </div>

        </div>


    </div>
    <p>Para Mais informações clique na imagem acima</p>
    <h4 id="scrollspyHeading3">Aberta submissão de propostas para Iniciação Científica e Tecnológica</h4>
    <div class="d-flex position-relative" style="max-width: 6240rem;">


        <a href="https://www.ifms.edu.br/noticias/2023/aberta-submissao-de-propostas-para-iniciacao-cientifica-e-tecnologica"><img src="../../arquivos/imagens/not.png" class=" img-thumbnail" alt="Imagem do site do ifms de noticias"></a>

        <div>

            <div class="text p-4">
                <p>O Instituto Federal de Mato Grosso do Sul (IFMS) está com inscrições abertas para a seleção de projetos de pesquisa e indicação de estudantes no edital de Iniciação Científica e Tecnológica. </p>
                <p>Serão concedidas até 195 bolsas, com duração de 12 meses (entre agosto deste ano e julho de 2024), para discentes dos cursos de nível médio e superior dos campi Aquidauana, Campo Grande, Corumbá, Coxim, Dourados, Jardim, Naviraí, Nova Andradina, Ponta Porã e Três Lagoas. </p>


            </div>

        </div>


    </div>
    <p>Para Mais informações clique na imagem acima</p>
    <h4 id="scrollspyHeading4">Jogos do IFMS serão mais uma vez em Dourados</h4>
    <div class="d-flex position-relative" style="max-width: 6240rem;">


        <a href="https://www.ifms.edu.br/noticias/2023/jogos-do-ifms-serao-mais-uma-vez-em-dourados"><img src="../../arquivos/imagens/acv.png" class=" img-thumbnail" alt="Imagem do site do ifms de noticias"></a>

        <div>

            <div class="text p-4">
                <p>A edição 2023 dos Jogos do Instituto Federal de Mato Grosso do Sul (JIFMS) será realizada no município de Dourados. A confirmação foi feita na quinta-feira, 6, por meio de edital.</p>
                <p> A competição está prevista para ocorrer no mês de junho. É a segunda vez que o campus, localizado na segunda maior cidade do Estado, recebe a disputa – a primeira foi em 2017. </p>


            </div>

        </div>


    </div>
    <p>Para Mais informações clique na imagem acima</p>

    <h4 id="scrollspyHeading5"></h4>
    <p></p>
</div>


</html>