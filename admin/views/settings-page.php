<div class="wrap">
    <h1>Exclude Pages from CSS</h1>
    <form method="post" action="options.php">
        <?php
        settings_fields('exclude_pages_group');
        do_settings_sections('exclude-pages');
        submit_button();
        ?>
    </form>
</div>
