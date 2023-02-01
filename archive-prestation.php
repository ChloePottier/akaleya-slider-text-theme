<?php
/** The Archive prestation template file.
 * @package akaleya-slider-text-theme */
get_header(); ?>
</div>
</header>
<div id='archive-prestations' class='content-area container-fluid pb-5 bg-white position-relative'>
    <section id='main' class='site-main container position-relative py-5' role='main'>
        <div class='row'>
            <h1 class='pb-3'>Prestations</h1>
            <?php if (have_posts()) :
                while (have_posts()) : the_post(); ?>
                    <div class='col-12 col-md-6 col-lg-4 mt-5'>
                        <div class='img-prestations' >
                            <a href='<?php echo esc_url(get_permalink( ))?>' target='_blank' rel='bookmark'>
                                <?php the_post_thumbnail('prestations'); ?>
                            </a>
                            <div class='prestations-body'>
                                <h4 class='prestations-title mt-3'><?php the_title(); ?></h4>
                                <?php the_excerpt(); ?>
                            </div>
                            
                        </div>
                    </div>
            <?php endwhile;
            else :
                echo '<p>Désolé, il n\'y a pas de prestation disponible pour le moment. </p>
                <div class="fs-5 pt-5"><a href="'. get_home_url().'"><i class="fas fa-arrow-left"></i> Retour en page d\'accueil</a></div>';
            endif; 
            wp_reset_postdata();?>
        </div>
    </section>
</div>
<?php get_footer();