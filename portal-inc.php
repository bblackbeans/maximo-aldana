<?php
/*
Template Name: Portal - Incorporadora
*/
include('header-portal-inc.php'); ?>

<section id="banner" class="py-5">
    <div class="container-fluid">
        <div class="container-banner">
            <div class="container-banner-oportunidades__title">
                <h1>Portal<br> &ensp;&ensp; </h1>
            </div>

        </div>
    </div>
</section>

</main>

<section class="container" id="somos-maximo" style="margin-bottom: 2rem !important;">
    <div class="container-btns-somos-maximo">
        <button class="btn-somos-maximo">PORTFÓLIO</button>
        <button class="btn-somos-maximo">NOSSOS CLIENTES</button>
        <button class="btn-somos-maximo">CERTIFICAÇÕES</button>
        <button class="btn-somos-maximo">ORCE SUA OBRA</button>
    </div>
</section>

<section id="form-portal">
    <div class="container container-form-portal-inc">
        <div class="content-parceria-portal-inc">
            <h1>Parceria que Constrói Sucesso</h1>
            <h2>Entre no Portal do Corretor Parceiro</h2>
            <p>Faça login para acessar todos os conteúdos e novidades que<br> a Máximo Aldana preparou para seus corretores.</p>
        </div>
        <div class="content-container-form-portal-inc">
            <form action="">
                <div class="form-group">
                    <label for="login">Login:</label>
                    <input type="text" class="form-control" placeholder="Login..." id="login" aria-describedby="LoginHelp" required>
                </div>
                <div class="form-group">
                    <label for="senha">Senha:</label>
                    <input type="password" class="form-control" placeholder="Senha..." id="senha" required>
                </div>
                <button type="submit">Enviar</button>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="lembrarSenha">
                    <label class="form-check-label" for="lembrarSenha">Ao preencher e enviar este formulário, você concorda com o armazenamento e manuseio de seus dados pelo Máximo Aldana</label>
                </div>
            </form>
        </div>
    </div>
</section>

<?php include('footer-inc.php'); ?>