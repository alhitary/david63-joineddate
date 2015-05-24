<?php
/**
*
* @package Joined Date Format Extension
* @copyright (c) 2015 david63
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace david63\joineddate\event;

/**
* @ignore
*/
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
* Event listener
*/
class listener implements EventSubscriberInterface
{
	/** @var \phpbb\config\config */
	protected $config;

	/** @var \phpbb\user */
	protected $user;

	/**
	* Constructor for listener
	*
	* @param \phpbb\config\config		$config		Config object
	* @param \phpbb\user                $user		User object
	* @access public
	*/
	public function __construct(\phpbb\config\config $config, \phpbb\user $user)
	{
		$this->config	= $config;
		$this->user		= $user;
	}

	/**
	* Assign functions defined in this class to event listeners in the core
	*
	* @return array
	* @static
	* @access public
	*/
	static public function getSubscribedEvents()
	{
		return array(
			'core.acp_board_config_edit_add'	=> 'acp_board_settings',
			'core.user_setup'					=> 'load_language_on_setup',
			'core.viewtopic_cache_user_data'	=> 'modify_joined_date',
		);
	}

	public function acp_board_settings($event)
	{
		if ($event['mode'] == 'settings')
		{
			$new_display_var = array(
				'title'	=> $event['display_vars']['title'],
				'vars'	=> array(),
			);

			foreach ($event['display_vars']['vars'] as $key => $content)
			{
				$new_display_var['vars'][$key] = $content;
				if ($key == 'default_dateformat')
				{
					$new_display_var['vars']['joined_dateformat'] = array(
						'lang'		=> 'JOINED_DATE_FORMAT',
						'validate'	=> 'string',
						'type'		=> 'text:10:10',
						'explain' 	=> true,
					);
				}
			}

			$event->offsetSet('display_vars', $new_display_var);
		}
	}

	/**
	* Load common joineddate language files during user setup
	*
	* @param object $event The event object
	* @return null
	* @access public
	*/
	public function load_language_on_setup($event)
	{
		$lang_set_ext	= $event['lang_set_ext'];
		$lang_set_ext[]	= array(
			'ext_name' => 'david63/joineddate',
			'lang_set' => 'common',
		);
		$event['lang_set_ext'] = $lang_set_ext;
	}

	public function modify_joined_date($event)
	{
		$user_cache_data	= $event['user_cache_data'];
		$row				= $event['row'];

		$user_cache_data['joined'] = $this->user->format_date($row['user_regdate'], $this->config['joined_dateformat']);

		$event->offsetSet('user_cache_data', $user_cache_data);
	}





}
