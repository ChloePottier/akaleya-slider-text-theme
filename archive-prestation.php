<?php
/** The Archive prestation template file.
 * @package akaleya-slider-text-theme */
get_header(); ?>
</div>
</header>
<div id='archive-prestations' class='content-area container-fluid pb-5 bg-white position-relative'>
    <secttion id='main' class='site-main container position-relative' role='main'>
        <div class='row mb-5'>
            <h1 class='py-5'>Prestations</h1>
            <?php get_template_part('template-parts/content/content', 'prestations'); ?>
        </div>
    </section>
</div>
<?php get_footer();