    <?php wp_footer() ?>

        <footer class="footer">

            <div class="footer-container">

                <div class="logo-social-container">

                    <a href="<?php echo bloginfo('url'); ?>">
                        <img class="logo-footer" src="<?php echo bloginfo('template_url'); ?>/images/logo-2.png" alt="logo">
                    </a>
                    <div class="social-network-footer">
                        <a href="https://www.facebook.com/" target="_blank">
                            <img src="<?php echo bloginfo('template_url'); ?>/images/facebook.png" alt="logo">
                        </a>
                        <a href="https://www.instagram.com/" target="_blank">
                            <img src="<?php echo bloginfo('template_url'); ?>/images/instagramm.png" alt="logo">
                        </a>
                        <a href="https://www.google.com/" target="_blank">
                            <img src="<?php echo bloginfo('template_url'); ?>/images/google.png" alt="logo">
                        </a>
                        <a href="https://www.pinterest.com/" target="_blank">
                            <img src="<?php echo bloginfo('template_url'); ?>/images/pinterest.png" alt="logo">
                        </a>
                    </div>

                </div>

                <div class="menu-footer">
                    <h2 class="title-footer">Menu</h2>

                    <nav class="navigation-footer"><?php wp_nav_menu(array( 'theme_location' => 'menu-principal')); ?></nav>
                </div>

                <div class="info-contact-footer">
                    <h2 class="title-footer">Contact</h2>

                    <div class="c-info-f-adress"><?php the_field('adresse_info', 'option'); ?></div>
                    <div class="c-info-f"><?php the_field('tel_info', 'option'); ?></div>
                    <div class="c-info-f"><?php the_field('fax_info', 'option'); ?></div>

                    <div class="c-info-f-mail">
                        <a href="mailto:<?php the_field('email_info', 'option'); ?>"><?php the_field('email_info', 'option'); ?></a>
                    </div>

                </div>

            </div>

        </footer>
    </body>
</html>