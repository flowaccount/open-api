<?php
if ( ! defined( 'ABSPATH' ) ) exit;

?>
<h1><?php _e('Flowaccount API Setting','flowaccount-api');?></h1>

<form method="post" action="options.php" id="wc_flowaccount_setting">
    <?php 
        settings_fields( 'wc_flowaccount_setting' );
        do_settings_sections( 'wc_flowaccount_setting' );
        submit_button();
    ?>
</form>
