<?php

// Регистрация сессии
function register_session(){

	if( !session_id() ){
		session_start();
		session_write_close();
	}
}
add_action('init', 'register_session');

// Удаление сессии
function destroy_session() {
    if ( session_id() ) {
        session_destroy();
    }
}
add_action( 'wp_logout', 'destroy_session' );

function write_session($key, $value) {
	session_start();
	$_SESSION[$key] = $value;
	session_write_close();
}

function unset_session($key) {
	session_start();
	unset($_SESSION[$key]);
	session_write_close();
}