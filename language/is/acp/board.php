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

// Board Settings
$lang = array_merge($lang, array(
	'ACP_BOARD_SETTINGS_EXPLAIN'	=> 'Hér getur þú ákveðið grunnvirkni spjallborðsins, gefið því viðeigandi heiti og lýsingu og meðal annars breytt sjálfgefnum gildum fyrir tímabelti og tungumál.',
	'BOARD_INDEX_TEXT'				=> 'Texti forsíðu spjallborðs',
	'BOARD_INDEX_TEXT_EXPLAIN'		=> 'Þessi texti birtist sem forsíða spjallborðsins í staðsetningarslóð þess. Ef ekkert er tilgreint verður „Forsíða spjallborðs“ notað sjálfgefið.',
	'BOARD_STYLE'					=> 'Stíll spjallborðs',
	'CUSTOM_DATEFORMAT'				=> 'Sérsniðið…',
	'DEFAULT_DATE_FORMAT'			=> 'Dagsetningarsnið',
	'DEFAULT_DATE_FORMAT_EXPLAIN'	=> 'Málskipanin notar sama snið og PHP-<a href="https://www.php.net/manual/datetime.format.php">dagsetningarföllin</a>.',
	'DEFAULT_LANGUAGE'				=> 'Sjálfgefið tungumál',
	'DEFAULT_STYLE'					=> 'Sjálfgefinn stíll',
	'DEFAULT_STYLE_EXPLAIN'			=> 'Sjálfgefinn stíll nýrra notenda.',
	'DISABLE_BOARD'					=> 'Gera spjallborðið óvirkt',
	'DISABLE_BOARD_EXPLAIN'			=> 'Þetta gerir spjallborðið óaðgengilegt notendum sem eru hvorki kerfisstjórar né stjórnendur. Þú getur einnig slegið inn stutt skilaboð, að hámarki 255 stafi, sem verða birt ef þú vilt.',
	'DISPLAY_LAST_SUBJECT'			=> 'Birta efni síðustu færslu á lista spjallsvæða',
	'DISPLAY_LAST_SUBJECT_EXPLAIN'	=> 'Efni síðustu færslu birtist á lista spjallsvæða með tengli á færsluna. Efni frá spjallsvæðum sem eru varin með lykilorði eða sem notandinn hefur ekki lesheimild á eru ekki sýnd.',
	'DISPLAY_UNAPPROVED_POSTS'		=> 'Birta höfundi ósamþykktar færslur',
	'DISPLAY_UNAPPROVED_POSTS_EXPLAIN'	=> 'Höfundur getur skoðað ósamþykktar færslur sínar. Þetta á ekki við um færslur gesta.',
	'GUEST_STYLE'					=> 'Stíll gesta',
	'GUEST_STYLE_EXPLAIN'			=> 'Stíll spjallborðsins fyrir gesti.',
	'OVERRIDE_STYLE'				=> 'Hunsa stíl notanda',
	'OVERRIDE_STYLE_EXPLAIN'		=> 'Skiptir stíl notanda og gesta út fyrir stílinn sem er skilgreindur undir „Sjálfgefinn stíll“.',
	'SITE_DESC'						=> 'Lýsing vefsvæðis',
	'SITE_HOME_TEXT'				=> 'Texti aðalvefsvæðis',
	'SITE_HOME_TEXT_EXPLAIN'		=> 'Þessi texti birtist sem tengill á forsíðu vefsvæðisins í brauðmolaslóð spjallborðsins. Ef ekkert er tilgreint er sjálfgefna gildið „Heim“.',
	'SITE_HOME_URL'					=> 'Vefslóð aðalvefsvæðis',
	'SITE_HOME_URL_EXPLAIN'			=> 'Ef vefslóð er tilgreind er tengli á hana bætt fremst í brauðmolaslóð spjallborðsins og merki spjallborðsins tengir á hana í stað forsíðu spjallborðsins. Krafist er algildrar vefslóðar, til dæmis <samp>http://www.phpbb.com</samp>.',
	'SITE_NAME'						=> 'Heiti vefsvæðis',
	'SYSTEM_TIMEZONE'				=> 'Tímabelti gesta',
	'SYSTEM_TIMEZONE_EXPLAIN'			=> 'Tímabelti sem er notað til að birta notendum sem eru ekki innskráðir tíma, þar á meðal gestum og vélmennum. Innskráðir notendur velja tímabelti við skráningu og geta breytt því á stjórnborði notanda.',
	'WARNINGS_EXPIRE'				=> 'Gildistími viðvarana',
	'WARNINGS_EXPIRE_EXPLAIN'		=> 'Fjöldi daga þar til viðvörun rennur sjálfkrafa út af skrá notanda. Stilltu gildið á 0 til að gera viðvaranir varanlegar.',
));

// Board Features
$lang = array_merge($lang, array(
	'ACP_BOARD_FEATURES_EXPLAIN'	=> 'Hér getur þú virkjað eða gert ýmsa eiginleika spjallborðsins óvirka.',

	'ALLOW_ATTACHMENTS'			=> 'Leyfa viðhengi',
	'ALLOW_BIRTHDAYS'			=> 'Leyfa afmæli',
	'ALLOW_BIRTHDAYS_EXPLAIN'	=> 'Leyfa notendum að skrá afmælisdag og birta aldur á notandasíðum. Athugaðu að afmælislistanum á forsíðu spjallborðsins er stjórnað með sérstakri álagsstillingu.',
	'ALLOW_BOOKMARKS'			=> 'Leyfa bókamerkingu umræðna',
	'ALLOW_BOOKMARKS_EXPLAIN'	=> 'Notendur geta vistað eigin bókamerki.',
	'ALLOW_BBCODE'				=> 'Leyfa BB-kóða',
	'ALLOW_FORUM_NOTIFY'		=> 'Leyfa áskrift að spjallsvæðum',
	'ALLOW_NAME_CHANGE'			=> 'Leyfa breytingar á notandanafni',
	'ALLOW_NO_CENSORS'			=> 'Leyfa að slökkt sé á orðasíu',
	'ALLOW_NO_CENSORS_EXPLAIN'	=> 'Notendur geta valið að gera sjálfvirka orðasíu í færslum og einkaskilaboðum óvirka.',
	'ALLOW_PM_ATTACHMENTS'		=> 'Leyfa viðhengi í einkaskilaboðum',
	'ALLOW_PM_REPORT'			=> 'Leyfa notendum að tilkynna einkaskilaboð',
	'ALLOW_PM_REPORT_EXPLAIN'	=> 'Ef þessi stilling er virk geta notendur tilkynnt einkaskilaboð sem þeir hafa móttekið eða sent til umsjónarmanna spjallborðsins. Einkaskilaboðin verða þá sýnileg á stjórnborði umsjónarmanna.',
	'ALLOW_QUICK_REPLY'			=> 'Leyfa flýtisvar',
	'ALLOW_QUICK_REPLY_EXPLAIN'	=> 'Með þessari stillingu má gera flýtisvar óvirkt á öllu spjallborðinu. Þegar stillingin er virk ráða stillingar hvers spjallsvæðis hvort flýtisvarið birtist þar.',
	'ALLOW_QUICK_REPLY_BUTTON'	=> 'Vista og virkja flýtisvar á öllum spjallsvæðum',
	'ALLOW_SIG'					=> 'Leyfa undirskriftir',
	'ALLOW_SIG_BBCODE'			=> 'Leyfa BB-kóða í undirskriftum notenda',
	'ALLOW_SIG_FLASH'			=> 'Leyfa BB-kóðamerkið <code>[FLASH]</code> í undirskriftum notenda',
	'ALLOW_SIG_IMG'				=> 'Leyfa BB-kóðamerkið <code>[IMG]</code> í undirskriftum notenda',
	'ALLOW_SIG_LINKS'			=> 'Leyfa tengla í undirskriftum notenda',
	'ALLOW_SIG_LINKS_EXPLAIN'	=> 'Ef þetta er ekki leyft verða BB-kóðamerkið <code>[URL]</code> og sjálfvirkir eða töfratenglar óvirkir.',
	'ALLOW_SIG_SMILIES'			=> 'Leyfa broskarla í undirskriftum notenda',
	'ALLOW_SMILIES'				=> 'Leyfa broskarla',
	'ALLOW_TOPIC_NOTIFY'		=> 'Leyfa áskrift að umræðum',
	'BOARD_PM'					=> 'Einkaskilaboð',
	'BOARD_PM_EXPLAIN'			=> 'Virkja einkaskilaboð fyrir alla notendur.',
	'ALLOW_BOARD_NOTIFICATIONS' => 'Leyfa tilkynningar spjallborðs',
));

// Avatar Settings
$lang = array_merge($lang, array(
	'ACP_AVATAR_SETTINGS_EXPLAIN'	=> 'Smámyndir eru yfirleitt litlar, einstakar myndir sem notendur geta tengt við sig. Eftir því hvaða stíll er notaður birtast þær venjulega undir notandanafninu við skoðun umræðna. Hér getur þú ákveðið hvernig notendur skilgreina smámyndir sínar. Til að hægt sé að hlaða upp smámyndum þarftu að hafa búið til möppuna sem tilgreind er hér fyrir neðan og tryggt að vefþjónninn geti skrifað í hana. Athugaðu einnig að skráarstærðarmörk gilda aðeins um upphlaðnar smámyndir en ekki myndir sem tengt er við af ytri vef.',

	'ALLOW_AVATARS'					=> 'Virkja smámyndir',
	'ALLOW_AVATARS_EXPLAIN'			=> 'Leyfa almenna notkun smámynda;<br>Ef smámyndir almennt eða tiltekin tegund þeirra er gerð óvirk birtast viðkomandi smámyndir ekki lengur á spjallborðinu, en notendur geta eftir sem áður sótt eigin smámyndir á stjórnborði notanda.',
	'ALLOW_GRAVATAR'				=> 'Virkja Gravatar-smámyndir',
	'ALLOW_LOCAL'					=> 'Virkja smámyndir úr myndasafni',
	'ALLOW_REMOTE'					=> 'Virkja ytri smámyndir',
	'ALLOW_REMOTE_EXPLAIN'			=> 'Smámyndir sem tengt er við á öðru vefsvæði.<br><em><strong class="error">Viðvörun:</strong> Ef þessi eiginleiki er virkjaður kunna notendur að geta kannað hvort til séu skrár og þjónustur sem aðeins eru aðgengilegar á staðarnetinu.</em>',
	'ALLOW_REMOTE_UPLOAD'			=> 'Virkja upphleðslu ytri smámynda',
	'ALLOW_REMOTE_UPLOAD_EXPLAIN'	=> 'Leyfa upphleðslu smámynda frá öðru vefsvæði.<br><em><strong class="error">Viðvörun:</strong> Ef þessi eiginleiki er virkjaður kunna notendur að geta kannað hvort til séu skrár og þjónustur sem aðeins eru aðgengilegar á staðarnetinu.</em>',
	'ALLOW_UPLOAD'					=> 'Virkja upphleðslu smámynda',
	'AVATAR_GALLERY_PATH'			=> 'Slóð smámyndasafns',
	'AVATAR_GALLERY_PATH_EXPLAIN'	=> 'Slóð undir rótarmöppu phpBB fyrir forhlaðnar myndir, til dæmis <samp>images/avatars/gallery</samp>.<br>Tveir punktar eins og <samp>../</samp> verða fjarlægðir úr slóðinni af öryggisástæðum.',
	'AVATAR_STORAGE_PATH'			=> 'Geymsluslóð smámynda',
	'AVATAR_STORAGE_PATH_EXPLAIN'	=> 'Slóð undir rótarmöppu phpBB, til dæmis <samp>images/avatars/upload</samp>.<br>Upphleðsla smámynda verður <strong>ekki tiltæk</strong> ef ekki er hægt að skrifa í þessa slóð.<br>Tveir punktar eins og <samp>../</samp> verða fjarlægðir úr slóðinni af öryggisástæðum.',
	'MAX_AVATAR_SIZE'				=> 'Hámarksmál smámyndar',
	'MAX_AVATAR_SIZE_EXPLAIN'		=> 'Breidd x hæð í dílum.',
	'MAX_FILESIZE'					=> 'Hámarksskráarstærð smámyndar',
	'MAX_FILESIZE_EXPLAIN'			=> 'Fyrir upphlaðnar smámyndaskrár. Ef gildið er 0 takmarkast stærð upphlaðinna skráa aðeins af PHP-stillingunum.',
	'MIN_AVATAR_SIZE'				=> 'Lágmarksmál smámyndar',
	'MIN_AVATAR_SIZE_EXPLAIN'		=> 'Breidd x hæð í dílum.',
));

