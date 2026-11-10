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

/**
*	EXTENSION-DEVELOPERS PLEASE NOTE
*
*	You are able to put your permission sets into your extension.
*	The permissions logic should be added via the 'core.permissions' event.
*	You can easily add new permission categories, types and permissions, by
*	simply merging them into the respective arrays.
*	The respective language strings should be added into a language file, that
*	start with 'permissions_', so they are automatically loaded within the ACP.
*/

$lang = array_merge($lang, array(
	'ACL_CAT_ACTIONS'		=> 'Aðgerðir',
	'ACL_CAT_CONTENT'		=> 'Efni',
	'ACL_CAT_FORUMS'		=> 'Spjallsvæði',
	'ACL_CAT_MISC'			=> 'Ýmislegt',
	'ACL_CAT_PERMISSIONS'	=> 'Heimildir',
	'ACL_CAT_PM'			=> 'Einkaskilaboð',
	'ACL_CAT_POLLS'			=> 'Skoðanakannanir',
	'ACL_CAT_POST'			=> 'Póstur',
	'ACL_CAT_POST_ACTIONS'	=> 'Aðgerðir færslna',
	'ACL_CAT_POSTING'		=> 'Færslur',
	'ACL_CAT_PROFILE'		=> 'Notandasnið',
	'ACL_CAT_SETTINGS'		=> 'Stillingar',
	'ACL_CAT_TOPIC_ACTIONS'	=> 'Aðgerðir umræðna',
	'ACL_CAT_USER_GROUP'	=> 'Notendur og hópar',
));

// User Permissions
$lang = array_merge($lang, array(
	'ACL_U_VIEWPROFILE'	=> 'Getur skoðað notandasnið, meðlimalista og lista yfir tengda notendur',
	'ACL_U_CHGNAME'		=> 'Getur breytt notandanafni',
	'ACL_U_CHGPASSWD'	=> 'Getur breytt lykilorði',
	'ACL_U_CHGEMAIL'	=> 'Getur breytt netfangi',
	'ACL_U_CHGAVATAR'	=> 'Getur breytt smámynd',
	'ACL_U_CHGGRP'		=> 'Getur breytt sjálfgefnum notendahópi',
	'ACL_U_CHGPROFILEINFO'	=> 'Getur breytt upplýsingum í notandareitum',

	'ACL_U_ATTACH'		=> 'Getur hengt við skrár',
	'ACL_U_DOWNLOAD'	=> 'Getur sótt skrár',
	'ACL_U_SAVEDRAFTS'	=> 'Getur vistað drög',
	'ACL_U_CHGCENSORS'	=> 'Getur gert orðasíur óvirkar',
	'ACL_U_SIG'			=> 'Getur notað undirskrift',
	'ACL_U_EMOJI'		=> 'Getur notað tjákn og auðgaða textastafi í heiti umræðu',

	'ACL_U_SENDPM'		=> 'Getur sent einkaskilaboð',
	'ACL_U_MASSPM'		=> 'Getur sent einkaskilaboð til margra notenda',
	'ACL_U_MASSPM_GROUP'=> 'Getur sent einkaskilaboð til hópa',
	'ACL_U_READPM'		=> 'Getur lesið einkaskilaboð',
	'ACL_U_PM_EDIT'		=> 'Getur breytt eigin einkaskilaboðum',
	'ACL_U_PM_DELETE'	=> 'Getur fjarlægt einkaskilaboð úr eigin möppu',
	'ACL_U_PM_FORWARD'	=> 'Getur framsent einkaskilaboð',
	'ACL_U_PM_EMAILPM'	=> 'Getur sent einkaskilaboð með tölvupósti',
	'ACL_U_PM_PRINTPM'	=> 'Getur prentað einkaskilaboð',
	'ACL_U_PM_ATTACH'	=> 'Getur hengt skrár við einkaskilaboð',
	'ACL_U_PM_DOWNLOAD'	=> 'Getur sótt skrár úr einkaskilaboðum',
	'ACL_U_PM_BBCODE'	=> 'Getur notað BBCode í einkaskilaboðum',
	'ACL_U_PM_SMILIES'	=> 'Getur notað broskarla í einkaskilaboðum',
	'ACL_U_PM_IMG'		=> 'Getur notað BBCode-merkið [img] í einkaskilaboðum',
	'ACL_U_PM_FLASH'	=> 'Getur notað BBCode-merkið [flash] í einkaskilaboðum',

	'ACL_U_SENDEMAIL'	=> 'Getur sent tölvupóst',
	'ACL_U_SENDIM'		=> 'Getur sent skyndiskilaboð',
	'ACL_U_IGNOREFLOOD'	=> 'Getur hunsað flóðamörk',
	'ACL_U_HIDEONLINE'	=> 'Getur falið tengistöðu',
	'ACL_U_VIEWONLINE'	=> 'Getur séð falda tengda notendur',
	'ACL_U_SEARCH'		=> 'Getur leitað á spjallborðinu',
));

