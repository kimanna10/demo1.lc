<?php
/**
 * Creating a constant for the language version of the site
 * 
 * This constant will be created if the Polylang PRO plugin is activated
 *
 * @package init
 */

$lang = "";

if (function_exists('pll_current_language')) {
    if (pll_current_language()) {
        if (pll_current_language() !== "ru") {
            $lang = '/' . pll_current_language();
        }
    }
}

define('LANG', $lang);