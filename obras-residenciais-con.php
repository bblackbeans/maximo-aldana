<?php
/*
Template Name: Obras Prediais Residênciais Construtora
*/
include('header.php'); ?>

<section id="banner">
    <div class="container-fluid">
        <div class="container-banner">
            <div class="container-title-banner-dna">
                <h1>Prediais Residênciais </h1>
            </div>

        </div>
    </div>
</section>

</main>

<section id="para-sua-fase">
    <div class="container-fluid px-5">
        <div class="container-title">
            <h3 class="container-title__title">Conheça todas as obras residênciais </h3>
            <h3 class="container-title__title">construídas pela Maximo Aldana.</h3>
        </div>
        <p style="text-align: center;">Somo especialistas em obras de grande porte para os segmentos de Hospitais, Corporativo, Educação, Prediais Comerciais e Residenciais,</p>
        <div class="container-fase">
            <div class="container-fase__title">
                <p>Encontre seu Máximo Aldana</p>
            </div>
            <div class="container-fase__button">
                <button style="background-color: #18354f;" id="filterBtn">FILTRAR &ensp; <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="ai ai-SettingsHorizontal">
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
                    <div class="carousel-item" data-cidade="sao-bernardo" data-status="futuro-lancamento" data-dormitorio="2-quartos">
                        <div class="card" style="width: 100%;">
                            <div class="image-container">
                                <img src="http://devmaximoaldana.c09b59be.configr.cloud/wp-content/uploads/2024/06/51e223fa0238e8489aca6b51b9e7b6b4.png" class="card-img-top" alt="...">
                                <p class="img-text-title">ALDANA<br>JARDIM</p>
                            </div>
                            <div class="carousel-item__estagio">
                                <p class="color-two-construction"><i class="fa-solid fa-trowel-bricks"></i>&ensp;EM CONSTRUÇÃO</p>
                            </div>
                            <div class="card-body">
                                <a class="link-card-title" href="">
                                    <h5 class="card-title">Saiba Mais <span class="material-symbols-outlined">arrow_forward_ios</span></h5>
                                </a>
                                <p class="card-text">JARDIM DO MAR - SÃO BERNARDO DO CAMPO</p>
                                <h4 class="card-text-two">Aldana Jardim</h4>
                                <p class="card-content">59 e 65 m²</p>
                                <p class="card-content">2 dormitórios</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item" data-cidade="santo-andre" data-status="lancamento" data-dormitorio="3-quartos">
                        <div class="card" style="width: 100%;">
                            <div class="image-container">
                                <img src="./src/img/seven-living.png" class="card-img-top" alt="...">
                                <p class="img-text-title">SEVEN <br>LIVING</p>
                            </div>
                            <div class="carousel-item__estagio">
                                <p class="color-two-construction"><i class="fa-solid fa-trowel-bricks"></i>&ensp;EM CONSTRUÇÃO</p>
                            </div>
                            <div class="card-body">
                                <a class="link-card-title" href="">
                                    <h5 class="card-title">Saiba Mais <span class="material-symbols-outlined">arrow_forward_ios</span></h5>
                                </a>
                                <p class="card-text">PONTA DA PRAIA - SANTOS</p>
                                <h4 class="card-text-two">Seven Living</h4>
                                <p class="card-content">55 e 96 m²</p>
                                <p class="card-content">1, 2, 3 dormitórios (2 suítes)</p>
                                <p class="card-content">1 vaga determinada</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item" data-cidade="santos" data-status="em-construcao" data-dormitorio="4-mais">
                        <div class="card" style="width: 100%;">
                            <div class="image-container">
                                <img src="./src/img/Aldana-One.png" class="card-img-top" alt="...">
                                <p class="img-text-title">ALDANA <br>ONE</p>
                            </div>
                            <div class="carousel-item__estagio">
                                <p><i class="fa-solid fa-house"></i>&ensp;PRONTO PARA MORAR</p>
                            </div>
                            <div class="card-body">
                                <a class="link-card-title" href="">
                                    <h5 class="card-title-second-color">Saiba Mais <span class="material-symbols-outlined">arrow_forward_ios</span></h5>
                                </a>
                                <p class="card-text">JARDIM DO MAR - SÃO BERNARDO DO CAMPO</p>
                                <h4 class="card-text-two">Aldana One</h4>
                                <p class="card-content">51 e 58 m²</p>
                                <p class="card-content">2 dormitórios (1 suíte)</p>
                                <p class="card-content">1 vaga determinada</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item" data-cidade="guaruja" data-status="pronto" data-dormitorio="2-quartos">
                        <div class="card" style="width: 100%;">
                            <div class="image-container">
                                <img src="./src/img/egydio-martins (1).png" class="card-img-top" alt="...">
                                <p class="img-text-title">EGYDIO <br>MARTINS</p>
                            </div>
                            <div class="carousel-item__estagio">
                                <p class="color-three-breve"><i class="fa-solid fa-calendar"></i>&ensp;BREVE LANÇAMENTO</p>
                            </div>
                            <div class="card-body">
                                <a class="link-card-title" href="">
                                    <h5 class="card-title-three-color">Saiba Mais <span class="material-symbols-outlined">arrow_forward_ios</span></h5>
                                </a>
                                <p class="card-text">PONTA DA PRAIA - SANTOS</p>
                                <h4 class="card-text-two">Egydio Martins</h4>
                                <!-- <p class="card-content">55 e 96 m²</p>
                                <p class="card-content">1, 2, 3 dormitórios (2 suítes)</p>
                                <p class="card-content">1 vaga determinada</p> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel secondCarousel" style="display: none;">
                <div class="carousel-inner">
                    <div class="carousel-item" data-cidade="sao-bernardo" data-status="futuro-lancamento" data-dormitorio="2-quartos">
                        <div class="card" style="width: 100%;">
                            <div class="image-container">
                                <img src="http://devmaximoaldana.c09b59be.configr.cloud/wp-content/uploads/2024/06/51e223fa0238e8489aca6b51b9e7b6b4.png" class="card-img-top" alt="...">
                                <p class="img-text-title">ALDANA<br>JARDIM</p>
                            </div>
                            <div class="carousel-item__estagio">
                                <p class="color-two-construction"><i class="fa-solid fa-trowel-bricks"></i>&ensp;EM CONSTRUÇÃO</p>
                            </div>
                            <div class="card-body">
                                <a class="link-card-title" href="">
                                    <h5 class="card-title">Saiba Mais <span class="material-symbols-outlined">arrow_forward_ios</span></h5>
                                </a>
                                <p class="card-text">JARDIM DO MAR - SÃO BERNARDO DO CAMPO</p>
                                <h4 class="card-text-two">Aldana Jardim</h4>
                                <p class="card-content">59 e 65 m²</p>
                                <p class="card-content">2 dormitórios</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item" data-cidade="santo-andre" data-status="lancamento" data-dormitorio="3-quartos">
                        <div class="card" style="width: 100%;">
                            <div class="image-container">
                                <img src="./src/img/seven-living.png" class="card-img-top" alt="...">
                                <p class="img-text-title">SEVEN <br>LIVING</p>
                            </div>
                            <div class="carousel-item__estagio">
                                <p class="color-two-construction"><i class="fa-solid fa-trowel-bricks"></i>&ensp;EM CONSTRUÇÃO</p>
                            </div>
                            <div class="card-body">
                                <a class="link-card-title" href="">
                                    <h5 class="card-title">Saiba Mais <span class="material-symbols-outlined">arrow_forward_ios</span></h5>
                                </a>
                                <p class="card-text">PONTA DA PRAIA - SANTOS</p>
                                <h4 class="card-text-two">Seven Living</h4>
                                <p class="card-content">55 e 96 m²</p>
                                <p class="card-content">1, 2, 3 dormitórios (2 suítes)</p>
                                <p class="card-content">1 vaga determinada</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item" data-cidade="santos" data-status="em-construcao" data-dormitorio="4-mais">
                        <div class="card" style="width: 100%;">
                            <div class="image-container">
                                <img src="./src/img/Aldana-One.png" class="card-img-top" alt="...">
                                <p class="img-text-title">ALDANA <br>ONE</p>
                            </div>
                            <div class="carousel-item__estagio">
                                <p><i class="fa-solid fa-house"></i>&ensp;PRONTO PARA MORAR</p>
                            </div>
                            <div class="card-body">
                                <a class="link-card-title" href="">
                                    <h5 class="card-title-second-color">Saiba Mais <span class="material-symbols-outlined">arrow_forward_ios</span></h5>
                                </a>
                                <p class="card-text">JARDIM DO MAR - SÃO BERNARDO DO CAMPO</p>
                                <h4 class="card-text-two">Aldana One</h4>
                                <p class="card-content">51 e 58 m²</p>
                                <p class="card-content">2 dormitórios (1 suíte)</p>
                                <p class="card-content">1 vaga determinada</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item" data-cidade="guaruja" data-status="pronto" data-dormitorio="2-quartos">
                        <div class="card" style="width: 100%;">
                            <div class="image-container">
                                <img src="./src/img/egydio-martins (1).png" class="card-img-top" alt="...">
                                <p class="img-text-title">EGYDIO <br>MARTINS</p>
                            </div>
                            <div class="carousel-item__estagio">
                                <p class="color-three-breve"><i class="fa-solid fa-calendar"></i>&ensp;BREVE LANÇAMENTO</p>
                            </div>
                            <div class="card-body">
                                <a class="link-card-title" href="">
                                    <h5 class="card-title-three-color">Saiba Mais <span class="material-symbols-outlined">arrow_forward_ios</span></h5>
                                </a>
                                <p class="card-text">PONTA DA PRAIA - SANTOS</p>
                                <h4 class="card-text-two">Egydio Martins</h4>
                                <!-- <p class="card-content">55 e 96 m²</p>
                                <p class="card-content">1, 2, 3 dormitórios (2 suítes)</p>
                                <p class="card-content">1 vaga determinada</p> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fase__button mt-5">
                <button style="background-color: #18354f;" id="toggleButton" onclick="toggleDisplay()">VER TODOS</button>
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
                <img src="./src/img/prediais residenciais cta.png" alt="">
            </div>
            <div class="container-form__form">
                <div class="container-form__texto">
                    <h3>Conquiste o seu<br>IMÓVEL dos sonhos!</h3>
                    <p>Os empreendimentos da Maximo Aldana trazem a exclusividade, modernidade e o conforto que você procura.</p>
                </div>
                <form method="POST" action="./mailIndex-inc.php" id="form-home-incorporadora">
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
                        <label class="label-radio" for="whatsapp">Whatsapp</label>
                        <input type="radio" id="whatsapp" name="contact_method" value="whatsapp" required>
                        &ensp;
                        <label class="label-radio" for="email">E-mail</label>
                        <input type="radio" id="e-mail" name="contact_method" value="email" required>
                        &ensp;
                        <label class="label-radio" for="phone">Telefone</label>
                        <input type="radio" id="phone" name="contact_method" value="phone" required>
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