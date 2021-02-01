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
define( 'DB_NAME', 'wptest2' );

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
define( 'AUTH_KEY',         'sb6*RQ~p?(Mc$[|7w?#gF)>(R=)$L4jvg5w3kO,OANt1>yr@=J-qx5x3)Zr) [yl' );
define( 'SECURE_AUTH_KEY',  'AGzbn^0y-Y2k0#s>N`erUw_H kG:_gauTi@A<Dp&Q/pO8: 4;OIb<7C=;)F&T%EG' );
define( 'LOGGED_IN_KEY',    ';Lj8>9(|2*dZ(RFh>jZayxoj/6nAX2s{iaNs!N_R.>[4FS)r XHbjDA[M]EmbH5R' );
define( 'NONCE_KEY',        '.7!a!bfRmVcs:#KX2~>]OK@CPt7]`-)x`2KgczPWjy4Tq CO M{DhCcmDsowbCMK' );
define( 'AUTH_SALT',        '%UMo_FoK@;1=N2M^L>ICdY]R~7%s+&l0bh[MQ[|/-m8lmr}:fQ4-db^@f X^M2*.' );
define( 'SECURE_AUTH_SALT', 'X!MNSuUZ=HGdaTypR,E8*?mlC!`<XN ;-=gIHZXjSHA1eT~y3HM<I:,34nT%oI[S' );
define( 'LOGGED_IN_SALT',   'WqcN(%{t4/V .r,*.BfwE63+6X!/hbe#Yin/^t~0g*Y2D,iO.QH{{c1SEvuef;,j' );
define( 'NONCE_SALT',       '>{=U3OZe]~RixXtixY}r6g4_UgXdtAmlW0@tJyywm~<.1ysR&v{.]86)$##Rs$df' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp2_';

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

define('WP_MEMORY_LIMIT', '12M');
