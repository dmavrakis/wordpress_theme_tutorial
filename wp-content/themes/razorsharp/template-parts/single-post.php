<div class="text-center">
    <div style="text-align: center;">
        <?php the_post_thumbnail('post-thumbnail', [
            'style' => 'width:50%;height:100%;'
        ]); ?>
    </div>
    <div class="card-body">
        <h5 class="card-title"><?php the_title(); ?></h5>
        <p class="card-text"><?= substr(get_the_excerpt(), 0, 50); ?>..</p>
        <a href="<?php the_permalink(); ?>" class="btn btn-primary">Read more</a>
    </div>
</div>