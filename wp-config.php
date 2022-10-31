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
define( 'DB_NAME', 'flower' );

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
define( 'AUTH_KEY',         'Y1e}1M`5XqRjWGP`7Uo.~uzBGX0l7?zk_%CB@M~9G}X FxH:_L-X~@R;K12-$da=' );
define( 'SECURE_AUTH_KEY',  'f`:]w0tt)f-wIPD3E.r2qrFFebK}8aaQLP*/FPI+~C,;k9u*UE)3 B6m|`Ak3ETS' );
define( 'LOGGED_IN_KEY',    '~I@K;r-r?jJVfP0 bZ~&D*I$kpn,wJsi>JIit~y)u<tl(uuhEbA@jk/n*#E$VD];' );
define( 'NONCE_KEY',        ':xLf*S|VRX q[pSOSJ9e$Y>el}sFC/*69ve%XLT(*~*0i*tRe(No}|DE4wFVNA]u' );
define( 'AUTH_SALT',        'qu2 Dn8}UKG< `iex< 4{&LyHURLQ+(DwHYog3K,f:B~*]0~!EB(`P!;:r~[Kz{U' );
define( 'SECURE_AUTH_SALT', 'F>lJ2N:2wKR#f,hK7hX:Bp*DiLOr%4B7?QsOmXRq5+7q[g,8DAJcXA~w/f=v/frc' );
define( 'LOGGED_IN_SALT',   'G8>GX2p5=J$-YOI7 bngqsPf>B?r,Sx87/ZFWPB4]Kjx(@%f>#_%7>4/dEa1S)Dx' );
define( 'NONCE_SALT',       'q)[W.daKL&l.Q$dVx69:3O~Eh9!?#%qA%C/lJ.>LI3`VLdfFan#uoa9|>m(XIA+N' );
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
