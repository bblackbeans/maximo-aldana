<?php
/*
Template Name: Home Incorporadora
*/
include('header-inc.php'); ?>

<section id="banner" class="py-5">
    <div class="container">
        <div class="container-banner">
            <div class="container-banner__title">
                <h1>Aldana Jardim</h1>
            </div>
            <div class="container-banner__subtitle">
                <h2>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h2>
            </div>
        </div>
        <div class="container-bar">
            <div class="container-bar__dot">
                <span class="material-symbols-outlined">
                    location_on
                </span>
            </div>
            <div class="container-bar__lorem">
                <p>Lorem ipsum dolor sit amet<br>consectetur adipiscing elit.</p>
            </div>
            <div class="container-bar__descricao">
                <p>80m² | 2 e 3 Suítes | 2 Vagas de Garagem</p>
            </div>
            <div class="container-bar__button">
                <a href="">SAIBA MAIS</a>
            </div>
        </div>
    </div>
</section>

</main>

<section id="para-sua-fase">
    <div class="container-fluid px-5">
        <div class="container-title">
            <h3 class="container-title__title">Para sua nova fase da vida, um novo imóvel</h3>
            <h6 class="container-title__subtitle mb-0">Empreendimentos para morar ou investir.</h6>
        </div>
        <div class="container-fase">
            <div class="container-fase__title">
                <p>Encontre seu Máximo Aldana</p>
            </div>
            <div class="container-fase__button">
                <button id="filterBtn">FILTRAR</button>
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
                        <img src="http://devmaximoaldana.c09b59be.configr.cloud/wp-content/uploads/2024/06/51e223fa0238e8489aca6b51b9e7b6b4.png" alt="Aldana Jardim">
                        <div class="carousel-item__overlay"></div>
                        <div class="carousel-item__estagio">
                            <p>FUTURO LANÇAMENTO</p>
                        </div>
                        <div class="carousel-item__nome">
                            <p>ALDANA<br>JARDIM</p>
                        </div>
                        <div class="carousel-item__hover-content">
                            <p>Jardim do Mar<br>São Bernardo do Campo - SP</p>
                            <h3>Aldana Jardim</h3>
                            <p>Rua Kara, 140<br>2 dormitórios, 59 e 60m²</p>
                        </div>
                    </div>
                    <div class="carousel-item" data-cidade="santo-andre" data-status="lancamento" data-dormitorio="3-quartos">
                        <img src="http://devmaximoaldana.c09b59be.configr.cloud/wp-content/uploads/2024/06/51e223fa0238e8489aca6b51b9e7b6b4.png" alt="Aldana Jardim">
                        <div class="carousel-item__overlay"></div>
                        <div class="carousel-item__estagio">
                            <p>LANÇAMENTO</p>
                        </div>
                        <div class="carousel-item__nome">
                            <p>ALDANA<br>ONE</p>
                        </div>
                        <div class="carousel-item__hover-content">
                            <p>Jardim do Mar<br>São Bernardo do Campo - SP</p>
                            <h3>Aldana Jardim</h3>
                            <p>Rua Kara, 140<br>2 dormitórios, 59 e 60m²</p>
                        </div>
                    </div>
                    <div class="carousel-item" data-cidade="santos" data-status="em-construcao" data-dormitorio="4-mais">
                        <img src="http://devmaximoaldana.c09b59be.configr.cloud/wp-content/uploads/2024/06/51e223fa0238e8489aca6b51b9e7b6b4.png" alt="Aldana Jardim">
                        <div class="carousel-item__overlay"></div>
                        <div class="carousel-item__estagio">
                            <p>EM CONSTRUÇÃO</p>
                        </div>
                        <div class="carousel-item__nome">
                            <p>ALDANA<br>JARDIM</p>
                        </div>
                        <div class="carousel-item__hover-content">
                            <p>Jardim do Mar<br>São Bernardo do Campo - SP</p>
                            <h3>Aldana Jardim</h3>
                            <p>Rua Kara, 140<br>2 dormitórios, 59 e 60m²</p>
                        </div>
                    </div>
                    <div class="carousel-item" data-cidade="guaruja" data-status="pronto" data-dormitorio="2-quartos">
                        <img src="http://devmaximoaldana.c09b59be.configr.cloud/wp-content/uploads/2024/06/51e223fa0238e8489aca6b51b9e7b6b4.png" alt="Aldana Jardim">
                        <div class="carousel-item__overlay"></div>
                        <div class="carousel-item__estagio">
                            <p>PRONTO</p>
                        </div>
                        <div class="carousel-item__nome">
                            <p>ALDANA<br>JARDIM</p>
                        </div>
                        <div class="carousel-item__hover-content">
                            <p>Jardim do Mar<br>São Bernardo do Campo - SP</p>
                            <h3>Aldana Jardim</h3>
                            <p>Rua Kara, 140<br>2 dormitórios, 59 e 60m²</p>
                        </div>
                    </div>
                    <div class="carousel-item" data-cidade="atibaia" data-status="lancamento" data-dormitorio="2-quartos">
                        <img src="http://devmaximoaldana.c09b59be.configr.cloud/wp-content/uploads/2024/06/51e223fa0238e8489aca6b51b9e7b6b4.png" alt="Aldana Jardim">
                        <div class="carousel-item__overlay"></div>
                        <div class="carousel-item__estagio">
                            <p>LANÇAMENTO</p>
                        </div>
                        <div class="carousel-item__nome">
                            <p>ALDANA<br>JARDIM</p>
                        </div>
                        <div class="carousel-item__hover-content">
                            <p>Jardim do Mar<br>São Bernardo do Campo - SP</p>
                            <h3>Aldana Jardim</h3>
                            <p>Rua Kara, 140<br>2 dormitórios, 59 e 60m²</p>
                        </div>
                    </div>
                    <div class="carousel-item" data-cidade="sao-bernardo" data-status="futuro-lancamento" data-dormitorio="3-quartos">
                        <img src="http://devmaximoaldana.c09b59be.configr.cloud/wp-content/uploads/2024/06/51e223fa0238e8489aca6b51b9e7b6b4.png" alt="Aldana Jardim">
                        <div class="carousel-item__overlay"></div>
                        <div class="carousel-item__estagio">
                            <p>FUTURO LANÇAMENTO</p>
                        </div>
                        <div class="carousel-item__nome">
                            <p>ALDANA<br>JARDIM</p>
                        </div>
                        <div class="carousel-item__hover-content">
                            <p>Jardim do Mar<br>São Bernardo do Campo - SP</p>
                            <h3>Aldana Jardim</h3>
                            <p>Rua Kara, 140<br>2 dormitórios, 59 e 60m²</p>
                        </div>
                    </div>
                    <div class="carousel-item" data-cidade="santo-andre" data-status="em-construcao" data-dormitorio="4-mais">
                        <img src="http://devmaximoaldana.c09b59be.configr.cloud/wp-content/uploads/2024/06/51e223fa0238e8489aca6b51b9e7b6b4.png" alt="Aldana Jardim">
                        <div class="carousel-item__overlay"></div>
                        <div class="carousel-item__estagio">
                            <p>EM CONSTRUÇÃO</p>
                        </div>
                        <div class="carousel-item__nome">
                            <p>ALDANA<br>JARDIM</p>
                        </div>
                        <div class="carousel-item__hover-content">
                            <p>Jardim do Mar<br>São Bernardo do Campo - SP</p>
                            <h3>Aldana Jardim</h3>
                            <p>Rua Kara, 140<br>2 dormitórios, 59 e 60m²</p>
                        </div>
                    </div>
                    <div class="carousel-item" data-cidade="guaruja" data-status="pronto" data-dormitorio="4-mais">
                        <img src="http://devmaximoaldana.c09b59be.configr.cloud/wp-content/uploads/2024/06/51e223fa0238e8489aca6b51b9e7b6b4.png" alt="Aldana Jardim">
                        <div class="carousel-item__overlay"></div>
                        <div class="carousel-item__estagio">
                            <p>PRONTO</p>
                        </div>
                        <div class="carousel-item__nome">
                            <p>ALDANA<br>JARDIM</p>
                        </div>
                        <div class="carousel-item__hover-content">
                            <p>Jardim do Mar<br>São Bernardo do Campo - SP</p>
                            <h3>Aldana Jardim</h3>
                            <p>Rua Kara, 140<br>2 dormitórios, 59 e 60m²</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fase__button mt-5">
                <a href="">VER TODOS</a>
            </div>
        </div>
    </div>
