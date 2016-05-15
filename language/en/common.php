<?php
/**
*
* @package Limit Posts Per User
* @copyright (c) 2015 dbk (budiselic@vodafone.de)
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
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
	'LPPU_ERROR_DAY'	=> 'You have already started %1$s new post(s) in this forum today.<br />You have to wait until tomorrow before you can start a new post.',
	'LPPU_ERROR_WEEK'	=> 'You have already started %1$s new post(s) in this forum this week.<br />You have to wait until next week before you can start a new post.',
	'LPPU_ERROR_MONTH'	=> 'You have already started %1$s new post(s) in this forum this month.<br />You have to wait until next month before you can start a new post.',
    'LPPU_ERROR_BACK_TO_FORUM'	=> '<br /><br /><a href="viewforum.php?f=%1$s">Click here to return to the forum</a>',
));