<?php
/*
Template Name: Seja um fornecedor - Construtora
*/
include('header.php'); ?>

<section id="banner">
    <div class="container-fluid">
        <div class="container-banner">
            <div class="container-title-banner-dna">
                <h1>Seja um <br>&ensp;&ensp;Fornecedor </h1>
            </div>

        </div>
    </div>
</section>

</main>


<section id="form-orce-sua-obra">
    <div class="container container-form-orce-sua-obra-con containerform-seu-terreno">
        <div class="content-text-orce-sua-obra-con">
            <h1>Seja um fornecedor Maximo</h1>
            <h2>Venha com a gente executar obras com foco na excelência, agilidade e qualidade</h2>
            <p>Somo especialistas em obras de grande porta para os segmentos de Hospitais, Corporativo, Educação, Prediais Comerciais e Residências</p>
            <p>Preencha e envie o formulário ao lado e em breve um especialista entrará em contato com você.</p>
        </div>
        <div class="content-container-form-orce-sua-obra-con">
            <form action="">
            <div class="form-group">
                    <label for="login">Qual seu nome?*</label>
                    <input type="text" class="form-control" placeholder="Nome Completo" id="nome" aria-describedby="nome" required>
                </div>
                <div class="form-group">
                    <label for="telefone">Empresa:*</label>
                    <input type="text" class="form-control" placeholder="Nome da empresa" id="nome-empresa" required>
                </div>
                <div class="form-group">
                    <label for="email">CNPJ:*</label>
                    <input type="email" class="form-control" placeholder="CNPJ" id="CNPJ" required>
                </div>
                <div class="form-group">
                    <label for="login">Telefone?*</label>
                    <input type="text" class="form-control" placeholder="+55 (00) 00000-0000" id="nome" aria-describedby="nome" required>
                </div>
                <div class="form-group">
                    <label for="telefone">E-mail:*</label>
                    <input type="text" class="form-control" placeholder="E-mail" id="Email" required>
                </div>
                <div class="form-group">
                    <label for="email">Segmento da Empresa</label>
                    <input type="email" class="form-control" placeholder="Segmento da Empresa" id="segmento-empresa" required>
                </div>
                <div class="form-group">
                    <label for="">Qual a melhor forma de contato?</label><br>
                    <div class="label-radio-orce-sua-obra-con">
                        <div class="input-radio-orce-sua-obra-con">
                            <input type="radio" id="contactChoice2" name="contact" value="Whatsapp">
                            <label for="">Whatsapp</label>
                        </div>
                        <div class="input-radio-orce-sua-obra-con">
                            <input type="radio" id="contactChoice2" name="contact" value="E-mail">
                            <label for="">E-mail</label>
                        </div>
                        <div class="input-radio-orce-sua-obra-con">
                            <input type="radio" id="contactChoice2" name="contact" value="Telefone">
                            <label for="">Telefone</label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="telefone">Escreva sua mensagem:</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Escreva aqui" rows="4"></textarea>
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
                    <input type="checkbox" class="form-check-input" id="lembrarSenha">
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
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                        <span class="material-symbols-outlined arrow-acordion-con">
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
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        <span class="material-symbols-outlined arrow-acordion-con">
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
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        <span class="material-symbols-outlined arrow-acordion-con">
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
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        <span class="material-symbols-outlined arrow-acordion-con">
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

<?php include('footer.php'); ?>