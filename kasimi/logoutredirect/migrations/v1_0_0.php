<?php

/**
 *
 * @package phpBB Extension - Logout Redirect
 * @copyright (c) 2016 kasimi - https://kasimi.net
 * @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
 *
 */

namespace kasimi\logoutredirect\migrations;

class v1_0_0 extends \phpbb\db\migration\migration
{
	public function update_data()
	{
		return array(
			// Add config entries
			array('config.add', array('kasimi.logoutredirect.version', '1.0.0')),
			array('config.add', array('kasimi.logoutredirect.enabled', 0)),
			array('config.add', array('kasimi.logoutredirect.url', '')),

			// Add ACP module
			array('module.add', array(
				'acp',
				'ACP_CAT_DOT_MODS',
				'LOGOUTREDIRECT_TITLE'
			)),

			array('module.add', array(
				'acp',
				'LOGOUTREDIRECT_TITLE',
				array(
					'module_basename'	=> '\kasimi\logoutredirect\acp\logoutredirect_module',
					'auth'				=> 'ext_kasimi/logoutredirect && acl_a_board',
					'modes'				=> array('settings'),
				),
			)),
		);
	}
}
