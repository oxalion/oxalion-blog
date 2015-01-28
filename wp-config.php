<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clefs secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/Editing_wp-config.php Modifier
 * wp-config.php} (en anglais). C'est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d'installation. Vous n'avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'mononduloxa');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'mononduloxa');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'zY6EOfKq');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'mysql51-56.pro');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8');

/** Type de collation de la base de données.
  * N'y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clefs uniques d'authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n'importe quel moment, afin d'invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '=&Qqfux=>9+fCq1zys#-f{y^*KG#<,IAi:q|bR~[SQYq>qI:+bV50eykLA5,lxNF');
define('SECURE_AUTH_KEY',  '.CqP+=Ixq[3j8MJ$-:$d?wn}`saj1kl^P9L;W,dgw|$d`k+1|1ob<wj9(F?CUbsy');
define('LOGGED_IN_KEY',    'uetLMLS!@=9c+d[31WGhl-+cGI<(m=$G-S!tSuvfpa0&$rA?7ALbiT.*WlsaO.OV');
define('NONCE_KEY',        'zEGkVN+|Cwa%1uWpT[P._h]|z%h.u-G]G 0r* r=aq++?2|`YA@g]C>f^]`^$ibn');
define('AUTH_SALT',        'X)a>m,Uc=V#8,12J?~psxi|JOJc}c<okH;=*~$3 JwVs!h-u}{+hMQ=:{T/8{6!{');
define('SECURE_AUTH_SALT', 'z)NgrRv5i?{Wq6SYny}+#g974ya9e!3&^cV>hs.|Tj7.+K$Ch~Y0x+_wk:G*2}+V');
define('LOGGED_IN_SALT',   'b-pyTzt%PcU$(*fkQm ^0DuUfJMrbPTj-^|esYb3jelOZ^W4lhJs#q$P7$1FW5W?');
define('NONCE_SALT',       '4HF9y6V?r^Z-vxH&jUt<e$FSOCOSkKFHYyi$=KI!lX8h}/j+)dI{jsU[2#~)l/d|');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'oxa_wp_';

/**
 * Langue de localisation de WordPress, par défaut en Anglais.
 *
 * Modifiez cette valeur pour localiser WordPress. Un fichier MO correspondant
 * au langage choisi doit être installé dans le dossier wp-content/languages.
 * Par exemple, pour mettre en place une traduction française, mettez le fichier
 * fr_FR.mo dans wp-content/languages, et réglez l'option ci-dessous à "fr_FR".
 */
define('WPLANG', 'fr_FR');

/**
 * Pour les développeurs : le mode deboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant votre essais.
 * Il est fortemment recommandé que les développeurs d'extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 */
define('WP_DEBUG', false);

/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** On ne charge pas les CSS pour le plugin Contact Form 7 */
define ('WPCF7_LOAD_CSS', false);

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');