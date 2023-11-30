<?php
//ANTIKA8ISTOUME TO PAGINATION TOU WP ME TOU BOOTSTRAP ANTIKA8ISTONTAS THN HTML ME COMPONENTS KAI CLASSES APO BOOTSTRAP
$pag = get_the_posts_pagination();
$pag = str_replace('div', 'ul', $pag);
$pag = str_replace('nav-links', 'pagination', $pag);
$pag = str_replace('page-numbers', 'page-link', $pag);
$pag = str_replace('<a', '<li class="page-item"><a', $pag);
$pag = str_replace('<span', '<li class="page-item active"><span', $pag);
$pag = str_replace('</a>', '</a></li>', $pag);
$pag = str_replace('</span>', '</span></li>', $pag);
?>

<br>
<div style="display: flex;">
    <div class="mx-auto">
        <?= $pag; ?>
    </div>
</div>
<br>