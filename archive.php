<?php
/** The Archive template file.
 * @package akaleya-slider-text-theme */
get_header(); ?>
</div>
</header>
<div id='archive' class='content-area container-fluid pb-5 bg-white position-relative'>
    <section id='main' class='site-main container position-relative py-5' role='main'>
        <div class='row'>
            <h1 class='pb-3'><?php  post_type_archive_title(); ?></h1>
            <?php if (have_posts()) :
                while (have_posts()) : the_post(); ?>
                    <div class='col-12 mt-5'>
                        <h2><?php the_title(); ?></h2>
                        <?php the_content(); ?>
                    </div>
            <?php endwhile;
            else :
                echo '<p>Désolé, il n\'y a pas d\'articles pour le moment. </p>
                <div class="fs-5 pt-5"><a href="'. get_home_url().'"><i class="fas fa-arrow-left"></i> Retour en page d\'accueil</a></div>';
            endif; 
            wp_reset_postdata();?>
        </div>
    </section>
</div>
<?php get_footer();