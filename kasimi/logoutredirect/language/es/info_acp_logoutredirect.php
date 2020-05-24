<?php

/**
 *
 * @package phpBB Extension - Logout Redirect
 * @copyright (c) 2016 kasimi - https://kasimi.net
 * @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
 *
 */

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'LOGOUTREDIRECT_TITLE'				=> 'Redirección de Salida',
	'LOGOUTREDIRECT_CONFIG'				=> 'Configuración',
	'LOGOUTREDIRECT_CONFIG_UPDATED'		=> '<strong>Extensión Redirección de Salida</strong><br />» Configuración actualizada',
	'LOGOUTREDIRECT_ENABLED'			=> 'Redirigir a los usuarios después de cerrar la sesión',
	'LOGOUTREDIRECT_URL'				=> 'URL de redirección',
));