// Forum Permissions
$lang = array_merge($lang, array(
	'ACL_F_LIST'		=> 'Getur séð spjallsvæðið',
	'ACL_F_LIST_TOPICS' => 'Getur séð umræður',
	'ACL_F_READ'		=> 'Getur lesið spjallsvæðið',
	'ACL_F_SEARCH'		=> 'Getur leitað á spjallsvæðinu',
	'ACL_F_SUBSCRIBE'	=> 'Getur fylgst með spjallsvæðinu',
	'ACL_F_PRINT'		=> 'Getur prentað umræður',
	'ACL_F_EMAIL'		=> 'Getur sent umræður með tölvupósti',
	'ACL_F_BUMP'		=> 'Getur fært umræður efst',
	'ACL_F_USER_LOCK'	=> 'Getur læst eigin umræðum',
	'ACL_F_DOWNLOAD'	=> 'Getur sótt skrár',
	'ACL_F_REPORT'		=> 'Getur tilkynnt færslur',

	'ACL_F_POST'		=> 'Getur stofnað nýjar umræður',
	'ACL_F_STICKY'		=> 'Getur stofnað límdar umræður',
	'ACL_F_ANNOUNCE'	=> 'Getur birt tilkynningar',
	'ACL_F_ANNOUNCE_GLOBAL'	=> 'Getur birt almennar tilkynningar',
	'ACL_F_REPLY'		=> 'Getur svarað umræðum',
	'ACL_F_EDIT'		=> 'Getur breytt eigin færslum',
	'ACL_F_DELETE'		=> 'Getur eytt eigin færslum varanlega',
	'ACL_F_SOFTDELETE'	=> 'Getur eytt eigin færslum tímabundið<br /><em>Stjórnendur sem mega samþykkja færslur geta endurheimt færslur sem hefur verið eytt tímabundið.</em>',
	'ACL_F_IGNOREFLOOD' => 'Getur hunsað flóðamörk',
	'ACL_F_POSTCOUNT'	=> 'Hækkar færsluteljara<br /><em>Athugaðu að þessi stilling hefur aðeins áhrif á nýjar færslur.</em>',
	'ACL_F_NOAPPROVE'	=> 'Getur sent færslur án samþykkis',

	'ACL_F_ATTACH'		=> 'Getur hengt við skrár',
	'ACL_F_ICONS'		=> 'Getur notað tákn fyrir umræður og færslur',
	'ACL_F_BBCODE'		=> 'Getur notað BBCode',
	'ACL_F_FLASH'		=> 'Getur notað BBCode-merkið [flash]',
	'ACL_F_IMG'			=> 'Getur notað BBCode-merkið [img]',
	'ACL_F_SIGS'		=> 'Getur notað undirskriftir',
	'ACL_F_SMILIES'		=> 'Getur notað broskarla',

	'ACL_F_POLL'		=> 'Getur stofnað skoðanakannanir',
	'ACL_F_VOTE'		=> 'Getur kosið í skoðanakönnunum',
	'ACL_F_VOTECHG'		=> 'Getur breytt greiddu atkvæði',
));

// Moderator Permissions
$lang = array_merge($lang, array(
	'ACL_M_EDIT'		=> 'Getur breytt færslum',
	'ACL_M_DELETE'		=> 'Getur eytt færslum varanlega',
	'ACL_M_SOFTDELETE'	=> 'Getur eytt færslum tímabundið<br /><em>Stjórnendur sem mega samþykkja færslur geta endurheimt færslur sem hefur verið eytt tímabundið.</em>',
	'ACL_M_APPROVE'		=> 'Getur samþykkt og endurheimt færslur',
	'ACL_M_REPORT'		=> 'Getur lokað og eytt tilkynningum',
	'ACL_M_CHGPOSTER'	=> 'Getur breytt höfundi færslu',

	'ACL_M_MOVE'	=> 'Getur flutt umræður',
	'ACL_M_LOCK'	=> 'Getur læst umræðum',
	'ACL_M_SPLIT'	=> 'Getur skipt umræðum',
	'ACL_M_MERGE'	=> 'Getur sameinað umræður',

	'ACL_M_INFO'		=> 'Getur skoðað upplýsingar um færslu',
	'ACL_M_WARN'		=> 'Getur gefið út viðvaranir',
	'ACL_M_PM_REPORT'	=> 'Getur lokað og eytt tilkynningum um einkaskilaboð',
	'ACL_M_BAN'			=> 'Getur stjórnað bönnum',
));