// Message Settings
$lang = array_merge($lang, array(
	'ACP_MESSAGE_SETTINGS_EXPLAIN'		=> 'Hér getur þú stillt öll sjálfgefin gildi fyrir einkaskilaboð.',

	'ALLOW_BBCODE_PM'			=> 'Leyfa BB-kóða í einkaskilaboðum',
	'ALLOW_FLASH_PM'			=> 'Leyfa BB-kóðamerkið <code>[FLASH]</code>',
	'ALLOW_FLASH_PM_EXPLAIN'	=> 'Athugaðu að heimild til að nota Flash í einkaskilaboðum, ef það er virkjað hér, ræðst einnig af heimildum.',
	'ALLOW_FORWARD_PM'			=> 'Leyfa framsendingu einkaskilaboða',
	'ALLOW_IMG_PM'				=> 'Leyfa BB-kóðamerkið <code>[IMG]</code>',
	'ALLOW_MASS_PM'				=> 'Leyfa sendingu einkaskilaboða til margra notenda og hópa',
	'ALLOW_MASS_PM_EXPLAIN'		=> 'Sendingar til hópa má stilla sérstaklega fyrir hvern hóp á stillingasíðu hans.',
	'ALLOW_PRINT_PM'			=> 'Leyfa prentsýn einkaskilaboða',
	'ALLOW_QUOTE_PM'			=> 'Leyfa tilvitnanir í einkaskilaboðum',
	'ALLOW_SIG_PM'				=> 'Leyfa undirskrift í einkaskilaboðum',
	'ALLOW_SMILIES_PM'			=> 'Leyfa broskarla í einkaskilaboðum',
	'BOXES_LIMIT'				=> 'Hámarksfjöldi einkaskilaboða í hverju hólfi',
	'BOXES_LIMIT_EXPLAIN'		=> 'Notendur geta ekki móttekið fleiri einkaskilaboð en þennan fjölda í hverju skilaboðahólfi. Stilltu gildið á 0 til að leyfa ótakmarkaðan fjölda skilaboða.',
	'BOXES_MAX'					=> 'Hámarksfjöldi mappa fyrir einkaskilaboð',
	'BOXES_MAX_EXPLAIN'			=> 'Sjálfgefið geta notendur búið til þennan fjölda eigin mappa fyrir einkaskilaboð.',
	'ENABLE_PM_ICONS'			=> 'Virkja umræðutákn í einkaskilaboðum',
	'FULL_FOLDER_ACTION'		=> 'Sjálfgefin aðgerð þegar mappa er full',
	'FULL_FOLDER_ACTION_EXPLAIN'=> 'Sjálfgefin aðgerð þegar mappa notanda er full, að því gefnu að aðgerð möppunnar sem notandinn valdi eigi ekki við. Eina undantekningin er mappan „Send skilaboð“, þar sem sjálfgefna aðgerðin er alltaf að eyða gömlum skilaboðum.',
	'HOLD_NEW_MESSAGES'			=> 'Halda nýjum skilaboðum',
	'PM_EDIT_TIME'				=> 'Tímamörk breytinga',
	'PM_EDIT_TIME_EXPLAIN'		=> 'Takmarkar tímann sem hægt er að breyta einkaskilaboðum sem hafa ekki þegar verið afhent. Gildið 0 gerir þessa hegðun óvirka.',
	'PM_MAX_RECIPIENTS'			=> 'Hámarksfjöldi leyfilegra viðtakenda',
	'PM_MAX_RECIPIENTS_EXPLAIN'	=> 'Hámarksfjöldi leyfilegra viðtakenda einkaskilaboða. Ef 0 er slegið inn er fjöldinn ótakmarkaður. Hægt er að stilla þetta sérstaklega fyrir hvern hóp á síðu hópstillinga.',
));

// Post Settings
$lang = array_merge($lang, array(
	'ACP_POST_SETTINGS_EXPLAIN'			=> 'Hér getur þú stillt öll sjálfgefin gildi fyrir færslur.',
	'ALLOW_POST_LINKS'					=> 'Leyfa tengla í færslum og einkaskilaboðum',
	'ALLOW_POST_LINKS_EXPLAIN'			=> 'Ef þetta er ekki leyft verða BB-kóðamerkið <code>[URL]</code> og sjálfvirkir eða töfratenglar óvirkir.',
	'ALLOWED_SCHEMES_LINKS'				=> 'Leyfðar samskiptareglur í tenglum',
	'ALLOWED_SCHEMES_LINKS_EXPLAIN'		=> 'Notendur geta aðeins birt vefslóðir án samskiptareglu eða með einni af leyfðu samskiptareglunum í kommuaðskilda listanum.',
	'ALLOW_POST_FLASH'					=> 'Leyfa BB-kóðamerkið <code>[FLASH]</code> í færslum',
	'ALLOW_POST_FLASH_EXPLAIN'			=> 'Ef þetta er ekki leyft er BB-kóðamerkið <code>[FLASH]</code> óvirkt í færslum. Annars stýrir heimildakerfið því hvaða notendur mega nota BB-kóðamerkið <code>[FLASH]</code>.',

	'BUMP_INTERVAL'					=> 'Biðtími til að færa umræðu efst',
	'BUMP_INTERVAL_EXPLAIN'			=> 'Fjöldi mínútna, klukkustunda eða daga frá síðustu færslu í umræðu þar til hægt er að færa umræðuna aftur efst. Gildið 0 gerir eiginleikann alveg óvirkan.',
	'CHAR_LIMIT'					=> 'Hámarksfjöldi stafa í færslu/skilaboðum',
	'CHAR_LIMIT_EXPLAIN'			=> 'Fjöldi stafa sem má nota í færslu/einkaskilaboðum. Stilltu á 0 fyrir ótakmarkaðan stafafjölda.',
	'DELETE_TIME'					=> 'Tímamörk eyðingar',
	'DELETE_TIME_EXPLAIN'			=> 'Takmarkar tímann sem hægt er að eyða nýrri færslu. Gildið 0 gerir þessa hegðun óvirka.',
	'DISPLAY_LAST_EDITED'			=> 'Birta upplýsingar um síðustu breytingu',
	'DISPLAY_LAST_EDITED_EXPLAIN'	=> 'Veldu hvort upplýsingar um hver breytti færslu síðast eigi að birtast við færslur.',
	'EDIT_TIME'						=> 'Tímamörk breytinga',
	'EDIT_TIME_EXPLAIN'				=> 'Takmarkar tímann sem hægt er að breyta nýrri færslu. Gildið 0 gerir þessa hegðun óvirka.',
	'FLOOD_INTERVAL'				=> 'Bil milli færslna',
	'FLOOD_INTERVAL_EXPLAIN'		=> 'Fjöldi sekúndna sem notandi verður að bíða milli nýrra færslna. Breyttu heimildum notenda til að leyfa þeim að hunsa þetta.',
	'HOT_THRESHOLD'					=> 'Þröskuldur vinsælla umræðna',
	'HOT_THRESHOLD_EXPLAIN'			=> 'Fjöldi færslna í umræðu sem þarf til að hún sé merkt vinsæl. Stilltu á 0 til að gera vinsælar umræður óvirkar.',
	'MAX_POLL_OPTIONS'				=> 'Hámarksfjöldi valkosta í skoðanakönnun',
	'MAX_POST_FONT_SIZE'			=> 'Hámarksleturstærð í hverri færslu',
	'MAX_POST_FONT_SIZE_EXPLAIN'	=> 'Hámarksleturstærð sem er leyfð í færslu. Stilltu á 0 fyrir ótakmarkaða leturstærð.',
	'MAX_POST_IMG_HEIGHT'			=> 'Hámarkshæð Flash-efnis í hverri færslu',
	'MAX_POST_IMG_HEIGHT_EXPLAIN'	=> 'Hámarkshæð Flash-skrár í færslum. Stilltu á 0 fyrir ótakmarkaða stærð.',
	'MAX_POST_IMG_WIDTH'			=> 'Hámarksbreidd Flash-efnis í hverri færslu',
	'MAX_POST_IMG_WIDTH_EXPLAIN'	=> 'Hámarksbreidd Flash-skrár í færslum. Stilltu á 0 fyrir ótakmarkaða stærð.',
	'MAX_POST_URLS'					=> 'Hámarksfjöldi tengla í hverri færslu',
	'MAX_POST_URLS_EXPLAIN'			=> 'Hámarksfjöldi vefslóða í færslu. Stilltu á 0 fyrir ótakmarkaðan fjölda tengla.',
	'MIN_CHAR_LIMIT'				=> 'Lágmarksfjöldi stafa í færslu/skilaboðum',
	'MIN_CHAR_LIMIT_EXPLAIN'		=> 'Lágmarksfjöldi stafa sem notandi þarf að slá inn í færslu eða einkaskilaboð. Lægsta gildi þessarar stillingar er 1.',
	'POSTING'						=> 'Færslur',
	'POSTS_PER_PAGE'				=> 'Færslur á síðu',
	'QUOTE_DEPTH_LIMIT'				=> 'Hámarksdýpt tilvitnana',
	'QUOTE_DEPTH_LIMIT_EXPLAIN'		=> 'Hámarksdýpt innbyrðis tilvitnana í færslu. Stilltu á 0 fyrir ótakmarkaða dýpt.',
	'SMILIES_LIMIT'					=> 'Hámarksfjöldi broskarla í færslu',
	'SMILIES_LIMIT_EXPLAIN'			=> 'Hámarksfjöldi broskarla í færslu. Stilltu á 0 fyrir ótakmarkaðan fjölda broskarla.',
	'SMILIES_PER_PAGE'				=> 'Broskarlar á síðu',
	'TOPICS_PER_PAGE'				=> 'Umræður á síðu',
));

