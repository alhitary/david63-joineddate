<?php
/**
*
* @package Joined Date Format Extension
* @copyright (c) 2015 david63
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
* Translated By : Bassel Taha Alhitary - www.alhitary.net
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	'CUSTOM_DATEFORMAT'				=> 'غير ذلك ...',

	'JOINED_DATE_FORMAT'			=> 'تنسيق تاريخ الإنضمام ',
	'JOINED_DATE_FORMAT_EXPLAIN'	=> 'تستطيع هنا تنسيق تاريخ "الإنضمام" الذي سيظهر في صفحة الموضوع , قائمة الأعضاء , الملف الشخصي للعضو.',
	'JOINED_DATE_LOG'				=> '<strong>تم تحديث "تنسيق تاريخ الإنضمام" ( إضافة )</strong>',

	'MEMBERLIST_FORMAT'				=> 'قائمة الأعضاء ',
	'MEMBERLIST_FORMAT_EXPLAIN'		=> 'تنسيق تاريخ "الإنضمام" في صفحة قائمة الأعضاء.<br />اترك الحقل فارغاً إذا تريد استخدام التنسيق الإفتراضي للعضو.',

	'PROFILE_FORMAT'				=> 'الملف الشخصي ',
	'PROFILE_FORMAT_EXPLAIN'		=> 'تنسيق تاريخ "الإنضمام" في صفحة الملف الشخصي.<br />اترك الحقل فارغاً إذا تريد استخدام التنسيق الإفتراضي للعضو.',

	'VIEWTOPIC_FORMAT'				=> 'صفحة الموضوع ',
	'VIEWTOPIC_FORMAT_EXPLAIN'		=> 'تنسيق تاريخ "الإنضمام" في صفحة الموضوع.<br />اترك الحقل فارغاً إذا تريد استخدام التنسيق الإفتراضي للعضو.',

	'dateformats'	=> array_merge($lang['dateformats'], array(
		'F Y'		=> 'يناير 2008',
		'd F Y'		=> '1 يناير 2008',
		'|F Y|'		=> 'اليوم / يناير 2008',
		'|d F Y|'	=> 'اليوم / 1 يناير 2008',
	)),
));
