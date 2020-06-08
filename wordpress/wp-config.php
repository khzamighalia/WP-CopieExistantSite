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
define( 'DB_NAME', 'machines' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'ghalia' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'wuwfUYf0o3nnbxrO' );

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
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'fUhl{>T%Q~w{Xx#tXJ*Djb[>v:-Ub!.4K+I:-U42.F(T1i[o$G87WR[=L>V 57,~' );
define( 'SECURE_AUTH_KEY',  '$8cz+$Bh-%?E>RZlx{<DfFamYJwyv]hyllx?-4$(xn$1jqHXoMnj#(5?Z$4X/qP,' );
define( 'LOGGED_IN_KEY',    'B[Sp79*z%/.=zsti0w{5SutQA:97I.I6s&Zuc[Tya.Kdb_S>?d7ULwin%=Tm*Siz' );
define( 'NONCE_KEY',        'E&Bp/sz.l69/-U<3PJ)M`G4M >bGn1>w,,lr[I/H@VX~l#Ry^BBWZu~RQ#3M#mUi' );
define( 'AUTH_SALT',        '*HW&sx9tDd*e%)!wH{1!4;qPC;-}9wa_uP6nBKgjIU6L%d{:bhLqm{Q$a,[$dXIB' );
define( 'SECURE_AUTH_SALT', '30<!{]&oRnf9A/L~qB2!e46PgZ]<UrOH#{5n!S:;@wC@9X4pxq3K{(f<j<E;d[=-' );
define( 'LOGGED_IN_SALT',   ',`I%N18Ob:2-8~<}`HP+p&,^WIJcPmEN8/EUABzd(RAI/A?6k/)jpur0TO>BwJ@,' );
define( 'NONCE_SALT',       '7x#;H8qyLbQsLU$(K%p&bnS3#j::miyO-4Z%5E/J^-RJE0:ld!Pp}#i!?jBG;$6;' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_test';

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

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