// Signature Settings
$lang = array_merge($lang, array(
	'ACP_SIGNATURE_SETTINGS_EXPLAIN'	=> 'Hér getur þú stillt öll sjálfgefin gildi fyrir undirskriftir.',

	'MAX_SIG_FONT_SIZE'				=> 'Hámarksleturstærð undirskriftar',
	'MAX_SIG_FONT_SIZE_EXPLAIN'		=> 'Hámarksleturstærð sem er leyfð í undirskriftum notenda. Stilltu á 0 fyrir ótakmarkaða stærð.',
	'MAX_SIG_IMG_HEIGHT'			=> 'Hámarkshæð myndar í undirskrift',
	'MAX_SIG_IMG_HEIGHT_EXPLAIN'	=> 'Hámarkshæð myndar eða Flash-skrár í undirskriftum notenda. Stilltu á 0 fyrir ótakmarkaða hæð.',
	'MAX_SIG_IMG_WIDTH'				=> 'Hámarksbreidd myndar í undirskrift',
	'MAX_SIG_IMG_WIDTH_EXPLAIN'		=> 'Hámarksbreidd myndar eða Flash-skrár í undirskriftum notenda. Stilltu á 0 fyrir ótakmarkaða breidd.',
	'MAX_SIG_LENGTH'				=> 'Hámarkslengd undirskriftar',
	'MAX_SIG_LENGTH_EXPLAIN'		=> 'Hámarksfjöldi stafa í undirskriftum notenda.',
	'MAX_SIG_SMILIES'				=> 'Hámarksfjöldi broskarla í undirskrift',
	'MAX_SIG_SMILIES_EXPLAIN'		=> 'Hámarksfjöldi broskarla sem er leyfður í undirskriftum notenda. Stilltu á 0 fyrir ótakmarkaðan fjölda broskarla.',
	'MAX_SIG_URLS'					=> 'Hámarksfjöldi tengla í undirskrift',
	'MAX_SIG_URLS_EXPLAIN'			=> 'Hámarksfjöldi tengla í undirskriftum notenda. Stilltu á 0 fyrir ótakmarkaðan fjölda tengla.',
));

// Registration Settings
$lang = array_merge($lang, array(
	'ACP_REGISTER_SETTINGS_EXPLAIN'		=> 'Hér getur þú skilgreint stillingar fyrir skráningu og notandasíður.',

	'ACC_ACTIVATION'				=> 'Virkjun reiknings',
	'ACC_ACTIVATION_EXPLAIN'		=> 'Þetta ákveður hvort notendur fái tafarlausan aðgang að spjallborðinu eða hvort staðfestingar sé krafist. Einnig er hægt að gera nýskráningar alveg óvirkar. <em>„Tölvupóstur spjallborðs“ verður að vera virkur til að hægt sé að nota virkjun notanda eða kerfisstjóra.</em>',
	'ACC_ACTIVATION_WARNING'		=> 'Athugaðu að valin virkjunaraðferð krefst virks tölvupósts; annars verður skráning gerð óvirk. Mælt er með að velja aðra virkjunaraðferð eða virkja tölvupóst aftur.',
	'NEW_MEMBER_POST_LIMIT'			=> 'Færslumörk nýrra meðlima',
	'NEW_MEMBER_POST_LIMIT_EXPLAIN'	=> 'Nýir meðlimir eru í hópnum <em>Nýskráðir notendur</em> þar til þeir ná þessum fjölda færslna. Þú getur notað hópinn til að hindra notkun einkaskilaboða eða til að yfirfara færslur þeirra. <strong>Gildið 0 gerir þennan eiginleika óvirkan.</strong>',
	'NEW_MEMBER_GROUP_DEFAULT'		=> 'Gera hópinn Nýskráðir notendur að sjálfgefnum hópi',
	'NEW_MEMBER_GROUP_DEFAULT_EXPLAIN'	=> 'Ef þetta er stillt á já og færslumörk nýrra meðlima eru tilgreind verða nýskráðir notendur ekki aðeins settir í hópinn <em>Nýskráðir notendur</em>, heldur verður hann einnig sjálfgefinn hópur þeirra. Þetta getur verið gagnlegt ef þú vilt úthluta sjálfgefinni tign og/eða smámynd hóps sem notandinn erfir.',

	'ACC_ADMIN'					=> 'Af kerfisstjóra',
	'ACC_DISABLE'				=> 'Gera skráningu óvirka',
	'ACC_NONE'					=> 'Engin virkjun (tafarlaus aðgangur)',
	'ACC_USER'					=> 'Af notanda (staðfesting með tölvupósti)',
//	'ACC_USER_ADMIN'			=> 'User + Admin',
	'ALLOW_EMAIL_REUSE'			=> 'Leyfa endurnotkun netfangs',
	'ALLOW_EMAIL_REUSE_EXPLAIN'	=> 'Mismunandi notendur geta skráð sig með sama netfangi.',
	'COPPA'						=> 'COPPA',
	'COPPA_FAX'					=> 'Faxnúmer vegna COPPA',
	'COPPA_MAIL'				=> 'Póstfang vegna COPPA',
	'COPPA_MAIL_EXPLAIN'		=> 'Þetta er póstfangið sem foreldrar senda COPPA-skráningareyðublöð á.',
	'ENABLE_COPPA'				=> 'Virkja COPPA',
	'ENABLE_COPPA_EXPLAIN'		=> 'Þetta krefst þess að notendur gefi upp hvort þeir séu 13 ára eða eldri til að uppfylla bandarísku COPPA-lögin. Ef þetta er óvirkt verða hópar sem tengjast COPPA ekki lengur sýndir.',
	'MAX_CHARS'					=> 'Hámark',
	'MIN_CHARS'					=> 'Lágmark',
	'NO_AUTH_PLUGIN'			=> 'Engin viðeigandi auðkenningarviðbót fannst.',
	'PASSWORD_LENGTH'			=> 'Lengd lykilorðs',
	'PASSWORD_LENGTH_EXPLAIN'	=> 'Lágmarksfjöldi stafa í lykilorðum. Athugaðu að hámarksfjöldinn er ekki takmarkaður.',
	'REG_LIMIT'					=> 'Skráningartilraunir',
	'REG_LIMIT_EXPLAIN'			=> 'Fjöldi tilrauna sem notendur fá til að leysa verkefni gegn ruslvélum áður en þeim er lokað úti úr viðkomandi setu.',
	'USERNAME_ALPHA_ONLY'		=> 'Aðeins bókstafir og tölustafir',
	'USERNAME_ALPHA_SPACERS'	=> 'Bókstafir, tölustafir og aðgreinar',
	'USERNAME_ASCII'			=> 'ASCII (engin alþjóðleg Unicode-tákn)',
	'USERNAME_LETTER_NUM'		=> 'Hvaða bókstafir og tölustafir sem er',
	'USERNAME_LETTER_NUM_SPACERS'	=> 'Hvaða bókstafir, tölustafir og aðgreinar sem er',
	'USERNAME_CHARS'			=> 'Takmarka stafi í notandanafni',
	'USERNAME_CHARS_ANY'		=> 'Hvaða stafur sem er',
	'USERNAME_CHARS_EXPLAIN'	=> 'Takmarkar tegundir stafa sem má nota í notandanöfnum. Aðgreinar eru: bil, -, +, _, [ og ].',
	'USERNAME_LENGTH'			=> 'Lengd notandanafns',
	'USERNAME_LENGTH_EXPLAIN'	=> 'Lágmarks- og hámarksfjöldi stafa í notandanöfnum.',
));

// Feeds
$lang = array_merge($lang, array(
	'ACP_FEED_MANAGEMENT'				=> 'Almennar stillingar efnisstrauma',
	'ACP_FEED_MANAGEMENT_EXPLAIN'		=> 'Þessi eining býr til ýmsa ATOM-strauma og vinnur BB-kóða í færslum svo hægt sé að lesa þær í ytri straumum.',

	'ACP_FEED_GENERAL'					=> 'Almennar straumstillingar',
	'ACP_FEED_POST_BASED'				=> 'Stillingar færslustrauma',
	'ACP_FEED_TOPIC_BASED'				=> 'Stillingar umræðustrauma',
	'ACP_FEED_SETTINGS_OTHER'			=> 'Aðrir straumar og stillingar',

	'ACP_FEED_ENABLE'					=> 'Virkja strauma',
	'ACP_FEED_ENABLE_EXPLAIN'			=> 'Kveikir eða slekkur á ATOM-straumum fyrir allt spjallborðið.<br>Ef þetta er gert óvirkt er slökkt á öllum straumum, óháð stillingunum hér fyrir neðan.',
	'ACP_FEED_LIMIT'					=> 'Fjöldi atriða',
	'ACP_FEED_LIMIT_EXPLAIN'			=> 'Hámarksfjöldi atriða sem birtast í straumi.',

	'ACP_FEED_OVERALL'					=> 'Virkja straum fyrir allt spjallborðið',
	'ACP_FEED_OVERALL_EXPLAIN'			=> 'Nýjar færslur af öllu spjallborðinu.',
	'ACP_FEED_FORUM'					=> 'Virkja straum fyrir hvert spjallsvæði',
	'ACP_FEED_FORUM_EXPLAIN'			=> 'Nýjar færslur af einu spjallsvæði og undirsvæðum þess.',
	'ACP_FEED_TOPIC'					=> 'Virkja straum fyrir hverja umræðu',
	'ACP_FEED_TOPIC_EXPLAIN'			=> 'Nýjar færslur í stökum umræðum.',

	'ACP_FEED_TOPICS_NEW'				=> 'Virkja straum nýrra umræðna',
	'ACP_FEED_TOPICS_NEW_EXPLAIN'		=> 'Virkjar strauminn „Nýjar umræður“ sem birtir síðast stofnuðu umræðurnar ásamt fyrstu færslu.',
	'ACP_FEED_TOPICS_ACTIVE'			=> 'Virkja straum virkra umræðna',
	'ACP_FEED_TOPICS_ACTIVE_EXPLAIN'	=> 'Virkjar strauminn „Virkar umræður“ sem birtir umræður sem voru síðast virkar ásamt síðustu færslu.',
	'ACP_FEED_NEWS'						=> 'Fréttastraumur',
	'ACP_FEED_NEWS_EXPLAIN'				=> 'Sækja fyrstu færsluna af þessum spjallsvæðum. Veldu ekkert spjallsvæði til að gera fréttastrauminn óvirkan.<br>Veldu fleiri spjallsvæði með því að halda <samp>CTRL</samp> inni og smella.',

	'ACP_FEED_OVERALL_FORUMS'			=> 'Virkja spjallsvæðastraum',
	'ACP_FEED_OVERALL_FORUMS_EXPLAIN'	=> 'Virkjar strauminn „Öll spjallsvæði“ sem birtir lista yfir spjallsvæði.',

	'ACP_FEED_HTTP_AUTH'				=> 'Leyfa HTTP-auðkenningu',
	'ACP_FEED_HTTP_AUTH_EXPLAIN'		=> 'Virkjar HTTP-auðkenningu svo notendur geti opnað efni sem er falið gestum með því að bæta færibreytunni <samp>auth=http</samp> við vefslóð straumsins. Sumar PHP-stillingar kunna að krefjast frekari breytinga á skránni .htaccess; leiðbeiningar eru í þeirri skrá. HTTP-auðkenning er aðeins studd yfir dulritaðar tengingar (https).',
	'ACP_FEED_ITEM_STATISTICS'			=> 'Tölfræði atriða',
	'ACP_FEED_ITEM_STATISTICS_EXPLAIN'	=> 'Birta tölfræði hvers atriðis undir straumsatriðum<br>(til dæmis höfund, dagsetningu og tíma, svör og skoðanir)',
	'ACP_FEED_EXCLUDE_ID'				=> 'Útiloka þessi spjallsvæði',
	'ACP_FEED_EXCLUDE_ID_EXPLAIN'		=> 'Efni frá þessum spjallsvæðum verður <strong>ekki haft með í straumum</strong>. Veldu ekkert spjallsvæði til að sækja gögn af öllum spjallsvæðum.<br>Veldu eða afveldu fleiri spjallsvæði með því að halda <samp>CTRL</samp> inni og smella.',
));

