<?php

include('header-inc.php'); ?>

<section id="banner" class="py-5">
    <div class="container">
        <div class="container-banner">
            <div class="container-banner__title">
                <h1 class="text-center">Seven Living</h1>
            </div>

        </div>
    </div>
</section>
</main>

<section id="infos-gerais">
    <div class="container-fluid px-4">
        <div class="row">
            <div class="container-infos col-md-6 col-lg-6 col-xl-3 col-12 col-sm-12">
                <div class="row">
                    <div class="col-md-2 col-2 col-sm-2 d-flex flex-column justify-content-center">
                        <img src="./src/img/Icones/maximo-localizacao.png" alt="Localização" class="img-fluid">
                    </div>
                    <div class="infos-text d-flex flex-column justify-content-center align-items-center col-md-10 col-10 col-sm-10">
                        <p class="m-0 text-info">Avenida General San Martin, 132 Ponta da Praia - Santos</p>
                    </div>
                </div>
            </div>
            <div class="container-infos col-md-6 col-lg-6 col-xl-2 col-12 col-sm-12">
                <div class="row">
                    <div class="col-md-3 col-2 col-sm-2 d-flex flex-column justify-content-center">
                        <img src="./src/img/Icones/maximo-dormitorio.png" alt="Dormitórios" class="img-fluid">
                    </div>
                    <div class="d-flex flex-column justify-content-center align-items-center infos-text col-md-9 col-10 col-sm-10">
                        <p class="m-0 text-info">1,2,3 dormitórios <br class="br-dorms">(2 suítes)</p>
                    </div>
                </div>
            </div>
            <div class="container-infos container-infos-sm col-md-6 col-lg-6 col-xl-2 col-12 col-sm-12">
                <div class="row">
                    <div class="col-md-4 col-2 col-sm-2 d-flex flex-column justify-content-center">
                        <img src="./src/img/Icones/maximo-metragem.png" alt="Metragem" class="img-fluid">
                    </div>
                    <div class="d-flex flex-column justify-content-center align-items-center infos-text col-md-8 col-sm-10 col-10">
                        <p class="m-0 text-info">55 a 96 m²</p>
                    </div>
                </div>
            </div>
            <div class="container-infos container-infos-sm col-md-6 col-lg-6 col-xl-2 col-12 col-sm-12">
                <div class="row">
                    <div class="col-md-4 col-2 col-sm-2 d-flex flex-column justify-content-center">
                        <img src="./src/img/Icones/maximo-garagem.png" alt="Vagas" class="img-fluid">
                    </div>
                    <div class="d-flex flex-column justify-content-center align-items-center infos-text col-md-8 col-10 col-sm-10">
                        <p class="m-0 text-info">1 vaga</p>
                    </div>
                </div>
            </div>
            <div class="container-infos col-md-6 col-lg-6 col-xl-2 col-12 col-sm-12">
                <div class="row">
                    <div class="col-md-3 col-2 col-sm-2 d-flex flex-column justify-content-center">
                        <img src="./src/img/Icones/maximo-valor.png" alt="Vagas" class="img-fluid">
                    </div>
                    <div class="d-flex flex-column justify-content-center align-items-center infos-text col-md-9 col-10 col-sm-10">
                        <p class="m-0 text-info">A partir de R$ 000.000,00</p>
                    </div>
                </div>
            </div>
            <div class="container-infos col-md-6 col-lg-6 col-xl-2 col-12 col-sm-12">
                <div class="button-interesse">
                    <button class="botao-interesse"><a href="#">Tenho interesse</a></a>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="carousel-img">
    <div class="container-title">
        <h1 class="title-empreendimento">Qualidade de vida, saúde e modernidade em um só lugar</h1>
        <h2 class="title-empreendimento">Conheça Seven Living</h2>
        <p class="paragrafo-empreendimento">O Seven Living, será construído em Ponta da Praia (Santos -SP), um bairro de alto padrão e conhecido por suas ruas tranquilas e arborizadas.<br>Desenhado para quem busca qualidade de vida e sabe aproveitar o melhor de cada momento.</p>
    </div>
    <div class="container-carousel">
        <div class="carousel-container">
            <div class="carousel-images">
                <img src="./src/img/empreedimentos/Imagem-16-_1_.webp" alt="Image 1">
                <img src="./src/img/empreedimentos/Imagem-16-_1_.webp" alt="Image 2">
                <img src="./src/img/empreedimentos/Imagem-16-_1_.webp" alt="Image 3">
            </div>
            <div class="botao-voltar">
                <button class="controlador-voltar">&#10094;</button>
            </div>
            <div class="botao-avancar">
                <button class="controlador-avancar">&#10095;</button>
            </div>
        </div>
        <div class="carousel-dots">
            <span class="active"></span>
            <span></span>
            <span></span>
        </div>
    </div>
</section>

