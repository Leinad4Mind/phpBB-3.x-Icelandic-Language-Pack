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
	'ACP_PERMISSIONS_EXPLAIN'	=> '
		<p>Heimildir eru mjög nákvæmar og skiptast í fjóra meginhluta:</p>

		<h2>Almennar heimildir</h2>
		<p>Þær stýra aðgangi á öllu spjallborðinu og skiptast í notendaheimildir, hópaheimildir, kerfisstjóra og almenna umsjónarmenn.</p>

		<h2>Heimildir spjallsvæða</h2>
		<p>Þær stýra aðgangi að hverju spjallsvæði og skiptast í heimildir spjallsvæða, umsjónarmenn spjallsvæða og heimildir notenda og hópa á spjallsvæðum.</p>

		<h2>Heimildahlutverk</h2>
		<p>Þau búa til mismunandi heimildasöfn sem síðar má úthluta eftir hlutverkum. Sjálfgefnu hlutverkin ættu að henta bæði litlum og stórum spjallborðum, en innan hvers flokks getur þú bætt við, breytt eða eytt hlutverkum eftir þörfum.</p>

		<h2>Heimildamaskar</h2>
		<p>Þeir sýna raunheimildir notenda, umsjónarmanna, kerfisstjóra eða spjallsvæða.</p>

		<br />

		<p>Nánari upplýsingar um uppsetningu og stjórnun heimilda í phpBB3 eru í kaflanum <a href="https://www.phpbb.com/support/docs/en/3.3/ug/quickstart/permissions/">Stilling heimilda í flýtihandbókinni</a>.</p>
	',

	'ACL_NEVER'				=> 'Aldrei',
	'ACL_SET'				=> 'Stilla heimildir',
	'ACL_SET_EXPLAIN'		=> 'Heimildir byggjast á einföldu <strong>JÁ</strong>/<strong>NEI</strong> kerfi. Ef valkostur er stilltur á <strong>ALDREI</strong> fyrir notanda eða notendahóp hefur það forgang fram yfir öll önnur gildi. Veldu <strong>NEI</strong> ef þú vilt ekki úthluta þessum notanda eða hópi gildi fyrir valkostinn. Ef gildi hefur verið úthlutað annars staðar verður það notað, annars er gert ráð fyrir <strong>ALDREI</strong>. Heimildastillingin sem þú skilgreinir verður afrituð á öll merkt atriði. Athugaðu að stilling kerfisstjórnarheimilda fyrir stofnandareikninga hefur engin áhrif, því þær eru alltaf <strong>JÁ</strong> hjá stofnendum.',
	'ACL_SETTING'			=> 'Stilling',

	'ACL_TYPE_A_'			=> 'Kerfisstjórnarheimildir',
	'ACL_TYPE_F_'			=> 'Heimildir spjallsvæðis',
	'ACL_TYPE_M_'			=> 'Umsjónarheimildir',
	'ACL_TYPE_U_'			=> 'Notendaheimildir',

	'ACL_TYPE_GLOBAL_A_'	=> 'Kerfisstjórnarheimildir',
	'ACL_TYPE_GLOBAL_U_'	=> 'Notendaheimildir',
	'ACL_TYPE_GLOBAL_M_'	=> 'Heimildir almennra umsjónarmanna',
	'ACL_TYPE_LOCAL_M_'		=> 'Heimildir umsjónarmanna spjallsvæðis',
	'ACL_TYPE_LOCAL_F_'		=> 'Heimildir spjallsvæðis',

	'ACL_NO'				=> 'Nei',
	'ACL_VIEW'				=> 'Skoða heimildir',
	'ACL_VIEW_EXPLAIN'		=> 'Hér sérðu raunheimildir notandans eða hópsins. Rauður ferningur merkir að heimildina vanti en grænn ferningur að hún sé til staðar.',
	'ACL_YES'				=> 'Já',

	'ACP_ADMINISTRATORS_EXPLAIN'				=> 'Hér getur þú úthlutað notendum eða hópum kerfisstjórnarheimildum. Allir notendur með slíkar heimildir geta opnað stjórnborð kerfisstjóra.',
	'ACP_FORUM_MODERATORS_EXPLAIN'				=> 'Hér getur þú gert notendur og hópa að umsjónarmönnum spjallsvæða. Notaðu viðeigandi síðu til að veita aðgang að spjallsvæðum eða skilgreina almennar umsjónar- og kerfisstjórnarheimildir.',
	'ACP_FORUM_PERMISSIONS_EXPLAIN'				=> 'Hér getur þú breytt því hvaða notendur og hópar hafa aðgang að tilteknum spjallsvæðum. Notaðu viðeigandi síðu til að úthluta umsjónarmönnum eða skilgreina kerfisstjóra.',
	'ACP_FORUM_PERMISSIONS_COPY_EXPLAIN'		=> 'Hér getur þú afritað heimildir eins spjallsvæðis á eitt eða fleiri önnur spjallsvæði.',
	'ACP_GLOBAL_MODERATORS_EXPLAIN'				=> 'Hér getur þú úthlutað notendum eða hópum almennum umsjónarheimildum. Þessir umsjónarmenn eru eins og venjulegir umsjónarmenn en hafa aðgang að öllum spjallsvæðum.',
	'ACP_GROUPS_FORUM_PERMISSIONS_EXPLAIN'		=> 'Hér getur þú úthlutað hópum heimildum spjallsvæða.',
	'ACP_GROUPS_PERMISSIONS_EXPLAIN'			=> 'Hér getur þú úthlutað hópum almennum heimildum: notendaheimildum, almennum umsjónarheimildum og kerfisstjórnarheimildum. Notendaheimildir ná meðal annars til smámynda og einkaskilaboða; umsjónarheimildir til samþykktar færslna, stjórnunar umræðna og banna; kerfisstjórnarheimildir til breytinga á heimildum, sérsniðinna BB-kóða og stjórnunar spjallsvæða. Einstökum notendaheimildum ætti aðeins að breyta í undantekningartilvikum; betra er að setja notendur í hópa og úthluta hópunum heimildum.',
	'ACP_ADMIN_ROLES_EXPLAIN'					=> 'Hér getur þú stjórnað hlutverkum kerfisstjórnarheimilda. Hlutverk eru raunheimildir; ef hlutverki er breytt breytast einnig heimildir atriða sem nota það.',
	'ACP_FORUM_ROLES_EXPLAIN'					=> 'Hér getur þú stjórnað hlutverkum heimilda spjallsvæða. Hlutverk eru raunheimildir; ef hlutverki er breytt breytast einnig heimildir atriða sem nota það.',
	'ACP_MOD_ROLES_EXPLAIN'						=> 'Hér getur þú stjórnað hlutverkum umsjónarheimilda. Hlutverk eru raunheimildir; ef hlutverki er breytt breytast einnig heimildir atriða sem nota það.',
	'ACP_USER_ROLES_EXPLAIN'					=> 'Hér getur þú stjórnað hlutverkum notendaheimilda. Hlutverk eru raunheimildir; ef hlutverki er breytt breytast einnig heimildir atriða sem nota það.',
	'ACP_USERS_FORUM_PERMISSIONS_EXPLAIN'		=> 'Hér getur þú úthlutað notendum heimildum spjallsvæða.',
	'ACP_USERS_PERMISSIONS_EXPLAIN'				=> 'Hér getur þú úthlutað notendum almennum heimildum: notendaheimildum, almennum umsjónarheimildum og kerfisstjórnarheimildum. Notendaheimildir ná meðal annars til smámynda og einkaskilaboða; umsjónarheimildir til samþykktar færslna, stjórnunar umræðna og banna; kerfisstjórnarheimildir til breytinga á heimildum, sérsniðinna BB-kóða og stjórnunar spjallsvæða. Fyrir marga notendur er ráðlagt að nota hópaheimildakerfið. Einstökum notendaheimildum ætti aðeins að breyta í undantekningartilvikum.',
	'ACP_VIEW_ADMIN_PERMISSIONS_EXPLAIN'		=> 'Hér getur þú skoðað raunverulegar kerfisstjórnarheimildir valinna notenda eða hópa.',
	'ACP_VIEW_GLOBAL_MOD_PERMISSIONS_EXPLAIN'	=> 'Hér getur þú skoðað almennar umsjónarheimildir valinna notenda eða hópa.',
	'ACP_VIEW_FORUM_PERMISSIONS_EXPLAIN'		=> 'Hér getur þú skoðað heimildir valinna notenda eða hópa á völdum spjallsvæðum.',
	'ACP_VIEW_FORUM_MOD_PERMISSIONS_EXPLAIN'	=> 'Hér getur þú skoðað umsjónarheimildir valinna notenda eða hópa á völdum spjallsvæðum.',
	'ACP_VIEW_USER_PERMISSIONS_EXPLAIN'			=> 'Hér getur þú skoðað raunverulegar notendaheimildir valinna notenda eða hópa.',

	'ADD_GROUPS'				=> 'Bæta við hópum',
	'ADD_PERMISSIONS'			=> 'Bæta við heimildum',
	'ADD_USERS'					=> 'Bæta við notendum',
	'ADVANCED_PERMISSIONS'		=> 'Ítarlegar heimildir',
	'ALL_GROUPS'				=> 'Velja alla hópa',
	'ALL_NEVER'					=> 'Allt <strong>ALDREI</strong>',
	'ALL_NO'					=> 'Allt <strong>NEI</strong>',
	'ALL_USERS'					=> 'Velja alla notendur',
	'ALL_YES'					=> 'Allt <strong>JÁ</strong>',
	'APPLY_ALL_PERMISSIONS'		=> 'Virkja allar heimildir',
	'APPLY_PERMISSIONS'			=> 'Virkja heimildir',
	'APPLY_PERMISSIONS_EXPLAIN'	=> 'Heimildirnar og hlutverkið sem skilgreind eru fyrir þetta atriði verða aðeins virkjuð fyrir það og öll merkt atriði.',
	'AUTH_UPDATED'				=> 'Heimildirnar voru uppfærðar.',

	'COPY_PERMISSIONS_CONFIRM'				=> 'Ertu viss um að þú viljir framkvæma þessa aðgerð? Hún skrifar yfir allar heimildir sem fyrir eru á völdum áfangastöðum.',
	'COPY_PERMISSIONS_FORUM_FROM_EXPLAIN'	=> 'Upprunaspjallsvæðið sem afrita á heimildir frá.',
	'COPY_PERMISSIONS_FORUM_TO_EXPLAIN'		=> 'Spjallsvæðin sem afrituðu heimildirnar eiga að gilda fyrir.',
	'COPY_PERMISSIONS_FROM'					=> 'Afrita heimildir frá',
	'COPY_PERMISSIONS_TO'					=> 'Virkja heimildir fyrir',

	'CREATE_ROLE'				=> 'Stofna hlutverk',
	'CREATE_ROLE_FROM'			=> 'Nota stillingar úr…',
	'CUSTOM'					=> 'Sérsniðið…',

	'DEFAULT'					=> 'Sjálfgefið',
	'DELETE_ROLE'				=> 'Eyða hlutverki',
	'DELETE_ROLE_CONFIRM'		=> 'Ertu viss um að þú viljir fjarlægja þetta hlutverk? Atriði sem nota hlutverkið missa <strong>ekki</strong> heimildastillingar sínar.',
	'DISPLAY_ROLE_ITEMS'		=> 'Skoða atriði sem nota hlutverkið',

	'EDIT_PERMISSIONS'			=> 'Breyta heimildum',
	'EDIT_ROLE'					=> 'Breyta hlutverki',

	'GROUPS_NOT_ASSIGNED'		=> 'Engum hópi er úthlutað þessu hlutverki',

	'LOOK_UP_GROUP'				=> 'Leita að notendahópi',
	'LOOK_UP_USER'				=> 'Leita að notanda',

	'MANAGE_GROUPS'		=> 'Stjórna hópum',
	'MANAGE_USERS'		=> 'Stjórna notendum',

	'NO_AUTH_SETTING_FOUND'		=> 'Heimildastillingar eru ekki skilgreindar.',
	'NO_ROLE_ASSIGNED'			=> 'Ekkert hlutverk úthlutað…',
	'NO_ROLE_ASSIGNED_EXPLAIN'	=> 'Þetta hlutverk breytir ekki heimildunum hægra megin. Til að afstilla eða fjarlægja allar heimildir skaltu nota tengilinn „Allt <strong>NEI</strong>“.',
	'NO_ROLE_AVAILABLE'			=> 'Ekkert hlutverk tiltækt',
	'NO_ROLE_NAME_SPECIFIED'	=> 'Gefðu hlutverkinu heiti.',
	'NO_ROLE_SELECTED'			=> 'Hlutverkið fannst ekki.',
	'NO_USER_GROUP_SELECTED'	=> 'Þú hefur ekki valið notanda eða hóp.',

	'ONLY_FORUM_DEFINED'	=> 'Þú valdir aðeins spjallsvæði. Veldu einnig að minnsta kosti einn notanda eða einn hóp.',

	'PERMISSION_APPLIED_TO_ALL'		=> 'Heimildir og hlutverk verða einnig virkjuð fyrir alla merkta hluti',
	'PLUS_SUBFORUMS'				=> '+Undirsvæði',

	'REMOVE_PERMISSIONS'			=> 'Fjarlægja heimildir',
	'REMOVE_ROLE'					=> 'Fjarlægja hlutverk',
	'RESULTING_PERMISSION'			=> 'Heimild sem fæst',
	'ROLE'							=> 'Hlutverk',
	'ROLE_ADD_SUCCESS'				=> 'Hlutverkinu var bætt við.',
	'ROLE_ASSIGNED_TO'				=> 'Notendur/hópar sem fá %s',
	'ROLE_DELETED'					=> 'Hlutverkið var fjarlægt.',
	'ROLE_DESCRIPTION'				=> 'Lýsing hlutverks',

	'ROLE_ADMIN_FORUM'			=> 'Stjórnandi spjallsvæða',
	'ROLE_ADMIN_FULL'			=> 'Fullur stjórnandi',
	'ROLE_ADMIN_STANDARD'		=> 'Venjulegur stjórnandi',
	'ROLE_ADMIN_USERGROUP'		=> 'Stjórnandi notenda og hópa',
	'ROLE_FORUM_BOT'			=> 'Aðgangur vélmenna',
	'ROLE_FORUM_FULL'			=> 'Fullur aðgangur',
	'ROLE_FORUM_LIMITED'		=> 'Takmarkaður aðgangur',
	'ROLE_FORUM_LIMITED_POLLS'	=> 'Takmarkaður aðgangur + skoðanakannanir',
	'ROLE_FORUM_NOACCESS'		=> 'Enginn aðgangur',
	'ROLE_FORUM_ONQUEUE'		=> 'Í samþykktarbiðröð',
	'ROLE_FORUM_POLLS'			=> 'Venjulegur aðgangur + skoðanakannanir',
	'ROLE_FORUM_READONLY'		=> 'Aðeins lesaðgangur',
	'ROLE_FORUM_STANDARD'		=> 'Venjulegur aðgangur',
	'ROLE_FORUM_NEW_MEMBER'		=> 'Aðgangur nýskráðra notenda',
	'ROLE_MOD_FULL'				=> 'Fullur stjórnandi',
	'ROLE_MOD_QUEUE'			=> 'Stjórnandi samþykktarbiðraðar',
	'ROLE_MOD_SIMPLE'			=> 'Einfaldur stjórnandi',
	'ROLE_MOD_STANDARD'			=> 'Venjulegur stjórnandi',
	'ROLE_USER_FULL'			=> 'Allir eiginleikar',
	'ROLE_USER_LIMITED'			=> 'Takmarkaðir eiginleikar',
	'ROLE_USER_NOAVATAR'		=> 'Engin smámynd',
	'ROLE_USER_NOPM'			=> 'Engin einkaskilaboð',
	'ROLE_USER_STANDARD'		=> 'Venjulegir eiginleikar',
	'ROLE_USER_NEW_MEMBER'		=> 'Eiginleikar nýskráðra notenda',

	'ROLE_DESCRIPTION_ADMIN_FORUM'			=> 'Getur opnað stjórnun spjallsvæða og heimildastillingar þeirra.',
	'ROLE_DESCRIPTION_ADMIN_FULL'			=> 'Hefur aðgang að öllum stjórnunaraðgerðum spjallborðsins.<br />Ekki mælt með.',
	'ROLE_DESCRIPTION_ADMIN_STANDARD'		=> 'Hefur aðgang að flestum stjórnunareiginleikum en má ekki nota verkfæri tengd netþjóni eða kerfi.',
	'ROLE_DESCRIPTION_ADMIN_USERGROUP'		=> 'Getur stjórnað hópum og notendum: breytt heimildum og stillingum, stjórnað bönnum og tignum.',
	'ROLE_DESCRIPTION_FORUM_BOT'			=> 'Mælt er með þessu hlutverki fyrir vélmenni og leitarvélar.',
	'ROLE_DESCRIPTION_FORUM_FULL'			=> 'Getur notað alla eiginleika spjallsvæðis, þar á meðal sent tilkynningar og límdar umræður, og má hunsa flæðimörk.<br />Ekki mælt með fyrir venjulega notendur.',
	'ROLE_DESCRIPTION_FORUM_LIMITED'		=> 'Getur notað suma eiginleika spjallsvæðis en ekki hengt við skrár eða notað færslutákn.',
	'ROLE_DESCRIPTION_FORUM_LIMITED_POLLS'	=> 'Eins og Takmarkaður aðgangur en má einnig búa til skoðanakannanir.',
	'ROLE_DESCRIPTION_FORUM_NOACCESS'		=> 'Getur hvorki séð né opnað spjallsvæðið.',
	'ROLE_DESCRIPTION_FORUM_ONQUEUE'		=> 'Getur notað flesta eiginleika, þar á meðal viðhengi, en stjórnandi þarf að samþykkja færslur og umræður.',
	'ROLE_DESCRIPTION_FORUM_POLLS'			=> 'Eins og Venjulegur aðgangur en má einnig búa til skoðanakannanir.',
	'ROLE_DESCRIPTION_FORUM_READONLY'		=> 'Getur lesið spjallsvæðið en ekki stofnað umræður eða svarað færslum.',
	'ROLE_DESCRIPTION_FORUM_STANDARD'		=> 'Getur notað flesta eiginleika, þar á meðal viðhengi og eyðingu eigin umræðna, en ekki læst eigin umræðum eða búið til skoðanakannanir.',
	'ROLE_DESCRIPTION_FORUM_NEW_MEMBER'		=> 'Hlutverk fyrir meðlimi sérstaka hópsins nýskráðir notendur; inniheldur <strong>ALDREI</strong>-heimildir sem læsa eiginleikum fyrir nýja notendur.',
	'ROLE_DESCRIPTION_MOD_FULL'				=> 'Getur notað alla stjórnendaeiginleika, þar á meðal bannað notendur.',
	'ROLE_DESCRIPTION_MOD_QUEUE'			=> 'Getur notað samþykktarbiðröðina til að staðfesta og breyta færslum, en ekkert annað.',
	'ROLE_DESCRIPTION_MOD_SIMPLE'			=> 'Getur aðeins framkvæmt grunnaðgerðir á umræðum. Má ekki senda viðvaranir eða nota samþykktarbiðröðina.',
	'ROLE_DESCRIPTION_MOD_STANDARD'			=> 'Getur notað flest stjórnandaverkfæri en ekki bannað notendur eða breytt höfundi færslu.',
	'ROLE_DESCRIPTION_USER_FULL'			=> 'Getur notað alla tiltæka notendaeiginleika, þar á meðal breytt notandanafni eða hunsað flæðimörk.<br />Ekki mælt með.',
	'ROLE_DESCRIPTION_USER_LIMITED'			=> 'Hefur aðgang að sumum notendaeiginleikum. Viðhengi, tölvupóstur og skyndiskilaboð eru ekki leyfð.',
	'ROLE_DESCRIPTION_USER_NOAVATAR'		=> 'Hefur takmarkaða eiginleika og má ekki nota smámynd.',
	'ROLE_DESCRIPTION_USER_NOPM'			=> 'Hefur takmarkaða eiginleika og má ekki nota einkaskilaboð.',
	'ROLE_DESCRIPTION_USER_STANDARD'		=> 'Hefur aðgang að flestum en ekki öllum notendaeiginleikum; má til dæmis ekki breyta notandanafni eða hunsa flæðimörk.',
	'ROLE_DESCRIPTION_USER_NEW_MEMBER'		=> 'Hlutverk fyrir meðlimi sérstaka hópsins nýskráðir notendur; inniheldur <strong>ALDREI</strong>-heimildir sem læsa eiginleikum fyrir nýja notendur.',

	'ROLE_DESCRIPTION_EXPLAIN'		=> 'Þú getur slegið inn stutta skýringu á tilgangi hlutverksins. Textinn birtist einnig á heimildasíðum.',
	'ROLE_DESCRIPTION_LONG'			=> 'Lýsing hlutverksins er of löng; takmarkaðu hana við 4000 stafi.',
	'ROLE_DETAILS'					=> 'Upplýsingar um hlutverk',
	'ROLE_EDIT_SUCCESS'				=> 'Hlutverkinu var breytt.',
	'ROLE_NAME'						=> 'Heiti hlutverks',
	'ROLE_NAME_ALREADY_EXIST'		=> 'Hlutverk með heitinu <strong>%s</strong> er þegar til fyrir tilgreinda heimildategund.',
	'ROLE_NOT_ASSIGNED'				=> 'Hlutverkinu hefur ekki verið úthlutað enn.',

	'SELECTED_FORUM_NOT_EXIST'		=> 'Valið spjallsvæði eða valin spjallsvæði eru ekki til.',
	'SELECTED_GROUP_NOT_EXIST'		=> 'Valinn hópur eða valdir hópar eru ekki til.',
	'SELECTED_USER_NOT_EXIST'		=> 'Valinn notandi eða valdir notendur eru ekki til.',
	'SELECT_FORUM_SUBFORUM_EXPLAIN'	=> 'Öll undirsvæði spjallsvæðisins sem þú velur hér verða einnig valin.',
	'SELECT_ROLE'					=> 'Veldu hlutverk…',
	'SELECT_TYPE'					=> 'Veldu tegund',
	'SET_PERMISSIONS'				=> 'Stilla heimildir',
	'SET_ROLE_PERMISSIONS'			=> 'Stilla heimildir hlutverks',
	'SET_USERS_PERMISSIONS'			=> 'Stilla notendaheimildir',
	'SET_USERS_FORUM_PERMISSIONS'	=> 'Stilla heimildir notanda á spjallsvæði',

	'TRACE_DEFAULT'					=> 'Sjálfgefið er að allar heimildir séu <strong>NEI</strong> (óskilgreindar). Aðrar stillingar geta því hnekkt heimildinni.',
	'TRACE_FOR'						=> 'Rakning fyrir',
	'TRACE_GLOBAL_SETTING'			=> '%s (víðvær)',
	'TRACE_GROUP_NEVER_TOTAL_NEVER'	=> 'Heimild þessa hóps er <strong>ALDREI</strong>, eins og heildarniðurstaðan, svo fyrri niðurstaða helst.',
	'TRACE_GROUP_NEVER_TOTAL_NEVER_LOCAL'	=> 'Heimild þessa hóps á þessu spjallsvæði er <strong>ALDREI</strong>, eins og heildarniðurstaðan, svo fyrri niðurstaða helst.',
	'TRACE_GROUP_NEVER_TOTAL_NO'	=> 'Heimild þessa hóps er <strong>ALDREI</strong> og verður nýtt heildargildi þar sem það hafði ekki verið stillt (<strong>NEI</strong>).',
	'TRACE_GROUP_NEVER_TOTAL_NO_LOCAL'	=> 'Heimild þessa hóps á þessu spjallsvæði er <strong>ALDREI</strong> og verður nýtt heildargildi þar sem það hafði ekki verið stillt (<strong>NEI</strong>).',
	'TRACE_GROUP_NEVER_TOTAL_YES'	=> 'Heimild þessa hóps er <strong>ALDREI</strong> og hnekkir heildargildinu <strong>JÁ</strong> með <strong>ALDREI</strong> fyrir þennan notanda.',
	'TRACE_GROUP_NEVER_TOTAL_YES_LOCAL'	=> 'Heimild þessa hóps á þessu spjallsvæði er <strong>ALDREI</strong> og hnekkir heildargildinu <strong>JÁ</strong> með <strong>ALDREI</strong> fyrir þennan notanda.',
	'TRACE_GROUP_NO'				=> 'Heimildin er <strong>NEI</strong> fyrir þennan hóp, svo fyrra heildargildi helst.',
	'TRACE_GROUP_NO_LOCAL'			=> 'Heimildin er <strong>NEI</strong> fyrir þennan hóp á þessu spjallsvæði, svo fyrra heildargildi helst.',
	'TRACE_GROUP_YES_TOTAL_NEVER'	=> 'Heimild þessa hóps er <strong>JÁ</strong>, en ekki er hægt að hnekkja heildargildinu <strong>ALDREI</strong>.',
	'TRACE_GROUP_YES_TOTAL_NEVER_LOCAL'	=> 'Heimild þessa hóps á þessu spjallsvæði er <strong>JÁ</strong>, en ekki er hægt að hnekkja heildargildinu <strong>ALDREI</strong>.',
	'TRACE_GROUP_YES_TOTAL_NO'		=> 'Heimild þessa hóps er <strong>JÁ</strong> og verður nýtt heildargildi þar sem það hafði ekki verið stillt (<strong>NEI</strong>).',
	'TRACE_GROUP_YES_TOTAL_NO_LOCAL'	=> 'Heimild þessa hóps á þessu spjallsvæði er <strong>JÁ</strong> og verður nýtt heildargildi þar sem það hafði ekki verið stillt (<strong>NEI</strong>).',
	'TRACE_GROUP_YES_TOTAL_YES'		=> 'Heimild þessa hóps er <strong>JÁ</strong> og heildarheimildin er þegar <strong>JÁ</strong>, svo heildarniðurstaðan helst.',
	'TRACE_GROUP_YES_TOTAL_YES_LOCAL'	=> 'Heimild þessa hóps á þessu spjallsvæði er <strong>JÁ</strong> og heildarheimildin er þegar <strong>JÁ</strong>, svo heildarniðurstaðan helst.',
	'TRACE_PERMISSION'				=> 'Rekja heimild — %s',
	'TRACE_RESULT'					=> 'Niðurstaða rakningar',
	'TRACE_SETTING'					=> 'Stilling rakningar',

	'TRACE_USER_GLOBAL_YES_TOTAL_YES'		=> 'Víðvær notendaheimild, óháð spjallsvæði, gefur <strong>JÁ</strong>, en heildarheimildin er þegar <strong>JÁ</strong>, svo heildarniðurstaðan helst. %sRekja víðværa heimild%s',
	'TRACE_USER_GLOBAL_YES_TOTAL_NEVER'		=> 'Víðvær notendaheimild, óháð spjallsvæði, gefur <strong>JÁ</strong> og hnekkir núverandi staðbundinni niðurstöðu <strong>ALDREI</strong>. %sRekja víðværa heimild%s',
	'TRACE_USER_GLOBAL_NEVER_TOTAL_KEPT'	=> 'Víðvær notendaheimild, óháð spjallsvæði, gefur <strong>ALDREI</strong> en hefur ekki áhrif á staðbundnu heimildina. %sRekja víðværa heimild%s',

	'TRACE_USER_FOUNDER'					=> 'Notandinn er stofnandi og því eru stjórnunarheimildir hans alltaf <strong>JÁ</strong>.',
	'TRACE_USER_KEPT'						=> 'Heimild notandans er <strong>NEI</strong>, svo fyrra heildargildi helst.',
	'TRACE_USER_KEPT_LOCAL'					=> 'Heimild notandans á þessu spjallsvæði er <strong>NEI</strong>, svo fyrra heildargildi helst.',
	'TRACE_USER_NEVER_TOTAL_NEVER'			=> 'Heimild notandans er <strong>ALDREI</strong> og heildargildið er <strong>ALDREI</strong>, svo ekkert breytist.',
	'TRACE_USER_NEVER_TOTAL_NEVER_LOCAL'	=> 'Heimild notandans á þessu spjallsvæði er <strong>ALDREI</strong> og heildargildið er <strong>ALDREI</strong>, svo ekkert breytist.',
	'TRACE_USER_NEVER_TOTAL_NO'				=> 'Heimild notandans er <strong>ALDREI</strong> og verður heildargildið þar sem það var NEI.',
	'TRACE_USER_NEVER_TOTAL_NO_LOCAL'		=> 'Heimild notandans á þessu spjallsvæði er <strong>ALDREI</strong> og verður heildargildið þar sem það var NEI.',
	'TRACE_USER_NEVER_TOTAL_YES'			=> 'Heimild notandans er <strong>ALDREI</strong> og hnekkir fyrra gildinu <strong>JÁ</strong>.',
	'TRACE_USER_NEVER_TOTAL_YES_LOCAL'		=> 'Heimild notandans á þessu spjallsvæði er <strong>ALDREI</strong> og hnekkir fyrra gildinu <strong>JÁ</strong>.',
	'TRACE_USER_NO_TOTAL_NO'				=> 'Heimild notandans er <strong>NEI</strong> og heildargildið var NEI, svo sjálfgefið verður <strong>ALDREI</strong>.',
	'TRACE_USER_NO_TOTAL_NO_LOCAL'			=> 'Heimild notandans á þessu spjallsvæði er <strong>NEI</strong> og heildargildið var NEI, svo sjálfgefið verður <strong>ALDREI</strong>.',
	'TRACE_USER_YES_TOTAL_NEVER'			=> 'Heimild notandans er <strong>JÁ</strong>, en ekki er hægt að hnekkja heildargildinu <strong>ALDREI</strong>.',
	'TRACE_USER_YES_TOTAL_NEVER_LOCAL'		=> 'Heimild notandans á þessu spjallsvæði er <strong>JÁ</strong>, en ekki er hægt að hnekkja heildargildinu <strong>ALDREI</strong>.',
	'TRACE_USER_YES_TOTAL_NO'				=> 'Heimild notandans er <strong>JÁ</strong> og verður heildargildið þar sem það var <strong>NEI</strong>.',
	'TRACE_USER_YES_TOTAL_NO_LOCAL'			=> 'Heimild notandans á þessu spjallsvæði er <strong>JÁ</strong> og verður heildargildið þar sem það var <strong>NEI</strong>.',
	'TRACE_USER_YES_TOTAL_YES'				=> 'Heimild notandans er <strong>JÁ</strong> og heildargildið er <strong>JÁ</strong>, svo ekkert breytist.',
	'TRACE_USER_YES_TOTAL_YES_LOCAL'		=> 'Heimild notandans á þessu spjallsvæði er <strong>JÁ</strong> og heildargildið er <strong>JÁ</strong>, svo ekkert breytist.',
	'TRACE_WHO'								=> 'Hver',
	'TRACE_TOTAL'							=> 'Samtals',

	'USERS_NOT_ASSIGNED'			=> 'Engum notendum er úthlutað þessu hlutverki',
	'USER_IS_MEMBER_OF_DEFAULT'		=> 'er meðlimur í eftirfarandi forskilgreindum hópum',
	'USER_IS_MEMBER_OF_CUSTOM'		=> 'er meðlimur í eftirfarandi notendaskilgreindum hópum',

	'VIEW_ASSIGNED_ITEMS'	=> 'Skoða úthlutaða hluti',
	'VIEW_LOCAL_PERMS'		=> 'Staðbundnar heimildir',
	'VIEW_GLOBAL_PERMS'		=> 'Víðværar heimildir',
	'VIEW_PERMISSIONS'		=> 'Skoða heimildir',

	'WRONG_PERMISSION_TYPE'				=> 'Röng heimildategund valin.',
	'WRONG_PERMISSION_SETTING_FORMAT'	=> 'Heimildastillingarnar eru á röngu sniði og phpBB getur ekki unnið rétt úr þeim.',
));