// Visual Confirmation Settings
$lang = array_merge($lang, array(
	'ACP_VC_SETTINGS_EXPLAIN'				=> 'Hér getur þú valið og stillt viðbætur sem eiga að hindra sjálfvirka innsendingu eyðublaða frá ruslvélum. Viðbæturnar leggja yfirleitt fyrir notandann <em>CAPTCHA</em>-próf sem hannað er til að vera erfitt fyrir tölvur.',
	'ACP_VC_EXT_GET_MORE'					=> 'Fleiri og hugsanlega betri ruslvarnarviðbætur eru í <a href="https://www.phpbb.com/go/anti-spam-ext"><strong>viðbótagagnagrunni phpBB.com</strong></a>. Nánari upplýsingar um hvernig koma má í veg fyrir ruslpóst á spjallborðinu eru í <a href="https://www.phpbb.com/go/anti-spam"><strong>þekkingargrunni phpBB.com</strong></a>.',
	'AVAILABLE_CAPTCHAS'					=> 'Tiltækar viðbætur',
	'CAPTCHA_UNAVAILABLE'					=> 'Ekki er hægt að velja viðbótina þar sem kröfur hennar eru ekki uppfylltar.',
	'CAPTCHA_GD'							=> 'GD-mynd',
	'CAPTCHA_GD_3D'							=> 'GD-þrívíddarmynd',
	'CAPTCHA_GD_FOREGROUND_NOISE'			=> 'Truflanir í forgrunni',
	'CAPTCHA_GD_EXPLAIN'					=> 'Notar GD til að búa til þróaðri mynd gegn ruslvélum.',
	'CAPTCHA_GD_FOREGROUND_NOISE_EXPLAIN'	=> 'Notaðu truflanir í forgrunni til að gera myndina erfiðari að lesa.',
	'CAPTCHA_GD_X_GRID'						=> 'Bakgrunnstruflanir á x-ás',
	'CAPTCHA_GD_X_GRID_EXPLAIN'				=> 'Lægra gildi gerir myndina erfiðari að lesa. 0 slekkur á bakgrunnstruflunum á x-ás.',
	'CAPTCHA_GD_Y_GRID'						=> 'Bakgrunnstruflanir á y-ás',
	'CAPTCHA_GD_Y_GRID_EXPLAIN'				=> 'Lægra gildi gerir myndina erfiðari að lesa. 0 slekkur á bakgrunnstruflunum á y-ás.',
	'CAPTCHA_GD_WAVE'						=> 'Bylgjubjögun',
	'CAPTCHA_GD_WAVE_EXPLAIN'				=> 'Beitir bylgjubjögun á myndina.',
	'CAPTCHA_GD_3D_NOISE'					=> 'Bæta við þrívíddartruflunum',
	'CAPTCHA_GD_3D_NOISE_EXPLAIN'			=> 'Bætir aukahlutum yfir stafina á myndinni.',
	'CAPTCHA_GD_FONTS'						=> 'Nota mismunandi leturgerðir',
	'CAPTCHA_GD_FONTS_EXPLAIN'				=> 'Þessi stilling stýrir því hversu mörg mismunandi stafalög eru notuð. Þú getur aðeins notað sjálfgefnu lögin eða bætt við breyttum stöfum. Einnig er hægt að bæta við lágstöfum.',
	'CAPTCHA_FONT_DEFAULT'					=> 'Sjálfgefið',
	'CAPTCHA_FONT_NEW'						=> 'Ný stafalögun',
	'CAPTCHA_FONT_LOWER'					=> 'Nota einnig lágstafi',
	'CAPTCHA_NO_GD'							=> 'Einföld mynd',
	'CAPTCHA_PREVIEW_MSG'					=> 'Breytingarnar hafa ekki verið vistaðar; þetta er aðeins forskoðun.',
	'CAPTCHA_PREVIEW_EXPLAIN'				=> 'Svona lítur viðbótin út með núverandi vali.',

	'CAPTCHA_SELECT'						=> 'Uppsettar viðbætur',
	'CAPTCHA_SELECT_EXPLAIN'				=> 'Fellilistinn inniheldur viðbætur sem spjallborðið þekkir. Gráar færslur eru ekki tiltækar eins og stendur og hugsanlega þarf að stilla þær fyrir notkun.',
	'CAPTCHA_CONFIGURE'						=> 'Stilla viðbætur',
	'CAPTCHA_CONFIGURE_EXPLAIN'				=> 'Breyttu stillingum valinnar viðbótar.',
	'CONFIGURE'								=> 'Stilla',
	'CAPTCHA_NO_OPTIONS'					=> 'Þessi viðbót hefur enga stillingarvalkosti.',

	'VISUAL_CONFIRM_POST'					=> 'Virkja varnir gegn ruslvélum fyrir færslur gesta',
	'VISUAL_CONFIRM_POST_EXPLAIN'			=> 'Krefst þess að gestir leysi verkefni gegn ruslvélum til að draga úr sjálfvirkum færslum.',
	'VISUAL_CONFIRM_REG'					=> 'Virkja varnir gegn ruslvélum við skráningu',
	'VISUAL_CONFIRM_REG_EXPLAIN'			=> 'Krefst þess að nýir notendur leysi verkefni gegn ruslvélum til að draga úr sjálfvirkum skráningum.',
	'VISUAL_CONFIRM_REFRESH'				=> 'Leyfa notendum að endurnýja verkefni gegn ruslvélum',
	'VISUAL_CONFIRM_REFRESH_EXPLAIN'		=> 'Leyfir notendum að biðja um nýtt verkefni gegn ruslvélum ef þeir geta ekki leyst núverandi verkefni við skráningu. Sumar viðbætur styðja hugsanlega ekki þennan valkost.',
));

// Cookie Settings
$lang = array_merge($lang, array(
	'ACP_COOKIE_SETTINGS_EXPLAIN'		=> 'Þessar upplýsingar skilgreina gögnin sem notuð eru til að senda vefkökur í vafra notenda. Sjálfgefin gildi vefkökustillinga ættu að duga í flestum tilvikum. Ef þú þarft að breyta þeim skaltu fara varlega, því rangar stillingar geta komið í veg fyrir að notendur skrái sig inn. Ef notendur eiga í vandræðum með að halda innskráningu virkri skaltu skoða <strong><a href="https://www.phpbb.com/support/go/cookie-settings">Þekkingargrunn phpBB.com — lagfæring rangra vefkökustillinga</a></strong>.',

	'COOKIE_DOMAIN'					=> 'Lén vefköku',
	'COOKIE_DOMAIN_EXPLAIN'			=> 'Í flestum tilvikum er valfrjálst að tilgreina lén vefköku. Skildu reitinn eftir auðan ef þú ert í vafa.<br><br> Ef spjallborðið er samþætt öðrum hugbúnaði eða þú notar mörg lén skaltu ákvarða lén vefkökunnar á eftirfarandi hátt. Ef þú ert til dæmis með <i>example.com</i> og <i>forums.example.com</i>, eða <i>forums.example.com</i> og <i>blog.example.com</i>, skaltu fjarlægja undirlénin þar til sameiginlega lénið, <i>example.com</i>, stendur eftir. Bættu síðan punkti fremst við sameiginlega lénið og sláðu inn .example.com (athugaðu punktinn fremst).',
	'COOKIE_NAME'					=> 'Heiti vefköku',
	'COOKIE_NAME_EXPLAIN'			=> 'Heitið má vera hvað sem er, en hafðu það sérstakt. Þegar stillingum vefkaka er breytt ætti einnig að breyta heiti vefkökunnar.',
	'COOKIE_NOTICE'					=> 'Tilkynning um vefkökur',
	'COOKIE_NOTICE_EXPLAIN'			=> 'Ef þetta er virkt sjá notendur tilkynningu um vefkökur þegar þeir heimsækja spjallborðið. Lög kunna að krefjast þess eftir efni spjallborðsins og virkum viðbótum.',
	'COOKIE_PATH'					=> 'Slóð vefköku',
	'COOKIE_PATH_EXPLAIN'			=> 'Þetta er venjulega sama slóð og skriftan notar eða einfaldlega skástrik, svo vefkakan sé aðgengileg á öllu léninu.',
	'COOKIE_SECURE'					=> 'Örugg vefkaka',
	'COOKIE_SECURE_EXPLAIN'			=> 'Ef þjónninn notar SSL skaltu virkja þetta, annars hafa það óvirkt. Ef þetta er virkt án þess að SSL sé notað verða villur á þjóninum við áframsendingar.',
	'ONLINE_LENGTH'					=> 'Tímabil tengdra notenda',
	'ONLINE_LENGTH_EXPLAIN'			=> 'Fjöldi mínútna þar til óvirkir notendur hverfa af listanum „Hver er tengdur“. Því hærra sem gildið er, því meiri vinnslu þarf til að búa listann til.',
	'SESSION_LENGTH'				=> 'Lengd setu',
	'SESSION_LENGTH_EXPLAIN'		=> 'Setum lýkur eftir þennan tíma í sekúndum.',
	'SESSION_GC'					=> 'Bil milli hreinsana seta',
	'SESSION_GC_EXPLAIN'			=> 'Setur eru hreinsaðar eftir þennan tíma í sekúndum.',
	'SESSION_GUEST_LENGTH'			=> 'Lengd gestasetu',
	'SESSION_GUEST_LENGTH_EXPLAIN'	=> 'Gestasetum lýkur eftir þennan tíma í sekúndum.',
	'SESSION_GUEST_GC'				=> 'Bil milli hreinsana gestaseta',
	'SESSION_GUEST_GC_EXPLAIN'		=> 'Gestasetum er eytt eftir þennan tíma í sekúndum.',
));

