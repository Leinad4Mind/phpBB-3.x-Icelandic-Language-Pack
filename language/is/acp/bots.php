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

// Bot settings
$lang = array_merge($lang, array(
	'BOTS'				=> 'Stjórna vélmennum',
	'BOTS_EXPLAIN'		=> '„Vélmenni“, „köngulær“ eða „vefskriðlar“ eru sjálfvirkir þjónar sem leitarvélar nota oftast til að uppfæra gagnagrunna sína. Þar sem þeir nota sjaldan setur á réttan hátt geta þeir skekkt gestafjölda, aukið álag og stundum ekki skráð vefi rétt. Hér geturðu skilgreint sérstaka notandategund til að vinna gegn þessum vandamálum.',
	'BOT_ACTIVATE'		=> 'Virkja',
	'BOT_ACTIVE'		=> 'Vélmenni virkt',
	'BOT_ADD'			=> 'Bæta við vélmenni',
	'BOT_ADDED'			=> 'Nýju vélmenni var bætt við.',
	'BOT_AGENT'			=> 'Samsvörun kennistrengs',
	'BOT_AGENT_EXPLAIN'	=> 'Strengur sem samsvarar kennistreng vafra vélmennisins. Hlutasamsvörun er leyfð.',
	'BOT_DEACTIVATE'	=> 'Gera óvirkt',
	'BOT_DELETED'		=> 'Vélmenninu var eytt.',
	'BOT_EDIT'			=> 'Breyta vélmennum',
	'BOT_EDIT_EXPLAIN'	=> 'Hér geturðu bætt við vélmenni eða breytt fyrirliggjandi færslu. Þú getur skilgreint kennistreng og/eða eitt eða fleiri IP-tölur eða vistfangabil sem eiga að samsvara. Farðu varlega þegar samsvarandi kennistrengir eða vistföng eru skilgreind. Þú getur einnig valið stíl og tungumál sem vélmennið notar við skoðun spjallborðsins. Einfaldur stíll fyrir vélmenni getur dregið úr bandbreiddarnotkun. Mundu að veita sérstaka notendahópnum Vélmenni viðeigandi heimildir.',
	'BOT_GROUP'			=> 'Hópur vélmennis',
	'BOT_GROUP_EXPLAIN'	=> 'Veldu hópinn sem vélmennið tilheyrir.',
	'BOT_LANG'			=> 'Tungumál vélmennis',
	'BOT_LANG_EXPLAIN'	=> 'Tungumálið sem vélmenninu er birt við skoðun.',
	'BOT_LAST_VISIT'	=> 'Síðasta heimsókn',
	'BOT_IP'			=> 'IP-tala vélmennis',
	'BOT_IP_EXPLAIN'	=> 'Hlutasamsvörun er leyfð. Aðskildu vistföng með kommu.',
	'BOT_NAME'			=> 'Heiti vélmennis',
	'BOT_NAME_EXPLAIN'	=> 'Aðeins notað þér til upplýsingar.',
	'BOT_NAME_TAKEN'	=> 'Heitið er þegar í notkun á spjallborðinu og ekki er hægt að nota það fyrir vélmennið.',
	'BOT_NEVER'			=> 'Aldrei',
	'BOT_STYLE'			=> 'Stíll vélmennis',
	'BOT_STYLE_EXPLAIN'	=> 'Stíllinn sem vélmennið notar á spjallborðinu.',
	'BOT_UPDATED'		=> 'Fyrirliggjandi vélmenni var uppfært.',

	'ERR_BOT_AGENT_MATCHES_UA'	=> 'Kennistrengur vélmennisins sem þú gafst upp líkist þeim sem þú notar núna. Breyttu kennistreng þessa vélmennis.',
	'ERR_BOT_NO_IP'				=> 'IP-tölurnar sem þú gafst upp voru ógildar eða ekki tókst að fletta upp vélarheitinu.',
	'ERR_BOT_NO_MATCHES'		=> 'Þú verður að gefa upp að minnsta kosti kennistreng eða IP-tölu til samsvörunar fyrir þetta vélmenni.',
	'ERR_BOT_NO_NAME'			=> 'Þú verður að gefa upp heiti vélmennis.',

	'NO_BOT'		=> 'Ekkert vélmenni fannst með tilgreindu auðkenni.',
	'NO_BOT_GROUP'	=> 'Ekki tókst að finna sérstaka vélmennahópinn.',
));
