<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Techno Style Shop</title>
    <link rel="stylesheet" href="https://bootswatch.com/5/lux/bootstrap.css">
    <link rel="stylesheet" href="<?php echo ROOT_URL ?>assets/css/style.css">
    <link rel="icon" type="image/png" sizes="32x32" href="image/LOGO.png">
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">

    <div class="container-fluid">
      <a class="navbar-brand" href="<?php echo ROOT_URL ?>public?page=homepage"><img src="image/LOGO.png" width="110px"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarColor03">

        <ul class="navbar-nav mr-auto">

          <li class="nav-item">
            <a class="nav-link" href="<?php echo ROOT_URL ?>public?page=about">Chi siamo</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Prodotti</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo ROOT_URL ?>public?page=contacts">Contatti</a>
          </li>
        </ul>

        <ul class="navbar-nav ml-auto">

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Area Riservata</a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <a class="dropdown-item" href="#">Something else here</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Separated link</a>
            </div>
          </li>

        </ul>



      </div>
    </div>
  </nav>

