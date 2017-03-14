<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', '2k17_wp_musiqueaction');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'root');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'OH.sSu=gPpMY-}r[b|23nwh`mHUPl,~c!tA<,*uaRAqg;-9azs1.1qr_T-Sa3$?9');
define('SECURE_AUTH_KEY',  ';Lj9apo$9#=![}}ivMnU<M5i}VMap[gxJXqghX~7#|e&R85OaqAcq^k>:qQj:.TB');
define('LOGGED_IN_KEY',    '&TVLjM?eM`(h~WycH=,%#I%A.lvq+%GNC`iF*uAap:J6@Jri]y2ZO67nKGk;H*Xb');
define('NONCE_KEY',        's[;4FdU5#s2h]zHY@AS4<sGX{?R lD50ey!20K!!@Jwg8<ko0XT[N~t&dKYd[@yw');
define('AUTH_SALT',        'V<~&^2_7.cEL%iJE~1i(XBmHxeSgM#C6!{EHhl6Lj:*:{G*uN&yyvFZ/U)oNOf5u');
define('SECURE_AUTH_SALT', 'Z2D4;7dq=Djr=~>PgEElZHX7i^kmt:b%YhSjsd^Q%@ew3G~H%G?CsoS[8,U5_NpK');
define('LOGGED_IN_SALT',   '|V_vIZC`Dk70Ua<6d@iELU-n9nD!v8@n34/&LKIGzdzA6xZ>e9`koN)l$<,3Hae ');
define('NONCE_SALT',       '8m2O1Eg>+bGW1H>d6LR460xa&X/jI?0QSt)z/;eW}y.()|`C[jcVdnl}L<eP2KP?');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = '2k17_wp_musiqueaction_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');