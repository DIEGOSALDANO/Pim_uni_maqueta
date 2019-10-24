<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Unilever Pim1</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style_login.css">
</head>

<body>
    <div id="content-init">
        <div class="ui-fullimage">

            <header>
                <div class="wrapper-init">
                    <div class="container-nav d-flex align-items-center">
                        <a class="navbar-brand">
                            <img src="./assets/img/logo.png" class="d-inline-block align-top" alt="">
                        </a>
            </header>
            <main>
                <div class="page-container-init" id="login">
                    <form method="post" role="form" class="form-signin" >
                        <h5 class="signin-title">INICIO DE SESIÓN</h5>
                        <img src="./assets/img/bandera_arg.png" alt="">
                        <div class="ui-input">
                            <label for="inputEmail" class="sr-only">Email address</label>
                            <input type="text" id="inputEmail" class="form-control" name="u" placeholder="Usuario" autocomplete="username" required autofocus>
                            <label for="inputPassword" class="sr-only">Password</label>
                            <input type="password" id="inputPassword" class="form-control" name="p" placeholder="clave" autocomplete="current-password" required>
                        </div>
                        <button class="btn btn-lg btn-init  btn-block" type="submit">Ingresar</button>
                        <h4 class="mt-6 mb-1 text-center"><?= $login_error ?? '' ?></h4>

                    </form>
                    <div class="flex-column ml-auto mr-auto">
                         <h6 class=" mb-1 text-center">¿Necesitas ayuda?</h6>
                         <p class="mb-3 text-center">Escríbanos a <b>administrador@unilevercatalogo.com.ar</b></p>
                    </div>
                </div>
            </main>
            <footer>
                <div class="footer-ui">
                    <p>SENTIRSE BIEN, LUCIR BIEN Y APROVECHAR MÁS LA VIDA<br> © Unilever 2019 | Unilever Argentina | Unilever.com</p>
                </div>
            </footer>



            </div>
            </div>

            <script>
            </script>

            <!-----Scripts for Bootstrap----->
            <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>

</html>