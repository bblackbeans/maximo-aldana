<?php
/*
Template Name: Single Obras Educacional Construtora
*/
include('header.php'); ?>

<section id="banner">
    <div class="container-fluid">
        <div class="container-banner">
            <div class="container-title-banner-dna">
                <h1>Colégio Camp <br>&ensp;&ensp;São Bernardo do Campo</h1>
            </div>

        </div>
    </div>
</section>

</main>

<section id="hospital-saude-con">
    <div class="container container-obra-saude-text">
        <h1 style="margin: 4rem 0;">Colégio Camp São Bernardo do Campo</h1>
        <div id="carouselExampleIndicators" class="carousel slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner" style="justify-content: left;">
                <div class="carousel-item active">
                    <img src="./src/img/Colegio-Camp-Sao-Bernardo-do-Campo-10-758x564.jpeg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="./src/img/capa-edificio-works-obra-maximo-aldana-496x366.png" class="d-block w-100" alt="">
                </div>
                <div class="carousel-item">
                    <img src="./src/img/capa-edificio-kenney-496x366.png" class="d-block w-100" alt="">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <i class="fa-solid fa-caret-left" style="color: #ffffff; font-size: 85px;"></i>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <i class="fa-solid fa-caret-right" style="color: #ffffff; font-size: 85px;"></i>
            </button>
        </div>
    </div>
</section>

<section id="detalhes-obra-saude">
    <div class="container-fluid container-detalhes-obra-saude">
        <h1>Detalhe da Obra</h1>
        <div class="container-content-detalhes">
            <div class="container-one-detalhes">
                <div>
                    <div class="content-text-detalhes">
                        <h2 class="name-detalhe-obra-saude">Área</h2>
                        <h2 class="valor-detalhe-obra-saude">4.896 m²</h2>
                    </div>
                    <hr>
                </div>
                <div>
                    <div class="content-text-detalhes">
                        <h2 class="name-detalhe-obra-saude">Entrega</h2>
                        <h2 class="valor-detalhe-obra-saude">Agosto de 2013</h2>
                    </div>
                    <hr>
                </div>
            </div>
            <div class="container-one-detalhes">
                <div>
                    <div class="content-text-detalhes">
                        <h2 class="name-detalhe-obra-saude">Segmento</h2>
                        <h2 class="valor-detalhe-obra-saude">Obra Corporativa</h2>
                    </div>
                    <hr>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="acompanhe-obra-con">
    <div class="container">
        <div class="container-btn-dna-con">
            <button style="padding-left: 7rem;">PORTIFÓLIO <i class="fa-solid fa-arrow-right"></i></button>
            <button style="padding-left: 4rem;">SOLITICAR ORÇAMENTO <i class="fa-solid fa-arrow-right"></i></button>
        </div>
    </div>
</section>

<section id="form-construtora">
    <div class="container-fluid px-5 container-padding-form">
        <div class="row">
            <div class="col-md-6 form-left">
                <h2>Entre em Contato Conosco<br>Construa com a Maximo Aldana!</h2>
                <p>Agilidade, experiência e comprometimento em nossa entrega. Somos especialistas em obras de grande porte para os segmentos de Hospitais, Corporativo, Educação, Prediais Comerciais e Residenciais.<br><br> Preencha e envie o formulário ao lado e em breve entraremos em contato com você.</p>
            </div>
            <div class="col-md-6 form-right">
                <form method="POST" action="" id="form-home-construtora">
                    <p>Preencha o formulário para conversar com um especialista.</p>
                    <div class="form-group">
                        <input type="text" id="name" name="name" placeholder="Nome*" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <input type="tel" id="telefone" name="phone" placeholder="Telefone*" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <input type="email" id="email" placeholder="Email*" name="email" class="form-control" required>
                    </div>
                    <div class="form-group-radio">
                        <label>Qual melhor forma de contato?*</label><br>
                        <div class="container-radios">
                            <div>
                                <input type="radio" id="whatsapp" name="contact_method" value="whatsapp" required>
                                <label class="label-radio" for="whatsapp">Whatsapp</label>
                            </div>
                            <div>
                                <input type="radio" id="e-mail" name="contact_method" value="email" required>
                                <label class="label-radio" for="email">E-mail</label>
                            </div>
                            <div>
                                <input type="radio" id="phone" name="contact_method" value="phone" required>
                                <label class="label-radio" for="phone">Telefone</label>
                            </div>
                        </div>
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
            <button id="toggleButtonCardBlog" class="ver-todos-button" onclick="toggleCardBlog()">VER TODOS</button>
        </div>
    </div>
</section>

<?php include('footer.php'); ?>