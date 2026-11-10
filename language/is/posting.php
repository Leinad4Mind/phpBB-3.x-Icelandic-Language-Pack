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
	'ADD_ATTACHMENT'			=> 'Bæta við viðhengi',
	'ADD_ATTACHMENT_EXPLAIN'	=> 'Ef þú vilt hengja við eina eða fleiri skrár, notaðu reitina hér að neðan.',
	'ADD_FILE'					=> 'Bæta við skrá',
	'ADD_POLL'					=> 'Skoðanakönnun',
	'ADD_POLL_EXPLAIN'			=> 'Ef þú vilt ekki bæta við skoðanakönnun, skildu þessa reiti eftir auða.',
	'ALREADY_DELETED'			=> 'Því miður en þessum skilaboðum hefur þegar verið eytt.',
	'ATTACH_COMMENT_NO_EMOJIS'	=> 'Athugasemd viðhengisins inniheldur bannaða stafi (Emoji).',
	'ATTACH_DISK_FULL'			=> 'Ekki er nægilegt laust diskrými til að senda þetta viðhengi.',
	'ATTACH_QUOTA_REACHED'		=> 'Því miður en geymsluplásskvótinn fyrir viðhengi orðinn fullur.',
	'ATTACH_SIG'				=> 'Undirskrift (undirskriftina stillirðu í stillingunum þínum)',

	'BBCODE_A_HELP'				=> 'Innbyggt viðhengi: [attachment=]skráarheiti.ext[/attachment]',
	'BBCODE_B_HELP'				=> 'Feitletraður texti: [b]texti[/b]',
	'BBCODE_C_HELP'				=> 'Kóðabox: [code]kóði[/code]',
	'BBCODE_D_HELP'				=> 'Flass: [flash=vídd,hæð]http://slóð.á.flassið.is[/flash]',
	'BBCODE_F_HELP'				=> 'Leturstærð: [size=85]lítill texti[/size]',
	'BBCODE_IS_OFF'				=> '%sBBKóði%s er <em>ÓVIRKUR</em>',
	'BBCODE_IS_ON'				=> '%sBBKóði%s er <em>VIRKUR</em>',
	'BBCODE_I_HELP'				=> 'Skáletraður texti: [i]texti[/i]',
	'BBCODE_L_HELP'				=> 'Listi: [list][*]texti[/list]',
	'BBCODE_LISTITEM_HELP'		=> 'Listaatriði: [*]texti',
	'BBCODE_O_HELP'				=> 'Raðaður listi: t.d. [list=1][*]Fyrsta atriði[/list] eða [list=a][*]Atriði a[/list]',
	'BBCODE_P_HELP'				=> 'Mynd: [img]http://slóð.á.mynd.is[/img]',
	'BBCODE_Q_HELP'				=> 'Tilvitnun: [quote]texti[/quote]',
	'BBCODE_S_HELP'				=> 'Leturlitur: [color=red]texti[/color] eða [color=#FF0000]texti[/color]',
	'BBCODE_U_HELP'				=> 'Undirstrikaður texti: [u]texti[/u]',
	'BBCODE_W_HELP'				=> 'Hlekkur: [url]http://hlekkur.is[/url] eða [url=http://hlekkur.is]Hér er texti[/url]',
	'BBCODE_Y_HELP'				=> 'Listi: Bæta við línu í lista',
	'BUMP_ERROR'				=> 'Þú getur ekki fært þessa umræðu upp svona fljótt eftir síðasta póst.',

	'CANNOT_DELETE_REPLIED'		=> 'Því miður, þú mátt ekki eyða póstum sem er búið að svara.',
	'CANNOT_EDIT_POST_LOCKED'	=> 'Þessi póstur er læstur, þú getur ekki lengur breytt honum.',
	'CANNOT_EDIT_TIME'			=> 'Þú getur ekki lengur breytt eða eytt þessum pósti.',
	'CANNOT_POST_ANNOUNCE'		=> 'Því miður, þú hefur ekki réttindi til að setja inn tilkynningar.',
	'CANNOT_POST_STICKY'		=> 'Því miður, þú hefur ekki réttindi til að setja inn límdar umræður.',
	'CHANGE_TOPIC_TO'			=> 'Breyta tegund',
	'CHARS_POST_CONTAINS'		=> array(
		1	=> 'Skilaboðin þín innihalda %1$d staf.',
		2	=> 'Skilaboðin þín innihalda %1$d stafi.',
	),
	'CHARS_SIG_CONTAINS'		=> array(
		1	=> 'Undirskriftin þín inniheldur %1$d staf.',
		2	=> 'Undirskriftin þín inniheldur %1$d stafi.',
	),
	'CLOSE_TAGS'				=> 'Loka tögum',
	'CURRENT_TOPIC'				=> 'Núverandi umræða',

	'DELETE_FILE'				=> 'Eyða skrá',
	'DELETE_MESSAGE'			=> 'Eyða skilaboðum',
	'DELETE_MESSAGE_CONFIRM'	=> 'Ertu viss um að þú viljir eyða þessum skilaboðum?',
	'DELETE_OWN_POSTS'			=> 'Þvi miður þá getur þú aðeins eytt þínum eigin póstum.',
	'DELETE_PERMANENTLY'		=> 'Eyða varanlega',
	'DELETE_POST_CONFIRM'		=> 'Ertu viss um að þú viljir eyða þessum skilaboðum?',
	'DELETE_POST_PERMANENTLY_CONFIRM'	=> 'Ertu viss um að þú viljir eyða þessum pósti <strong>varanlega</strong>?',
	'DELETE_POST_PERMANENTLY'	=> array(
		1	=> 'Eyða þessum pósti varanlega svo ekki sé hægt að endurheimta hann',
		2	=> 'Eyða %1$d póstum varanlega svo ekki sé hægt að endurheimta þá',
	),
	'DELETE_POSTS_CONFIRM'		=> 'Ertu viss um að þú viljir eyða þessum þráðum?',
	'DELETE_POSTS_PERMANENTLY_CONFIRM'	=> 'Ertu viss um að þú viljir eyða þessum póstum <strong>varanlega</strong>?',
	'DELETE_REASON'				=> 'Ástæða eyðingar',
	'DELETE_REASON_EXPLAIN'		=> 'Tilgreind ástæða eyðingarinnar verður sýnileg stjórnendum.',
	'DELETE_POST_WARN'			=> 'Eyða þessum pósti',
	'DELETE_TOPIC_CONFIRM'		=> 'Ertu viss um að þú viljir eyða þessari umræðu?',
	'DELETE_TOPIC_PERMANENTLY'	=> array(
		1	=> 'Eyða þessari umræðu varanlega svo ekki sé hægt að endurheimta hana',
		2	=> 'Eyða %1$d umræðum varanlega svo ekki sé hægt að endurheimta þær',
	),
	'DELETE_TOPIC_PERMANENTLY_CONFIRM'	=> 'Ertu viss um að þú viljir eyða þessari umræðu <strong>varanlega</strong>?',
	'DELETE_TOPICS_CONFIRM'		=> 'Ertu viss um að þú viljir eyða þessum umræðum?',
	'DELETE_TOPICS_PERMANENTLY_CONFIRM'	=> 'Ertu viss um að þú viljir eyða þessum umræðum <strong>varanlega</strong>?',
	'DISABLE_BBCODE'			=> 'Gera BBKóða óvirkan',
	'DISABLE_MAGIC_URL'			=> 'Ekki gera vefslóðir sjálfkrafa að tenglum',
	'DISABLE_SMILIES'			=> 'Gera broskalla óvirka',
	'DISALLOWED_CONTENT'		=> 'Sendingunni var hafnað því skráin gæti opnað fyrir mögulega öryggisholu.',
	'DISALLOWED_EXTENSION'		=> 'Skráarendingin %s er ekki leyfð.',
	'DRAFT_LOADED'				=> 'Uppkast hefur verið geymt, þú vilt mögulega klára póstinn núna.<br />Uppkastinu verður hent eftir að því hefur verið póstað.',
	'DRAFT_LOADED_PM'			=> 'Uppkast hefur verið geymt, þú vilt mögulega klára skilaboðin núna.<br />Uppkastinu verður hent eftir að skilaboðin hafa verið send.',
	'DRAFT_SAVED'				=> 'Uppkast hefur verið geymt.',
	'DRAFT_TITLE'				=> 'Titill uppkasts',

	'EDIT_REASON'				=> 'Ástæða breytingar',
	'EMPTY_FILEUPLOAD'			=> 'Innsend skrá er tóm.',
	'EMPTY_MESSAGE'				=> 'Þú verður að skrifa eitthvað þegar þú ert að senda póst.',
	'EMPTY_REMOTE_DATA'			=> 'Ekki tókst að senda inn skrá, prófað að senda skrána inn handvirkt.',

	'FLASH_IS_OFF'				=> '[flash] er <em>ÓVIRKT</em>',
	'FLASH_IS_ON'				=> '[flash] er <em>VIRKT</em>',
	'FLOOD_ERROR'				=> 'Þú getur ekki sent inn önnur skilaboð svona fljótt, bíddu í smá stund.',
	'FONT_COLOR'				=> 'Leturlitur',
	'FONT_COLOR_HIDE'			=> 'Fela lit stafanna',
	'FONT_HUGE'					=> 'Risastórt',
	'FONT_LARGE'				=> 'Stórt',
	'FONT_NORMAL'				=> 'Venjulegt',
	'FONT_SIZE'					=> 'Leturstærð',
	'FONT_SMALL'				=> 'Lítið',
	'FONT_TINY'					=> 'Pínulítið',

	'GENERAL_UPLOAD_ERROR'		=> 'Gat ekki sent inn viðhengi í %s.',

	'IMAGES_ARE_OFF'			=> '[img] er <em>ÓVIRKT</em>',
	'IMAGES_ARE_ON'				=> '[img] er <em>VIRKT</em>',
	'INVALID_FILENAME'			=> '%s er ógilt skráarheiti.',

	'LOAD'						=> 'Opna',
	'LOAD_DRAFT'				=> 'Opna uppkast',
	'LOAD_DRAFT_EXPLAIN'		=> 'Hér getur þú valið uppkastið sem þú vilt halda áfram að skrifa.  Hætt verður við núverandi póst og innihaldi hans hent.  Þú getur skoðað, breytt og hent uppköstum í notandastillingunum þínum.',
	'LOGIN_EXPLAIN_BUMP'		=> 'Þú verður að vera skráður inn til að færa upp umræður í þessu spjallsvæði.',
	'LOGIN_EXPLAIN_DELETE'		=> 'Þú verður að vera skráður inn til að eyða póstum á þessu spjallsvæði.',
	'LOGIN_EXPLAIN_SOFT_DELETE'	=> 'Þú verður að skrá þig inn til að eyða póstum tímabundið á þessu spjallsvæði.',
	'LOGIN_EXPLAIN_POST'		=> 'Þú verður að vera skráður inn til að pósta á þessu spjallsvæði.',
	'LOGIN_EXPLAIN_QUOTE'		=> 'Þú verður að vera skráður inn til að vitna í pósta á þessu spjallsvæði.',
	'LOGIN_EXPLAIN_REPLY'		=> 'Þú verður að vera skráður inn til að svara umræðum á þessu spjallsvæði.',

	'MAX_ATTACHMENT_FILESIZE'	=> 'Hámarksskráarstærð hvers viðhengis: %s.',
	'MAX_FONT_SIZE_EXCEEDED'	=> 'Þú mátt aðeins nota letur að stærð %d eða minna.',
	'MAX_FLASH_HEIGHT_EXCEEDED'	=> array(
		1	=> 'Flash-skrár mega mest vera %d díll á hæð.',
		2	=> 'Flash-skrár mega mest vera %d dílar á hæð.',
	),
	'MAX_FLASH_WIDTH_EXCEEDED'	=> array(
		1	=> 'Flash-skrár mega mest vera %d díll á breidd.',
		2	=> 'Flash-skrár mega mest vera %d dílar á breidd.',
	),
	'MAX_IMG_HEIGHT_EXCEEDED'	=> array(
		1	=> 'Myndir mega mest vera %1$d díll á hæð.',
		2	=> 'Myndir mega mest vera %1$d dílar á hæð.',
	),
	'MAX_IMG_WIDTH_EXCEEDED'	=> array(
		1	=> 'Myndir mega mest vera %d díll á breidd.',
		2	=> 'Myndir mega mest vera %d dílar á breidd.',
	),

	'MESSAGE_BODY_EXPLAIN'		=> array(
		0	=> '',
		1	=> 'Sláðu skilaboðin inn hér. Þau mega ekki innihalda fleiri en <strong>%d</strong> staf.',
		2	=> 'Sláðu skilaboðin inn hér. Þau mega ekki innihalda fleiri en <strong>%d</strong> stafi.',
	),
	'MESSAGE_DELETED'			=> 'Skilaboðum eytt.',
	'MORE_SMILIES'				=> 'Skoða fleiri broskalla',

	'NOTIFY_REPLY'				=> 'Láta mig vita þegar svar kemur',
	'NOT_UPLOADED'				=> 'Ekki tókst að senda inn skrá.',
	'NO_DELETE_POLL_OPTIONS'	=> 'Þú getur ekki eytt valmöguleikum sem eru þegar til.',
	'NO_PM_ICON'				=> 'Engin ES mynd',
	'NO_POLL_TITLE'				=> 'Þú verður að hafa titil á skoðanakönnuninni.',
	'NO_POST'					=> 'Umbeðinn póstur er ekki til.',
	'NO_POST_MODE'				=> 'Enginn pósthamur valinn.',
	'NO_TEMP_DIR'				=> 'Bráðabirgðamappan fannst ekki eða ekki er hægt að skrifa í hana.',

	'PARTIAL_UPLOAD'			=> 'Aðeins hluti skrárinnar var sendur inn.',
	'PHP_UPLOAD_STOPPED'		=> 'PHP-viðbót stöðvaði upphleðslu skráarinnar.',
	'PHP_SIZE_NA'				=> 'Viðhengið er of stórt. Ekki var hægt að ákvarða hámarksstærð í php.ini',
	'PHP_SIZE_OVERRUN'			=> 'Viðhengið er of stórt. Hámarksstærð sem leyfð er fyrir upphleðslu er %1$d %2$s.<br />Athugaðu að þetta er skilgreint í php.ini og ekki er hægt að hnekkja því.',
	'PLACE_INLINE'				=> 'Fella inn',
	'POLL_DELETE'				=> 'Eyða skoðanakönnun',
	'POLL_FOR'					=> 'Keyra könnun í',
	'POLL_FOR_EXPLAIN'			=> 'Sláðu inn 0 fyrir skoðanakönnun sem lýkur aldrei.',
	'POLL_MAX_OPTIONS'			=> 'Valmöguleikar á notanda',
	'POLL_MAX_OPTIONS_EXPLAIN'	=> 'Hámarksfjöldi möguleika sem hver notandi má velja.',
	'POLL_OPTIONS'				=> 'Stillingar könnunar',
	'POLL_OPTIONS_EXPLAIN'		=> array(
		1	=> 'Settu hvern valkost í nýja línu. Þú mátt slá inn <strong>%d</strong> valkost.',
		2	=> 'Settu hvern valkost í nýja línu. Þú mátt slá inn allt að <strong>%d</strong> valkosti.',
	),
	'POLL_OPTIONS_EDIT_EXPLAIN'		=> array(
		1	=> 'Settu hvern valkost í nýja línu. Þú mátt slá inn <strong>%d</strong> valkost. Ef þú fjarlægir eða bætir við valkostum verða öll fyrri atkvæði núllstillt.',
		2	=> 'Settu hvern valkost í nýja línu. Þú mátt slá inn allt að <strong>%d</strong> valkosti. Ef þú fjarlægir eða bætir við valkostum verða öll fyrri atkvæði núllstillt.',
	),
	'POLL_QUESTION'				=> 'Spurning',
	'POLL_TITLE_TOO_LONG'		=> 'Spurningin má ekki vera lengri en 100 stafir.',
	'POLL_TITLE_COMP_TOO_LONG'	=> 'Spurningin er of löng, prófaðu að fjarlægja BBKóða eða broskalla.',
	'POLL_VOTE_CHANGE'			=> 'Leyfa að kjósa aftur',
	'POLL_VOTE_CHANGE_EXPLAIN'	=> 'Ef leyft þá geta notendur breytt atkvæðum sínum.',
	'POSTED_ATTACHMENTS'		=> 'Innsend viðhengi',
	'POST_APPROVAL_NOTIFY'		=> 'Þú verður látinn vita þegar pósturinn hefur verið samþykktur.',
	'POST_CONFIRMATION'			=> 'Staðfesting á pósti',
	'POST_CONFIRM_EXPLAIN'		=> 'Til að koma í veg fyrir að sjálfvirkir bottar sendi skilaboð hér þá verður þú að skrifa stafarununa hér að neðan.  Ef þú getur ekki lesið textann á myndinni skaltu hafa samband við %smmsjónarmenn spjallborðsins%s.',
	'POST_DELETED'				=> 'Póstinum var eytt.',
	'POST_EDITED'				=> 'Póstinum var breytt.',
	'POST_EDITED_MOD'			=> 'Póstinum var breytt, en stjórnandi þarf að samþykkja hann áður en hann verður sýnilegur opinberlega.',
	'POST_GLOBAL'				=> 'Allsstaðar',
	'POST_ICON'					=> 'Umræðumerki',
	'POST_NORMAL'				=> 'Venjulegt',
	'POST_REVIEW'				=> 'Senda umsögn',
	'POST_REVIEW_EDIT'			=> 'Senda umsögn',
	'POST_REVIEW_EDIT_EXPLAIN'	=> 'Annar notandi breytti þessum pósti meðan þú varst að breyta honum. Þú ættir að yfirfara núverandi útgáfu póstsins og laga breytingar þínar eftir þörfum.',
	'POST_REVIEW_EXPLAIN'		=> 'Að minnsta kosti einn nýr póstur hefur verið sendur í þessa umræðu. Þú ættir að yfirfara póstinn þinn með hliðsjón af því.',
	'POST_STORED'				=> 'Skilaboðin hafa verið sent.',
	'POST_STORED_MOD'			=> 'Skilaboðin voru send, en þú verður að bíða eftir samþykki póststjóra áður en almenningur sér þau.',
	'POST_TOPIC_AS'				=> 'Pósta umræðu sem',
	'PROGRESS_BAR'				=> 'Stöðustika',

	'QUOTE_DEPTH_EXCEEDED'		=> array(
		1	=> 'Þú mátt aðeins fella %d tilvitnun inn í aðra.',
		2	=> 'Þú mátt aðeins fella %d tilvitnanir hverja inn í aðra.',
	),
	'QUOTE_NO_NESTING'			=> 'Þú mátt ekki fella tilvitnanir hverja inn í aðra.',

	'REMOTE_UPLOAD_TIMEOUT'		=> 'Ekki var hægt að hlaða upp tilgreindri skrá þar sem beiðnin rann út á tíma.',
	'SAVE'						=> 'Vista',
	'SAVE_DATE'					=> 'Vistað þann',
	'SAVE_DRAFT'				=> 'Vista uppkast',
	'SAVE_DRAFT_CONFIRM'		=> 'Athugaðu að uppkast inniheldur aðeins titil og skilaboð, allt annað er fjarlægt.  Viltu vista uppkastið núna?',
	'SMILIES'					=> 'Broskallar',
	'SMILIES_ARE_OFF'			=> 'Broskallar eru <em>ÓVIRKIR</em>',
	'SMILIES_ARE_ON'			=> 'Broskallar eru <em>VIRKIR</em>',
	'STICKY_ANNOUNCE_TIME_LIMIT'=> 'Tímamörk límdrar umræðu/tilkynningar/alþjóðlegrar tilkynningar',
	'STICK_TOPIC_FOR'			=> 'Líma umræðu í',
	'STICK_TOPIC_FOR_EXPLAIN'	=> 'Sláðu inn 0 fyrir límda umræðu, tilkynningu eða alþjóðlega tilkynningu sem rennur aldrei út. Athugaðu að þessi tala miðast við dagsetningu póstsins.',
	'STYLES_TIP'				=> 'Ábending: Auðvelt er að breyta völdum texta.',

	'TOO_FEW_CHARS'				=> 'Skilaboðin inniheldur of fáa stafi.',
	'TOO_FEW_CHARS_LIMIT'		=> array(
		1	=> 'Þú verður að slá inn að minnsta kosti %1$d staf.',
		2	=> 'Þú verður að slá inn að minnsta kosti %1$d stafi.',
	),
	'TOO_FEW_POLL_OPTIONS'		=> 'Þú verður að hafa að minnsta kosti tvo valmöguleika.',
	'TOO_MANY_ATTACHMENTS'		=> 'Get ekki sett annað viðhengi, %d er hámarkið.',
	'TOO_MANY_CHARS'			=> 'Skilaboðin þín innihalda of marga stafi.',
	'TOO_MANY_CHARS_LIMIT'		=> array(
		1	=> 'Hámarksfjöldi leyfilegra stafa er %1$d.',
		2	=> 'Hámarksfjöldi leyfilegra stafa er %1$d.',
	),
	'TOO_MANY_POLL_OPTIONS'		=> 'Þú hafðir of marga valmöguleika.',
	'TOO_MANY_SMILIES'			=> 'Skilaboðin þín innihalda of marga broskalla. Hámarkið er %d.',
	'TOO_MANY_URLS'				=> 'Skilaboðin þín innihalda of marga hlekki. Hámarkið er %d.',
	'TOO_MANY_USER_OPTIONS'		=> 'Þú getur ekki valið fleiri möguleika á notanda en fjöldi valmöguleika.',
	'TOPIC_BUMPED'				=> 'Umræða hefur verið færð upp.',

	'UNAUTHORISED_BBCODE'		=> 'Þu getur ekki notað þessa BBKóða: %s.',
	'UNSUPPORTED_CHARACTERS_MESSAGE'	=> 'Skilaboðin innihalda eftirfarandi óstudda stafi:<br />%s',
	'UNSUPPORTED_CHARACTERS_SUBJECT'	=> 'Efnislínan inniheldur eftirfarandi óstudda stafi:<br />%s',
	'UPDATE_COMMENT'			=> 'Uppfæra skilaboð',
	'URL_INVALID'				=> 'Uppgefin slóð er ógild.',
	'URL_NOT_FOUND'				=> 'Skráin fannst ekki.',
	'URL_IS_OFF'				=> '[url] er <em>ÓVIRKT</em>',
	'URL_IS_ON'					=> '[url] er <em>VIRKT</em>',
	'USER_CANNOT_BUMP'			=> 'Þú getur ekki fært upp umræður í þessu spjallsvæði.',
	'USER_CANNOT_DELETE'		=> 'Þú getur ekki eytt póstum í þessu spjallsvæði.',
	'USER_CANNOT_EDIT'			=> 'Þú getur ekki breytt póstum á þessu spjallsvæði.',
	'USER_CANNOT_REPLY'			=> 'Þú getur ekki svarað á þessu spjallsvæði.',
	'USER_CANNOT_FORUM_POST'	=> 'Þú getur ekki framkvæmt póstaðgerðir á þessu svæði vegna þess að svæðið leyfir þær ekki.',

	'VIEW_MESSAGE'				=> '%sSýna innsend skilaboð%s',
	'VIEW_PRIVATE_MESSAGE'		=> '%sSýna send einkaskilaboð%s',

	'WRONG_FILESIZE'			=> 'Skráin er of stór. Hámarksstærð er %1$d %2$s.',
	'WRONG_SIZE'				=> 'Myndin verður að vera að minnsta kosti %1$s á breidd og %2$s á hæð og mest %3$s á breidd og %4$s á hæð. Innsenda myndin er %5$s á breidd og %6$s á hæð.',
));
