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

// Common installer pages
$lang = array_merge($lang, array(
	'INSTALL_PANEL'	=> 'Uppsetningarborð',
	'SELECT_LANG'	=> 'Veldu tungumál',

	'STAGE_INSTALL'	=> 'Uppsetning phpBB',

	// Introduction page
	'INTRODUCTION_TITLE'	=> 'Inngangur',
	'INTRODUCTION_BODY'		=> 'Velkomin í phpBB3!<br /><br />phpBB® er mest notaða opna hugbúnaðarlausn heims fyrir spjallborð. phpBB3 er nýjasta útgáfan í vörulínu sem hófst árið 2000. Líkt og fyrri útgáfur er phpBB3 eiginleikaríkt og notendavænt og nýtur fulls stuðnings phpBB-teymisins. phpBB3 bætir verulega það sem gerði phpBB2 vinsælt og bætir við algengum óskum um eiginleika sem vantaði í fyrri útgáfur. Við vonum að það fari fram úr væntingum þínum.<br /><br />Þetta uppsetningarkerfi leiðir þig í gegnum uppsetningu phpBB3, uppfærslu úr eldri útgáfum í nýjustu útgáfu phpBB3 og umbreytingu úr öðru spjallborðskerfi, þar á meðal phpBB2, í phpBB3. Nánari upplýsingar er að finna í <a href="%1$s">uppsetningarleiðbeiningunum</a>.<br /><br />Til að lesa leyfi phpBB3 eða kynna þér hvernig stuðningur fæst og stefnu okkar um hann skaltu velja viðeigandi valkost í hliðarvalmyndinni. Veldu viðeigandi flipa hér fyrir ofan til að halda áfram.',

	// Support page
	'SUPPORT_TITLE'		=> 'Aðstoð',
	'SUPPORT_BODY'		=> 'Fullur stuðningur er veittur án endurgjalds fyrir núverandi stöðugu útgáfu phpBB3. Hann nær meðal annars til:</p><ul><li>uppsetningar</li><li>stillinga</li><li>tæknilegra spurninga</li><li>vandamála sem tengjast hugsanlegum villum í hugbúnaðinum</li><li>uppfærslu frá útgáfuframbjóðendum (RC) í nýjustu stöðugu útgáfu</li><li>umbreytingar úr phpBB 2.0.x í phpBB3</li><li>umbreytingar úr öðrum spjallborðshugbúnaði í phpBB3 (sjá <a href="https://www.phpbb.com/community/viewforum.php?f=486">spjallsvæði umbreytinga</a>)</li></ul><p>Við hvetjum notendur sem enn keyra beta-útgáfur phpBB3 til að setja upp nýtt eintak af nýjustu útgáfunni í staðinn.</p><h2>Viðbætur / Stílar</h2><p>Ef vandamál tengjast viðbótum skaltu senda færslu á viðeigandi <a href="https://www.phpbb.com/community/viewforum.php?f=451">spjallsvæði viðbóta</a>.<br />Ef vandamál tengjast stílum, sniðmátum og þemum skaltu senda færslu á viðeigandi <a href="https://www.phpbb.com/community/viewforum.php?f=471">spjallsvæði stíla</a>.<br /><br />Ef spurningin tengist tilteknum pakka skaltu senda hana beint í umræðuna sem er tileinkuð pakkanum.</p><h2>Fá aðstoð</h2><p><a href="https://www.phpbb.com/support/">Aðstoðarsvæði</a><br /><a href="https://www.phpbb.com/support/docs/en/3.3/ug/quickstart/">Flýtileiðbeiningar</a><br /><br />Til að fylgjast með nýjustu fréttum og útgáfum skaltu fylgja okkur á <a href="https://www.x.com/phpbb/">X</a> og <a href="https://www.facebook.com/phpbb/">Facebook</a><br /><br />',

	// License
	'LICENSE_TITLE'		=> 'GNU General Public License',

	// Install page
	'INSTALL_INTRO'			=> 'Velkomin í uppsetninguna',
	'INSTALL_INTRO_BODY'	=> 'Með þessum valkosti geturðu sett phpBB3 upp á þjóninum þínum.</p><p>Til að halda áfram þarftu stillingar gagnagrunnsins. Ef þú þekkir þær ekki skaltu hafa samband við hýsingaraðilann og biðja um þær. Ekki er hægt að halda áfram án þeirra. Þú þarft:</p>

	<ul>
		<li>Gerð gagnagrunns — gagnagrunninn sem þú ætlar að nota.</li>
		<li>Vélarheiti gagnagrunnsþjóns eða DSN — vistfang gagnagrunnsþjónsins.</li>
		<li>Gátt gagnagrunnsþjóns — gátt gagnagrunnsþjónsins (oftast er ekki þörf á þessu).</li>
		<li>Heiti gagnagrunns — heiti gagnagrunnsins á þjóninum.</li>
		<li>Notandanafn og lykilorð gagnagrunns — innskráningarupplýsingar fyrir aðgang að gagnagrunninum.</li>
	</ul>

	<p><strong>Athugaðu:</strong> Ef þú setur upp með SQLite skaltu slá inn alla slóðina að gagnagrunnsskránni í DSN-reitinn og skilja reitina fyrir notandanafn og lykilorð eftir auða. Af öryggisástæðum skaltu ganga úr skugga um að gagnagrunnsskráin sé ekki geymd á stað sem er aðgengilegur af vefnum.</p>

	<p>phpBB3 styður eftirfarandi gagnagrunna:</p>
	<ul>
		<li>MySQL 4.1.3 eða nýrri (MySQLi er áskilið)</li>
		<li>PostgreSQL 8.3+</li>
		<li>SQLite 3.6.15+</li>
		<li>MS SQL Server 2000 eða nýrri (beint eða með ODBC)</li>
		<li>MS SQL Server 2005 eða nýrri (innbyggt)</li>
		<li>Oracle</li>
	</ul>

	<p>Aðeins þeir gagnagrunnar sem þjónninn þinn styður verða sýndir.',

	'ACP_LINK'	=> 'Fara á <a href="%1$s">stjórnborð kerfisstjóra</a>',

	'INSTALL_PHPBB_INSTALLED'		=> 'phpBB er þegar uppsett.',
	'INSTALL_PHPBB_NOT_INSTALLED'	=> 'phpBB hefur ekki enn verið sett upp.',
	'INSTALL_RESTART'				=> 'Endurræsa uppsetningu',
));

