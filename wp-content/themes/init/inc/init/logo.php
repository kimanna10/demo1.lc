<?php
/**
 * This file is responsible for displaying a custom logo
 *
 * @package init
 */

function init_logo()
{
    $structure = get_bloginfo('name');
    
    return $structure;
}


function get_logo($class = "")
{
    $class = $class ? $class . " logo" : "logo";
    $logo_html = '<div class="' . $class . '">';
    $logo_html .= '<a class="logo__link" href="' . home_url('/') . '">' . init_logo() . '</a>';
    $logo_html .= '</div>';

    return $logo_html;
}


function the_logo($class = "")
{
    echo get_logo($class);
}
