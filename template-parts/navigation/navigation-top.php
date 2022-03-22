<div class='row'>
    <div class='col-10 col-lg-5 d-flex flex-row py-2'>
        <?php if (function_exists('the_custom_logo')) {
            the_custom_logo();
        }
        do_action('site_info'); ?>
    </div>
    <div class='col-2 d-flex d-lg-none justify-content-end'>
        <label class='burger text-center d-flex d-lg-none flex-column rounded-circle' id='burger'>MENU
            <span class='bg-grey-dark isclosed mx-auto' id='burger1'>&nbsp;</span>
            <span class='bg-grey-dark isclosed mx-auto' id='burger2'>&nbsp;</span>
            <span class='bg-grey-dark isclosed mx-auto' id='burger3'>&nbsp;</span>
        </label>
        <div class='menu-burger display-none bg-prune-dark-op70 px-auto' id='navigation'>
            <?php get_template_part('template-parts/navigation/navigation', 'items'); ?>
        </div>
    </div>
    <div class='col d-none d-lg-flex justify-content-end' id='navigation-lg'>
        <?php get_template_part('template-parts/navigation/navigation', 'items'); ?>
    </div>
</div>