<section id="map-section">
    <div class="container-fluid px-5">
        <div class="row">
            <div class="col-md-12 col-lg-8 col-12 col-sm-12">
                <img src="./src/img/mapa-dots.png" alt="Mapa" class="img-fluid">
            </div>
            <div class="col-md-12 col-lg-4 col-12 col-sm-12 d-flex justify-content-center flex-column">
                <div class="row flex-column">
                    <div class="row row-localizacao">
                        <div class="col-md-2 col-3 col-sm-3">
                            <img src="./src/img/Icones/maximo-localizacao.png" alt="Localização" class="img-fluid">
                        </div>
                        <div class="col-md-10 col-9 col-sm-9 p-0">
                            <h3 class="title-empreendimento m-0">Santos</h3>
                        </div>
                    </div>
                    <div class="map-subtitle">
                        <p class="subtitle-empreendimento">Avenida General San Martin, 132 Ponta da Praia - Santos</p>
                    </div>
                    <div class="map-button">
                        <a class="map-button__button" href="#">VER NO MAPA</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="lazer-section">
    <div class="container">
        <div class="container-title">
            <h1 class="title-empreendimento">Ampla área de lazer</h1>
        </div>
        <div class="container-options-lazer">
            <div class="row">
                <?php
                // Array com as opções de lazer
                $opcoes_de_lazer = array(
                    "Beauty Care",
                    "Brinquedoteca",
                    "Coworking",
                    "Dog Wash",
                    "Espaço Gourmet",
                    "Espaço Pet",
                    "Fitness",
                    "Home Theater",
                    "Lavanderia",
                    "Piscina",
                    "Piscina Infantil",
                    "Playground",
                    "Sala de massagem",
                    "Salão de Jogos",
                    "Salão de Pilates",
                    "Sauna seca",
                    "Sky lounge"
                );

                // Loop para exibir cada opção
                foreach ($opcoes_de_lazer as $opcao) {
                    echo '<div class="col-md-4 col-6 col-sm-6 mb-4 d-flex align-items-center area-de-lazer-opcao"><ul class="lista-opcoes align-items-center d-flex p-0"><img src="./src/img/Icones/icon-check.png" alt="Check" class="img-fluid icon-opcoes"><li class="itens-opcoes m-0">' . htmlspecialchars($opcao) . '</li></ul></div>';
                }
                ?>
            </div>
        </div>
    </div>
</section>

<section id="plantas">
    <div class="container">
        <div class="container-title">
            <h1 class="title-empreendimento">Planta</h1>
        </div>
        <div class="container-tab d-flex justify-content-center flex-column align-items-center">
            <ul class="nav nav-tabs w-100 mb-4" id="myTab" role="tablist">
                <li class="nav-item tab-item" role="presentation">
                    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#Final1-55m" type="button" role="tab" aria-controls="Final1-55m" aria-selected="true">Final 1 e 5 55m²</button>
                </li>
                <li class="nav-item tab-item" role="presentation">
                    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#final2-96m" type="button" role="tab" aria-controls="final2-96m" aria-selected="false">Final 2 96m²</button>
                </li>
                <li class="nav-item tab-item" role="presentation">
                    <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#final3-58m" type="button" role="tab" aria-controls="final3-58m" aria-selected="false">Final 3 58m²</button>
                </li>
                <li class="nav-item tab-item" role="presentation">
                    <button class="nav-link" id="disabled-tab" data-bs-toggle="tab" data-bs-target="#final4-59m" type="button" role="tab" aria-controls="final4-59m" aria-selected="false">Final 4 59m²</button>
                </li>
                <li class="nav-item tab-item" role="presentation">
                    <button class="nav-link" id="disabled-tab" data-bs-toggle="tab" data-bs-target="#final6-58m" type="button" role="tab" aria-controls="final6-58m" aria-selected="false">Final 6 58m²</button>
                </li>
                <li class="nav-item tab-item" role="presentation">
                    <button class="nav-link" id="disabled-tab" data-bs-toggle="tab" data-bs-target="#area-de-lazer" type="button" role="tab" aria-controls="area-de-lazer" aria-selected="false">Área de Lazer (6º andar)</button>
                </li>
                <li class="nav-item tab-item" role="presentation">
                    <button class="nav-link" id="disabled-tab" data-bs-toggle="tab" data-bs-target="#rooftop" type="button" role="tab" aria-controls="rooftop" aria-selected="false">Rooftop (28º andar)</button>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="Final1-55m" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="d-flex flex-column container-button-plantas">
                                <div class="button-plantas active">
                                    <span class="material-symbols-outlined">
                                        arrow_drop_down
                                    </span><button class="nav-link" id="button-planta1" data-bs-target="#planta1" type="button">Final 1 e 5 55m²</button>
                                </div>
                                <div class="button-plantas">
                                    <span class="material-symbols-outlined">
                                        arrow_drop_down
                                    </span> <button class="nav-link" id="button-planta2" data-bs-target="#planta2" type="button">Final 1 e 5 55m² com Acessibilidade</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <img src="./src/img/plantas/54m²-e-58m²-1-Dorm-_suite_-e-lavabo-_1_.webp" alt="Planta" class="img-fluid" id="planta1">
                            <img src="./src/img/plantas/54m²-e-58m²-1-Dorm-_suite_-e-lavabo-_1_.webp" alt="Planta" class="img-fluid d-none" id="planta2">
                            <p class="info-plantas mt-4 px-4">Os elementos decorativos, os móveis, os acessórios, as vegetações e os demais elementos elucidativos das ilustrações, são meramente sugestivos, não incluídos nas especificações da obra e no preço das unidades.<span>Estudo Preliminar de Projeto | Sujeito a Alterações.</span></p>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="final2-96m" role="tabpanel" aria-labelledby="profile-tab" tabindex="1">
                </div>
                <div class="tab-pane fade" id="final3-58m" role="tabpanel" aria-labelledby="contact-tab" tabindex="2">...</div>
                <div class="tab-pane fade" id="final4-59m" role="tabpanel" aria-labelledby="disabled-tab" tabindex="3">...</div>
                <div class="tab-pane fade" id="final6-58m" role="tabpanel" aria-labelledby="disabled-tab" tabindex="4">...</div>
                <div class="tab-pane fade" id="area-de-lazer" role="tabpanel" aria-labelledby="disabled-tab" tabindex="5">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="d-flex flex-column container-button-plantas">
                                <div class="button-plantas active">
                                    <span class="material-symbols-outlined">
                                        arrow_drop_down
                                    </span><button class="nav-link" id="button-bolotario1" data-bs-target="#bolotario1" type="button">Bolotário</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="container-bolotario position-relative">
                                <img src="./src/img/plantas/bolotario-n.png" alt="Planta" class="img-fluid" id="bolotario1">
                                <div class="bolotario-item" style="left: 43%; top:14%;" data-info="Piscina Adulto">
                                    <span class="material-symbols-outlined">
                                        add
                                    </span>
                                </div>
                                <div class="bolotario-item" style="left: 81%; top:13%;" data-info="">
                                    <span class="material-symbols-outlined">
                                        add
                                    </span>
                                </div>
                                <div class="bolotario-item" style="left: 22%; top:36%;" data-info="">
                                    <span class="material-symbols-outlined">
                                        add
                                    </span>
                                </div>
                                <div class="bolotario-item" style="left: 44%; top:34%;" data-info="">
                                    <span class="material-symbols-outlined">
                                        add
                                    </span>
                                </div>
                                <div class="bolotario-item" style="left: 67%; top:36%;" data-info="">
                                    <span class="material-symbols-outlined">
                                        add
                                    </span>
                                </div>
                                <div class="bolotario-item" style="left: 86%; top:37%;" data-info="">
                                    <span class="material-symbols-outlined">
                                        add
                                    </span>
                                </div>
                                <div class="bolotario-item" style="left: 20%; top:55%;" data-info="">
                                    <span class="material-symbols-outlined">
                                        add
                                    </span>
                                </div>
                                <div class="bolotario-item" style="left: 37%; top:63%;" data-info="">
                                    <span class="material-symbols-outlined">
                                        add
                                    </span>
                                </div>
                                <div class="bolotario-item" style="left: 72%; top:49%;" data-info="">
                                    <span class="material-symbols-outlined">
                                        add
                                    </span>
                                </div>
                                <div class="bolotario-item" style="left: 71%; top:62%;" data-info="">
                                    <span class="material-symbols-outlined">
                                        add
                                    </span>
                                </div>
                                <div class="bolotario-item" style="left: 16%; top:74%;" data-info="">
                                    <span class="material-symbols-outlined">
                                        add
                                    </span>
                                </div>
                                <div class="bolotario-item" style="left: 33%; top:75%;" data-info="">
                                    <span class="material-symbols-outlined">
                                        add
                                    </span>
                                </div>
                                <div class="bolotario-item" style="left: 47%; top:81%;" data-info="">
                                    <span class="material-symbols-outlined">
                                        add
                                    </span>
                                </div>
                                <div class="bolotario-item" style="left: 60%; top:75%;" data-info="">
                                    <span class="material-symbols-outlined">
                                        add
                                    </span>
                                </div>
                                <div class="bolotario-item" style="left: 73%; top:76%;" data-info="">
                                    <span class="material-symbols-outlined">
                                        add
                                    </span>
                                </div>
                            </div>
                            <div id="tooltip" style="display: none;"></div>
                            <p class="info-plantas mt-4 px-4">Os elementos decorativos, os móveis, os acessórios, as vegetações e os demais elementos elucidativos das ilustrações, são meramente sugestivos, não incluídos nas especificações da obra e no preço das unidades.<span>Estudo Preliminar de Projeto | Sujeito a Alterações.</span></p>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="rooftop" role="tabpanel" aria-labelledby="disabled-tab" tabindex="6">...</div>
            </div>
        </div>
    </div>
