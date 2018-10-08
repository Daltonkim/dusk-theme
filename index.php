
<?php get_header(); ?>


     <div class="content-area">
     <div class="container">
         <main>
         <section class="slider">Slider</section>
         <section class="services">services</section>
         <section class="middle-area">
<div class="container">
<aside class="sidebar">Sidebar </aside>
<div class="row">

<div class="align">
<div class="news  column">
                  <?php
                    if (have_posts()) :
                        while (have_posts()) : the_post();

                    ?>
                  <!-- here format of the posts-->
                  <article class="col-md-4">
                      <?php  ?>
                      <h2><?php the_title(); ?></h2>
                      <p>Posted in <?php echo get_the_date(); ?> by <?php the_author_posts_link(); ?> </p>
                      <p>Categories <?php the_category(' '); ?></p>
                      <p><?php the_tags('Tags:', ', '); ?></p>
                      <p><?php the_content(); ?></p>
                      <p>
                         Next Post <?php the_post_navigation(); ?>
                      </p>
                  </article>

                  <?php
                    endwhile;
                    else :
                    ?>
                  <p>They are no posts yet</p>
                  <?php 

                    endif;

                    ?>
                  </div>                  
</div>
</div>
 </div>

</section>
    
<div class="container">

<div class="row">

<section class="map">Map</section>
 </div>
</div>
</main>
     </div>
</div>
 <?php get_footer(); ?>