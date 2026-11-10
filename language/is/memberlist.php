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
	'ABOUT_USER'			=> 'Stillingar',
	'ACTIVE_IN_FORUM'		=> 'Virkasta spjallsvæðið',
	'ACTIVE_IN_TOPIC'		=> 'Virkasta umræðan',
	'ADD_FOE'				=> 'Setja sem óvin',
	'ADD_FRIEND'			=> 'Setja sem vin',
	'AFTER'					=> 'Eftir',

	'ALL'					=> 'Allt',

	'BEFORE'				=> 'Fyrir',

	'CC_SENDER'				=> 'Send a copy of this email to yourself.',
	'CONTACT_ADMIN'			=> 'Contact a Board Administrator',

	'DEST_LANG'				=> 'Tungumál',
	'DEST_LANG_EXPLAIN'		=> 'Veldu tungumál (ef mögulegt) fyrir móttakanda skilaboðanna.',

	'EDIT_PROFILE'			=> 'Breyta prófíl',

	'EMAIL_BODY_EXPLAIN'	=> 'This message will be sent as plain text, do not include any HTML or BBCode. The return address for this message will be set to your email address.',
	'EMAIL_DISABLED'		=> 'Sorry but all email related functions have been disabled.',
	'EMAIL_SENT'			=> 'The email has been sent.',
	'EMAIL_TOPIC_EXPLAIN'	=> 'This message will be sent as plain text, do not include any HTML or BBCode. Please note that the topic information is already included in the message. The return address for this message will be set to your email address.',
	'EMPTY_ADDRESS_EMAIL'	=> 'You must provide a valid email address for the recipient.',
	'EMPTY_MESSAGE_EMAIL'	=> 'Þú verður að skrifa skilaboð sem á að senda.',
	'EMPTY_MESSAGE_IM'		=> 'Þú verður að skrifa skilaboð sem á að senda.',
	'EMPTY_NAME_EMAIL'		=> 'Þú verður að setja rétt nafn móttakanda.',
	'EMPTY_SENDER_EMAIL'	=> 'You must provide a valid email address.',
	'EMPTY_SENDER_NAME'		=> 'You must provide a name.',
	'EMPTY_SUBJECT_EMAIL'	=> 'You must specify a subject for the email.',
	'EQUAL_TO'				=> 'Jafngildir',

	'FIND_USERNAME_EXPLAIN'	=> 'Notaðu þetta form til að leita að ákveðnum notendum. Þú þarft ekki að skrifa í alla reitina. Til að leita að hluta úr nafni notarðu *.  Dagsetningar verða að vera á sniðinu ÁÁÁÁ-MM-DD, t.d. <samp>2004-02-29</samp>.  Merktu við viðeigandi notendanöfn (ef boðið er upp það í forminu) og smelltu á Velja merkta hnappinn til að fara til baka.',
	'FLOOD_EMAIL_LIMIT'		=> 'You cannot send another email at this time. Please try again later.',

	'GROUP_LEADER'			=> 'Stjórnandi hóps',

	'HIDE_MEMBER_SEARCH'	=> 'Fela notendaleit',

	'IM_ADD_CONTACT'		=> 'Bæta við tengilið',
	'IM_DOWNLOAD_APP'		=> 'Sækja forrit',
	'IM_JABBER'				=> 'Athugaðu að notendur geta ráðið hverjum þeir fá skilaboð frá, og þú ert örugglega ekki á þeim lista.',
	'IM_JABBER_SUBJECT'		=> 'Þetta eru sjálfvirk skilaboð, EKKI SENDA SVAR! Skilaboð frá %1$s á %2$s.',
	'IM_MESSAGE'			=> 'Þín skilaboð',
	'IM_NAME'				=> 'Þitt nafn',
	'IM_NO_DATA'			=> 'Engar upplýsingar fundust um þennan notanda.',
	'IM_NO_JABBER'			=> 'Því miður, beinar sendingar milli Jabber notenda ekki leyfðar.  Þú verður að nota Jabber hugbúnað til að hafa samband við viðkomandi',
	'IM_RECIPIENT'			=> 'Móttakandi',
	'IM_SEND'				=> 'Senda skilaboð',
	'IM_SEND_MESSAGE'		=> 'Senda skilaboð',
	'IM_SENT_JABBER'		=> 'Skilaboðin þín til %1$s hafa verið send.',
	'IM_USER'				=> 'Senda skilaboð',

	'LAST_ACTIVE'				=> 'Síðast virkur',
	'LESS_THAN'					=> 'Minna en',
	'LIST_USERS'				=> array(
		1	=> '%d user',
		2	=> '%d users',
	),
	'LOGIN_EXPLAIN_TEAM'		=> 'Þú verður að vera skráður inn til að sjá hópa.',
	'LOGIN_EXPLAIN_MEMBERLIST'	=> 'Þú verður að vera skráður inn til að sjá meðlimalista.',
	'LOGIN_EXPLAIN_SEARCHUSER'	=> 'Þú verður að vera skráður inn til að leita að notendum.',
	'LOGIN_EXPLAIN_VIEWPROFILE'	=> 'Þú verður að vera skráður inn til að skoða upplýsingar.',

	'MANAGE_GROUP'			=> 'Manage Group',
	'MORE_THAN'				=> 'Meira en',

	'NO_CONTACT_FORM'		=> 'The board administrator contact form has been disabled.',
	'NO_CONTACT_PAGE'		=> 'The board administrator contact page has been disabled.',
	'NO_EMAIL'				=> 'You are not permitted to send email to this user.',
	'NO_VIEW_USERS'			=> 'Þú hefur ekki réttindi til að skoða notendalistann eða upplýsingar.',

	'ORDER'					=> 'Röðun',
	'OTHER'					=> 'Annað',

	'POST_IP'				=> 'Sent inn frá IP/Léni',

	'REAL_NAME'				=> 'Nafn móttakanda',
	'RECIPIENT'				=> 'Móttakandi',
	'REMOVE_FOE'			=> 'Fjarlægja óvin',
	'REMOVE_FRIEND'			=> 'Fjarlægja vin',

	'SELECT_MARKED'			=> 'Velja merkt',
	'SELECT_SORT_METHOD'	=> 'Velja flokkunaraðferð',
	'SENDER_EMAIL_ADDRESS'	=> 'Your email address',
	'SENDER_NAME'			=> 'Your name',
	'SEND_ICQ_MESSAGE'		=> 'Senda ICQ skilaboð',
	'SEND_IM'				=> 'Skyndiskilaboð',
	'SEND_JABBER_MESSAGE'	=> 'Senda Jabber skilaboð',
	'SEND_MESSAGE'			=> 'Skilaboð',
	'SEND_YIM_MESSAGE'		=> 'Senda YIM skilaboð',
	'SORT_EMAIL'			=> 'Email',
	'SORT_LAST_ACTIVE'		=> 'Síðast Virkur',
	'SORT_POST_COUNT'		=> 'Póstfjölda',

	'USERNAME_BEGINS_WITH'	=> 'Notandanafn byrjar á',
	'USER_ADMIN'			=> 'Administer user',
	'USER_BAN'				=> 'Banna',
	'USER_FORUM'			=> 'Staða notanda',
	'USER_LAST_REMINDED'	=> array(
		0		=> 'No reminder sent at this time',
		1		=> '%1$d reminder sent<br />» %2$s',
		2		=> '%1$d reminder sent<br />» %2$s',
	),
	'USER_ONLINE'			=> 'Tengdur',
	'USER_PRESENCE'			=> 'Viðvera',
	'USERS_PER_PAGE'		=> 'Users per page',

	'VIEWING_PROFILE'		=> 'Sýni notanda - %s',
	'VIEW_FACEBOOK_PROFILE'	=> 'View Facebook Profile',
	'VIEW_SKYPE_PROFILE'	=> 'View Skype Profile',
	'VIEW_TWITTER_PROFILE'	=> 'View X Profile',
	'VIEW_YOUTUBE_PROFILE'	=> 'View YouTube Profile',
));
