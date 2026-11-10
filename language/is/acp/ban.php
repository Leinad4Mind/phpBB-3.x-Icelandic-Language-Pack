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

// Banning
$lang = array_merge($lang, array(
	'1_HOUR'		=> '1 klukkustund',
	'30_MINS'		=> '30 mínútur',
	'6_HOURS'		=> '6 klukkustundir',

	'ACP_BAN_EXPLAIN'	=> 'Hér getur þú stjórnað bönnum notenda eftir nafni, IP-tölu eða netfangi. Þessar aðferðir koma í veg fyrir að notandi komist að nokkrum hluta spjallborðsins. Ef þú vilt getur þú gefið stutta ástæðu fyrir banninu, að hámarki 3000 stafi. Hún birtist í stjórnandaannálnum. Einnig er hægt að tilgreina gildistíma banns. Ef bannið á að renna út á tilteknum degi í stað þess að vara í ákveðinn tíma skaltu velja <span style="text-decoration: underline;">Til -&gt;</span> sem lengd banns og slá inn dagsetningu á sniðinu <kbd>YYYY-MM-DD</kbd>.',

	'BAN_EXCLUDE'			=> 'Undanþiggja banni',
	'BAN_LENGTH'			=> 'Lengd banns',
	'BAN_REASON'			=> 'Ástæða banns',
	'BAN_GIVE_REASON'		=> 'Ástæða sem hinum bannaða er sýnd',
	'BAN_UPDATE_SUCCESSFUL'	=> 'Bannlistinn var uppfærður.',
	'BANNED_UNTIL_DATE'		=> 'til %s', // Example: "until Mon 13.Jul.2009, 14:44"
	'BANNED_UNTIL_DURATION'	=> '%1$s (til %2$s)', // Example: "7 days (until Tue 14.Jul.2009, 14:44)"

	'EMAIL_BAN'					=> 'Banna eitt eða fleiri netföng',
	'EMAIL_BAN_EXCLUDE_EXPLAIN'	=> 'Virkjaðu þetta til að undanþiggja uppgefið netfang öllum núverandi bönnum.',
	'EMAIL_BAN_EXPLAIN'			=> 'Sláðu hvert netfang í nýja línu til að tilgreina fleiri en eitt. Notaðu * sem algildisstaf til að samsvara hluta netfangs, t.d. <samp>*@hotmail.com</samp> eða <samp>*@*.domain.tld</samp>.',
	'EMAIL_NO_BANNED'			=> 'Engin bönnuð netföng',
	'EMAIL_UNBAN'				=> 'Aflétta banni eða undanþágu netfanga',
	'EMAIL_UNBAN_EXPLAIN'		=> 'Þú getur aflétt banni eða undanþágu margra netfanga í einu með viðeigandi samsetningu músar og lyklaborðs fyrir tölvuna þína og vafra. Undanþegin netföng eru auðkennd.',

	'IP_BAN'					=> 'Banna eina eða fleiri IP-tölur',
	'IP_BAN_EXCLUDE_EXPLAIN'	=> 'Virkjaðu þetta til að undanþiggja uppgefna IP-tölu öllum núverandi bönnum.',
	'IP_BAN_EXPLAIN'			=> 'Sláðu hverja IP-tölu eða vélarheiti í nýja línu til að tilgreina fleiri en eitt. Til að tilgreina bil IP-talna skaltu aðskilja upphaf og endi með bandstriki (-); notaðu „*“ sem algildisstaf.',
	'IP_HOSTNAME'				=> 'IP-tölur eða vélarheiti',
	'IP_NO_BANNED'				=> 'Engar bannaðar IP-tölur',
	'IP_UNBAN'					=> 'Aflétta banni eða undanþágu IP-talna',
	'IP_UNBAN_EXPLAIN'			=> 'Þú getur aflétt banni eða undanþágu margra IP-talna í einu með viðeigandi samsetningu músar og lyklaborðs fyrir tölvuna þína og vafra. Undanþegnar IP-tölur eru auðkenndar.',

	'LENGTH_BAN_INVALID'		=> 'Dagsetningin verður að vera á sniðinu <kbd>YYYY-MM-DD</kbd>.',

	'OPTIONS_BANNED'			=> 'Bannað',
	'OPTIONS_EXCLUDED'			=> 'Undanþegið',

	'PERMANENT'		=> 'Varanlegt',

	'UNTIL'						=> 'Til',
	'USER_BAN'					=> 'Banna einn eða fleiri notendur eftir notandanafni',
	'USER_BAN_EXCLUDE_EXPLAIN'	=> 'Virkjaðu þetta til að undanþiggja uppgefna notendur öllum núverandi bönnum.',
	'USER_BAN_EXPLAIN'			=> 'Þú getur bannað marga notendur í einu með því að slá hvert nafn í nýja línu. Notaðu <span style="text-decoration: underline;">Finna meðlim</span> til að leita að einum eða fleiri notendum og bæta þeim sjálfkrafa við.',
	'USER_NO_BANNED'			=> 'Engin bönnuð notandanöfn',
	'USER_UNBAN'				=> 'Aflétta banni eða undanþágu notenda eftir notandanafni',
	'USER_UNBAN_EXPLAIN'		=> 'Þú getur aflétt banni eða undanþágu margra notenda í einu með viðeigandi samsetningu músar og lyklaborðs fyrir tölvuna þína og vafra. Undanþegnir notendur eru auðkenndir.',
));