// Requirements translation
$lang = array_merge($lang, array(
	// Filesystem requirements
	'FILE_NOT_EXISTS'						=> 'Skráin er ekki til',
	'FILE_NOT_EXISTS_EXPLAIN'				=> 'Skráin %1$s þarf að vera til svo hægt sé að setja phpBB upp.',
	'FILE_NOT_EXISTS_EXPLAIN_OPTIONAL'		=> 'Mælt er með að skráin %1$s sé til svo notkun spjallborðsins verði sem best.',
	'FILE_NOT_WRITABLE'						=> 'Skráin er ekki skrifanleg',
	'FILE_NOT_WRITABLE_EXPLAIN'				=> 'Skráin %1$s þarf að vera skrifanleg svo hægt sé að setja phpBB upp.',
	'FILE_NOT_WRITABLE_EXPLAIN_OPTIONAL'	=> 'Mælt er með að skráin %1$s sé skrifanleg svo notkun spjallborðsins verði sem best.',

	'DIRECTORY_NOT_EXISTS'						=> 'Mappan er ekki til',
	'DIRECTORY_NOT_EXISTS_EXPLAIN'				=> 'Mappan %1$s verður að vera til svo hægt sé að setja phpBB upp.',
	'DIRECTORY_NOT_EXISTS_EXPLAIN_OPTIONAL'		=> 'Mælt er með að mappan %1$s sé til svo notendaupplifun spjallborðsins verði betri.',
	'DIRECTORY_NOT_WRITABLE'					=> 'Ekki er hægt að skrifa í möppuna',
	'DIRECTORY_NOT_WRITABLE_EXPLAIN'			=> 'Vefþjónninn verður að geta skrifað í möppuna %1$s svo hægt sé að setja phpBB upp.',
	'DIRECTORY_NOT_WRITABLE_EXPLAIN_OPTIONAL'	=> 'Mælt er með að hægt sé að skrifa í möppuna %1$s svo notendaupplifun spjallborðsins verði betri.',

	// Server requirements
	'PHP_VERSION_REQD'					=> 'PHP-útgáfa',
	'PHP_VERSION_REQD_EXPLAIN'			=> 'phpBB krefst PHP-útgáfu 7.2.0 eða nýrri.',
	'PHP_GETIMAGESIZE_SUPPORT'			=> 'PHP-fallið getimagesize() er nauðsynlegt',
	'PHP_GETIMAGESIZE_SUPPORT_EXPLAIN'	=> 'Fallið getimagesize þarf að vera tiltækt svo phpBB virki rétt.',
	'PCRE_UTF_SUPPORT'					=> 'PCRE UTF-8 stuðningur',
	'PCRE_UTF_SUPPORT_EXPLAIN'			=> 'phpBB keyrir ekki ef PHP-uppsetningin var ekki vistþýdd með UTF-8-stuðningi í PCRE-viðbótinni.',
	'PHP_JSON_SUPPORT'					=> 'PHP JSON-stuðningur',
	'PHP_JSON_SUPPORT_EXPLAIN'			=> 'PHP JSON-viðbótin þarf að vera tiltæk svo phpBB virki rétt.',
	'PHP_MBSTRING_SUPPORT'				=> 'PHP mbstring-stuðningur',
	'PHP_MBSTRING_SUPPORT_EXPLAIN'		=> 'PHP mbstring-viðbótin þarf að vera tiltæk svo phpBB virki rétt.',
	'PHP_XML_SUPPORT'					=> 'PHP XML/DOM-stuðningur',
	'PHP_XML_SUPPORT_EXPLAIN'			=> 'PHP XML/DOM-viðbótin þarf að vera tiltæk svo phpBB virki rétt.',
	'PHP_SUPPORTED_DB'					=> 'Studdir gagnagrunnar',
	'PHP_SUPPORTED_DB_EXPLAIN'			=> 'PHP verður að styðja að minnsta kosti einn samhæfan gagnagrunn. Ef engar gagnagrunnseiningar birtast sem tiltækar skaltu hafa samband við hýsingaraðilann eða skoða viðeigandi PHP-uppsetningarleiðbeiningar.',

	'RETEST_REQUIREMENTS'	=> 'Athuga kröfur aftur',

	'STAGE_REQUIREMENTS'	=> 'Athuga kröfur',
));

// General error messages
$lang = array_merge($lang, array(
	'INST_ERR_MISSING_DATA'		=> 'Þú verður að fylla út alla reiti í þessum hluta.',

	'TIMEOUT_DETECTED_TITLE'	=> 'Uppsetningarforritið greindi að tími rann út',
	'TIMEOUT_DETECTED_MESSAGE'	=> 'Uppsetningarforritið greindi að tími rann út. Þú getur reynt að endurhlaða síðuna, en það kann að skemma gögn. Við mælum með að þú lengir tímamörkin eða reynir að nota CLI.',
));