</section>

<section id="button-tour-vista">
    <div class="container-fluid">
        <div class="row">
            <div class="btn-tour-vista col-md-12 col-lg-6">
                <a href=#><img src="./src/img/Icones/360-60x60.png" alt="360" class="img-fluid">Tour Virtual<span class="material-symbols-outlined">
                        chevron_right
                    </span></a>
            </div>
            <div class="btn-tour-vista col-md-12 col-lg-6">
                <a href=#><img src="./src/img/Icones/vistaandares-60x60.png" alt="Vista" class="img-fluid">Vista dos Andares<span class="material-symbols-outlined">
                        chevron_right
                    </span></a>
            </div>
        </div>
    </div>
</section>

<section id="obra-status">
    <div class="container">
        <div class="container-title">
            <h2 class="title-obras">Acompanhe a obra</h2>
        </div>
        <div class="container-total-obra">
            <p class="title-status">Total da Obra</p>
            <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                <div class="progress-bar" style="width: 25%"></div>
                <p class="progress-number">25%</p>
            </div>
        </div>
        <div class="container-carousel-obras">



            <div class="carousel-container">
                <div class="carousel-slide" id="carouselSlide">
                    <div class="carousel-item carousel-item-obras">
                        <img src="./src/img/obras/obra_seven_living-768x576.webp" alt="Image 1">
                        <div class="carousel-caption">JUNHO/2024</div>
                    </div>
                    <div class="carousel-item carousel-item-obras">
                        <img src="./src/img/obras/obra_seven_living_frente-768x576.webp" alt="Image 2">
                        <div class="carousel-caption">JUNHO/2024</div>
                    </div>
                    <div class="carousel-item carousel-item-obras">
                        <img src="./src/img/obras/obra_seven_living-768x576.webp" alt="Image 3">
                        <div class="carousel-caption">JUNHO/2024</div>
                    </div>
                    <div class="carousel-item carousel-item-obras">
                        <img src="./src/img/obras/obra_seven_living_frente-768x576.webp" alt="Image 4">
                        <div class="carousel-caption">JUNHO/2024</div>
                    </div>
                </div>
                <button class="carousel-control-prev" onclick="prevSlide()"><span class="material-symbols-outlined controller-carousel">
                        arrow_back_ios
                    </span></button>
                <button class="carousel-control-next" onclick="nextSlide()"><span class="material-symbols-outlined controller-carousel">
                        arrow_forward_ios
                    </span></button>
                <div class="carousel-indicators">
                    <button class="active" onclick="currentSlide(0)"></button>
                    <button onclick="currentSlide(1)"></button>
                    <button onclick="currentSlide(2)"></button>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="video-empreendimento">
    <div class="container">
        <div class="container-title">
            <h5 class="video-title">Assista ao <span>vídeo</span></h5>
        </div>
        <div class="container-play-video">
            <div class="button-play">
                <span class="material-symbols-outlined">
                    play_arrow
                </span>
            </div>
            <h4 class="video-data">(Julho de 2024)</h4>
        </div>
    </div>