// Contact Settings
$lang = array_merge($lang, array(
	'ACP_CONTACT_SETTINGS_EXPLAIN'		=> 'Hér getur þú virkjað eða gert tengiliðasíðuna óvirka og bætt við texta sem birtist á henni.',

	'CONTACT_US_ENABLE'				=> 'Virkja tengiliðasíðu',
	'CONTACT_US_ENABLE_EXPLAIN'		=> 'Á þessari síðu geta notendur sent kerfisstjórum spjallborðsins tölvupóst. Athugaðu að einnig verður að virkja tölvupóst fyrir allt spjallborðið. Valkostinn finnurðu undir Almennt &gt; Samskipti við biðlara &gt; Tölvupóststillingar.',

	'CONTACT_US_INFO'				=> 'Tengiliðaupplýsingar',
	'CONTACT_US_INFO_EXPLAIN'		=> 'Skilaboðin birtast á tengiliðasíðunni.',
	'CONTACT_US_INFO_PREVIEW'		=> 'Tengiliðaupplýsingar — forskoðun',
	'CONTACT_US_INFO_UPDATED'		=> 'Tengiliðaupplýsingarnar hafa verið uppfærðar.',
));

// Load Settings
$lang = array_merge($lang, array(
	'ACP_LOAD_SETTINGS_EXPLAIN'	=> 'Hér getur þú virkjað eða gert tiltekna eiginleika spjallborðsins óvirka til að draga úr vinnsluþörf. Á flestum þjónum er ekki nauðsynlegt að gera neina eiginleika óvirka. Á sumum kerfum eða í samnýttu hýsingarumhverfi getur þó verið gagnlegt að slökkva á eiginleikum sem þú þarft ekki. Einnig getur þú tilgreint mörk fyrir kerfisálag og virkar setur; farið sé yfir þau verður spjallborðið óaðgengilegt.',

	'ALLOW_CDN'						=> 'Leyfa efnisdreifikerfi þriðja aðila',
	'ALLOW_CDN_EXPLAIN'				=> 'Ef þessi stilling er virk verða sumar skrár afhentar frá ytri þjónum þriðja aðila í stað þjónsins þíns. Þetta minnkar netbandbreidd sem þjónninn notar en getur skapað persónuverndarvanda í sumum löndum. Í sjálfgefinni phpBB-uppsetningu felur þetta í sér að hlaða „jQuery“ og letrinu „Open Sans“ frá efnisdreifikerfi Google. Þetta gildir einnig um letrið „Font Awesome“ sem phpBB og sumar viðbætur nota til að birta tákn.',
	'ALLOW_LIVE_SEARCHES'			=> 'Leyfa lifandi leit',
	'ALLOW_LIVE_SEARCHES_EXPLAIN'	=> 'Ef þessi stilling er virk fá notendur tillögur að leitarorðum um leið og þeir slá inn texta í tiltekna reiti víðs vegar á spjallborðinu.',
	'CUSTOM_PROFILE_FIELDS'			=> 'Sérsniðnir prófílreitir',
	'LIMIT_LOAD'					=> 'Takmarka kerfisálag',
	'LIMIT_LOAD_EXPLAIN'			=> 'Ef meðaltal kerfisálags í eina mínútu fer yfir þetta gildi fer spjallborðið sjálfkrafa utan nets. Gildið 1.0 jafngildir um ~100% nýtingu eins örgjörva. Þetta virkar aðeins á UNIX-þjónum þar sem þessar upplýsingar eru aðgengilegar. Gildið endurstillist á 0 ef phpBB getur ekki sótt álagsmörkin.',
	'LIMIT_SESSIONS'				=> 'Takmarka setur',
	'LIMIT_SESSIONS_EXPLAIN'		=> 'Ef fjöldi seta á einni mínútu fer yfir þetta gildi fer spjallborðið utan nets. Stilltu á 0 fyrir ótakmarkaðan fjölda seta.',
	'LOAD_CPF_MEMBERLIST'			=> 'Leyfa stílum að birta sérsniðna notandareiti á meðlimalista',
	'LOAD_CPF_PM'					=> 'Birta sérsniðna notandareiti í einkaskilaboðum',
	'LOAD_CPF_VIEWPROFILE'			=> 'Birta sérsniðna notandareiti í notandasniðum',
	'LOAD_CPF_VIEWTOPIC'			=> 'Birta sérsniðna notandareiti á umræðusíðum',
	'LOAD_USER_ACTIVITY'			=> 'Sýna virkni notanda',
	'LOAD_USER_ACTIVITY_EXPLAIN'	=> 'Birtir virka umræðu og spjallsvæði í notandasniðum og á stjórnborði notanda. Mælt er með að gera þetta óvirkt á spjallborðum með meira en eina milljón færslna.',
	'LOAD_USER_ACTIVITY_LIMIT'		=> 'Hámarksfjöldi færslna fyrir birtingu virkni notanda',
	'LOAD_USER_ACTIVITY_LIMIT_EXPLAIN'	=> 'Virk umræða og spjallsvæði birtast ekki hjá notendum með fleiri færslur en þessi tala. Stilltu á 0 til að gera takmörkin óvirk.',
	'READ_NOTIFICATION_EXPIRE_DAYS'	=> 'Gildistími lesinna tilkynninga',
	'READ_NOTIFICATION_EXPIRE_DAYS_EXPLAIN' => 'Fjöldi daga þar til lesinni tilkynningu er sjálfkrafa eytt. Stilltu gildið á 0 til að geyma tilkynningar varanlega.',
	'RECOMPILE_STYLES'				=> 'Endurþýða úrelta stílhluta',
	'RECOMPILE_STYLES_EXPLAIN'		=> 'Leita að uppfærðum stílhlutum í skráakerfinu og endurþýða þá.',
	'YES_ACCURATE_PM_BUTTON'			=> 'Birta hnapp einkaskilaboða á umræðusíðum eftir heimildum',
	'YES_ACCURATE_PM_BUTTON_EXPLAIN'	=> 'Ef þessi stilling er virk birtist hnappur fyrir einkaskilaboð aðeins við prófíla notenda sem mega lesa einkaskilaboð.',
	'YES_ANON_READ_MARKING'			=> 'Virkja merkingu umræðna fyrir gesti',
	'YES_ANON_READ_MARKING_EXPLAIN'	=> 'Geymir upplýsingar um lesna og ólesna stöðu fyrir gesti. Ef þetta er óvirkt eru færslur alltaf merktar lesnar fyrir gesti.',
	'YES_BIRTHDAYS'					=> 'Virkja afmælislista',
	'YES_BIRTHDAYS_EXPLAIN'			=> 'Ef þetta er óvirkt birtist afmælislistinn ekki lengur. Afmæliseiginleikinn þarf einnig að vera virkur svo þessi stilling hafi áhrif.',
	'YES_JUMPBOX'					=> 'Birta flýtival spjallsvæða',
	'YES_MODERATORS'				=> 'Birta stjórnendur',
	'YES_ONLINE'					=> 'Birta lista yfir tengda notendur',
	'YES_ONLINE_EXPLAIN'			=> 'Birtir upplýsingar um tengda notendur á forsíðu og síðum spjallsvæða og umræðna.',
	'YES_ONLINE_GUESTS'				=> 'Birta tengda gesti á síðunni yfir tengda notendur',
	'YES_ONLINE_GUESTS_EXPLAIN'		=> 'Leyfir birtingu upplýsinga um gesti á síðunni yfir tengda notendur.',
	'YES_ONLINE_TRACK'				=> 'Birta upplýsingar um tengda og ótengda notendur',
	'YES_ONLINE_TRACK_EXPLAIN'		=> 'Birtir upplýsingar um tengistöðu notanda á prófíl- og umræðusíðum.',
	'YES_POST_MARKING'				=> 'Virkja punktamerkingu umræðna',
	'YES_POST_MARKING_EXPLAIN'		=> 'Gefur til kynna hvort notandi hafi skrifað í umræðu.',
	'YES_READ_MARKING'				=> 'Virkja merkingu umræðna á þjónshlið',
	'YES_READ_MARKING_EXPLAIN'		=> 'Geymir upplýsingar um lesna og ólesna stöðu í gagnagrunninum í stað vefköku.',
	'YES_UNREAD_SEARCH'				=> 'Virkja leit að ólesnum færslum',
));

