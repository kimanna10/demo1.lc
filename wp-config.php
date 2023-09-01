<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки базы данных
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'demo_demo1' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', 'root' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'eUL:Er7x+gq~.rDaATc~zNxE~z9/ [FzrRR#%.>o]Q<I4:*3-q-_o%xJ9Zf}UyXp' );
define( 'SECURE_AUTH_KEY',  '$_sl,,WF,y6fd=hnUixh9P&xfs[:NRJ%l%@5oCgMR){3K:ljUS?/6uLjPz=cpxkv' );
define( 'LOGGED_IN_KEY',    '^4dVf>D-0&6`L^e.SOCVI>|7}_jplo+iUTIR<D^B:v+H1d0Y#)F)EaKG:Uz@^jZn' );
define( 'NONCE_KEY',        'S/-ZY[t-;D:O7[bMTw;@kBi_nZ2Uz7}9 ZQ)?,tD.eJegy>,{&rbonw((uz[6ZxS' );
define( 'AUTH_SALT',        '6&`j9`b7y@lOkM)I!*63y[74S6bxJ~*fAf{j0%Z%fPHSuHV;u7NMjU1G-mXZg4A:' );
define( 'SECURE_AUTH_SALT', '/HV?61NkKmii$v[Jr02~W8bHS`h)w5!d[Rx#|B.t;mN>>( -q2Xy.[ucl^b!_[^;' );
define( 'LOGGED_IN_SALT',   'B5WC!2^56}B|~I`eJg4oK<|(;-?jL`HMxN`gP_=CF_5QE*sW;>T0YZA?>cz0<rVN' );
define( 'NONCE_SALT',       '~RH}gKL,p0E>7N7X+=HkkB`Q_pxOnY4.w+.jEvxo-dfh{x7wMwfC~Cae]wXUL45)' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'init_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

define( 'FS_METHOD', 'direct');

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
