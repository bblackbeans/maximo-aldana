<?php
/*
Template Name: Seja um Fornecedor - Incorporadora
*/
include('header-portal-inc.php'); ?>

<section id="banner" class="py-5">
    <div class="container-fluid">
        <div class="container-banner">
            <div class="container-banner-oportunidades__title">
                <h1>Seja um<br> &ensp;&ensp; Fornecedor</h1>
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
    <div class="container container-form-portal-inc containerform-seu-terreno">
        <div class="content-parceria-portal-inc">
            <h1>Seja um fornecedor Maximo</h1>
            <h2>Venha com a gente executar obras com foco na excelência, agilidade e qualidade</h2>
            <p>Somo especialistas em obras de grande porta para os segmentos de Hospitais, Corporativo, Educação, Prediais Comerciais e Residências</p>
            <p>Preencha e envie o formulário ao lado e em breve um especialista entrará em contato com você.</p>
        </div>
        <div class="content-container-form-portal-inc">
            <form action="./mailSejaFornecedor-inc.php" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="nome">Qual seu nome?*</label>
                    <input type="text" class="form-control" placeholder="Nome Completo" id="nome" name="nome" required>
                </div>
                <div class="form-group">
                    <label for="nome-empresa">Empresa:*</label>
                    <input type="text" class="form-control" placeholder="Nome da empresa" id="nome-empresa" name="nome-empresa" required>
                </div>
                <div class="form-group">
                    <label for="CNPJ">CNPJ:*</label>
                    <input type="text" class="form-control" placeholder="CNPJ" id="CNPJ" name="CNPJ" required>
                </div>
                <div class="form-group">
                    <label for="telefone">Telefone?*</label>
                    <input type="text" class="form-control" placeholder="+55 (00) 00000-0000" id="telefone" name="telefone" required>
                </div>
                <div class="form-group">
                    <label for="Email">E-mail:*</label>
                    <input type="email" class="form-control" placeholder="E-mail" id="Email" name="Email" required>
                </div>
                <div class="form-group">
                    <label for="segmento-empresa">Segmento da Empresa</label>
                    <input type="text" class="form-control" placeholder="Segmento da Empresa" id="segmento-empresa" name="segmento-empresa" required>
                </div>
                <div class="form-group">
                    <label for="">Qual a melhor forma de contato?</label><br>
                    <div class="label-radio-fale-conosco-inc">
                        <div class="input-radio-fale-conosco-inc">
                            <input type="radio" id="contactChoice2" name="contact" value="Whatsapp" required>
                            <label for="contactChoice2">Whatsapp</label>
                        </div>
                        <div class="input-radio-fale-conosco-inc">
                            <input type="radio" id="contactChoice2" name="contact" value="E-mail" required>
                            <label for="contactChoice2">E-mail</label>
                        </div>
                        <div class="input-radio-fale-conosco-inc">
                            <input type="radio" id="contactChoice2" name="contact" value="Telefone" required>
                            <label for="contactChoice2">Telefone</label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="mensagem">Escreva sua mensagem:</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" name="mensagem" placeholder="Escreva aqui" rows="4"></textarea>
                </div>
                <div class="form-group">
                    <label for="">Faça upload:</label><br>
                </div>
                <p style="padding: 0 2rem; color: white;">Capacidade máxima de até 25MB. Aceitamos arquivos do tipo jpeg. pgn. pdf. ppt. mp4.</p><br>
                <div class="inputs-file-seu-terreno-inc">
                    <button class="btn-upload-novo">Escolher arquivo</button>
                    <input class="input-file-inc-terreno" type="file" id="file-upload" name="file-upload" multiple accept=".jpeg,.jpg,.png,.pgn,.pdf,.ppt,.mp4" required>
                </div>
                <button type="submit">Enviar</button>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="lembrarSenha" required>
                    <label class="form-check-label" for="lembrarSenha">Ao preencher e enviar este formulário, você concorda com o armazenamento e manuseio de seus dados pelo Máximo Aldana</label>
                </div>
            </form>

        </div>
    </div>
</section>

<section id="vagas">
    <div class="container container-filtrar-opotunidades">
        <h1>FAQ</h1>
        <div class="accordion" id="accordion-vagas-maximo" style="width: 100%;">
            <div class="accordion-item" style="margin-bottom: 2rem;">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed bg-acquagreen" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                        <span class="material-symbols-outlined arrow-acordion">
                            arrow_right
                        </span> Collapsible Group Item #1
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                    </div>
                </div>
            </div>
            <div class="accordion-item" style="margin-bottom: 2rem;">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed bg-acquagreen" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        <span class="material-symbols-outlined arrow-acordion">
                            arrow_right
                        </span> Collapsible Group Item #2
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                    </div>
                </div>
            </div>
            <div class="accordion-item" style="margin-bottom: 2rem;">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed bg-acquagreen" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        <span class="material-symbols-outlined arrow-acordion">
                            arrow_right
                        </span> Collapsible Group Item #3
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                    </div>
                </div>
            </div>
            <div class="accordion-item" style="margin-bottom: 2rem;">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed bg-acquagreen" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        <span class="material-symbols-outlined arrow-acordion">
                            arrow_right
                        </span> Collapsible Group Item #4
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include('footer-inc.php'); ?>