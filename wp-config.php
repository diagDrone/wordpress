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
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'wordpress' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '/hdURyQV$x58DKyZ[XUho[m2Yl9&/X!CKcxbsXt+yY0Gies^F4K^f2M8+b46u8fd' );
define( 'SECURE_AUTH_KEY',  'W9)w9@I@6`gUG[Z):&?U:CEC/yVzJgJS/:TjF#b)P[0s@r,@0|PDnf?8NBWY=1}d' );
define( 'LOGGED_IN_KEY',    'qCS!/!y5{xD&G<T)]Elm?fAR<tb3$^X:00./Q%jJ8&g39Q|Mpdujepo{O1/K|]=S' );
define( 'NONCE_KEY',        'MAdFSA7 07x9mPy=rx3i3!fuZ{fytIks-k^<rm9Z esC6z2lp[R/3E.5llfLK`>9' );
define( 'AUTH_SALT',        ':%h^eB+y;F/(n6x~v>76MPn~jlR8A<6d:&Y(tg3$>H7rkW:#2cR<FlC@aF-.OrYZ' );
define( 'SECURE_AUTH_SALT', 'XkMWNe&(/q/b5M C+..# &gqL]9mAf)6.% =-Ru*+lA(&kC>dL=6FzR?oFy7:@j8' );
define( 'LOGGED_IN_SALT',   'rnGcLm72Lj3e(Mf]I9R5_no<h5bQS+ZMhh9L2B9c&n`4Rnhxvc>K?el#|X}m}BR6' );
define( 'NONCE_SALT',       '1%Ir`UH|r1#PRkv7W:CQ)sGu0=(APliDnm,u}W@FsO,yRI!JYd98Tw4&qp`0 <d=' );
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
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
