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

// Common
$lang = array_merge($lang, array(
	'ACP_ADMINISTRATORS'		=> 'Kerfisstjórar',
	'ACP_ADMIN_LOGS'			=> 'Annáll kerfisstjóra',
	'ACP_ADMIN_ROLES'			=> 'Hlutverk kerfisstjóra',
	'ACP_ATTACHMENTS'			=> 'Viðhengi',
	'ACP_ATTACHMENT_SETTINGS'	=> 'Stillingar viðhengja',
	'ACP_AUTH_SETTINGS'			=> 'Auðkenning',
	'ACP_AUTOMATION'			=> 'Sjálfvirkni',
	'ACP_AVATAR_SETTINGS'		=> 'Stillingar smámynda',

	'ACP_BACKUP'				=> 'Öryggisafrit',
	'ACP_BAN'					=> 'Bönn',
	'ACP_BAN_EMAILS'			=> 'Banna netföng',
	'ACP_BAN_IPS'				=> 'Banna IP-tölur',
	'ACP_BAN_USERNAMES'			=> 'Banna notendur',
	'ACP_BBCODES'				=> 'BBCode',
	'ACP_BOARD_CONFIGURATION'	=> 'Stillingar spjallborðs',
	'ACP_BOARD_FEATURES'		=> 'Eiginleikar spjallborðs',
	'ACP_BOARD_MANAGEMENT'		=> 'Stjórnun spjallborðs',
	'ACP_BOARD_SETTINGS'		=> 'Stillingar spjallborðs',
	'ACP_BOTS'					=> 'Leitarvélar/vélmenni',

	'ACP_CAPTCHA'				=> 'CAPTCHA',

	'ACP_CAT_CUSTOMISE'			=> 'Sérsníða',
	'ACP_CAT_DATABASE'			=> 'Gagnagrunnur',
	'ACP_CAT_DOT_MODS'			=> 'Viðbætur',
	'ACP_CAT_FORUMS'			=> 'Spjallsvæði',
	'ACP_CAT_GENERAL'			=> 'Almennt',
	'ACP_CAT_MAINTENANCE'		=> 'Viðhald',
	'ACP_CAT_PERMISSIONS'		=> 'Heimildir',
	'ACP_CAT_POSTING'			=> 'Færslur',
	'ACP_CAT_STYLES'			=> 'Stílar',
	'ACP_CAT_SYSTEM'			=> 'Kerfi',
	'ACP_CAT_USERGROUP'			=> 'Notendur og hópar',
	'ACP_CAT_USERS'				=> 'Notendur',
	'ACP_CLIENT_COMMUNICATION'	=> 'Samskipti við biðlara',
	'ACP_COOKIE_SETTINGS'		=> 'Stillingar vafrakaka',
	'ACP_CONTACT'				=> 'Samskiptasíða',
	'ACP_CONTACT_SETTINGS'		=> 'Stillingar samskiptasíðu',
	'ACP_CRITICAL_LOGS'			=> 'Villuannáll',
	'ACP_CUSTOM_PROFILE_FIELDS'	=> 'Sérsniðnir notandareitir',

	'ACP_DATABASE'				=> 'Stjórnun gagnagrunns',
	'ACP_DISALLOW'				=> 'Banna',
	'ACP_DISALLOW_USERNAMES'	=> 'Banna notandanöfn',

	'ACP_EMAIL_SETTINGS'		=> 'Stillingar tölvupósts',
	'ACP_EXTENSION_GROUPS'		=> 'Stjórna hópum skráarendinga viðhengja',
	'ACP_EXTENSION_MANAGEMENT'	=> 'Stjórnun skráarendinga',
	'ACP_EXTENSIONS'			=> 'Stjórna skráarendingum',

	'ACP_FORUM_BASED_PERMISSIONS'	=> 'Heimildir spjallsvæða',
	'ACP_FORUM_LOGS'				=> 'Annálar spjallsvæða',
	'ACP_FORUM_MANAGEMENT'			=> 'Stjórnun spjallsvæða',
	'ACP_FORUM_MODERATORS'			=> 'Stjórnendur spjallsvæða',
	'ACP_FORUM_PERMISSIONS'			=> 'Heimildir spjallsvæða',
	'ACP_FORUM_PERMISSIONS_COPY'	=> 'Afrita heimildir spjallsvæðis',
	'ACP_FORUM_ROLES'				=> 'Hlutverk spjallsvæða',

	'ACP_GENERAL_CONFIGURATION'		=> 'Almennar stillingar',
	'ACP_GENERAL_TASKS'				=> 'Almenn verkefni',
	'ACP_GLOBAL_MODERATORS'			=> 'Yfirstjórnendur',
	'ACP_GLOBAL_PERMISSIONS'		=> 'Almennar heimildir',
	'ACP_GROUPS'					=> 'Hópar',
	'ACP_GROUPS_FORUM_PERMISSIONS'	=> 'Heimildir hópa á spjallsvæðum',
	'ACP_GROUPS_MANAGE'				=> 'Stjórna hópum',
	'ACP_GROUPS_MANAGEMENT'			=> 'Hópstjórnun',
	'ACP_GROUPS_PERMISSIONS'		=> 'Heimildir hópa',
	'ACP_GROUPS_POSITION'			=> 'Stjórna staðsetningu hópa',

	'ACP_HELP_PHPBB'			=> 'Styðja phpBB',

	'ACP_ICONS'					=> 'Umræðutákn',
	'ACP_ICONS_SMILIES'			=> 'Umræðutákn/broskarlar',
	'ACP_INACTIVE_USERS'		=> 'Óvirkir notendur',
	'ACP_INDEX'					=> 'Forsíða stjórnborðs',

	'ACP_JABBER_SETTINGS'		=> 'Jabber-stillingar',

	'ACP_LANGUAGE'				=> 'Tungumálastjórnun',
	'ACP_LANGUAGE_PACKS'		=> 'Tungumálapakkar',
	'ACP_LOAD_SETTINGS'			=> 'Álagsstillingar',
	'ACP_LOGGING'				=> 'Annálaskráning',

	'ACP_MAIN'					=> 'Forsíða stjórnborðs',

	'ACP_MANAGE_ATTACHMENTS'			=> 'Skrár',
	'ACP_MANAGE_ATTACHMENTS_EXPLAIN'	=> 'Hér getur þú skoðað og eytt skrám sem fylgja færslum og einkaskilaboðum.',

	'ACP_MANAGE_EXTENSIONS'		=> 'Stjórna skráarendingum viðhengja',
	'ACP_MANAGE_FORUMS'			=> 'Stjórna spjallsvæðum',
	'ACP_MANAGE_RANKS'			=> 'Stjórna tignum',
	'ACP_MANAGE_REASONS'		=> 'Stjórna ástæðum tilkynninga og synjana',
	'ACP_MANAGE_USERS'			=> 'Stjórna notendum',
	'ACP_MASS_EMAIL'			=> 'Fjöldatölvupóstur',
	'ACP_MESSAGES'				=> 'Skilaboð',
	'ACP_MESSAGE_SETTINGS'		=> 'Stillingar einkaskilaboða',
	'ACP_MODULE_MANAGEMENT'		=> 'Stjórnun eininga',
	'ACP_MOD_LOGS'				=> 'Annáll stjórnenda',
	'ACP_MOD_ROLES'				=> 'Hlutverk stjórnenda',

	'ACP_NO_ITEMS'				=> 'Engin atriði eru til enn.',

	'ACP_ORPHAN_ATTACHMENTS'	=> 'Munaðarlaus viðhengi',

	'ACP_PERMISSIONS'			=> 'Heimildir',
	'ACP_PERMISSION_MASKS'		=> 'Heimildayfirlit',
	'ACP_PERMISSION_ROLES'		=> 'Heimildahlutverk',
	'ACP_PERMISSION_TRACE'		=> 'Rakning heimilda',
	'ACP_PHP_INFO'				=> 'PHP-upplýsingar',
	'ACP_POST_SETTINGS'			=> 'Stillingar færslna',
	'ACP_PRUNE_FORUMS'			=> 'Grisja spjallsvæði',
	'ACP_PRUNE_USERS'			=> 'Grisja notendur',
	'ACP_PRUNING'				=> 'Grisjun',

	'ACP_QUICK_ACCESS'			=> 'Flýtiaðgangur',

	'ACP_RANKS'					=> 'Tignir',
	'ACP_REASONS'				=> 'Ástæður tilkynninga og synjana',
	'ACP_REGISTER_SETTINGS'		=> 'Stillingar notendaskráningar',

	'ACP_RESTORE'				=> 'Endurheimta',

	'ACP_FEED'					=> 'Stjórnun strauma',
	'ACP_FEED_SETTINGS'			=> 'Stillingar strauma',

	'ACP_SEARCH'				=> 'Leitarstillingar',
	'ACP_SEARCH_INDEX'			=> 'Leitarvísir',
	'ACP_SEARCH_SETTINGS'		=> 'Leitarstillingar',

	'ACP_SECURITY_SETTINGS'		=> 'Öryggisstillingar',
	'ACP_SERVER_CONFIGURATION'	=> 'Stillingar þjóns',
	'ACP_SERVER_SETTINGS'		=> 'Stillingar þjóns',
	'ACP_SIGNATURE_SETTINGS'	=> 'Stillingar undirskrifta',
	'ACP_SMILIES'				=> 'Broskarlar',
	'ACP_STYLE_MANAGEMENT'		=> 'Stjórnun stíla',
	'ACP_STYLES'				=> 'Stílar',
	'ACP_STYLES_CACHE'			=> 'Hreinsa skyndiminni',
	'ACP_STYLES_INSTALL'		=> 'Setja upp stíla',

	'ACP_SUBMIT_CHANGES'		=> 'Vista breytingar',

	'ACP_TEMPLATES'				=> 'Sniðmát',
	'ACP_THEMES'				=> 'Þemu',

	'ACP_UPDATE'					=> 'Uppfærsla',
	'ACP_USERS_FORUM_PERMISSIONS'	=> 'Heimildir notenda á spjallsvæðum',
	'ACP_USERS_LOGS'				=> 'Annálar notenda',
	'ACP_USERS_PERMISSIONS'			=> 'Heimildir notenda',
	'ACP_USER_ATTACH'				=> 'Viðhengi',
	'ACP_USER_AVATAR'				=> 'Smámynd',
	'ACP_USER_FEEDBACK'				=> 'Athugasemdir',
	'ACP_USER_GROUPS'				=> 'Hópar',
	'ACP_USER_MANAGEMENT'			=> 'Notendastjórnun',
	'ACP_USER_OVERVIEW'				=> 'Yfirlit',
	'ACP_USER_PERM'					=> 'Heimildir',
	'ACP_USER_PREFS'				=> 'Kjörstillingar',
	'ACP_USER_PROFILE'				=> 'Notandasnið',
	'ACP_USER_RANK'					=> 'Tign',
	'ACP_USER_ROLES'				=> 'Hlutverk notenda',
	'ACP_USER_SECURITY'				=> 'Öryggi notanda',
	'ACP_USER_SIG'					=> 'Undirskrift',
	'ACP_USER_WARNINGS'				=> 'Viðvaranir',

	'ACP_VC_SETTINGS'					=> 'Varnir gegn ruslvélmennum',
	'ACP_VC_CAPTCHA_DISPLAY'			=> 'Forskoðun CAPTCHA-myndar',
	'ACP_VERSION_CHECK'					=> 'Leita að uppfærslum',
	'ACP_VIEW_ADMIN_PERMISSIONS'		=> 'Skoða stjórnunarheimildir',
	'ACP_VIEW_FORUM_MOD_PERMISSIONS'	=> 'Skoða stjórnunarheimildir spjallsvæða',
	'ACP_VIEW_FORUM_PERMISSIONS'		=> 'Skoða heimildir spjallsvæða',
	'ACP_VIEW_GLOBAL_MOD_PERMISSIONS'	=> 'Skoða almennar stjórnunarheimildir',
	'ACP_VIEW_USER_PERMISSIONS'			=> 'Skoða heimildir notenda',

	'ACP_WORDS'					=> 'Orðasíur',

	'ACTION'				=> 'Aðgerð',
	'ACTIONS'				=> 'Aðgerðir',
	'ACTIVATE'				=> 'Virkja',
	'ADD'					=> 'Bæta við',
	'ADMIN'					=> 'Stjórnun',
	'ADMIN_INDEX'			=> 'Forsíða stjórnborðs',
	'ADMIN_PANEL'			=> 'Stjórnborð',

	'ADM_LOGOUT'			=> 'Skrá út af&nbsp;stjórnborði',
	'ADM_LOGGED_OUT'		=> 'Þú hefur verið skráður út af stjórnborðinu',

	'BACK'					=> 'Til baka',

	'CONTAINER_EXCEPTION' => 'phpBB rakst á villu við að smíða þjónagáminn vegna uppsettrar viðbótar. Þess vegna hafa allar viðbætur verið gerðar óvirkar tímabundið. Reyndu að hreinsa skyndiminni spjallborðsins. Allar viðbætur verða sjálfkrafa virkjaðar aftur þegar villan hefur verið leyst. Ef villan heldur áfram skaltu leita aðstoðar á <a href="https://www.phpbb.com/support">phpBB.com</a>.',
	'EXCEPTION' => 'Undantekning',

	'COLOUR_SWATCH'			=> 'Veförugg litapalletta',
	'CONFIG_UPDATED'		=> 'Stillingar voru uppfærðar.',
	'CRON_LOCK_ERROR'		=> 'Ekki tókst að læsa cron-keyrslu.',
	'CRON_NO_SUCH_TASK'		=> 'Cron-verkefnið „%s“ fannst ekki.',
	'CRON_NO_TASK'			=> 'Engin cron-verkefni þarf að keyra núna.',
	'CRON_NO_TASKS'			=> 'Engin cron-verkefni fundust.',
	'CSV_INVALID'			=> 'Tilgreinda kommuaðskilda stillingin „%1$s“ er ógild. Gildi mega aðeins vera aðskilin með kommum og engin aðskilnaðarmerki mega vera fremst eða aftast.',
	'CURRENT_VERSION'		=> 'Núverandi útgáfa',

	'DEACTIVATE'				=> 'Gera óvirkt',
	'DIRECTORY_DOES_NOT_EXIST'	=> 'Tilgreinda slóðin „%s“ er ekki til.',
	'DIRECTORY_NOT_DIR'			=> 'Tilgreinda slóðin „%s“ er ekki mappa.',
	'DIRECTORY_NOT_WRITABLE'	=> 'Ekki er hægt að skrifa í tilgreindu slóðina „%s“.',
	'DISABLE'					=> 'Gera óvirkt',
	'DOWNLOAD'					=> 'Sækja',
	'DOWNLOAD_AS'				=> 'Sækja sem',
	'DOWNLOAD_STORE'			=> 'Sækja eða vista skrá',
	'DOWNLOAD_STORE_EXPLAIN'	=> 'Þú getur sótt skrána beint eða vistað hana í möppunni <samp>store/</samp>.',
	'DOWNLOADS'					=> 'Niðurhal',

	'EDIT'					=> 'Breyta',
	'ENABLE'				=> 'Virkja',
	'EXPORT_DOWNLOAD'		=> 'Sækja',
	'EXPORT_STORE'			=> 'Vista',

	'GENERAL_OPTIONS'		=> 'Almennir valkostir',
	'GENERAL_SETTINGS'		=> 'Almennar stillingar',
	'GLOBAL_MASK'			=> 'Almennt heimildayfirlit',

	'INSTALL'				=> 'Setja upp',
	'IP'					=> 'IP-tala notanda',
	'IP_HOSTNAME'			=> 'IP-tölur eða vélarheiti',

	'LATEST_VERSION'		=> 'Nýjasta útgáfa',
	'LOAD_NOTIFICATIONS'			=> 'Birta tilkynningar',
	'LOAD_NOTIFICATIONS_EXPLAIN'	=> 'Birta lista yfir tilkynningar á hverri síðu, venjulega í hausnum.',
	'LOGGED_IN_AS'			=> 'Þú ert skráður inn sem:',
	'LOGIN_ADMIN'			=> 'Þú verður að vera auðkenndur notandi til að stjórna spjallborðinu.',
	'LOGIN_ADMIN_CONFIRM'	=> 'Þú verður að auðkenna þig aftur til að stjórna spjallborðinu.',
	'LOGIN_ADMIN_SUCCESS'	=> 'Auðkenning tókst og þér verður nú vísað á stjórnborðið.',
	'LOOK_UP_FORUM'			=> 'Veldu spjallsvæði',
	'LOOK_UP_FORUMS_EXPLAIN'=> 'Þú getur valið fleiri en eitt spjallsvæði.',

	'MANAGE'				=> 'Stjórna',
	'MENU_TOGGLE'			=> 'Fela eða sýna hliðarvalmyndina',
	'MORE'					=> 'Meira',			// Not used at the moment
	'MORE_INFORMATION'		=> 'Nánari upplýsingar »',
	'MOVE_DOWN'				=> 'Færa niður',
	'MOVE_UP'				=> 'Færa upp',

	'NOTIFY'				=> 'Tilkynning',
	'NO_ADMIN'				=> 'Þú hefur ekki heimild til að stjórna þessu spjallborði.',
	'NO_EMAILS_DEFINED'		=> 'Engin gild netföng fundust.',
	'NO_FILES_TO_DELETE'	=> 'Viðhengin sem þú valdir til eyðingar eru ekki til.',
	'NO_PASSWORD_SUPPLIED'	=> 'Þú verður að slá inn lykilorðið þitt til að opna stjórnborðið.',

	'OFF'					=> 'Óvirkt',
	'ON'					=> 'Virkt',

	'PARSE_BBCODE'						=> 'Túlka BBCode',
	'PARSE_SMILIES'						=> 'Túlka broskarla',
	'PARSE_URLS'						=> 'Túlka tengla',
	'PERMISSIONS_TRANSFERRED'			=> 'Heimildir yfirfærðar',
	'PERMISSIONS_TRANSFERRED_EXPLAIN'	=> 'Þú hefur nú heimildir frá %1$s. Þú getur vafrað um spjallborðið með heimildum þessa notanda en ekki opnað stjórnborðið, þar sem stjórnunarheimildir voru ekki yfirfærðar. Þú getur hvenær sem er <a href="%2$s"><strong>snúið aftur að eigin heimildum</strong></a>.',
	'PROCEED_TO_ACP'					=> '%sFara á stjórnborðið%s',

	'RELEASE_ANNOUNCEMENT'		=> 'Tilkynning',
	'REMIND'							=> 'Minna á',
	'REPARSE_LOCK_ERROR'				=> 'Endurtúlkun er þegar í gangi í öðru ferli.',
	'RESYNC'							=> 'Endursamstilla',

	'RUNNING_TASK'			=> 'Keyri verkefni: %s.',
	'SELECT_ANONYMOUS'		=> 'Velja nafnlausan notanda',
	'SELECT_OPTION'			=> 'Velja valkost',

	'SETTING_TOO_LOW'		=> 'Tilgreint gildi stillingarinnar „%1$s“ er of lágt. Lægsta leyfilega gildi er %2$d.',
	'SETTING_TOO_BIG'		=> 'Tilgreint gildi stillingarinnar „%1$s“ er of hátt. Hæsta leyfilega gildi er %2$d.',
	'SETTING_TOO_LONG'		=> 'Tilgreint gildi stillingarinnar „%1$s“ er of langt. Mesta leyfilega lengd er %2$d.',
	'SETTING_TOO_SHORT'		=> 'Tilgreint gildi stillingarinnar „%1$s“ er of stutt. Minnsta leyfilega lengd er %2$d.',

	'SHOW_ALL_OPERATIONS'	=> 'Sýna allar aðgerðir',

	'TASKS_NOT_READY'			=> 'Verkefni sem eru ekki tilbúin:',
	'TASKS_READY'			=> 'Tilbúin verkefni:',
	'TOTAL_SIZE'			=> 'Heildarstærð',

	'UCP'					=> 'Stjórnborð notanda',
	'URL_INVALID'			=> 'Vefslóðin fyrir stillinguna „%1$s“ er ógild.',
	'URL_SCHEME_INVALID'	=> 'Tilgreinda samskiptareglan „%2$s“ í kommuaðskildu stillingunni „%1$s“ er ógild. Samskiptareglan verður að byrja á latneskum bókstaf og síðan mega koma bók- og tölustafir, bandstrik eða punktar.',
	'USERNAMES_EXPLAIN'		=> 'Settu hvert notandanafn í sérstaka línu.',
	'USER_CONTROL_PANEL'	=> 'Stjórnborð notanda',

	'UPDATE_NEEDED'			=> 'Spjallborðið er ekki uppfært.',
	'UPDATE_NOT_NEEDED'		=> 'Spjallborðið er uppfært.',
	'UPDATES_AVAILABLE'		=> 'Uppfærslur í boði:',

	'WARNING'				=> 'Viðvörun',
));

