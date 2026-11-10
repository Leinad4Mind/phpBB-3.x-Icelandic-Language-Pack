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
	'CAPTCHA_QA'				=> 'Spurningar og svör',
	'CONFIRM_QUESTION_EXPLAIN'	=> 'Þessi spurning kemur í veg fyrir sjálfvirkar innsendingar ruslvélmenna.',
	'CONFIRM_QUESTION_WRONG'	=> 'Þú gafst ógilt svar við spurningunni.',
	'CONFIRM_QUESTION_MISSING'	=> 'Ekki tókst að sækja staðfestingarspurningar. Hafðu samband við stjórnanda spjallborðsins.',

	'QUESTION_ANSWERS'			=> 'Svör',
	'ANSWERS_EXPLAIN'			=> 'Sláðu inn gild svör við spurningunni, eitt í hverja línu.',
	'CONFIRM_QUESTION'			=> 'Spurning',

	'ANSWER'					=> 'Svar',
	'EDIT_QUESTION'				=> 'Breyta spurningu',
	'QUESTIONS'					=> 'Spurningar',
	'QUESTIONS_EXPLAIN'			=> 'Við hverja innsendingu eyðublaðs þar sem viðbótin Spurningar og svör er virk verður notandinn spurður einnar af spurningunum sem tilgreindar eru hér. Til að nota viðbótina þarf að stilla að minnsta kosti eina spurningu á sjálfgefna tungumálinu. Spurningarnar eiga að vera auðveldar fyrir markhópinn en of erfiðar fyrir vélmenni sem getur keyrt Google™ leit. Ein góð spurning nægir. Ef ruslskráningar byrja að berast ætti að breyta spurningunni. Virkjaðu stranga athugun ef svarið er háð há- og lágstöfum, greinarmerkjum eða bilum.',
	'QUESTION_DELETED'			=> 'Spurningu eytt',
	'QUESTION_LANG'				=> 'Tungumál',
	'QUESTION_LANG_EXPLAIN'		=> 'Tungumálið sem spurningin og svör hennar eru skrifuð á.',
	'QUESTION_STRICT'			=> 'Ströng athugun',
	'QUESTION_STRICT_EXPLAIN'	=> 'Virkjaðu til að gera greinarmun á há- og lágstöfum, greinarmerkjum og bilum.',

	'QUESTION_TEXT'				=> 'Spurning',
	'QUESTION_TEXT_EXPLAIN'		=> 'Spurningin sem notandinn sér.',

	'QA_ERROR_MSG'				=> 'Fylltu út alla reiti og sláðu inn að minnsta kosti eitt svar.',
	'QA_LAST_QUESTION'			=> 'Ekki er hægt að eyða öllum spurningum meðan viðbótin er virk.',
));