// Data obtaining translations
$lang = array_merge($lang, array(
	'STAGE_OBTAIN_DATA'	=> 'Stilla uppsetningargögn',

	//
	// Admin data
	//
	'STAGE_ADMINISTRATOR'	=> 'Upplýsingar kerfisstjóra',

	// Form labels
	'ADMIN_CONFIG'				=> 'Stillingar stjórnanda',
	'ADMIN_PASSWORD'			=> 'Lykilorð stjórnanda',
	'ADMIN_PASSWORD_CONFIRM'	=> 'Staðfesta lykilorð stjórnanda',
	'ADMIN_PASSWORD_EXPLAIN'	=> 'Vinsamlegast skráðu inn lykilorð, milli 6 og 30 bókstafi á lengd.',
	'ADMIN_USERNAME'			=> 'Notendanafn stjórnanda',
	'ADMIN_USERNAME_EXPLAIN'	=> 'Vinsamlegast skráðu inn notendanafn, milli 3 og 20 bókstafi á lengd.',

	// Errors
	'INST_ERR_EMAIL_INVALID'		=> 'Netfangið sem þú slóst inn er ógilt.',
	'INST_ERR_PASSWORD_MISMATCH'	=> 'Lykilorðin sem þú slóst inn stemma ekki.',
	'INST_ERR_PASSWORD_TOO_LONG'	=> 'Lykilorðið sem þú slóst inn er of langt. Hámarkslengd er 30 stafir.',
	'INST_ERR_PASSWORD_TOO_SHORT'	=> 'Lykilorðið sem þú slóst inn er of stutt. Lágmarkslengd er 6 stafir.',
	'INST_ERR_USER_TOO_LONG'		=> 'Notandanafnið sem þú slóst inn er of langt. Hámarkslengd er 20 stafir.',
	'INST_ERR_USER_TOO_SHORT'		=> 'Notandanafnið sem þú slóst inn er of stutt. Lágmarkslengd er 3 stafir.',

	//
	// Board data
	//
	// Form labels
	'BOARD_CONFIG'		=> 'Stillingar spjallborðs',
	'DEFAULT_LANGUAGE'	=> 'Sjálfgefið tungumál',
	'BOARD_NAME'		=> 'Heiti spjallborðsins',
	'BOARD_DESCRIPTION'	=> 'Stutt lýsing á spjallborðinu',

	//
	// Database data
	//
	'STAGE_DATABASE'	=> 'Gagnagrunnsstillingar',

	// Form labels
	'DB_CONFIG'				=> 'Stilling gagnagrunnar',
	'DBMS'					=> 'Tegund gagnagrunnar',
	'DB_HOST'				=> 'Vélarheiti eða DSN gagnagrunnsþjóns',
	'DB_HOST_EXPLAIN'		=> 'DSN stendur fyrir Data Source Name og á aðeins við um ODBC-uppsetningar. Í PostgreSQL skaltu nota localhost til að tengjast staðbundna þjóninum um UNIX-lénssökkul og 127.0.0.1 til að tengjast um TCP. Fyrir SQLite skaltu slá inn alla slóðina að gagnagrunnsskránni.',
	'DB_PORT'				=> 'Gátt gagnagrunnsþjóns',
	'DB_PORT_EXPLAIN'		=> 'Skildu þennan reit eftir auðan nema þú vitir að þjónninn noti óstaðlaða gátt.',
	'DB_PASSWORD'			=> 'Lykilorð gagnagrunnar',
	'DB_NAME'				=> 'Nafn gagnagrunnar',
	'DB_USERNAME'			=> 'Aðgangsnafn gagnagrunnar',
	'DATABASE_VERSION'		=> 'Útgáfa gagnagrunns',
	'TABLE_PREFIX'			=> 'Forskeyti gagnagrunnstaflna',
	'TABLE_PREFIX_EXPLAIN'	=> 'Forskeytið verður að byrja á bókstaf og má aðeins innihalda bókstafi, tölustafi og undirstrik.',

	// Database options
	'DB_OPTION_MSSQL_ODBC'	=> 'MSSQL Server 2000+ gegnum ODBC',
	'DB_OPTION_MSSQLNATIVE'	=> 'MSSQL Server 2005+ [ Native ]',
	'DB_OPTION_MYSQLI'		=> 'MySQL gegnum MySQLi viðbótina',
	'DB_OPTION_ORACLE'		=> 'Oracle',
	'DB_OPTION_POSTGRES'	=> 'PostgreSQL',
	'DB_OPTION_SQLITE3'		=> 'SQLite 3',

	// Errors
	'INST_ERR_DB'					=> 'Villa við uppsetningu gagnagrunns',
	'INST_ERR_NO_DB'				=> 'Ekki er hægt að hlaða PHP-einingunni fyrir valda gerð gagnagrunns.',
	'INST_ERR_DB_INVALID_PREFIX'	=> 'Forskeytið sem þú slóst inn er ógilt. Það verður að byrja á bókstaf og má aðeins innihalda bókstafi, tölustafi og undirstrik.',
	'INST_ERR_PREFIX_TOO_LONG'		=> 'Tilgreint töfluforskeyti er of langt. Hámarkslengd er %d stafir.',
	'INST_ERR_DB_NO_NAME'			=> 'Ekkert heiti gagnagrunns var tilgreint.',
	'INST_ERR_DB_FORUM_PATH'		=> 'Tilgreinda gagnagrunnsskráin er innan möpputrés spjallborðsins. Vistaðu skrána á stað sem er ekki aðgengilegur af vefnum.',
	'INST_ERR_DB_CONNECT'			=> 'Ekki tókst að tengjast gagnagrunninum. Sjá villuboðin hér fyrir neðan.',
	'INST_ERR_DB_NO_WRITABLE'		=> 'Bæði gagnagrunnurinn og mappan sem inniheldur hann verða að vera skrifanleg.',
	'INST_ERR_DB_NO_ERROR'			=> 'Engin villuskilaboð gefin.',
	'INST_ERR_PREFIX'				=> 'Töflur með tilgreinda forskeytinu eru þegar til. Veldu annað forskeyti.',
	'INST_ERR_DB_NO_MYSQLI'			=> 'The version of MySQL installed on this machine is incompatible with the „MySQL with MySQLi Extension“ option you have selected. Please try the „MySQL“ option instead.',
	'INST_ERR_DB_NO_SQLITE3'		=> 'Uppsett útgáfa SQLite-viðbótarinnar er of gömul. Uppfæra verður hana í að minnsta kosti 3.6.15.',
	'INST_ERR_DB_NO_ORACLE'			=> 'Útgáfa Oracle sem er uppsett á þessari vél krefst þess að færibreytan <var>NLS_CHARACTERSET</var> sé stillt á <var>UTF8</var>. Uppfærðu annaðhvort uppsetninguna í 9.2+ eða breyttu færibreytunni.',
	'INST_ERR_DB_NO_POSTGRES'		=> 'Valdi gagnagrunnurinn var ekki búinn til með <var>UNICODE</var>- eða <var>UTF8</var>-kóðun. Reyndu uppsetningu með gagnagrunni sem notar <var>UNICODE</var>- eða <var>UTF8</var>-kóðun.',
	'INST_SCHEMA_FILE_NOT_WRITABLE'	=> 'Skemaskráin er ekki skrifanleg',

	//
	// Email data
	//
	'EMAIL_CONFIG'	=> 'Stillingar tölvupósts',

	// Package info
	'PACKAGE_VERSION'					=> 'Uppsett útgáfa pakka',
	'UPDATE_INCOMPLETE'				=> 'phpBB-uppsetningin var ekki uppfærð á réttan hátt.',
	'UPDATE_INCOMPLETE_MORE'		=> 'Lestu upplýsingarnar hér fyrir neðan til að leiðrétta villuna.',
	'UPDATE_INCOMPLETE_EXPLAIN'		=> '<h1>Ófullgerð uppfærsla</h1>

		<p>Við tókum eftir að síðustu uppfærslu phpBB-uppsetningarinnar var ekki lokið. Opnaðu <a href="%1$s" title="%1$s">gagnagrunnsuppfærsluna</a>, gakktu úr skugga um að <em>Uppfæra aðeins gagnagrunn</em> sé valið og smelltu á <strong>Senda</strong>. Ekki gleyma að eyða möppunni „install“ eftir að gagnagrunnurinn hefur verið uppfærður.</p>',

	//
	// Server data
	//
	// Form labels
	'UPGRADE_INSTRUCTIONS'			=> 'Ný eiginleikaútgáfa <strong>%1$s</strong> er tiltæk. Lestu <a href="%2$s" title="%2$s"><strong>útgáfutilkynninguna</strong></a> til að kynna þér nýjungarnar og hvernig uppfæra á.',
	'SERVER_CONFIG'				=> 'Netþjónsstillingar',
	'SCRIPT_PATH'				=> 'Slóð skriftu',
	'SCRIPT_PATH_EXPLAIN'		=> 'Slóðin þar sem phpBB er staðsett miðað við lénið, t.d. <samp>/phpBB3</samp>.',
));