// PHP info
$lang = array_merge($lang, array(
	'ACP_PHP_INFO_EXPLAIN'	=> 'Þessi síða sýnir upplýsingar um útgáfu PHP sem er uppsett á þjóninum. Þar eru meðal annars upplýsingar um hlaðnar einingar, tiltækar breytur og sjálfgefnar stillingar. Upplýsingarnar geta gagnast við bilanagreiningu. Sum hýsingarfyrirtæki takmarka sýndar upplýsingar af öryggisástæðum. Ekki gefa upp upplýsingar af þessari síðu nema <a href="https://www.phpbb.com/about/team/">opinberir liðsmenn</a> á stuðningsspjallinu biðji um þær.',

	'NO_PHPINFO_AVAILABLE'	=> 'Ekki er hægt að ákvarða upplýsingar um PHP-stillingarnar. Phpinfo() hefur verið gert óvirkt af öryggisástæðum.',
));

// Logs
$lang = array_merge($lang, array(
	'ACP_ADMIN_LOGS_EXPLAIN'	=> 'Hér eru allar aðgerðir sem kerfisstjórar spjallborðsins hafa framkvæmt. Hægt er að raða eftir notandanafni, dagsetningu, IP-tölu eða aðgerð. Með viðeigandi heimildum getur þú einnig hreinsað einstakar aðgerðir eða allan annálinn.',
	'ACP_CRITICAL_LOGS_EXPLAIN'	=> 'Hér eru aðgerðir sem spjallborðið sjálft hefur framkvæmt. Annállinn veitir upplýsingar sem geta hjálpað við að leysa tiltekin vandamál, til dæmis þegar tölvupóstur berst ekki. Hægt er að raða eftir notandanafni, dagsetningu, IP-tölu eða aðgerð og hreinsa einstakar aðgerðir eða allan annálinn með viðeigandi heimildum.',
	'ACP_MOD_LOGS_EXPLAIN'		=> 'Hér eru allar aðgerðir á spjallsvæðum, umræðum og færslum ásamt aðgerðum stjórnenda gagnvart notendum, þar á meðal bönn. Hægt er að raða eftir notandanafni, dagsetningu, IP-tölu eða aðgerð og hreinsa einstakar aðgerðir eða allan annálinn með viðeigandi heimildum.',
	'ACP_USERS_LOGS_EXPLAIN'	=> 'Hér eru allar aðgerðir sem notendur hafa framkvæmt eða hafa verið framkvæmdar gagnvart þeim, svo sem tilkynningar, viðvaranir og athugasemdir.',
	'ALL_ENTRIES'				=> 'Allar færslur',

	'DISPLAY_LOG'	=> 'Birta færslur frá síðustu',

	'NO_ENTRIES'	=> 'Engar annálafærslur eru fyrir þetta tímabil.',

	'SORT_IP'		=> 'IP-tala',
	'SORT_DATE'		=> 'Dagsetning',
	'SORT_ACTION'	=> 'Annálaaðgerð',
));

