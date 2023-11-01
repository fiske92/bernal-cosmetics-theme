<?php 
$navSubscribeShortcode = get_option('nav_subscribe_shortcode', '');
$navSubscribeShortcode = str_replace('\\', '', $navSubscribeShortcode);
$navSubscribeShortcode = str_replace('"', "'", $navSubscribeShortcode);

$mainContactFormShortcode = get_option('main_contact_form_shortcode', '');
?>

<h1>Themes Shortcodes</h1>
<form method="POST">
    <?php wp_nonce_field('save_form_nonce', 'form_nonce'); ?>
    <table class="form-table">
        <tr>
            <th>Form Shortcode</th>
            <td>
                <input type="text" 
                        class="regular-text" 
                        name="nav_subscribe_shortcode" 
                        value="<?php echo $navSubscribeShortcode; ?>"
                >
            </td>
        </tr>
        <tr>
            <th>Main Contact Form</th>
            <td>
                <input type="text" 
                        class="regular-text" 
                        name="main_contact_form_shortcode" 
                        value="<?php echo $mainContactFormShortcode; ?>"
                > 
            </td>
        </tr>
    </table>
    <p class="submit">
        <input type="submit" class="button button-primary" value="Save Changes" name="submit_button">
    </p>
</form>
