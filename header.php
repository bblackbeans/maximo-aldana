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
    <main class="video-background mb-5">
        <video autoplay muted loop id="bg-video">
            <source src="http://devmaximoaldana.c09b59be.configr.cloud/wp-content/uploads/2024/06/Aldana-One-Evolucao-de-Obras-Abril_2024.mp4" type="video/mp4">
            Seu navegador não suporta vídeos HTML5.
        </video>
        <header id="header">
            <nav id="menuSuperior" class="navbar navbar-expand-lg">
                <div class="container-fluid px-5">
                    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                        <div class="offcanvas-header">
                            <a class="offcanvas-img" href="<?php echo $home; ?>">
                                <img src="./src/img/construtora-horizontal.png" alt="Logo Maximo Aldana">
                            </a>
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body">
                            <ul class="navbar-nav flex-grow-1">
                                <li class="nav-item top-menu">
                                    <a class="nav-link top-menu__link d-flex align-items-center" href="<?php echo $home; ?>/a-incorporadora">A INCORPORADORA</a>
                                </li>
                                <li class="nav-item top-menu">
                                    <a class="nav-link top-menu__link d-flex align-items-center" href="<?php echo $home; ?>/a-maximo-aldana">A MAXIMO ALDANA</a>
                                </li>
                                <li class="nav-item me-4 top-menu">
                                    <a class="nav-link top-menu__link d-flex align-items-center" href="<?php echo $home; ?>/blog">BLOG</a>
                                </li>
                            </ul>
                            <ul class="navbar-nav navbar-nav-mobile flex-grow-1">
                                <li class="nav-item top-menu align-self-center">
                                    <a class="nav-link top-menu__brands d-flex align-items-center" href=""><i class="fa-brands fa-instagram"></i></a>
                                </li>
                                <li class="nav-item top-menu align-self-center">
                                    <a class="nav-link top-menu__brands d-flex align-items-center" href=""><i class="fa-brands fa-facebook"></i></a>
                                </li>
                                <li class="nav-item top-menu align-self-center">
                                    <a class="nav-link top-menu__brands d-flex align-items-center" href=""><i class="fa-brands fa-linkedin-in"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>

            <nav id="menuPrincipal" class="navbar navbar-expand-lg">
                <div class="container-fluid px-5">
                    <a class="navbar-brand" href="<?php echo $home; ?>">
                        <img id="logoPrincipal" src="http://devmaximoaldana.c09b59be.configr.cloud/wp-content/uploads/2024/08/construtora-horizontal-e1723570665733.png" alt="Logo Maximo Aldana">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                        <ul class="navbar-nav navbar-nav-bottom mb-2 mb-lg-0">
                            <li class="nav-item logo-menu">
                                <a class="nav-link logo-menu__button" aria-current="page" href="<?php echo $home; ?>/portfolio">PORTFÓLIO</a>
                            </li>
                            <li class="nav-item logo-menu">
                                <a class="nav-link logo-menu__button" href="<?php echo $home; ?>/certificacoes">CERTIFICAÇÕES</a>
                            </li>
                            <li class="nav-item logo-menu">
                                <a class="nav-link logo-menu__button" href="<?php echo $home; ?>/orce-sua-obra-conosco">ORCE SUA OBRA</a>
                            </li>
                            <li class="nav-item top-menu align-self-center">
                                <a class="nav-link top-menu__brands-border-two d-flex align-items-center" href=""><i class="fa-solid fa-magnifying-glass"></i></a>
                            </li>
                            <li class="nav-item top-menu align-self-center">
                                <a class="nav-link top-menu__brands-border-two d-flex align-items-center" href=""><i class="fa-solid fa-bars"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
    </main>