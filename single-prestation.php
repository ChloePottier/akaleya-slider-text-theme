<?php /**
 * The single prestation template file.
 *
 * @package akaleya-slider-text-theme 
 */
get_header(); ?>
</div>
</header>
<div id='primary' class='content-area container-fluid bg-white position-relative'>
    <article id='main' class='site-main single-prestation container py-5' role='main'>
    <?php if ( function_exists('yoast_breadcrumb') ) {
        yoast_breadcrumb( '<nav id="breadcrumbs" itemprop="breadcrumb" class="pb-3">','</nav>' );
        }
        if (have_posts()) :
            while (have_posts()) : the_post();?>
                <section class='row' id='prestation-<?php echo $post->ID; ?>'>
                    <div class='col-12 pb-3'>
                        <h1><?php the_title(); ?></h1>
                    </div>
                    <div class='col-12'>
                        <?php the_content(); ?> 
                    </div>
                </section>
                <section  class='row mt-5'>
                <?php $query = new WP_Query( array('post_type' => 'prestation', 'post_status' => 'publish', 'post_parent' => $post->ID, 'orderby'=> 'menu_order', 'order'=>'ASC') );
                if($query->have_posts()):
                    while ($query->have_posts()) : $query->the_post();?>
                   <a href='<?php the_permalink();?>' class='col-12 col-md-6 col-lg-4 pb-5 d-block'>
                   <div class='prestations-items'> 
                    <?php the_post_thumbnail('', ['class' => 'responsive']);?>
                    <h4 class='mt-3 pb-3'><?php the_title();?></h4>
                    <?php if(has_excerpt()):
                       echo '<p>' . the_excerpt() . '</p>';
                    endif;
                    echo '</div></a>';                    
                     endwhile;
                endif; ?>
                </section>
    <?php endwhile;
        endif; 
        wp_reset_postdata();?>
    </article>
</div>
<?php get_footer(); ?>




