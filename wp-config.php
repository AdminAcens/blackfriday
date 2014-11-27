<?php
/** 
 * A configuração de base do WordPress
 *
 * Este ficheiro define os seguintes parâmetros: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, e ABSPATH. Pode obter mais informação
 * visitando {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} no Codex. As definições de MySQL são-lhe fornecidas pelo seu serviço de alojamento.
 *
 * Este ficheiro é usado para criar o script  wp-config.php, durante
 * a instalação, mas não tem que usar essa funcionalidade se não quiser. 
 * Salve este ficheiro como "wp-config.php" e preencha os valores.
 *
 * @package WordPress
 */

// ** Definições de MySQL - obtenha estes dados do seu serviço de alojamento** //
/** O nome da base de dados do WordPress */
define('DB_NAME', 'acens_blackfriday');

/** O nome do utilizador de MySQL */
define('DB_USER', 'root');

/** A password do utilizador de MySQL  */
define('DB_PASSWORD', '');

/** O nome do serviddor de  MySQL  */
define('DB_HOST', 'localhost');

/** O "Database Charset" a usar na criação das tabelas. */
define('DB_CHARSET', 'utf8');

/** O "Database Collate type". Se tem dúvidas não mude. */
define('DB_COLLATE', '');

/**#@+
 * Chaves Únicas de Autenticação.
 *
 * Mude para frases únicas e diferentes!
 * Pode gerar frases automáticamente em {@link https://api.wordpress.org/secret-key/1.1/salt/ Serviço de chaves secretas de WordPress.org}
 * Pode mudar estes valores em qualquer altura para invalidar todos os cookies existentes o que terá como resultado obrigar todos os utilizadores a voltarem a fazer login
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'vxlA+rGHm{mvWsD+;-B/9[u4y6]cjTW2rI53La1yA2p{K!@Y!5{h{PFRr/mf.f|3');
define('SECURE_AUTH_KEY',  '(imKrJyB!5es;LU%*tTuuQ~-U5ticQkaY|BToQ}bsveJ{5>XIrjY?t{<@EQ&`mte');
define('LOGGED_IN_KEY',    'c0h}CV=FvzsHronf=ehJ&9)Qo;F*Zu,7.LdFW&0fUE64e_,dm9d1D:k3e:e6MT;0');
define('NONCE_KEY',        '/[KCFMKG2`2)g69W43zO{i&L<M]K,v[5?Yu,2o* p U+W-9{w^P[42p)`*A#KaOH');
define('AUTH_SALT',        'p2q~UACi,V602E~nzI37RP@6I@JM~OP<wiW,<[w2JZn@O$jGsLYNF-Hga0JotI {');
define('SECURE_AUTH_SALT', '7X*twy;Vw%D3RhwFsrj.elD/Sw./,mS_adZq:h`r85*n-vNF;K;zwrgIy+g:!5{.');
define('LOGGED_IN_SALT',   'H.4wV}^4#irxTJF]E6;O#VUrkHK[A}LHOP4qf{/9UM4t}~TGk*K&XL|& .tu9,c]');
define('NONCE_SALT',       's&&8?mfo_96e#w?uBc1O(;%?vP(dvWfjJhB#y5#%h~=Xl}9 OjC$9_01B[7mMgXn');

/**#@-*/

/**
 * Prefixo das tabelas de WordPress.
 *
 * Pode suportar múltiplas instalações numa só base de dados, ao dar a cada
 * instalação um prefixo único. Só algarismos, letras e underscores, por favor!
 */
$table_prefix  = 'ac_';

/**
 * Idioma de Localização do WordPress, Inglês por omissão.
 *
 * Mude isto para localizar o WordPress. Um ficheiro MO correspondendo ao idioma
 * escolhido deverá existir na directoria wp-content/languages. Instale por exemplo
 * pt_PT.mo em wp-content/languages e defina WPLANG como 'pt_PT' para activar o
 * suporte para a língua portuguesa.
 */
define('WPLANG', 'pt_PT');

/**
 * Para developers: WordPress em modo debugging.
 *
 * Mude isto para true para mostrar avisos enquanto estiver a testar.
 * É vivamente recomendado aos autores de temas e plugins usarem WP_DEBUG
 * no seu ambiente de desenvolvimento.
 */
define('WP_DEBUG', false);

/* E é tudo. Pare de editar! */

/** Caminho absoluto para a pasta do WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Define as variáveis do WordPress e ficheiros a incluir. */
require_once(ABSPATH . 'wp-settings.php');
