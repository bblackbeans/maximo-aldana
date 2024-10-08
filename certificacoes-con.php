<?php
/*
Template Name: Cerificações e Premiações Construtora
*/
include('header.php'); ?>

<section id="banner">
    <div class="container-fluid">
        <div class="container-banner">
            <div class="container-title-banner-dna">
                <h1>Cerificações e<br> &ensp;&ensp;Premiações </h1>
            </div>

        </div>
    </div>
</section>

</main>

<section id="certificacoes-premiacoes" style="background-color: white; margin-top: 0px;">
    <div class="container">
        <div class="container-title-certificacoes">
            <h5>Certificados e Premiações</h4>
                <h1>Maximo Aldana</h1>
        </div>
        <div>
            <div class="container-content-certificacoes">
                <div class="content-one-certificacoes" style="padding-left: 48px;">
                    <h2>Certificados</h2>
                    <div class="content-img-certificacoes">
                        <img src="./src/img/certificados-premiacoes/sas.png" alt="SAS">
                        <img src="./src/img/certificados-premiacoes/pbqp-h.png" alt="PBQP">
                    </div>
                </div>
                <p style="padding-left: 20px;">Sempre focados em oferecer o melhor aos nossos clientes, conquistamos o Certificado do PBQP-H
                    (Programa Brasileiro da Qualidade e Produtividade do Habitat), regulamentador nacional de produtos e
                    serviços e o ISO 9001:2015, norma de sistema de gestão da qualidade. </p>
            </div>
            <hr>
            <div class="container-content-certificacoes">
                <div class="content-one-certificacoes">
                    <h2>Premiações</h2>
                    <div class="content-img-certificacoes">
                        <img src="./src/img/certificados-premiacoes/lideres-da-saude.png" alt="lideres">
                        <img src="./src/img/certificados-premiacoes/Premio-health-arq-2022.png" alt="health arq">
                        <img src="./src/img/certificados-premiacoes/INTEC.png" alt="intec">
                    </div>
                </div>
                <div>
                    <p style="margin-bottom: 3rem;">Por quatro vezes consecutivas, entre as <span>100 maiores construtoras do Brasil</span>,
                        segundo o Ranking Intec e 2ª construtora do Grande ABC (2023).</p>
                    <h6>POLÍTICA DE QUALIDADE</h6>
                    <p>O máximo de qualidade em nossos serviços, com canteiros de obras sustentáveis,
                        melhorando continuamente nossos processos em busca da satisfação dos nossos clientes e colaboradores.</p>
                </div>
            </div>
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
                <form method="POST" action="./mailEntreContato-con.php" id="form-home-construtora" method="POST" enctype="multipart/form-data">
                    <p>Preencha o formulário para conversar com um especialista.</p>
                    <div class="form-group">
                        <input type="text" id="name" name="name" placeholder="Nome*" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <input type="tel" id="phone" name="phone" placeholder="Telefone*" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <input type="email" id="email" placeholder="Email*" name="email" class="form-control" required>
                    </div>
                    <div class="form-group-radio">
                        <label>Qual melhor forma de contato?*</label><br>
                        <div class="container-radios">
                            <div>
                                <input type="radio" id="whatsapp" name="contact" value="whatsapp" required>
                                <label class="label-radio" for="whatsapp">Whatsapp</label>
                            </div>
                            <div>
                                <input type="radio" id="e-mail" name="contact" value="email" required>
                                <label class="label-radio" for="email">E-mail</label>
                            </div>
                            <div>
                                <input type="radio" id="phone" name="contact" value="phone" required>
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