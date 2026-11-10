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
	'ACP_GROUPS_MANAGE_EXPLAIN'		=> 'Á þessu stjórnborði getur þú stjórnað öllum notendahópum. Þú getur eytt, stofnað og breytt hópum. Einnig má velja hópstjóra, stilla hópa sem opna, falda eða lokaða og ákveða heiti þeirra og lýsingu.',
	'ADD_GROUP_CATEGORY'			=> 'Bæta við flokki',
	'ADD_USERS'						=> 'Bæta við notendum',
	'ADD_USERS_EXPLAIN'				=> 'Hér getur þú bætt nýjum notendum í hópinn. Þú getur valið hvort hópurinn verði nýr sjálfgefinn hópur valinna notenda og einnig gert þá að hópstjórum. Sláðu hvert notandanafn í sérstaka línu.',

	'COPY_PERMISSIONS'				=> 'Afrita heimildir frá',
	'COPY_PERMISSIONS_EXPLAIN'		=> 'Þegar hópurinn hefur verið stofnaður fær hann sömu heimildir og hópurinn sem þú velur hér.',
	'CREATE_GROUP'					=> 'Stofna nýjan hóp',

	'GROUPS_NO_MEMBERS'				=> 'Þessi hópur hefur enga meðlimi',
	'GROUPS_NO_MODS'				=> 'Engir hópstjórar skilgreindir',

	'GROUP_APPROVE'					=> 'Samþykkja meðlim',
	'GROUP_APPROVED'				=> 'Samþykktir meðlimir',
	'GROUP_AVATAR'					=> 'Smámynd hóps',
	'GROUP_AVATAR_EXPLAIN'			=> 'Þessi mynd birtist á stjórnborði hópsins.',
	'GROUP_CATEGORY_NAME'			=> 'Heiti flokks',
	'GROUP_CLOSED'					=> 'Lokaður',
	'GROUP_COLOR'					=> 'Litur hóps',
	'GROUP_COLOR_EXPLAIN'			=> 'Skilgreinir litinn sem notandanöfn meðlima birtast í. Skildu reitinn auðan fyrir sjálfgefinn lit notanda.',
	'GROUP_CONFIRM_ADD_USERS'		=> array(
		1	=> 'Ertu viss um að þú viljir bæta notandanum %2$s í hópinn?',
		2	=> 'Ertu viss um að þú viljir bæta notendunum %2$s í hópinn?',
	),
	'GROUP_CREATED'					=> 'Hópurinn var stofnaður.',
	'GROUP_DEFAULT'					=> 'Gera hóp að sjálfgefnum hópi meðlims',
	'GROUP_DEFS_UPDATED'			=> 'Sjálfgefinn hópur var stilltur fyrir alla valda meðlimi.',
	'GROUP_DELETE'					=> 'Fjarlægja meðlim úr hópi',
	'GROUP_DELETED'					=> 'Hópnum var eytt og sjálfgefnir hópar notenda stilltir.',
	'GROUP_DEMOTE'					=> 'Lækka hópstjóra í tign',
	'GROUP_DESC'					=> 'Lýsing hóps',
	'GROUP_DETAILS'					=> 'Upplýsingar um hóp',
	'GROUP_EDIT_EXPLAIN'			=> 'Hér getur þú breytt hópi sem þegar er til. Þú getur breytt heiti hans, lýsingu og tegund, svo sem opinn eða lokaður. Einnig má stilla valkosti fyrir allan hópinn, til dæmis lit og tign. Breytingar hér hafa forgang fram yfir núverandi stillingar notenda. Athugaðu að meðlimir hóps geta hnekkt stillingum smámyndar hópsins nema viðeigandi notendaheimildir séu stilltar.',
	'GROUP_ERR_USERS_EXIST'			=> 'Tilgreindir notendur eru þegar meðlimir í þessum hópi.',
	'GROUP_FOUNDER_MANAGE'			=> 'Aðeins stofnendur mega stjórna',
	'GROUP_FOUNDER_MANAGE_EXPLAIN'	=> 'Takmarkar stjórnun þessa hóps við stofnendur. Notendur með hópaheimildir geta samt séð hópinn og meðlimi hans.',
	'GROUP_HIDDEN'					=> 'Falinn',
	'GROUP_LANG'					=> 'Tungumál hóps',
	'GROUP_LEAD'					=> 'Hópstjórar',
	'GROUP_LEADERS_ADDED'			=> 'Nýjum stjórnendum var bætt í hópinn.',
	'GROUP_LEGEND'					=> 'Birta hóp í hópayfirliti',
	'GROUP_LIST'					=> 'Núverandi meðlimir',
	'GROUP_LIST_EXPLAIN'			=> 'Þetta er heildarlisti yfir alla núverandi meðlimi hópsins. Þú getur fjarlægt meðlimi, nema úr tilteknum sérstökum hópum, eða bætt við nýjum eftir þörfum.',
	'GROUP_MEMBERS'					=> 'Meðlimir hóps',
	'GROUP_MEMBERS_EXPLAIN'			=> 'Þetta er heildarlisti yfir alla meðlimi notendahópsins, með aðskildum hlutum fyrir stjórnendur, meðlimi sem bíða samþykkis og núverandi meðlimi. Hér getur þú stjórnað hverjir tilheyra hópnum og hvaða hlutverki þeir gegna. Notaðu Lækka í tign í stað þess að eyða ef fjarlægja á hópstjóra en halda honum í hópnum. Á sama hátt má nota Hækka í tign til að gera núverandi meðlim að hópstjóra.',
	'GROUP_MESSAGE_LIMIT'			=> 'Hámarksfjöldi einkaskilaboða hóps í hverri möppu',
	'GROUP_MESSAGE_LIMIT_EXPLAIN'	=> 'Þessi stilling hefur forgang fram yfir skilaboðamörk möppu hvers notanda. Hæsta gildi allra hópa notandans ákvarðar raunverulegt gildi.<br />Stilltu gildið á 0 til að nota stillingu alls spjallborðsins fyrir alla notendur hópsins.',
	'GROUP_MODS_ADDED'				=> 'Nýjum hópstjórum var bætt við.',
	'GROUP_MODS_DEMOTED'			=> 'Hópstjórar voru lækkaðir í tign.',
	'GROUP_MODS_PROMOTED'			=> 'Meðlimir hóps voru gerðir að hópstjórum.',
	'GROUP_NAME'					=> 'Heiti hóps',
	'GROUP_NAME_TAKEN'				=> 'Heiti hópsins er þegar í notkun. Veldu annað heiti.',
	'GROUP_OPEN'					=> 'Opinn',
	'GROUP_PENDING'					=> 'Meðlimir sem bíða samþykkis',
	'GROUP_MAX_RECIPIENTS'			=> 'Hámarksfjöldi leyfilegra viðtakenda í einkaskilaboði',
	'GROUP_MAX_RECIPIENTS_EXPLAIN'	=> 'Hámarksfjöldi leyfilegra viðtakenda í einkaskilaboði. Hæsta gildi allra hópa notandans ákvarðar raunverulegt gildi.<br />Stilltu gildið á 0 til að nota stillingu alls spjallborðsins fyrir alla notendur hópsins.',
	'GROUP_OPTIONS_SAVE'			=> 'Valkostir fyrir allan hópinn',
	'GROUP_PROMOTE'					=> 'Gera að hópstjóra',
	'GROUP_RANK'					=> 'Tign hóps',
	'GROUP_RECEIVE_PM'				=> 'Hópur má taka við einkaskilaboðum',
	'GROUP_RECEIVE_PM_EXPLAIN'		=> 'Athugaðu að ekki er hægt að senda földum hópum skilaboð, óháð þessari stillingu.',
	'GROUP_REQUEST'					=> 'Beiðni',
	'GROUP_SETTINGS_SAVE'			=> 'Stillingar fyrir allan hópinn',
	'GROUP_SKIP_AUTH'				=> 'Undanþiggja hópstjóra heimildum',
	'GROUP_SKIP_AUTH_EXPLAIN'		=> 'Ef þetta er virkt erfa hópstjórar ekki lengur heimildir frá hópnum.',
	'GROUP_SPECIAL'					=> 'Forskilgreindur',
	'GROUP_TEAMPAGE'				=> 'Birta hóp á teymissíðu',
	'GROUP_TYPE'					=> 'Tegund hóps',
	'GROUP_TYPE_EXPLAIN'			=> 'Þetta ákvarðar hvaða notendur geta gengið í hópinn eða séð hann.',
	'GROUP_UPDATED'					=> 'Kjörstillingar hópsins voru uppfærðar.',

	'GROUP_USERS_ADDED'				=> 'Nýjum notendum var bætt í hópinn.',
	'GROUP_USERS_EXIST'				=> 'Valdir notendur eru þegar meðlimir.',
	'GROUP_USERS_REMOVE'			=> 'Notendur voru fjarlægðir úr hópnum og nýir sjálfgefnir hópar stilltir.',
	'GROUP_USERS_INVALID'			=> 'Engum notendum var bætt í hópinn þar sem eftirfarandi notandanöfn eru ekki til: %s',

	'LEGEND_EXPLAIN'				=> 'Þetta eru hóparnir sem birtast í hópayfirlitinu:',
	'LEGEND_SETTINGS'				=> 'Stillingar hópayfirlits',
	'LEGEND_SORT_GROUPNAME'			=> 'Raða hópayfirliti eftir heiti hóps',
	'LEGEND_SORT_GROUPNAME_EXPLAIN'	=> 'Röðin hér fyrir neðan er hunsuð þegar þessi valkostur er virkur.',

	'MANAGE_LEGEND'			=> 'Stjórna hópayfirliti',
	'MANAGE_TEAMPAGE'		=> 'Stjórna teymissíðu',
	'MAKE_DEFAULT_FOR_ALL'	=> 'Gera að sjálfgefnum hópi allra meðlima',
	'MEMBERS'				=> 'Meðlimir',

	'NO_GROUP'					=> 'Enginn hópur tilgreindur.',
	'NO_GROUPS_ADDED'			=> 'Engum hópum hefur verið bætt við enn.',
	'NO_GROUPS_CREATED'			=> 'Engir hópar hafa verið stofnaðir enn.',
	'NO_PERMISSIONS'			=> 'Ekki afrita heimildir',
	'NO_USERS'					=> 'Þú hefur ekki slegið inn neina notendur.',
	'NO_USERS_ADDED'			=> 'Engum notendum var bætt í hópinn.',
	'NO_VALID_USERS'			=> 'Þú hefur ekki slegið inn neina notendur sem mega gangast undir þessa aðgerð.',

	'PENDING_MEMBERS'			=> 'Bíða samþykkis',

	'SELECT_GROUP'				=> 'Veldu hóp',
	'SPECIAL_GROUPS'			=> 'Forskilgreindir hópar',
	'SPECIAL_GROUPS_EXPLAIN'	=> 'Forskilgreindir hópar eru sérstakir hópar sem ekki er hægt að eyða eða breyta beint. Þú getur þó bætt við notendum og breytt grunnstillingum.',

	'TEAMPAGE'					=> 'Teymissíða',
	'TEAMPAGE_DISP_ALL'			=> 'Öll hópaðild',
	'TEAMPAGE_DISP_DEFAULT'		=> 'Aðeins sjálfgefinn hópur notandans',
	'TEAMPAGE_DISP_FIRST'		=> 'Aðeins fyrsta hópaðild',
	'TEAMPAGE_EXPLAIN'			=> 'Þetta eru hóparnir sem birtast á teymissíðunni:',
	'TEAMPAGE_FORUMS'			=> 'Birta spjallsvæði undir umsjón',
	'TEAMPAGE_FORUMS_EXPLAIN'	=> 'Ef já er valið birtist hjá stjórnendum listi yfir öll spjallsvæði þar sem þeir hafa stjórnandaheimildir. Þetta getur valdið miklu álagi á gagnagrunn stórra spjallborða.',
	'TEAMPAGE_MEMBERSHIPS'		=> 'Birta hópaðild notenda',
	'TEAMPAGE_SETTINGS'			=> 'Stillingar teymissíðu',
	'TOTAL_MEMBERS'				=> 'Meðlimir',

	'USERS_APPROVED'				=> 'Notendur voru samþykktir.',
	'USER_DEFAULT'					=> 'Sjálfgefið fyrir notanda',
	'USER_DEF_GROUPS'				=> 'Notendaskilgreindir hópar',
	'USER_DEF_GROUPS_EXPLAIN'		=> 'Þetta eru hópar sem þú eða annar stjórnandi hefur stofnað á spjallborðinu. Þú getur stjórnað aðild, breytt eiginleikum hóps eða jafnvel eytt honum.',
	'USER_GROUP_DEFAULT'			=> 'Gera að sjálfgefnum hópi',
	'USER_GROUP_DEFAULT_EXPLAIN'	=> 'Ef já er valið verður þessi hópur sjálfgefinn hópur notendanna sem bætt er við.',
	'USER_GROUP_LEADER'				=> 'Gera að hópstjóra',
));
