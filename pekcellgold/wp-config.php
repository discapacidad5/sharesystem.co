<?php
/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'pekcellgold');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'pekcellgold');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'P3kce11!@');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'pekcellgold.db.11569157.hostedresource.com');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'y5m?W<AFmK%l6-|AYKA49O5jn~)w[q0(uEidi$WW`_oanGM=C=`L9HQ-ItKp>t Y');
define('SECURE_AUTH_KEY', '27^Oyz+CC`OZRk/?[|xQ!uN{8_c=sD.^-cIVEiLo*Hy4e:iV;NSb5c$_|tsinl^#');
define('LOGGED_IN_KEY', '5oU@Rz)2*a1Zn`5-~T=Q={Ht`Y~Z;dscr%j}@e+vxs}+yi5gRpW{>0D:.-gA,MK>');
define('NONCE_KEY', 'd;9T^gWX|Pkf;E%O8C-aA!2z0!1#bxp^a5fS-r++f>-X?R0d~P_/W{n^@%/~^bZV');
define('AUTH_SALT', 'bYb4U|/H6NLV[mbnE.jgm6,a;.s.^u<Z~(Wr{;3-p>h)z@8A Rdg:dyhJhy]5LIs');
define('SECURE_AUTH_SALT', 't|=|vJ-Q|A1W4s?wZ%GiTOB$-!G0mJb +H?Hxnqb=3*cAbIT(CR.qiXE.]@1zGm:');
define('LOGGED_IN_SALT', '@<lohRep6Z/Q^.[Krztc:}(C?*2$-[8=73|E.oi|qMm2(kV05vt4CI!.Nu^+1S#X');
define('NONCE_SALT', '1:Q2<O6+<xf#?Mg5Zcb.wTHB25%+H[MJlE)]NY$2;r~65k>YK)P%zi6-]1&mex$C');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

