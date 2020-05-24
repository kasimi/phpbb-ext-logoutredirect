<?php

/**
 *
 * @package phpBB Extension - Logout Redirect
 * @copyright (c) 2016 kasimi - https://kasimi.net
 * @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
 *
 */

namespace kasimi\logoutredirect\acp;

class logoutredirect_module
{
	public $u_action;

	function main($id, $mode)
	{
		global $config, $request, $template, $user;

		$user->add_lang('acp/common');
		$this->tpl_name = 'acp_logoutredirect';
		$this->page_title = $user->lang('LOGOUTREDIRECT_TITLE');

		add_form_key('acp_logoutredirect');

		if ($request->is_set_post('submit'))
		{
			if (!check_form_key('acp_logoutredirect'))
			{
				trigger_error($user->lang('FORM_INVALID') . adm_back_link($this->u_action));
			}

			$config->set('kasimi.logoutredirect.enabled', $request->variable('logoutredirect_enabled', 0));
			$config->set('kasimi.logoutredirect.url', $request->variable('logoutredirect_url', '', true));

			global $phpbb_log;
			$user_id = (empty($user->data)) ? ANONYMOUS : $user->data['user_id'];
			$user_ip = (empty($user->ip)) ? '' : $user->ip;
			$phpbb_log->add('admin', $user_id, $user_ip, 'LOGOUTREDIRECT_CONFIG_UPDATED');
			trigger_error($user->lang('CONFIG_UPDATED') . adm_back_link($this->u_action));
		}

		$template->assign_vars(array(
			'LOGOUTREDIRECT_VERSION'	=> $config['kasimi.logoutredirect.version'],
			'LOGOUTREDIRECT_ENABLED'	=> $config['kasimi.logoutredirect.enabled'],
			'LOGOUTREDIRECT_URL'		=> $config['kasimi.logoutredirect.url'],
			'U_ACTION'					=> $this->u_action,
		));
	}
}
