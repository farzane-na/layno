<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="bg-white shadow">
  <div class="container mx-auto px-4 py-4 flex items-center justify-between">
    <div class="text-xl font-bold">
      <a href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
    </div>
    <nav>
      <?php
      wp_nav_menu(array(
        'theme_location' => 'primary',
        'container' => false,
        'menu_class' => 'flex space-x-4',
        'fallback_cb' => false,
      ));
      ?>
    </nav>
  </div>
</header>
