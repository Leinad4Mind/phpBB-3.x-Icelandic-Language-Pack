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
	'CLI_APCU_CACHE_NOTICE'				=> 'Hreinsa verður APCu-skyndiminnið í stjórnborðinu.',

	'CLI_CONFIG_CANNOT_CACHED'			=> 'Veldu þetta ef stillingin breytist of oft til að skyndivistun sé skilvirk.',
	'CLI_CONFIG_CURRENT'				=> 'Núverandi stillingargildi; notaðu 0 og 1 fyrir rökgildi',
	'CLI_CONFIG_DELETE_SUCCESS'			=> 'Stillingunni %s var eytt.',
	'CLI_CONFIG_NEW'					=> 'Nýtt stillingargildi; notaðu 0 og 1 fyrir rökgildi',
	'CLI_CONFIG_NOT_EXISTS'				=> 'Stillingin %s er ekki til',
	'CLI_CONFIG_OPTION_NAME'			=> 'Heiti stillingarinnar',
	'CLI_CONFIG_PRINT_WITHOUT_NEWLINE'	=> 'Veldu þetta ef prenta á gildið án nýrrar línu í lokin.',
	'CLI_CONFIG_INCREMENT_BY'			=> 'Hækkunargildi',
	'CLI_CONFIG_INCREMENT_SUCCESS'		=> 'Stillingin %s var hækkuð',
	'CLI_CONFIG_SET_FAILURE'			=> 'Ekki tókst að stilla %s',
	'CLI_CONFIG_SET_SUCCESS'			=> 'Stillingin %s var vistuð',

	'CLI_DESCRIPTION_CRON_LIST'					=> 'Prentar lista yfir tilbúin og ótilbúin cron-verkefni.',
	'CLI_DESCRIPTION_CRON_RUN'					=> 'Keyrir öll tilbúin cron-verkefni.',
	'CLI_DESCRIPTION_CRON_RUN_ARGUMENT_1'		=> 'Heiti verkefnisins sem á að keyra',
	'CLI_DESCRIPTION_DB_LIST'					=> 'Sýnir allar uppsettar og tiltækar gagnagrunnsfærslur.',
	'CLI_DESCRIPTION_DB_MIGRATE'				=> 'Uppfærir gagnagrunninn með því að beita gagnagrunnsfærslum.',
	'CLI_DESCRIPTION_DB_REVERT'					=> 'Afturkallar gagnagrunnsfærslu.',
	'CLI_DESCRIPTION_DELETE_CONFIG'				=> 'Eyðir stillingu',
	'CLI_DESCRIPTION_DISABLE_EXTENSION'			=> 'Gerir tilgreinda viðbót óvirka.',
	'CLI_DESCRIPTION_ENABLE_EXTENSION'			=> 'Virkjar tilgreinda viðbót.',
	'CLI_DESCRIPTION_FIND_MIGRATIONS'			=> 'Finnur gagnagrunnsfærslur sem engar aðrar færslur reiða sig á.',
	'CLI_DESCRIPTION_FIX_LEFT_RIGHT_IDS'		=> 'Lagfærir trjáuppbyggingu spjallsvæða og eininga.',
	'CLI_DESCRIPTION_GET_CONFIG'				=> 'Sækir gildi stillingar',
	'CLI_DESCRIPTION_INCREMENT_CONFIG'			=> 'Hækkar heiltölugildi stillingar',
	'CLI_DESCRIPTION_LIST_EXTENSIONS'			=> 'Sýnir allar viðbætur í gagnagrunninum og skráakerfinu.',

	'CLI_DESCRIPTION_OPTION_ENV'				=> 'Heiti umhverfisins.',
	'CLI_DESCRIPTION_OPTION_SAFE_MODE'			=> 'Keyra í öruggri stillingu, án viðbóta.',
	'CLI_DESCRIPTION_OPTION_SHELL'				=> 'Ræsa skelina.',

	'CLI_DESCRIPTION_PURGE_EXTENSION'			=> 'Hreinsar gögn tilgreindrar viðbótar.',

	'CLI_DESCRIPTION_REPARSER_LIST'						=> 'Sýnir tegundir texta sem hægt er að endurtúlka.',
	'CLI_DESCRIPTION_REPARSER_AVAILABLE'				=> 'Tiltækir endurtúlkar:',
	'CLI_DESCRIPTION_REPARSER_REPARSE'					=> 'Endurtúlkar vistaðan texta með núverandi text_formatter-þjónustum.',
	'CLI_DESCRIPTION_REPARSER_REPARSE_ARG_1'			=> 'Tegund texta sem á að endurtúlka. Skildu eftir autt til að endurtúlka allt.',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_DRY_RUN'		=> 'Ekki vista breytingar; prenta aðeins hvað myndi gerast',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_FORCE_BBCODE'	=> 'Endurtúlka allt BBCode án undantekninga. BBCode sem áður var óvirkt verður unnið aftur, virkjað og birt að fullu.',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_RANGE_MIN'	=> 'Lægsta færsluauðkenni sem á að vinna',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_RANGE_MAX'	=> 'Hæsta færsluauðkenni sem á að vinna',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_RANGE_SIZE'	=> 'Áætlaður fjöldi færslna sem unnar eru í einu',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_RESUME'		=> 'Hefja endurtúlkun þar sem síðustu keyrslu lauk',

	'CLI_DESCRIPTION_SET_ATOMIC_CONFIG'					=> 'Stillir gildi aðeins ef gamla gildið samsvarar núverandi gildi',
	'CLI_DESCRIPTION_SET_CONFIG'						=> 'Stillir gildi stillingar',

	'CLI_DESCRIPTION_THUMBNAIL_DELETE'					=> 'Eyðir öllum núverandi smámyndum.',
	'CLI_DESCRIPTION_THUMBNAIL_GENERATE'				=> 'Býr til allar smámyndir sem vantar.',
	'CLI_DESCRIPTION_THUMBNAIL_RECREATE'				=> 'Endurgerir allar smámyndir.',

	'CLI_DESCRIPTION_UPDATE_CHECK'					=> 'Athugar hvort spjallborðið sé uppfært.',
	'CLI_DESCRIPTION_UPDATE_CHECK_ARGUMENT_1'		=> 'Heiti viðbótarinnar sem á að athuga („all“ athugar allar viðbætur)',
	'CLI_DESCRIPTION_UPDATE_CHECK_OPTION_CACHE'		=> 'Keyra athugunina með skyndiminni.',
	'CLI_DESCRIPTION_UPDATE_CHECK_OPTION_STABILITY'	=> 'Keyra skipunina þannig að aðeins stöðugar eða óstöðugar útgáfur séu athugaðar.',

	'CLI_DESCRIPTION_UPDATE_HASH_BCRYPT'		=> 'Uppfærir úrelt tætigildi lykilorða í bcrypt.',

	'CLI_ERROR_INVALID_STABILITY' => '„%s“ verður að vera „stable“ eða „unstable“.',

	'CLI_DESCRIPTION_USER_ACTIVATE'				=> 'Virkjar eða gerir notandareikning óvirkan.',
	'CLI_DESCRIPTION_USER_ACTIVATE_USERNAME'	=> 'Notandanafn reikningsins sem á að virkja.',
	'CLI_DESCRIPTION_USER_ACTIVATE_DEACTIVATE'	=> 'Gera reikning notandans óvirkan',
	'CLI_DESCRIPTION_USER_ACTIVATE_ACTIVE'		=> 'Notandinn er þegar virkur.',
	'CLI_DESCRIPTION_USER_ACTIVATE_INACTIVE'	=> 'Notandinn er þegar óvirkur.',
	'CLI_DESCRIPTION_USER_ADD'					=> 'Bætir við nýjum notanda.',
	'CLI_DESCRIPTION_USER_ADD_OPTION_USERNAME'	=> 'Notandanafn nýja notandans',
	'CLI_DESCRIPTION_USER_ADD_OPTION_PASSWORD'	=> 'Lykilorð nýja notandans',
	'CLI_DESCRIPTION_USER_ADD_OPTION_EMAIL'		=> 'Netfang nýja notandans',
	'CLI_DESCRIPTION_USER_ADD_OPTION_NOTIFY'	=> 'Senda nýja notandanum virkjunartölvupóst, sem er ekki sjálfgefið sent',
	'CLI_DESCRIPTION_USER_DELETE'				=> 'Eyðir notandareikningi.',
	'CLI_DESCRIPTION_USER_DELETE_USERNAME'		=> 'Notandanafn notandans sem á að eyða',
	'CLI_DESCRIPTION_USER_DELETE_ID'			=> 'Eyðir notandareikningum eftir auðkenni.',
	'CLI_DESCRIPTION_USER_DELETE_ID_OPTION_ID'	=> 'Auðkenni notendanna sem á að eyða',
	'CLI_DESCRIPTION_USER_DELETE_OPTION_POSTS'	=> 'Eyðir öllum færslum notandans. Án þessa valkosts haldast færslurnar.',
	'CLI_DESCRIPTION_USER_RECLEAN'				=> 'Hreinsar notandanöfn aftur.',

	'CLI_EXTENSION_DISABLE_FAILURE'		=> 'Ekki tókst að gera viðbótina %s óvirka',
	'CLI_EXTENSION_DISABLE_SUCCESS'		=> 'Viðbótin %s var gerð óvirk',
	'CLI_EXTENSION_DISABLED'			=> 'Viðbótin %s er ekki virk',
	'CLI_EXTENSION_ENABLE_FAILURE'		=> 'Ekki tókst að virkja viðbótina %s',
	'CLI_EXTENSION_ENABLE_SUCCESS'		=> 'Viðbótin %s var virkjuð',
	'CLI_EXTENSION_ENABLED'				=> 'Viðbótin %s er þegar virk',
	'CLI_EXTENSION_NOT_EXIST'			=> 'Viðbótin %s er ekki til',
	'CLI_EXTENSION_NAME'				=> 'Heiti viðbótarinnar',
	'CLI_EXTENSION_PURGE_FAILURE'		=> 'Ekki tókst að hreinsa gögn viðbótarinnar %s',
	'CLI_EXTENSION_PURGE_SUCCESS'		=> 'Gögn viðbótarinnar %s voru hreinsuð',
	'CLI_EXTENSION_UPDATE_FAILURE'		=> 'Ekki tókst að uppfæra viðbótina %s',
	'CLI_EXTENSION_UPDATE_SUCCESS'		=> 'Viðbótin %s var uppfærð',
	'CLI_EXTENSION_NOT_FOUND'			=> 'Engar viðbætur fundust.',
	'CLI_EXTENSION_NOT_ENABLEABLE'		=> 'Ekki er hægt að virkja viðbótina %s.',
	'CLI_EXTENSIONS_AVAILABLE'			=> 'Tiltækar',
	'CLI_EXTENSIONS_DISABLED'			=> 'Óvirkt',
	'CLI_EXTENSIONS_ENABLED'			=> 'Virkt',

	'CLI_FIXUP_FIX_LEFT_RIGHT_IDS_SUCCESS'		=> 'Trjáuppbygging spjallsvæða og eininga var lagfærð.',
	'CLI_FIXUP_UPDATE_HASH_BCRYPT_SUCCESS'		=> 'Úrelt tætigildi lykilorða voru uppfærð í bcrypt.',

	'CLI_MIGRATION_NAME'					=> 'Heiti gagnagrunnsfærslu, ásamt nafnrými; notaðu skástrik í stað öfugra skástrika til að forðast vandamál.',
	'CLI_MIGRATIONS_AVAILABLE'				=> 'Tiltækar gagnagrunnsfærslur',
	'CLI_MIGRATIONS_INSTALLED'				=> 'Uppsettar gagnagrunnsfærslur',
	'CLI_MIGRATIONS_ONLY_AVAILABLE'		    => 'Sýna aðeins tiltækar gagnagrunnsfærslur',
	'CLI_MIGRATIONS_EMPTY'                  => 'Engar gagnagrunnsfærslur.',

	'CLI_REPARSER_REPARSE_REPARSING'		=> 'Endurtúlka %1$s (bil %2$d..%3$d)',
	'CLI_REPARSER_REPARSE_REPARSING_START'	=> 'Endurtúlka %s…',
	'CLI_REPARSER_REPARSE_SUCCESS'			=> 'Endurtúlkun lauk',

	// In all the case %1$s is the logical name of the file and %2$s the real name on the filesystem
	// eg: big_image.png (2_a51529ae7932008cf8454a95af84cacd) generated.
	'CLI_THUMBNAIL_DELETED'		=> '%1$s (%2$s) eytt.',
	'CLI_THUMBNAIL_DELETING'	=> 'Eyði smámyndum',
	'CLI_THUMBNAIL_SKIPPED'		=> '%1$s (%2$s) sleppt.',
	'CLI_THUMBNAIL_GENERATED'	=> '%1$s (%2$s) búin til.',
	'CLI_THUMBNAIL_GENERATING'	=> 'Bý til smámyndir',
	'CLI_THUMBNAIL_GENERATING_DONE'	=> 'Allar smámyndir hafa verið endurgerðar.',
	'CLI_THUMBNAIL_DELETING_DONE'	=> 'Öllum smámyndum hefur verið eytt.',

	'CLI_THUMBNAIL_NOTHING_TO_GENERATE'	=> 'Engar smámyndir þarf að búa til.',
	'CLI_THUMBNAIL_NOTHING_TO_DELETE'	=> 'Engum smámyndum þarf að eyða.',

	'CLI_USER_ADD_SUCCESS'			=> 'Notandanum %s var bætt við.',
	'CLI_USER_DELETE_CONFIRM'		=> 'Ertu viss um að þú viljir eyða „%s“? [y/N]',
	'CLI_USER_DELETE_ID_CONFIRM'	=> 'Ertu viss um að þú viljir eyða notendum með auðkennin „%s“? [y/N]',
	'CLI_USER_DELETE_ID_SUCCESS'	=> 'Notendum með tilgreind auðkenni var eytt.',
	'CLI_USER_DELETE_ID_START'		=> 'Eyði notendum eftir auðkenni',
	'CLI_USER_DELETE_NONE'			=> 'Engum notendum var eytt eftir auðkenni.',
	'CLI_USER_RECLEAN_START'		=> 'Hreinsa notandanöfn aftur',
	'CLI_USER_RECLEAN_DONE'			=> array(
		0	=> 'Hreinsun lokið. Engin notandanöfn þurfti að hreinsa.',
		1	=> 'Hreinsun lokið. %d notandanafn var hreinsað.',
		2	=> 'Hreinsun lokið. %d notandanöfn voru hreinsuð.',
	),
));

// Additional help for commands.
$lang = array_merge($lang, array(
	'CLI_HELP_CRON_RUN'			=> 'Keyrir öll tilbúin cron-verkefni. Einnig má tilgreina heiti cron-verkefnis til að keyra aðeins það verkefni.',
	'CLI_HELP_USER_ACTIVATE'	=> 'Virkjar notandareikning eða gerir hann óvirkan með valkostinum <info>--deactivate</info>.
Til að senda notandanum virkjunartölvupóst má nota valkostinn <info>--send-email</info>.',
	'CLI_HELP_USER_ADD'			=> 'Skipunin <info>%command.name%</info> bætir við nýjum notanda:
Ef hún er keyrð án valkosta verður beðið um þá.
Til að senda nýja notandanum tölvupóst má nota valkostinn <info>--send-email</info>.',
	'CLI_HELP_USER_RECLEAN'		=> 'Endurhreinsun notandanafna yfirfer öll vistuð notandanöfn og tryggir að hreinar útgáfur þeirra séu einnig vistaðar. Hreinsuð notandanöfn eru óháð há- og lágstöfum, samræmd samkvæmt NFC og umbreytt í ASCII.',
));
