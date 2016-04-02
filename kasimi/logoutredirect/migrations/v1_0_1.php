<?php

/**
 *
 * @package phpBB Extension - Logout Redirect
 * @copyright (c) 2016 kasimi
 * @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
 *
 */

namespace kasimi\logoutredirect\migrations;

class v1_0_1 extends \phpbb\db\migration\migration
{
	static public function depends_on()
	{
		return array(
			'\kasimi\logoutredirect\migrations\v1_0_0',
		);
	}

	public function update_data()
	{
		return array(
			array('config.update', array('kasimi.logoutredirect.version', '1.0.1')),
		);
	}
}
