<?php get_header(); ?>

<?php if (have_posts()) : ?>

<div class="home-container">
    
    <div class="news-container-single">
            <?php while (have_posts()) : the_post(); ?>

            <div class="news-card">

                <h2><?php the_title(); ?></h2>
                <p><?php the_content(); ?></p>
                
                <hr class="grey-line-news">

                <p><?php the_time('l d F Y'); ?> - <?php echo get_the_time(); ?> / <?php echo the_author_meta('nickname'); ?></p>
                
                <hr class="grey-line-news">

                <?php comments_template(); ?>

            </div>


            <?php endwhile;?>

        </div>
        <div class="sidebar-container">
    
        <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('sidebar') ) : ?>
        <?php endif; ?>
    
        </div>
    </div>
    

<?php endif;?>


<?php get_footer(); ?>