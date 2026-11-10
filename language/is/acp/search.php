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
	'ACP_SEARCH_INDEX_EXPLAIN'				=> 'Hér getur þú stjórnað vísum leitarbakenda. Þar sem venjulega er aðeins einn bakendi notaður ættir þú að eyða öllum vísum sem eru ekki í notkun. Eftir breytingar á leitarstillingum, til dæmis lágmarks- eða hámarksfjölda stafa, kann að vera rétt að endurgera vísinn svo hann endurspegli breytingarnar.',
	'ACP_SEARCH_SETTINGS_EXPLAIN'			=> 'Hér getur þú skilgreint hvaða leitarbakendi er notaður til að skrá færslur í leitarvísi og framkvæma leitir. Ýmsir valkostir geta haft áhrif á vinnsluþörf þessara aðgerða. Sumar stillingarnar eru sameiginlegar öllum leitarbakendum.',

	'COMMON_WORD_THRESHOLD'					=> 'Þröskuldur algengra orða',
	'COMMON_WORD_THRESHOLD_EXPLAIN'			=> 'Orð sem koma fyrir í hærra hlutfalli allra færslna teljast algeng. Algeng orð eru hunsuð í leitarfyrirspurnum. Stilltu á núll til að gera þetta óvirkt. Tekur aðeins gildi þegar færslur eru fleiri en 100. Endurgera þarf vísinn til að orð sem nú teljast algeng verði metin aftur.',
	'CONFIRM_SEARCH_BACKEND'				=> 'Ertu viss um að þú viljir skipta um leitarbakenda? Eftir skiptin þarftu að búa til vísi fyrir nýja bakendann. Ef þú hyggst ekki skipta aftur yfir í þann gamla getur þú einnig eytt gamla vísinum til að losa kerfisauðlindir.',
	'CONTINUE_DELETING_INDEX'				=> 'Halda áfram fyrri eyðingu vísis',
	'CONTINUE_DELETING_INDEX_EXPLAIN'		=> 'Eyðing vísis er hafin. Þú verður að ljúka henni eða hætta við hana áður en þú færð aðgang að síðu leitarvísisins.',
	'CONTINUE_INDEXING'						=> 'Halda áfram fyrri vísun',
	'CONTINUE_INDEXING_EXPLAIN'				=> 'Vísun er hafin. Þú verður að ljúka henni eða hætta við hana áður en þú færð aðgang að síðu leitarvísisins.',
	'CREATE_INDEX'							=> 'Búa til vísi',

	'DEFAULT_SEARCH_RETURN_CHARS'			=> 'Sjálfgefinn fjöldi birtra stafa',
	'DEFAULT_SEARCH_RETURN_CHARS_EXPLAIN'	=> 'Sjálfgefinn fjöldi stafa sem birtist í leitarniðurstöðum. Gildið 0 birtir alla færsluna.',
	'DELETE_INDEX'							=> 'Eyða vísi',
	'DELETING_INDEX_IN_PROGRESS'			=> 'Vísinum er eytt…',
	'DELETING_INDEX_IN_PROGRESS_EXPLAIN'	=> 'Leitarbakendinn er að hreinsa vísi sinn. Þetta getur tekið nokkrar mínútur.',

	'FULLTEXT_MYSQL_INCOMPATIBLE_DATABASE'	=> 'MySQL-heildartextabakendann er aðeins hægt að nota með MySQL 4 og nýrri útgáfum.',
	'FULLTEXT_MYSQL_NOT_SUPPORTED'			=> 'MySQL-heildartextavísa er aðeins hægt að nota með MyISAM- eða InnoDB-töflum. MySQL 5.6.8 eða nýrra þarf fyrir heildartextavísa á InnoDB-töflum.',
	'FULLTEXT_MYSQL_TOTAL_POSTS'			=> 'Heildarfjöldi færslna í vísi',
	'FULLTEXT_MYSQL_MIN_SEARCH_CHARS_EXPLAIN'	=> 'Orð með að minnsta kosti þennan stafafjölda verða skráð í leitarvísinn. Aðeins þú eða hýsingaraðilinn getur breytt þessari stillingu með því að breyta MySQL-stillingunum.',
	'FULLTEXT_MYSQL_MAX_SEARCH_CHARS_EXPLAIN'	=> 'Orð með að hámarki þennan stafafjölda verða skráð í leitarvísinn. Aðeins þú eða hýsingaraðilinn getur breytt þessari stillingu með því að breyta MySQL-stillingunum.',

	'FULLTEXT_POSTGRES_INCOMPATIBLE_DATABASE'	=> 'PostgreSQL-heildartextabakendann er aðeins hægt að nota með PostgreSQL.',
	'FULLTEXT_POSTGRES_TOTAL_POSTS'			=> 'Heildarfjöldi færslna í vísi',
	'FULLTEXT_POSTGRES_VERSION_CHECK'		=> 'PostgreSQL-útgáfa',
	'FULLTEXT_POSTGRES_TS_NAME'				=> 'Stillingarsnið textaleitar:',
	'FULLTEXT_POSTGRES_MIN_WORD_LEN'			=> 'Lágmarkslengd leitarorða',
	'FULLTEXT_POSTGRES_MAX_WORD_LEN'			=> 'Hámarkslengd leitarorða',
	'FULLTEXT_POSTGRES_VERSION_CHECK_EXPLAIN'		=> 'Þessi leitarbakendi krefst PostgreSQL 8.3 eða nýrri útgáfu.',
	'FULLTEXT_POSTGRES_TS_NAME_EXPLAIN'				=> 'Stillingarsnið textaleitar sem ákvarðar þáttara og orðabók.',
	'FULLTEXT_POSTGRES_MIN_WORD_LEN_EXPLAIN'			=> 'Orð með að minnsta kosti þennan stafafjölda verða tekin með í fyrirspurninni til gagnagrunnsins.',
	'FULLTEXT_POSTGRES_MAX_WORD_LEN_EXPLAIN'			=> 'Orð með að hámarki þennan stafafjölda verða tekin með í fyrirspurninni til gagnagrunnsins.',

	'FULLTEXT_SPHINX_CONFIGURE'				=> 'Stilltu eftirfarandi valkosti til að búa til Sphinx-stillingaskrá',
	'FULLTEXT_SPHINX_DATA_PATH'				=> 'Slóð að gagnamöppu',
	'FULLTEXT_SPHINX_DATA_PATH_EXPLAIN'		=> 'Hún verður notuð til að geyma vísa og annálaskrár. Þú ættir að búa möppuna til utan svæða sem eru aðgengileg af vefnum. Slóðin ætti að enda á skástriki.',
	'FULLTEXT_SPHINX_DELTA_POSTS'			=> 'Fjöldi færslna í oft uppfærðum mismunavísi',
	'FULLTEXT_SPHINX_HOST'					=> 'Vél Sphinx-leitarþjóns',
	'FULLTEXT_SPHINX_HOST_EXPLAIN'			=> 'Vélin sem Sphinx-leitarþjónninn (searchd) hlustar á. Skildu eftir autt til að nota sjálfgefnu staðarvélina.',
	'FULLTEXT_SPHINX_INDEXER_MEM_LIMIT'		=> 'Minnismörk vísunartóls',
	'FULLTEXT_SPHINX_INDEXER_MEM_LIMIT_EXPLAIN'	=> 'Þetta gildi ætti alltaf að vera lægra en tiltækt vinnsluminni vélarinnar. Ef afköst versna reglulega kann vísunartólið að nota of mikið af auðlindum. Þá gæti hjálpað að lækka minnið sem því er heimilt að nota.',
	'FULLTEXT_SPHINX_MAIN_POSTS'			=> 'Fjöldi færslna í aðalvísi',
	'FULLTEXT_SPHINX_PORT'					=> 'Gátt Sphinx-leitarþjóns',
	'FULLTEXT_SPHINX_PORT_EXPLAIN'			=> 'Gáttin sem Sphinx-leitarþjónninn (searchd) hlustar á. Skildu eftir autt til að nota sjálfgefna Sphinx API-gátt 9312.',
	'FULLTEXT_SPHINX_WRONG_DATABASE'		=> 'Sphinx-leit phpBB styður aðeins MySQL og PostgreSQL.',
	'FULLTEXT_SPHINX_CONFIG_FILE'			=> 'Sphinx-stillingaskrá',
	'FULLTEXT_SPHINX_CONFIG_FILE_EXPLAIN'	=> 'Myndað innihald Sphinx-stillingaskrárinnar. Líma þarf gögnin í sphinx.conf sem Sphinx-leitarþjónninn notar. Skiptu staðgenglunum [dbuser] og [dbpassword] út fyrir aðgangsupplýsingar gagnagrunnsins.',
	'FULLTEXT_SPHINX_NO_CONFIG_DATA'		=> 'Slóð Sphinx-gagnamöppunnar er ekki skilgreind. Skilgreindu slóðina og sendu eyðublaðið til að búa til stillingaskrána.',

	'GENERAL_SEARCH_SETTINGS'				=> 'Almennar leitarstillingar',
	'GO_TO_SEARCH_INDEX'					=> 'Fara á síðu leitarvísis',

	'INDEX_STATS'							=> 'Tölfræði vísis',
	'INDEXING_IN_PROGRESS'					=> 'Vísun í gangi…',
	'INDEXING_IN_PROGRESS_EXPLAIN'			=> 'Leitarbakendinn er að skrá allar færslur spjallborðsins í leitarvísi. Þetta getur tekið frá nokkrum mínútum upp í nokkrar klukkustundir eftir stærð spjallborðsins.',

	'LIMIT_SEARCH_LOAD'						=> 'Hámarksálag kerfis fyrir leitarsíðu',
	'LIMIT_SEARCH_LOAD_EXPLAIN'				=> 'Ef einnar mínútu kerfisálag fer yfir þetta gildi verður leitarsíðan tekin úr notkun. 1,0 jafngildir um 100% nýtingu eins örgjörva. Þetta virkar aðeins á UNIX-þjónum.',

	'MAX_SEARCH_CHARS'						=> 'Hámarksfjöldi stafa í orðum í leitarvísi',
	'MAX_SEARCH_CHARS_EXPLAIN'				=> 'Orð með að hámarki þennan stafafjölda verða skráð í leitarvísinn.',
	'MAX_NUM_SEARCH_KEYWORDS'				=> 'Hámarksfjöldi leyfðra leitarorða',
	'MAX_NUM_SEARCH_KEYWORDS_EXPLAIN'		=> 'Hámarksfjöldi orða sem notandinn getur leitað að. Gildið 0 leyfir ótakmarkaðan fjölda.',
	'MIN_SEARCH_CHARS'						=> 'Lágmarksfjöldi stafa í orðum í leitarvísi',
	'MIN_SEARCH_CHARS_EXPLAIN'				=> 'Orð með að minnsta kosti þennan stafafjölda verða skráð í leitarvísinn.',
	'MIN_SEARCH_AUTHOR_CHARS'				=> 'Lágmarksfjöldi stafa í höfundarnafni',
	'MIN_SEARCH_AUTHOR_CHARS_EXPLAIN'		=> 'Notendur verða að slá inn að minnsta kosti þennan fjölda stafa úr nafni þegar leitað er að höfundi með algildisstaf. Ef notandanafn höfundar er styttra er samt hægt að leita að færslum hans með því að slá inn allt notandanafnið.',

	'PROGRESS_BAR'							=> 'Framvindustika',

	'SEARCH_GUEST_INTERVAL'					=> 'Biðtími milli leita gesta',
	'SEARCH_GUEST_INTERVAL_EXPLAIN'			=> 'Fjöldi sekúndna sem gestir verða að bíða milli leita. Ef einn gestur leitar verða allir aðrir að bíða þar til tíminn er liðinn.',
	'SEARCH_INDEX_CREATE_REDIRECT'			=> array(
		2	=> 'Allar færslur að færsluauðkenni %2$d hafa nú verið skráðar í leitarvísinn; þar af voru %1$d færslur unnar í þessu skrefi.',
	),
	'SEARCH_INDEX_CREATE_REDIRECT_RATE'		=> array(
		2	=> 'Núverandi vísunarhraði er um %1$.1f færslur á sekúndu.',
	),
	'SEARCH_INDEX_DELETE_REDIRECT'			=> array(
		2	=> 'Allar færslur að færsluauðkenni %2$d hafa verið fjarlægðar úr leitarvísinum; þar af voru %1$d færslur unnar í þessu skrefi.',
	),
	'SEARCH_INDEX_DELETE_REDIRECT_RATE'		=> array(
		2	=> 'Núverandi eyðingarhraði er um %1$.1f færslur á sekúndu.',
	),
	'SEARCH_INDEX_CREATED'					=> 'Allar færslur í gagnagrunni spjallborðsins voru skráðar í leitarvísi.',
	'SEARCH_INDEX_PROGRESS'					=> 'Lokið: %1$d | Í bið: %2$d | Samtals: %3$d',
	'SEARCH_INDEX_REMOVED'					=> 'Leitarvísi þessa bakenda var eytt.',
	'SEARCH_INTERVAL'						=> 'Biðtími milli leita notenda',
	'SEARCH_INTERVAL_EXPLAIN'				=> 'Fjöldi sekúndna sem notendur verða að bíða milli leita. Biðtíminn er athugaður sérstaklega fyrir hvern notanda.',
	'SEARCH_STORE_RESULTS'					=> 'Geymslutími leitarniðurstaðna í skyndiminni',
	'SEARCH_STORE_RESULTS_EXPLAIN'			=> 'Leitarniðurstöður í skyndiminni renna út eftir þennan tíma í sekúndum. Stilltu á 0 til að gera skyndiminni leitar óvirkt.',
	'SEARCH_TYPE'							=> 'Leitarbakendi',
	'SEARCH_TYPE_EXPLAIN'					=> 'phpBB gerir þér kleift að velja bakendann sem leitar í texta færslna. Sjálfgefið er að leitin noti eigin heildartextaleit phpBB.',
	'SWITCHED_SEARCH_BACKEND'				=> 'Þú skiptir um leitarbakenda. Til að nota nýja bakendann skaltu ganga úr skugga um að vísir sé til fyrir hann.',

	'TOTAL_WORDS'							=> 'Heildarfjöldi orða í leitarvísi',
	'TOTAL_MATCHES'							=> 'Heildarfjöldi skráðra tengsla milli orða og færslna',

	'YES_SEARCH'							=> 'Virkja leit',
	'YES_SEARCH_EXPLAIN'					=> 'Virkjar leitaraðgerðir fyrir notendur, þar með talið meðlima leit.',
	'YES_SEARCH_UPDATE'						=> 'Virkja uppfærslu heildartextavísis',
	'YES_SEARCH_UPDATE_EXPLAIN'				=> 'Uppfærir heildartextavísa þegar færslur eru sendar, nema leit sé óvirk.',
));
