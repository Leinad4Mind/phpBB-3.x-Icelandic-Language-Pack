<?php
/**
 *
 * VigLink extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2014 phpBB Limited <https://www.phpbb.com>
 * @license GNU General Public License, version 2 (GPL-2.0)
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

$lang = array_merge($lang, array(
	'ACP_VIGLINK_SETTINGS' => 'VigLink-stillingar',
	'ACP_VIGLINK_SETTINGS_EXPLAIN' => 'VigLink er þjónusta þriðja aðila sem aflar tekna af tenglum sem notendur birta á spjallborðinu án þess að breyta upplifun notenda. Þegar notendur smella á úttengla að vörum eða þjónustu og kaupa eitthvað greiða söluaðilar VigLink þóknun, en hluti hennar er gefinn phpBB-verkefninu. Með því að virkja VigLink og gefa ágóðann til phpBB-verkefnisins styður þú opna hugbúnaðarstarfsemi okkar og áframhaldandi fjárhagslegt öryggi.',
	'ACP_VIGLINK_SETTINGS_CHANGE' => 'Þú getur breytt þessum stillingum hvenær sem er á stjórnborðinu „<a href="%1$s">VigLink-stillingar</a>“.',
	'ACP_VIGLINK_SUPPORT_EXPLAIN' => 'Þér verður ekki lengur vísað á þessa síðu þegar þú hefur sent inn valdar stillingar með því að smella á hnappinn Senda.',
	'ACP_VIGLINK_ENABLE' => 'Virkja VigLink',
	'ACP_VIGLINK_ENABLE_EXPLAIN' => 'Virkjar notkun VigLink-þjónustu.',
	'ACP_VIGLINK_EARNINGS' => 'Taka við eigin tekjum (valfrjálst)',
	'ACP_VIGLINK_EARNINGS_EXPLAIN' => 'Þú getur tekið við eigin tekjum með því að stofna VigLink Convert-reikning.',
	'ACP_VIGLINK_DISABLED_PHPBB' => 'VigLink-þjónusta hefur verið gerð óvirk af phpBB.',
	'ACP_VIGLINK_CLAIM' => 'Taka við tekjunum þínum',
	'ACP_VIGLINK_CLAIM_EXPLAIN' => 'Þú getur tekið við tekjum spjallborðsins af tenglum sem VigLink aflar tekna af í stað þess að gefa ágóðann til phpBB-verkefnisins. Til að stjórna reikningsstillingum skaltu stofna „VigLink Convert“-reikning með því að smella á „Convert-reikningur“.',
	'ACP_VIGLINK_CONVERT_ACCOUNT' => 'Convert-reikningur',
	'ACP_VIGLINK_NO_CONVERT_LINK' => 'Ekki tókst að sækja tengil fyrir VigLink Convert-reikning.',
));
