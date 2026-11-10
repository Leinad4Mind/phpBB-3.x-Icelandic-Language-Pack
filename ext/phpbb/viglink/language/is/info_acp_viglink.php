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
	'LOG_VIGLINK_CHECK_FAIL' => '<strong>Ekki var hægt að staðfesta VigLink-stillingar hjá phpBB.com</strong><br>» %s',
));