// Auth settings
$lang = array_merge($lang, array(
	'ACP_AUTH_SETTINGS_EXPLAIN'	=> 'phpBB styður auðkenningarviðbætur, eða einingar, sem stýra því hvernig notendur eru auðkenndir við innskráningu á spjallborðið. Sjálfgefið fylgja fjórar viðbætur: DB, LDAP, Apache og OAuth. Ekki krefjast allar aðferðir viðbótarupplýsinga; fylltu því aðeins út reiti sem eiga við um valda aðferð.',

	'AUTH_METHOD'				=> 'Veldu auðkenningaraðferð',

	'AUTH_PROVIDER_OAUTH_ERROR_ELEMENT_MISSING'	=> 'Tilgreina verður bæði lykil og leyndarlykil fyrir hvern virkan OAuth-þjónustuveitanda. Aðeins annað þeirra var gefið upp fyrir OAuth-þjónustuveitanda.',
	'AUTH_PROVIDER_OAUTH_EXPLAIN'				=> 'Hver OAuth-þjónustuveitandi krefst sérstaks lykils og leyndarlykils til auðkenningar við ytri þjóninn. OAuth-þjónustan á að láta þessi gildi í té þegar vefsvæðið er skráð hjá henni og slá þarf þau inn nákvæmlega eins og þau voru afhent.<br>Þjónusta sem hefur ekki bæði lykil og leyndarlykil skráðan hér verður ekki tiltæk notendum spjallborðsins. Athugaðu einnig að notendur geta eftir sem áður skráð sig og skráð sig inn með DB-auðkenningarviðbótinni.',
	'AUTH_PROVIDER_OAUTH_KEY'					=> 'Lykill',
	'AUTH_PROVIDER_OAUTH_TITLE'					=> 'OAuth',
	'AUTH_PROVIDER_OAUTH_SECRET'				=> 'Leyndarlykill',

	'APACHE_SETUP_BEFORE_USE'	=> 'Þú verður að setja upp Apache-auðkenningu áður en phpBB er skipt yfir í þessa auðkenningaraðferð. Notandanafnið sem notað er fyrir Apache-auðkenningu verður að vera það sama og phpBB-notandanafnið. Apache-auðkenningu er aðeins hægt að nota með mod_php, ekki CGI-útgáfu.',

	'LDAP'							=> 'LDAP',
	'LDAP_DN'						=> 'Grunn-DN LDAP <var>dn</var>',
	'LDAP_DN_EXPLAIN'				=> 'Þetta er Distinguished Name sem staðsetur upplýsingar notandans, t.d. <samp>o=My Company,c=US</samp>.',
	'LDAP_EMAIL'					=> 'Netfangseigindi LDAP',
	'LDAP_EMAIL_EXPLAIN'			=> 'Stilltu þetta á heiti netfangseigindis í notandafærslunni, ef það er til, til að skrá netfang nýrra notenda sjálfkrafa. Ef reiturinn er skilinn eftir auður verður netfang notenda sem skrá sig inn í fyrsta sinn autt.',
	'LDAP_INCORRECT_USER_PASSWORD'	=> 'Tenging við LDAP-þjón með tilgreindum notanda og lykilorði mistókst.',
	'LDAP_NO_EMAIL'					=> 'Tilgreint netfangseigindi er ekki til.',
	'LDAP_NO_IDENTITY'				=> 'Innskráningarauðkenni fannst ekki fyrir %s.',
	'LDAP_PASSWORD'					=> 'LDAP-lykilorð',
	'LDAP_PASSWORD_EXPLAIN'			=> 'Skildu reitinn eftir auðan til að nota nafnlausa tengingu, annars skaltu slá inn lykilorð notandans hér fyrir ofan. Þetta er nauðsynlegt fyrir Active Directory-þjóna.<br><em><strong>Viðvörun:</strong> Lykilorðið verður vistað sem ódulkóðaður texti í gagnagrunninum og er sýnilegt öllum sem hafa aðgang að gagnagrunninum eða geta skoðað þessa stillingasíðu.</em>',
	'LDAP_PORT'						=> 'Gátt LDAP-þjóns',
	'LDAP_PORT_EXPLAIN'				=> 'Þú getur valfrjálst tilgreint gátt sem nota á til að tengjast LDAP-þjóninum í stað sjálfgefnu gáttarinnar 389.',
	'LDAP_SERVER'					=> 'Heiti LDAP-þjóns',
	'LDAP_SERVER_EXPLAIN'			=> 'Þegar LDAP er notað er þetta vélarheiti eða IP-tala LDAP-þjónsins. Einnig má tilgreina vefslóð á borð við ldap://hostname:port/',
	'LDAP_UID'						=> 'LDAP <var>uid</var>',
	'LDAP_UID_EXPLAIN'				=> 'Þetta er lykillinn sem nota á við leit að tilteknu innskráningarauðkenni, t.d. <var>uid</var>, <var>sn</var> o.s.frv.',
	'LDAP_USER'						=> 'LDAP-notandi <var>dn</var>',
	'LDAP_USER_EXPLAIN'				=> 'Skildu reitinn eftir auðan til að nota nafnlausa tengingu. Ef hann er fylltur út notar phpBB tilgreint Distinguished Name við innskráningartilraunir til að finna réttan notanda, t.d. <samp>uid=Username,ou=MyUnit,o=MyCompany,c=US</samp>. Þetta er nauðsynlegt fyrir Active Directory-þjóna.',
	'LDAP_USER_FILTER'				=> 'Notandasía LDAP',
	'LDAP_USER_FILTER_EXPLAIN'		=> 'Þú getur valfrjálst takmarkað leitarniðurstöður frekar með viðbótarsíum. Til dæmis myndi <samp>objectClass=posixGroup</samp> leiða til notkunar á <samp>(&amp;(uid=$username)(objectClass=posixGroup))</samp>',
));

// Server Settings
$lang = array_merge($lang, array(
	'ACP_SERVER_SETTINGS_EXPLAIN'	=> 'Hér skilgreinir þú stillingar sem ráðast af þjóni og léni. Gakktu úr skugga um að upplýsingarnar séu réttar; villur valda því að tölvupóstur innihaldi rangar upplýsingar. Þegar lénsheiti er skráð skaltu muna að það inniheldur http:// eða annað heiti samskiptareglu. Breyttu aðeins gáttarnúmerinu ef þú veist að þjónninn notar annað gildi; gátt 80 er rétt í flestum tilvikum.',

	'ENABLE_GZIP'				=> 'Virkja GZip-þjöppun',
	'ENABLE_GZIP_EXPLAIN'		=> 'Myndað efni verður þjappað áður en það er sent notandanum. Þetta getur dregið úr netumferð en eykur jafnframt notkun örgjörva bæði á þjóninum og hjá biðlaranum. Krefst þess að zlib PHP-viðbótin sé hlaðin.',
	'FORCE_SERVER_VARS'			=> 'Þvinga stillingar vefslóðar þjóns',
	'FORCE_SERVER_VARS_EXPLAIN'	=> 'Ef þetta er stillt á já verða þjónsstillingarnar sem skilgreindar eru hér notaðar í stað sjálfvirkt ákvörðuðu gildanna.',
	'ICONS_PATH'				=> 'Geymsluslóð færslutákna',
	'ICONS_PATH_EXPLAIN'		=> 'Slóð undir rótarmöppu phpBB, t.d. <samp>images/icons</samp>.',
	'MOD_REWRITE_ENABLE'		=> 'Virkja endurritun vefslóða',
	'MOD_REWRITE_ENABLE_EXPLAIN' => 'Þegar þetta er virkt eru vefslóðir sem innihalda „app.php“ endurritaðar þannig að skráarheitið er fjarlægt (þ.e. app.php/foo verður /foo). <strong>Apache-einingin mod_rewrite er nauðsynleg til að þessi eiginleiki virki. Ef valkosturinn er virkjaður án stuðnings við mod_rewrite kunna vefslóðir spjallborðsins að vera bilaðar.</strong>',
	'MOD_REWRITE_DISABLED'		=> 'Einingin <strong>mod_rewrite</strong> er óvirk á Apache-vefþjóninum. Virkjaðu eininguna eða hafðu samband við hýsingaraðilann ef þú vilt virkja þennan eiginleika.',
	'MOD_REWRITE_INFORMATION_UNAVAILABLE' => 'Ekki er hægt að ákvarða hvort þjónninn styður endurritun vefslóða. Hægt er að virkja stillinguna, en ef endurritun er ekki tiltæk kunna slóðir sem spjallborðið býr til, til dæmis fyrir tengla, að vera bilaðar. Hafðu samband við hýsingaraðilann ef þú ert ekki viss um hvort óhætt sé að virkja eiginleikann.',
	'PATH_SETTINGS'				=> 'Slóðastillingar',
	'RANKS_PATH'				=> 'Geymsluslóð tignarmynda',
	'RANKS_PATH_EXPLAIN'		=> 'Slóð undir rótarmöppu phpBB, til dæmis <samp>images/ranks</samp>.',
	'SCRIPT_PATH'				=> 'Slóð skriftu',
	'SCRIPT_PATH_EXPLAIN'		=> 'Slóðin þar sem phpBB er staðsett miðað við lénið, til dæmis <samp>/phpBB3</samp>.',
	'SERVER_NAME'				=> 'Lén',
	'SERVER_NAME_EXPLAIN'		=> 'Lénið sem spjallborðið keyrir á, til dæmis <samp>example.com</samp>.',
	'SERVER_PORT'				=> 'Gátt þjóns',
	'SERVER_PORT_EXPLAIN'		=> 'Gáttin sem þjónninn keyrir á, venjulega 80. Breyttu þessu aðeins ef hún er önnur.',
	'SERVER_PROTOCOL'			=> 'Samskiptareglur þjóns',
	'SERVER_PROTOCOL_EXPLAIN'	=> 'Þetta er notað sem samskiptaregla þjónsins ef þessum stillingum er þvingað. Ef reiturinn er auður eða stillingunum ekki þvingað er samskiptareglan ákvörðuð af stillingu öruggrar vefköku (<samp>http://</samp> eða <samp>https://</samp>).',
	'SERVER_URL_SETTINGS'		=> 'Stillingar vefslóðar þjóns',
	'SMILIES_PATH'				=> 'Geymsluslóð broskarla',
	'SMILIES_PATH_EXPLAIN'		=> 'Slóð undir rótarmöppu phpBB, til dæmis <samp>images/smilies</samp>.',
	'UPLOAD_ICONS_PATH'			=> 'Geymsluslóð tákna skráarendingaflokka',
	'UPLOAD_ICONS_PATH_EXPLAIN'	=> 'Slóð undir rótarmöppu phpBB, til dæmis <samp>images/upload_icons</samp>.',
	'USE_SYSTEM_CRON'			=> 'Keyra reglubundin verkefni með cron stýrikerfisins',
	'USE_SYSTEM_CRON_EXPLAIN'	=> 'Þegar þetta er óvirkt sér phpBB sjálfkrafa um að keyra reglubundin verkefni. Þegar þetta er virkt tímasetur phpBB engin reglubundin verkefni sjálft; kerfisstjóri verður að láta cron-þjónustu stýrikerfisins keyra <code>bin/phpbbcli.php cron:run</code> með reglulegu millibili, til dæmis á 5 mínútna fresti.',
));

