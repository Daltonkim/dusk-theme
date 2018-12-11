
<?php get_header(); ?>
    <div class="content-area">
        <div class="container">
            <main>
                <section class="slider">Slider</section>
                <section class="services">services</section>
                    <section class="middle-area">
                            <aside class="sidebar">Sidebar </aside>
                                <div class="news">  
                                     <?php
                                         if (have_posts()) :
                                         while (have_posts()) : the_post();
                                     ?>
                                         <!-- here format of the posts-->
                                    <div class="posts-loop">     
                                        <article class="post-loop__article">
                                            <h2><?php the_title(); ?></h2>
                                            <p>Posted in <?php echo get_the_date(); ?> by <?php the_author_posts_link(); ?> </p>
                                            <p>Categories <?php the_category(' '); ?></p>
                                            <p><?php the_tags('Tags:', ', '); ?></p>
                                            <p><?php  the_excerpt(__('Read on')); ?>
                                            <a href="<?php the_permalink(); ?>" target=__blank class="btn btn-primary">Read more...</a>       
                                        </article>
                                    </div>    
                                    <?php endwhile; else :?>
                                            <p>They are no posts yet</>
                                    <?php 
                                    endif; ?>
                                </div>                  
                    </section>
                <section class="map">Map</section>
            </main>
        </div>
    </div>
 <?php get_footer(); ?>