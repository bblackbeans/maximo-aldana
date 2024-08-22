<?php
/*
Template Name: Obras Educacionais Construtora
*/
include('header.php'); ?>

<section id="banner">
    <div class="container-fluid">
        <div class="container-banner">
            <div class="container-title-banner-dna">
                <h1>Educacional</h1>
            </div>

        </div>
    </div>
</section>

</main>

<section id="para-sua-fase">
    <div class="container-fluid px-5">
        <div class="container-title">
            <h3 class="container-title__title">Conheça todas as obras educacionais </h3>
            <h3 class="container-title__title">construídas pela Maximo Aldana.</h3>
        </div>
        <p style="text-align: center;">Somo especialistas em obras de grande porte para os segmentos de Hospitais, Corporativo, Educação, Prediais Comerciais e Residenciais,</p>
        <div class="container-fase">
            <div class="container-fase__title">
                <p>Encontre seu Máximo Aldana</p>
            </div>
            <div class="container-fase__button">
                <button class="btn-filtrar" style="background-color: #18354f;" id="filterBtn">FILTRAR &ensp; <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="ai ai-SettingsHorizontal">
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
                <div class="carousel-inner">
                    <div class="carousel-item-index" data-cidade="sao-bernardo" data-status="futuro-lancamento" data-dormitorio="2-quartos">
                        <div class="card" style="width: 100%;">
                            <div class="image-container">
                                <img src="./src/img/Colegio-Camp-Sao-Bernardo-do-Campo-10-758x564.jpeg" class="card-img-top" alt="...">
                                <p style="font-size: 38px;" class="img-text-title">COLÉGIO CAMP</p>
                            </div>
                            <div class="card-body">
                                <a class="link-card-title" href="">
                                    <h5 class="card-title">Saiba Mais <span class="material-symbols-outlined">arrow_forward_ios</span></h5>
                                </a>
                                <p class="card-text">SÃO BERNARDO DO CAMPO (SP)</p>
                                <h4 class="card-text-two">Colégio Camp</h4>
                                <p class="card-content">4.896 m²</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel secondCarousel" style="display: none;">
                <div class="carousel-inner">
                    <div class="carousel-item-index" data-cidade="sao-bernardo" data-status="futuro-lancamento" data-dormitorio="2-quartos">
                        <div class="card" style="width: 100%;">
                            <div class="image-container">
                                <img src="./src/img/Colegio-Camp-Sao-Bernardo-do-Campo-10-758x564.jpeg" class="card-img-top" alt="...">
                                <p style="font-size: 38px;" class="img-text-title">COLÉGIO CAMP</p>
                            </div>
                            <div class="card-body">
                                <a class="link-card-title" href="">
                                    <h5 class="card-title">Saiba Mais <span class="material-symbols-outlined">arrow_forward_ios</span></h5>
                                </a>
                                <p class="card-text">SÃO BERNARDO DO CAMPO (SP)</p>
                                <h4 class="card-text-two">Colégio Camp</h4>
                                <p class="card-content">4.896 m²</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fase__button mt-5">
                <button class="btn-ver-todos-cards" style="background-color: #18354f;" id="toggleButton" onclick="toggleDisplay()">VER TODOS</button>
            </div>
        </div>
    </div>
</section>

<section id="btns-cta-con">
    <div class="container container-flex-btns">
        <button>PORTFÓLIO</button>
        <button>MAIS OBRAS</button>
    </div>
</section>

<section id="form-incorporadora" style="margin-bottom: 3rem;">
    <div class="container-fluid p-0">
        <div class="container-form">
            <div class="container-form__img">
                <img src="./src/img/educacional cta.png" alt="">
            </div>
            <div class="container-form__form">
                <div class="container-form__texto">
                    <h3>Conquiste o seu<br>IMÓVEL dos sonhos!</h3>
                    <p>Os empreendimentos da Maximo Aldana trazem a exclusividade, modernidade e o conforto que você procura.</p>
                </div>
                <form method="POST" action="./mailObras-con.php" id="form-home-incorporadora">
                    <h3>Preencha o formulário para conversar com um especialista.</h3>
                    <div class="form-group">
                        <input type="text" id="name" name="name" placeholder="Nome*" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <input type="tel" id="telefone" name="phone" placeholder="Telefone*" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <input type="email" id="email" placeholder="Email*" name="email" class="form-control" required>
                    </div>
                    <div class="form-group-select">
                        <label for="empreendimento">Qual empreendimento você tem interesse?*</label>
                        <select class="form-select" aria-label="empreendimento" id="empreendimento" name="empreendimento">
                            <option selected>Selecionar uma opção</option>
                            <option value="Seven Living">Seven Living</option>
                            <option value="Aldana One">Aldana One</option>
                        </select>
                    </div>
                    <div class="form-group-radio">
                        <label>Qual melhor forma de contato?*</label><br>
                        <div style="display: flex;">
                            <div style="display: flex; flex-direction: row; align-items: baseline;">
                                <input type="radio" id="whatsapp" name="contact_method" value="whatsapp" required>&ensp;
                                <label class="label-radio" for="whatsapp">Whatsapp</label>
                            </div>
                            &ensp;
                            <div style="display: flex; flex-direction: row; align-items: baseline;">
                                <input type="radio" id="e-mail" name="contact_method" value="email" required>&ensp;
                                <label class="label-radio" for="email">E-mail</label>
                            </div>
                            &ensp;
                            <div style="display: flex; flex-direction: row; align-items: baseline;">
                                <input type="radio" id="phone" name="contact_method" value="phone" required>&ensp;
                                <label class="label-radio" for="phone">Telefone</label>
                            </div>
                            &ensp;
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

<?php include('footer.php'); ?>