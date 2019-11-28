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
define( 'DB_NAME', 'monartisant' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'albrecht-stephanie' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'chaton' );

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
define( 'AUTH_KEY',         'T3b><KlM1`A^ZfY?<LjVM_aBU8I&#t>t3JT0;g[0>b#1z:9lVeFCN{~:-T_*+:3i' );
define( 'SECURE_AUTH_KEY',  '8S t|q6c@) ]GG([b?u{PoeO-W@3-^Djd1qp4ZFeu9?_n2P><PUR.yai>~&ns|CO' );
define( 'LOGGED_IN_KEY',    'xj5l&uJ%f1%EJ/Ir1;c)<+{_=:yvYh<&Lc z8o>>DO!{}Xp]oxdls2>mCm E|0j2' );
define( 'NONCE_KEY',        ' zsTZ])kI}aoAQ#_C?h]]3A%sg#v!Wo`];w>j:iKGLAvl<AF)..AT9RO{7tiX0<f' );
define( 'AUTH_SALT',        ' .B)=.|Z&W$.-?pL.|t%RD@+xoSMYM)*wn2/f%Mpz%pWg`Z9K%S:;a,7Q_z=Qp@m' );
define( 'SECURE_AUTH_SALT', 'YCA,_GF!a-%*2s]UM^w)Xdb`a<V2l23.*8 &{*vWy fVFBuPC>>=-5oO/P0TUVI&' );
define( 'LOGGED_IN_SALT',   'z|ZE`3J3!$=_Mb@Q*zg^-./oO&Q8.f;K R?0j,/Z/>4Y[H+Ih,O)w3L&9qb$TZsh' );
define( 'NONCE_SALT',       '$YJ,kAC++[{/rxz!91h0j~67d.oE&:Kg+;_38<H}t]Q{un]mWxor)1W}1Q$|d.d^' );
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