</section>

<section id="obra-status2">
    <div class="container">
        <div class="row row-status">
            <div class="col-md-6 total-item mb-5">
                <div class="container-total-obra">
                    <p class="title-status">Movimentação de terra</p>
                    <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar" style="width: 25%"></div>
                        <p class="progress-number">25%</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 total-item mb-5">
                <div class="container-total-obra">
                    <p class="title-status">Impermeabilização</p>
                    <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar" style="width: 25%"></div>
                        <p class="progress-number">25%</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row row-status">
            <div class="col-md-6 total-item mb-5">
                <div class="container-total-obra">
                    <p class="title-status">Canteiro de Obras</p>
                    <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar" style="width: 25%"></div>
                        <p class="progress-number">25%</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 total-item mb-5">
                <div class="container-total-obra">
                    <p class="title-status">Esquadrias</p>
                    <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar" style="width: 25%"></div>
                        <p class="progress-number">25%</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row row-status">
            <div class="col-md-6 total-item mb-5">
                <div class="container-total-obra">
                    <p class="title-status">Fundações</p>
                    <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar" style="width: 25%"></div>
                        <p class="progress-number">25%</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 total-item mb-5">
                <div class="container-total-obra">
                    <p class="title-status">Revestimentos</p>
                    <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar" style="width: 25%"></div>
                        <p class="progress-number">25%</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row row-status">
            <div class="col-md-6 total-item mb-5">
                <div class="container-total-obra">
                    <p class="title-status">Estrutura</p>
                    <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar" style="width: 25%"></div>
                        <p class="progress-number">25%</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 total-item mb-5">
                <div class="container-total-obra">
                    <p class="title-status">Pavimentação</p>
                    <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar" style="width: 25%"></div>
                        <p class="progress-number">25%</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row row-status">
            <div class="col-md-6 total-item mb-5">
                <div class="container-total-obra">
                    <p class="title-status">Alvenaria</p>
                    <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar" style="width: 25%"></div>
                        <p class="progress-number">25%</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 total-item mb-5">
                <div class="container-total-obra">
                    <p class="title-status">Elevadores</p>
                    <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar" style="width: 25%"></div>
                        <p class="progress-number">25%</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row row-status">
            <div class="col-md-6 total-item mb-5">
                <div class="container-total-obra">
                    <p class="title-status">Instalações Elétricas</p>
                    <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar" style="width: 25%"></div>
                        <p class="progress-number">25%</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 total-item mb-5">
                <div class="container-total-obra">
                    <p class="title-status">Pinturas</p>
                    <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar" style="width: 25%"></div>
                        <p class="progress-number">25%</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row row-status">
            <div class="col-md-6 total-item">
                <div class="container-total-obra">
                    <p class="title-status">Instalações Hidráulicas</p>
                    <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar" style="width: 25%"></div>
                        <p class="progress-number">25%</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 total-item">
                <div class="container-total-obra">
                    <p class="title-status">Limpeza final de obra</p>
                    <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar" style="width: 25%"></div>
                        <p class="progress-number">25%</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="ficha-tecnica">
    <div class="container">
        <div class="container-title">
            <h1 class="title-empreendimento">Ficha técnica e mais informações</h1>
        </div>
        <div class="container-acordeao">
            <div class="acordeao-item">
                <span class="material-symbols-outlined arrow-acordeao">
                    arrow_right
                </span>
                <p class="acordeao-title">Ficha Técnica</p>
            </div>
            <div class="acordeao-descricao">
                <ul>
                    <li><span class="descricao-item">Área construída</span><span class="descricao-resp">X.XXX m²</span></li>
                    <li><span class="descricao-item">Torres</span><span class="descricao-resp">1 Torre</span></li>
                    <li><span class="descricao-item">Unidades por andar</span><span class="descricao-resp">X Unidades</span></li>
                    <li><span class="descricao-item">Total por unidades</span><span class="descricao-resp">X unidades + X coberturas</span></li>
                    <li><span class="descricao-item">Nº de pavimentos</span><span class="descricao-resp">X pavimentos</span></li>
                </ul>
            </div>
        </div>
        <div class="container-acordeao">
            <div class="acordeao-item">
                <span class="material-symbols-outlined arrow-acordeao">
                    arrow_right
                </span>
                <p class="acordeao-title">Sustentabilidade</p>
            </div>
            <div class="acordeao-descricao">
                <ul>
                    <li><span class="descricao-item">Área construída</span><span class="descricao-resp">X.XXX m²</span></li>
                    <li><span class="descricao-item">Torres</span><span class="descricao-resp">1 Torre</span></li>
                    <li><span class="descricao-item">Unidades por andar</span><span class="descricao-resp">X Unidades</span></li>
                    <li><span class="descricao-item">Total por unidades</span><span class="descricao-resp">X unidades + X coberturas</span></li>
                    <li><span class="descricao-item">Nº de pavimentos</span><span class="descricao-resp">X pavimentos</span></li>
                </ul>
            </div>
        </div>
        <div class="container-acordeao">
            <div class="acordeao-item">
                <span class="material-symbols-outlined arrow-acordeao">
                    arrow_right
                </span>
                <p class="acordeao-title">Diferenciais Construtivos</p>
            </div>
            <div class="acordeao-descricao">
                <ul>
                    <li><span class="descricao-item">Área construída</span><span class="descricao-resp">X.XXX m²</span></li>
                    <li><span class="descricao-item">Torres</span><span class="descricao-resp">1 Torre</span></li>
                    <li><span class="descricao-item">Unidades por andar</span><span class="descricao-resp">X Unidades</span></li>
                    <li><span class="descricao-item">Total por unidades</span><span class="descricao-resp">X unidades + X coberturas</span></li>
                    <li><span class="descricao-item">Nº de pavimentos</span><span class="descricao-resp">X pavimentos</span></li>
                </ul>
            </div>
        </div>
        <div class="container-acordeao">
            <div class="acordeao-item">
                <span class="material-symbols-outlined arrow-acordeao">
                    arrow_right
                </span>
                <p class="acordeao-title">Diferenciais do produto</p>
            </div>
            <div class="acordeao-descricao">
                <ul>
                    <li><span class="descricao-item">Área construída</span><span class="descricao-resp">X.XXX m²</span></li>
                    <li><span class="descricao-item">Torres</span><span class="descricao-resp">1 Torre</span></li>
                    <li><span class="descricao-item">Unidades por andar</span><span class="descricao-resp">X Unidades</span></li>
                    <li><span class="descricao-item">Total por unidades</span><span class="descricao-resp">X unidades + X coberturas</span></li>
                    <li><span class="descricao-item">Nº de pavimentos</span><span class="descricao-resp">X pavimentos</span></li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section id="localizacao">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="container-iframe">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14581.217963971167!2d-46.3000798!3d-23.9850225!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce03dcd4fb170b%3A0x41423c0d4e82a293!2sSeven%20Living%20Life%20Residence!5e0!3m2!1spt-BR!2sbr!4v1723060776596!5m2!1spt-BR!2sbr" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
            <div class="col-md-6 localizacao-text">
                <div class="container-title align-items-start">
                    <h1 class="title-empreendimento m-0">Localização</h1>
                </div>
                <div class="container-text">
                    <p>O Bairro Ponta da Praia, em Santos, possuí três museus (Museu do Mar, Museu Marítimo e Museu de Pesca), um complexo esportivo, restaurantes, estação de ferry-boat e está entre os melhores bairros da cidade para morar.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="form-incorporadora">
    <div class="container-fluid p-0">
        <div class="container-form">
            <div class="container-form__img">
                <img src="./src/img/casal-sofa.png" alt="">
            </div>
            <div class="container-form__form">
                <div class="container-form__texto">
                    <h3>Conquiste o seu<br>IMÓVEL dos sonhos!</h3>
                    <p>Os empreendimentos da Maximo Aldana trazem a exclusividade, modernidade e o conforto que você procura.</p>
                </div>
                <form method="POST" action="" id="form-home-incorporadora">
                    <h3>Preencha o formulário para conversar com um especialista.</h3>
                    <div class="form-group">
                        <input type="text" id="name" name="name" placeholder="Nome*" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <input type="tel" id="telefone" name="phone" placeholder="Telefone*" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <input type="email" id="email" placeholder="Email*" name="email" class="form-control" required>
                    </div>
                    <div class="form-group-select">
                        <label for="empreendimento">Qual empreendimento você tem interesse?*</label>
                        <select class="form-select" aria-label="empreendimento" id="empreendimento" name="empreendimento">
                            <option selected>Selecionar uma opção</option>
                            <option value="xxxxxxxx">Opção 1</option>
                            <option value="xxxxxxxxxx">Opção 2</option>
                        </select>
                    </div>
                    <div class="form-group-radio">
                        <label>Qual melhor forma de contato?*</label><br>
                        <label class="label-radio" for="whatsapp">Whatsapp</label>
                        <input type="radio" id="whatsapp" name="contact_method" value="whatsapp" required>
                        &ensp;
                        <label class="label-radio" for="email">E-mail</label>
                        <input type="radio" id="e-mail" name="contact_method" value="email" required>
                        &ensp;
                        <label class="label-radio" for="phone">Telefone</label>
                        <input type="radio" id="phone" name="contact_method" value="phone" required>
                    </div>
                    <div class="form-group-button">
                        <button type="submit" class="button-form-construtora">Enviar</button>
                    </div>
                    <p class="form-footer">Ao enviar esse formulário, eu declaro que aceito receber contato com ofertas de produtos e serviços Maximo Aldana via e-mail, telefone e WhatsApp.</p>
                </form>
            </div>
        </div>
    </div>
