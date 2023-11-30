<?php

get_header();

get_template_part('template-parts/nav');

?>
<div class="m-4">
    <?php the_post_thumbnail('post-preview'); ?>
    <div class="card-body">
        <h4 class="card-title"><?php the_title(); ?></h4>

        <p class="text-muted">
            <?php
            $cat = get_the_category();
            if (is_array($cat)) {
                foreach ($cat as $cat_obj) {
                    echo '<a href="' . $cat_obj->taxonomy . '/' . $cat_obj->slug . '">' . $cat_obj->name . '</a>';
                }
            }
            ?>
        </p>
        <p class="text-muted">
            <?php the_time("M jS, Y"); ?>
            | by
            <?php the_author(); ?>
        </p>

        <p class="card-text"><?= get_the_content(); ?></p>
    </div>
</div>

<?php get_footer(); ?>