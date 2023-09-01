<?php

function init_favicon()
{
    echo '<link rel="apple-touch-icon" sizes="180x180" href="/wp-content/themes/init/img/favicons/apple-touch-icon.png">' . "\n";
    echo '<link rel="icon" type="image/png" sizes="32x32" href="/wp-content/themes/init/img/favicons/favicon-32x32.png">' . "\n";
    echo '<link rel="icon" type="image/png" sizes="194x194" href="/wp-content/themes/init/img/favicons/favicon-194x194.png">' . "\n";
    echo '<link rel="icon" type="image/png" sizes="192x192" href="/wp-content/themes/init/img/favicons/android-chrome-192x192.png">' . "\n";
    echo '<link rel="icon" type="image/png" sizes="16x16" href="/wp-content/themes/init/img/favicons/favicon-16x16.png">' . "\n";
    echo '<link rel="manifest" href="/wp-content/themes/init/img/favicons/site.webmanifest">' . "\n";
    echo '<link rel="mask-icon" href="/wp-content/themes/init/img/favicons/safari-pinned-tab.svg" color="#ff1614">' . "\n";
    echo '<link rel="shortcut icon" href="/wp-content/themes/init/img/favicons/favicon.ico">' . "\n";
    echo '<meta name="apple-mobile-web-app-title" content="initRED">' . "\n";
    echo '<meta name="application-name" content="initRED">' . "\n";
    echo '<meta name="msapplication-TileColor" content="#ff1614">' . "\n";
    echo '<meta name="msapplication-TileImage" content="/wp-content/themes/init/img/favicons/mstile-144x144.png">' . "\n";
    echo '<meta name="msapplication-config" content="/wp-content/themes/init/img/favicons/browserconfig.xml">' . "\n";
    echo '<meta name="theme-color" content="#ff1614">' . "\n";
}
add_action('wp_head', 'init_favicon', 0);