// Index page
$lang = array_merge($lang, array(
	'ADMIN_INTRO'				=> 'Takk fyrir að velja phpBB sem spjallborðslausn. Þessi skjár gefur fljótlegt yfirlit yfir ýmsa tölfræði spjallborðsins. Tenglar vinstra megin gera þér kleift að stjórna öllum þáttum þess. Á hverri síðu eru leiðbeiningar um notkun verkfæranna.',
	'ADMIN_LOG'					=> 'Skráðar aðgerðir kerfisstjóra',
	'ADMIN_LOG_INDEX_EXPLAIN'	=> 'Hér er yfirlit yfir síðustu fimm aðgerðir kerfisstjóra spjallborðsins. Hægt er að skoða allan annálinn í viðeigandi valmynd eða með tenglinum hér fyrir neðan.',
	'AVATAR_DIR_SIZE'			=> 'Stærð smámyndamöppu',

	'BOARD_STARTED'		=> 'Spjallborð stofnað',
	'BOARD_VERSION'		=> 'Útgáfa spjallborðs',

	'DATABASE_SERVER_INFO'	=> 'Gagnagrunnsþjónn',
	'DATABASE_SIZE'			=> 'Stærð gagnagrunns',

	// Environment configuration checks, mbstring related
	'ERROR_MBSTRING_FUNC_OVERLOAD'					=> 'Ofhleðsla falla er rangt stillt',
	'ERROR_MBSTRING_FUNC_OVERLOAD_EXPLAIN'			=> '<var>mbstring.func_overload</var> verður að vera 0 eða 4. Þú getur skoðað núverandi gildi á síðunni <samp>PHP-upplýsingar</samp>.',
	'ERROR_MBSTRING_ENCODING_TRANSLATION'			=> 'Gegnsæ umbreyting stafakóðunar er rangt stillt',
	'ERROR_MBSTRING_ENCODING_TRANSLATION_EXPLAIN'	=> '<var>mbstring.encoding_translation</var> verður að vera 0. Þú getur skoðað núverandi gildi á síðunni <samp>PHP-upplýsingar</samp>.',
	'ERROR_MBSTRING_HTTP_INPUT'						=> 'Umbreyting stafakóðunar HTTP-inntaks er rangt stillt',
	'ERROR_MBSTRING_HTTP_INPUT_EXPLAIN'				=> '<var>mbstring.http_input</var> verður að vera autt. Þú getur skoðað núverandi gildi á síðunni <samp>PHP-upplýsingar</samp>.',
	'ERROR_MBSTRING_HTTP_OUTPUT'					=> 'Umbreyting stafakóðunar HTTP-úttaks er rangt stillt',
	'ERROR_MBSTRING_HTTP_OUTPUT_EXPLAIN'			=> '<var>mbstring.http_output</var> verður að vera autt. Þú getur skoðað núverandi gildi á síðunni <samp>PHP-upplýsingar</samp>.',
	'ERROR_DEFAULT_CHARSET'							=> 'Sjálfgefið stafasett er rangt stillt',
	'ERROR_DEFAULT_CHARSET_EXPLAIN'					=> '<var>default_charset</var> verður að vera <samp>UTF-8</samp>. Þú getur skoðað núverandi gildi á síðunni <samp>PHP-upplýsingar</samp>.',

	'FILES_PER_DAY'		=> 'Viðhengi á dag',
	'FORUM_STATS'		=> 'Tölfræði spjallborðs',

	'GZIP_COMPRESSION'	=> 'GZip-þjöppun',

	'NO_SEARCH_INDEX'	=> 'Valin leitarvél hefur engan leitarvísi.<br />Stofnaðu vísinn fyrir „%1$s“ í hlutanum %2$sleitarvísir%3$s.',
	'NOT_AVAILABLE'		=> 'Ekki tiltækt',
	'NUMBER_FILES'		=> 'Fjöldi viðhengja',
	'NUMBER_POSTS'		=> 'Fjöldi færslna',
	'NUMBER_TOPICS'		=> 'Fjöldi umræðna',
	'NUMBER_USERS'		=> 'Fjöldi notenda',
	'NUMBER_ORPHAN'		=> 'Munaðarlaus viðhengi',

	'PHP_VERSION'		=> 'PHP-útgáfa',
	'PHP_VERSION_OLD'	=> 'Útgáfa PHP á þessum þjóni (%1$s) verður ekki lengur studd í framtíðarútgáfum phpBB. Lágmarksútgáfan verður PHP %2$s. %3$sNánar%4$s',

	'POSTS_PER_DAY'		=> 'Færslur á dag',

	'PURGE_CACHE'			=> 'Hreinsa skyndiminni',
	'PURGE_CACHE_CONFIRM'	=> 'Ertu viss um að þú viljir hreinsa skyndiminnið?',
	'PURGE_CACHE_EXPLAIN'	=> 'Hreinsar allt sem tengist skyndiminni, þar á meðal vistuð sniðmát og fyrirspurnir.',
	'PURGE_CACHE_SUCCESS'	=> 'Skyndiminnið var hreinsað.',

	'PURGE_SESSIONS'			=> 'Hreinsa allar setur',
	'PURGE_SESSIONS_CONFIRM'	=> 'Ertu viss um að þú viljir hreinsa allar setur? Það skráir alla notendur út.',
	'PURGE_SESSIONS_EXPLAIN'	=> 'Hreinsar allar setur og skráir alla notendur út með því að tæma setutöfluna.',
	'PURGE_SESSIONS_SUCCESS'	=> 'Setur voru hreinsaðar.',

	'RESET_DATE'					=> 'Endurstilla stofndag spjallborðs',
	'RESET_DATE_CONFIRM'			=> 'Ertu viss um að þú viljir endurstilla stofndag spjallborðsins?',
	'RESET_DATE_SUCCESS'				=> 'Stofndagur spjallborðsins var endurstilltur',
	'RESET_ONLINE'					=> 'Endurstilla met tengdra notenda',
	'RESET_ONLINE_CONFIRM'			=> 'Ertu viss um að þú viljir endurstilla metið yfir flesta tengda notendur?',
	'RESET_ONLINE_SUCCESS'				=> 'Met tengdra notenda var endurstillt',
	'RESYNC_POSTCOUNTS'				=> 'Endursamstilla færslufjölda',
	'RESYNC_POSTCOUNTS_EXPLAIN'		=> 'Aðeins núverandi færslur verða teknar með. Grisjaðar færslur verða ekki taldar.',
	'RESYNC_POSTCOUNTS_CONFIRM'		=> 'Ertu viss um að þú viljir endursamstilla færslufjölda?',
	'RESYNC_POSTCOUNTS_SUCCESS'			=> 'Færslufjöldi var endursamstilltur',
	'RESYNC_POST_MARKING'			=> 'Endursamstilla merktar umræður',
	'RESYNC_POST_MARKING_CONFIRM'	=> 'Ertu viss um að þú viljir endursamstilla merktar umræður?',
	'RESYNC_POST_MARKING_EXPLAIN'	=> 'Fjarlægir fyrst merkingu af öllum umræðum og merkir síðan rétt þær umræður sem hafa verið virkar síðustu sex mánuði.',
	'RESYNC_POST_MARKING_SUCCESS'	=> 'Merktar umræður voru endursamstilltar',
	'RESYNC_STATS'					=> 'Endursamstilla tölfræði',
	'RESYNC_STATS_CONFIRM'			=> 'Ertu viss um að þú viljir endursamstilla tölfræði?',
	'RESYNC_STATS_EXPLAIN'			=> 'Endurreiknar heildarfjölda færslna, umræðna, notenda og skráa.',
	'RESYNC_STATS_SUCCESS'			=> 'Tölfræði var endursamstillt',
	'RUN'							=> 'Keyra núna',

	'STATISTIC'					=> 'Tölfræði',
	'STATISTIC_RESYNC_OPTIONS'	=> 'Endursamstilla eða endurstilla tölfræði',

	'TIMEZONE_INVALID'	=> 'Valið tímabelti er ógilt.',
	'TIMEZONE_SELECTED'	=> '(valið núna)',
	'TOPICS_PER_DAY'	=> 'Umræður á dag',

	'UPLOAD_DIR_SIZE'	=> 'Stærð sendra viðhengja',
	'USERS_PER_DAY'		=> 'Notendur á dag',

	'VALUE'							=> 'Gildi',
	'VERSIONCHECK_FAIL'				=> 'Ekki tókst að sækja upplýsingar um nýjustu útgáfu.',
	'VERSIONCHECK_FORCE_UPDATE'		=> 'Athuga útgáfu aftur',
	'VERSION_CHECK'					=> 'Athuga útgáfu',
	'VERSION_CHECK_EXPLAIN'			=> 'Checks to see if the version of phpBB you are currently running is up to date.',
	'VERSIONCHECK_INVALID_ENTRY'	=> 'Upplýsingar um nýjustu útgáfu innihalda óstudda færslu.',
	'VERSIONCHECK_INVALID_URL'		=> 'Upplýsingar um nýjustu útgáfu innihalda ógilda vefslóð.',
	'VERSIONCHECK_INVALID_VERSION'	=> 'Upplýsingar um nýjustu útgáfu innihalda ógilda útgáfu.',
	'VERSION_NOT_UP_TO_DATE_ACP'	=> 'Your version of phpBB is not up to date.<br />Below you will find a link to the release announcement for the latest version as well as instructions on how to perform the update.',
	'VERSION_NOT_UP_TO_DATE_TITLE'	=> 'phpBB-uppsetningin þín er ekki uppfærð.',
	'VERSION_UP_TO_DATE_ACP'		=> 'Your installation is up to date, no updates are available for your version of phpBB. You do not need to update your installation.',
	'VIEW_ADMIN_LOG'				=> 'Skoða annál kerfisstjóra',
	'VIEW_INACTIVE_USERS'			=> 'Skoða óvirka notendur',

	'WELCOME_PHPBB'			=> 'Velkomin í phpBB',
	'WRITABLE_CONFIG'		=> 'Allir geta skrifað í stillingaskrána þína (config.php). Við mælum eindregið með að breyta heimildunum í 640 eða að minnsta kosti 644, til dæmis <a href="http://en.wikipedia.org/wiki/Chmod" rel="external">chmod</a> 640 config.php.',
));

