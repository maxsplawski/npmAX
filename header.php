<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <?php wp_head(); ?>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body <?php body_class(); ?>>
    <header class="header">
      <a href="<?php echo site_url() ?>" class="header__icon">
        LOGO
        <!-- <img src="" alt="Icon image"> -->
      </a>
      <nav class="nav">
      <ul class="nav__list">
        <li><a class="nav__listLink" href="<?php echo site_url('/about-me') ?>">About</a></li>
        <li><a class="nav__listLink" href="<?php echo site_url('/privacy-policy') ?>">Privacy</a></li>
        <li><a class="nav__listLink" href="">Career</a></li>
        <li><a class="nav__listLink" href="">Contact</a></li>
      </ul>
      </nav>
    </header>

