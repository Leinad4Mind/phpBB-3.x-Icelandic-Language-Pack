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

// User pruning
$lang = array_merge($lang, array(
	'ACP_PRUNE_USERS_EXPLAIN'	=> 'Í þessum hluta getur þú eytt notendum af spjallborðinu eða gert þá óvirka. Hægt er að sía reikninga á ýmsa vegu, til dæmis eftir fjölda færslna eða síðustu virkni. Sameina má skilyrði til að þrengja hóp reikninga sem aðgerðin nær til. Til dæmis er hægt að grisja notendur með færri en 10 færslur sem hafa jafnframt verið óvirkir frá 2002-01-01. Notaðu * sem algildisstaf í textareitum. Einnig má sleppa skilyrðunum alveg og færa lista yfir notendur í textareitinn, einn í hverja línu. Farðu varlega! Þegar notanda hefur verið eytt er ekki hægt að afturkalla aðgerðina.',

	'CRITERIA'				=> 'Skilyrði',

	'DEACTIVATE_DELETE'			=> 'Gera óvirka eða eyða',
	'DEACTIVATE_DELETE_EXPLAIN'	=> 'Veldu hvort gera eigi notendur óvirka eða eyða þeim alveg. Athugaðu að ekki er hægt að endurheimta notendur sem hefur verið eytt!',
	'DELETE_USERS'				=> 'Eyða',
	'DELETE_USER_POSTS'			=> 'Eyða færslum grisjaðra notenda',
	'DELETE_USER_POSTS_EXPLAIN' => 'Eyðir færslum notenda sem er eytt. Hefur engin áhrif ef notendur eru aðeins gerðir óvirkir.',

	'JOINED_EXPLAIN'			=> 'Sláðu inn dagsetningu á sniðinu <kbd>YYYY-MM-DD</kbd>. Þú getur notað báða reitina til að tilgreina tímabil eða skilið annan eftir auðan til að hafa tímabilið opið í annan endann.',

	'LAST_ACTIVE_EXPLAIN'		=> 'Sláðu inn dagsetningu á sniðinu <kbd>YYYY-MM-DD</kbd>. Sláðu inn <kbd>0000-00-00</kbd> til að grisja notendur sem hafa aldrei skráð sig inn; skilyrðin <em>Fyrir</em> og <em>Eftir</em> verða þá hunsuð.',

	'POSTS_ON_QUEUE'			=> 'Færslur sem bíða samþykkis',
	'PRUNE_USERS_GROUP_EXPLAIN'	=> 'Takmarka við notendur í völdum hópi.',
	'PRUNE_USERS_GROUP_NONE'	=> 'Allir hópar',
	'PRUNE_USERS_LIST'				=> 'Notendur sem á að grisja',
	'PRUNE_USERS_LIST_DELETE'		=> 'Samkvæmt völdum skilyrðum verða eftirfarandi reikningar fjarlægðir. Þú getur tekið einstaka notendur af eyðingarlistanum með því að afmerkja reitinn við notandanafn þeirra.',
	'PRUNE_USERS_LIST_DEACTIVATE'	=> 'Samkvæmt völdum skilyrðum verða eftirfarandi reikningar gerðir óvirkir. Þú getur tekið einstaka notendur af listanum með því að afmerkja reitinn við notandanafn þeirra.',

	'SELECT_USERS_EXPLAIN'		=> 'Sláðu inn tiltekin notandanöfn hér. Þau hafa forgang fram yfir skilyrðin hér að ofan. Ekki er hægt að grisja stofnendur.',

	'USER_DEACTIVATE_SUCCESS'	=> 'Valdir notendur voru gerðir óvirkir.',
	'USER_DELETE_SUCCESS'		=> 'Völdum notendum var eytt.',
	'USER_PRUNE_FAILURE'		=> 'Engir notendur uppfylla valin skilyrði.',

	'WRONG_ACTIVE_JOINED_DATE'	=> 'Dagsetningin er röng. Hún verður að vera á sniðinu <kbd>YYYY-MM-DD</kbd>.',
));

// Forum Pruning
$lang = array_merge($lang, array(
	'ACP_PRUNE_FORUMS_EXPLAIN'	=> 'Þetta eyðir öllum umræðum sem hvorki hefur verið svarað né skoðað innan þess dagafjölda sem þú velur. Ef enginn fjöldi er gefinn upp verður öllum umræðum eytt. Sjálfgefið er að umræðum með virkum skoðanakönnunum, límdum umræðum og tilkynningum sé ekki eytt.',

	'FORUM_PRUNE'		=> 'Grisjun spjallsvæða',

	'NO_PRUNE'			=> 'Engin spjallsvæði voru grisjuð.',

	'SELECTED_FORUM'	=> 'Valið spjallsvæði',
	'SELECTED_FORUMS'	=> 'Valin spjallsvæði',

	'POSTS_PRUNED'					=> 'Færslur grisjaðar',
	'PRUNE_ANNOUNCEMENTS'			=> 'Grisja tilkynningar',
	'PRUNE_FINISHED_POLLS'			=> 'Grisja lokaðar skoðanakannanir',
	'PRUNE_FINISHED_POLLS_EXPLAIN'	=> 'Fjarlægir umræður með skoðanakönnunum sem er lokið.',
	'PRUNE_FORUM_CONFIRM'			=> 'Ertu viss um að þú viljir grisja völdu spjallsvæðin með tilgreindum stillingum? Þegar færslur og umræður hafa verið fjarlægðar er ekki hægt að endurheimta þær.',
	'PRUNE_NOT_POSTED'				=> 'Dagar frá síðustu færslu',
	'PRUNE_NOT_VIEWED'				=> 'Dagar frá síðustu skoðun',
	'PRUNE_OLD_POLLS'				=> 'Grisja gamlar skoðanakannanir',
	'PRUNE_OLD_POLLS_EXPLAIN'		=> 'Fjarlægir umræður með skoðanakönnunum sem ekki hefur verið kosið í í þann dagafjölda sem aldur færslu segir til um.',
	'PRUNE_STICKY'					=> 'Grisja límdar umræður',
	'PRUNE_SUCCESS'					=> 'Grisjun spjallsvæða tókst.',

	'TOPICS_PRUNED'		=> 'Umræður grisjaðar',
));
