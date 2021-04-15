<?php
// Exit if accessed directly
if (!defined('ABSPATH')) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if (!function_exists('chld_thm_cfg_locale_css')) :
    function chld_thm_cfg_locale_css($uri)
    {
        if (empty($uri) && is_rtl() && file_exists(get_template_directory() . '/rtl.css'))
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter('locale_stylesheet_uri', 'chld_thm_cfg_locale_css');

if (!function_exists('child_theme_configurator_css')) :
    function child_theme_configurator_css()
    {
        wp_enqueue_style('chld_thm_cfg_separate', trailingslashit(get_stylesheet_directory_uri()) . 'ctc-style.css', array('twenty-twenty-one-style', 'twenty-twenty-one-style', 'twenty-twenty-one-print-style'));
    }
endif;
add_action('wp_enqueue_scripts', 'child_theme_configurator_css', 10);

// END ENQUEUE PARENT ACTION
function twenty_twenty_one_child_widgets_init()
{

    register_sidebar(array(

        'name' => 'Ma nouvelle zone de widget',
        'id' => 'header-widget-area',
        'before_widget' => '<div class="nwa-widget">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="nwa-title">',
        'after_title' => '</h2>',
    ));
}
add_action('widgets_init', 'twenty_twenty_one_child_widgets_init');

remove_filter('the_content', 'wpautop');


function wpb_hook_javascript()
{
?>
    <script type="text/javascript">
        function auditUXtab(clicked) {
            if (clicked == 1) {
                document.getElementById("demarrage-text").style.display = "block";
                document.getElementById("audit-text").style.display = "none";
                document.getElementById("restitution-text").style.display = "none";
                document.getElementById("amo-text").style.display = "none";

                document.getElementById("demarrage").style.backgroundColor = "#029D77";
                document.getElementById("audit").style.backgroundColor = "#C9EBDC";
                document.getElementById("restitution").style.backgroundColor = "#C9EBDC";
                document.getElementById("amo").style.backgroundColor = "#C9EBDC";

                document.getElementById("demarrage").style.color = "#FFFFFF";
                document.getElementById("audit").style.color = "#02544D";
                document.getElementById("restitution").style.color = "#02544D";
                document.getElementById("amo").style.color = "#02544D";
            }
            if (clicked == 2) {
                document.getElementById("demarrage-text").style.display = "none";
                document.getElementById("audit-text").style.display = "block";
                document.getElementById("restitution-text").style.display = "none";
                document.getElementById("amo-text").style.display = "none";

                document.getElementById("demarrage").style.backgroundColor = "#C9EBDC";
                document.getElementById("audit").style.backgroundColor = "#029D77";
                document.getElementById("restitution").style.backgroundColor = "#C9EBDC";
                document.getElementById("amo").style.backgroundColor = "#C9EBDC";

                document.getElementById("demarrage").style.color = "#02544D";
                document.getElementById("audit").style.color = "#FFFFFF";
                document.getElementById("restitution").style.color = "#02544D";
                document.getElementById("amo").style.color = "#02544D";
            }
            if (clicked == 3) {
                document.getElementById("demarrage-text").style.display = "none";
                document.getElementById("audit-text").style.display = "none";
                document.getElementById("restitution-text").style.display = "block";
                document.getElementById("amo-text").style.display = "none";

                document.getElementById("demarrage").style.backgroundColor = "#C9EBDC";
                document.getElementById("audit").style.backgroundColor = "#C9EBDC";
                document.getElementById("restitution").style.backgroundColor = "#029D77";
                document.getElementById("amo").style.backgroundColor = "#C9EBDC";

                document.getElementById("demarrage").style.color = "#02544D";
                document.getElementById("audit").style.color = "#02544D";
                document.getElementById("restitution").style.color = "#FFFFFF";
                document.getElementById("amo").style.color = "#02544D";
            }
            if (clicked == 4) {
                document.getElementById("demarrage-text").style.display = "none";
                document.getElementById("audit-text").style.display = "none";
                document.getElementById("restitution-text").style.display = "none";
                document.getElementById("amo-text").style.display = "block";

                document.getElementById("demarrage").style.backgroundColor = "#C9EBDC";
                document.getElementById("audit").style.backgroundColor = "#C9EBDC";
                document.getElementById("restitution").style.backgroundColor = "#C9EBDC";
                document.getElementById("amo").style.backgroundColor = "#029D77";

                document.getElementById("demarrage").style.color = "#02544D";
                document.getElementById("audit").style.color = "#02544D";
                document.getElementById("restitution").style.color = "#02544D";
                document.getElementById("amo").style.color = "#FFFFFF";
            }

        }
    </script>
<?php

}
add_action('wp_head', 'wpb_hook_javascript');
