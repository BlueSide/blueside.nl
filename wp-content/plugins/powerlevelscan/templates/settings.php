<div class="wrap">
    <h2>WP Plugin Template</h2>
    <form method="post" action="options.php"> 
        <?php @settings_fields('power_level_scan-group'); ?>
        <?php @do_settings_fields('power_level_scan-group'); ?>

        <?php do_settings_sections('power_level_scan'); ?>

        <?php @submit_button(); ?>
    </form>
</div>