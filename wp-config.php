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
define( 'DB_NAME', 'wordpress_grafikart-ct_wp' );

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
define( 'AUTH_KEY',         'UmY NB&n8tn2O8mxu:KwOP4)x69&=o/9oKHxiLu&+ZorE0Y+gHIr6=KqqPSR6RFe' );
define( 'SECURE_AUTH_KEY',  ',!V!;Ukl=9!k|xF>uSqr4O9k5RaUVy`nmrS`mq4u &*ZCsbd-<L:xl3wep?mA^$~' );
define( 'LOGGED_IN_KEY',    'n@7*]^`%GoV;;UWnzjsd}?1m!PbRed*^MB t<*lH;;Ubj1Wa$xt#U;2)XK;YF`Wl' );
define( 'NONCE_KEY',        ']ZPV2?dSm.O:baOtra3O^NEO_$i,S?je*.+u$mrd*pM-9o:>6gE.F&;Ib`YOzB4)' );
define( 'AUTH_SALT',        'UPW!q=A]V!i2I9O#A}VQ{eUBAiyI$QI(`(~C<_0yR5)g*FhzLW2,~@<&?ju(Qr8Y' );
define( 'SECURE_AUTH_SALT', '<[}P4cYFYPFD3ZXMw-i<~OrwZsnE.$qwCSlH[fQgt])&m}v7;q+wDm@)-m~.:SoW' );
define( 'LOGGED_IN_SALT',   'Np!B]|)6!BS+$GwE?3aQm-iM4?5`?WLgYT8`i[-)B/#wE7-B r(s4e|zsCue[7wm' );
define( 'NONCE_SALT',       'WB+[=NW_uy05W+vJy;USvpZ,FendxSU1,rwmGFIOX@.cE_,tlQ1F6zF]0{*H)oRt' );
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
