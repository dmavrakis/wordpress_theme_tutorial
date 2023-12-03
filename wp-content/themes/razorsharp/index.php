<?php

get_header();

get_template_part('template-parts/nav');

if (is_home()) {
    get_template_part('template-parts/slider');
}

?>

<div class="container-fluid">
    <div class="row">
        <div class="col p-4 card-group justify-content-center">
            <?php
            if (have_posts()) {
                while (have_posts()) {
                    the_post();
                    if (is_page()) {
                        get_template_part('template-parts/page');
                    } else {
                        get_template_part('template-parts/post');
                    }
                }
            }

            ?>
        </div>

        <div class="col-md-3 bg-light p-2">
            <?php dynamic_sidebar('sidebar-1'); ?>
        </div>
    </div>
</div>




<?php get_template_part('template-parts/pagination'); ?>


<?php get_footer(); ?>