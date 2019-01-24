<?php get_header(); ?>

<?php if (have_posts()) : ?>


    <?php while (have_posts()) : the_post(); ?>

    <div class="home-image" style="background-image: url(<?php the_post_thumbnail_url('full'); ?>)">
        <div class="home-text"><?php the_content(); ?></div>
    </div>

    <div class="home-intro">
        <div class="wrapper-intro">
            <div class="title-intro">
                <h2><?php the_field('titre_intro'); ?></h2>
                <hr class="hr-intro">
            </div>

            <div class="text-intro"><?php the_field('texte_intro'); ?></div>
        </div>
    </div>

    <div class="company-info">

        <?php if( have_rows('bloc_info') ): ?>
            <?php while( have_rows('bloc_info') ): the_row(); ?>
            <div class="bloc-info">
                <i class="<?php the_sub_field('icon_info');?>"></i>
                <h3 class="title-info"><?php the_sub_field('titre_info'); ?></h3>
                <div class="text-info"><?php the_sub_field('texte_info'); ?></div>
            </div>
            <?php endwhile; ?>
        <?php endif; ?>

    </div>

    <div class="show-properties-front">

        <?php

        $args = array(
            'post_type' => 'proprietes',
            'posts_per_page' => 6,
            'order' => 'ASC',
        );

        ?>


        <?php $the_query  = new WP_Query($args);?>

        <?php if ( $the_query->have_posts() ) : ?>

        <div>
            <h2 class="title-properties"><span style="font-weight: 300">Nos </span>propriétés</h2>
        </div>

        <hr class="hr-properties">

        <div class="text-properties-front"><?php the_field('texte_proprietes'); ?></div>

        <div class="container-properties">
            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

                <div class="card-propertie">
                    <div class="card-img">
                        <a href="<?php the_permalink() ;?>">
                            <img class="main-picture" src="<?php the_post_thumbnail_url('card_size'); ?>" style="width:100%">
                        </a>
                    </div>
                    <div class="main-card-info">
                        <a class="title-propertie" href="<?php the_permalink() ;?>">
                            <h3><?php the_title(); ?></h3>
                        </a>

                        <?php $id = get_the_ID(); ?>

                        <?php
                            $terms = get_the_terms( $id, 'ville');
                            if( $terms ): ?>
                        
                                <?php foreach( $terms as $term ): ?>
                                    <p class="card-city"><?php echo $name = $term->name; ?></p>
                                <?php endforeach; ?>
                            
                        <?php endif; ?>

                        <div class="price-propertie"><?php the_field('price_p'); ?></div>

                    </div>

                    <div class="second-card-info">

                        <div class="size-propertie"><?php the_field('size'); ?></div>
                        <div class="rooms-propertie"><?php the_field('rooms'); ?></div>
                        <div class="bathroom-propertie"><?php the_field('bathroom'); ?></div>

                    </div>
                </div>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>
        
        <?php wp_reset_postdata() ?>
            
        <a class="button-show" href="http://localhost:8888/www.realhome.com/proprietes/">Voir toutes</a>

    </div>

    <div class="agents-front">

        <div class="agents-front-image">
            <img src="<?php echo bloginfo('template_url'); ?>/images/johndoe.png" alt="agents">
        </div>

        <div class="agents-front-detail">

            <div>
                <h2 class="title-agents"><span style="font-weight: 300">Nos </span>agents</h2>
            </div>

            <hr class="hr-agents">

            <div class="name-agent-front">
                <?php the_field('nom_agent'); ?>
            </div>

            <div class="text-agent-front">
                <?php the_field('texte_team'); ?>
            </div>

        </div>

    </div>

    <div class="partners-front">

        <div>
            <h2 class="title-properties"><span style="font-weight: 300">Our </span>partners</h2>
        </div>

        <div class="partners-links">
            <a href="https://www.google.com/search?q=partners&rlz=1C5CHFA_enAU767AU767&oq=partners&aqs=chrome..69i57j0l5.7407j1j1&sourceid=chrome&ie=UTF-8" target="_blank">
                <img src="<?php echo bloginfo('template_url'); ?>/images/partner-1.png" alt="partner">
            </a>
        </div>
        <div class="partners-links">
            <a href="https://www.google.com/search?q=partners&rlz=1C5CHFA_enAU767AU767&oq=partners&aqs=chrome..69i57j0l5.7407j1j1&sourceid=chrome&ie=UTF-8" target="_blank">
                <img src="<?php echo bloginfo('template_url'); ?>/images/partner-2.png" alt="partner">
            </a>
        </div>
        <div class="partners-links">
            <a href="https://www.google.com/search?q=partners&rlz=1C5CHFA_enAU767AU767&oq=partners&aqs=chrome..69i57j0l5.7407j1j1&sourceid=chrome&ie=UTF-8" target="_blank">
                <img src="<?php echo bloginfo('template_url'); ?>/images/partner-3.png" alt="partner">
            </a>
        </div>
        <div class="partners-links">
            <a href="https://www.google.com/search?q=partners&rlz=1C5CHFA_enAU767AU767&oq=partners&aqs=chrome..69i57j0l5.7407j1j1&sourceid=chrome&ie=UTF-8" target="_blank">
                <img src="<?php echo bloginfo('template_url'); ?>/images/partner-4.png" alt="partner">
            </a>
        </div>


    </div>


    

    <?php endwhile;?>
<?php endif;?>

<?php get_footer(); ?>
