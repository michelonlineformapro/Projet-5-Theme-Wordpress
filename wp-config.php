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
define( 'DB_NAME', 'wordpress2' );

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
define( 'AUTH_KEY',         'Zr<l=[GlvYqPEE?y2XQo!}4=JPJ:0W*6RlDvpD%jk4vrly+Q7)Ux7QO9:-*_ehU;' );
define( 'SECURE_AUTH_KEY',  'Pzm05nCB6|{*7XruFW!:57~TGT``)bUqhv=BpQTw``+Tbnp=:Bx)2Z=Ds>y[0c; ' );
define( 'LOGGED_IN_KEY',    'I[zPx]_1X7KA;Dy][7hF}Y?,A~QlNR=-0h`!7tqi0F_ew` FV{r0-E#?OP*YZ]9h' );
define( 'NONCE_KEY',        'HzkdPia6@rOkL;61$o+r}j,zyqz*>}AOP=p%b?_OuZ{e6qyF6U>h.J4^@foj+s56' );
define( 'AUTH_SALT',        'f^CztR/rPO2(nM6gF.{eL)Ehv j22v;i ly=:K+Y(FP2IjVDFs7dxa&byeU1s{9*' );
define( 'SECURE_AUTH_SALT', '~~a(>RI5KpQ{5[MiDo-KGP^ypYnViQgYOx64<LuFT,ac3a1T..|n-$hM~{sx1-}=' );
define( 'LOGGED_IN_SALT',   'Wjnk>7hacmK/DbDG8CD{/h/Uh|8qK^YnjlS`TwtY|FL/hx&xK$fR3-6^306}HK`X' );
define( 'NONCE_SALT',       '56}5?;Cb.XfVePz@V-u1/V-)[y/!x1@MYq{G~.sR48{;K/G$??^_ D2Ys?p5=W1s' );
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
