<?php if (have_posts()) :
        while (have_posts()) : the_post(); ?>
            <div class='col-12 col-md-6 col-lg-4 mt-5'>
                <div class='img-prestations' >
                    <a href='<?php echo esc_url(get_permalink( ))?>' target='_blank' rel='bookmark'>
                        <?php the_post_thumbnail(); ?>
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
        <div class="fs-5 pt-5"><a href="'. get_home_url().'" class=""><i class="fas fa-arrow-left"></i> Retour en page d\'accueil</a></div>';
    endif; 
    wp_reset_postdata();