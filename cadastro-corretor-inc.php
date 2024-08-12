<?php
/*
Template Name: Cadastro Corretor Parceiro - Incorporadora
*/
include('header-portal-inc.php'); ?>

<section id="banner" class="py-5">
    <div class="container-fluid">
        <div class="container-banner">
            <div class="container-banner-oportunidades__title">
                <h1>Cadastro Portal<br> &ensp;&ensp; Corretor Parceiro</h1>
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

<section id="form-portal" style="margin-top: 3rem;">
    <div class="container container-form-portal-inc containerform-seu-terreno">
        <div class="content-parceria-portal-inc">
            <h1>Parceria que Constrói Sucesso</h1>
            <h2>Junte-se a nós como Corretor Parceiro e <br>alcance novos horizontes no mercado imobiliário</h2>
            <p>Cadastre-se para acessar todos os conteúdos e novidades<br> que a Máximo Aldana preparou para seus corretores. </p>
            <div class="container-btns-denuncia-inc">
                <a href="" style="text-decoration: none;"><button style="padding-left: 4rem;">JA SOU CADASTRADO <i class="fa-solid fa-arrow-right"></i></button></a>
            </div>
        </div>
        <div class="content-container-form-portal-inc">
            <form action="">
                <div class="form-group">
                    <label for="login">Qual seu nome?*</label>
                    <input type="text" class="form-control" placeholder="Nome Completo" id="nome" aria-describedby="nome" required>
                </div>
                <div class="form-group">
                    <label for="telefone">Qual seu número de contato?</label>
                    <input type="text" class="form-control" placeholder="(+00) 00 00000-0000" id="telefone" required>
                </div>
                <div class="form-group">
                    <label for="email">Qual o seu melhor e-mail?</label>
                    <input type="email" class="form-control" placeholder="E-mail" id="email" required>
                </div>
                <div class="form-group">
                    <label for="login">Qual o seu CRECI?*</label>
                    <input type="text" class="form-control" placeholder="XXXXXXX" id="creci" required>
                </div>
                <div class="form-group">
                    <label for="telefone">Defina uma senha de acesso</label>
                    <input type="text" class="form-control" placeholder="**********" id="senha" required>
                </div>
                <div class="form-group">
                    <label for="email">Data de Nascimento</label>
                    <input type="date" class="form-control" placeholder="XX/XX/XXXX" id="date" required>
                </div>
                <button type="submit">Cadastrar</button>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="lembrarSenha">
                    <label class="form-check-label" for="lembrarSenha">Ao preencher e enviar este formulário, você concorda com o armazenamento e manuseio de seus dados pelo Máximo Aldana</label>
                </div>
            </form>
        </div>
    </div>
</section>

<section id="oportunidades-somos-maximos" style="margin-bottom: 2rem; margin-top: 4rem;">
    <div class="container-fluid container-historia-maximos">
        <h1>#SomosMaximo</h1>
        <p>Com mais de 25 anos de mercado a Maximo Aldana traduz diariamente seu DNA em
            cada projeto que realiza e se encontra hoje no seleto grupo das 100 maiores
            Construtoras do Brasil segundo Ranking INTEC (Informações Técnicas da Construção).</p>
        <p>Atuando no segmento de engenharia e construção civil desde a fundação,
            nos destacamos pela cultura proativa, sempre com sangue no olho para direcionar todos
            os nossos esforços para encantar nossos clientes. Com nossa Gestão Inteligente e nosso
            Senso de Urgência, nos tornamos referência nos segmentos de obras prediais, hospitalares,
            corporativas e retrofits.</p>
        <p>O Setor Imobiliáro</p>
        <p>Em 2012, iniciamos a unidade de negócio focada no desenvolvimento imobiliário das regiões do
            Grande ABC, São Paulo e Litoral, construindo e incorporando nossos próprios empreendimentos
            com foco em entregar excelência em cada detalhe de nossos produtos.</p>
    </div>
</section>

<?php include('footer-inc.php'); ?>