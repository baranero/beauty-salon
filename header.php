<!DOCTYPE html>
<html>
  <head>
    <?php wp_head(); ?>
  </head>
<body>
    <header class="site-header">
        <a class="site-header__image-container" href=""><img class="site-header__image" src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="Logo"></a>
        <nav class="site-header__navbar">
          <ul class="">
              <li><a href="/">Strona Główna</a></li>
              <li><a href="">Usługi</a></li>
              <li><a href="">Blog</a></li>
              <li><a href="">Opinie</a></li>
              <li><a href="">Kontakt</a></li>
          </ul>
        </nav>
    </header>