// Default database schema entries...
$lang = array_merge($lang, array(
	'CONFIG_BOARD_EMAIL_SIG'		=> 'Kveðja, stjórnendur',
	'CONFIG_SITE_DESC'				=> 'Stuttur texti sem lýsir spjallborðinu',
	'CONFIG_SITENAME'				=> 'yourdomain.com',

	'DEFAULT_INSTALL_POST'			=> '<t>Þetta er sýnishorn af færslu í phpBB3-uppsetningunni þinni. Allt virðist virka. Þú getur eytt þessari færslu ef þú vilt og haldið áfram að setja upp spjallborðið. Við uppsetningu fá fyrsti flokkurinn og fyrsta spjallsvæðið viðeigandi heimildir fyrir fyrirfram skilgreindu notendahópana kerfisstjóra, vélmenni, almenna umsjónarmenn, gesti, skráða notendur og skráða COPPA-notendur. Ef þú eyðir einnig fyrsta flokknum og fyrsta spjallsvæðinu skaltu muna að veita öllum þessum notendahópum heimildir fyrir alla nýja flokka og spjallsvæði sem þú býrð til. Mælt er með að endurnefna fyrsta flokkinn og fyrsta spjallsvæðið og afrita heimildir þeirra þegar nýjir flokkar og spjallsvæði eru stofnuð. Góða skemmtun!</t>',

	'FORUMS_FIRST_CATEGORY'			=> 'Fyrsti flokkurinn þinn',
	'FORUMS_TEST_FORUM_DESC'		=> 'Lýsing á fyrsta spjallsvæðinu þínu.',
	'FORUMS_TEST_FORUM_TITLE'		=> 'Fyrsta spjallsvæðið þitt',

	'RANKS_SITE_ADMIN_TITLE'		=> 'Kerfisstjóri vefsvæðis',
	'REPORT_WAREZ'					=> 'Færslan inniheldur tengla á ólöglegan eða óleyfilega afritaðan hugbúnað.',
	'REPORT_SPAM'					=> 'Tilgangur tilkynntrar færslu er eingöngu að auglýsa vefsvæði eða aðra vöru.',
	'REPORT_OFF_TOPIC'				=> 'Tilkynnta færslan er ekki um efni umræðunnar.',
	'REPORT_OTHER'					=> 'Tilkynnta færslan fellur ekki undir neinn annan flokk. Notaðu reitinn fyrir nánari upplýsingar.',

	'SMILIES_ARROW'					=> 'Ör',
	'SMILIES_CONFUSED'				=> 'Ringlaður',
	'SMILIES_COOL'					=> 'Svalur',
	'SMILIES_CRYING'				=> 'Grátandi eða mjög dapur',
	'SMILIES_EMARRASSED'			=> 'Vandræðalegur',
	'SMILIES_EVIL'					=> 'Illur eða mjög reiður',
	'SMILIES_EXCLAMATION'			=> 'Upphrópun',
	'SMILIES_GEEK'					=> 'Nörd',
	'SMILIES_IDEA'					=> 'Hugmynd',
	'SMILIES_LAUGHING'				=> 'Hlær',
	'SMILIES_MAD'					=> 'Reiður',
	'SMILIES_MR_GREEN'				=> 'Herra grænn',
	'SMILIES_NEUTRAL'				=> 'Hlutlaus',
	'SMILIES_QUESTION'				=> 'Spurning',
	'SMILIES_RAZZ'					=> 'Skælir',
	'SMILIES_ROLLING_EYES'			=> 'Rúllar augunum',
	'SMILIES_SAD'					=> 'Dapur',
	'SMILIES_SHOCKED'				=> 'Í áfalli',
	'SMILIES_SMILE'					=> 'Brosir',
	'SMILIES_SURPRISED'				=> 'Hissa',
	'SMILIES_TWISTED_EVIL'			=> 'Slóttugur og illur',
	'SMILIES_UBER_GEEK'				=> 'Ofurnörd',
	'SMILIES_VERY_HAPPY'			=> 'Mjög glaður',
	'SMILIES_WINK'					=> 'Deplar auga',

	'TOPICS_TOPIC_TITLE'			=> 'Velkomin(n) á phpBB3',
));

// Common navigation items' translation
$lang = array_merge($lang, array(
	'MENU_OVERVIEW'		=> 'Yfirlit',
	'MENU_INTRO'		=> 'Inngangur',
	'MENU_LICENSE'		=> 'Leyfi',
	'MENU_SUPPORT'		=> 'Aðstoð',
));

// Task names
$lang = array_merge($lang, array(
	// Install filesystem
	'TASK_CREATE_CONFIG_FILE'	=> 'Bý til stillingarskrá',

	// Install database
	'TASK_ADD_CONFIG_SETTINGS'			=> 'Bæti við stillingum',
	'TASK_ADD_DEFAULT_DATA'				=> 'Bæti sjálfgefnum stillingum í gagnagrunninn',
	'TASK_CREATE_DATABASE_SCHEMA_FILE'	=> 'Bý til skema-skrá gagnagrunns',
	'TASK_SETUP_DATABASE'				=> 'Set gagnagrunn upp',
	'TASK_CREATE_TABLES'				=> 'Bý til töflur',

	// Install data
	'TASK_ADD_AI_CRAWLERS'		=> 'Skrái AI-skriðla',
	'TASK_ADD_BOTS'				=> 'Skrái vélmenni',
	'TASK_ADD_LANGUAGES'		=> 'Set upp tiltæk tungumál',
	'TASK_ADD_MODULES'			=> 'Set upp einingar',
	'TASK_CREATE_SEARCH_INDEX'	=> 'Bý til leitarvísi',

	// Install finish tasks
	'TASK_INSTALL_EXTENSIONS'	=> 'Set upp viðbætur úr pakkanum',
	'TASK_NOTIFY_USER'			=> 'Sendi tilkynningu í tölvupósti',
	'TASK_POPULATE_MIGRATIONS'	=> 'Skrái gagnaflutninga',

	// Installer general progress messages
	'INSTALLER_FINISHED'	=> 'Uppsetningarforritið lauk keyrslu án villu',
));

// Installer's general messages
$lang = array_merge($lang, array(
	'MODULE_NOT_FOUND'				=> 'Eining fannst ekki',
	'MODULE_NOT_FOUND_DESCRIPTION'	=> 'Eining fannst ekki þar sem þjónustan %s er óskilgreind.',

	'TASK_NOT_FOUND'				=> 'Verkefni fannst ekki',
	'TASK_NOT_FOUND_DESCRIPTION'	=> 'Verkefni fannst ekki vegna þess að þjónustan %s er óskilgreind.',

	'SKIP_MODULE'	=> 'Sleppa einingunni „%s“',
	'SKIP_TASK'		=> 'Sleppa verkefninu „%s“',

	'TASK_SERVICE_INSTALLER_MISSING'	=> 'Heiti allra verkefnaþjónusta uppsetningarforritsins verða að byrja á „installer“',
	'TASK_CLASS_NOT_FOUND'				=> 'Skilgreining verkefnaþjónustu uppsetningarforritsins er ógild. Þjónustuheitið „%1$s“ var gefið upp en vænt nafnrými klasa er „%2$s“. Nánari upplýsingar eru í leiðbeiningunum fyrir task_interface.',

	'INSTALLER_CONFIG_NOT_WRITABLE'	=> 'Stillingaskrá uppsetningarforritsins er ekki skrifanleg.',
));

// CLI messages
$lang = array_merge($lang, array(
	'CLI_INSTALL_BOARD'				=> 'Setja upp phpBB',
	'CLI_UPDATE_BOARD'				=> 'Uppfæra phpBB',
	'CLI_INSTALL_SHOW_CONFIG'		=> 'Sýna stillingarnar sem verða notaðar',
	'CLI_INSTALL_VALIDATE_CONFIG'	=> 'Staðfesta stillingaskrá',
	'CLI_CONFIG_FILE'				=> 'Stillingaskrá sem á að nota',
	'MISSING_FILE'					=> 'Ekki er hægt að opna skrána %1$s',
	'MISSING_DATA'					=> 'Gögn vantar í stillingaskrána eða hún kann að innihalda ógildar stillingar.',
	'INVALID_YAML_FILE'				=> 'Ekki tókst að túlka YAML-skrána %1$s',
	'CONFIGURATION_VALID'			=> 'Stillingaskráin er gild',
));

