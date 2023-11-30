<footer>
    <div class="container-fluid">
        <div class="row">
            <div class="col" style="min-width: 200px;">dfSDSsd</div>
            <div class="col" style="min-width: 200px;">dfSDSsd</div>
            <div class="col" style="min-width: 200px;">

                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'footer-menu',
                        'container_class' => 'my_extra_menu_class'
                    )
                );
                ?>

            </div>
        </div>
    </div>

</footer>
<?php wp_footer() ?>
</body>

</html>