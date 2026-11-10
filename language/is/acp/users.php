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
	'ADMIN_SIG_PREVIEW'		=> 'Forskoðun undirskriftar',
	'AT_LEAST_ONE_FOUNDER'	=> 'Ekki er hægt að breyta þessum stofnanda í venjulegan notanda. Að minnsta kosti einn virkur stofnandi verður að vera á spjallborðinu. Ef þú vilt breyta stöðu þessa notanda skaltu fyrst gera annan notanda að stofnanda.',

	'BAN_ALREADY_ENTERED'	=> 'Bannið hafði þegar verið skráð. Bannlistinn var ekki uppfærður.',
	'BAN_SUCCESSFUL'		=> 'Bannið var skráð.',

	'CANNOT_BAN_ANONYMOUS'			=> 'Þú mátt ekki banna nafnlausa notandareikninginn. Hægt er að stilla heimildir nafnlausra notenda undir flipanum Heimildir.',
	'CANNOT_BAN_FOUNDER'			=> 'Þú mátt ekki banna stofnandareikninga.',
	'CANNOT_BAN_YOURSELF'			=> 'Þú mátt ekki banna sjálfan þig.',
	'CANNOT_DEACTIVATE_BOT'			=> 'Þú mátt ekki gera vélmennareikninga óvirka. Gerðu vélmennið óvirkt á vélmennasíðunni í staðinn.',
	'CANNOT_DEACTIVATE_FOUNDER'		=> 'Þú mátt ekki gera stofnandareikninga óvirka.',
	'CANNOT_DEACTIVATE_YOURSELF'	=> 'Þú mátt ekki gera eigin reikning óvirkan.',
	'CANNOT_FORCE_REACT_BOT'		=> 'Þú mátt ekki þvinga fram endurvirkjun vélmennareikninga. Endurvirkjaðu vélmennið á vélmennasíðunni í staðinn.',
	'CANNOT_FORCE_REACT_FOUNDER'	=> 'Þú mátt ekki þvinga fram endurvirkjun stofnandareikninga.',
	'CANNOT_FORCE_REACT_YOURSELF'	=> 'Þú mátt ekki þvinga fram endurvirkjun eigin reiknings.',
	'CANNOT_REMOVE_ANONYMOUS'		=> 'Ekki er hægt að fjarlægja reikning gestanotandans.',
	'CANNOT_REMOVE_FOUNDER'			=> 'Þú mátt ekki fjarlægja stofnandareikninga.',
	'CANNOT_REMOVE_YOURSELF'		=> 'Þú mátt ekki fjarlægja eigin notandareikning.',
	'CANNOT_SET_FOUNDER_IGNORED'	=> 'Ekki er hægt að gera hunsaða notendur að stofnendum.',
	'CANNOT_SET_FOUNDER_INACTIVE'	=> 'Þú verður að virkja notendur áður en þú gerir þá að stofnendum; aðeins virkir notendur geta orðið stofnendur.',
	'CONFIRM_EMAIL_EXPLAIN'			=> 'Þetta þarf aðeins að tilgreina ef þú ert að breyta netfangi notandans.',

	'DELETE_POSTS'			=> 'Eyða færslum',
	'DELETE_USER'			=> 'Eyða notanda',
	'DELETE_USER_EXPLAIN'	=> 'Athugaðu að eyðing notanda er endanleg og ekki er hægt að endurheimta hann. Ólesnum einkaskilaboðum sem þessi notandi sendi verður eytt og viðtakendur þeirra geta ekki lengur nálgast þau.',

	'FORCE_REACTIVATION_SUCCESS'	=> 'Endurvirkjun var þvinguð fram.',
	'FOUNDER'						=> 'Stofnandi',
	'FOUNDER_EXPLAIN'				=> 'Stofnendur hafa allar stjórnunarheimildir og notendur sem eru ekki stofnendur geta aldrei bannað þá, eytt þeim eða breytt þeim.',

	'GROUP_APPROVE'					=> 'Samþykkja meðlim',
	'GROUP_DEFAULT'					=> 'Gera hóp að sjálfgefnum hópi meðlims',
	'GROUP_DELETE'					=> 'Fjarlægja meðlim úr hópi',
	'GROUP_DEMOTE'					=> 'Lækka hópstjóra í tign',
	'GROUP_PROMOTE'					=> 'Gera að hópstjóra',

	'IP_WHOIS_FOR'			=> 'IP WHOIS fyrir %s',

	'LAST_ACTIVE'			=> 'Síðast virkur',

	'MOVE_POSTS_EXPLAIN'	=> 'Veldu spjallsvæðið sem þú vilt flytja allar færslur þessa notanda á.',

	'NO_SPECIAL_RANK'		=> 'Engin sérstök tign valin',
	'NO_WARNINGS'			=> 'Engar viðvaranir.',
	'NOT_MANAGE_FOUNDER'	=> 'Þú reyndir að stjórna notanda með stöðu stofnanda. Aðeins stofnendur mega stjórna öðrum stofnendum.',

	'QUICK_TOOLS'			=> 'Flýtiverkfæri',

	'REGISTERED'			=> 'Skráður',
	'REGISTERED_IP'			=> 'Skráður frá IP-tölu',
	'RETAIN_POSTS'			=> 'Halda færslum',

	'SELECT_FORM'			=> 'Veldu eyðublað',
	'SELECT_USER'			=> 'Veldu notanda',

	'USER_ADMIN'					=> 'Notendastjórnun',
	'USER_ADMIN_ACTIVATE'			=> 'Virkja reikning',
	'USER_ADMIN_ACTIVATED'			=> 'Notandinn var virkjaður.',
	'USER_ADMIN_AVATAR_REMOVED'		=> 'Smámynd notandans var fjarlægð.',
	'USER_ADMIN_BAN_EMAIL'			=> 'Banna eftir netfangi',
	'USER_ADMIN_BAN_EMAIL_REASON'	=> 'Netfang bannað í notendastjórnun',
	'USER_ADMIN_BAN_IP'				=> 'Banna eftir IP-tölu',
	'USER_ADMIN_BAN_IP_REASON'		=> 'IP-tala bönnuð í notendastjórnun',
	'USER_ADMIN_BAN_NAME_REASON'	=> 'Notandanafn bannað í notendastjórnun',
	'USER_ADMIN_BAN_USER'			=> 'Banna eftir notandanafni',
	'USER_ADMIN_DEACTIVATE'			=> 'Gera reikning óvirkan',
	'USER_ADMIN_DEACTIVED'			=> 'Notandinn var gerður óvirkur.',
	'USER_ADMIN_DEL_ATTACH'			=> 'Eyða öllum viðhengjum',
	'USER_ADMIN_DEL_AVATAR'			=> 'Eyða smámynd',
	'USER_ADMIN_DEL_OUTBOX'			=> 'Tæma úthólf einkaskilaboða',
	'USER_ADMIN_DEL_POSTS'			=> 'Eyða öllum færslum',
	'USER_ADMIN_DEL_SIG'			=> 'Eyða undirskrift',
	'USER_ADMIN_EXPLAIN'			=> 'Hér getur þú breytt upplýsingum notenda og tilteknum stillingum.',
	'USER_ADMIN_FORCE'				=> 'Þvinga fram endurvirkjun',
	'USER_ADMIN_LEAVE_NR'			=> 'Fjarlægja úr Nýskráðum notendum',
	'USER_ADMIN_MOVE_POSTS'			=> 'Flytja allar færslur',
	'USER_ADMIN_SIG_REMOVED'		=> 'Undirskrift notandans var fjarlægð.',
	'USER_ATTACHMENTS_REMOVED'		=> 'Öll viðhengi þessa notanda voru fjarlægð.',
	'USER_AVATAR_NOT_ALLOWED'		=> 'Ekki er hægt að birta smámyndina þar sem smámyndir hafa verið bannaðar.',
	'USER_AVATAR_UPDATED'			=> 'Upplýsingar um smámynd notandans voru uppfærðar.',
	'USER_AVATAR_TYPE_NOT_ALLOWED'	=> 'Ekki er hægt að birta núverandi smámynd þar sem tegund hennar hefur verið bönnuð.',
	'USER_CUSTOM_PROFILE_FIELDS'	=> 'Sérsniðnir notandareitir',
	'USER_DELETED'					=> 'Notandanum var eytt.',
	'USER_GROUP_ADD'				=> 'Bæta notanda í hóp',
	'USER_GROUP_NORMAL'				=> 'Notendaskilgreindir hópar sem notandinn er meðlimur í',
	'USER_GROUP_PENDING'			=> 'Hópar þar sem aðild notandans bíður samþykkis',
	'USER_GROUP_SPECIAL'			=> 'Forskilgreindir hópar sem notandinn er meðlimur í',
	'USER_LIFTED_NR'				=> 'Staða notandans sem nýskráðs notanda var fjarlægð.',
	'USER_NO_ATTACHMENTS'			=> 'Engin viðhengi eru til að birta.',
	'USER_NO_POSTS_TO_DELETE'			=> 'Notandinn á engar færslur sem hægt er að halda eða eyða.',
	'USER_OUTBOX_EMPTIED'			=> 'Úthólf einkaskilaboða notandans var tæmt.',
	'USER_OUTBOX_EMPTY'				=> 'Úthólf einkaskilaboða notandans var þegar tómt.',
	'USER_OVERVIEW_UPDATED'			=> 'Upplýsingar notandans voru uppfærðar.',
	'USER_POSTS_DELETED'			=> 'Öllum færslum þessa notanda var eytt.',
	'USER_POSTS_MOVED'				=> 'Færslur notandans voru fluttar á valið spjallsvæði.',
	'USER_PREFS_UPDATED'			=> 'Kjörstillingar notandans voru uppfærðar.',
	'USER_PROFILE'					=> 'Notandasnið',
	'USER_PROFILE_UPDATED'			=> 'Notandasnið notandans var uppfært.',
	'USER_RANK'						=> 'Tign notanda',
	'USER_RANK_UPDATED'				=> 'Tign notandans var uppfærð.',
	'USER_SIG_UPDATED'				=> 'Undirskrift notandans var uppfærð.',
	'USER_WARNING_LOG_DELETED'		=> 'Engar upplýsingar tiltækar. Hugsanlega hefur annálafærslunni verið eytt.',
	'USER_TOOLS'					=> 'Grunnverkfæri',
));
