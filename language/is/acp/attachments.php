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
	'ACP_ATTACHMENT_SETTINGS_EXPLAIN'	=> 'Hér getur þú stillt helstu valkosti fyrir viðhengi og tengda sérflokka.',
	'ACP_EXTENSION_GROUPS_EXPLAIN'		=> 'Hér getur þú bætt við, eytt, breytt eða gert skráarendingaflokka óvirka. Aðrir valkostir eru meðal annars að tengja þá við sérflokk, breyta niðurhalsaðferð og skilgreina upphleðslutákn sem birtist framan við viðhengi úr flokknum.',
	'ACP_MANAGE_EXTENSIONS_EXPLAIN'		=> 'Hér getur þú stjórnað leyfðum skráarendingum. Til að virkja endingar skaltu fara á stjórnborð skráarendingaflokka. Við mælum eindregið gegn því að leyfa skriftuendingar (svo sem <code>php</code>, <code>php3</code>, <code>php4</code>, <code>phtml</code>, <code>pl</code>, <code>cgi</code>, <code>py</code>, <code>rb</code>, <code>asp</code>, <code>aspx</code> og fleiri).',
	'ACP_ORPHAN_ATTACHMENTS_EXPLAIN'	=> 'Hér getur þú séð ótengdar skrár. Þetta gerist oftast þegar notendur hengja skrár við en senda ekki færsluna. Þú getur eytt skránum eða tengt þær við færslur sem þegar eru til. Til að tengja skrá við færslu þarf gilt auðkenni færslu sem þú verður sjálfur að finna. Þá verður viðhengið sem þegar var hlaðið upp tengt við færsluna sem þú tilgreinir.',
	'ADD_EXTENSION'						=> 'Bæta við skráarendingu',
	'ADD_EXTENSION_GROUP'				=> 'Bæta við skráarendingaflokki',
	'ADMIN_UPLOAD_ERROR'				=> 'Villa kom upp þegar reynt var að hengja við skrána „%s“.',
	'ALLOWED_FORUMS'					=> 'Leyfð spjallsvæði',
	'ALLOWED_FORUMS_EXPLAIN'			=> 'Leyfir sendingu skráa með úthlutuðum endingum á völdum spjallsvæðum, eða öllum ef það er valið.',
	'ALLOWED_IN_PM_POST'				=> 'Leyft',
	'ALLOW_ATTACHMENTS'					=> 'Leyfa viðhengi',
	'ALLOW_ALL_FORUMS'					=> 'Leyfa öll spjallsvæði',
	'ALLOW_IN_PM'						=> 'Leyft í einkaskilaboðum',
	'ALLOW_PM_ATTACHMENTS'				=> 'Leyfa viðhengi í einkaskilaboðum',
	'ALLOW_SELECTED_FORUMS'				=> 'Aðeins spjallsvæði valin hér fyrir neðan',
	'ASSIGNED_EXTENSIONS'				=> 'Úthlutaðar skráarendingar',
	'ASSIGNED_GROUP'					=> 'Úthlutaður skráarendingaflokkur',
	'ATTACH_EXTENSIONS_URL'				=> 'Skráarendingar',
	'ATTACH_EXT_GROUPS_URL'				=> 'Skráarendingaflokkar',
	'ATTACH_ID'							=> 'Auðkenni',
	'ATTACH_MAX_FILESIZE'				=> 'Hámarksstærð skráar',
	'ATTACH_MAX_FILESIZE_EXPLAIN'		=> 'Hámarksstærð hverrar skráar. Ef gildið er 0 takmarkast stærð upphlaðinna skráa aðeins af PHP-stillingunum.',
	'ATTACH_MAX_PM_FILESIZE'			=> 'Hámarksstærð skráar í skilaboðum',
	'ATTACH_MAX_PM_FILESIZE_EXPLAIN'	=> 'Hámarksstærð hverrar skráar sem hengd er við einkaskilaboð; 0 merkir ótakmarkað.',
	'ATTACH_ORPHAN_URL'					=> 'Ótengd viðhengi',
	'ATTACH_POST_ID'					=> 'Auðkenni færslu',
	'ATTACH_POST_TYPE'					=> 'Tegund færslu',
	'ATTACH_QUOTA'						=> 'Heildarkvóti viðhengja',
	'ATTACH_QUOTA_EXPLAIN'				=> 'Hámarksdiskpláss fyrir viðhengi á öllu spjallborðinu; 0 merkir ótakmarkað.',
	'ATTACH_TO_POST'					=> 'Hengja skrá við færslu',

	'CAT_IMAGES'				=> 'Myndir',
	'CHECK_CONTENT'				=> 'Athuga viðhengisskrár',
	'CHECK_CONTENT_EXPLAIN'		=> 'Hægt er að blekkja suma vafra til að álykta ranga MIME-gerð fyrir upphlaðnar skrár. Þessi valkostur tryggir að skrám sem líklegt er að valdi slíku sé hafnað.',
	'CREATE_GROUP'				=> 'Stofna nýjan flokk',
	'CREATE_THUMBNAIL'			=> 'Búa til smámynd',
	'CREATE_THUMBNAIL_EXPLAIN'	=> 'Búa til smámynd við allar mögulegar aðstæður.',

	'DEFINE_ALLOWED_IPS'			=> 'Skilgreina leyfðar IP-tölur/vélarheiti',
	'DEFINE_DISALLOWED_IPS'			=> 'Skilgreina bannaðar IP-tölur/vélarheiti',
	'DOWNLOAD_ADD_IPS_EXPLAIN'		=> 'Til að tilgreina margar IP-tölur eða vélarheiti skaltu færa hvert þeirra í nýja línu. Til að tilgreina bil IP-talna skaltu aðgreina upphaf og enda með bandstriki (-); notaðu „*“ sem algildisstaf.',
	'DOWNLOAD_REMOVE_IPS_EXPLAIN'	=> 'Þú getur fjarlægt margar IP-tölur úr undantekningum í einu með viðeigandi samspili músar og lyklaborðs fyrir tölvuna og vafrann. Undanskildar IP-tölur eru með bláan bakgrunn.',
	'DISPLAY_INLINED'				=> 'Birta myndir innan texta',
	'DISPLAY_INLINED_EXPLAIN'		=> 'Ef Nei er valið birtast myndviðhengi sem tenglar.',
	'DISPLAY_ORDER'					=> 'Birtingarröð viðhengja',
	'DISPLAY_ORDER_EXPLAIN'			=> 'Birta viðhengi í tímaröð.',

	'EDIT_EXTENSION_GROUP'			=> 'Breyta skráarendingaflokki',
	'EXCLUDE_ENTERED_IP'			=> 'Virkjaðu þetta til að undanskilja tilgreinda IP-tölu/vélarheiti.',
	'EXCLUDE_FROM_ALLOWED_IP'		=> 'Undanskilja IP-tölu frá leyfðum IP-tölum/vélarheitum',
	'EXCLUDE_FROM_DISALLOWED_IP'	=> 'Undanskilja IP-tölu frá bönnuðum IP-tölum/vélarheitum',
	'EXTENSIONS_UPDATED'			=> 'Skráarendingarnar voru uppfærðar.',
	'EXTENSION_EXIST'				=> 'Skráarendingin %s er þegar til.',
	'EXTENSION_GROUP'				=> 'Skráarendingaflokkur',
	'EXTENSION_GROUPS'				=> 'Skráarendingaflokkar',
	'EXTENSION_GROUP_DELETED'		=> 'Skráarendingaflokknum var eytt.',
	'EXTENSION_GROUP_EXIST'			=> 'Skráarendingaflokkurinn %s er þegar til.',

	'EXT_GROUP_ARCHIVES'			=> 'Safnskrár',
	'EXT_GROUP_DOCUMENTS'			=> 'Skjöl',
	'EXT_GROUP_DOWNLOADABLE_FILES'	=> 'Niðurhalsskrár',
	'EXT_GROUP_IMAGES'				=> 'Myndir',
	'EXT_GROUP_PLAIN_TEXT'			=> 'Ósniðinn texti',

	'FILES_GONE'			=> 'Sum viðhengjanna sem þú valdir til eyðingar eru ekki til. Þeim kann þegar að hafa verið eytt. Viðhengjum sem voru til var eytt.',
	'FILES_STATS_WRONG'		=> 'Skráartölfræðin er líklega röng og þarf að endursamstilla. Raungildi: fjöldi viðhengja = %1$d, heildarstærð viðhengja = %2$s.<br />Smelltu %3$shér%4$s til að endursamstilla.',

	'GO_TO_EXTENSIONS'		=> 'Fara á stjórnunarsíðu skráarendinga',
	'GROUP_NAME'			=> 'Heiti flokks',

	'IMAGE_LINK_SIZE'			=> 'Stærð mynda sem birtast sem tengill',
	'IMAGE_LINK_SIZE_EXPLAIN'	=> 'Birta myndviðhengi sem textatengil innan færslu ef myndin er stærri en þetta. Stilltu gildin á 0px sinnum 0px til að gera hegðunina óvirka.',
	'IMAGE_QUALITY'				=> 'Gæði upphlaðinna myndviðhengja (aðeins JPEG)',
	'IMAGE_QUALITY_EXPLAIN'		=> 'Tilgreindu gildi milli 50% (minni skrá) og 90% (meiri gæði). Gæði yfir 90% stækka skrár og eru óvirk. Stillingin á aðeins við ef hámarksstærð mynda er önnur en 0px sinnum 0px.',
	'IMAGE_STRIP_METADATA'		=> 'Fjarlægja lýsigögn mynda (aðeins JPEG)',
	'IMAGE_STRIP_METADATA_EXPLAIN'	=> 'Fjarlægir Exif-lýsigögn, til dæmis nafn höfundar, GPS-hnit og upplýsingar um myndavél. Stillingin á aðeins við ef hámarksstærð mynda er önnur en 0px sinnum 0px.',

	'MAX_ATTACHMENTS'				=> 'Hámarksfjöldi viðhengja í hverri færslu',
	'MAX_ATTACHMENTS_PM'			=> 'Hámarksfjöldi viðhengja í hverjum einkaskilaboðum',
	'MAX_EXTGROUP_FILESIZE'			=> 'Hámarksstærð skráar',
	'MAX_IMAGE_SIZE'				=> 'Hámarksmál mynda',
	'MAX_IMAGE_SIZE_EXPLAIN'		=> 'Hámarksmál myndviðhengja. phpBB kann að reyna að minnka myndir sjálfkrafa í þessi hámarksmál fyrir upphleðslu. Stilltu bæði gildin á 0px sinnum 0px til að slökkva á málathugun og sjálfvirkri stærðarbreytingu.',
	'MAX_THUMB_WIDTH'				=> 'Hámarksbreidd/hæð smámyndar í dílum',
	'MAX_THUMB_WIDTH_EXPLAIN'		=> 'Smámynd sem búin er til verður ekki breiðari en gildið sem hér er stillt.',
	'MIN_THUMB_FILESIZE'			=> 'Lágmarksskráarstærð fyrir smámynd',
	'MIN_THUMB_FILESIZE_EXPLAIN'	=> 'Ekki búa til smámynd fyrir myndir sem eru minni en þetta.',
	'MODE_INLINE'					=> 'Innan texta',
	'MODE_PHYSICAL'					=> 'Raunlæg',

	'NOT_ALLOWED_IN_PM'			=> 'Aðeins leyft í færslum',
	'NOT_ALLOWED_IN_PM_POST'	=> 'Ekki leyft',
	'NOT_ASSIGNED'				=> 'Ekki úthlutað',
	'NO_ATTACHMENTS'			=> 'Engin viðhengi fundust fyrir þetta tímabil.',
	'NO_EXT_GROUP'				=> 'Ekkert',
	'NO_EXT_GROUP_ALLOWED_PM'	=> 'Engir <a href="%s">leyfðir skráarendingaflokkar</a> eru til fyrir einkaskilaboð.',
	'NO_EXT_GROUP_ALLOWED_POST'	=> 'Engir <a href="%s">leyfðir skráarendingaflokkar</a> eru til fyrir færslur.',
	'NO_EXT_GROUP_NAME'			=> 'Ekkert heiti flokks var fært inn',
	'NO_EXT_GROUP_SPECIFIED'	=> 'Enginn skráarendingaflokkur var tilgreindur.',
	'NO_FILE_CAT'				=> 'Ekkert',
	'NO_IMAGE'					=> 'Engin mynd',
	'NO_UPLOAD_DIR'				=> 'Upphleðslumappan sem þú tilgreindir er ekki til.',
	'NO_WRITE_UPLOAD'			=> 'Ekki er hægt að skrifa í upphleðslumöppuna sem þú tilgreindir. Breyttu heimildunum svo vefþjónninn geti skrifað í hana.',

	'ONLY_ALLOWED_IN_PM'	=> 'Aðeins leyft í einkaskilaboðum',
	'ORDER_ALLOW_DENY'		=> 'Leyfa',
	'ORDER_DENY_ALLOW'		=> 'Hafna',

	'REMOVE_ALLOWED_IPS'			=> 'Fjarlægja eða hætta að undanskilja <em>leyfðar</em> IP-tölur/vélarheiti',
	'REMOVE_DISALLOWED_IPS'			=> 'Fjarlægja eða hætta að undanskilja <em>bannaðar</em> IP-tölur/vélarheiti',
	'RESYNC_FILES_STATS_CONFIRM'	=> 'Ertu viss um að þú viljir endursamstilla skráartölfræðina?',

	'SECURE_ALLOW_DENY'				=> 'Leyfa/hafna-listi',
	'SECURE_ALLOW_DENY_EXPLAIN'		=> 'Breyttu sjálfgefinni hegðun Leyfa/hafna-listans þegar öruggt niðurhal er virkt í <strong>hvítlista</strong> (Leyfa) eða <strong>svartlista</strong> (Hafna).',
	'SECURE_DOWNLOADS'				=> 'Virkja öruggt niðurhal',
	'SECURE_DOWNLOADS_EXPLAIN'		=> 'Þegar þessi valkostur er virkur takmarkast niðurhal við IP-tölur/vélarheiti sem þú skilgreinir.',
	'SECURE_DOWNLOAD_NOTICE'		=> 'Öruggt niðurhal er ekki virkt. Stillingarnar hér fyrir neðan taka gildi þegar öruggt niðurhal er virkjað.',
	'SECURE_DOWNLOAD_UPDATE_SUCCESS'=> 'IP-listinn var uppfærður.',
	'SECURE_EMPTY_REFERRER'			=> 'Leyfa auðan tilvísanda',
	'SECURE_EMPTY_REFERRER_EXPLAIN'	=> 'Öruggt niðurhal byggist á tilvísendum. Viltu leyfa niðurhal þegar tilvísanda vantar?',
	'SETTINGS_CAT_IMAGES'			=> 'Stillingar myndaflokks',
	'SPECIAL_CATEGORY'				=> 'Sérflokkur',
	'SPECIAL_CATEGORY_EXPLAIN'		=> 'Sérflokkar eru ólíkir hvað varðar birtingu þeirra í færslum.',
	'SUCCESSFULLY_UPLOADED'			=> 'Upphleðsla tókst.',
	'SUCCESS_EXTENSION_GROUP_ADD'	=> 'Skráarendingaflokknum var bætt við.',
	'SUCCESS_EXTENSION_GROUP_EDIT'	=> 'Skráarendingaflokkurinn var uppfærður.',

	'UPLOADING_FILES'				=> 'Hleð skrám upp',
	'UPLOADING_FILE_TO'				=> 'Hleð skránni „%1$s“ upp í færslu númer %2$d…',
	'UPLOAD_DENIED_FORUM'			=> 'Þú hefur ekki heimild til að hlaða skrám upp á spjallsvæðið „%s“.',
	'UPLOAD_DIR'					=> 'Upphleðslumappa',
	'UPLOAD_DIR_EXPLAIN'			=> 'Geymsluslóð viðhengja. Athugaðu að ef þú breytir þessari möppu eftir að viðhengjum hefur verið hlaðið upp þarftu að afrita skrárnar handvirkt á nýja staðinn.',
	'UPLOAD_ICON'					=> 'Upphleðslutákn',
	'UPLOAD_NOT_DIR'				=> 'Upphleðslustaðurinn sem þú tilgreindir virðist ekki vera mappa.',
	'UPLOAD_POST_NOT_EXIST'			=> 'Ekki er hægt að hlaða skránni „%1$s“ upp í færslu númer %2$d þar sem færslan er ekki til.',
));