</section>

<section id="form-incorporadora">
    <div class="container-fluid p-0">
        <div class="container-form">
            <div class="container-form__img">
                <img src="http://devmaximoaldana.c09b59be.configr.cloud/wp-content/uploads/2024/06/mulher_crianca.png" alt="">
            </div>
            <div class="container-form__texto">
                <h3>Conquiste o seu<br>IMÓVEL dos sonhos!</h3>
                <p>Os empreendimentos<br>da Maximo Aldana trazem a exclusividade,<br>modernidade e o conforto que você<br>procura.</p>
            </div>
            <div class="container-form__form">
                <form method="POST" action="" id="form-home-incorporadora">
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
                            <option value="xxxxxxxx">Opção 1</option>
                            <option value="xxxxxxxxxx">Opção 2</option>
                        </select>
                    </div>
                    <div class="form-group-radio">
                        <label>Qual melhor forma de contato?*</label><br>
                        <input type="radio" id="whatsapp" name="contact_method" value="whatsapp" required>
                        <label class="label-radio" for="whatsapp">Whatsapp</label>
                        <input type="radio" id="e-mail" name="contact_method" value="email" required>
                        <label class="label-radio" for="email">E-mail</label>
                        <input type="radio" id="phone" name="contact_method" value="phone" required>
                        <label class="label-radio" for="phone">Telefone</label>
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
    <div class="container-fluid px-5">
        <div class="container-title-blog">
            <h4>Fique por dento do</h4>
            <h2>Nosso Blog</h2>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="card-blog">
                    <div class="card-blog__img">
                        <img class="img-fluid" src="https://maximoaldana.com.br/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-16-at-15.03.37.jpeg" alt="">
                    </div>
                    <div class="card-blog__title">
                        <h2>Título principal do blog</h2>
                    </div>
                    <div class="card-blog__data">
                        <span class="material-symbols-outlined">
                            calendar_today
                        </span>
                        <p>1 de Janeiro de 2024 • Por Máximo Aldana</p>
                    </div>
                    <div class="card-blog__desc">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam ut lorem ac tortor tempor vehicula. Vivamus consectetur pretium volutpat. Praesent vitae porta diam. Aenean bibendum blandit augue, sit amet viverra quam ornare in. Fusce mattis auctor orci nec tincidunt. Integer a nisi non purus vestibulum…
                    </div>
                    <div class="card-blog__button">
                        <a href="" class="bg-acquagreen">LEIA MAIS</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-blog">
                    <div class="card-blog__img">
                        <img class="img-fluid" src="https://maximoaldana.com.br/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-16-at-15.03.37.jpeg" alt="">
                    </div>
                    <div class="card-blog__title">
                        <h2>Título principal do blog</h2>
                    </div>
                    <div class="card-blog__data">
                        <span class="material-symbols-outlined">
                            calendar_today
                        </span>
                        <p>1 de Janeiro de 2024 • Por Máximo Aldana</p>
                    </div>
                    <div class="card-blog__desc">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam ut lorem ac tortor tempor vehicula. Vivamus consectetur pretium volutpat. Praesent vitae porta diam. Aenean bibendum blandit augue, sit amet viverra quam ornare in. Fusce mattis auctor orci nec tincidunt. Integer a nisi non purus vestibulum…
                    </div>
                    <div class="card-blog__button">
                        <a href="" class="bg-acquagreen">LEIA MAIS</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-blog">
                    <div class="card-blog__img">
                        <img class="img-fluid" src="https://maximoaldana.com.br/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-16-at-15.03.37.jpeg" alt="">
                    </div>
                    <div class="card-blog__title">
                        <h2>Título principal do blog</h2>
                    </div>
                    <div class="card-blog__data">
                        <span class="material-symbols-outlined">
                            calendar_today
                        </span>
                        <p>1 de Janeiro de 2024 • Por Máximo Aldana</p>
                    </div>
                    <div class="card-blog__desc">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam ut lorem ac tortor tempor vehicula. Vivamus consectetur pretium volutpat. Praesent vitae porta diam. Aenean bibendum blandit augue, sit amet viverra quam ornare in. Fusce mattis auctor orci nec tincidunt. Integer a nisi non purus vestibulum…
                    </div>
                    <div class="card-blog__button">
                        <a href="" class="bg-acquagreen">LEIA MAIS</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-button-todos">
            <a href="" class="ver-todos-button bg-acquagreen">VER TODOS</a>
        </div>
    </div>
</section>

<?php include('footer-inc.php'); ?>