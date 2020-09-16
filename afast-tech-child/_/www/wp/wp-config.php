<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clefs secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur 
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C'est votre hébergeur qui doit vous donner vos
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
define('DB_NAME', 'afast-tech');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'afast-tech');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'YySu0x1fAk');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         ')V6B,*?M/qZyyb=+WZZ-;8qrm:j>f^@KJt+@yFv/4b0|Jn2l-HEeEhH-VubdVp:U');
define('SECURE_AUTH_KEY',  ']L->ezp5Q4%Bcr]~(Ps$-tIH6b~y(o v|;cb>#I<$#&~$E-8+lr|@,UwyS^90[Tb');
define('LOGGED_IN_KEY',    'P(m)%.KU7C-r,+R*iF2}woPo^Whx|r|P&FAG? ,S&+)SilH+GvM6+sZx@V,|xT5&');
define('NONCE_KEY',        'tV7$6dhu.z{dAUk3W&_VY[MAjD&?=-7t+6J9r{MO>U8}IxBp.Yw,#b;f(KB3eQ,d');
define('AUTH_SALT',        'RV=PUCX9%q~~, ~@96b6D8bZ4C=5d_`]6|y:)uO#p2727o9+o;,cRyGneh-4yeEA');
define('SECURE_AUTH_SALT', 'l`{P-F)Dvz#mb$~U[+4L_s;g-[msB]/W|/&B2Q]F!$G*K`+PA^!TO(1S,yT$6*Zc');
define('LOGGED_IN_SALT',   '84C7mN8GYt{w$],}.+J^bdE7GV-Wn{^b+2Es6&h{PjSA!}PVAX2A<uzcz3$nHQ%Z');
define('NONCE_SALT',       'Lum3Wi*Jil-;K8BC/%SR/BTK__1Tx1?ihqP0y_]V|JZw`AYYKDL-)K;=KRo&*C?=');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique. 
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'wp_';

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

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');