// Common updater messages
$lang = array_merge($lang, array(
	'UPDATE_INSTALLATION'			=> 'Uppfæra phpBB-uppsetningu',
	'UPDATE_INSTALLATION_EXPLAIN'	=> 'Með þessum valkosti er hægt að uppfæra phpBB-uppsetninguna í nýjustu útgáfu.<br />Meðan á ferlinu stendur verður heilleiki allra skráa athugaður. Þú getur yfirfarið allan mun og allar skrár fyrir uppfærsluna.<br /><br />Hægt er að uppfæra skrárnar með tveimur aðferðum.</p><h2>Handvirk uppfærsla</h2><p>Með þessari aðferð sækir þú aðeins þitt eigið safn breyttra skráa svo breytingar sem þú hefur gert glatist ekki. Eftir að pakkinn hefur verið sóttur þarftu að hlaða skránum handvirkt upp á rétta staði undir rótarmöppu phpBB. Að því loknu getur þú athugað skrárnar aftur til að staðfesta að þær hafi verið færðar á rétta staði.</p><h2>Ítarleg uppfærsla með FTP</h2><p>Þessi aðferð líkist þeirri fyrri en þú þarft ekki sjálfur að sækja breyttu skrárnar og hlaða þeim upp. Það verður gert fyrir þig. Til að nota aðferðina þarftu að þekkja FTP-innskráningarupplýsingarnar því beðið verður um þær. Að lokum verður þér vísað aftur í skráarathugunina til að tryggja að allt hafi verið uppfært rétt.<br /><br />',
	'UPDATE_INSTRUCTIONS'			=> '

		<h1>Útgáfutilkynning</h1>

		<p>Lestu útgáfutilkynningu nýjustu útgáfunnar áður en þú heldur uppfærslunni áfram, því hún kann að innihalda gagnlegar upplýsingar. Þar eru einnig tenglar á allt niðurhal og breytingaskrá.</p>

		<br />

		<h1>Hvernig á að uppfæra með Full Package</h1>

		<p>Ráðlögð aðferð við uppfærslu er að nota Full Package. Ef kjarnaskrám phpBB hefur verið breytt í uppsetningunni kanntu að vilja nota ítarlega uppfærslupakkann svo breytingarnar glatist ekki. Einnig er hægt að uppfæra með öðrum aðferðum sem taldar eru upp í skjalinu INSTALL.html. Skrefin til að uppfæra phpBB3 með Full Package eru:</p>

		<ol style="margin-left: 20px; font-size: 1.1em;">
			<li><strong class="error">Taktu öryggisafrit af öllum skrám spjallborðsins og gagnagrunninum.</strong></li>
			<li>Farðu á <a href="https://www.phpbb.com/downloads/" title="https://www.phpbb.com/downloads/">niðurhalssíðu phpBB.com</a> og sæktu nýjasta „Full Package“-safnið.</li>
			<li>Afþjappaðu safnið.</li>
			<li>Fjarlægðu (eyddu) skránni <code class="inline">config.php</code> og möppunum <code class="inline">/images</code>, <code class="inline">/store</code> og <code class="inline">/files</code> <em>úr pakkanum</em> (ekki af vefsvæðinu).</li>
			<li>Farðu í ACP, Stillingar spjallborðs, og gakktu úr skugga um að prosilver sé stilltur sem sjálfgefinn stíll. Ef ekki skaltu stilla prosilver sem sjálfgefinn stíl.</li>
			<li>Eyddu möppunum <code class="inline">/vendor</code> og <code class="inline">/cache</code> úr rótarmöppu spjallborðsins á þjóninum.</li>
			<li>Hladdu þeim skrám og möppum sem eftir eru upp með FTP eða SSH, það er öllu EFNI phpBB3-möppunnar, í rótarmöppu spjallborðsuppsetningarinnar á þjóninum og skrifaðu yfir fyrirliggjandi skrár. (Athugaðu: gættu þess að eyða ekki viðbótum í möppunni <code class="inline">/ext</code> þegar nýja phpBB3-efninu er hlaðið upp.)</li>
			<li><strong><a href="%1$s" title="%1$s">Hefðu nú uppfærsluna með því að opna install-möppuna í vafranum</a>.</strong></li>
			<li>Fylgdu skrefunum til að uppfæra gagnagrunninn og láttu ferlið ljúka.</li>
			<li>Eyddu möppunni <code class="inline">/install</code> úr rótarmöppu spjallborðsuppsetningarinnar með FTP eða SSH.<br><br></li>
		</ol>

		<p>Nú ertu með nýtt og uppfært spjallborð sem inniheldur alla notendur og færslur. Verkefni sem fylgja á eftir:</p>
		<ul style="margin-left: 20px; font-size: 1.1em;">
			<li>Uppfærðu tungumálapakkann</li>
			<li>Uppfærðu stílinn<br><br></li>
		</ul>

		<h1>Hvernig á að uppfæra með Advanced Update Package</h1>

		<p>Advanced Update Package er aðeins ráðlagður fyrir reynda notendur þegar kjarnaskrám phpBB hefur verið breytt í uppsetningunni. Einnig er hægt að uppfæra með aðferðunum sem taldar eru upp í skjalinu INSTALL.html. Skrefin til að uppfæra phpBB3 með Advanced Update Package eru:</p>

		<ol style="margin-left: 20px; font-size: 1.1em;">
			<li>Farðu á <a href="https://www.phpbb.com/downloads/" title="https://www.phpbb.com/downloads/">niðurhalssíðu phpBB.com</a> og sæktu „Advanced Update Package“-safnið.</li>
			<li>Afþjappaðu safnið.</li>
			<li>Hladdu óþjöppuðu möppunum „install“ og „vendor“ í heild sinni upp í rótarmöppu phpBB, þar sem config.php-skráin er.<br><br></li>
		</ol>

		<p>Eftir upphleðsluna verður spjallborðið utan nets fyrir almenna notendur vegna þess að install-mappan er til staðar.<br /><br />
		<strong><a href="%1$s" title="%1$s">Hefðu nú uppfærsluna með því að opna install-möppuna í vafranum</a>.</strong><br />
		<br />
		Því næst færð þú leiðsögn í gegnum uppfærsluferlið. Þér verður tilkynnt þegar uppfærslunni er lokið.
		</p>
	',
));

// Updater forms
$lang = array_merge($lang, array(
	// Updater types
	'UPDATE_TYPE'			=> 'Tegund uppfærslu',

	'UPDATE_TYPE_ALL'		=> 'Uppfæra skráarkerfi og gagnagrunn',
	'UPDATE_TYPE_DB_ONLY'	=> 'Uppfæra aðeins gagnagrunn',

	// File updater methods
	'UPDATE_FILE_METHOD_TITLE'		=> 'Aðferðir við skráaruppfærslu',

	'UPDATE_FILE_METHOD'			=> 'Aðferð við skráaruppfærslu',
	'UPDATE_FILE_METHOD_DOWNLOAD'	=> 'Sækja breyttar skrár í safnskrá',
	'UPDATE_FILE_METHOD_FTP'		=> 'Uppfæra skrár með FTP (sjálfvirkt)',
	'UPDATE_FILE_METHOD_FILESYSTEM'	=> 'Uppfæra skrár með beinum skráaraðgangi (sjálfvirkt)',

	// File updater archives
	'SELECT_DOWNLOAD_FORMAT'	=> 'Velja snið niðurhalssafnskrár',

	// FTP settings
	'FTP_SETTINGS'			=> 'FTP-stillingar',
));

