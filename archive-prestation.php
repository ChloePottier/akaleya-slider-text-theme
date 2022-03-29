<?php
/** The Archive prestation template file.
 * @package akaleya-slider-text-theme */
get_header(); ?>
</div>
</header>
<div id='archive-prestations' class='content-area container-fluid pb-5 bg-white position-relative'>
    <main id='main' class='site-main container position-relative' role='main'>
    <div class='row mb-5'>
    <h1 class='py-5'>Prestations</h1>
            <?php if (have_posts()) :
                while (have_posts()) : the_post(); ?>
                    <div class='col-12 col-md-6 col-lg-4 mt-5'>
                        <div class='card img-prestations' >
                        <?php the_post_thumbnail('prestations'); ?>
                            <div class='card-body'>
                                <h4 class='card-title'><?php the_title(); ?></h4>
                                <?php the_excerpt(); ?>
                                <a href='<?php echo esc_url(get_permalink( ))?>'target='_blank' rel='bookmark'>Lire la suite...</a>
                            </div>
                        </div>
                    </div>
            <?php endwhile;
            else :
                echo '<p>Désolé, il n\'y a pas de prestation disponible pour le moment. </p>
                <div class="fs-5 pt-5"><a href="'. get_home_url().'" class=""><i class="fas fa-arrow-left"></i> Retour en page d\'accueil</a></div>';
            endif; 
            wp_reset_postdata();?>
    </div>
    </main>
</div>
<?php get_footer();