// Inactive Users
$lang = array_merge($lang, array(
	'INACTIVE_DATE'					=> 'Dagsetning óvirkni',
	'INACTIVE_REASON'				=> 'Ástæða',
	'INACTIVE_REASON_MANUAL'		=> 'Reikningur gerður óvirkur af kerfisstjóra',
	'INACTIVE_REASON_PROFILE'		=> 'Upplýsingum notandasniðs breytt',
	'INACTIVE_REASON_REGISTER'		=> 'Nýskráður reikningur',
	'INACTIVE_REASON_REMIND'		=> 'Endurvirkjun notandareiknings þvinguð fram',
	'INACTIVE_REASON_UNKNOWN'		=> 'Óþekkt',
	'INACTIVE_USERS'				=> 'Óvirkir notendur',
	'INACTIVE_USERS_EXPLAIN'		=> 'Þetta er listi yfir skráða notendur sem eiga óvirka reikninga. Þú getur virkjað, eytt eða minnt þessa notendur á með tölvupósti.',
	'INACTIVE_USERS_EXPLAIN_INDEX'	=> 'Þetta er listi yfir síðustu 10 skráðu notendurna sem eiga óvirka reikninga. Reikningar eru óvirkir annaðhvort vegna þess að virkjun reikninga er virk í skráningarstillingum og þeir hafa ekki enn verið virkjaðir, eða vegna þess að þeir voru gerðir óvirkir. Með tenglinum hér fyrir neðan getur þú opnað allan listann og virkjað, eytt eða minnt þessa notendur á með tölvupósti.',

	'NO_INACTIVE_USERS'	=> 'Engir óvirkir notendur',

	'SORT_INACTIVE'		=> 'Dagsetning óvirkni',
	'SORT_LAST_VISIT'	=> 'Síðasta heimsókn',
	'SORT_REASON'		=> 'Ástæða',
	'SORT_REG_DATE'		=> 'Skráningardagur',
	'SORT_LAST_REMINDER'=> 'Síðasta áminning',
	'SORT_REMINDER'		=> 'Áminning send',

	'USER_IS_INACTIVE'		=> 'Notandinn er óvirkur',
));

// Help support phpBB page
$lang = array_merge($lang, array(
	'EXPLAIN_SEND_STATISTICS'	=> 'Sendu phpBB upplýsingar um stillingar þjónsins og spjallborðsins til tölfræðigreiningar. Allar upplýsingar sem gætu auðkennt þig eða vefsvæðið hafa verið fjarlægðar og gögnin eru algjörlega <strong>nafnlaus</strong>. Ákvarðanir um framtíðarútgáfur phpBB byggjast meðal annars á þessum upplýsingum. Tölfræðin er birt opinberlega og gögnunum er einnig deilt með PHP-verkefninu, forritunarmálinu sem phpBB er skrifað í.',
	'EXPLAIN_SHOW_STATISTICS'	=> 'Með hnappinum hér fyrir neðan getur þú forskoðað allar breytur sem verða sendar.',
	'DONT_SEND_STATISTICS'		=> 'Fara aftur á stjórnborðið án þess að senda tölfræðiupplýsingar til phpBB.',
	'GO_ACP_MAIN'				=> 'Fara á forsíðu stjórnborðsins',
	'HIDE_STATISTICS'			=> 'Fela upplýsingar',
	'SEND_STATISTICS'			=> 'Senda tölfræði',
	'SEND_STATISTICS_LONG'		=> 'Senda tölfræðiupplýsingar',
	'SHOW_STATISTICS'			=> 'Sýna upplýsingar',
	'THANKS_SEND_STATISTICS'	=> 'Takk fyrir að senda upplýsingarnar.',
	'FAIL_SEND_STATISTICS'		=> 'phpBB gat ekki sent tölfræðina',
));

