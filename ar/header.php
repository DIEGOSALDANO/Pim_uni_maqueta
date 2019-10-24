<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Unilever Pim1</title>
    <link rel="stylesheet" href="assets/css/all.css">
    <link rel="stylesheet" href="assets/css/accordion.css">
    <link rel="stylesheet" href="assets/css/checktree.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/serch-box.css">
</head>
<body>
    <div id="content-page">
        <div id="content-wrap">
            <header class="nav-header">
                 <div class="wrapper-nav">
                    <div class="container-nav">

                        <!-----------Nav Items-->
                        <nav id="nav-categories" class="navbar navbar-expand-lg navbar-dark">
                            <a class="navbar-brand" href="./">
                                        <img src="./assets/img/logo.png" class="d-inline-block align-top" alt="">
                            </a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-desktop">
                                        <span class="navbar-toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse" id="navbar-desktop">
                                <a href="../datafiles/<?=@$app_country?>/catalogos/catalogo-unilever.pdf" class="ml-auto">
                                    <button type="button" class="btn btn-download">CATALOGO COMPLETO<span><i class="fa fa-download" size:2x;></i></span></button>
                                </a>
                                <ul class="navbar-nav">
                                    <li class="nav-item dropdown jqui-slide">
                                        <a class="nav-link dropdown-toggle" id="dropdown01" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"  data-target="#dropdown-menu01">+&nbsp;DESCARGAS&nbsp;</a>
                                        <div>
                                            <div id="#dropdown-menu01" class="dropdown-menu collapse" aria-labelledby="dropdown01" data-parent="#collapseExample">
                                                <a href="?action=catalogos" class="dropdown-item">CATALOGO POR CLUSTER</a>
                                                <a href="?action=catalogo-selectivo" class="dropdown-item">IMAGENES Y DATOS</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="nav-item dropdown jqui-slide">
                                            <a class="nav-link dropdown-toggle" id="dropdown01" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"  data-target="#dropdown-menu02">+&nbsp;SECCIONES&nbsp;</a>
                                            <div>
                                                <div id="#dropdown-menu02" class="dropdown-menu collapse" aria-labelledby="dropdown01" data-parent="#collapseExample">
                                                    <a href="?action=logos" class="dropdown-item">LOGOS</a>
                                                    <a href="?action=key-visual" class="dropdown-item">KEY VISUAL</a>
                                                    <a href="?action=avisos" class="dropdown-item">AVISOS</a>
                                                    <a href="?action=material" class="dropdown-item">MATERIAL AUDIOVISUAL</a>
                                                </div>
                                            </div>
                                    </li>
                                </ul>

                                <div id="nav-menu-header" class="d-flex align-items-center">
                                    <img class="icon-nav " src="./assets/img/profile-icon.svg" alt="">
                                    <h5 class="text-profile"><?=$_SESSION['u'] ?? 'Florencia Frigo';?></h5>
                                    <img class="icon-nav ml-auto" src="./assets/img/bandera_arg.png" alt="">
                                    <span></span>

                                    <img href="#"  class="searchBar icon-nav active" src="./assets/img/search.svg" alt="">
                                    <div class="search-box mt-4 " style="background-color: #444242;">
                                        <form action="?action=search" method="get">
                                            <input type="text" name="q" placeholder="buscar..." class="form-control">
                                            <div class="d-flex justify-content-center my-2 ">
                                                <button type="submit" class="btn btn-success mx-2  btn-sm">Buscar</button>
                                                <button class="btn btn-danger ml-2 btn-sm" id="cancel"> Cancel</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </nav>
                    </div>
                 </div>
            </header>



