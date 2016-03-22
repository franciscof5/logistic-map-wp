<?php
/** 
 * As configurações básicas do WordPress.
 *
 * Esse arquivo contém as seguintes configurações: configurações de MySQL, Prefixo de Tabelas,
 * Chaves secretas, Idioma do WordPress, e ABSPATH. Você pode encontrar mais informações
 * visitando {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. Você pode obter as configurações de MySQL de seu servidor de hospedagem.
 *
 * Esse arquivo é usado pelo script ed criação wp-config.php durante a
 * instalação. Você não precisa usar o site, você pode apenas salvar esse arquivo
 * como "wp-config.php" e preencher os valores.
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar essas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'logistic-map-wp');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'teste123');

/** nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Conjunto de caracteres do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer cookies existentes. Isto irá forçar todos os usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'd65C6y/mk nTT)>]~@{De@$56F=K{^S,Tf4=+(?o51Ji~?|gAhk%xzpWx-+L)wVY');
define('SECURE_AUTH_KEY',  '8Y-3<%Ql=@x,O}F)5qe?6gzM`3lK~b-mJ0s<>ZDRo$.OWLREqeaj(M(sga^iIhi4');
define('LOGGED_IN_KEY',    'LcUmhiN1<!Xr[r!=Soq=aLgHanh4ohIYu20<Num?)}9q0H095r?y9r|/K<:z`Twr');
define('NONCE_KEY',        '%QgR/9)k;2_z=`m=Pq{mT>Z -|KZhwd()U_~`xDRKYybaAb3v(iJAB-UIJHh1$c:');
define('AUTH_SALT',        'n+d~+Mhr,67jKcq0:[AAB3~R<Lw{#kx[D  be;9m#:S88@RO@+s+z+vkD8<Hpe4a');
define('SECURE_AUTH_SALT', 'y`&Xk1`ALy--v<9$$c>H$-<dQTzLB_sW^4QC~Cc66v| xK/u7P-C+:@2eg;TDpfR');
define('LOGGED_IN_SALT',   '+WbCe -SbJt2oF@^7!A[n}okoO},fiBl=.R26s%LqtE}|~S-~-&+5ZmEZO|srRX|');
define('NONCE_SALT',       '4K11dx8t WPD<P~r9=hp@@RiAGghqtHMKKNflQs&H.?8>P@wv}AOc]5.E/tAfPq#');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';


/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * altere isto para true para ativar a exibição de avisos durante o desenvolvimento.
 * é altamente recomendável que os desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
	
/** Configura as variáveis do WordPress e arquivos inclusos. */
require_once(ABSPATH . 'wp-settings.php');
