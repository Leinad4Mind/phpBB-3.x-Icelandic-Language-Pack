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

// Email settings
$lang = array_merge($lang, array(
	'ACP_MASS_EMAIL_EXPLAIN'		=> 'Hér geturðu sent tölvupóst annaðhvort til allra notenda eða allra notenda í tilteknum hópi <strong>sem hafa virkjað móttöku fjöldapósts</strong>. Tölvupóstur er sendur á uppgefið netfang stjórnanda og allir viðtakendur fá blindafrit. Sjálfgefið eru aðeins 20 viðtakendur í hverjum tölvupósti; ef viðtakendur eru fleiri verða fleiri tölvupóstar sendir. Ef þú sendir stórum hópi skaltu sýna þolinmæði eftir innsendingu og ekki stöðva síðuna meðan vinnsla stendur yfir. Eðlilegt er að sending fjöldapósts taki langan tíma og þú færð tilkynningu þegar skriftan hefur lokið vinnslu.',
	'ALL_USERS'						=> 'Allir notendur',

	'COMPOSE'				=> 'Semja',

	'EMAIL_SEND_ERROR'		=> 'Ein eða fleiri villur komu upp við sendingu tölvupóstsins. Skoðaðu %svilluskrána%s fyrir nánari villuboð.',
	'EMAIL_SENT'			=> 'Skilaboðin hafa verið send.',
	'EMAIL_SENT_QUEUE'		=> 'Skilaboðin hafa verið sett í sendiröð.',

	'LOG_SESSION'			=> 'Skrá póstlotu í mikilvægu atvikaskrána',

	'SEND_IMMEDIATELY'		=> 'Senda strax',
	'SEND_TO_GROUP'			=> 'Senda til hóps',
	'SEND_TO_USERS'			=> 'Senda til notenda',
	'SEND_TO_USERS_EXPLAIN'	=> 'Notendanöfn sem eru slegin inn hér hnekkja hópvali hér fyrir ofan. Sláðu hvert notandanafn inn í nýja línu.',

	'MAIL_BANNED'			=> 'Senda bönnuðum notendum póst',
	'MAIL_BANNED_EXPLAIN'	=> 'Þegar fjöldapóstur er sendur til hóps geturðu valið hér hvort bannaðir notendur fái einnig tölvupóstinn.',
	'MAIL_HIGH_PRIORITY'	=> 'Hár',
	'MAIL_LOW_PRIORITY'		=> 'Lágur',
	'MAIL_NORMAL_PRIORITY'	=> 'Venjulegur',
	'MAIL_PRIORITY'			=> 'Forgangur pósts',
	'MASS_MESSAGE'			=> 'Skilaboðin þín',
	'MASS_MESSAGE_EXPLAIN'	=> 'Athugaðu að aðeins má slá inn ómótaðan texta. Öll sniðmerking verður fjarlægð fyrir sendingu.',

	'NO_EMAIL_MESSAGE'		=> 'Þú verður að slá inn skilaboð.',
	'NO_EMAIL_SUBJECT'		=> 'Þú verður að tilgreina efni skilaboðanna.',
));
