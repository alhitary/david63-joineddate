<?php
/**
*
* @package Joined Date Format Extension
* @copyright (c) 2015 david63
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace david63\joineddate\acp;

class joineddate_options_info
{
	function module()
	{
		return array(
			'filename'	=> '\david63\joineddate\acp\logsearches_options_module',
			'title'		=> 'JOINED_DATE_FORMAT',
			'modes'		=> array(
				'main'	=> array('title' => 'JOINED_DATE_FORMAT', 'auth' => 'ext_david63/joineddate && acl_a_board', 'cat' => array('JOINED_DATE_FORMAT')),
			),
		);
	}
}