</section>

<section id="outros-empreendimentos">
    <div class="container-fluid">
        <div class="container-title">
            <h1 class="title-conheca">Conheça outros empreendimentos</h1>
        </div>
        <div class="container-carousel-conheca">
            <div class="carousel">
                <div class="carousel-inner justify-content-center">
                    <div class="carousel-item-index" data-cidade="sao-bernardo" data-status="futuro-lancamento" data-dormitorio="2-quartos">
                        <div class="card" style="width: 100%;">
                            <div class="image-container">
                                <img src="http://devmaximoaldana.c09b59be.configr.cloud/wp-content/uploads/2024/06/51e223fa0238e8489aca6b51b9e7b6b4.png" class="card-img-top" alt="...">
                                <p class="img-text-title">ALDANA<br>JARDIM</p>
                            </div>
                            <div class="carousel-item-index__estagio">
                                <p>EM CONSTRUÇÃO</p>
                            </div>
                            <div class="card-body">
                                <a class="link-card-title" href="">
                                    <h5 class="card-title">Saiba Mais <span class="material-symbols-outlined">arrow_forward_ios</span></h5>
                                </a>
                                <p class="card-text">JARDIM DO MAR - SÃO BERNARDO DO CAMPO</p>
                                <h4 class="card-text-two">Aldana Jardim</h4>
                                <p class="card-content">59 e 65 m²</p>
                                <p class="card-content">2 dormitórios</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item-index" data-cidade="santo-andre" data-status="lancamento" data-dormitorio="3-quartos">
                        <div class="card" style="width: 100%;">
                            <div class="image-container">
                                <img src="./src/img/seven-living.png" class="card-img-top" alt="...">
                                <p class="img-text-title">SEVEN <br>LIVING</p>
                            </div>
                            <div class="carousel-item-index__estagio">
                                <p>EM CONSTRUÇÃO</p>
                            </div>
                            <div class="card-body">
                                <a class="link-card-title" href="">
                                    <h5 class="card-title">Saiba Mais <span class="material-symbols-outlined">arrow_forward_ios</span></h5>
                                </a>
                                <p class="card-text">PONTA DA PRAIA - SANTOS</p>
                                <h4 class="card-text-two">Seven Living</h4>
                                <p class="card-content">55 e 96 m²</p>
                                <p class="card-content">1, 2, 3 dormitórios (2 suítes)</p>
                                <p class="card-content">1 vaga determinada</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item-index" data-cidade="santos" data-status="em-construcao" data-dormitorio="4-mais">
                        <div class="card" style="width: 100%;">
                            <div class="image-container">
                                <img src="./src/img/Aldana-One.png" class="card-img-top" alt="...">
                                <p class="img-text-title">ALDANA <br>ONE</p>
                            </div>
                            <div class="carousel-item-index__estagio">
                                <p>EM CONSTRUÇÃO</p>
                            </div>
                            <div class="card-body">
                                <a class="link-card-title" href="">
                                    <h5 class="card-title-second-color">Saiba Mais <span class="material-symbols-outlined">arrow_forward_ios</span></h5>
                                </a>
                                <p class="card-text">JARDIM DO MAR - SÃO BERNARDO DO CAMPO</p>
                                <h4 class="card-text-two">Aldana One</h4>
                                <p class="card-content">51 e 58 m²</p>
                                <p class="card-content">2 dormitórios (1 suíte)</p>
                                <p class="card-content">1 vaga determinada</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item-index" data-cidade="guaruja" data-status="pronto" data-dormitorio="2-quartos">
                        <div class="card" style="width: 100%;">
                            <div class="image-container">
                                <img src="./src/img/egydio-martins (1).png" class="card-img-top" alt="...">
                                <p class="img-text-title">EGYDIO <br>MARTINS</p>
                            </div>
                            <div class="carousel-item-index__estagio">
                                <p>EM CONSTRUÇÃO</p>
                            </div>
                            <div class="card-body">
                                <a class="link-card-title" href="">
                                    <h5 class="card-title">Saiba Mais <span class="material-symbols-outlined">arrow_forward_ios</span></h5>
                                </a>
                                <p class="card-text">PONTA DA PRAIA - SANTOS</p>
                                <h4 class="card-text-two">Egydio Martins</h4>
                                <!-- <p class="card-content">55 e 96 m²</p>
                                    <p class="card-content">1, 2, 3 dormitórios (2 suítes)</p>
                                    <p class="card-content">1 vaga determinada</p> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel secondCarousel" style="display: none;">
                <div class="carousel-inner justify-content-center">
                    <div class="carousel-item-index" data-cidade="sao-bernardo" data-status="futuro-lancamento" data-dormitorio="2-quartos">
                        <div class="card" style="width: 100%;">
                            <div class="image-container">
                                <img src="http://devmaximoaldana.c09b59be.configr.cloud/wp-content/uploads/2024/06/51e223fa0238e8489aca6b51b9e7b6b4.png" class="card-img-top" alt="...">
                                <p class="img-text-title">ALDANA<br>JARDIM</p>
                            </div>
                            <div class="carousel-item-index__estagio">
                                <p>EM CONSTRUÇÃO</p>
                            </div>
                            <div class="card-body">
                                <a class="link-card-title" href="">
                                    <h5 class="card-title">Saiba Mais <span class="material-symbols-outlined">arrow_forward_ios</span></h5>
                                </a>
                                <p class="card-text">JARDIM DO MAR - SÃO BERNARDO DO CAMPO</p>
                                <h4 class="card-text-two">Aldana Jardim</h4>
                                <p class="card-content">59 e 65 m²</p>
                                <p class="card-content">2 dormitórios</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item-index" data-cidade="santo-andre" data-status="lancamento" data-dormitorio="3-quartos">
                        <div class="card" style="width: 100%;">
                            <div class="image-container">
                                <img src="./src/img/seven-living.png" class="card-img-top" alt="...">
                                <p class="img-text-title">SEVEN <br>LIVING</p>
                            </div>
                            <div class="carousel-item-index__estagio">
                                <p>EM CONSTRUÇÃO</p>
                            </div>
                            <div class="card-body">
                                <a class="link-card-title" href="">
                                    <h5 class="card-title">Saiba Mais <span class="material-symbols-outlined">arrow_forward_ios</span></h5>
                                </a>
                                <p class="card-text">PONTA DA PRAIA - SANTOS</p>
                                <h4 class="card-text-two">Seven Living</h4>
                                <p class="card-content">55 e 96 m²</p>
                                <p class="card-content">1, 2, 3 dormitórios (2 suítes)</p>
                                <p class="card-content">1 vaga determinada</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item-index" data-cidade="santos" data-status="em-construcao" data-dormitorio="4-mais">
                        <div class="card" style="width: 100%;">
                            <div class="image-container">
                                <img src="./src/img/Aldana-One.png" class="card-img-top" alt="...">
                                <p class="img-text-title">ALDANA <br>ONE</p>
                            </div>
                            <div class="carousel-item-index__estagio">
                                <p>EM CONSTRUÇÃO</p>
                            </div>
                            <div class="card-body">
                                <a class="link-card-title" href="">
                                    <h5 class="card-title-second-color">Saiba Mais <span class="material-symbols-outlined">arrow_forward_ios</span></h5>
                                </a>
                                <p class="card-text">JARDIM DO MAR - SÃO BERNARDO DO CAMPO</p>
                                <h4 class="card-text-two">Aldana One</h4>
                                <p class="card-content">51 e 58 m²</p>
                                <p class="card-content">2 dormitórios (1 suíte)</p>
                                <p class="card-content">1 vaga determinada</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item-index" data-cidade="guaruja" data-status="pronto" data-dormitorio="2-quartos">
                        <div class="card" style="width: 100%;">
                            <div class="image-container">
                                <img src="./src/img/egydio-martins (1).png" class="card-img-top" alt="...">
                                <p class="img-text-title">EGYDIO <br>MARTINS</p>
                            </div>
                            <div class="carousel-item-index__estagio">
                                <p>EM CONSTRUÇÃO</p>
                            </div>
                            <div class="card-body">
                                <a class="link-card-title" href="">
                                    <h5 class="card-title">Saiba Mais <span class="material-symbols-outlined">arrow_forward_ios</span></h5>
                                </a>
                                <p class="card-text">PONTA DA PRAIA - SANTOS</p>
                                <h4 class="card-text-two">Egydio Martins</h4>
                                <!-- <p class="card-content">55 e 96 m²</p>
                                    <p class="card-content">1, 2, 3 dormitórios (2 suítes)</p>
                                    <p class="card-content">1 vaga determinada</p> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fase__button mt-5">
                <button onclick="toggleDisplay()">VER TODOS</button>
            </div>
        </div>
    </div>
