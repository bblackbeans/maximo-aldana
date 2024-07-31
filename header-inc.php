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
                                    <a class="nav-link top-menu__brands-border d-flex align-items-center" href=""><i class="fa-brands fa-instagram"></i></a>
                                </li>
                                <li class="nav-item top-menu align-self-center">
                                    <a class="nav-link top-menu__brands-border d-flex align-items-center" href=""><i class="fa-brands fa-facebook"></i></a>
                                </li>
                                <li class="nav-item top-menu align-self-center">
                                    <a class="nav-link top-menu__brands-border d-flex align-items-center" href=""><i class="fa-brands fa-linkedin-in"></i></a>
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
                        </ul>
                    </div>
                </div>
            </nav>
        </header>