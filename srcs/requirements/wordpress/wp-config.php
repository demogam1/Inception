<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
define( 'DB_NAME', getenv('DATABASE_NAME'));

/** Database username */
define( 'DB_USER', getenv('DATABASE_USER'));

/** Database password */
define( 'DB_PASSWORD', getenv('DATABASE_USER_PDW') );

/** Database hostname */
define( 'DB_HOST', getenv('DATABASE_SERVICE') );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

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
define('AUTH_KEY',         'TXJVE:JkbiKIX !_us$%1FCxWcXDX.<TVb+pg/OW:<hMuy`Y8`Y=X?BvM((/92oR');
define('SECURE_AUTH_KEY',  'RL$pMy  aVf}rQzjK2$66!W)+J-}`bh2sTuX&:3v+z3.3=gMp7,+:<LWwN|vXiK>');
define('LOGGED_IN_KEY',    '{|<)5(K&o-C1df_=TlIWBv|gFofSdZQ_N9@r_/dqe}i2Z==c,|N_709@PKRN6AOm');
define('NONCE_KEY',        '({>-^-&`and]y;/I-]vDw|0Zl_]-k=t2MV]Rv~&OzUk_EPL?$ht}im}_6.YVY-{{');
define('AUTH_SALT',        'LLI^+]vyH:ZTM`>D42S)UU~fkX-8TIxqbBO([I7K}T=,Wa{2o8G:)kg_-06$B-GQ');
define('SECURE_AUTH_SALT', '+AvE>Id^+J`.S@Hvgz6~R-%r#q_o6o6i>ZRxu7pFI~YBhV7^C2^e3-QV+go0Xn+z');
define('LOGGED_IN_SALT',   '9F[(tZP+<2}AxyNS0N/4d&4k#Fc#:G8fa]c04CXN$`)/o)+-x!EUp8c>`74C)E@g');
define('NONCE_SALT',       '5/Y4kV$+v>Zrj4#H!XB> bW5.#/SvP`[@zNwM8uKgmE-&n@5#tx6:|bVLcQQBDw$');
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
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', __DIR__ . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