// Requirements messages
$lang = array_merge($lang, array(
	'UPDATE_FILES_NOT_FOUND'	=> 'Engin gild uppfærslumappa fannst. Gakktu úr skugga um að viðeigandi skrám hafi verið hlaðið upp.',

	'NO_UPDATE_FILES_UP_TO_DATE'	=> 'Útgáfan þín er uppfærð og ekki þarf að keyra uppfærslutólið. Ef þú vilt kanna heilleika skránna skaltu ganga úr skugga um að réttum uppfærsluskrám hafi verið hlaðið upp.',
	'OLD_UPDATE_FILES'				=> 'Uppfærsluskrárnar eru úreltar. Skrárnar sem fundust eru ætlaðar til að uppfæra úr phpBB %1$s í phpBB %2$s, en nýjasta útgáfa phpBB er %3$s.',
	'INCOMPATIBLE_UPDATE_FILES'		=> 'Uppfærsluskrárnar sem fundust eru ósamhæfar uppsettu útgáfunni. Uppsett útgáfa er %1$s en uppfærsluskráin er ætluð til að uppfæra phpBB %2$s í %3$s.',
));

// Update files
$lang = array_merge($lang, array(
	'STAGE_UPDATE_FILES'		=> 'Uppfæra skrár',

	// Check files
	'UPDATE_CHECK_FILES'	=> 'Athuga skrár sem á að uppfæra',

	// Update file differ
	'FILE_DIFFER_ERROR_FILE_CANNOT_BE_READ'	=> 'Skráasamanburðurinn gat ekki opnað %s.',

	'UPDATE_FILE_DIFF'		=> 'Ber saman breyttar skrár',
	'ALL_FILES_DIFFED'		=> 'Mismunur allra breyttra skráa hefur verið reiknaður.',

	// File status
	'UPDATE_CONTINUE_FILE_UPDATE'	=> 'Uppfæra skrár',

	'DOWNLOAD'							=> 'Niðurhala',
	'DOWNLOAD_CONFLICTS'				=> 'Sækja safn með samrunárekstrum',
	'DOWNLOAD_CONFLICTS_EXPLAIN'		=> 'Leitaðu að &lt;&lt;&lt; til að finna árekstra',
	'DOWNLOAD_UPDATE_METHOD'			=> 'Sækja safn með breyttum skrám',
	'DOWNLOAD_UPDATE_METHOD_EXPLAIN'	=> 'Þegar safnið hefur verið sótt skaltu afþjappa því. Þar finnur þú breyttu skrárnar sem þarf að hlaða upp í rótarmöppu phpBB. Hladdu skránum upp á rétta staði og haltu síðan áfram með uppfærsluna þegar öllum skrám hefur verið hlaðið upp.',

	'FILE_ALREADY_UP_TO_DATE'		=> 'Skráin er þegar uppfærð.',
	'FILE_DIFF_NOT_ALLOWED'			=> 'Ekki er heimilt að bera skrána saman.',
	'FILE_USED'						=> 'Upplýsingar notaðar úr',			// Single file
	'FILES_CONFLICT'				=> 'Skrár með árekstra',
	'FILES_CONFLICT_EXPLAIN'		=> 'Eftirfarandi skrám hefur verið breytt og þær samsvara ekki upprunalegu skránum úr eldri útgáfunni. phpBB hefur komist að þeirri niðurstöðu að árekstrar verði ef reynt er að sameina þessar skrár. Skoðaðu árekstrana og reyndu að leysa þá handvirkt eða haltu uppfærslunni áfram með því að velja þá sameiningaraðferð sem þú kýst. Ef þú leysir árekstrana handvirkt skaltu athuga skrárnar aftur eftir breytingarnar. Einnig er hægt að velja sameiningaraðferð fyrir hverja skrá. Fyrri aðferðin býr til skrá þar sem línur með árekstrum úr gömlu skránni glatast; hin aðferðin veldur því að breytingarnar úr nýrri skránni glatast.',
	'FILES_DELETED'					=> 'Eyddar skrár',
	'FILES_DELETED_EXPLAIN'			=> 'Eftirfarandi skrár eru ekki til í nýju útgáfunni. Þeim þarf að eyða úr uppsetningunni.',
	'FILES_MODIFIED'				=> 'Breyttar skrár',
	'FILES_MODIFIED_EXPLAIN'		=> 'Eftirfarandi skrám hefur verið breytt og þær samsvara ekki upprunalegu skránum úr eldri útgáfunni. Uppfærða skráin verður sameining breytinganna þinna og nýju skrárinnar.',
	'FILES_NEW'						=> 'Nýjar skrár',
	'FILES_NEW_EXPLAIN'				=> 'Eftirfarandi skrár eru ekki til í uppsetningunni eins og stendur. Þeim verður bætt við uppsetninguna.',
	'FILES_NEW_CONFLICT'			=> 'Nýjar skrár með árekstrum',
	'FILES_NEW_CONFLICT_EXPLAIN'	=> 'Eftirfarandi skrár eru nýjar í nýjustu útgáfunni, en skrá með sama heiti er þegar til á sama stað. Nýja skráin skrifar yfir þá skrá.',
	'FILES_NOT_MODIFIED'			=> 'Óbreyttar skrár',
	'FILES_NOT_MODIFIED_EXPLAIN'	=> 'Eftirfarandi skrám hefur ekki verið breytt og þær samsvara upprunalegu phpBB-skránum í útgáfunni sem verið er að uppfæra úr.',
	'FILES_UP_TO_DATE'				=> 'Skrár sem hafa þegar verið uppfærðar',
	'FILES_UP_TO_DATE_EXPLAIN'		=> 'Eftirfarandi skrár eru þegar uppfærðar og þarf ekki að uppfæra aftur.',
	'FILES_VERSION'					=> 'Útgáfa skráa',
	'TOGGLE_DISPLAY'				=> 'Sýna/fela skráalista',

	// File updater
	'UPDATE_UPDATING_FILES'	=> 'Uppfæri skrár',

	'UPDATE_FILE_UPDATER_HAS_FAILED'	=> 'Skráaruppfærslan „%1$s“ mistókst. Uppsetningarforritið reynir vara-aðferðina „%2$s“.',
	'UPDATE_FILE_UPDATERS_HAVE_FAILED'	=> 'Skráaruppfærslan mistókst. Engar fleiri vara-aðferðir eru tiltækar.',

	'UPDATE_CONTINUE_UPDATE_PROCESS'	=> 'Halda uppfærsluferlinu áfram',
	'UPDATE_RECHECK_UPDATE_FILES'		=> 'Athuga skrár aftur',
));

// Update database
$lang = array_merge($lang, array(
	'STAGE_UPDATE_DATABASE'		=> 'Uppfæra gagnagrunn',

	'INLINE_UPDATE_SUCCESSFUL'		=> 'Uppfærsla gagnagrunnsins tókst.',

	'TASK_UPDATE_EXTENSIONS'	=> 'Uppfæri viðbætur',
));

