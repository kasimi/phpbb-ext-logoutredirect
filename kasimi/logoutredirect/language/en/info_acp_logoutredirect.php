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
	'LOGOUTREDIRECT_TITLE'				=> 'Logout Redirect',
	'LOGOUTREDIRECT_CONFIG'				=> 'Configuration',
	'LOGOUTREDIRECT_CONFIG_UPDATED'		=> '<strong>Logout Redirect Extension</strong><br />» Configuration updated',
	'LOGOUTREDIRECT_ENABLED'			=> 'Redirect users after logout',
	'LOGOUTREDIRECT_URL'				=> 'Redirect URL',
));
