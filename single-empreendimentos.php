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
            <div class="container-infos col-md-3">
                <div class="row">
                    <div class="col-md-2 d-flex flex-column justify-content-center">
                        <img src="./src/img/Icones/maximo-localizacao.png" alt="Localização" class="img-fluid">
                    </div>
                    <div class="d-flex flex-column justify-content-center align-items-center col-md-10">
                        <p class="m-0 text-info">Avenida General San Martin, 132 Ponta da Praia - Santos</p>
                    </div>
                </div>
            </div>
            <div class="container-infos col-md-2">
                <div class="row">
                    <div class="col-md-3 d-flex flex-column justify-content-center">
                        <img src="./src/img/Icones/maximo-dormitorio.png" alt="Dormitórios" class="img-fluid">
                    </div>
                    <div class="d-flex flex-column justify-content-center align-items-center col-md-9">
                        <p class="m-0 text-info">1,2,3 dormitórios <br>(2 suítes)</p>
                    </div>
                </div>
            </div>
            <div class="container-infos container-infos-sm col-md-2">
                <div class="row">
                    <div class="col-md-4 d-flex flex-column justify-content-center">
                        <img src="./src/img/Icones/maximo-metragem.png" alt="Metragem" class="img-fluid">
                    </div>
                    <div class="d-flex flex-column justify-content-center align-items-center col-md-8">
                        <p class="m-0 text-info">55 a 96 m²</p>
                    </div>
                </div>
            </div>
            <div class="container-infos container-infos-sm col-md-2">
                <div class="row">
                    <div class="col-md-4 d-flex flex-column justify-content-center">
                        <img src="./src/img/Icones/maximo-garagem.png" alt="Vagas" class="img-fluid">
                    </div>
                    <div class="d-flex flex-column justify-content-center align-items-center col-md-8">
                        <p class="m-0 text-info">1 vaga</p>
                    </div>
                </div>
            </div>
            <div class="container-infos col-md-2">
                <div class="row">
                    <div class="col-md-3 d-flex flex-column justify-content-center">
                        <img src="./src/img/Icones/maximo-valor.png" alt="Vagas" class="img-fluid">
                    </div>
                    <div class="d-flex flex-column justify-content-center align-items-center col-md-9">
                        <p class="m-0 text-info">A partir de R$ 000.000,00</p>
                    </div>
                </div>
            </div>
            <div class="container-infos col-md-2">
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
            <div class="col-md-8">
                <img src="./src/img/mapa-dots.png" alt="Mapa" class="img-fluid">
            </div>
            <div class="col-md-4 d-flex justify-content-center flex-column">
                <div class="row flex-column">
                    <div class="row">
                        <div class="col-md-2">
                            <img src="./src/img/Icones/maximo-localizacao.png" alt="Localização" class="img-fluid">
                        </div>
                        <div class="col-md-10 p-0">
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
                    echo '<div class="col-md-4 mb-4 d-flex align-items-center area-de-lazer-opcao"><ul class="lista-opcoes align-items-center d-flex p-0"><img src="./src/img/Icones/icon-check.png" alt="Check" class="img-fluid icon-opcoes"><li class="itens-opcoes m-0">' . htmlspecialchars($opcao) . '</li></ul></div>';
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
                            <p class="info-plantas px-4">Os elementos decorativos, os móveis, os acessórios, as vegetações e os demais elementos elucidativos das ilustrações, são meramente sugestivos, não incluídos nas especificações da obra e no preço das unidades.<span>Estudo Preliminar de Projeto | Sujeito a Alterações.</span></p>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="final2-96m" role="tabpanel" aria-labelledby="profile-tab" tabindex="1">
                </div>
                <div class="tab-pane fade" id="final3-58m" role="tabpanel" aria-labelledby="contact-tab" tabindex="2">...</div>
                <div class="tab-pane fade" id="final4-59m" role="tabpanel" aria-labelledby="disabled-tab" tabindex="3">...</div>
                <div class="tab-pane fade" id="final6-58m" role="tabpanel" aria-labelledby="disabled-tab" tabindex="4">...</div>
                <div class="tab-pane fade" id="area-de-lazer" role="tabpanel" aria-labelledby="disabled-tab" tabindex="5">...</div>
                <div class="tab-pane fade" id="rooftop" role="tabpanel" aria-labelledby="disabled-tab" tabindex="6">...</div>
            </div>
        </div>
    </div>
</section>

<section id="button-tour-vista">
    <div class="container-fluid">
        <div class="row">
            <div class="btn-tour-vista col-md-6">
                <a href=#><img src="./src/img/Icones/360-60x60.png" alt="360" class="img-fluid">Tour Virtual<span class="material-symbols-outlined">
                        chevron_right
                    </span></a>
            </div>
            <div class="btn-tour-vista col-md-6">
                <a href=#><img src="./src/img/Icones/vistaandares-60x60.png" alt="Vista" class="img-fluid">Vista dos Andares<span class="material-symbols-outlined">
                        chevron_right
                    </span></a>
            </div>
        </div>
    </div>

</section>

<script>
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

<?php include('footer-inc.php'); ?>