<?php
/*
Template Name: Nossos Empreendimentos - Incorporadora
*/
include('header-portal-inc.php'); ?>

<section id="banner" class="py-5">
    <div class="container-fluid">
        <div class="container-banner">
            <div class="container-banner-oportunidades__title">
                <h1>Conheça nossos<br> &ensp;&ensp; Empreendimentos</h1>
            </div>
        </div>
    </div>
</section>

</main>

<section class="container" id="somos-maximo" style="margin-bottom: 2rem !important;">
    <div class="container-btns-somos-maximo">
        <a href=""><button class="btn-somos-maximo">PORTFÓLIO</button></a>
        <button class="btn-somos-maximo">NOSSOS CLIENTES</button>
        <button class="btn-somos-maximo">CERTIFICAÇÕES</button>
        <button class="btn-somos-maximo">ORCE SUA OBRA</button>
    </div>
</section>

<section id="para-sua-fase" style="padding-bottom: 2rem;">
    <div class="container-fluid px-5">
        <div class="container-title">
            <h3 class="container-title__title">Conheça nossos empreendimentos</h3>
            <h6 class="container-title__subtitle mb-0">Selecione o empreendimento abaixo que deseja ver</h6>
        </div>
        <div class="container-fase">
            <div class="container-fase__title">
                <p>Encontre seu Máximo Aldana</p>
            </div>
            <div class="container-fase__button">
                <button id="filterBtn">FILTRAR &ensp; <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="ai ai-SettingsHorizontal">
                        <path d="M3 5h4m14 0H11m-8 7h12m6 0h-2M3 19h2m16 0H9" />
                        <circle cx="9" cy="5" r="2" />
                        <circle cx="17" cy="12" r="2" />
                        <circle cx="7" cy="19" r="2" />
                    </svg></button>
            </div>
            <div id="myModal" class="modal">
                <div class="modal-content">
                    <div class="container-modal-title">
                        <h2>FILTRAR</h2>
                        <span class="close">&times;</span>
                    </div>
                    <form>
                        <div class="form-group-inc">
                            <label class="label-modal-title">Cidades</label>
                            <div class="container-checkbox">
                                <div class="checkbox-group">
                                    <label><input type="checkbox" class="modal-checkbox" name="cidade" value="todos"> Todos</label>
                                    <label><input type="checkbox" class="modal-checkbox" name="cidade" value="campinas"> Campinas</label>
                                    <label><input type="checkbox" class="modal-checkbox" name="cidade" value="santo-andre"> Santo André</label>
                                    <label><input type="checkbox" class="modal-checkbox" name="cidade" value="sao-bernardo"> São Bernardo do Campo</label>
                                    <label><input type="checkbox" class="modal-checkbox" name="cidade" value="sao-jose"> São José dos Campos</label>
                                    <label><input type="checkbox" class="modal-checkbox" name="cidade" value="sorocaba"> Sorocaba</label>
                                </div>
                                <div class="checkbox-group">
                                    <label><input type="checkbox" class="modal-checkbox" name="cidade" value="atibaia"> Atibaia</label>
                                    <label><input type="checkbox" class="modal-checkbox" name="cidade" value="guaruja"> Guaruja</label>
                                    <label><input type="checkbox" class="modal-checkbox" name="cidade" value="santos"> Santos</label>
                                    <label><input type="checkbox" class="modal-checkbox" name="cidade" value="sao-caetano"> São Caetano</label>
                                    <label><input type="checkbox" class="modal-checkbox" name="cidade" value="sao-paulo"> São Paulo</label>
                                    <label><input type="checkbox" class="modal-checkbox" name="cidade" value="suzano"> Suzano</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group-inc">
                            <label class="label-modal-title">Status da obra</label>
                            <div class="container-checkbox">
                                <div class="checkbox-group">
                                    <label><input type="checkbox" class="modal-checkbox" name="status" value="todos"> Todos</label>
                                    <label><input type="checkbox" class="modal-checkbox" name="status" value="futuro-lancamento"> Futuro Lançamento</label>
                                    <label><input type="checkbox" class="modal-checkbox" name="status" value="lancamento"> Lançamento</label>
                                </div>
                                <div class="checkbox-group">
                                    <label><input type="checkbox" class="modal-checkbox" name="status" value="em-construcao"> Em construção</label>
                                    <label><input type="checkbox" class="modal-checkbox" name="status" value="pronto"> Pronto</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group-inc">
                            <label class="label-modal-title">Dormitórios</label>
                            <div class="container-checkbox">
                                <div class="checkbox-group">
                                    <label><input type="checkbox" class="modal-checkbox" name="dormitorio" value="todos"> Todos</label>
                                    <label><input type="checkbox" class="modal-checkbox" name="dormitorio" value="2-quartos"> 2 quartos</label>
                                </div>
                                <div class="checkbox-group">
                                    <label><input type="checkbox" class="modal-checkbox" name="dormitorio" value="3-quartos"> 3 quartos</label>
                                    <label><input type="checkbox" class="modal-checkbox" name="dormitorio" value="4-mais"> 4 ou mais quartos</label>
                                </div>
                            </div>
                        </div>
                        <div class="button-group">
                            <button type="button" class="clear-btn">LIMPAR FILTROS <i class="fa fa-trash"></i></button>
                            <button type="button" class="apply-btn">APLICAR FILTROS</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="carousel">
                <div class="carousel-inner justify-content-center">
                    <div class="carousel-item-index" data-cidade="sao-bernardo" data-status="futuro-lancamento" data-dormitorio="2-quartos">
                        <div class="card" style="width: 100%;">
                            <div class="image-container">
                                <img src="./src/img/empreedimentos/Varandas-Pitangueiras.png" class="card-img-top" alt="...">
                                <p class="img-text-title">VARANDAS<br>PITANGUEIRAS</p>
                            </div>
                            <div class="carousel-item-index__estagio">
                                <p><i class="fa-solid fa-house"></i>&ensp;PRONTO PARA MORAR</p>
                            </div>
                            <div class="card-body">
                                <a class="link-card-title" href="">
                                    <h5 class="card-title-second-color">Saiba Mais <span class="material-symbols-outlined">arrow_forward_ios</span></h5>
                                </a>
                                <p class="card-text">BARRA FUNDA - GUARUJÁ</p>
                                <h4 class="card-text-two">Varandas Pitangueiras</h4>
                                <p class="card-content">142 e 290 m²</p>
                                <p class="card-content">3 suítes</p>
                                <p class="card-content">2 e 3 vagas</p>
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
                                <p><i class="fa-solid fa-house"></i>&ensp;PRONTO PARA MORAR</p>
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
                    <div class="carousel-item-index" data-cidade="santo-andre" data-status="lancamento" data-dormitorio="3-quartos">
                        <div class="card" style="width: 100%;">
                            <div class="image-container">
                                <img src="./src/img/seven-living.png" class="card-img-top" alt="...">
                                <p class="img-text-title">COSTA<br> ESMERALDA</p>
                            </div>
                            <div class="carousel-item-index__estagio">
                                <p><i class="fa-solid fa-house"></i>&ensp;PRONTO PARA MORAR</p>
                            </div>
                            <div class="card-body">
                                <a class="link-card-title" href="">
                                    <h5 class="card-title-second-color">Saiba Mais <span class="material-symbols-outlined">arrow_forward_ios</span></h5>
                                </a>
                                <p class="card-text">JARDIM LAS PALMAS - GUARUJÁ (SP)</p>
                                <h4 class="card-text-two">Costa Esmeralda</h4>
                                <p class="card-content">112 e 424,4 m²</p>
                                <p class="card-content">3 dormitórios (2 suítes)</p>
                                <p class="card-content">2 vagas</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item-index" data-cidade="guaruja" data-status="pronto" data-dormitorio="2-quartos">
                        <div class="card" style="width: 100%;">
                            <div class="image-container">
                                <img src="./src/img/empreedimentos/Style.png" class="card-img-top" alt="...">
                                <p class="img-text-title">STYLE <br>PLATINUM</p>
                            </div>
                            <div class="carousel-item-index__estagio">
                                <p><i class="fa-solid fa-house"></i>&ensp;PRONTO PARA MORAR</p>
                            </div>
                            <div class="card-body">
                                <a class="link-card-title" href="">
                                    <h5 class="card-title-second-color">Saiba Mais <span class="material-symbols-outlined">arrow_forward_ios</span></h5>
                                </a>
                                <p class="card-text">CAMINHO DO MAR - SÃO BERNARDO DO CAMPO</p>
                                <h4 class="card-text-two">Style Platinum</h4>
                                <p class="card-content">77 m²</p>
                                <p class="card-content">3 dormitórios (1 suíte)</p>
                                <p class="card-content">2 vagas</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel">
                <div class="carousel-inner justify-content-center">
                    <div class="carousel-item-index" data-cidade="sao-bernardo" data-status="futuro-lancamento" data-dormitorio="2-quartos">
                        <div class="card" style="width: 100%;">
                            <div class="image-container">
                                <img src="./src/img/empreedimentos/Style d.png" class="card-img-top" alt="...">
                                <p class="img-text-title">STYLE <br>DIAMOND</p>
                            </div>
                            <div class="carousel-item-index__estagio">
                                <p><i class="fa-solid fa-house"></i>&ensp;PRONTO PARA MORAR</p>
                            </div>
                            <div class="card-body">
                                <a class="link-card-title" href="">
                                    <h5 class="card-title-second-color">Saiba Mais <span class="material-symbols-outlined">arrow_forward_ios</span></h5>
                                </a>
                                <p class="card-text">BAETA NEVES - SÃO BERNARDO DO CAMPO</p>
                                <h4 class="card-text-two">Style Diamond</h4>
                                <p class="card-content">58, 64, 72 e 90 m²</p>
                                <p class="card-content">2 dormitórios (1 suíte)</p>
                                <p class="card-content">2 vagas</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item-index" data-cidade="sao-bernardo" data-status="futuro-lancamento" data-dormitorio="2-quartos">
                        <div class="card" style="width: 100%;">
                            <div class="image-container">
                                <img src="./src/img/empreedimentos/Aldana.png" class="card-img-top" alt="...">
                                <p class="img-text-title">ALDANA<br>JARDIM</p>
                            </div>
                            <div class="carousel-item-index__estagio">
                                <p class="color-two-construction"><i class="fa-solid fa-trowel-bricks"></i>&ensp;EM CONSTRUÇÃO</p>
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
                                <img src="./src/img/empreedimentos/seven-living-fachada.png" class="card-img-top" alt="...">
                                <p class="img-text-title">SEVEN <br>LIVING</p>
                            </div>
                            <div class="carousel-item-index__estagio">
                                <p class="color-two-construction"><i class="fa-solid fa-trowel-bricks"></i>&ensp;EM CONSTRUÇÃO</p>
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
                                <img src="./src/img/empreedimentos/Centro.png" class="card-img-top" alt="...">
                                <p class="img-text-title">CENTRO  <br>EMPRESARIAL</p>
                            </div>
                            <div class="carousel-item-index__estagio">
                            <p class="color-two-construction"><i class="fa-solid fa-key"></i>&ensp;PRONTO PARA ALUGAR</p>
                            </div>
                            <div class="card-body">
                                <a class="link-card-title" href="">
                                    <h5 class="card-title">Saiba Mais <span class="material-symbols-outlined">arrow_forward_ios</span></h5>
                                </a>
                                <p class="card-text">BAETA NEVES - SÃO BERNARDO DO CAMPO</p>
                                <h4 class="card-text-two">Centro Empresarial Aldana</h4>
                                <p class="card-content">Salas de 32 e 81 m²</p>
                                <p class="card-content">1 vaga</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item-index" data-cidade="guaruja" data-status="pronto" data-dormitorio="2-quartos">
                        <div class="card" style="width: 100%;">
                            <div class="image-container">
                                <img src="./src/img/egydio-martins (1).png" class="card-img-top" alt="...">
                                <p class="img-text-title">EGYDIO <br>MARTINS</p>
                            </div>
                            <div class="carousel-item-index__estagio">
                                <p class="color-three-breve"><i class="fa-solid fa-calendar"></i>&ensp;BREVE LANÇAMENTO</p>
                            </div>
                            <div class="card-body">
                                <a class="link-card-title" href="">
                                    <h5 class="card-title-three-color">Saiba Mais <span class="material-symbols-outlined">arrow_forward_ios</span></h5>
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
                <button style="width: 250px !important;">FALAR COM O CORRETOR</button>
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
            <button id="toggleButtonCardBlog" class="ver-todos-button bg-acquagreen" onclick="toggleCardBlog()">VER TODOS</button>
        </div>
    </div>
</section>

<?php include('footer-inc.php'); ?>