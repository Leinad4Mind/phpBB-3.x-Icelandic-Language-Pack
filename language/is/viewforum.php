<?php
/**
*
* This file is part of the phpBB Forum Software package.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
* For full copyright and license information, please see
* the docs/CREDITS.txt file.
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

$lang = array_merge($lang, array(
	'ACTIVE_TOPICS'			=> 'Virkar umræður',
	'ANNOUNCEMENTS'			=> 'Tilkynningar',

	'FORUM_PERMISSIONS'		=> 'Réttindi svæðis',

	'ICON_ANNOUNCEMENT'		=> 'Tilkynning',
	'ICON_STICKY'			=> 'Límt',

	'LOGIN_NOTIFY_FORUM'	=> 'Þú varst látinn vita af þessu svæði, skráðu þig inn til að sjá það.',

	'MARK_TOPICS_READ'		=> 'Merkja allt lesið',

	'NEW_POSTS_HOT'			=> 'Nýir póstar [ Vinsælt ]',	// Not used anymore
	'NEW_POSTS_LOCKED'		=> 'Nýir póstar [ Læst ]',	// Not used anymore
	'NO_NEW_POSTS_HOT'		=> 'Engir nýir póstar [ Vinsælt ]',	// Not used anymore
	'NO_NEW_POSTS_LOCKED'	=> 'Engir nýir póstar [ Læst ]',	// Not used anymore
	'NO_READ_ACCESS'		=> 'You do not have the required permissions to view or read topics within this forum.',
	'NO_FORUMS_IN_CATEGORY'	=> 'This category has no forums.',
	'NO_UNREAD_POSTS_HOT'		=> 'No unread posts [ Popular ]',
	'NO_UNREAD_POSTS_LOCKED'	=> 'No unread posts [ Locked ]',

	'POST_FORUM_LOCKED'		=> 'Spjallsvæði er læst',

	'TOPICS_MARKED'			=> 'Umræður á þessu spjallborði hafa verið merktar lesnar.',

	'UNREAD_POSTS_HOT'		=> 'Unread posts [ Popular ]',
	'UNREAD_POSTS_LOCKED'	=> 'Unread posts [ Locked ]',

	'VIEW_FORUM'			=> 'Skoða spjallsvæði',
	'VIEW_FORUM_TOPICS'		=> array(
		1	=> '%d topic',
		2	=> '%d topics',
	),
));
