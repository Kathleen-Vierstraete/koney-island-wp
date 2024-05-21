<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'wp-test-2024' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'wp-test-2024' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'wp-test-2024' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'L}b#ScD@p#}-&Tx&<b=mH/n3rVsr-U~`^pq|l@q*Wm!i+p`bjD[Si]g[#xNWqB1H' );
define( 'SECURE_AUTH_KEY',  '^#PwUYuy,<QQ R5D]tJ[7qwQ#eWwEVv0NUs14q]F~uWo^([BU?Rs$<S&@XhEQ2Kj' );
define( 'LOGGED_IN_KEY',    ',FxwsU]A3N_7m8c,-VlhA9Sl|S5Zp$-+_7]7:z6J Q7c!(^+>S|3=|Dy;&>%8R~9' );
define( 'NONCE_KEY',        'e~d:Vv`Nt=C?q62XkzZi%jCJu-baz:PebF95>.DKvE_*.p_~.pI+64BT~-$F=;Do' );
define( 'AUTH_SALT',        'wl30]}D+SP~DhC}/25K]@,OT^K8dc|w3jaz*00<;0.W&g{A>m](ioVUB~]$H4!:0' );
define( 'SECURE_AUTH_SALT', '}gEstR4j5Y6S!;vw6@lgZP7lV/o;R9I!Y.A!jj(bh}w?DlI-o5$F)6t!Ve<C<:_|' );
define( 'LOGGED_IN_SALT',   'D-NW|e9RS}X0V/6MM|@JS}ac*<CDKc*KxDY<~k2}dx2e~+mL-kHmjmw`knrV}|$H' );
define( 'NONCE_SALT',       '_ev{?Gz%9{iy8o`R$IN@ppxf)_/iK$X84)kaFC~((z/Q/=du9M.Z$9p^KK`|0``3' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs et développeuses d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
