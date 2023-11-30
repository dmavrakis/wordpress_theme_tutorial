<?php

get_header();

get_template_part('template-parts/nav');


?>
<div class="p-4 justify-content-center mx-auto" style="max-width: 600px;">
    <h1>Page not found</h1>
    <br>
    <h3>search for something else</h3>
    <br>
    <form class="d-flex" role="search" action="<?php home_url() ?>">
        <input autofocus class="form-control me-2" name="s" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
</div>

<?php get_footer(); ?>