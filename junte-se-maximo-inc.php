<?php
/*
Template Name: Junte se a nós - Incorporadora
*/
include('header-portal-inc.php'); ?>

<section id="banner" class="py-5">
    <div class="container-fluid">
        <div class="container-banner">
            <div class="container-banner-oportunidades__title">
                <h1>Junte-se ao<br> &ensp;&ensp; Nosso Time</h1>
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
            <h1>Junte-se ao nosso time</h1>
            <h2>Construindo juntos o futuro do mercado imobiliário</h2>
            <p>Faça parte do nosso Banco de Talentos preenchendo o formulário </p>
        </div>
        <div class="content-container-form-portal-inc">
            <form method="POST" action="./mailTrabalheConosco-inc.php" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="login">Qual seu nome?*</label>
                    <input type="text" class="form-control" placeholder="Nome Completo" id="nome" name="nome" aria-describedby="nome" required>
                </div>
                <div class="form-group">
                    <label for="telefone">Qual seu número de contato?</label>
                    <input type="text" class="form-control" placeholder="(+00) 00 00000-0000" id="telefone" name="telefone" required>
                </div>
                <div class="form-group">
                    <label for="email">Qual o seu melhor e-mail?</label>
                    <input type="email" class="form-control" placeholder="E-mail" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="">Qual a sua área de formação?</label><br>
                    <div class="label-radio-fale-conosco-inc" style="justify-content: space-between;">
                        <div class="input-radio-fale-conosco-inc">
                            <input type="radio" id="formacaoAdministrativo" name="contact" value="Administrativo">
                            <label for="formacaoAdministrativo">Administrativo</label>
                        </div>
                        <div class="input-radio-fale-conosco-inc">
                            <input type="radio" id="formacaoVendas" name="contact" value="Vendas">
                            <label for="formacaoVendas">Vendas</label>
                        </div>
                        <div class="input-radio-fale-conosco-inc">
                            <input type="radio" id="formacaoMarketing" name="contact" value="Marketing/Comunicação">
                            <label for="formacaoMarketing">Marketing/Comunicação</label>
                        </div>
                        <div class="input-radio-fale-conosco-inc">
                            <input type="radio" id="formacaoFinanceiro" name="contact" value="Financeiro">
                            <label for="formacaoFinanceiro">Financeiro</label>
                        </div>
                        <div class="input-radio-fale-conosco-inc">
                            <input type="radio" id="formacaoObras" name="contact" value="Obras">
                            <label for="formacaoObras">Obras</label>
                        </div>
                        <div class="input-radio-fale-conosco-inc">
                            <input type="radio" id="formacaoOutraOpcao" name="contact" value="Outra opção">
                            <label for="formacaoOutraOpcao">Outra opção</label>
                        </div>
                        <div class="input-radio-fale-conosco-inc">
                            <input type="radio" id="formacaoProjetos" name="contact" value="Projetos (arquitetura/ engenharia)">
                            <label for="formacaoProjetos">Projetos (arquitetura/ engenharia)</label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="">Você possui experiência nessa área?</label><br>
                    <div class="label-radio-fale-conosco-inc">
                        <div class="input-radio-fale-conosco-inc">
                            <input type="radio" id="experienciaSim" name="experiencia" value="Sim">
                            <label for="experienciaSim">Sim</label>
                        </div>
                        <div class="input-radio-fale-conosco-inc">
                            <input type="radio" id="experienciaNao" name="experiencia" value="Não">
                            <label for="experienciaNao">Não</label>
                        </div>
                    </div>
                </div>
                <div class="form-group position-relative">
                    <i class="fa-solid fa-caret-down icon-select-input"></i>
                    <label for="cidade">Em que cidade você mora?</label>
                    <select class="form-control" id="cidade" name="cidade" required>
                        <option disabled selected style="color: #444744; opacity: 0.4;">Selecionar uma opção</option>
                        <option value="cidade1">Cidade 1</option>
                        <option value="cidade2">Cidade 2</option>
                        <option value="cidade3">Cidade 3</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="carta_apresentacao">Breve carta de apresentação:</label>
                    <textarea class="form-control" id="carta_apresentacao" name="carta_apresentacao" rows="7"></textarea>
                </div>
                <div class="form-group">
                    <label for="file-upload">Carregar currículo*</label><br>
                </div>
                <p style="padding: 0 2rem; color: white;">Tipo(s) permitido(s): .pdf, .doc, .docx</p><br>
                <div class="inputs-file-seu-terreno-inc" style="margin-left: 2rem; justify-content: flex-start;">
                    <button class="btn-upload-novo">Escolher arquivo</button>
                    <input class="input-file-inc-terreno" type="file" id="file-upload" name="file-upload" accept=".pdf,.doc,.docx" required>
                </div>
                <button type="submit">Enviar</button>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="lembrarSenha">
                    <label class="form-check-label" for="lembrarSenha">Ao preencher e enviar este formulário, você concorda com o armazenamento e manuseio de seus dados pelo Máximo Aldana.</label>
                </div>
            </form>

        </div>
    </div>
</section>

<?php include('footer-inc.php'); ?>