<?php     /* Template Name: Gabarit proprietes */ ?>

<?php get_header(); ?>


<div>
    <h2 class="title-properties"><span style="font-weight: 300">Nos </span>propriétés</h2>
</div>

<div class="gabarit-ville">

    <li><a href="http://localhost:8888/www.realhome.com/proprietes/">Tous</a></li>

    <?php $villes = get_terms( 'ville', array(
        'hide empty'=> false
    )); ?>
    <?php foreach ($villes as $ville){?>
        <li><a href="<?php echo get_term_link($ville->slug, 'ville') ;?>"><?php echo  $ville->name ;?></a></li>

    <?php } ;?>
</div>

<?php

$args = array(
    'post_type' => 'proprietes',
    'posts_per_page' => 9,
    'order' => 'ASC',
);

?>


<?php $the_query  = new WP_Query($args);?>

<?php if ( $the_query->have_posts() ) : ?>
<div class="container-properties">
    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

        <div class="card-propertie">
            <div class="card-img">
                <a href="<?php the_permalink() ;?>">
                    <img class="main-picture" src="<?php the_post_thumbnail_url('card_size'); ?>"alt="Avatar" style="width:100%">
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

<?php get_footer(); ?>
