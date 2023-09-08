<?php
if ( ! defined( 'ABSPATH' ) ) exit;

$value=get_option($this->option_key);
?>
<table class="form-table">
    <tr class="form-field">
        <th scope="row" style="text-align: right;"><label for="auto_enabled"><?php _e( 'Enable Auto', 'flowaccount-api' );?></label></th>
        <td>
            <input type="checkbox" id="auto_enabled" name="<?php esc_attr_e($this->option_key);?>[auto_enabled]" value="1" <?php if(isset($value['auto_enabled']) && $value['auto_enabled']==1) echo 'checked'; ?>>
            <p class="description">Auto create cash invoices to Flowaccount when order completed.</p>
        </td>

    </tr>
    <tr class="form-field">
        <th scope="row" style="text-align: right;"><label for="api_url"><?php _e( 'API URL', 'flowaccount-api' );?></label></th>
        <td>
            <input type="text" id="api_url" name="<?php esc_attr_e($this->option_key);?>[api_url]" value="<?php esc_attr_e($value['api_url']);?>" size="72" placeholder="" required>
        </td>
    </tr>
    <tr class="form-field">
        <th scope="row" style="text-align: right;"><label for="client_id"><?php _e( 'Client id', 'flowaccount-api' );?></label></th>
        <td>
            <input type="text" id="client_id" name="<?php esc_attr_e($this->option_key);?>[client_id]" value="<?php esc_attr_e($value['client_id']);?>" size="72" placeholder="" required>
        </td>
    </tr>
    <tr class="form-field">
        <th scope="row" style="text-align: right;"><label for="client_secret"><?php _e( 'Client secret', 'flowaccount-api' );?></label></th>
        <td>
            <input type="text" id="client_secret" name="<?php esc_attr_e($this->option_key);?>[client_secret]" value="<?php esc_attr_e($value['client_secret']);?>" size="72" placeholder="" required>
        </td>
    </tr>
    
</table>