// Converter
$lang = array_merge($lang, array(
	// Common converter messages
	'CONVERT_NOT_EXIST'			=> 'Tilgreint umbreytingarforrit er ekki til.',
	'DEV_NO_TEST_FILE'			=> 'Ekkert gildi hefur verið tilgreint fyrir breytuna test_file í umbreytingarforritinu. Ef þú notar forritið ættir þú ekki að sjá þessa villu; tilkynntu höfundi þess um skilaboðin. Ef þú ert höfundur umbreytingarforritsins verður þú að tilgreina heiti skrár sem er til á upprunaspjallborðinu svo hægt sé að staðfesta slóðina að henni.',
	'COULD_NOT_COPY'			=> 'Ekki tókst að afrita skrána <strong>%1$s</strong> í <strong>%2$s</strong><br><br>Gakktu úr skugga um að viðtökumappan sé til og að vefþjónninn geti skrifað í hana.',
	'COULD_NOT_FIND_PATH'		=> 'Ekki tókst að finna slóðina að fyrra spjallborðinu. Athugaðu stillingarnar og reyndu aftur.<br />» %s var tilgreind sem upprunaslóð.',
	'CONFIG_PHPBB_EMPTY'		=> 'The phpBB3 config variable for „%s“ is empty.',

	'MAKE_FOLDER_WRITABLE'		=> 'Gakktu úr skugga um að þessi mappa sé til og að vefþjónninn geti skrifað í hana og reyndu síðan aftur:<br />»<strong>%s</strong>.',
	'MAKE_FOLDERS_WRITABLE'		=> 'Gakktu úr skugga um að þessar möppur séu til og að vefþjónninn geti skrifað í þær og reyndu síðan aftur:<br />»<strong>%s</strong>.',

	'INSTALL_TEST'				=> 'Prufa aftur',

	'NO_TABLES_FOUND'			=> 'Engar töflur fundust.',
	'TABLES_MISSING'			=> 'Þessar töflur fundust ekki<br />» <strong>%s</strong>.',
	'CHECK_TABLE_PREFIX'		=> 'Athugaðu töfluforskeytið og reyndu aftur.',

	// Conversion in progress
	'CATEGORY'					=> 'Flokkur',
	'CONTINUE_CONVERT'			=> 'Halda umbreytingu áfram',
	'CONTINUE_CONVERT_BODY'		=> 'Fyrri umbreytingartilraun fannst. Þú getur nú valið milli þess að hefja nýja umbreytingu og halda fyrri umbreytingu áfram.',
	'CONVERT_NEW_CONVERSION'	=> 'Ný umbreyting',
	'CONTINUE_OLD_CONVERSION'	=> 'Halda fyrri umbreytingu áfram',
	'POST_ID'					=> 'Auðkenni færslu',

	// Start conversion
	'SUB_INTRO'					=> 'Inngangur',
	'CONVERT_INTRO'				=> 'Velkomin í sameinaða umbreytingarramma phpBB',
	'CONVERT_INTRO_BODY'		=> 'Hér getur þú flutt inn gögn úr öðrum uppsettum spjallborðskerfum. Listinn hér fyrir neðan sýnir allar umbreytingareiningar sem eru tiltækar. Ef engin eining fyrir spjallborðshugbúnaðinn sem þú vilt umbreyta úr birtist í listanum skaltu athuga vefsvæðið okkar, þar sem fleiri umbreytingareiningar kunna að vera tiltækar til niðurhals.',
	'AVAILABLE_CONVERTORS'		=> 'Tiltæk umbreytingarforrit',
	'NO_CONVERTORS'				=> 'Engin umbreytingarforrit eru tiltæk.',
	'CONVERT_OPTIONS'			=> 'Valmöguleikar',
	'SOFTWARE'					=> 'Spjallborðshugbúnaður',
	'VERSION'					=> 'Útgáfa',
	'CONVERT'					=> 'Umbreyta',

	// Settings
	'STAGE_SETTINGS'			=> 'Stillingar',
	'TABLE_PREFIX_SAME'			=> 'Töfluforskeytið verður að vera það sama og hugbúnaðurinn sem verið er að umbreyta notar.<br />» Tilgreint töfluforskeyti var %s.',
	'DEFAULT_PREFIX_IS'			=> 'Umbreytingarforritið fann ekki töflur með tilgreinda forskeytinu. Gakktu úr skugga um að þú hafir slegið inn réttar upplýsingar fyrir spjallborðið sem verið er að umbreyta úr. Sjálfgefið töfluforskeyti fyrir %1$s er <strong>%2$s</strong>.',
	'SPECIFY_OPTIONS'			=> 'Tilgreina valkosti umbreytingar',
	'FORUM_PATH'				=> 'Slóð spjallborðs',
	'FORUM_PATH_EXPLAIN'		=> 'Þetta er <strong>afstæð</strong> slóð á diski að eldra spjallborðinu frá <strong>rót þessarar phpBB3-uppsetningar</strong>.',
	'REFRESH_PAGE'				=> 'Endurhlaða síðu til að halda umbreytingu áfram',
	'REFRESH_PAGE_EXPLAIN'		=> 'Ef þetta er stillt á já endurhleður umbreytingarforritið síðuna til að halda umbreytingunni áfram eftir hvert lokið skref. Ef þetta er fyrsta umbreytingin þín, til prófunar og til að finna villur fyrirfram, mælum við með að stilla þetta á Nei.',

	// Conversion
	'STAGE_IN_PROGRESS'			=> 'Umbreyting í gangi',

	'AUTHOR_NOTES'				=> 'Athugasemdir höfundar<br />» %s',
	'STARTING_CONVERT'			=> 'Hef umbreytingarferlið',
	'CONFIG_CONVERT'			=> 'Umbreyti stillingum',
	'DONE'						=> 'Lokð',
	'PREPROCESS_STEP'			=> 'Keyri forvinnsluföll/fyrirspurnir',
	'FILLING_TABLE'				=> 'Fylli töfluna <strong>%s</strong>',
	'FILLING_TABLES'			=> 'Fylli töflur',
	'DB_ERR_INSERT'				=> 'Villa við vinnslu á <code>INSERT</code> gagnagrunsskipun.',
	'DB_ERR_LAST'				=> 'Villa við keyrslu á <var>query_last</var>.',
	'DB_ERR_QUERY_FIRST'		=> 'Villa við keyrslu á <var>query_first</var>.',
	'DB_ERR_QUERY_FIRST_TABLE'	=> 'Villa við keyrslu á <var>query_first</var>, %s („%s“).',
	'DB_ERR_SELECT'				=> 'Villa kom upp við keyrslu <code>SELECT</code>-fyrirspurnar.',
	'STEP_PERCENT_COMPLETED'	=> 'Skref <strong>%d</strong> af <strong>%d</strong>',
	'FINAL_STEP'				=> 'Vinn lokaskrefið',
	'SYNC_FORUMS'				=> 'Hef samstillingu spjallsvæða',
	'SYNC_POST_COUNT'			=> 'Samstilli post_counts',
	'SYNC_POST_COUNT_ID'		=> 'Samstilli post_counts frá <var>entry</var> %1$s til %2$s.',
	'SYNC_TOPICS'				=> 'Hef samstillingu umræðna',
	'SYNC_TOPIC_ID'				=> 'Samstilli umræður frá <var>topic_id</var> %1$s til %2$s.',
	'PROCESS_LAST'					=> 'Vinn úr síðustu skipunum',
	'UPDATE_TOPICS_POSTED'		=> 'Bý til upplýsingar um sendar umræður',
	'UPDATE_TOPICS_POSTED_ERR'	=> 'Villa kom upp við gerð upplýsinga um sendar umræður. Þú getur reynt þetta skref aftur í ACP eftir að umbreytingarferlinu er lokið.',
	'CONTINUE_LAST'				=> 'Halda áfram með síðustu skipanir',
	'CLEAN_VERIFY'				=> 'Hreinsa til og staðfesta endanlega gagnagrunnsgerð',
	'NOT_UNDERSTAND'			=> 'Could not understand %s #%d, table %s („%s“)',
	'NAMING_CONFLICT'			=> 'Nafnaárekstur: %s og %s eru bæði samnefni<br /><br />%s',

	// Finish conversion
	'CONVERT_COMPLETE'			=> 'Umbreytingu lokið',
	'CONVERT_COMPLETE_EXPLAIN'	=> 'Þú hefur nú umbreytt spjallborðinu í phpBB 3.3. Þú getur skráð þig inn og <a href="../">opnað spjallborðið</a>. Gakktu úr skugga um að stillingarnar hafi flust rétt áður en spjallborðið er virkjað með því að eyða install-möppunni. Mundu að hjálp við notkun phpBB er tiltæk á netinu í <a href="https://www.phpbb.com/support/docs/en/3.3/ug/">skjölunum</a> og á <a href="https://www.phpbb.com/community/viewforum.php?f=661">þjónustuspjallsvæðunum</a>.',

	'COLLIDING_CLEAN_USERNAME'			=> '<strong>%s</strong> er hreinsað notandanafn fyrir:',
	'COLLIDING_USER'					=> '» auðkenni notanda: <strong>%d</strong> notandanafn: <strong>%s</strong> (%d færslur)',
	'COLLIDING_USERNAMES_FOUND'			=> 'Notandanöfn sem rekast á fundust á gamla spjallborðinu. Til að ljúka umbreytingunni skaltu eyða eða endurnefna þessa notendur svo aðeins einn notandi á gamla spjallborðinu samsvari hverju hreinsuðu notandanafni.',
	'CONV_ERR_FATAL'					=> 'Alvarleg villa við umbreytingu',
	'CONV_ERROR_ATTACH_FTP_DIR'			=> 'FTP-upphleðsla viðhengja er virk á gamla spjallborðinu. Gerðu FTP-upphleðslu óvirka og gakktu úr skugga um að gild upphleðslumappa sé tilgreind. Afritaðu síðan allar viðhengisskrár í þessa nýju möppu sem er aðgengileg af vefnum. Endurræstu umbreytingarforritið þegar því er lokið.',
	'CONV_ERROR_CONFIG_EMPTY'			=> 'Engar stillingarupplýsingar eru tiltækar fyrir umbreytinguna.',
	'CONV_ERROR_FORUM_ACCESS'			=> 'Ekki tókst að sækja upplýsingar um aðgang að spjallsvæðum.',
	'CONV_ERROR_GET_CATEGORIES'			=> 'Ekki tókst að sækja flokka.',
	'CONV_ERROR_GET_CONFIG'				=> 'Ekki tókst að sækja stillingar spjallborðsins.',
	'CONV_ERROR_COULD_NOT_READ'			=> 'Unable to access/read „%s“.',
	'CONV_ERROR_GROUP_ACCESS'			=> 'Ekki tókst að sækja upplýsingar um auðkenningu hópa.',
	'CONV_ERROR_INCONSISTENT_GROUPS'	=> 'Ósamræmi fannst í hópatöflunni í add_bots(); bæta verður við öllum sérhópum ef það er gert handvirkt.',
	'CONV_ERROR_INSERT_BOT'				=> 'Ekki tókst að bæta vélmenni í users-töfluna.',
	'CONV_ERROR_INSERT_BOTGROUP'		=> 'Ekki tókst að bæta vélmenni í bots-töfluna.',
	'CONV_ERROR_INSERT_USER_GROUP'		=> 'Ekki tókst að bæta notanda í user_group-töfluna.',
	'CONV_ERROR_MESSAGE_PARSER'			=> 'Villa í skilaboðagreini',
	'CONV_ERROR_NO_AVATAR_PATH'			=> 'Athugasemd til forritara: tilgreina verður $convertor[\'avatar_path\'] til að nota %s.',
	'CONV_ERROR_NO_FORUM_PATH'			=> 'Afstæð slóð að upprunaspjallborðinu hefur ekki verið tilgreind.',
	'CONV_ERROR_NO_GALLERY_PATH'		=> 'Athugasemd til forritara: tilgreina verður $convertor[\'avatar_gallery_path\'] til að nota %s.',
	'CONV_ERROR_NO_GROUP'				=> 'Group „%1$s“ could not be found in %2$s.',
	'CONV_ERROR_NO_RANKS_PATH'			=> 'Athugasemd til forritara: tilgreina verður $convertor[\'ranks_path\'] til að nota %s.',
	'CONV_ERROR_NO_SMILIES_PATH'		=> 'Athugasemd til forritara: tilgreina verður $convertor[\'smilies_path\'] til að nota %s.',
	'CONV_ERROR_NO_UPLOAD_DIR'			=> 'Athugasemd til forritara: tilgreina verður $convertor[\'upload_path\'] til að nota %s.',
	'CONV_ERROR_PERM_SETTING'			=> 'Ekki tókst að bæta við eða uppfæra heimildastillingu.',
	'CONV_ERROR_PM_COUNT'				=> 'Ekki tókst að sækja fjölda einkaskilaboða í möppu.',
	'CONV_ERROR_REPLACE_CATEGORY'		=> 'Ekki tókst að bæta við nýju spjallsvæði í stað gamla flokksins.',
	'CONV_ERROR_REPLACE_FORUM'			=> 'Ekki tókst að bæta við nýju spjallsvæði í stað gamla spjallsvæðisins.',
	'CONV_ERROR_USER_ACCESS'			=> 'Ekki tókst að sækja upplýsingar um auðkenningu notenda.',
	'CONV_ERROR_WRONG_GROUP'			=> 'Wrong group „%1$s“ defined in %2$s.',
	'CONV_OPTIONS_BODY'					=> 'Þessi síða safnar gögnunum sem þarf til að opna upprunaspjallborðið. Sláðu inn gagnagrunnsupplýsingar fyrra spjallborðsins; umbreytingarforritið breytir engu í gagnagrunninum sem tilgreindur er hér fyrir neðan. Gera ætti upprunaspjallborðið óvirkt til að tryggja samræmda umbreytingu.',
	'CONV_SAVED_MESSAGES'				=> 'Vistuð skilaboð',

	'PRE_CONVERT_COMPLETE'			=> 'Öllum skrefum fyrir umbreytingu var lokið. Nú getur þú hafið sjálft umbreytingarferlið. Athugaðu að hugsanlega þarftu að framkvæma og laga ýmis atriði handvirkt. Eftir umbreytinguna skaltu sérstaklega athuga úthlutaðar heimildir, endurbyggja leitarvísinn sem er ekki umbreytt og ganga úr skugga um að skrár hafi verið afritaðar rétt, til dæmis smámyndir og broskarlar.',
));
