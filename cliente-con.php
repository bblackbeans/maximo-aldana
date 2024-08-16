<?php
/*
Template Name: Nossos Clientes Construtora
*/
include('header.php'); ?>

<section id="banner">
    <div class="container-fluid">
        <div class="container-banner">
            <div class="container-title-banner-dna">
                <h1>Nossos<br> &ensp;&ensp;Clientes </h1>
            </div>

        </div>
    </div>
</section>

</main>

<section id="Clientes">
    <div class="container-clientes">
        <div class="container-clientes-name">
            <h1 style="text-align: center;">Nossos clientes</h1>
        </div>
        <div class="container-clientes-img">
            <img class="clientes-img" src="./src/img/clientes/BK.png" alt="Burguer King">
            <img class="clientes-img" src="./src/img/clientes/popeyes.png" alt="Popeyes">
            <img class="clientes-img" src="./src/img/clientes/dominos.png" alt="Dominos">
            <img class="clientes-img" src="./src/img/clientes/são joão de deus.png" alt="São João de Deus">
            <img class="clientes-img" src="./src/img/clientes/unimed.png" alt="Unimed">
            <img class="clientes-img" src="./src/img/clientes/lavoisier.png" alt="Lavoisier">
            <img class="clientes-img" src="./src/img/clientes/bradesco.png" alt="Bradesco">
        </div>
        <div class="container-clientes-img">
            <img class="clientes-img" src="./src/img/clientes/são bernardo.png" alt="São Bernardo">
            <img class="clientes-img" src="./src/img/clientes/hcor.png" alt="HCor">
            <img class="clientes-img" src="./src/img/clientes/dasa.png" alt="Dasa">
            <img class="clientes-img" src="./src/img/clientes/rotary.png" alt="Rotary">
            <img class="clientes-img" src="./src/img/clientes/carrefour.png" alt="Carrefour">
            <img class="clientes-img" src="./src/img/clientes/rzk.png" alt="Rzk">
        </div>
        <div class="container-clientes-img">
            <img class="clientes-img" src="./src/img/clientes/nexa.png" alt="nexa">
            <img class="clientes-img" src="./src/img/clientes/fleury.png" alt="fleury">
            <img class="clientes-img" src="./src/img/clientes/metrocasa.png" alt="metrocasa">
            <img class="clientes-img" src="./src/img/clientes/notredame.png" alt="notredame">
            <img class="clientes-img" src="./src/img/clientes/bradesco-Dois.png" alt="Bradesco empreendimentos">
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
            <div class="" style="max-width: 400px; height:605px;">
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
            <div class="" style="max-width: 400px; height:605px;">
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
            <div class="" style="max-width: 400px; height:605px;">
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
            <div class="" style="max-width: 400px; height:605px;">
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
            <div class="" style="max-width: 400px; height:605px;">
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
            <div class="" style="max-width: 400px; height:605px;">
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