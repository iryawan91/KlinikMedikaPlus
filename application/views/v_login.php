
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Aplikasi Klinik Medika Plus">
    <meta name="generator" content="Dede Iryawan">
    <title>Login Aplikasi Klinik Medika Plus</title>
 
    <!-- Bootstrap core CSS -->
    <!-- <link href="<?= base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">


    <!-- Favicons -->
    <link rel="icon" href="<?= base_url('assets/img/favicon.ico'); ?>">
 

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      body {
        height: 100%;
        }

        body {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-align: center;
        align-items: center;
        padding-top: 40px;
        padding-bottom: 40px;
        background-color: #f5f5f5;
        }

        .form-signin {
        width: 100%;
        max-width: 330px;
        padding: 15px;
        margin: auto;
        }
        .form-signin .checkbox {
        font-weight: 400;
        }
        .form-signin .form-control {
        position: relative;
        box-sizing: border-box;
        height: auto;
        padding: 10px;
        font-size: 16px;
        }
        .form-signin .form-control:focus {
        z-index: 2;
        }
        .form-signin input[type="email"] {
        margin-bottom: -1px;
        border-bottom-right-radius: 0;
        border-bottom-left-radius: 0;
        }
        .form-signin input[type="password"] {
        margin-bottom: 10px;
        border-top-left-radius: 0;
        border-top-right-radius: 0;
        }
    </style>

    
    <!-- Custom styles for this template -->
    
  </head>
  <body class="text-center">
    
    <form class="form-signin" method="post" action="<?= base_url('auth/login_aksi'); ?>">
    <img class="mb-4" src="<?= base_url('assets/img/logo-medika-plus-removebg-preview.png'); ?>" alt="" width="100" height="100">
    <h1 class="h3 mb-3 font-weight-normal">Silahkan Login</h1>
    <div class="alert alert-danger">
        <?= validation_errors(); ?>
    </div>
    <label class="sr-only">Username</label>
    <input type="text" name="username"  class="form-control" placeholder="Masukan Username"  autofocus>
    <label class="sr-only">Password</label>
    <input type="password"   class="form-control" placeholder="Masukan Password" name="password" > 
    <button class="btn btn-lg btn-primary btn-block" type="submit">Log in</button>
    <p class="mt-5 mb-3 text-muted">&copy; 2023 - Dede Iryawan</p>
    </form>


    
  </body>
</html>
