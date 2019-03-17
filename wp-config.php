<?php
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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'wp1' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         ' YoDJC)$|q`#k%Pki*KlG:>*>)vR=HGbZzZD%UUtBG6ta&bZc*, J:HV.vTUZHTP' );
define( 'SECURE_AUTH_KEY',  '{?i^F!Y>M`VAZ/LODitwStq@!$+Mh2}/LUlU;b%cHpQ+kpjF_eyT3=y`XsU74PO7' );
define( 'LOGGED_IN_KEY',    'GV0Ls0qS$nc@8b5~JFJIaRL_YgV{6$`[cSkoTyma^nfhI^U{l-o|?$%P<.>urEuD' );
define( 'NONCE_KEY',        'DmFR^Ff*3y7eiAb1$_E]Q]eI*9(_CD$zcg(i,Com3 *|Pye=~`|^z[Uoz;x|quhd' );
define( 'AUTH_SALT',        ',EG%w8^5@]?*d-%k)ZIf2DRYk/if3__RCV*73* [*s(Td2.zV+|sx|Ape#za0C*e' );
define( 'SECURE_AUTH_SALT', '=*sN`6+z6=cs{?=ML*H`|]:+/izz&KO&7-%3sC`%g.uSCXs[d9D:~r=qaf.F@]$j' );
define( 'LOGGED_IN_SALT',   'Hov s@8[dG%{$?n+:oUdA!a27dZ[0u;Ym;QN%C>~k_E&5dA7`dYxaytQ*O`79@+%' );
define( 'NONCE_SALT',       'Wn,KD<nRDF:krpCE8/b.E.nmp~*v/R7 .K-DQ{+K`(%v_jQX-=mQT{?}nP:GQ&~5' );

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
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', true );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
