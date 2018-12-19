<?php
/**
 * 
 * Template Name: General template
 * 
 */
?>

<?php get_header(); ?>
    <div class="content-area">
        <div class="container">
            <main>
                <section class="slider">Slider</section>
                <section class="services">services</section>
                    <section class="middle-area">
                            <aside class="sidebar">Sidebar </aside>
                                <?php if ( has_post_thumbnail() ) 
                                {
                                    $featured_image = get_the_post_thumbnail();
                                }?>
                                                            <?php echo $featured_image ?>

                                <p><?php echo get_post_field('post_content', $post->ID); ?></p>
                <section class="map">Map</section>
            </main>
        </div>
    </div>
 <?php get_footer(); ?>