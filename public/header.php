<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <div class="topbar">Fresh recipes, clear navigation, and a clean experience for every visitor.</div>

  <header>
    <div class="container nav">
      <a class="logo" href="<?php echo home_url(); ?>">Golden Plate Recipes</a>
      <nav class="menu">
        <a href="<?php echo home_url(); ?>">Home</a>
        <a href="<?php echo home_url('/recipes/'); ?>">Recipes</a>
        <a href="<?php echo home_url('/about/'); ?>">About</a>
        <a href="<?php echo home_url('/contact/'); ?>">Contact</a>
      </nav>
    </div>
  </header>