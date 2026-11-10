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
	'ALL_AVAILABLE'			=> 'Öllum',
	'ALL_RESULTS'			=> 'Allar niðurstöður',

	'DISPLAY_RESULTS'		=> 'Sýna niðurstöður sem',

	'FOUND_SEARCH_MATCHES'		=> array(
		1	=> 'Search found %d match',
		2	=> 'Search found %d matches',
	),
	'FOUND_MORE_SEARCH_MATCHES'		=> array(
		1	=> 'Search found more than %d match',
		2	=> 'Search found more than %d matches',
	),

	'GLOBAL'				=> 'Almenn tilkynning',

	'IGNORED_TERMS'			=> 'hunsað',
	'IGNORED_TERMS_EXPLAIN'	=> 'Eftirfarandi orð í leitinni voru ekki talin með því þau eru of algeng: <strong>%s</strong>.',

	'JUMP_TO_POST'			=> 'Fara í póst',

	'LOGIN_EXPLAIN_EGOSEARCH'	=> 'Spjallborðið vill hafa þig skráðan inn svo þú getir fundið þína eigin pósta.',
	'LOGIN_EXPLAIN_UNREADSEARCH'=> 'The board requires you to be registered and logged in to view your unread posts.',
	'LOGIN_EXPLAIN_NEWPOSTS'	=> 'The board requires you to be registered and logged in to view new posts since your last visit.',

	'MAX_NUM_SEARCH_KEYWORDS_REFINE'	=> array(
		1	=> 'You specified too many words to search for. Please do not enter more than %1$d word.',
		2	=> 'You specified too many words to search for. Please do not enter more than %1$d words.',
	),

	'NO_KEYWORDS'			=> 'You must specify at least one word to search for. Each word must consist of at least %s and must not contain more than %s excluding wildcards.',
	'NO_RECENT_SEARCHES'	=> 'Engin leit hefur verið keyrð nýlega.',
	'NO_SEARCH'				=> 'Þú hefur ekki réttindi til að nota leitina.',
	'NO_SEARCH_RESULTS'		=> 'Engar niðurstöður fundust.',
	'NO_SEARCH_LOAD'		=> 'Sorry but you cannot use search at this time. The server has high load. Please try again later.',
	'NO_SEARCH_TIME'		=> array(
		1	=> 'Sorry but you cannot use search at this time. Please try again in %d second.',
		2	=> 'Sorry but you cannot use search at this time. Please try again in %d seconds.',
	),
	'NO_SEARCH_UNREADS'		=> 'Sorry but searching for unread posts has been disabled on this board.',
	'WORD_IN_NO_POST'		=> 'Engir póstar fundust því orðið <strong>%s</strong> er ekki notað neinstaðar.',
	'WORDS_IN_NO_POST'		=> 'Engir póstar fundust því orðin <strong>%s</strong> eru ekki notuð neinstaðar.',

	'POST_CHARACTERS'		=> 'bókstöfum í póstum',
	'PHRASE_SEARCH_DISABLED'	=> 'Searching by exact phrase is not supported on this board.',

	'RECENT_SEARCHES'		=> 'Nýlegar leitir',
	'RESULT_DAYS'			=> 'Takmarka niðurstöður við síðustu',
	'RESULT_SORT'			=> 'Flokka niðurstöður eftir',
	'RETURN_FIRST'			=> 'Skila fyrstu',
	'RETURN_FIRST_EXPLAIN'	=> 'Set to 0 to display the entire post.',
	'GO_TO_SEARCH_ADV'	=> 'Go to advanced search',

	'SEARCHED_FOR'				=> 'Leitarorð notað',
	'SEARCHED_TOPIC'			=> 'Umræða',
	'SEARCHED_QUERY'			=> 'Searched query',
	'SEARCH_ALL_TERMS'			=> 'Leita að öllum orðum eða nákvæmlega eins og er skrifað',
	'SEARCH_ANY_TERMS'			=> 'Leita að öllum orðunum',
	'SEARCH_AUTHOR'				=> 'Leita að höfundi',
	'SEARCH_AUTHOR_EXPLAIN'		=> 'Notaðu * sem algildisstaf.',
	'SEARCH_FIRST_POST'			=> 'Eingöngu í fyrsta pósti í umræðum',
	'SEARCH_FORUMS'				=> 'Leita í svæðum',
	'SEARCH_FORUMS_EXPLAIN'		=> 'Veldu svæði sem þú vilt leita í.',
	'SEARCH_IN_RESULTS'			=> 'Leita í þessum niðurstöðum',
	'SEARCH_KEYWORDS_EXPLAIN'	=> 'Settu <strong>+</strong> fyrir framan orð sem verða að finnast og <strong>-</strong> fyrir framan orð sem mega ekki finnast. Settu lista af orðum með því að aðskilja þau með <strong>|</strong> inní [ og ] ef aðeins eitt orðið verður að finnast. Notaðu * sem algildisstaf.',
	'SEARCH_MSG_ONLY'			=> 'Eingöngu í texta póstsins',
	'SEARCH_OPTIONS'			=> 'Leitarstillingar',
	'SEARCH_QUERY'				=> 'Leitarstrengur',
	'SEARCH_SUBFORUMS'			=> 'Leita í undirflokkum',
	'SEARCH_TITLE_MSG'			=> 'Titlum og textum í póstum',
	'SEARCH_TITLE_ONLY'			=> 'Eingöngu í titlum',
	'SEARCH_WITHIN'				=> 'Leita i',
	'SORT_ASCENDING'			=> 'Upp',
	'SORT_AUTHOR'				=> 'Höfundi',
	'SORT_DESCENDING'			=> 'Niður',
	'SORT_FORUM'				=> 'Spjallsvæði',
	'SORT_POST_SUBJECT'			=> 'Titli pósts',
	'SORT_TIME'					=> 'Tíma',
	'SPHINX_SEARCH_FAILED'		=> 'Search failed: %s',
	'SPHINX_SEARCH_FAILED_LOG'	=> 'Sorry, search could not be performed. More information about this failure has been logged in the error log.',

	'TOO_FEW_AUTHOR_CHARS'	=> array(
		1	=> 'You must specify at least %d character of the authors name.',
		2	=> 'You must specify at least %d characters of the authors name.',
	),
));