</section>

<section id="blog-home" class="pb-5">
    <div class="container-fluid px-2">
        <div class="container-title-blog">
            <h4>Fique por dento do</h4>
            <h2>Nosso Blog</h2>
        </div>
        <div class="container container-card-blog">
            <div class="" style="max-width: 400px; height:575px;">
                <div class="card-blog">
                    <div class="card-blog__img">
                        <img class="img-fluid" src="./src/img/novoContrato.png" alt="">
                    </div>
                    <div class="card-blog__title">
                        <h2>Maximo Aldana pela terceira vez consecutiva, entre as 100 maiores construtoras do Brasil segundo o Ranking Intec</h2>
                    </div>
                    <div class="card-blog__data">
                        <span class="material-symbols-outlined">
                            calendar_today
                        </span>
                        <p>3 de Março de 2023 • Por Máximo Aldana</p>
                    </div>
                    <div class="card-blog__desc">
                        Ranking foi divulgado hoje, no dia 1 de março de 2023. A construtora e incorporadora ficou em...
                    </div>
                    <div class="card-blog__button">
                        <a href="" class="bg-acquagreen">LEIA MAIS</a>
                    </div>
                </div>
            </div>
            <div class="" style="max-width: 400px; height:575px;">
                <div class="card-blog">
                    <div class="card-blog__img">
                        <img class="img-fluid" src="./src/img/100maiores.png" alt="">
                    </div>
                    <div class="card-blog__title">
                        <h2>Maximo Aldana construirá o novo Hospital de Unimed Sul Mineira em Pouso Alegre - MG</h2>
                    </div>
                    <div class="card-blog__data">
                        <span class="material-symbols-outlined">
                            calendar_today
                        </span>
                        <p>16 de Janeiro de 2023 • Por Máximo Aldana</p>
                    </div>
                    <div class="card-blog__desc">
                        Em breve a população de Pouso Alegre (MG) e região passará a contar com o hospital da Unimed...
                    </div>
                    <div class="card-blog__button">
                        <a href="" class="bg-acquagreen">LEIA MAIS</a>
                    </div>
                </div>
            </div>
            <div class="" style="max-width: 400px; height:575px;">
                <div class="card-blog">
                    <div class="card-blog__img">
                        <img class="img-fluid" src="./src/img/premiohealtharq.png" alt="">
                    </div>
                    <div class="card-blog__title">
                        <h2>Maximo Aldana é destaque no HealthARQ 2022</h2>
                    </div>
                    <div class="card-blog__data">
                        <span class="material-symbols-outlined">
                            calendar_today
                        </span>
                        <p>11 de Novembro de 2022 • Por Máximo Aldana</p>
                    </div>
                    <div class="card-blog__desc">
                        Essa semana a Maximo Aldana recebeu o Prêmio HealthARQ 2022 na categoria Inovação em...
                    </div>
                    <div class="card-blog__button">
                        <a href="" class="bg-acquagreen">LEIA MAIS</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container container-card-blog second-card-blog" style="display: none;">
            <div class="" style="max-width: 400px; height:575px;">
                <div class="card-blog">
                    <div class="card-blog__img">
                        <img class="img-fluid" src="./src/img/novoContrato.png" alt="">
                    </div>
                    <div class="card-blog__title">
                        <h2>Maximo Aldana pela terceira vez consecutiva, entre as 100 maiores construtoras do Brasil segundo o Ranking Intec</h2>
                    </div>
                    <div class="card-blog__data">
                        <span class="material-symbols-outlined">
                            calendar_today
                        </span>
                        <p>3 de Março de 2023 • Por Máximo Aldana</p>
                    </div>
                    <div class="card-blog__desc">
                        Ranking foi divulgado hoje, no dia 1 de março de 2023. A construtora e incorporadora ficou em...
                    </div>
                    <div class="card-blog__button">
                        <a href="" class="bg-acquagreen">LEIA MAIS</a>
                    </div>
                </div>
            </div>
            <div class="" style="max-width: 400px; height:575px;">
                <div class="card-blog">
                    <div class="card-blog__img">
                        <img class="img-fluid" src="./src/img/100maiores.png" alt="">
                    </div>
                    <div class="card-blog__title">
                        <h2>Maximo Aldana construirá o novo Hospital de Unimed Sul Mineira em Pouso Alegre - MG</h2>
                    </div>
                    <div class="card-blog__data">
                        <span class="material-symbols-outlined">
                            calendar_today
                        </span>
                        <p>16 de Janeiro de 2023 • Por Máximo Aldana</p>
                    </div>
                    <div class="card-blog__desc">
                        Em breve a população de Pouso Alegre (MG) e região passará a contar com o hospital da Unimed...
                    </div>
                    <div class="card-blog__button">
                        <a href="" class="bg-acquagreen">LEIA MAIS</a>
                    </div>
                </div>
            </div>
            <div class="" style="max-width: 400px; height:575px;">
                <div class="card-blog">
                    <div class="card-blog__img">
                        <img class="img-fluid" src="./src/img/premiohealtharq.png" alt="">
                    </div>
                    <div class="card-blog__title">
                        <h2>Maximo Aldana é destaque no HealthARQ 2022</h2>
                    </div>
                    <div class="card-blog__data">
                        <span class="material-symbols-outlined">
                            calendar_today
                        </span>
                        <p>11 de Novembro de 2022 • Por Máximo Aldana</p>
                    </div>
                    <div class="card-blog__desc">
                        Essa semana a Maximo Aldana recebeu o Prêmio HealthARQ 2022 na categoria Inovação em...
                    </div>
                    <div class="card-blog__button">
                        <a href="" class="bg-acquagreen">LEIA MAIS</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-button-todos">
            <button class="ver-todos-button bg-acquagreen" onclick="toggleCardBlog()">VER TODOS</button>
        </div>
    </div>
