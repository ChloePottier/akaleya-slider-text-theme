<div class='container' id='slider-header'>
    <div class='row'>
        <!-- Conteneur du slider -->
        <div class='col slider-wrapper my-auto '>
            <nav class='slider-nav '>
                <span class='slider-prev mt-4'></span>
                <span class='slider-next mt-4'></span>
                <span class='clear'></span>
            </nav>
            <?php $loop = new WP_Query(array('post_type' => 'slider'));
            if (have_posts()) :
                while ($loop->have_posts()) : $loop->the_post(); ?>
                    <div class='slider-items text-white text-center text-shadow'>
                        <h2 class=''><?php the_title(); ?></h2>
                        <div class='slider-content mx-auto '><?php the_content(); ?></div>
                    </div>
            <?php endwhile;
            endif;
            wp_reset_postdata(); ?>
        </div>

    </div>
</div>