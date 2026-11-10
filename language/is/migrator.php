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
	'CONFIG_NOT_EXIST'					=> 'Stillingin „%s“ er óvænt ekki til.',

	'GROUP_NOT_EXIST'					=> 'Hópurinn „%s“ er óvænt ekki til.',

	'MIGRATION_APPLY_DEPENDENCIES'		=> 'Beita háðum yfirfærslum %s.',
	'MIGRATION_DATA_DONE'				=> 'Gögn sett upp: %1$s; tími: %2$.2f sekúndur',
	'MIGRATION_DATA_IN_PROGRESS'		=> 'Set gögn upp: %1$s; tími: %2$.2f sekúndur',
	'MIGRATION_DATA_RUNNING'			=> 'Set gögn upp: %s.',
	'MIGRATION_EFFECTIVELY_INSTALLED'	=> 'Yfirfærslan er þegar í raun uppsett og var sleppt: %s',
	'MIGRATION_EXCEPTION_ERROR'			=> 'Eitthvað fór úrskeiðis við beiðnina og undantekningu var kastað. Reynt var eftir bestu getu að afturkalla breytingar sem gerðar voru áður en villan kom upp, en þú ættir að athuga hvort villur séu á spjallborðinu.',
	'MIGRATION_NOT_FULFILLABLE'			=> 'Ekki er hægt að framkvæma yfirfærsluna „%1$s“; yfirfærsluna „%2$s“ vantar.',
	'MIGRATION_NOT_INSTALLED'			=> 'Yfirfærslan „%s“ er ekki uppsett.',
	'MIGRATION_NOT_VALID'				=> '%s er ekki gild yfirfærsla.',
	'MIGRATION_SCHEMA_DONE'				=> 'Skema sett upp: %1$s; tími: %2$.2f sekúndur',
	'MIGRATION_SCHEMA_IN_PROGRESS'		=> 'Set skema upp: %1$s; tími: %2$.2f sekúndur',
	'MIGRATION_SCHEMA_RUNNING'			=> 'Set skema upp: %s.',

	'MIGRATION_REVERT_DATA_DONE'		=> 'Gögn afturkölluð: %1$s; tími: %2$.2f sekúndur',
	'MIGRATION_REVERT_DATA_IN_PROGRESS'	=> 'Afturkalla gögn: %1$s; tími: %2$.2f sekúndur',
	'MIGRATION_REVERT_DATA_RUNNING'		=> 'Afturkalla gögn: %s.',
	'MIGRATION_REVERT_SCHEMA_DONE'		=> 'Skema afturkallað: %1$s; tími: %2$.2f sekúndur',
	'MIGRATION_REVERT_SCHEMA_IN_PROGRESS'	=> 'Afturkalla skema: %1$s; tími: %2$.2f sekúndur',
	'MIGRATION_REVERT_SCHEMA_RUNNING'	=> 'Afturkalla skema: %s.',

	'MIGRATION_INVALID_DATA_MISSING_CONDITION'		=> 'Yfirfærsla er ógild. Hjálparfall if-setningar vantar skilyrði.',
	'MIGRATION_INVALID_DATA_MISSING_STEP'			=> 'Yfirfærsla er ógild. Hjálparfall if-setningar vantar gilt kall í yfirfærsluskref.',
	'MIGRATION_INVALID_DATA_CUSTOM_NOT_CALLABLE'	=> 'Yfirfærsla er ógild. Ekki var hægt að kalla á sérsniðna fallið.',
	'MIGRATION_INVALID_DATA_UNKNOWN_TYPE'			=> 'Yfirfærsla er ógild. Óþekkt tegund yfirfærsluverkfæris fannst.',
	'MIGRATION_INVALID_DATA_UNDEFINED_TOOL'			=> 'Yfirfærsla er ógild. Óskilgreint yfirfærsluverkfæri fannst.',
	'MIGRATION_INVALID_DATA_UNDEFINED_METHOD'		=> 'Yfirfærsla er ógild. Óskilgreind aðferð yfirfærsluverkfæris fannst.',

	'MODULE_ERROR'						=> 'Villa kom upp þegar einingin var búin til: %s',
	'MODULE_EXISTS'						=> 'Eining er þegar til: %s',
	'MODULE_EXIST_MULTIPLE'				=> 'Nokkrar einingar með gefnu tungumálsheiti yfireiningar eru þegar til: %s. Reyndu að nota before/after-lykla til að skýra staðsetningu einingarinnar.',
	'MODULE_INFO_FILE_NOT_EXIST'		=> 'Nauðsynlega upplýsingaskrá einingar vantar: %2$s',
	'MODULE_NOT_EXIST'					=> 'Nauðsynleg eining er ekki til: %s',

	'PARENT_MODULE_FIND_ERROR'			=> 'Ekki var hægt að ákvarða auðkenni yfireiningar: %s',
	'PERMISSION_NOT_EXIST'				=> 'Heimildastillingin „%s“ er óvænt ekki til.',

	'ROLE_ASSIGNED_NOT_EXIST'			=> 'Heimildahlutverkið sem hópnum „%1$s“ var úthlutað er óvænt ekki til. Auðkenni hlutverks: „%2$s“',
	'ROLE_NOT_EXIST'					=> 'Heimildahlutverkið „%s“ er óvænt ekki til.',
));
