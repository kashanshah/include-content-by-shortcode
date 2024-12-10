<?php
include_once("constants.php");

// Including Admin Panel Settings Page
add_action('admin_menu', 'icbscbks_admin_actions');
function icbscbks_admin_actions() {
    add_submenu_page('edit.php?post_type=icbscbks', 'Settings', 'Settings', 'manage_options', 'include-content-by-shortcode', 'icbscbks_admin');

    register_setting( 'icbscbks_options', 'icbscbks_options' );

}
function icbscbks_admin() {
    $active_tab = "overview";
    if( isset( $_GET[ 'tab' ] ) ) {
        $active_tab = $_GET[ 'tab' ];
    } // end if

    ?>
<div class="wrap">
    <?php    echo "<h1>" . __( 'Included Content By Shortcode' ) . "</h1>"; ?>

    <?php settings_errors(); ?>
    <h2 class="nav-tab-wrapper">
        <a href="?post_type=icbscbks&page=include-content-by-shortcode&tab=overview" class="nav-tab <?php echo $active_tab == "overview" ? "nav-tab-active" : ""; ?>">Overview</a>
<!--        <a href="?post_type=icbscbks&page=include-content-by-shortcode&tab=settings" class="nav-tab <?php /*echo $active_tab == "settings" ? "nav-tab-active" : ""; */?>">Settings</a>
-->    </h2>


    <?php
    if($active_tab == "overview"){
    echo "<h4>" . __( 'Thank you for installing. This plugin allows the user to add single content in multiple posts and pages by means of a shortcode. It is used to fulfill the concept of PHP\'s \'include\' function.' ) . "</h4>"; ?>
	<h4>To perform this action, follow these simple steps:</h4>
	<ol>
	    <li><?php    echo "<span>" . __( "Simply add a content by going to <i>'Add New'</i> page under <i>'Included Content'</i> menu." ) . " </span>"; ?>
	    </li>
	    <li><?php    echo "<span>" . __( "Add the title and content, and Publish the post." ) . " </span>"; ?>
	    </li>
	    <li><?php    echo "<span>" . __( "Copy the shortcode provided on the <i>'Included Content'</i> page against that content." ) . " </span>"; ?>
	    </li>
	    <li><?php    echo "<span>" . __( "Paste the shortcode on the post or page where-ever you want to add that content. " ) . " </span>"; ?>
	    </li>
	</ol>
<?php
    }
    else if($active_tab == "settings"){
        ?>
        <h2>Settings</h2>

        <form method="post" action="options.php" id="icbscbks_options">

            <?php settings_fields( 'icbscbks_options' ); ?>
            <?php do_settings_sections(__FILE__); ?>

            <?php
            $icbscbks_settings = get_option('icbscbks_options');
            $richeditor = (!isset($icbscbks_settings["richeditor"]) || $icbscbks_settings["richeditor"] == 1) ? 1 : 0;
            ?>
            <table class="form-table">
                <tr valign="top">
                    <th scope="row">Rich Editor</th>
                    <td><input type="radio" name="icbscbks_options[richeditor]" value="1" <?php echo esc_attr( $richeditor ) == 1 ? "checked" :""; ?> /> Enabled</td>
                    <td><input type="radio" name="icbscbks_options[richeditor]" value="0" <?php echo esc_attr( $richeditor ) == 0 ? "checked" :""; ?> /> Disabled</td>
                </tr>

            </table>

            <?php submit_button(); ?>

        </form>
        <?php
    }
    ?>

	<br/><br/><br/>
	<p style="text-align:right">For help contact the developers at <a href="mailto:kashanshah@hotmail.com"><strong><em>kashanshah@hotmail.com</em></strong></a> or visit <a href="https://www.kashanshah.com"><strong><em>www.kashanshah.com</em></strong></a></p>
	
</div>
<?php

}







