<?php     /* Template Name: Gabarit contact */ ?>


<?php get_header(); ?>

<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>

    <div class="contact-container">

        <div class="contact-title-intro">
            <h2 class="title-contact">Contact</h2>
        </div>

        <p><?php the_content(); ?></p>

        <div class="info-message-container">

            <div class="contact-info">
            
                <h2 class="title-contact-info">Infos</h2>

                <div class="info-contact">
                    <div class="c-info"><?php the_field('texte_info'); ?></div>
                    <div class="c-info"><?php the_field('adresse_info'); ?></div>
                    <div class="c-info"><?php the_field('tel_info'); ?></div>
                    <div class="c-info"><?php the_field('fax_info'); ?></div>
                    <div class="c-info"><?php the_field('email_info'); ?></div>
                </div>

            </div>

            <div class="contact-message">
                <h2 class="title-contact-message">Envoyez-nous un message !</h2>
                <?php echo do_shortcode( '[contact-form-7 id="22" title="Contact"]' ); ?>
            </div>

        </div>
        
    </div>

    <?php endwhile;?>
<?php endif;?>


<?php get_footer(); ?>
