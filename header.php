<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge chrome=1">
  <title> <?php the_title() ?>  </title>
    <?php wp_head();  ?>
  </head>
<body <?php body_class(); ?> class="dusk_container">
  <header class="main-header">
    <section class="top-bar">
      <div class="container">
        <div class="row">
          <div class="social-media-icons col-xl-10 col-md-8 col-sm-8 col-6">Social Icons</div>
          <div class="search col-xl-2 col-md-4 col-sm-4 col-6 text-right">Search</div>
        </div>
      </div>
    </section>
    <section class="menu-area">
      <div class="container">
        <div class="row">
            <section class="logo col-md-2 col-sm-12 col-12 "><?php the_custom_logo();?></section>
              <nav class="main-menu col-md-10 text-right">
                <?php wp_nav_menu( array('theme_location'=>'my_main_menu', 'item_spacing'=>"preserve"));?>
              </nav>
        </div>
      </div>
    </section>
  </header>
