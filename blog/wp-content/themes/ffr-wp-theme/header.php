<!DOCTYPE html>
<html lang="ja">
<head>
  <?php wp_head(); ?>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
    <!-- popper.js -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
    integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
    crossorigin="anonymous"></script>
    <!-- bootstrap.js -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
    integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
    crossorigin="anonymous"></script>
    <!--独自スタイルシート-->
  <link rel="stylesheet" href="<?php bloginfo('template_url')?>/style.css">
  <!--アイコン系-->
  <link rel="icon" href="<?php bloginfo('template_url')?>/image/ffr-favicon.ico">
  <link rel="apple-touch-icon" href="<?php bloginfo('template_url')?>/image/ffr-apple-touch-icon.png">
</head>
<body class="mt-5 p-3 p-md-5">
  <?php wp_body_open(); ?>
  <header>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark fixed-top p-0 pe-3">
      <a class="navbar-brand bg-light" href="<?php bloginfo('url')?>/../index.html"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end vw-25" id="navbarSupportedContent">
        <ul class="navbar-nav float-end">
          <li class="nav-item">
            <a class="nav-link" href="<?php bloginfo('url')?>/../index.html">Home</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              Member
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="https://mito2tomiharu.github.io">TomiHaru</a>
              <a class="dropdown-item" href="#">Oさん</a>
              <a class="dropdown-item" href="#">HATA</a>
              <a class="dropdown-item" href="#">ToYama</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php bloginfo('url')?>/../material.html">Material</a>
          </li>
          <li>
            <a class="nav-link" href="<?php bloginfo('url')?>/">Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php bloginfo('url')?>/../about.html">About</a>
          </li>

        </ul>
      </div>
    </nav>
  </header>