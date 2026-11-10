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
	'ACP_MODULE_MANAGEMENT_EXPLAIN'	=> 'Hér getur þú stjórnað öllum tegundum eininga. Athugaðu að stjórnborðið hefur þriggja þrepa valmyndarskipan (flokkur → flokkur → eining), en hinar valmyndirnar hafa tveggja þrepa skipan (flokkur → eining) sem verður að varðveita. Hafðu einnig í huga að þú getur útilokað sjálfan þig ef þú gerir óvirkar eða eyðir einingunum sem sjá um einingastjórnunina.',
	'ADD_MODULE'					=> 'Bæta við einingu',
	'ADD_MODULE_CONFIRM'			=> 'Ertu viss um að þú viljir bæta valinni einingu við í völdum ham?',
	'ADD_MODULE_TITLE'				=> 'Bæta við einingu',

	'CANNOT_REMOVE_MODULE'	=> 'Ekki er hægt að fjarlægja eininguna þar sem henni tilheyra undireiningar. Fjarlægðu eða færðu allar undireiningar áður en þú framkvæmir þessa aðgerð.',
	'CATEGORY'				=> 'Flokkur',
	'CHOOSE_MODE'			=> 'Veldu einingaham',
	'CHOOSE_MODE_EXPLAIN'	=> 'Veldu haminn sem einingin notar.',
	'CHOOSE_MODULE'			=> 'Veldu einingu',
	'CHOOSE_MODULE_EXPLAIN'	=> 'Veldu skrána sem þessi eining kallar á.',
	'CREATE_MODULE'			=> 'Stofna nýja einingu',

	'DEACTIVATED_MODULE'	=> 'Óvirk eining',
	'DELETE_MODULE'			=> 'Eyða einingu',
	'DELETE_MODULE_CONFIRM'	=> 'Ertu viss um að þú viljir fjarlægja þessa einingu?',

	'EDIT_MODULE'			=> 'Breyta einingu',
	'EDIT_MODULE_EXPLAIN'	=> 'Hér getur þú tilgreint stillingar sem eiga sérstaklega við þessa einingu.',

	'HIDDEN_MODULE'			=> 'Falin eining',

	'MODULE'					=> 'Eining',
	'MODULE_ADDED'				=> 'Einingunni var bætt við.',
	'MODULE_DELETED'			=> 'Einingin var fjarlægð.',
	'MODULE_DISPLAYED'			=> 'Eining birt',
	'MODULE_DISPLAYED_EXPLAIN'	=> 'Ef þú vilt ekki birta þessa einingu en vilt samt nota hana skaltu velja nei.',
	'MODULE_EDITED'				=> 'Einingunni var breytt.',
	'MODULE_ENABLED'			=> 'Eining virk',
	'MODULE_LANGNAME'			=> 'Tungumálaheiti einingar',
	'MODULE_LANGNAME_EXPLAIN'	=> 'Sláðu inn birtingarheiti einingarinnar. Notaðu tungumálafasta ef heitið kemur úr tungumálaskrá.',
	'MODULE_TYPE'				=> 'Tegund einingar',

	'NO_CATEGORY_TO_MODULE'	=> 'Ekki er hægt að breyta flokki í einingu. Fjarlægðu eða færðu allar undireiningar áður en þú framkvæmir þessa aðgerð.',
	'NO_MODULE'				=> 'Engin eining fannst.',
	'NO_MODULE_ID'			=> 'Ekkert auðkenni einingar var tilgreint.',
	'NO_MODULE_LANGNAME'	=> 'Ekkert tungumálaheiti einingar var tilgreint.',
	'NO_PARENT'				=> 'Engin yfireining',

	'PARENT'				=> 'Yfireining',
	'PARENT_NO_EXIST'		=> 'Yfireiningin er ekki til.',

	'SELECT_MODULE'			=> 'Veldu einingu',
));
