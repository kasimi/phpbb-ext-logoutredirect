<?php

/**
 *
 * @package phpBB Extension - Logout Redirect
 * @copyright (c) 2016 kasimi - https://kasimi.net
 * @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
 *
 */

namespace kasimi\logoutredirect\acp;

class logoutredirect_info
{
	function module()
	{
		return array(
			'filename'	=> '\kasimi\logoutredirect\acp\logoutredirect_module',
			'title'		=> 'LOGOUTREDIRECT_TITLE',
			'modes'		=> array(
				'settings' => array(
					'title'	=> 'LOGOUTREDIRECT_CONFIG',
					'auth'	=> 'ext_kasimi/logoutredirect && acl_a_board',
					'cat'	=> array('LOGOUTREDIRECT_TITLE')
				),
			),
		);
	}
}
