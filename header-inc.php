<!DOCTYPE html>

<?php
$home = "http://devmaximoaldana.c09b59be.configr.cloud/";
?>

<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css" integrity="sha512-NmLkDIU1C/C88wi324HBc+S2kLhi08PN5GDeUVVVC/BVt/9Izdsc9SVeVfA1UZbY3sHUlDSyRXhCzHfr6hmPPw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="./src/styles.css">
    <link rel="icon" type="image/x-icon" href="">
    <title>Máximo Aldana</title>
</head>

<body>
    <main class="background-image">
        <div id="carouselExampleIndicators" class="carousel slide carousel-slide-header">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner" style="justify-content: left;">
                <div class="carousel-item active ">
                    <img src="./src/img/port saúde.png" class="d-block w-100 img-carousel-header" alt="...">
                    <div class="container container-legenda-header">
                        <div class="container-banner">
                            <div class="container-banner__title">
                                <h1>Aldana Jardim</h1>
                            </div>

                        </div>
                        <div class="container-bar">
                            <div class="container-bar__dot">
                                <span class="material-symbols-outlined">
                                    location_on
                                </span>
                            </div>
                            <div class="container-bar__lorem">
                                <p>Jardim do Mar </br> São Bernardo do Campo</p>
                            </div>
                            <div class="container-bar__descricao">
                                <p style="margin-right: 24px;">59 e 65 m² | 2 dormitórios | 1 vaga na garagem</p>
                            </div>
                            <div class="container-bar__button" style="margin-right: 62px;">
                                <a href="">SAIBA MAIS</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item ">
                    <img src="./src/img/Banner-Somos-Maximo.png" class="d-block w-100 img-carousel-header" alt="">
                    <div class="container container-legenda-header">
                        <div class="container-banner">
                            <div class="container-banner__title">
                                <h1>Seven Living</h1>
                            </div>

                        </div>
                        <div class="container-bar">
                            <div class="container-bar__dot">
                                <span class="material-symbols-outlined">
                                    location_on
                                </span>
                            </div>
                            <div class="container-bar__lorem">
                                <p>Jardim do Mar </br> São Bernardo do Campo</p>
                            </div>
                            <div class="container-bar__descricao">
                                <p style="margin-right: 24px;">59 e 65 m² | 2 dormitórios | 1 vaga na garagem</p>
                            </div>
                            <div class="container-bar__button" style="margin-right: 62px;">
                                <a href="">SAIBA MAIS</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item ">
                    <img src="./src/img/banner-vaga.png" class="d-block w-100 img-carousel-header" alt="">
                    <div class="container container-legenda-header">
                        <div class="container-banner">
                            <div class="container-banner__title">
                                <h1>Aldana One</h1>
                            </div>

                        </div>
                        <div class="container-bar">
                            <div class="container-bar__dot">
                                <span class="material-symbols-outlined">
                                    location_on
                                </span>
                            </div>
                            <div class="container-bar__lorem">
                                <p>Jardim do Mar </br> São Bernardo do Campo</p>
                            </div>
                            <div class="container-bar__descricao">
                                <p style="margin-right: 24px;">59 e 65 m² | 2 dormitórios | 1 vaga na garagem</p>
                            </div>
                            <div class="container-bar__button" style="margin-right: 62px;">
                                <a href="">SAIBA MAIS</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <header id="header" class="header-inc">
            <nav id="menuSuperior" class="navbar navbar-expand-lg menuSuperior-inc">
                <div class="container-fluid px-5 position-relative">
                    <a class="navbar-brand navbar-brand-inc" href="<?php echo $home; ?>">
                        <img id="logoPrincipal" src="./src/img/incorporadora-horizontal.png" alt="Logo Maximo Aldana">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                        <div class="offcanvas-header">
                            <a class="offcanvas-img" href="<?php echo $home; ?>">
                                <img src="./src/img/incorporadora-horizontal" alt="Logo Maximo Aldana">
                            </a>
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body">
                            <ul class="navbar-nav flex-grow-1">
                                <li class="nav-item top-menu">
                                    <a class="nav-link nav-link-inc top-menu__link d-flex align-items-center" href="<?php echo $home; ?>/a-construtora">A CONSTRUTORA</a>
                                </li>
                                <li class="nav-item top-menu">
                                    <a class="nav-link nav-link-inc top-menu__link d-flex align-items-center" href="<?php echo $home; ?>/a-maximo-aldana">A MAXIMO ALDANA</a>
                                </li>
                                <li class="nav-item me-4 top-menu">
                                    <a class="nav-link nav-link-inc top-menu__link d-flex align-items-center" href="<?php echo $home; ?>/blog">BLOG</a>
                                </li>
                                <li class="nav-item me-4 top-menu">
                                    <a class="nav-link nav-link-inc top-menu__link-border d-flex align-items-center" href="<?php echo $home; ?>/portal-do-cliente">PORTAL DO CLIENTE</a>
                                </li>
                                <li class="nav-item me-4 top-menu">
                                    <a class="nav-link nav-link-inc top-menu__link-border d-flex align-items-center" href="<?php echo $home; ?>/area-corretor">ÁREA CORRETOR</a>
                                </li>
                            </ul>
                            <ul class="navbar-nav navbar-nav-mobile flex-grow-1">
                                <li class="nav-item top-menu align-self-center">
                                    <a class="nav-link top-menu__brands-border d-flex align-items-center" href=""><i style="font-size: 14px;" class="fa-brands fa-instagram"></i></a>
                                </li>
                                <li class="nav-item top-menu align-self-center">
                                    <a class="nav-link top-menu__brands-border d-flex align-items-center" href=""><i style="font-size: 12px;" class="fa-brands fa-facebook-f"></i></a>
                                </li>
                                <li class="nav-item top-menu align-self-center">
                                    <a class="nav-link top-menu__brands-border d-flex align-items-center" href=""><i style="font-size: 13px;" class="fa-brands fa-linkedin-in"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>

            <nav id="menuPrincipal" class="navbar navbar-expand-lg menuPrincipal-inc">
                <div class="container-fluid px-5">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                        <ul class="navbar-nav navbar-nav-bottom mb-2 mb-lg-0">
                            <li class="nav-item logo-menu">
                                <a class="nav-link logo-menu__button-inc" aria-current="page" href="<?php echo $home; ?>/encontre-seu-imovel">ENCONTRE SEU IMÓVEL</a>
                            </li>
                            <li class="nav-item logo-menu">
                                <a class="nav-link logo-menu__button-inc" href="<?php echo $home; ?>/fale-conosco">FALE CONOSCO</a>
                            </li>
                            <li class="nav-item top-menu align-self-center">
                                <a class="nav-link top-menu__brands-border-two d-flex align-items-center" href=""><i style="font-size: 11px;" class="fa-solid fa-magnifying-glass"></i></a>
                            </li>
                            <li class="nav-item top-menu align-self-center">
                                <a class="nav-link top-menu__brands-border-two d-flex align-items-center" href="" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"><i style="font-size: 11px;" class="fa-solid fa-bars"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <div class="offcanvas offcanvas-end menulateral" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
                <div class="offcanvas-header">
                    <h5 id="offcanvasRightLabel" style="color: #fff;">Menu</h5>
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close" style="color: #fff;"></button>
                </div>
                <div class="offcanvas-body" style="align-self:flex-start">
                    <ul class="ps-0">
                        <li style="margin-bottom: 1rem;"><a href="" class="link-name-offcanvas">HOME</a></li>
                        <li style="margin-bottom: 1rem;"><a href="" class="link-name-offcanvas">SOBRE A MAXIMO</a></li>
                        <li style="margin-bottom: 1rem;"><a href="" class="link-name-offcanvas">ENCONTRE SEU IMOVEL</a></li>
                        <li style="margin-bottom: 1rem;"><a href="" class="link-name-offcanvas">A INCORPORADORA</a></li>
                        <li style="margin-bottom: 1rem;"><a href="" class="link-name-offcanvas">A CONSTRUTORA</a></li>
                        <li style="margin-bottom: 1rem;"><a href="" class="link-name-offcanvas">NOSSOS CLIENTES</a></li>
                        <li style="margin-bottom: 1rem;"><a href="" class="link-name-offcanvas">BLOG</a></li>
                        <li style="margin-bottom: 1rem;"><a href="" class="link-name-offcanvas">FALE CONOSCO</a></li>
                    </ul>
                </div>
            </div>
        </header>