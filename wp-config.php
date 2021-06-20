<?php

//Begin Really Simple SSL session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple SSL

//Begin Really Simple SSL Load balancing fix
if ((isset($_ENV["HTTPS"]) && ("on" == $_ENV["HTTPS"]))
|| (isset($_SERVER["HTTP_X_FORWARDED_SSL"]) && (strpos($_SERVER["HTTP_X_FORWARDED_SSL"], "1") !== false))
|| (isset($_SERVER["HTTP_X_FORWARDED_SSL"]) && (strpos($_SERVER["HTTP_X_FORWARDED_SSL"], "on") !== false))
|| (isset($_SERVER["HTTP_CF_VISITOR"]) && (strpos($_SERVER["HTTP_CF_VISITOR"], "https") !== false))
|| (isset($_SERVER["HTTP_CLOUDFRONT_FORWARDED_PROTO"]) && (strpos($_SERVER["HTTP_CLOUDFRONT_FORWARDED_PROTO"], "https") !== false))
|| (isset($_SERVER["HTTP_X_FORWARDED_PROTO"]) && (strpos($_SERVER["HTTP_X_FORWARDED_PROTO"], "https") !== false))
|| (isset($_SERVER["HTTP_X_PROTO"]) && (strpos($_SERVER["HTTP_X_PROTO"], "SSL") !== false))
) {
$_SERVER["HTTPS"] = "on";
}
//END Really Simple SSL
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'rutoppro_word' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'rutoppro_word' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'Ckjysqgfhjkm789' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '@|HX<@(8O^C+nut[e2sN2Z?pTb].TY6iWdVjcV)f8sh$Ze/i.r%[mk3Q$@{[Y5m@' );
define( 'SECURE_AUTH_KEY',  'XQB{N^?>MGr`f@#Jxmm8J4TK%wIifGR7:I$nhq.n2Qcyvcz]u Q/2y[a/mg4]rZ2' );
define( 'LOGGED_IN_KEY',    '+-*/97GANNTi^.5|zg./3;([t?**/K8IdpZ}B&1hUJOc~=7q4zT6K2udy&yUjPf.' );
define( 'NONCE_KEY',        'z$4l(+0T$])V{F;uzkI6xDT+rh)Z5~na/1z>^0r!ve a.|Z0wz905GL9_[hgv@T^' );
define( 'AUTH_SALT',        '|26Dv1:<&jRGT:}XJG>9o&d=sqE`u<q^3@N;$_Y2n6QW*QyEQto[TVQhi{3%Nlz%' );
define( 'SECURE_AUTH_SALT', 'e%Fm}s%h+?h0.=#@b[gbB!k&^Y2Ln7>0q#!s2S!/GN5+k,xLlR~1klc]r[:Pr>D]' );
define( 'LOGGED_IN_SALT',   '1rS2_~vp3kl2ku{q%l,{RsQ>1DlH])4.bEfk+guEyxqtGt|QB3KsS:z2zJ4%,I4n' );
define( 'NONCE_SALT',       'gqh4Cvi0RZl+%fzS2M0)w<m`~Yw(x:Xu f =o&.zfK]i&NTE`&ruz)uTwSJ,,Q2d' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

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

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';