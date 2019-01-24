<?php get_header(); ?>

<?php if (have_posts()) : ?>

<div>
    <h2 class="title-properties"><span style="font-weight: 300">Nos </span>actualités</h2>
</div>

<div class="home-container">

    <div class="news-container">
        
        <?php while (have_posts()) : the_post(); ?>

                <div class="news-card">
                    <h2><?php the_title(); ?></h2>
                    <a href="<?php the_permalink() ;?>">
                        <img class="news-picture" src="<?php the_post_thumbnail_url('single_size'); ?>">
                    </a>
                    <p><?php echo the_excerpt(); ?></p> 
                    <a class="lire-suite" href="<?php the_permalink() ;?>">Lire la suite</a>
                </div>

                <hr class="grey-line-news">
            
        <?php endwhile;?>

    </div>

    <div class="sidebar-container">

    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('sidebar') ) : ?>
    <?php endif; ?>

    </div>

</div>
<?php endif;?>

<?php get_footer(); ?>