// Log Entries
$lang = array_merge($lang, array(
	'LOG_ACL_ADD_USER_GLOBAL_U_'		=> '<strong>Notendaheimildum notenda bætt við eða breytt</strong><br />» %s',
	'LOG_ACL_ADD_GROUP_GLOBAL_U_'		=> '<strong>Notendaheimildum hópa bætt við eða breytt</strong><br />» %s',
	'LOG_ACL_ADD_USER_GLOBAL_M_'		=> '<strong>Almennum umsjónarheimildum notenda bætt við eða breytt</strong><br />» %s',
	'LOG_ACL_ADD_GROUP_GLOBAL_M_'		=> '<strong>Almennum umsjónarheimildum hópa bætt við eða breytt</strong><br />» %s',
	'LOG_ACL_ADD_USER_GLOBAL_A_'		=> '<strong>Kerfisstjórnarheimildum notenda bætt við eða breytt</strong><br />» %s',
	'LOG_ACL_ADD_GROUP_GLOBAL_A_'		=> '<strong>Kerfisstjórnarheimildum hópa bætt við eða breytt</strong><br />» %s',

	'LOG_ACL_ADD_ADMIN_GLOBAL_A_'		=> '<strong>Kerfisstjórum bætt við eða breytt</strong><br />» %s',
	'LOG_ACL_ADD_MOD_GLOBAL_M_'			=> '<strong>Almennum umsjónarmönnum bætt við eða breytt</strong><br />» %s',

	'LOG_ACL_ADD_USER_LOCAL_F_'			=> '<strong>Aðgangi notenda að spjallsvæði bætt við eða breytt</strong> að %1$s<br />» %2$s',
	'LOG_ACL_ADD_USER_LOCAL_M_'			=> '<strong>Umsjónaraðgangi notenda bætt við eða breytt</strong> að %1$s<br />» %2$s',
	'LOG_ACL_ADD_GROUP_LOCAL_F_'		=> '<strong>Aðgangi hópa að spjallsvæði bætt við eða breytt</strong> að %1$s<br />» %2$s',
	'LOG_ACL_ADD_GROUP_LOCAL_M_'		=> '<strong>Umsjónaraðgangi hópa að spjallsvæði bætt við eða breytt</strong> að %1$s<br />» %2$s',

	'LOG_ACL_ADD_MOD_LOCAL_M_'			=> '<strong>Umsjónarmönnum bætt við eða breytt</strong> fyrir %1$s<br />» %2$s',
	'LOG_ACL_ADD_FORUM_LOCAL_F_'		=> '<strong>Heimildum spjallsvæðis bætt við eða breytt</strong> fyrir %1$s<br />» %2$s',

	'LOG_ACL_DEL_ADMIN_GLOBAL_A_'		=> '<strong>Kerfisstjórar fjarlægðir</strong><br />» %s',
	'LOG_ACL_DEL_MOD_GLOBAL_M_'			=> '<strong>Almennir umsjónarmenn fjarlægðir</strong><br />» %s',
	'LOG_ACL_DEL_MOD_LOCAL_M_'			=> '<strong>Umsjónarmenn fjarlægðir</strong> af %1$s<br />» %2$s',
	'LOG_ACL_DEL_FORUM_LOCAL_F_'		=> '<strong>Heimildir notanda/hóps fjarlægðar af spjallsvæði</strong> %1$s<br />» %2$s',

	'LOG_ACL_TRANSFER_PERMISSIONS'		=> '<strong>Heimildir yfirfærðar frá</strong><br />» %s',
	'LOG_ACL_RESTORE_PERMISSIONS'		=> '<strong>Eigin heimildir endurheimtar eftir notkun heimilda frá</strong><br />» %s',

	'LOG_ADMIN_AUTH_FAIL'		=> '<strong>Innskráningartilraun á stjórnborð mistókst</strong>',
	'LOG_ADMIN_AUTH_SUCCESS'	=> '<strong>Innskráning á stjórnborð tókst</strong>',

	'LOG_ATTACHMENTS_DELETED'	=> '<strong>Viðhengi notanda fjarlægð</strong><br />» %s',

	'LOG_ATTACH_EXT_ADD'		=> '<strong>Skráarendingu viðhengis bætt við eða breytt</strong><br />» %s',
	'LOG_ATTACH_EXT_DEL'		=> '<strong>Skráarending viðhengis fjarlægð</strong><br />» %s',
	'LOG_ATTACH_EXT_UPDATE'		=> '<strong>Skráarending viðhengis uppfærð</strong><br />» %s',
	'LOG_ATTACH_EXTGROUP_ADD'	=> '<strong>Skráarendingaflokki bætt við</strong><br />» %s',
	'LOG_ATTACH_EXTGROUP_EDIT'	=> '<strong>Skráarendingaflokki breytt</strong><br />» %s',
	'LOG_ATTACH_EXTGROUP_DEL'	=> '<strong>Skráarendingaflokkur fjarlægður</strong><br />» %s',
	'LOG_ATTACH_FILEUPLOAD'		=> '<strong>Ótengd skrá tengd við færslu</strong><br />» Auðkenni %1$d - %2$s',
	'LOG_ATTACH_ORPHAN_DEL'		=> '<strong>Ótengdum skrám eytt</strong><br />» %s',

	'LOG_BAN_EXCLUDE_USER'	=> '<strong>Notandi undanskilinn banni</strong> vegna „<em>%1$s</em>“<br />» %2$s',
	'LOG_BAN_EXCLUDE_IP'	=> '<strong>IP-tala undanskilin banni</strong> vegna „<em>%1$s</em>“<br />» %2$s',
	'LOG_BAN_EXCLUDE_EMAIL' => '<strong>Netfang undanskilið banni</strong> vegna „<em>%1$s</em>“<br />» %2$s',
	'LOG_BAN_USER'			=> '<strong>Notandi bannaður</strong> vegna „<em>%1$s</em>“<br />» %2$s',
	'LOG_BAN_IP'			=> '<strong>IP-tala bönnuð</strong> vegna „<em>%1$s</em>“<br />» %2$s',
	'LOG_BAN_EMAIL'			=> '<strong>Netfang bannað</strong> vegna „<em>%1$s</em>“<br />» %2$s',
	'LOG_UNBAN_USER'		=> '<strong>Banni notanda aflétt</strong><br />» %s',
	'LOG_UNBAN_IP'			=> '<strong>Banni IP-tölu aflétt</strong><br />» %s',
	'LOG_UNBAN_EMAIL'		=> '<strong>Banni netfangs aflétt</strong><br />» %s',

	'LOG_BBCODE_ADD'		=> '<strong>Nýjum BB-kóða bætt við</strong><br />» %s',
	'LOG_BBCODE_EDIT'		=> '<strong>BB-kóða breytt</strong><br />» %s',
	'LOG_BBCODE_DELETE'		=> '<strong>BB-kóða eytt</strong><br />» %s',
	'LOG_BBCODE_CONFIGURATION_ERROR'	=> '<strong>Villa við stillingu BB-kóða</strong>: %1$s<br />» %2$s',

	'LOG_BOT_ADDED'		=> '<strong>Nýju vélmenni bætt við</strong><br />» %s',
	'LOG_BOT_DELETE'	=> '<strong>Vélmenni eytt</strong><br />» %s',
	'LOG_BOT_UPDATED'	=> '<strong>Vélmenni uppfært</strong><br />» %s',

	'LOG_CLEAR_ADMIN'		=> '<strong>Kerfisstjóraannáll hreinsaður</strong>',
	'LOG_CLEAR_CRITICAL'	=> '<strong>Villuannáll hreinsaður</strong>',
	'LOG_CLEAR_MOD'			=> '<strong>Umsjónarannáll hreinsaður</strong>',
	'LOG_CLEAR_USER'		=> '<strong>Notandaannáll hreinsaður</strong><br />» %s',
	'LOG_CLEAR_USERS'		=> '<strong>Notendaannálar hreinsaðir</strong>',

	'LOG_CONFIG_ATTACH'			=> '<strong>Stillingum viðhengja breytt</strong>',
	'LOG_CONFIG_AUTH'			=> '<strong>Auðkenningarstillingum breytt</strong>',
	'LOG_CONFIG_AVATAR'			=> '<strong>Stillingum smámynda breytt</strong>',
	'LOG_CONFIG_COOKIE'			=> '<strong>Stillingum vafrakaka breytt</strong>',
	'LOG_CONFIG_EMAIL'			=> '<strong>Netpóststillingum breytt</strong>',
	'LOG_CONFIG_FEATURES'		=> '<strong>Eiginleikum spjallborðs breytt</strong>',
	'LOG_CONFIG_LOAD'			=> '<strong>Álagsstillingum breytt</strong>',
	'LOG_CONFIG_MESSAGE'		=> '<strong>Stillingum einkaskilaboða breytt</strong>',
	'LOG_CONFIG_POST'			=> '<strong>Færslustillingum breytt</strong>',
	'LOG_CONFIG_REGISTRATION'	=> '<strong>Skráningarstillingum notenda breytt</strong>',
	'LOG_CONFIG_FEED'			=> '<strong>Stillingum efnisstrauma breytt</strong>',
	'LOG_CONFIG_SEARCH'			=> '<strong>Leitarstillingum breytt</strong>',
	'LOG_CONFIG_SECURITY'		=> '<strong>Öryggisstillingum breytt</strong>',
	'LOG_CONFIG_SERVER'			=> '<strong>Netþjónsstillingum breytt</strong>',
	'LOG_CONFIG_SETTINGS'		=> '<strong>Stillingum spjallborðs breytt</strong>',
	'LOG_CONFIG_SIGNATURE'		=> '<strong>Stillingum undirskrifta breytt</strong>',
	'LOG_CONFIG_VISUAL'			=> '<strong>Stillingum ruslvélavarna breytt</strong>',

	'LOG_APPROVE_TOPIC'			=> '<strong>Umræða samþykkt</strong><br />» %s',
	'LOG_BUMP_TOPIC'			=> '<strong>Notandi færði umræðu efst</strong><br />» %s',
	'LOG_DELETE_POST'			=> '<strong>Færslunni „%1$s“ eftir „%2$s“ eytt af eftirfarandi ástæðu</strong><br />» %3$s',
	'LOG_DELETE_SHADOW_TOPIC'	=> '<strong>Skuggaumræðu eytt</strong><br />» %s',
	'LOG_DELETE_TOPIC'			=> '<strong>Umræðunni „%1$s“ eftir „%2$s“ eytt af eftirfarandi ástæðu</strong><br />» %3$s',
	'LOG_FORK'					=> '<strong>Umræða afrituð</strong><br />» frá %s',
	'LOG_LOCK'					=> '<strong>Umræðu læst</strong><br />» %s',
	'LOG_LOCK_POST'				=> '<strong>Færslu læst</strong><br />» %s',
	'LOG_MERGE'					=> '<strong>Færslur sameinaðar</strong> í umræðu<br />» %s',
	'LOG_MOVE'					=> '<strong>Umræða flutt</strong><br />» úr %1$s í %2$s',
	'LOG_MOVED_TOPIC'			=> '<strong>Umræða flutt</strong><br />» %s',
	'LOG_PM_REPORT_CLOSED'		=> '<strong>Tilkynningu um einkaskilaboð lokað</strong><br />» %s',
	'LOG_PM_REPORT_DELETED'		=> '<strong>Tilkynningu um einkaskilaboð eytt</strong><br />» %s',
	'LOG_POST_APPROVED'			=> '<strong>Færsla samþykkt</strong><br />» %s',
	'LOG_POST_DISAPPROVED'		=> '<strong>Færslunni „%1$s“ eftir „%3$s“ hafnað af eftirfarandi ástæðu</strong><br />» %2$s',
	'LOG_POST_EDITED'			=> '<strong>Færslunni „%1$s“ eftir „%2$s“ breytt af eftirfarandi ástæðu</strong><br />» %3$s',
	'LOG_POST_RESTORED'			=> '<strong>Færsla endurheimt</strong><br />» %s',
	'LOG_REPORT_CLOSED'			=> '<strong>Tilkynningu lokað</strong><br />» %s',
	'LOG_REPORT_DELETED'		=> '<strong>Tilkynningu eytt</strong><br />» %s',
	'LOG_RESTORE_TOPIC'			=> '<strong>Endurheimti umræðuna „%1$s“ eftir</strong><br />» %2$s',
	'LOG_SOFTDELETE_POST'		=> '<strong>Eyddi færslunni „%1$s“ eftir „%2$s“ tímabundið af eftirfarandi ástæðu</strong><br />» %3$s',
	'LOG_SOFTDELETE_TOPIC'		=> '<strong>Eyddi umræðunni „%1$s“ eftir „%2$s“ tímabundið af eftirfarandi ástæðu</strong><br />» %3$s',
	'LOG_SPLIT_DESTINATION'		=> '<strong>Færði aðskildar færslur</strong><br />» í %s',
	'LOG_SPLIT_SOURCE'			=> '<strong>Aðskildi færslur</strong><br />» úr %s',

	'LOG_TOPIC_APPROVED'		=> '<strong>Umræða samþykkt</strong><br />» %s',
	'LOG_TOPIC_RESTORED'		=> '<strong>Umræða endurheimt</strong><br />» %s',
	'LOG_TOPIC_DISAPPROVED'		=> '<strong>Hafnaði umræðunni „%1$s“ eftir „%3$s“ af eftirfarandi ástæðu</strong><br />» %2$s',
	'LOG_TOPIC_RESYNC'			=> '<strong>Teljarar umræðu endursamstilltir</strong><br />» %s',
	'LOG_TOPIC_TYPE_CHANGED'	=> '<strong>Tegund umræðu breytt</strong><br />» %s',
	'LOG_UNLOCK'				=> '<strong>Umræða aflæst</strong><br />» %s',
	'LOG_UNLOCK_POST'			=> '<strong>Færsla aflæst</strong><br />» %s',
	'LOG_VERSION_CHECK_FAIL'	=> '<strong>Athugun útgáfu mistókst</strong>',

	'LOG_DISALLOW_ADD'		=> '<strong>Óleyfilegu notandanafni bætt við</strong><br />» %s',
	'LOG_DISALLOW_DELETE'	=> '<strong>Óleyfilegu notandanafni eytt</strong>',

	'LOG_DB_BACKUP'			=> '<strong>Öryggisafrit gagnagrunns</strong>',
	'LOG_DB_DELETE'			=> '<strong>Öryggisafriti gagnagrunns eytt</strong>',
	'LOG_DB_RESTORE'		=> '<strong>Öryggisafrit gagnagrunns endurheimt</strong>',

	'LOG_DOWNLOAD_EXCLUDE_IP'	=> '<strong>IP-tala/vélarheiti undanskilið niðurhalslista</strong><br />» %s',
	'LOG_DOWNLOAD_IP'			=> '<strong>IP-tölu/vélarheiti bætt á niðurhalslista</strong><br />» %s',
	'LOG_DOWNLOAD_REMOVE_IP'	=> '<strong>IP-tala/vélarheiti fjarlægt af niðurhalslista</strong><br />» %s',

	'LOG_ERROR_JABBER'		=> '<strong>Jabber-villa</strong><br />» %s',
	'LOG_ERROR_EMAIL'		=> '<strong>Netpóstvilla</strong><br />» %s',
	'LOG_ERROR_CAPTCHA'		=> '<strong>CAPTCHA-villa</strong><br />» %s',

	'LOG_FORUM_ADD'							=> '<strong>Nýtt spjallsvæði stofnað</strong><br />» %s',
	'LOG_FORUM_COPIED_PERMISSIONS'			=> '<strong>Heimildir spjallsvæðis afritaðar</strong> frá %1$s<br />» %2$s',
	'LOG_FORUM_DEL_FORUM'					=> '<strong>Spjallsvæði eytt</strong><br />» %s',
	'LOG_FORUM_DEL_FORUMS'					=> '<strong>Spjallsvæði og undirsvæðum þess eytt</strong><br />» %s',
	'LOG_FORUM_DEL_MOVE_FORUMS'				=> '<strong>Spjallsvæði eytt og undirsvæði flutt</strong> á %1$s<br />» %2$s',
	'LOG_FORUM_DEL_MOVE_POSTS'				=> '<strong>Spjallsvæði eytt og færslur fluttar</strong> á %1$s<br />» %2$s',
	'LOG_FORUM_DEL_MOVE_POSTS_FORUMS'		=> '<strong>Spjallsvæði og undirsvæðum eytt, færslur fluttar</strong> á %1$s<br />» %2$s',
	'LOG_FORUM_DEL_MOVE_POSTS_MOVE_FORUMS'	=> '<strong>Spjallsvæði eytt, færslur fluttar</strong> á %1$s <strong>og undirsvæði</strong> á %2$s<br />» %3$s',
	'LOG_FORUM_DEL_POSTS'					=> '<strong>Spjallsvæði og færslum þess eytt</strong><br />» %s',
	'LOG_FORUM_DEL_POSTS_FORUMS'			=> '<strong>Spjallsvæði, færslum þess og undirsvæðum eytt</strong><br />» %s',
	'LOG_FORUM_DEL_POSTS_MOVE_FORUMS'		=> '<strong>Spjallsvæði og færslum eytt, undirsvæði flutt</strong> á %1$s<br />» %2$s',
	'LOG_FORUM_EDIT'						=> '<strong>Upplýsingum spjallsvæðis breytt</strong><br />» %s',
	'LOG_FORUM_MOVE_DOWN'					=> '<strong>Spjallsvæði fært</strong> %1$s <strong>niður fyrir</strong> %2$s',
	'LOG_FORUM_MOVE_UP'						=> '<strong>Spjallsvæði fært</strong> %1$s <strong>upp fyrir</strong> %2$s',
	'LOG_FORUM_SYNC'						=> '<strong>Spjallsvæði endursamstillt</strong><br />» %s',

	'LOG_GENERAL_ERROR'	=> '<strong>Almenn villa kom upp</strong>: %1$s <br />» %2$s',

	'LOG_GROUP_CREATED'		=> '<strong>Nýr notendahópur stofnaður</strong><br />» %s',
	'LOG_GROUP_DEFAULTS'	=> '<strong>Hópurinn „%1$s“ gerður sjálfgefinn fyrir meðlimi</strong><br />» %2$s',
	'LOG_GROUP_DELETE'		=> '<strong>Notendahópi eytt</strong><br />» %s',
	'LOG_GROUP_DEMOTED'		=> '<strong>Stjórnendur lækkaðir í tign í notendahópi</strong> %1$s<br />» %2$s',
	'LOG_GROUP_PROMOTED'	=> '<strong>Meðlimir gerðir að stjórnendum í notendahópi</strong> %1$s<br />» %2$s',
	'LOG_GROUP_REMOVE'		=> '<strong>Meðlimir fjarlægðir úr notendahópi</strong> %1$s<br />» %2$s',
	'LOG_GROUP_UPDATED'		=> '<strong>Upplýsingar notendahóps uppfærðar</strong><br />» %s',
	'LOG_MODS_ADDED'		=> '<strong>Nýjum stjórnendum bætt í notendahópinn</strong> %1$s<br />» %2$s',
	'LOG_USERS_ADDED'		=> '<strong>Nýjum meðlimum bætt í notendahópinn</strong> %1$s<br />» %2$s',
	'LOG_USERS_APPROVED'	=> '<strong>Notendur samþykktir í notendahópinn</strong> %1$s<br />» %2$s',
	'LOG_USERS_PENDING'		=> '<strong>Notendur sóttu um aðild að hópnum „%1$s“ og bíða samþykkis</strong><br />» %2$s',

	'LOG_IMAGE_GENERATION_ERROR'	=> '<strong>Villa við gerð myndar</strong><br />» Villa í %1$s á línu %2$s: %3$s',

	'LOG_INACTIVE_ACTIVATE'	=> '<strong>Óvirkir notendur virkjaðir</strong><br />» %s',
	'LOG_INACTIVE_DELETE'	=> '<strong>Óvirkum notendum eytt</strong><br />» %s',
	'LOG_INACTIVE_REMIND'	=> '<strong>Áminningarpóstur sendur óvirkum notendum</strong><br />» %s',
	'LOG_INSTALL_CONVERTED'	=> '<strong>Umbreytt úr %1$s í phpBB %2$s</strong>',
	'LOG_INSTALL_INSTALLED'	=> '<strong>phpBB %s sett upp</strong>',

	'LOG_IP_BROWSER_FORWARDED_CHECK'	=> '<strong>Athugun á IP-tölu setu, vafra eða X_FORWARDED_FOR mistókst</strong><br />»IP-tala notanda „<em>%1$s</em>“ var borin saman við IP-tölu setu „<em>%2$s</em>“, vafrastrengur notanda „<em>%3$s</em>“ við vafrastreng setu „<em>%4$s</em>“ og X_FORWARDED_FOR-strengur notanda „<em>%5$s</em>“ við X_FORWARDED_FOR-streng setu „<em>%6$s</em>“.',

	'LOG_JAB_CHANGED'			=> '<strong>Jabber-reikningi breytt</strong>',
	'LOG_JAB_PASSCHG'			=> '<strong>Lykilorði Jabber breytt</strong>',
	'LOG_JAB_REGISTER'			=> '<strong>Jabber-reikningur skráður</strong>',
	'LOG_JAB_SETTINGS_CHANGED'	=> '<strong>Jabber-stillingum breytt</strong>',

	'LOG_LANGUAGE_PACK_DELETED'		=> '<strong>Tungumálapakka eytt</strong><br />» %s',
	'LOG_LANGUAGE_PACK_INSTALLED'	=> '<strong>Tungumálapakki settur upp</strong><br />» %s',
	'LOG_LANGUAGE_PACK_UPDATED'		=> '<strong>Upplýsingar tungumálapakka uppfærðar</strong><br />» %s',
	'LOG_LANGUAGE_FILE_REPLACED'	=> '<strong>Tungumálaskrá skipt út</strong><br />» %s',
	'LOG_LANGUAGE_FILE_SUBMITTED'	=> '<strong>Tungumálaskrá send inn og sett í store-möppuna</strong><br />» %s',

	'LOG_MASS_EMAIL'		=> '<strong>Fjöldapóstur sendur</strong><br />» %s',

	'LOG_MCP_CHANGE_POSTER'	=> '<strong>Höfundi í umræðunni „%1$s“ breytt</strong><br />» úr %2$s í %3$s',

	'LOG_MODULE_DISABLE'	=> '<strong>Eining gerð óvirk</strong><br />» %s',
	'LOG_MODULE_ENABLE'		=> '<strong>Eining virkjuð</strong><br />» %s',
	'LOG_MODULE_MOVE_DOWN'	=> '<strong>Eining færð niður</strong><br />» %1$s undir %2$s',
	'LOG_MODULE_MOVE_UP'	=> '<strong>Eining færð upp</strong><br />» %1$s yfir %2$s',
	'LOG_MODULE_REMOVED'	=> '<strong>Eining fjarlægð</strong><br />» %s',
	'LOG_MODULE_ADD'		=> '<strong>Einingu bætt við</strong><br />» %s',
	'LOG_MODULE_EDIT'		=> '<strong>Einingu breytt</strong><br />» %s',

	'LOG_A_ROLE_ADD'		=> '<strong>Kerfisstjórahlutverki bætt við</strong><br />» %s',
	'LOG_A_ROLE_EDIT'		=> '<strong>Kerfisstjórahlutverki breytt</strong><br />» %s',
	'LOG_A_ROLE_REMOVED'	=> '<strong>Kerfisstjórahlutverk fjarlægt</strong><br />» %s',
	'LOG_F_ROLE_ADD'		=> '<strong>Hlutverki spjallsvæðis bætt við</strong><br />» %s',
	'LOG_F_ROLE_EDIT'		=> '<strong>Hlutverki spjallsvæðis breytt</strong><br />» %s',
	'LOG_F_ROLE_REMOVED'	=> '<strong>Hlutverk spjallsvæðis fjarlægt</strong><br />» %s',
	'LOG_M_ROLE_ADD'		=> '<strong>Stjórnandahlutverki bætt við</strong><br />» %s',
	'LOG_M_ROLE_EDIT'		=> '<strong>Stjórnandahlutverki breytt</strong><br />» %s',
	'LOG_M_ROLE_REMOVED'	=> '<strong>Stjórnandahlutverk fjarlægt</strong><br />» %s',
	'LOG_U_ROLE_ADD'		=> '<strong>Hlutverki notanda bætt við</strong><br />» %s',
	'LOG_U_ROLE_EDIT'		=> '<strong>Hlutverki notanda breytt</strong><br />» %s',
	'LOG_U_ROLE_REMOVED'	=> '<strong>Hlutverk notanda fjarlægt</strong><br />» %s',

	'LOG_PLUPLOAD_TIDY_FAILED'		=> '<strong>Ekki tókst að opna %1$s til hreinsunar; athugaðu heimildir.</strong><br />Undantekning: %2$s<br />Rakning: %3$s',

	'LOG_PROFILE_FIELD_ACTIVATE'	=> '<strong>Notandasniðsreitur virkjaður</strong><br />» %s',
	'LOG_PROFILE_FIELD_CREATE'		=> '<strong>Notandasniðsreit bætt við</strong><br />» %s',
	'LOG_PROFILE_FIELD_DEACTIVATE'	=> '<strong>Notandasniðsreitur gerður óvirkur</strong><br />» %s',
	'LOG_PROFILE_FIELD_EDIT'		=> '<strong>Notandasniðsreit breytt</strong><br />» %s',
	'LOG_PROFILE_FIELD_REMOVED'		=> '<strong>Notandasniðsreitur fjarlægður</strong><br />» %s',

	'LOG_PRUNE'					=> '<strong>Spjallsvæði grisjuð</strong><br />» %s',
	'LOG_AUTO_PRUNE'			=> '<strong>Spjallsvæði grisjuð sjálfvirkt</strong><br />» %s',
	'LOG_PRUNE_SHADOW'		=> '<strong>Skuggaumræður grisjaðar sjálfkrafa</strong><br />» %s',
	'LOG_PRUNE_USER_DEAC'		=> '<strong>Notendur gerðir óvirkir</strong><br />» %s',
	'LOG_PRUNE_USER_DEL_DEL'	=> '<strong>Notendur grisjaðir og færslum eytt</strong><br />» %s',
	'LOG_PRUNE_USER_DEL_ANON'	=> '<strong>Notendur grisjaðir og færslum haldið</strong><br />» %s',

	'LOG_PURGE_CACHE'			=> '<strong>Skyndiminni hreinsað</strong>',
	'LOG_PURGE_SESSIONS'		=> '<strong>Setur hreinsaðar</strong>',

	'LOG_RANK_ADDED'		=> '<strong>Nýrri tign bætt við</strong><br />» %s',
	'LOG_RANK_REMOVED'		=> '<strong>Tign fjarlægð</strong><br />» %s',
	'LOG_RANK_UPDATED'		=> '<strong>Tign uppfærð</strong><br />» %s',

	'LOG_REASON_ADDED'		=> '<strong>Ástæðu tilkynningar/synjunar bætt við</strong><br />» %s',
	'LOG_REASON_REMOVED'	=> '<strong>Ástæða tilkynningar/synjunar fjarlægð</strong><br />» %s',
	'LOG_REASON_UPDATED'	=> '<strong>Ástæða tilkynningar/synjunar uppfærð</strong><br />» %s',

	'LOG_REFERER_INVALID'		=> '<strong>Staðfesting tilvísanda mistókst</strong><br />»Tilvísandinn var „<em>%1$s</em>“. Beiðninni var hafnað og setunni lokað.',
	'LOG_RESET_DATE'			=> '<strong>Stofndagur spjallborðs endurstilltur</strong>',
	'LOG_RESET_ONLINE'			=> '<strong>Met tengdra notenda endurstillt</strong>',
	'LOG_RESYNC_FILES_STATS'	=> '<strong>Skráatölfræði endursamstillt</strong>',
	'LOG_RESYNC_POSTCOUNTS'		=> '<strong>Færslufjöldi notenda endursamstilltur</strong>',
	'LOG_RESYNC_POST_MARKING'	=> '<strong>Merktar umræður endursamstilltar</strong>',
	'LOG_RESYNC_STATS'			=> '<strong>Tölfræði færslna, umræðna og notenda endursamstillt</strong>',

	'LOG_SEARCH_INDEX_CREATED'	=> '<strong>Leitarvísir stofnaður fyrir</strong><br />» %s',
	'LOG_SEARCH_INDEX_REMOVED'	=> '<strong>Leitarvísir fjarlægður fyrir</strong><br />» %s',
	'LOG_SPHINX_ERROR'			=> '<strong>Sphinx-villa</strong><br />» %s',

	'LOG_SPAMHAUS_OPEN_RESOLVER'		=> 'Spamhaus leyfir ekki fyrirspurnir í gegnum opinn DNS-leysi. Athugun svarta lista hefur verið gerð óvirk. Nánari upplýsingar: https://www.spamhaus.com/product/help-for-spamhaus-public-mirror-users/.',
	'LOG_SPAMHAUS_VOLUME_LIMIT'			=> 'Fjöldi Spamhaus-fyrirspurna hefur farið yfir leyfileg mörk. Athugun svarta lista hefur verið gerð óvirk. Nánari upplýsingar: https://www.spamhaus.com/product/help-for-spamhaus-public-mirror-users/.',

	'LOG_STYLE_ADD'				=> '<strong>Nýjum stíl bætt við</strong><br />» %s',
	'LOG_STYLE_DELETE'			=> '<strong>Stíl eytt</strong><br />» %s',
	'LOG_STYLE_EDIT_DETAILS'	=> '<strong>Stíl breytt</strong><br />» %s',
	'LOG_STYLE_EXPORT'			=> '<strong>Stíll fluttur út</strong><br />» %s',

	// @deprecated 3.1
	'LOG_TEMPLATE_ADD_DB'			=> '<strong>Nýju sniðmátasetti bætt í gagnagrunninn</strong><br />» %s',
	// @deprecated 3.1
	'LOG_TEMPLATE_ADD_FS'			=> '<strong>Nýju sniðmátasetti bætt í skráakerfið</strong><br />» %s',
	'LOG_TEMPLATE_CACHE_CLEARED'	=> '<strong>Skyndivistuðum útgáfum sniðmátaskráa í sniðmátasettinu <em>%1$s</em> eytt</strong><br />» %2$s',
	'LOG_TEMPLATE_DELETE'			=> '<strong>Sniðmátasetti eytt</strong><br />» %s',
	'LOG_TEMPLATE_EDIT'				=> '<strong>Sniðmátasettinu <em>%1$s</em> breytt</strong><br />» %2$s',
	'LOG_TEMPLATE_EDIT_DETAILS'		=> '<strong>Upplýsingum sniðmáts breytt</strong><br />» %s',
	'LOG_TEMPLATE_EXPORT'			=> '<strong>Sniðmátasett flutt út</strong><br />» %s',
	// @deprecated 3.1
	'LOG_TEMPLATE_REFRESHED'		=> '<strong>Sniðmátasett endurhlaðið</strong><br />» %s',

	// @deprecated 3.1
	'LOG_THEME_ADD_DB'			=> '<strong>Nýju þema bætt í gagnagrunninn</strong><br />» %s',
	// @deprecated 3.1
	'LOG_THEME_ADD_FS'			=> '<strong>Nýju þema bætt í skráakerfið</strong><br />» %s',
	'LOG_THEME_DELETE'			=> '<strong>Þema eytt</strong><br />» %s',
	'LOG_THEME_EDIT_DETAILS'	=> '<strong>Upplýsingum þema breytt</strong><br />» %s',
	'LOG_THEME_EDIT'			=> '<strong>Þemanu <em>%1$s</em> breytt</strong>',
	'LOG_THEME_EDIT_FILE'		=> '<strong>Þemanu <em>%1$s</em> breytt</strong><br />» Skránni <em>%2$s</em> breytt',
	'LOG_THEME_EXPORT'			=> '<strong>Þema flutt út</strong><br />» %s',
	// @deprecated 3.1
	'LOG_THEME_REFRESHED'		=> '<strong>Þema endurhlaðið</strong><br />» %s',

	'LOG_UPDATE_DATABASE'	=> '<strong>Gagnagrunnur uppfærður úr útgáfu %1$s í útgáfu %2$s</strong>',
	'LOG_UPDATE_PHPBB'		=> '<strong>phpBB uppfært úr útgáfu %1$s í útgáfu %2$s</strong>',

	'LOG_USER_ACTIVE'		=> '<strong>Notandi virkjaður</strong><br />» %s',
	'LOG_USER_BAN_USER'		=> '<strong>Notandi bannaður í notendastjórnun</strong> af ástæðunni „<em>%1$s</em>“<br />» %2$s',
	'LOG_USER_BAN_IP'		=> '<strong>IP-tala bönnuð í notendastjórnun</strong> af ástæðunni „<em>%1$s</em>“<br />» %2$s',
	'LOG_USER_BAN_EMAIL'	=> '<strong>Netfang bannað í notendastjórnun</strong> af ástæðunni „<em>%1$s</em>“<br />» %2$s',
	'LOG_USER_DELETED'		=> '<strong>Notanda eytt</strong><br />» %s',
	'LOG_USER_DEL_ATTACH'	=> '<strong>Öll viðhengi notandans fjarlægð</strong><br />» %s',
	'LOG_USER_DEL_AVATAR'	=> '<strong>Smámynd notanda fjarlægð</strong><br />» %s',
	'LOG_USER_DEL_OUTBOX'	=> '<strong>Úthólf notanda tæmt</strong><br />» %s',
	'LOG_USER_DEL_POSTS'	=> '<strong>Allar færslur notandans fjarlægðar</strong><br />» %s',
	'LOG_USER_DEL_SIG'		=> '<strong>Undirskrift notanda fjarlægð</strong><br />» %s',
	'LOG_USER_INACTIVE'		=> '<strong>Notandi gerður óvirkur</strong><br />» %s',
	'LOG_USER_MOVE_POSTS'	=> '<strong>Færslur notanda fluttar</strong><br />» færslur eftir „%1$s“ á spjallsvæðið „%2$s“',
	'LOG_USER_NEW_PASSWORD'	=> '<strong>Lykilorði notanda breytt</strong><br />» %s',
	'LOG_USER_REACTIVATE'	=> '<strong>Endurvirkjun notandareiknings þvinguð fram</strong><br />» %s',
	'LOG_USER_REMOVED_NR'	=> '<strong>Merking nýskráðs notanda fjarlægð</strong><br />» %s',

	'LOG_USER_UPDATE_EMAIL'	=> '<strong>Notandinn „%1$s“ breytti netfangi</strong><br />» úr „%2$s“ í „%3$s“',
	'LOG_USER_UPDATE_NAME'	=> '<strong>Notandanafni breytt</strong><br />» úr „%1$s“ í „%2$s“',
	'LOG_USER_USER_UPDATE'	=> '<strong>Upplýsingar notanda uppfærðar</strong><br />» %s',

	'LOG_USER_ACTIVE_USER'		=> '<strong>Notandareikningur virkjaður</strong>',
	'LOG_USER_DEL_AVATAR_USER'	=> '<strong>Smámynd notanda fjarlægð</strong>',
	'LOG_USER_DEL_SIG_USER'		=> '<strong>Undirskrift notanda fjarlægð</strong>',
	'LOG_USER_FEEDBACK'			=> '<strong>Athugasemd um notanda bætt við</strong><br />» %s',
	'LOG_USER_GENERAL'			=> '<strong>Færslu bætt við:</strong><br />» %s',
	'LOG_USER_INACTIVE_USER'	=> '<strong>Notandareikningur gerður óvirkur</strong>',
	'LOG_USER_LOCK'				=> '<strong>Notandi læsti eigin umræðu</strong><br />» %s',
	'LOG_USER_MOVE_POSTS_USER'	=> '<strong>Allar færslur fluttar á spjallsvæði</strong>» %s',
	'LOG_USER_REACTIVATE_USER'	=> '<strong>Endurvirkjun notandareiknings þvinguð fram</strong>',
	'LOG_USER_UNLOCK'			=> '<strong>Notandi aflæsti eigin umræðu</strong><br />» %s',
	'LOG_USER_WARNING'			=> '<strong>Viðvörun notanda bætt við</strong><br />» %s',
	'LOG_USER_WARNING_BODY'		=> '<strong>Eftirfarandi viðvörun var gefin þessum notanda</strong><br />» %s',

	'LOG_USER_GROUP_CHANGE'			=> '<strong>Notandi breytti sjálfgefnum hópi</strong><br />» %s',
	'LOG_USER_GROUP_DEMOTE'			=> '<strong>Notandi lækkaður úr stöðu stjórnanda notendahóps</strong><br />» %s',
	'LOG_USER_GROUP_JOIN'			=> '<strong>Notandi gekk í hóp</strong><br />» %s',
	'LOG_USER_GROUP_JOIN_PENDING'	=> '<strong>Notandi gekk í hóp og bíður samþykkis</strong><br />» %s',
	'LOG_USER_GROUP_RESIGN'			=> '<strong>Notandi sagði sig úr hópi</strong><br />» %s',

	'LOG_WARNING_DELETED'		=> '<strong>Viðvörun notanda eytt</strong><br />» %s',
	'LOG_WARNINGS_DELETED'		=> array(
		1	=> '<strong>Viðvörun notanda eytt</strong><br />» %1$s',
		2	=> '<strong>%2$d viðvörunum notanda eytt</strong><br />» %1$s',
	),
	'LOG_WARNINGS_DELETED_ALL'	=> '<strong>Öllum viðvörunum notanda eytt</strong><br />» %s',

	'LOG_WORD_ADD'			=> '<strong>Orðasíu bætt við</strong><br />» %s',
	'LOG_WORD_DELETE'		=> '<strong>Orðasíu eytt</strong><br />» %s',
	'LOG_WORD_EDIT'			=> '<strong>Orðasíu breytt</strong><br />» %s',

	'LOG_EXT_ENABLE'	=> '<strong>Viðbót virkjuð</strong><br />» %s',
	'LOG_EXT_DISABLE'	=> '<strong>Viðbót gerð óvirk</strong><br />» %s',
	'LOG_EXT_PURGE'		=> '<strong>Gögnum viðbótar eytt</strong><br />» %s',
	'LOG_EXT_UPDATE'	=> '<strong>Viðbót uppfærð</strong><br />» %s',
));
