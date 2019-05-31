<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title></title>
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
  <div class="header-navigation-container container-fluid m-0 p-0">
    <nav class="navbar navbar-expand-sm bg-rix-flieder fixed-top clearfix">
      <a href="<?php echo esc_url(home_url('/')); ?>" class="navbar-brand logo">
        <img src="<?php echo get_template_directory_uri(); ?>/img/logo_rixdorf.gif" alt="Logo der Kirchengemeinde" class="logo-image float-left">
        <p class="navbar-brand-paragraph mb-0 text-rix-blau2">
          Evangelische<br>Kirchengemeinde<br>Rixdorf</p>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#evkgrixSupportedContent" aria-controls="evkgrixSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span><i class="fas fa-arrows-alt-v"></i></span>
      </button>
      <div id="evkgrixSupportedContent" class="collapse navbar-collapse">
        <ul class="navbar-nav ml-auto text-center">
          <li class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" id="kirchenDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expand="false">
              Kirchen
            </a> <!-- .nav-link .dropdown-toggle #kirchenDropdown -->
            <div class="dropdown-menu" aria-labelledby="kirchenDropdown">
              <a href="#" class="dropdown-item">Magdalenenkirche</a>
              <a href="#" class="dropdown-item">Tabeakirche</a>
              <a href="#" class="dropdown-item">Bethlehemskirche</a>
            </div> <!-- .dropdown-menu -->
          </li> <!-- .nav-item .dropdown -->
          <!-- ENDE KIRCHEN -->
          <li class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" id="gottesdiensteDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expand="false">
              Gottesdienste
            </a> <!-- .nav-link .dropdown-toggle #gottesdiensteDropdown -->
            <div class="dropdown-menu" aria-labelledby="gottesdiensteDropdown">
              <a href="#" class="dropdown-item">Gottesdienstplan</a>
              <a href="#" class="dropdown-item">Kita-Gottesdienste</a>
              <a href="#" class="dropdown-item">Andachten</a>
            </div> <!-- .dropdown-menu -->
          </li> <!-- .nav-item .dropdown -->
          <!-- ENDE GOTTESDIENSTE -->
          <li class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" id="kirchenmusikDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expand="false">
              Kirchenmusik
            </a> <!-- .nav-link .dropdown-toggle #kirchenmusikDropdown -->
            <div class="dropdown-menu" aria-labelledby="kirchenmusikDropdown">
              <a href="#" class="dropdown-item">Konzerte</a>
              <a href="#" class="dropdown-item">Chöre &amp; mehr</a>
              <a href="#" class="dropdown-item">Orgeln</a>
            </div>  <!-- .dropdown-menu -->
          </li> <!-- .nav-item .dropdown -->
          <!-- ENDE KIRCHENMUSIK -->
          <li class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" id="arbeitsbereicheDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expand="false">
              Arbeitsbereiche
            </a> <!-- .nav-link .dropdown-toggle #arbeitsbereicheDropdown -->
            <div class="dropdown-menu" aria-labelledby="arbeitsbereicheDropdown">
              <a href="#" class="dropdown-item">Glaube</a>
              <a href="#" class="dropdown-item">Kinder</a>
              <a href="#" class="dropdown-item">Jugend</a>
              <a href="#" class="dropdown-item">Taufe &amp; Konfirmation</a>
              <a href="#" class="dropdown-item">Familien</a>
              <a href="#" class="dropdown-item">Senioren</a>
              <a href="#" class="dropdown-item">Laib & Seele</a>
            </div> <!-- .dropdown-menu -->
          </li> <!-- .nav-item .dropdown -->
          <!-- ENDE ARBEITSBEREICHE -->
          <li class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" id="angeboteDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expand="false">
              Angebote
            </a> <!-- .nav-link .dropdown-toggle #angeboteDropdown -->
            <div class="dropdown-menu" aria-labelledby="angeboteDropdown">
              <a href="#" class="dropdown-item">Veranstaltungen</a>
              <a href="#" class="dropdown-item">Gruppen</a>
              <a href="#" class="dropdown-item">Andachten</a>
            </div> <!-- .dropdown-menu -->
          </li> <!-- .nav-item .dropdown -->
          <!-- ENDE ANGEBOTE -->
          <li class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" id="kitasDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expand="false">
              Kitas
            </a> <!-- .nav-link .dropdown-toggle #kitasDropdown -->
            <div class="dropdown-menu" aria-labelledby="kitasDropdown">
              <a href="#" class="dropdown-item">Magdalenen</a>
              <a href="#" class="dropdown-item">Tabea</a>
              <a href="#" class="dropdown-item">Debora</a>
            </div> <!-- .dropdown-menu -->
          </li> <!-- .nav-item .dropdown -->
          <!-- ENDE KITAS -->
          <li <?php if (is_page('kontakte')) echo 'class="current_page_item"' ?> class="nav-item">
            <a href="<?php echo esc_url(site_url('/kontakte')); ?>" class="nav-link">
              Kontakt
            </a>
          </li> <!-- .nav-item -->
        </ul> <!-- .navbar-nav .ml-auto -->
      </div> <!-- #evkgrixSupportedContent .collapse .navbar-collapse -->
    </nav> <!-- .navbar .navbar-expand-lg -->
  </div> <!-- container-fluid -->
