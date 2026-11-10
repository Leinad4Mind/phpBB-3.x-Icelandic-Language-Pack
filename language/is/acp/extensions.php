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

if (!defined('IN_PHPBB'))
{
	exit;
}

/**
* DO NOT CHANGE
*/
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'EXTENSION'					=> 'Viðbót',
	'EXTENSIONS'				=> 'Viðbætur',
	'EXTENSIONS_ADMIN'			=> 'Viðbótastjóri',
	'EXTENSIONS_EXPLAIN'		=> 'Viðbótastjórinn er verkfæri í phpBB-spjallborðinu sem gerir þér kleift að stjórna stöðu allra viðbóta og skoða upplýsingar um þær.',
	'EXTENSION_INVALID_LIST'	=> 'Viðbótin „%s“ er ógild.<br />%s<br /><br />',
	'EXTENSION_NOT_AVAILABLE'	=> 'Valda viðbótin er ekki tiltæk fyrir þetta spjallborð. Staðfestu að útgáfur phpBB og PHP séu studdar (sjá upplýsingasíðuna).',
	'EXTENSION_DIR_INVALID'		=> 'Valda viðbótin hefur ógilda möppuskipan og ekki er hægt að virkja hana.',
	'EXTENSION_NOT_ENABLEABLE'	=> 'Ekki er hægt að virkja völdu viðbótina. Athugaðu kröfur hennar.',
	'EXTENSION_NOT_INSTALLED'	=> 'Viðbótin %s er ekki tiltæk. Athugaðu hvort hún hafi verið sett rétt upp.',

	'DETAILS'				=> 'Nánari upplýsingar',

	'EXTENSIONS_NOT_INSTALLED'	=> 'Óuppsettar viðbætur',
	'EXTENSIONS_DISABLED'		=> 'Óvirkar viðbætur',
	'EXTENSIONS_ENABLED'		=> 'Virkar viðbætur',

	'EXTENSION_DELETE_DATA'	=> 'Eyða gögnum',
	'EXTENSION_DISABLE'		=> 'Gera óvirka',
	'EXTENSION_ENABLE'		=> 'Virkja',

	'EXTENSION_DELETE_DATA_EXPLAIN'	=> 'Þegar gögnum viðbótar er eytt eru öll gögn hennar og stillingar fjarlægð. Skrár viðbótarinnar haldast svo hægt sé að virkja hana aftur.',
	'EXTENSION_DISABLE_EXPLAIN'		=> 'Þegar viðbót er gerð óvirk haldast skrár, gögn og stillingar hennar, en virkni sem hún bætti við er fjarlægð.',
	'EXTENSION_ENABLE_EXPLAIN'		=> 'Þegar viðbót er virkjuð getur þú notað hana á spjallborðinu.',

	'EXTENSION_DELETE_DATA_IN_PROGRESS'	=> 'Nú er verið að eyða gögnum viðbótarinnar. Ekki yfirgefa eða endurhlaða þessa síðu fyrr en aðgerðinni er lokið.',
	'EXTENSION_DISABLE_IN_PROGRESS'	=> 'Nú er verið að gera viðbótina óvirka. Ekki yfirgefa eða endurhlaða þessa síðu fyrr en aðgerðinni er lokið.',
	'EXTENSION_ENABLE_IN_PROGRESS'	=> 'Nú er verið að virkja viðbótina. Ekki yfirgefa eða endurhlaða þessa síðu fyrr en aðgerðinni er lokið.',

	'EXTENSION_DELETE_DATA_SUCCESS'	=> 'Gögnum viðbótarinnar var eytt',
	'EXTENSION_DISABLE_SUCCESS'		=> 'Viðbótin var gerð óvirk',
	'EXTENSION_ENABLE_SUCCESS'		=> 'Viðbótin var virkjuð',

	'EXTENSION_NAME'			=> 'Heiti viðbótar',
	'EXTENSION_ACTIONS'			=> 'Aðgerðir',
	'EXTENSION_OPTIONS'			=> 'Valkostir',
	'EXTENSION_INSTALL_HEADLINE'=> 'Uppsetning viðbótar',
	'EXTENSION_INSTALL_EXPLAIN'	=> '<ol>
			<li>Sæktu viðbót úr viðbótagagnagrunni phpBB</li>
			<li>Afþjappaðu viðbótinni og hladdu henni upp í möppuna <samp>ext/</samp> á phpBB-spjallborðinu</li>
			<li>Virkjaðu viðbótina hér í viðbótastjóranum</li>
		</ol>',
	'EXTENSION_UPDATE_HEADLINE'	=> 'Uppfærsla viðbótar',
	'EXTENSION_UPDATE_EXPLAIN'	=> '<ol>
			<li>Gerðu viðbótina óvirka</li>
			<li>Eyddu skrám viðbótarinnar úr skráakerfinu</li>
			<li>Hladdu upp nýju skránum</li>
			<li>Virkjaðu viðbótina</li>
		</ol>',
	'EXTENSION_REMOVE_HEADLINE'	=> 'Viðbót fjarlægð að fullu af spjallborðinu',
	'EXTENSION_REMOVE_EXPLAIN'	=> '<ol>
			<li>Gerðu viðbótina óvirka</li>
			<li>Eyddu gögnum viðbótarinnar</li>
			<li>Eyddu skrám viðbótarinnar úr skráakerfinu</li>
		</ol>',

	'EXTENSION_DELETE_DATA_CONFIRM'	=> 'Ertu viss um að þú viljir eyða gögnunum sem tengjast „%s“?<br /><br />Þetta fjarlægir öll gögn og stillingar viðbótarinnar og ekki er hægt að afturkalla aðgerðina!',
	'EXTENSION_DISABLE_CONFIRM'		=> 'Ertu viss um að þú viljir gera viðbótina „%s“ óvirka?',
	'EXTENSION_ENABLE_CONFIRM'		=> 'Ertu viss um að þú viljir virkja viðbótina „%s“?',
	'EXTENSION_FORCE_UNSTABLE_CONFIRM'	=> 'Ertu viss um að þú viljir þvinga fram notkun óstöðugrar útgáfu?',

	'RETURN_TO_EXTENSION_LIST'	=> 'Fara aftur á viðbótalistann',

	'EXT_DETAILS'			=> 'Upplýsingar um viðbót',
	'DISPLAY_NAME'			=> 'Birtingarheiti',
	'CLEAN_NAME'			=> 'Hreint heiti',
	'TYPE'					=> 'Tegund',
	'DESCRIPTION'			=> 'Lýsing',
	'VERSION'				=> 'Útgáfa',
	'HOMEPAGE'				=> 'Heimasíða',
	'PATH'					=> 'Skrárslóð',
	'TIME'					=> 'Útgáfutími',
	'LICENSE'				=> 'Notkunarleyfi',

	'REQUIREMENTS'			=> 'Kröfur',
	'PHPBB_VERSION'			=> 'phpBB-útgáfa',
	'PHP_VERSION'			=> 'PHP-útgáfa',
	'AUTHOR_INFORMATION'	=> 'Upplýsingar um höfund',
	'AUTHOR_NAME'			=> 'Nafn',
	'AUTHOR_EMAIL'			=> 'Netfang',
	'AUTHOR_HOMEPAGE'		=> 'Heimasíða',
	'AUTHOR_ROLE'			=> 'Hlutverk',

	'NOT_UP_TO_DATE'		=> '%s er ekki af nýjustu útgáfu',
	'UP_TO_DATE'			=> '%s er af nýjustu útgáfu',
	'ANNOUNCEMENT_TOPIC'	=> 'Útgáfutilkynning',
	'DOWNLOAD_LATEST'		=> 'Sækja útgáfu',
	'NO_VERSIONCHECK'		=> 'Engar upplýsingar um útgáfuathugun voru gefnar.',

	'VERSIONCHECK_FORCE_UPDATE_ALL'		=> 'Athuga allar útgáfur aftur',
	'FORCE_UNSTABLE'					=> 'Athuga alltaf óstöðugar útgáfur',
	'EXTENSIONS_VERSION_CHECK_SETTINGS'	=> 'Stillingar útgáfuathugunar',

	'BROWSE_EXTENSIONS_DATABASE'		=> 'Skoða viðbótagagnagrunninn',

	'META_FIELD_NOT_SET'	=> 'Nauðsynlegi lýsigagnareiturinn %s hefur ekki verið stilltur.',
	'META_FIELD_INVALID'	=> 'Lýsigagnareiturinn %s er ógildur.',
));
