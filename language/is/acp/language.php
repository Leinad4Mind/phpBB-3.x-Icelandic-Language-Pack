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
	'ACP_FILES'						=> 'Tungumálaskrár stjórnborðs',
	'ACP_LANGUAGE_PACKS_EXPLAIN'	=> 'Hér geturðu sett upp og fjarlægt tungumálapakka. Sjálfgefinn tungumálapakki er merktur með stjörnu (*).',

	'DELETE_LANGUAGE_CONFIRM'		=> 'Ertu viss um að þú viljir eyða „%s“?',

	'INSTALLED_LANGUAGE_PACKS'		=> 'Uppsettir tungumálapakkar',

	'LANGUAGE_DETAILS_UPDATED'			=> 'Upplýsingar um tungumálið voru uppfærðar.',
	'LANGUAGE_PACK_ALREADY_INSTALLED'	=> 'Þessi tungumálapakki er þegar uppsettur.',
	'LANGUAGE_PACK_DELETED'				=> 'Tungumálapakkinn „%s“ var fjarlægður. Allir notendur sem notuðu þetta tungumál hafa verið færðir yfir á sjálfgefið tungumál spjallborðsins.',
	'LANGUAGE_PACK_DETAILS'				=> 'Upplýsingar um tungumálapakka',
	'LANGUAGE_PACK_INSTALLED'			=> 'Tungumálapakkinn „%s“ var settur upp.',
	'LANGUAGE_PACK_CPF_UPDATE'			=> 'Tungumálastrengir sérsniðinna notandareita voru afritaðir úr sjálfgefna tungumálinu. Breyttu þeim ef þörf krefur.',
	'LANGUAGE_PACK_ISO'					=> 'ISO',
	'LANGUAGE_PACK_LOCALNAME'			=> 'Heiti á eigin tungumáli',
	'LANGUAGE_PACK_NAME'				=> 'Heiti',
	'LANGUAGE_PACK_NOT_EXIST'			=> 'Valinn tungumálapakki er ekki til.',
	'LANGUAGE_PACK_USED_BY'				=> 'Notað af (vélmenni meðtalin)',
	'LANGUAGE_VARIABLE'					=> 'Tungumálabreyta',
	'LANG_AUTHOR'						=> 'Höfundur tungumálapakka',
	'LANG_ENGLISH_NAME'					=> 'Enskt heiti',
	'LANG_ISO_CODE'						=> 'ISO-kóði',
	'LANG_LOCAL_NAME'					=> 'Heiti á eigin tungumáli',

	'MISSING_LANG_FILES'		=> 'Tungumálaskrár vantar',
	'MISSING_LANG_VARIABLES'	=> 'Tungumálabreytur vantar',

	'NO_FILE_SELECTED'				=> 'Þú hefur ekki tilgreint tungumálaskrá.',
	'NO_LANG_ID'					=> 'Þú hefur ekki tilgreint tungumálapakka.',
	'NO_REMOVE_DEFAULT_LANG'		=> 'Ekki er hægt að fjarlægja sjálfgefna tungumálapakkann.<br />Ef þú vilt fjarlægja þennan tungumálapakka þarftu fyrst að breyta sjálfgefnu tungumáli spjallborðsins.',
	'NO_UNINSTALLED_LANGUAGE_PACKS'	=> 'Engir óuppsettir tungumálapakkar',

	'THOSE_MISSING_LANG_FILES'			=> 'Eftirfarandi tungumálaskrár vantar í tungumálamöppuna „%s“',
	'THOSE_MISSING_LANG_VARIABLES'		=> 'Eftirfarandi tungumálabreytur vantar í tungumálapakkann „%s“',

	'UNINSTALLED_LANGUAGE_PACKS'	=> 'Óuppsettir tungumálapakkar',

	'BROWSE_LANGUAGE_PACKS_DATABASE'	=> 'Skoða gagnagrunn tungumálapakka',
));
