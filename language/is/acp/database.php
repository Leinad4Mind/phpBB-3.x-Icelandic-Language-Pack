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

// Database Backup/Restore
$lang = array_merge($lang, array(
	'ACP_BACKUP_EXPLAIN'	=> 'Hér geturðu tekið öryggisafrit af öllum gögnum sem tengjast phpBB. Safnið sem verður til er vistað í möppunni <samp>store/</samp>. Eftir stillingum þjónsins gætirðu getað þjappað skránni á nokkur mismunandi snið.',
	'ACP_RESTORE_EXPLAIN'	=> 'Þetta endurheimtir allar phpBB-töflur að fullu úr vistaðri skrá. Ef þjónninn styður það má nota gzip- eða bzip2-þjappaða textaskrá sem verður sjálfkrafa afþjöppuð. <strong>VIÐVÖRUN</strong> Þetta skrifar yfir öll fyrirliggjandi gögn. Endurheimtin getur tekið langan tíma; ekki yfirgefa þessa síðu fyrr en henni er lokið. Öryggisafrit eru geymd í möppunni <samp>store/</samp> og gert er ráð fyrir að þau hafi verið búin til með öryggisafritun phpBB. Endurheimt afrita sem innbyggða kerfið bjó ekki til virkar hugsanlega ekki.',

	'BACKUP_DELETE'			=> 'Öryggisafritinu var eytt.',
	'BACKUP_INVALID'		=> 'Valin skrá fyrir öryggisafrit er ógild.',
	'BACKUP_NOT_SUPPORTED'	=> 'Valið öryggisafrit er ekki stutt',
	'BACKUP_OPTIONS'		=> 'Valkostir öryggisafrits',
	'BACKUP_SUCCESS'		=> 'Öryggisafritið var búið til.',
	'BACKUP_TYPE'			=> 'Tegund öryggisafrits',

	'DATABASE'			=> 'Gagnagrunnsverkfæri',
	'DATA_ONLY'			=> 'Aðeins gögn',
	'DELETE_BACKUP'		=> 'Eyða öryggisafriti',
	'DELETE_SELECTED_BACKUP'	=> 'Ertu viss um að þú viljir eyða valda öryggisafritinu?',
	'DESELECT_ALL'		=> 'Afvelja allt',
	'DOWNLOAD_BACKUP'	=> 'Sækja öryggisafrit',

	'FILE_TYPE'			=> 'Skráartegund',
	'FILE_WRITE_FAIL'	=> 'Ekki tókst að skrifa skrá í geymslumöppuna.',
	'FULL_BACKUP'		=> 'Fullt öryggisafrit',

	'RESTORE_FAILURE'		=> 'Öryggisafritið gæti verið skemmt.',
	'RESTORE_OPTIONS'		=> 'Valkostir endurheimtar',
	'RESTORE_SELECTED_BACKUP'	=> 'Ertu viss um að þú viljir endurheimta valda öryggisafritið?',
	'RESTORE_SUCCESS'		=> 'Gagnagrunnurinn var endurheimtur.<br /><br />Spjallborðið ætti nú að vera eins og það var þegar öryggisafritið var tekið.',

	'SELECT_ALL'			=> 'Velja allt',
	'SELECT_FILE'			=> 'Veldu skrá',
	'START_BACKUP'			=> 'Hefja öryggisafritun',
	'START_RESTORE'			=> 'Hefja endurheimt',
	'STORE_AND_DOWNLOAD'	=> 'Vista og sækja',
	'STORE_LOCAL'			=> 'Vista skrá staðbundið',

	'TABLE_SELECT'		=> 'Velja töflur',
	'TABLE_SELECT_ERROR'=> 'Þú verður að velja að minnsta kosti eina töflu.',
));
