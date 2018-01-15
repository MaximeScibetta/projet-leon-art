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
define('DB_NAME', 'saintleonart');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'homestead');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'secret');

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
define('AUTH_KEY',         'f5lRz]kSmDmaAHJZ:O{^v{.7n8?^KzmF%$Tw%Gqceg|XNcTMtFZX/5bhvTo5RvAj');
define('SECURE_AUTH_KEY',  'l_S[5Y?(}:(TP&{5c1r0 Cs1vO*W3BEWW/:Oh_mlG-[,sR1}s;4m>~7jwcPpYo@-');
define('LOGGED_IN_KEY',    '${Y3p%$>A9F$trx2MDJeU7-C]Tg9m}IY+H&{[AsGH.6fK#%VVxeuLl-IsClFF4Oc');
define('NONCE_KEY',        '=cI{]hR_;eTb5c0NPq6,M&vd_gV#Tq9cDmRqEZX%I2YfhGXaU0uTxr}XDV$>[)$)');
define('AUTH_SALT',        'h6DFy3+zl1cBcf+4}yfi+yZLYv#XKtLI|9_i7A%zyg,vI/Q852lm1&CAO#dT2Gke');
define('SECURE_AUTH_SALT', '~>[*bF7-d?]jBggkbv2~;IfQ*=2%eiFZ)#zc+b:Hu7!|t_fC4j9*E#Cavdvm6v.{');
define('LOGGED_IN_SALT',   'wnzeydjrhb@f$10Rsv/nF_|TrR{MvgAQCi)`}L3jd#iS*rWRMJPB,jP1%?C*qei*');
define('NONCE_SALT',       '$?a~!l!&3Rva@FL>B..y~rCgW{DI@H3]%DnC`Q8eGMN{1d[hs#{R3BETpO#Kj=n8');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wp_';

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
define('WP_MEMORY_LIMIT', '128M');
define('WPCF7_AUTOP', false);
/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');