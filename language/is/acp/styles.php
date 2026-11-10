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
	$lang = [];
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

$lang = array_merge($lang, [
	'ACP_STYLES_EXPLAIN'						=> 'Hér getur þú stjórnað stílunum sem eru tiltækir á spjallborðinu.<br>Athugaðu að ekki er hægt að fjarlægja stílinn „<strong>prosilver</strong>“ þar sem hann er sjálfgefinn aðalstíll phpBB og móðurstíll annarra stíla.',

	'CANNOT_BE_INSTALLED'						=> 'Ekki er hægt að setja upp',
	'CONFIRM_UNINSTALL_STYLES'					=> 'Ertu viss um að þú viljir fjarlægja valda stíla?',
	'COPYRIGHT'									=> 'Höfundarréttur',

	'DEACTIVATE_DEFAULT'						=> 'Ekki er hægt að gera sjálfgefna stílinn óvirkan.',
	'DELETE_FROM_FS'							=> 'Eyða úr skráakerfi',
	'DELETE_STYLE_FILES_FAILED'					=> 'Villa kom upp við að eyða skrám stílsins „%s“.',
	'DELETE_STYLE_FILES_SUCCESS'				=> 'Skrám stílsins „%s“ var eytt.',
	'DETAILS'									=> 'Nánari upplýsingar',

	'INHERITING_FROM'							=> 'Erfir frá',
	'INSTALL_STYLE'								=> 'Setja upp stíl',
	'INSTALL_STYLES'							=> 'Setja upp stíla',
	'INSTALL_STYLES_EXPLAIN'					=> 'Hér getur þú sett upp nýja stíla.<br>Ef tiltekinn stíll finnst ekki á listanum hér fyrir neðan skaltu ganga úr skugga um hvort hann sé þegar uppsettur. Ef ekki skaltu athuga hvort honum hafi verið hlaðið rétt upp.',
	'INVALID_STYLE_ID'							=> 'Ógilt auðkenni stíls.',

	'NO_MATCHING_STYLES_FOUND'					=> 'Engir stílar samsvara fyrirspurninni.',
	'NO_UNINSTALLED_STYLE'						=> 'Engir óuppsettir stílar fundust.',

	'PURGED_CACHE'								=> 'Skyndiminnið var hreinsað.',

	'REQUIRES_STYLE'							=> 'Þessi stíll krefst þess að stíllinn „%s“ sé uppsettur.',

	'STYLE_ACTIVATE'							=> 'Virkja',
	'STYLE_ACTIVE'								=> 'Virkur',
	'STYLE_DEACTIVATE'							=> 'Gera óvirkan',
	'STYLE_DEFAULT'								=> 'Gera að sjálfgefnum stíl',
	'STYLE_DEFAULT_CHANGE_INACTIVE'				=> 'Þú verður að virkja stílinn áður en þú gerir hann að sjálfgefnum stíl.',
	'STYLE_ERR_INVALID_PARENT'					=> 'Ógildur móðurstíll.',
	'STYLE_ERR_NAME_EXIST'						=> 'Stíll með þessu heiti er þegar til.',
	'STYLE_ERR_STYLE_NAME'						=> 'Þú verður að gefa stílnum heiti.',
	'STYLE_INSTALLED'							=> 'Stíllinn „%s“ var settur upp.',
	'STYLE_INSTALLED_RETURN_INSTALLED_STYLES'	=> 'Fara aftur á lista yfir uppsetta stíla',
	'STYLE_INSTALLED_RETURN_UNINSTALLED_STYLES'	=> 'Setja upp fleiri stíla',
	'STYLE_NAME'								=> 'Heiti stíls',
	'STYLE_NAME_RESERVED'						=> 'Ekki er hægt að setja upp stílinn „%s“ þar sem heitið er frátekið.',
	'STYLE_NOT_INSTALLED'						=> 'Stíllinn „%s“ var ekki settur upp.',
	'STYLE_PATH'								=> 'Slóð stíls',
	'STYLE_UNINSTALL'							=> 'Fjarlægja',
	'STYLE_UNINSTALL_DEPENDENT'					=> 'Ekki er hægt að fjarlægja stílinn „%s“ þar sem einn eða fleiri undirstílar byggja á honum.',
	'STYLE_UNINSTALLED'							=> 'Stíllinn „%s“ var fjarlægður.',
	'STYLE_PHPBB_VERSION'						=> 'phpBB-útgáfa',
	'STYLE_USED_BY'								=> 'Notaður af (vélmenni meðtalin)',
	'STYLE_VERSION'								=> 'Útgáfa stíls',

	'UNINSTALL_PROSILVER'						=> 'Ekki er hægt að fjarlægja stílinn „prosilver“.',
	'UNINSTALL_DEFAULT'							=> 'Ekki er hægt að fjarlægja sjálfgefna stílinn.',

	'BROWSE_STYLES_DATABASE'					=> 'Skoða stílagagnagrunninn',
]);
