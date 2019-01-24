<?php get_header(); ?>

<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>

    <div class="container">
    <div class="single-p-container">
        <div>
            <h3 class="single-p-title"><?php the_title(); ?></h3>
        </div>

        <div class="single-p-image">
            <?php if ( has_post_thumbnail() ) : ?>
            <img class="single-image-size" src="<?php the_post_thumbnail_url('single_size'); ?>"/>
            <?php endif; ?>
        </div>
        <div class="single-p-desc">
            <div class="single-p-price"><i class="fas fa-bookmark"></i> <?php the_field('price_p'); ?></div>

            <hr class="grey-line-1">

            <div class="single-p-city">Ville : <?php the_field('city_p'); ?></div>

            <div class="single-p-size">Superficie : <?php the_field('size'); ?></div>
            <div class="single-p-rooms"><?php the_field('rooms'); ?></div>
            <div class="single-p-bathroom"><?php the_field('bathroom'); ?></div>
            <div class="single-p-info">Infos : <?php the_field('info_p'); ?></div>

            <hr class="grey-line-1">

            <div class="single-p-description"><?php the_content(); ?></div>
        </div>
    </div>

    <hr class="grey-line-2">

    <div class="single-p-properties">


        <?php

        $args = array(
            'post_type' => 'proprietes',
            'posts_per_page' => 3,
            'order' => 'ASC',
        );

        ?>


        <?php $the_query  = new WP_Query($args);?>

        <?php if ( $the_query->have_posts() ) : ?>

        <div>
            <h2 class="title-properties"><span style="font-weight: lighter">Nos </span>propriétés</h2>
        </div>

        <div class="container-properties">
            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

                <div class="card-propertie">
                    <div class="card-img">
                        <a href="<?php the_permalink() ;?>">
                            <img class="main-picture" src="<?php the_post_thumbnail_url('card_size'); ?>" style="width:100%">
                        </a>
                    </div>
                    <div class="main-card-info">
                        <h3><?php the_title(); ?></h3>

                        <?php $id = get_the_ID(); ?>

                        <?php
                            $terms = get_the_terms( $id, 'ville');
                            if( $terms ): ?>
                        
                                <?php foreach( $terms as $term ): ?>
                                    <p class="card-city"><?php echo $name = $term->name; ?></p>
                                <?php endforeach; ?>
                            
                        <?php endif; ?>

                    </div>
                </div>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>

        <?php wp_reset_postdata() ?>


    </div>
    </div>

    <?php endwhile;?>
<?php endif;?>


<?php get_footer(); ?>