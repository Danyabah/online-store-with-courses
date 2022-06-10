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
define( 'DB_NAME', 'wordpress' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'danya' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', 'danil200804' );

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
define( 'AUTH_KEY',         'R]MdHxjH2 qCruV]_h^LckM9mBbn>}f!ZxD*(_^zNFiu|-^c~2wn_q:`9paE6U7D' );
define( 'SECURE_AUTH_KEY',  'Qb/bBgC~Ca}CX6>yv>t~ffFCrws^&Cg>yv@Ci/HLQ?`dNA3PeL~SIAv&q1/`<15J' );
define( 'LOGGED_IN_KEY',    '1J{#>>:{xig0{1!rg}~RNxbb%uv-*{qz =&6NDv&imkP00v#=E7`-9~:(VfBNBC&' );
define( 'NONCE_KEY',        'W(LvBi`Jf@gn C`e]6hg^ rp);tz`iv6[#w;%qDH~ccLru}p0K7#gw]M81p2gjVS' );
define( 'AUTH_SALT',        '/7e3S}IqrkvVfBy)D/d|V (%3t;2WZrt?6|z4n.dq?BB-?-fr1c=P<Qw2F!.}D~W' );
define( 'SECURE_AUTH_SALT', 'Y[1|9/hhZ6m8ckW5qoS%ts`+/4;}//f(_#?ejR|i2AYJ8KP:] C-C.%KaHJ=$7x(' );
define( 'LOGGED_IN_SALT',   'poO;B]r?I/F(XL4]$n|c?{bo$5cITpKEWiCM&f:99<[*|M.kq!XO2np99E_%rTDt' );
define( 'NONCE_SALT',       'O6{XI M(rP-~XN7m guuC<0O_<H9XSCosu(-u5mLao]Or}>$I]]C]OZPNRb5/U$S' );

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

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
