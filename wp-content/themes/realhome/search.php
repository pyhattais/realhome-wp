<?php get_header(); ?>

<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
        <article>
        <div class="card">
            <a href="<?php the_permalink() ;?>">
                <img class="main-picture" src="<?php the_post_thumbnail_url('card_size'); ?>"alt="Avatar" style="width:100%">
            </a>
            <p><?php the_time('d/m/Y'); ?> - <?php echo get_the_time(); ?></p>
            <p>
                <a class="cat-link" href="<?php bloginfo('url');?>/category/<?= $category[0]->slug;?>">
                <?php  echo $category[0]->slug;?>
                </a>
            </p>
            <p><?php the_tags( '', ', ', '<br />' ) ?></p>


            <div class="container">
                <h1><?php the_title(); ?></h1>
                <p><?php echo the_excerpt(); ?></p> 
                <a href="<?php the_permalink() ;?>">Lire plus ...</a>
            </div>
        </div>
        </article>
    <?php endwhile;?>

<?php endif;?>

<?php get_footer(); ?>
