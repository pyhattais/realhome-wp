<?php     /* Template Name: Gabarit about */ ?>


<?php get_header(); ?>

<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>

    <div class="about-title-intro">
        <h2 class="title-about"><span style="font-weight: 300">À </span>propos</h2>
    </div>

    <div class="about-intro">
        <img class="about-picture" src="<?php the_post_thumbnail_url('single_size'); ?>">
        <div class="about-text"><?php the_content(); ?></div>
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

    <div class="about-team">

        <div class="about-title-team">
            <h2 class="title-team"><span style="font-weight: 300">Notre </span>équipe</h2>
        </div>

        <div class="bloc-team">

            <?php if( have_rows('team_card') ): ?>
                <?php while( have_rows('team_card') ): the_row();?>

                <div class="team-card">


                        <?php $image = get_sub_field('img_team') ;?>
                                <img src="<?php echo $image['url'];?>" alt="<?php echo $image['alt'] ;?>">

                        <h3 class="title-info"><?php the_sub_field('name_team'); ?></h3>
                        <div class="text-info"><?php the_sub_field('status_team'); ?></div>

                </div>

                    
            <?php endwhile; ?>
            <?php endif; ?>
                
        </div>
    </div>



    <?php endwhile;?>
<?php endif;?>

<?php get_footer(); ?>