</section>


<script type="text/javascript">
    document.getElementById('button-planta1').addEventListener('click', function() {
        document.getElementById('planta1').classList.remove('d-none');
        document.getElementById('planta2').classList.add('d-none');

        document.getElementById('button-planta1').parentElement.classList.add('active');
        document.getElementById('button-planta2').parentElement.classList.remove('active');
    });

    document.getElementById('button-planta2').addEventListener('click', function() {
        document.getElementById('planta2').classList.remove('d-none');
        document.getElementById('planta1').classList.add('d-none');

        document.getElementById('button-planta2').parentElement.classList.add('active');
        document.getElementById('button-planta1').parentElement.classList.remove('active');
    });
</script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const acordeaoItems = document.querySelectorAll(".acordeao-item");
        acordeaoItems.forEach(item => {
            item.addEventListener("click", function() {
                const acordeaoDescricao = this.nextElementSibling;
                const arrowIcon = this.querySelector(".arrow-acordeao");

                if (acordeaoDescricao.style.display === "none" || !acordeaoDescricao.style.display) {
                    acordeaoDescricao.style.display = "block";
                    arrowIcon.textContent = "arrow_drop_down";
                    arrowIcon.classList.add("rotated");
                } else {
                    acordeaoDescricao.style.display = "none";
                    arrowIcon.textContent = "arrow_right";
                    arrowIcon.classList.remove("rotated");
                }
            });
        });
    });
