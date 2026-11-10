<?php
/**
 *
 * VigLink extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2026 phpBB Limited <https://www.phpbb.com>
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
	'VIGLINK' => 'VigLink (Sovrn)',
	'VIGLINK_DESCRIPTION' => 'Notar forskriftir og vafrakökur frá þriðja aðila til að rekja heimsóknir um úttengla til söluaðila vegna úthlutunar samstarfsþóknunar.',
));
