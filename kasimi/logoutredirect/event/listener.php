<?php

/**
 *
 * @package phpBB Extension - Logout Redirect
 * @copyright (c) 2016 kasimi
 * @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
 *
 */

namespace kasimi\logoutredirect\event;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class listener implements EventSubscriberInterface
{
	/* @var \phpbb\config\config */
	protected $config;

	/* @var boolean */
	protected $is_first_user_setup = true;

	/** @var bool */
	private $is_logout = false;

	/**
 	 * Constructor
	 *
	 * @param \phpbb\config\config $config
	 */
	public function __construct(\phpbb\config\config $config)
	{
		$this->config = $config;
	}

	/**
	 * Register hooks
	 */
	static public function getSubscribedEvents()
	{
		return array(
			'core.session_kill_after' => 'session_kill_after',
			'core.functions.redirect' => 'redirect',
		);
	}

	/**
	 * @param $event
	 */
	public function session_kill_after($event)
	{
		$this->is_logout = true;
	}

	/**
	 * @param $event
	 */
	public function redirect($event)
	{
		if ($this->is_logout && $this->config['kasimi.logoutredirect.enabled'])
		{
			$event['url'] = $this->config['kasimi.logoutredirect.url'];
			$this->is_logout = false;
		}
	}
}
