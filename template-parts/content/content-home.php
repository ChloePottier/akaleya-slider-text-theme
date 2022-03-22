<?php if (have_posts()) :
            while (have_posts()) : the_post(); ?>
                <section class='row'>
                    <div class='col-12'>
                        <h1><?php the_title(); ?></h1>
                        <?php the_content(); ?> 
                    </div>
                </section>
<?php endwhile;
    endif;
    wp_reset_postdata();