(function($) {

    wp.customize.bind('ready', function() {

        wp.customize('body_font_size', function(this_customizer_control) { initiate_show_value(this_customizer_control,
            'rem', // postfix
            0.001 // multiplier
        ); });

        wp.customize('aligndefault_max_width', function(this_customizer_control) { initiate_show_value(this_customizer_control); });

        wp.customize('alignwide_max_width', function(this_customizer_control) { initiate_show_value(this_customizer_control); });

        wp.customize('header_min_height', function(this_customizer_control) { initiate_show_value(this_customizer_control,
            'vh'
        ); });

        wp.customize('sidebar_width', function(this_customizer_control) { initiate_show_value(this_customizer_control,
            '%'
        ); });

        wp.customize('sidebar_min_width', function(this_customizer_control) { initiate_show_value(this_customizer_control); });

        wp.customize('header_padding_top', function(this_customizer_control) { initiate_show_value(this_customizer_control,
            'px', // postfix
            1, // multiplier
            1 // deductor
        ); });

        wp.customize('header_padding_bottom', function(this_customizer_control) { initiate_show_value(this_customizer_control,
            'px', // postfix
            1, // multiplier
            1 // deductor
        ); });

        wp.customize('logo_size', function(this_customizer_control) { initiate_show_value(this_customizer_control); });

        wp.customize('logo_border_bottom', function(this_customizer_control) { initiate_show_value(this_customizer_control,
            'px', // postfix
            1, // multiplier
            1 // deductor
        ); });

        wp.customize('site_title_font_size', function(this_customizer_control) { initiate_show_value(this_customizer_control,
            'rem', // postfix
            0.001 // multiplier
        ); });

        wp.customize('site_description_font_size', function(this_customizer_control) { initiate_show_value(this_customizer_control,
            'rem', // postfix
            0.001 // multiplier
        ); });

        wp.customize('header_border_bottom_width', function(this_customizer_control) { initiate_show_value(this_customizer_control,
            'px' // postfix
        ); });

        wp.customize('header_gradient_height', function(this_customizer_control) { initiate_show_value(this_customizer_control,
            '%'
        ); });

        wp.customize('header_gradient_opacity', function(this_customizer_control) { initiate_show_value(this_customizer_control,
            '%'
        ); });

        wp.customize('header_text_shadow_width', function(this_customizer_control) { initiate_show_value(this_customizer_control,
            'px' // postfix
        ); });

        wp.customize('desktop_nav_padding', function(this_customizer_control) { initiate_show_value(this_customizer_control); });

        wp.customize('nav_burger_icon_size', function(this_customizer_control) { initiate_show_value(this_customizer_control); });

        wp.customize('nav_desktop_font_size', function(this_customizer_control) { initiate_show_value(this_customizer_control,
            'rem', // postfix
            0.001 // multiplier
        ); });

        wp.customize('nav_font_weight', function(this_customizer_control) { initiate_show_value(this_customizer_control,
            '' // postfix
        ); });

        wp.customize('nav_desktop_item_padding', function(this_customizer_control) { initiate_show_value(this_customizer_control,
            '%', // postfix
            1, // multiplier
            1 // deductor
        ); });

        wp.customize('nav_submenu_font_size', function(this_customizer_control) { initiate_show_value(this_customizer_control,
            'rem', // postfix
            0.001 // multiplier
        ); });

        wp.customize('nav_submenu_padding', function(this_customizer_control) { initiate_show_value(this_customizer_control,
            'px', // postfix
            1, // multiplier
            1 // deductor
        ); });

        wp.customize('nav_border_width', function(this_customizer_control) { initiate_show_value(this_customizer_control); });

        wp.customize('nav_item_border_radius', function(this_customizer_control) { initiate_show_value(this_customizer_control,
            'rem', // postfix
            0.001 // multiplier
        ); });

        wp.customize('nav_item_margin', function(this_customizer_control) { initiate_show_value(this_customizer_control); });

        wp.customize('mobile_nav_breakpoint', function(this_customizer_control) { initiate_show_value(this_customizer_control,
            'px', // postfix
            1, // multiplier
            -481 // deductor
        ); });

        wp.customize('content_padding_top', function(this_customizer_control) { initiate_show_value(this_customizer_control,
            'px', // postfix
            1, // multiplier
            1 // deductor
        ); });

        wp.customize('page_title_font_size', function(this_customizer_control) { initiate_show_value(this_customizer_control,
            'rem', // postfix
            0.001 // multiplier
        ); });

        wp.customize('page_title_font_weight', function(this_customizer_control) { initiate_show_value(this_customizer_control,
            '' // postfix
        ); });

        wp.customize('page_title_padding_bottom', function(this_customizer_control) { initiate_show_value(this_customizer_control,
            'px', // postfix
            1, // multiplier
            1 // deductor
        ); });

        wp.customize('title_border_bottom', function(this_customizer_control) { initiate_show_value(this_customizer_control,
            'px', // postfix
            1, // multiplier
            1 // deductor
        ); });

        wp.customize('title_margin_bottom', function(this_customizer_control) { initiate_show_value(this_customizer_control,
            'px', // postfix
            1, // multiplier
            1 // deductor
        ); });

        wp.customize('archive_title_font_size', function(this_customizer_control) { initiate_show_value(this_customizer_control,
            'rem', // postfix
            0.001 // multiplier
        ); });

        wp.customize('page_title_letter_spacing', function(this_customizer_control) { initiate_show_value(this_customizer_control,
            'px' // postfix
        ); });

        wp.customize('comments_titles_font_size', function(this_customizer_control) { initiate_show_value(this_customizer_control,
            'rem', // postfix
            0.001 // multiplier
        ); });

        wp.customize('grid_box_shape', function(this_customizer_control) { initiate_show_value(this_customizer_control,
            '%' // postfix
        ); });

        wp.customize('grid_border_width', function(this_customizer_control) { initiate_show_value(this_customizer_control,
            'px', // postfix
            1, // multiplier
            1 // deductor
        ); });

        wp.customize('grid_font_size_small', function(this_customizer_control) { initiate_show_value(this_customizer_control,
            'vw', // postfix
            0.1 // multiplier
        ); });

        wp.customize('grid_font_size_mediuml', function(this_customizer_control) { initiate_show_value(this_customizer_control,
            'vw', // postfix
            0.1 // multiplier
        ); });

        wp.customize('grid_font_size_large', function(this_customizer_control) { initiate_show_value(this_customizer_control,
            'vw', // postfix
            0.1 // multiplier
        ); });

        wp.customize('grid_title_shadow_width', function(this_customizer_control) { initiate_show_value(this_customizer_control,
            'px', // postfix
            1, // multiplier
            2 // deductor
        ); });

        wp.customize('footer_margin_top', function(this_customizer_control) { initiate_show_value(this_customizer_control,
            'px', // postfix
            1, // multiplier
            1 // deductor
        ); });

        wp.customize('footer_border_top', function(this_customizer_control) { initiate_show_value(this_customizer_control,
            'px', // postfix
            1, // multiplier
            1 // deductor
        ); });

        wp.customize('footer_widget_font_size', function(this_customizer_control) { initiate_show_value(this_customizer_control,
            'rem', // postfix
            0.001 // multiplier
        ); });

        wp.customize('social_links_icon_size', function(this_customizer_control) { initiate_show_value(this_customizer_control); });

        function initiate_show_value(customizer_control, value_postfix = 'px', value_multiplier = 1, value_deductor = 0) {
            show_value(wp.customize(customizer_control.id).get(), customizer_control.id, value_postfix, value_multiplier, value_deductor);
            show_value_bind(customizer_control, value_postfix, value_multiplier, value_deductor);
        }

        function show_value_bind(customizer_control, value_postfix, value_multiplier, value_deductor) {
            customizer_control.bind(function(value) {
                show_value(value, customizer_control.id, value_postfix, value_multiplier, value_deductor);
            });
        }

        function show_value(value, control_name, value_postfix, value_multiplier, value_deductor) {
            if ($('#_customize-description-' + control_name + '-value').length) {
                $('#_customize-description-' + control_name + '-value').text(parseFloat(((value - value_deductor) * value_multiplier).toFixed(3)) + value_postfix);
            } else {
                $('#_customize-description-' + control_name + '').append($('<br /><strong id="_customize-description-' + control_name + '-value">' + parseFloat(((value - value_deductor) * value_multiplier).toFixed(3)) + value_postfix + '</strong>'));
            }
        }

    });

})(jQuery);