</script>

<script>
    let currentIndex = 0;
    const images = document.querySelectorAll('.carousel-images img');
    const dots = document.querySelectorAll('.carousel-dots span');
    const prevButton = document.querySelector('.controlador-voltar');
    const nextButton = document.querySelector('.controlador-avancar');

    function updateCarousel() {
        const offset = -currentIndex * 100;
        document.querySelector('.carousel-images').style.transform = `translateX(${offset}%)`;

        dots.forEach(dot => dot.classList.remove('active'));
        dots[currentIndex].classList.add('active');
    }

    prevButton.addEventListener('click', () => {
        currentIndex = (currentIndex > 0) ? currentIndex - 1 : images.length - 1;
        updateCarousel();
    });

    nextButton.addEventListener('click', () => {
        currentIndex = (currentIndex < images.length - 1) ? currentIndex + 1 : 0;
        updateCarousel();
    });

    dots.forEach((dot, index) => {
        dot.addEventListener('click', () => {
            currentIndex = index;
            updateCarousel();
        });
    });
</script>

<script>
    function showSlide(index) {
        const slide = document.getElementById('carouselSlide');
        const totalSlides = document.querySelectorAll('.carousel-item-obras').length;
        console.log(totalSlides);
        if (index >= totalSlides - 1) {
            currentIndex = 0;
        } else if (index < 0) {
            currentIndex = totalSlides / 2 - 1;
        } else {
            currentIndex = index;
        }
        slide.style.transform = `translateX(${-currentIndex * 50}%)`;
        updateIndicators();
    }

    function prevSlide() {
        showSlide(currentIndex - 1);
    }

    function nextSlide() {
        showSlide(currentIndex + 1);
    }

    function currentSlide(index) {
        showSlide(index);
    }

    function updateIndicators() {
        const indicators = document.querySelectorAll('.carousel-indicators button');
        indicators.forEach((indicator, index) => {
            if (index === Math.floor(currentIndex / 1)) {
                indicator.classList.add('active');
            } else {
                indicator.classList.remove('active');
            }
        });
    }

    document.addEventListener('DOMContentLoaded', () => {
        updateIndicators();
    });
</script>

<script>
    document.querySelectorAll('.bolotario-item').forEach(function(hotspot) {
    hotspot.addEventListener('mouseenter', function(event) {
        var tooltip = document.getElementById('tooltip');
        tooltip.innerHTML = hotspot.getAttribute('data-info');
        tooltip.style.display = 'block';
        tooltip.style.top = (event.pageY + 10) + 'px';
        tooltip.style.left = (event.pageX + 10) + 'px';
    });

    hotspot.addEventListener('mousemove', function(event) {
        var tooltip = document.getElementById('tooltip');
        tooltip.style.top = (event.pageY + 10) + 'px';
        tooltip.style.left = (event.pageX + 10) + 'px';
    });

    hotspot.addEventListener('mouseleave', function() {
        var tooltip = document.getElementById('tooltip');
        tooltip.style.display = 'none';
    });
});

</script>

<?php include('footer-inc.php'); ?>