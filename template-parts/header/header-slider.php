<div class='container mt-7' id='slider-header'>
    <div class='row'>
        <!-- Conteneur du slider -->
        <div class='col slider-wrapper my-auto '>
            <nav class='slider-nav '>
                <span class='slider-prev mt-5'></span>
                <span class='slider-next mt-5'></span>
                <span class='clear'></span>
            </nav>
            <?php $loop = new WP_Query(array('post_type' => 'slider'));
            if (have_posts()) :
                while ($loop->have_posts()) : $loop->the_post(); ?>
                    <div class='slider-items text-white text-center'>
                        <h1 class=' text-shadow'><?php the_title(); ?></h1>
                        <div class='slider-content mx-auto text-shadow'><?php the_content(); ?></div>
                    </div>
            <?php endwhile;
            endif;
            wp_reset_postdata(); ?>
        </div>

    </div>
</div>