<?php
/*
Template Name: Ofereça seu terreno - Incorporadora
*/
include('header-portal-inc.php'); ?>

<section id="banner" class="py-5">
    <div class="container-fluid">
        <div class="container-banner">
            <div class="container-banner-oportunidades__title">
                <h1>Ofereça<br> &ensp;&ensp; seu terreno</h1>
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
            <h1>Parceria que Constrói Sucesso</h1>
            <h2>Você possui um ou mais terrenos e deseja negociá-los com a Maximo Aldana?</h2>
            <p>Queremos conhecer sua proposta. Preencha o formulário abaixo e em breve entraremos em contato.</p>
        </div>
        <div class="content-container-form-portal-inc">
            <form action="./mailOferecaTerreno-inc.php" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="login">Qual o seu nome?</label>
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
                    <label for="cep">Qual o CEP?</label>
                    <input type="text" class="form-control" placeholder="0000-000" id="cep" name="cep" aria-describedby="CEP" required>
                </div>
                <div class="form-group">
                    <label for="ruaiterreno">Qual é a Rua?</label>
                    <input type="text" class="form-control" placeholder="Rua do Terreno" id="ruaiterreno" name="ruaiterreno" required>
                </div>
                <div class="form-group">
                    <label for="numero-terreno">Qual é o número?</label>
                    <input type="text" class="form-control" placeholder="Número do terreno" id="numero-terreno" name="numero-terreno" aria-describedby="numero-terreno" required>
                </div>
                <div class="form-group">
                    <label for="bairro">Qual o bairro?</label>
                    <input type="text" class="form-control" placeholder="Bairro do terreno" id="bairro" name="bairro" required>
                </div>
                <div class="form-group">
                    <label for="cidade-terreno">Qual a cidade?</label>
                    <input type="text" class="form-control" placeholder="Cidade do terreno" id="cidade-terreno" name="cidade-terreno" aria-describedby="cidade-terreno" required>
                </div>
                <div class="form-group">
                    <label for="complemento">Complemento</label>
                    <input type="text" class="form-control" placeholder="Informações adicionais" id="complemento" name="complemento" required>
                </div>
                <div class="form-group">
                    <label for="metragem-terreno">Área do terreno</label>
                    <input type="text" class="form-control" placeholder="Metragem do terreno" id="metragem-terreno" name="metragem-terreno" aria-describedby="metragem-terreno" required>
                </div>
                <div class="form-group">
                    <label for="valor-terreno">Preço (Opcional)</label>
                    <input type="text" class="form-control" placeholder="Valor do terreno" id="valor-terreno" name="valor-terreno">
                </div>
                <div class="form-group">
                    <label for="">Você é:</label><br>
                    <div class="label-radio-fale-conosco-inc">
                        <div class="input-radio-fale-conosco-inc">
                            <input type="radio" id="corretor" name="contactTipo" value="corretor" required>
                            <label for="corretor">Corretor(a)</label>
                        </div>
                        <div class="input-radio-fale-conosco-inc">
                            <input type="radio" id="proprietario" name="contactTipo" value="proprietario" required>
                            <label for="proprietario">Proprietário(a)</label>
                        </div>
                        <div class="input-radio-fale-conosco-inc">
                            <input type="radio" id="representante" name="contactTipo" value="representante" required>
                            <label for="representante">Representante</label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="">Faça upload de até 3 imagens do terreno:</label><br>
                </div>
                <p style="padding: 0 2rem; color: white;">Capacidade máxima de até 100MB por arquivo anexado. Aceitamos arquivos do tipo jpeg. pgn. pdf. ppt. mp4.</p><br>
                <div class="inputs-file-seu-terreno-inc">
                    <button class="btn-upload-novo">Escolher arquivo</button>
                    <input class="input-file-inc-terreno" type="file" id="file-upload" name="file-upload" multiple accept=".jpeg,.jpg,.png,.pgn,.pdf,.ppt,.mp4" required>
                    <button class="btn-upload-novo">Escolher arquivo</button>
                    <input class="input-file-inc-terreno" type="file" id="file-upload" name="file-upload" multiple accept=".jpeg,.jpg,.png,.pgn,.pdf,.ppt,.mp4" required>
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