// Admin Permissions
$lang = array_merge($lang, array(
	'ACL_A_BOARD'		=> 'Getur breytt stillingum spjallborðs og leitað að uppfærslum',
	'ACL_A_SERVER'		=> 'Getur breytt stillingum þjóns og samskipta',
	'ACL_A_JABBER'		=> 'Getur breytt Jabber-stillingum',
	'ACL_A_PHPINFO'		=> 'Getur skoðað PHP-stillingar',

	'ACL_A_FORUM'		=> 'Getur stjórnað spjallsvæðum',
	'ACL_A_FORUMADD'	=> 'Getur bætt við nýjum spjallsvæðum',
	'ACL_A_FORUMDEL'	=> 'Getur eytt spjallsvæðum',
	'ACL_A_PRUNE'		=> 'Getur grisjað spjallsvæði',

	'ACL_A_ICONS'		=> 'Getur breytt táknum umræðna og færslna og broskörlum',
	'ACL_A_WORDS'		=> 'Getur breytt orðasíum',
	'ACL_A_BBCODE'		=> 'Getur skilgreint BBCode-merki',
	'ACL_A_ATTACH'		=> 'Getur breytt stillingum viðhengja',

	'ACL_A_USER'		=> 'Getur stjórnað notendum<br /><em>Þetta felur einnig í sér að sjá vafra notanda á listanum yfir tengda notendur.</em>',
	'ACL_A_USERDEL'		=> 'Getur eytt og grisjað notendur',
	'ACL_A_GROUP'		=> 'Getur stjórnað hópum',
	'ACL_A_GROUPADD'	=> 'Getur bætt við nýjum hópum',
	'ACL_A_GROUPDEL'	=> 'Getur eytt hópum',
	'ACL_A_RANKS'		=> 'Getur stjórnað tignum',
	'ACL_A_PROFILE'		=> 'Getur stjórnað sérsniðnum notandareitum',
	'ACL_A_NAMES'		=> 'Getur stjórnað óleyfilegum nöfnum',
	'ACL_A_BAN'			=> 'Getur stjórnað bönnum',

	'ACL_A_VIEWAUTH'	=> 'Getur skoðað heimildayfirlit',
	'ACL_A_AUTHGROUPS'	=> 'Getur breytt heimildum einstakra hópa',
	'ACL_A_AUTHUSERS'	=> 'Getur breytt heimildum einstakra notenda',
	'ACL_A_FAUTH'		=> 'Getur breytt heimildaflokki spjallsvæða',
	'ACL_A_MAUTH'		=> 'Getur breytt heimildaflokki stjórnenda',
	'ACL_A_AAUTH'		=> 'Getur breytt heimildaflokki kerfisstjóra',
	'ACL_A_UAUTH'		=> 'Getur breytt heimildaflokki notenda',
	'ACL_A_ROLES'		=> 'Getur stjórnað hlutverkum',
	'ACL_A_SWITCHPERM'	=> 'Getur notað heimildir annarra',

	'ACL_A_STYLES'		=> 'Getur stjórnað stílum',
	'ACL_A_EXTENSIONS'	=> 'Getur stjórnað viðbótum',
	'ACL_A_VIEWLOGS'	=> 'Getur skoðað annála',
	'ACL_A_CLEARLOGS'	=> 'Getur hreinsað annála',
	'ACL_A_MODULES'		=> 'Getur stjórnað einingum',
	'ACL_A_LANGUAGE'	=> 'Getur stjórnað tungumálapökkum',
	'ACL_A_EMAIL'		=> 'Getur sent fjöldatölvupóst',
	'ACL_A_BOTS'		=> 'Getur stjórnað vélmennum',
	'ACL_A_REASONS'		=> 'Getur stjórnað ástæðum tilkynninga og synjana',
	'ACL_A_BACKUP'		=> 'Getur afritað og endurheimt gagnagrunn',
	'ACL_A_SEARCH'		=> 'Getur stjórnað leitarvélum og leitarstillingum',
));