// Security Settings
$lang = array_merge($lang, array(
	'ACP_SECURITY_SETTINGS_EXPLAIN'		=> 'Hér getur þú skilgreint stillingar sem tengjast setum og innskráningu.',

	'ALL'							=> 'Allt',
	'ALLOW_AUTOLOGIN'				=> 'Leyfa „Muna eftir mér“-innskráningar',
	'ALLOW_AUTOLOGIN_EXPLAIN'		=> 'Ákveður hvort notendum standi valkosturinn „Muna eftir mér“ til boða þegar þeir heimsækja spjallborðið.',
	'ALLOW_PASSWORD_RESET'			=> 'Leyfa endurstillingu lykilorðs („Gleymt lykilorð“)',
	'ALLOW_PASSWORD_RESET_EXPLAIN'	=> 'Ákveður hvort notendur geti notað tengilinn „Ég gleymdi lykilorðinu mínu“ á innskráningarsíðunni til að endurheimta aðgang að reikningi sínum. Ef ytri auðkenningaraðferð er notuð kanntu að vilja gera þennan eiginleika óvirkan.',
	'AUTOLOGIN_LENGTH'				=> 'Gildistími „Muna eftir mér“-innskráningarlykla (í dögum)',
	'AUTOLOGIN_LENGTH_EXPLAIN'		=> 'Fjöldi daga þar til „Muna eftir mér“-innskráningarlyklar eru fjarlægðir; 0 gerir eiginleikann óvirkan.',
	'BROWSER_VALID'					=> 'Staðfesta vafra',
	'BROWSER_VALID_EXPLAIN'			=> 'Virkjar staðfestingu vafra fyrir hverja setu til að auka öryggi.',
	'CHECK_DNSBL'					=> 'Athuga IP-tölu í DNS-bannlistum',
	'CHECK_DNSBL_EXPLAIN'			=> 'Ef þetta er virkt er IP-tala notandans athuguð hjá eftirfarandi DNSBL-þjónustum við skráningu og birtingu færslna: <a href="http://spamcop.net">spamcop.net</a> og <a href="http://www.spamhaus.org">www.spamhaus.org</a>. Uppflettingin getur tekið nokkurn tíma eftir uppsetningu þjónsins. Ef hún veldur hægagangi eða of mörgum röngum niðurstöðum er mælt með að slökkva á þessari athugun.',
	'CLASS_B'						=> 'A.B',
	'CLASS_C'						=> 'A.B.C',
	'EMAIL_CHECK_MX'				=> 'Athuga hvort tölvupóstlén hafi gilda MX-færslu',
	'EMAIL_CHECK_MX_EXPLAIN'		=> 'Ef þetta er virkt er athugað hvort tölvupóstlénið sem gefið er upp við skráningu eða breytingu prófíls hafi gilda MX-færslu.',
	'FORCE_PASS_CHANGE'				=> 'Þvinga breytingu lykilorðs',
	'FORCE_PASS_CHANGE_EXPLAIN'		=> 'Krefst þess að notandi breyti lykilorði sínu eftir tiltekinn fjölda daga. Gildið 0 gerir þessa hegðun óvirka.',
	'FORM_TIME_MAX'					=> 'Hámarkstími til að senda eyðublöð',
	'FORM_TIME_MAX_EXPLAIN'			=> 'Tíminn sem notandi hefur til að senda eyðublað. Notaðu -1 til að gera þetta óvirkt. Athugaðu að eyðublað getur orðið ógilt ef setan rennur út, óháð þessari stillingu.',
	'FORM_SID_GUESTS'				=> 'Tengja eyðublöð við setur gesta',
	'FORM_SID_GUESTS_EXPLAIN'		=> 'Ef þetta er virkt gildir öryggislykill eyðublaðs sem gestur fær aðeins fyrir viðkomandi setu. Þetta getur valdið vandamálum hjá sumum internetþjónustuveitum.',
	'FORWARDED_FOR_VALID'			=> 'Staðfesta <var>X_FORWARDED_FOR</var>-haus',
	'FORWARDED_FOR_VALID_EXPLAIN'	=> 'Setu verður aðeins haldið áfram ef sendi <var>X_FORWARDED_FOR</var>-hausinn er sá sami og í fyrri beiðni. Bönn verða einnig athuguð gagnvart IP-tölum í <var>X_FORWARDED_FOR</var>.',
	'IP_VALID'						=> 'Staðfesting IP-tölu setu',
	'IP_VALID_EXPLAIN'				=> 'Ákveður hversu stór hluti af IP-tölu notanda er notaður til að staðfesta setu. <samp>All</samp> ber saman allt vistfangið, <samp>A.B.C</samp> fyrstu x.x.x, <samp>A.B</samp> fyrstu x.x og <samp>None</samp> gerir athugunina óvirka. Fyrir IPv6-vistföng ber <samp>A.B.C</samp> saman fyrstu 4 blokkirnar og <samp>A.B</samp> fyrstu 3 blokkirnar.',
	'IP_LOGIN_LIMIT_MAX'			=> 'Hámarksfjöldi innskráningartilrauna á hverja IP-tölu',
	'IP_LOGIN_LIMIT_MAX_EXPLAIN'	=> 'Fjöldi leyfðra innskráningartilrauna frá einni IP-tölu áður en ruslvélavörn er virkjuð. Sláðu inn 0 til að koma í veg fyrir að IP-tölur virkji ruslvélavörnina.',
	'IP_LOGIN_LIMIT_TIME'			=> 'Gildistími innskráningartilrauna eftir IP-tölu',
	'IP_LOGIN_LIMIT_TIME_EXPLAIN'	=> 'Innskráningartilraunir renna út eftir þennan tíma.',
	'IP_LOGIN_LIMIT_USE_FORWARDED'	=> 'Takmarka innskráningartilraunir eftir hausnum <var>X_FORWARDED_FOR</var>',
	'IP_LOGIN_LIMIT_USE_FORWARDED_EXPLAIN'	=> 'Í stað þess að takmarka innskráningartilraunir eftir IP-tölu eru þær takmarkaðar eftir gildum <var>X_FORWARDED_FOR</var>. <br><em><strong>Viðvörun:</strong> Virkjaðu þetta aðeins ef þú rekur milliþjón sem stillir <var>X_FORWARDED_FOR</var> á áreiðanleg gildi.</em>',
	'MAX_LOGIN_ATTEMPTS'			=> 'Hámarksfjöldi innskráningartilrauna á hvert notandanafn',
	'MAX_LOGIN_ATTEMPTS_EXPLAIN'	=> 'Fjöldi leyfðra innskráningartilrauna fyrir einn reikning áður en ruslvélavörn er virkjuð. Sláðu inn 0 til að koma í veg fyrir að einstakir notandareikningar virkji ruslvélavörnina.',
	'NO_IP_VALIDATION'				=> 'Engin',
	'NO_REF_VALIDATION'				=> 'Engin',
	'PASSWORD_TYPE'					=> 'Flækjustig lykilorðs',
	'PASSWORD_TYPE_EXPLAIN'			=> 'Ákvarðar hversu flókið lykilorð þarf að vera þegar það er valið eða því breytt. Hver valkostur felur einnig í sér kröfur fyrri valkosta.',
	'PASS_TYPE_ALPHA'				=> 'Verður að innihalda bókstafi og tölustafi',
	'PASS_TYPE_ANY'					=> 'Engar kröfur',
	'PASS_TYPE_CASE'				=> 'Verður að innihalda há- og lágstafi',
	'PASS_TYPE_SYMBOL'				=> 'Verður að innihalda tákn',
	'REF_HOST'						=> 'Staðfesta aðeins vélarheiti',
	'REF_PATH'						=> 'Staðfesta einnig slóð',
	'REFERRER_VALID'				=> 'Staðfesta tilvísanda',
	'REFERRER_VALID_EXPLAIN'		=> 'Ef þetta er virkt er tilvísandi POST-beiðna borinn saman við stillingar vélarheitis og skriftuslóðar. Þetta getur valdið vandamálum á spjallborðum sem nota mörg lén og/eða ytri innskráningu.',
	'TPL_ALLOW_PHP'					=> 'Leyfa PHP í sniðmátum',
	'TPL_ALLOW_PHP_EXPLAIN'			=> 'Ef þessi valkostur er virkur verða <code>PHP</code>- og <code>INCLUDEPHP</code>-skipanir þekktar og túlkaðar í sniðmátum.',
	'UPLOAD_CERT_VALID'				=> 'Staðfesta vottorð við upphleðslu',
	'UPLOAD_CERT_VALID_EXPLAIN'		=> 'Ef þetta er virkt verða vottorð við ytri upphleðslu staðfest. Þetta krefst þess að CA-vottorðasafnið sé skilgreint með stillingunni <samp>openssl.cafile</samp> eða <samp>curl.cainfo</samp> í php.ini.',
));

