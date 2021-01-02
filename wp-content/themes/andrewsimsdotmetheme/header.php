<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <?php wp_head(); ?>
  </head>
  <body>
    <header>
      <div class="flex-container header-wrapper">
        <div class="flex-item-1">
          <h1>
            <a href="<?php echo site_url(); ?>"><span class="headline-border-container">Andrew Sims</span></a>
          </h1>
        </div>
        <div class="flex-item-2">
          
            <span onclick="onMenuClick()" id="menu-button" class="menu-button">Menu <i class="fa fa-plus-circle" aria-hidden="true"></i></span>
        </div>
      </div>
      <nav id="nav-container">
        <ul>
          <li><a class="nav-link" href="<?php echo site_url('/'); ?>">Home</a></li>
          <li><a class="nav-link" href="<?php echo site_url('/projects'); ?>">Projects</a></li>
          <!--<li><a class="nav-link" href="<//?php echo site_url('/blog'); ?>">Blog</a></li>-->
          <li><a class="nav-link" href="<?php echo site_url('/contact'); ?>">Contact</a></li>
        <ul>
      </nav>
    </header>
    <main>
      <?php $isContactPage = is_page( 'Contact' ); ?>
      <div id="main-wrapper" class="<?php if($isContactPage) echo "main-wrapper-contact-page" ?>">