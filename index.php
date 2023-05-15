<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <title>Manter Aluno e Professor</title>
    <link href="./arquivos/css/bootstrap.min.css" rel="stylesheet">
    <script src="./arquivos/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <?php include("./menu.php") ?>
    <div class="progress" role="progressbar" aria-label="Info example" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
        <div class="progress-bar bg-info text-dark" style="width: 20%">20%</div>
    </div>
    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
        <h1 class="display-4">Desenvolvimento Web 2</h1>
        <p class="lead">Objetivo: Desenvolver aplicações WEB utilizando servidor apache, linguagem PHP, biblioteca
            jQuery, acesso a banco de dados e técnicas de orientação a objetos seguindo o padrão MVC para desenvolver
            aplicações completas.</p>

    </div>

    <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">Menu da atividade</button>

    <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">Rec.Dev-Web2</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div class="alert alert-primary" role="alert">
                <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">Atividade de Dev Web2</h5>
                <p></p>

                <p><strong> 1.Será analisado todos os requisitos da atividade 03.</strong></p>

                <p><strong>2.A aplicação deve estar obedecendo as regras de utilização das tags HTML como na apostila módulo 2 Web Acessível.</strong></p>


                <div class="alert alert-info" role="alert">

                    <p><strong>Exemplo:</strong></p>
                    <p>* Utilizar “ul” e “li quando se quer demonstrar informações em lista”</p>
                    <p>* Criação de links compreensíveis</p>
                    <p>* utilização de “alt”</p>
                    <p>* textos de “alt” padronizados quando for o caso</p>
                    <p>* utilização de cores</p>
                    <p>* Imagens como botão</p>
                    <p>* Tabela</p>
                </div>
            </div>
        </div>



    </div>

    <button class="btn btn-warning" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">Moodle Ifms</button>

    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasRightLabel">Moodle</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>


        </div>
        <div class="offcanvas-body">
            <div class="alert alert-primary" role="alert">
                <h5 class="offcanvas-title" id="offcanvasRightLabel">É utilizada Porque?</h5>
                <p> Para o desenvolvimento das aulas a distância, é utilizada a plataforma Moodle como Ambiente Virtual de Ensino e Aprendizagem (AVEA), permitindo a integração dos conteúdos disponibilizados, a interatividade, a formação de grupos de estudo, a produção colaborativa e a comunicação entre os atores envolvidos.</p>
                <a href="https://ead.ifms.edu.br/"><img src="./arquivos/imagens/ms.png" class="card-img-top " alt="Moodle imagens"></a>


            </div>
        </div>
    </div>


    <div class="container">

        <div class="row">
            <div class="col-md-3">
            </div>
            <div class="col-md-6">
                <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active" data-bs-interval="2000">
                            <img src="./arquivos/imagens/ifms1.png" class="d-block w-100" alt="ifms">

                        </div>
                        <div class="carousel-item" data-bs-interval="2000">
                            <img src="./arquivos/imagens/ifms2.jpeg" class="d-block w-100" alt="ifms">
                        </div>
                        <div class="carousel-item">
                            <img src="./arquivos/imagens/ifms3.jpeg" class="d-block w-100" alt="ifms">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>


                </div>
            </div>
            <div class="col-md-3">
                <div class="card" style="width: 18rem;">
                    <a href="https://chrome.google.com/webstore/detail/adblock-master/aalliemglapliaagpcgcjkcmidodoicc"><img src="./arquivos/imagens/todd.jpeg" class="card-img-top" alt="imagens aleatoria de propaganda"></a>
                    <div class="card-body">
                        <h5 class="card-title">AD Block Master</h5>
                        <p class="card-text">Cansado de Propagandas ? Clique no botão e visite a pagina de nosso adblock e desapareça com as Propagandas !!! </p>
                        <a href="https://chrome.google.com/webstore/detail/adblock-master/aalliemglapliaagpcgcjkcmidodoicc" class="btn btn-danger ">Aperte o botão</a>
                    </div>

                </div>
            </div>
            <div class="accordion accordion-flush" id="accordionFlushExample">
                <div class="alert alert-dark" role="alert">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                Importancia
                            </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">O desenvolvimento web é importante porque permite que as empresas e indivíduos tenham uma presença online e alcancem um público maior. Além disso, o desenvolvimento web pode ajudar a melhorar a eficiência dos negócios e a comunicação com os clientes. O desenvolvimento web também pode ajudar a melhorar a
                                experiência do usuário em sites e aplicativos. Existem muitas outras razões pelas quais o desenvolvimento web é importante, mas essas são algumas das principais</div>
                        </div>
                    </div>
                </div>



            </div>
</body>

</html>