// Email Settings
$lang = array_merge($lang, array(
	'ACP_EMAIL_SETTINGS_EXPLAIN'	=> 'Þessar upplýsingar eru notaðar þegar spjallborðið sendir notendum tölvupóst. Gakktu úr skugga um að netfangið sem þú tilgreinir sé gilt; endursendur eða óafhendanlegur póstur verður líklega sendur á það netfang. Ef hýsingaraðilinn býður ekki upp á innbyggða, PHP-byggða tölvupóstþjónustu má senda skilaboð beint með SMTP. Til þess þarf vistfang viðeigandi þjóns; spurðu þjónustuveitandann ef nauðsyn krefur. Ef þjónninn krefst auðkenningar, og aðeins þá, skaltu slá inn nauðsynlegt notandanafn, lykilorð og auðkenningaraðferð.',

	'ADMIN_EMAIL'					=> 'Netfang sendanda',
	'ADMIN_EMAIL_EXPLAIN'			=> 'Þetta verður notað sem sendandanetfang í öllum tölvupósti og er netfang tæknilegs tengiliðar. Það verður alltaf notað sem <samp>Sender</samp>-vistfang í tölvupósti.',
	'BOARD_EMAIL_FORM'				=> 'Notendur senda tölvupóst í gegnum spjallborðið',
	'BOARD_EMAIL_FORM_EXPLAIN'		=> 'Í stað þess að sýna netföng notenda geta notendur sent tölvupóst í gegnum spjallborðið.',
	'BOARD_HIDE_EMAILS'				=> 'Fela netföng',
	'BOARD_HIDE_EMAILS_EXPLAIN'		=> 'Þessi eiginleiki heldur netföngum algjörlega leyndum.',
	'CONTACT_EMAIL'					=> 'Tengiliðanetfang',
	'CONTACT_EMAIL_EXPLAIN'			=> 'Þetta netfang er notað þegar þörf er á tilteknum tengilið, til dæmis vegna ruslpósts eða villuboða. Það er alltaf notað sem <samp>From</samp>- og <samp>Reply-To</samp>-netfang í tölvupósti.',
	'CONTACT_EMAIL_NAME'			=> 'Nafn tengiliðar',
	'CONTACT_EMAIL_NAME_EXPLAIN'	=> 'Þetta er nafn tengiliðarins sem viðtakendur tölvupósts sjá. Skildu reitinn eftir auðan ef þú vilt ekki birta nafn tengiliðar.',
	'EMAIL_FORCE_SENDER'			=> 'Þvinga netfang sendanda',
	'EMAIL_FORCE_SENDER_EXPLAIN'	=> 'Þetta stillir <samp>Return-Path</samp> á netfang sendanda í stað þess að nota staðbundinn notanda og vélarheiti þjónsins. Stillingin á ekki við þegar SMTP er notað.<br><em><strong>Viðvörun:</strong> Notandinn sem vefþjónninn keyrir sem verður að vera skráður sem traustur notandi í sendmail-stillingunum.</em>',
	'EMAIL_PACKAGE_SIZE'			=> 'Stærð tölvupóstpakka',
	'EMAIL_PACKAGE_SIZE_EXPLAIN'	=> 'Þetta er hámarksfjöldi tölvupósta sem sendur er í einum pakka. Stillingin gildir um innri skilaboðabiðröðina; stilltu gildið á 0 ef vandamál koma upp vegna tilkynningatölvupósta sem berast ekki.',
	'EMAIL_MAX_CHUNK_SIZE'			=> 'Hámarksfjöldi viðtakenda tölvupósts',
	'EMAIL_MAX_CHUNK_SIZE_EXPLAIN'	=> 'Stilltu þetta eftir þörfum svo fjöldi viðtakenda fari ekki yfir hámarkið sem tölvupóstþjónninn leyfir í einum tölvupósti.',
	'EMAIL_SIG'						=> 'Undirskrift tölvupósts',
	'EMAIL_SIG_EXPLAIN'				=> 'Þessum texta er bætt við allan tölvupóst sem spjallborðið sendir.',
	'ENABLE_EMAIL'					=> 'Virkja tölvupóst fyrir allt spjallborðið',
	'ENABLE_EMAIL_EXPLAIN'			=> 'Ef þetta er óvirkt sendir spjallborðið engan tölvupóst. <em>Athugaðu að virkjun notenda- og kerfisstjórareikninga krefst þess að þessi stilling sé virk. Ef virkjun er nú stillt á „notandi“ eða „kerfisstjóri“ verður skráning óvirk þegar slökkt er á þessari stillingu.</em>',
	'SEND_TEST_EMAIL'				=> 'Senda prufutölvupóst',
	'SEND_TEST_EMAIL_EXPLAIN'		=> 'Prufutölvupóstur verður sendur á netfangið sem er skráð á reikningnum þínum.',
	'SMTP_ALLOW_SELF_SIGNED'		=> 'Leyfa sjálfundirrituð SSL-vottorð',
	'SMTP_ALLOW_SELF_SIGNED_EXPLAIN'=> 'Leyfir tengingar við SMTP-þjón með sjálfundirrituðu SSL-vottorði. <br><em><strong>Viðvörun:</strong> Sjálfundirrituð SSL-vottorð geta haft öryggisáhættu í för með sér.</em>',
	'SMTP_AUTH_METHOD'				=> 'Auðkenningaraðferð SMTP',
	'SMTP_AUTH_METHOD_EXPLAIN'		=> 'Aðeins notað ef notandanafn og lykilorð eru stillt. Spurðu þjónustuveituna ef þú ert ekki viss um hvaða aðferð á að nota.',
	'SMTP_CRAM_MD5'					=> 'CRAM-MD5',
	'SMTP_DIGEST_MD5'				=> 'DIGEST-MD5',
	'SMTP_LOGIN'					=> 'LOGIN',
	'SMTP_PASSWORD'					=> 'SMTP-lykilorð',
	'SMTP_PASSWORD_EXPLAIN'			=> 'Sláðu aðeins inn lykilorð ef SMTP-þjónninn krefst þess.<br><em><strong>Viðvörun:</strong> Lykilorðið verður geymt sem ódulkóðaður texti í gagnagrunninum og verður sýnilegt öllum sem hafa aðgang að gagnagrunninum eða geta skoðað þessa stillingasíðu.</em>',
	'SMTP_PLAIN'					=> 'PLAIN',
	'SMTP_POP_BEFORE_SMTP'			=> 'POP-BEFORE-SMTP',
	'SMTP_PORT'						=> 'Gátt SMTP-þjóns',
	'SMTP_PORT_EXPLAIN'				=> 'Breyttu þessu aðeins ef þú veist að SMTP-þjónninn notar aðra gátt.',
	'SMTP_SERVER'					=> 'Vistfang SMTP-þjóns',
	'SMTP_SERVER_EXPLAIN'			=> 'Ekki tilgreina samskiptareglu (<samp>ssl://</samp> eða <samp>tls://</samp>) nema tölvupóstþjónustan gefi fyrirmæli um það.',
	'SMTP_SETTINGS'					=> 'SMTP-stillingar',
	'SMTP_USERNAME'					=> 'SMTP-notandanafn',
	'SMTP_USERNAME_EXPLAIN'			=> 'Sláðu aðeins inn notandanafn ef SMTP-þjónninn krefst þess.',
	'SMTP_VERIFY_PEER'				=> 'Staðfesta SSL-vottorð',
	'SMTP_VERIFY_PEER_EXPLAIN'		=> 'Krefst staðfestingar á SSL-vottorðinu sem SMTP-þjónninn notar. <br><em><strong>Viðvörun:</strong> Tenging við jafningja með óstaðfest SSL-vottorð getur haft öryggisáhættu í för með sér.</em>',
	'SMTP_VERIFY_PEER_NAME'			=> 'Staðfesta heiti SMTP-jafningja',
	'SMTP_VERIFY_PEER_NAME_EXPLAIN'	=> 'Krefst staðfestingar á heiti jafningja fyrir SMTP-þjóna sem nota SSL-/TLS-tengingar. <br><em><strong>Viðvörun:</strong> Tenging við óstaðfesta jafningja getur haft öryggisáhættu í för með sér.</em>',
	'TEST_EMAIL_SENT'				=> 'Prufutölvupósturinn hefur verið sendur.<br>Ef hann berst ekki skaltu athuga tölvupóststillingarnar.<br><br>Ef þú þarft aðstoð skaltu heimsækja <a href="https://www.phpbb.com/community/">stuðningsspjallsvæði phpBB</a>.',

	'USE_SMTP'						=> 'Nota SMTP-þjón fyrir tölvupóst',
	'USE_SMTP_EXPLAIN'				=> 'Veldu „Já“ ef þú vilt eða þarft að senda tölvupóst um nafngreindan þjón í stað staðbundna póstfallsins.',
));

// Jabber settings
$lang = array_merge($lang, array(
	'ACP_JABBER_SETTINGS_EXPLAIN'	=> 'Hér getur þú virkjað og stjórnað notkun Jabber fyrir spjallskilaboð og tilkynningar spjallborðsins. Jabber er opin samskiptaregla og því geta allir notað hana. Sumir Jabber-þjónar bjóða gáttir eða flutningsleiðir sem gera kleift að hafa samband við notendur á öðrum netum. Ekki bjóða allir þjónar allar flutningsleiðir og breytingar á samskiptareglum geta komið í veg fyrir að þær virki. Gakktu úr skugga um að upplýsingar um reikning sem þegar hefur verið skráður séu slegnar inn; phpBB notar upplýsingarnar nákvæmlega eins og þú slærð þær inn.',

	'JAB_ALLOW_SELF_SIGNED'			=> 'Leyfa sjálfundirrituð SSL-vottorð',
	'JAB_ALLOW_SELF_SIGNED_EXPLAIN'	=> 'Leyfa tengingar við Jabber-þjón með sjálfundirrituðu SSL-vottorði. <br><em><strong>Viðvörun:</strong> Sjálfundirrituð SSL-vottorð geta skapað öryggisáhættu.</em>',
	'JAB_ENABLE'					=> 'Virkja Jabber',
	'JAB_ENABLE_EXPLAIN'			=> 'Virkjar notkun Jabber-skilaboða og -tilkynninga.',
	'JAB_GTALK_NOTE'				=> 'Athugaðu að GTalk virkar ekki þar sem fallið <samp>dns_get_record</samp> fannst ekki. Fallið er ekki tiltækt í PHP4 og hefur ekki verið útfært á Windows. Það virkar sem stendur ekki á BSD-kerfum, þar á meðal Mac OS.',
	'JAB_PACKAGE_SIZE'				=> 'Pakkastærð Jabber',
	'JAB_PACKAGE_SIZE_EXPLAIN'		=> 'Þetta er fjöldi skilaboða sem eru send í einum pakka. Ef gildið er 0 eru skilaboðin send samstundis og fara ekki í biðröð til síðari sendingar.',
	'JAB_PASSWORD'					=> 'Jabber-lykilorð',
	'JAB_PASSWORD_EXPLAIN'			=> '<em><strong>Viðvörun:</strong> Lykilorðið verður vistað sem ódulkóðaður texti í gagnagrunninum og er sýnilegt öllum sem hafa aðgang að gagnagrunninum eða geta skoðað þessa stillingasíðu.</em>',
	'JAB_PORT'						=> 'Jabber-gátt',
	'JAB_PORT_EXPLAIN'				=> 'Skildu reitinn eftir auðan nema þú vitir að gáttin er ekki 5222.',
	'JAB_SERVER'					=> 'Jabber-þjónn',
	'JAB_SERVER_EXPLAIN'			=> 'Skoðaðu %sjabber.org%s til að sjá lista yfir þjóna.',
	'JAB_SETTINGS_CHANGED'			=> 'Jabber-stillingum var breytt.',
	'JAB_USE_SSL'					=> 'Nota SSL við tengingu',
	'JAB_USE_SSL_EXPLAIN'			=> 'Ef þetta er virkt er reynt að koma á öruggri tengingu. Jabber-gáttinni verður breytt í 5223 ef gátt 5222 er tilgreind.',
	'JAB_USERNAME'					=> 'Jabber-notandanafn eða JID',
	'JAB_USERNAME_EXPLAIN'			=> 'Tilgreindu skráð notandanafn eða gilt JID. Ekki verður athugað hvort notandanafnið sé gilt. Ef þú tilgreinir aðeins notandanafn verður JID samsett úr notandanafninu og þjóninum sem þú tilgreindir hér fyrir ofan. Annars skaltu tilgreina gilt JID, til dæmis user@jabber.org.',
	'JAB_VERIFY_PEER'				=> 'Staðfesta SSL-vottorð',
	'JAB_VERIFY_PEER_EXPLAIN'		=> 'Krefjast staðfestingar á SSL-vottorði Jabber-þjónsins. <br><em><strong>Viðvörun:</strong> Tenging við jafningja með óstaðfest SSL-vottorð getur skapað öryggisáhættu.</em>',
	'JAB_VERIFY_PEER_NAME'			=> 'Staðfesta heiti Jabber-jafningja',
	'JAB_VERIFY_PEER_NAME_EXPLAIN'	=> 'Krefjast staðfestingar á heiti jafningja hjá Jabber-þjónum sem nota SSL / TLS-tengingar. <br><em><strong>Viðvörun:</strong> Tenging við óstaðfesta jafningja getur skapað öryggisáhættu.</em>',
));
