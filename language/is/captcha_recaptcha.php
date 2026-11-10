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
	$lang = [];
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

$lang = array_merge($lang, [
	// Find the language/country code on https://developers.google.com/recaptcha/docs/language
	// If no code exists for your language you can use "en" or leave the string empty
	'RECAPTCHA_LANG'				=> 'is',

	'CAPTCHA_RECAPTCHA'				=> 'reCaptcha v2',
	'CAPTCHA_RECAPTCHA_V3'			=> 'reCaptcha v3',

	'RECAPTCHA_INCORRECT'				=> 'Lausnin sem þú gafst upp var röng',
	'RECAPTCHA_NOSCRIPT'				=> 'Virkjaðu JavaScript í vafranum til að hlaða inn prófuninni.',
	'RECAPTCHA_NOT_AVAILABLE'			=> 'Til að nota reCaptcha þarftu að stofna reikning á <a href="https://www.google.com/recaptcha">www.google.com/recaptcha</a>.',
	'RECAPTCHA_INVISIBLE'				=> 'Þessi CAPTCHA-prófun er ósýnileg. Lítið tákn ætti að birtast neðst í hægra horni síðunnar til staðfestingar á að hún virki.',
	'RECAPTCHA_V3_LOGIN_ERROR_ATTEMPTS'	=> 'Þú hefur farið yfir leyfilegan hámarksfjölda innskráningartilrauna.<br>Auk notandanafns og lykilorðs verður ósýnileg reCAPTCHA v3-prófun notuð til að sannvotta setuna þína.',

	'RECAPTCHA_PUBLIC'				=> 'Veflykill',
	'RECAPTCHA_PUBLIC_EXPLAIN'		=> 'reCAPTCHA-veflykill síðunnar. Hægt er að fá lykla á <a href="https://www.google.com/recaptcha">www.google.com/recaptcha</a>. Notaðu reCAPTCHA v2 &gt; Invisible reCAPTCHA badge.',
	'RECAPTCHA_V3_PUBLIC_EXPLAIN'	=> 'reCAPTCHA-veflykill síðunnar. Hægt er að fá lykla á <a href="https://www.google.com/recaptcha">www.google.com/recaptcha</a>. Notaðu reCAPTCHA v3.',
	'RECAPTCHA_PRIVATE'				=> 'Leynilykill',
	'RECAPTCHA_PRIVATE_EXPLAIN'		=> 'Leynilykill reCAPTCHA. Hægt er að fá lykla á <a href="https://www.google.com/recaptcha">www.google.com/recaptcha</a>. Notaðu reCAPTCHA v2 &gt; Invisible reCAPTCHA badge.',
	'RECAPTCHA_V3_PRIVATE_EXPLAIN'	=> 'Leynilykill reCAPTCHA. Hægt er að fá lykla á <a href="https://www.google.com/recaptcha">www.google.com/recaptcha</a>. Notaðu reCAPTCHA v3.',

	'RECAPTCHA_V3_DOMAIN'				=> 'Beiðnilén',
	'RECAPTCHA_V3_DOMAIN_EXPLAIN'		=> 'Lénið sem sækja á skriftuna frá og nota við staðfestingu beiðninnar.<br>Notaðu <samp>recaptcha.net</samp> þegar <samp>google.com</samp> er ekki aðgengilegt.',

	'RECAPTCHA_V3_METHOD'				=> 'Beiðniaðferð',
	'RECAPTCHA_V3_METHOD_EXPLAIN'		=> 'Aðferðin sem nota á við staðfestingu beiðninnar.<br>Óvirkir valkostir eru ekki tiltækir í þessari uppsetningu.',
	'RECAPTCHA_V3_METHOD_CURL'			=> 'cURL',
	'RECAPTCHA_V3_METHOD_POST'			=> 'POST',
	'RECAPTCHA_V3_METHOD_SOCKET'		=> 'Sökkull',

	'RECAPTCHA_V3_THRESHOLD_DEFAULT'			=> 'Sjálfgefið þröskuldsgildi',
	'RECAPTCHA_V3_THRESHOLD_DEFAULT_EXPLAIN'	=> 'Notað þegar engin önnur aðgerð á við.',
	'RECAPTCHA_V3_THRESHOLD_LOGIN'				=> 'Þröskuldsgildi innskráningar',
	'RECAPTCHA_V3_THRESHOLD_POST'				=> 'Þröskuldsgildi færslu',
	'RECAPTCHA_V3_THRESHOLD_REGISTER'			=> 'Þröskuldsgildi skráningar',
	'RECAPTCHA_V3_THRESHOLD_REPORT'				=> 'Þröskuldsgildi tilkynningar',
	'RECAPTCHA_V3_THRESHOLDS'					=> 'Þröskuldsgildi',
	'RECAPTCHA_V3_THRESHOLDS_EXPLAIN'			=> 'reCAPTCHA v3 skilar einkunn (<samp>1.0</samp> merkir mjög líklega eðlileg samskipti en <samp>0.0</samp> merkir mjög líklega vélmenni). Hér getur þú stillt lágmarkseinkunn fyrir hverja aðgerð.',
	'EMPTY_RECAPTCHA_V3_REQUEST_METHOD'			=> 'reCAPTCHA v3 þarf að vita hvaða tiltæku aðferð á að nota við staðfestingu beiðninnar.',
]);
