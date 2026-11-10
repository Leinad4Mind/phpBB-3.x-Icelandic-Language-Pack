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
	'APPROVE'								=> 'Approve',
	'ATTACHMENT'						=> 'Viðhengi',
	'ATTACHMENT_FUNCTIONALITY_DISABLED'	=> 'Viðhengi eru ekki leyfð.',

	'BOOKMARK_ADDED'		=> 'Umræðan hefur verið merkt.',
	'BOOKMARK_ERR'			=> 'Ekki tókst að merkja umræðuna. Vinsamlegast reyndu aftur.',
	'BOOKMARK_REMOVED'		=> 'Fjarlægði merki.',
	'BOOKMARK_TOPIC'		=> 'Merkja umræðu',
	'BOOKMARK_TOPIC_REMOVE'	=> 'Fjarlægja úr merkjunum',
	'BUMPED_BY'				=> 'Síðast færð upp af %1$s þann %2$s.',
	'BUMP_TOPIC'			=> 'Færa umræðu upp',

	'DELETE_TOPIC'			=> 'Eyða umræðu',
	'DELETED_INFORMATION'	=> 'Deleted by %1$s on %2$s',
	'DISAPPROVE'					=> 'Disapprove',
	'DOWNLOAD_NOTICE'		=> 'Þú hefur ekki næg réttindi til að skoða skrárnar í þessum póst.',

	'EDITED_TIMES_TOTAL'	=> array(
		1	=> 'Last edited by %2$s on %3$s, edited %1$d time in total.',
		2	=> 'Last edited by %2$s on %3$s, edited %1$d times in total.',
	),
	'EMAIL_TOPIC'			=> 'Email topic',
	'ERROR_NO_ATTACHMENT'	=> 'Valin skrá er ekki lengur til.',

	'FILE_NOT_FOUND_404'	=> 'Skráin <strong>%s</strong> er ekki til.',
	'FORK_TOPIC'			=> 'Afrita umræðu',
	'FULL_EDITOR'			=> 'Full Editor &amp; Preview',

	'LINKAGE_FORBIDDEN'		=> 'Þú hefur ekki réttindi til að skoða, sækja eða gera hlekki á þennan vef.',
	'LOGIN_NOTIFY_TOPIC'	=> 'Þú varst látinn vita af þessari umræðu, skráðu þig inn til að sjá hana.',
	'LOGIN_VIEWTOPIC'		=> 'Spjallborðið krefst þess að þú skráir þig inn til að lesa þessa umræðu.',

	'MAKE_ANNOUNCE'				=> 'Breyta í „Tilkynningu“',
	'MAKE_GLOBAL'				=> 'Breyta í „Almenna tilkynningu“',
	'MAKE_NORMAL'				=> 'Breyta í „Venjulega umræðu“',
	'MAKE_STICKY'				=> 'Breyta í „Límt“',
	'MAX_OPTIONS_SELECT'		=> array(
		1	=> 'You may select <strong>%d</strong> option',
		2	=> 'You may select up to <strong>%d</strong> options',
	),
	'MISSING_INLINE_ATTACHMENT'	=> 'Skráin <strong>%s</strong> er ekki lengur aðgengileg',
	'MOVE_TOPIC'				=> 'Færa umræðu',

	'NO_ATTACHMENT_SELECTED'=> 'Þú hefur ekki valið skrá til að sækja eða skoða.',
	'NO_NEWER_TOPICS'		=> 'Það eru engar nýrri umræður í þessu svæði.',
	'NO_OLDER_TOPICS'		=> 'Það eru engar eldri umræður á þessu svæði.',
	'NO_UNREAD_POSTS'		=> 'Það eru engir ólesnir póstar í þessu svæði.',
	'NO_VOTE_OPTION'		=> 'Þú verður að velja valmöguleika þegar þú kýst.',
	'NO_VOTES'				=> 'Engin atkvæði',
	'NO_AUTH_PRINT_TOPIC'	=> 'You are not authorised to print topics.',

	'POLL_ENDED_AT'			=> 'Skoðanakönnunin endaði þann %s',
	'POLL_RUN_TILL'			=> 'Skoðanakönnunin er virk til %s',
	'POLL_VOTED_OPTION'		=> 'Þú valdir þennann valkost',
	'POST_DELETED_RESTORE'	=> 'This post has been deleted. It can be restored.',
	'PRINT_TOPIC'			=> 'Prenthamur',

	'QUICK_MOD'				=> 'Flýtiverkfæri póststjóra',
	'QUICKREPLY'			=> 'Quick Reply',

	'REPLY_TO_TOPIC'		=> 'Svara umræðu',
	'RESTORE'				=> 'Restore',
	'RESTORE_TOPIC'			=> 'Restore topic',
	'RETURN_POST'			=> '%sFara aftur í póstinn%s',

	'SUBMIT_VOTE'			=> 'Staðfesta atkvæði',

	'TOPIC_TOOLS'			=> 'Topic tools',
	'TOTAL_VOTES'			=> 'Samtals atkvæði',

	'UNLOCK_TOPIC'			=> 'Taka lás af umræðu',

	'VIEW_INFO'				=> 'Upplýsingar um póst',
	'VIEW_NEXT_TOPIC'		=> 'Næsta umræða',
	'VIEW_PREVIOUS_TOPIC'	=> 'Fyrri umræða',
	'VIEW_QUOTED_POST'		=> 'View quoted post',
	'VIEW_RESULTS'			=> 'Sýna niðurstöður',
	'VIEW_TOPIC_POSTS'		=> array(
		1	=> '%d post',
		2	=> '%d posts',
	),
	'VIEW_UNREAD_POST'		=> 'Fyrsti ólesni pósturinn',
	'VOTE_SUBMITTED'		=> 'Atkvæði þitt hefur verið móttekið.',
	'VOTE_CONVERTED'		=> 'Ekki er hægt að breyta atkvæðum í könnunum sem hafa verið fluttar.',

));
