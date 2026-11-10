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

// BBCodes
// Note to translators: you can translate everything but what's between { and }
$lang = array_merge($lang, array(
	'ACP_BBCODES_EXPLAIN'		=> 'BBCode er sérstök útfærsla á HTML sem veitir meiri stjórn á því hvað er birt og hvernig. Á þessari síðu getur þú bætt við, fjarlægt og breytt sérsniðnum BBCode-kóðum.',
	'ADD_BBCODE'				=> 'Bæta við nýjum BBCode-kóða',

	'BBCODE_DANGER'				=> 'BBCode-kóðinn sem þú ert að bæta við virðist óöruggur. Ef hann notar {TEXT}-tóka í viðkvæmu samhengi skaltu reyna takmarkaðri tegund. Haltu aðeins áfram ef þú skilur áhættuna.',
	'BBCODE_DANGER_PROCEED'		=> 'Halda áfram', //'I understand the risk',

	'BBCODE_ADDED'				=> 'BBCode-kóðanum var bætt við.',
	'BBCODE_EDITED'				=> 'BBCode-kóðanum var breytt.',
	'BBCODE_DELETED'			=> 'BBCode-kóðinn var fjarlægður.',
	'BBCODE_NOT_EXIST'			=> 'Valinn BBCode-kóði er ekki til.',
	'BBCODE_HELPLINE'			=> 'Hjálparlína',
	'BBCODE_HELPLINE_EXPLAIN'	=> 'Þessi reitur inniheldur textann sem birtist þegar bendillinn er yfir BBCode-kóðanum.',
	'BBCODE_HELPLINE_TEXT'		=> 'Texti hjálparlínu',
	'BBCODE_HELPLINE_TOO_LONG'	=> 'Hjálparlínan sem þú slóst inn er of löng.',

	'BBCODE_INVALID_TAG_NAME'	=> 'Heiti BBCode-merkisins sem þú valdir er þegar til.',
	'BBCODE_INVALID'			=> 'BBCode-kóðinn er rangt uppbyggður.',
	'BBCODE_INVALID_TEMPLATE'	=> 'Sniðmát BBCode-kóðans er ógilt.',
	'BBCODE_TAG'				=> 'Merki',
	'BBCODE_TAG_TOO_LONG'		=> 'Heiti merkisins er of langt.',
	'BBCODE_TAG_DEF_TOO_LONG'	=> 'Skilgreining merkisins er of löng; styttu hana.',
	'BBCODE_USAGE'				=> 'Notkun BBCode',
	'BBCODE_USAGE_EXAMPLE'		=> '[highlight={COLOR}]{TEXT}[/highlight]<br /><br />[font={SIMPLETEXT1}]{SIMPLETEXT2}[/font]',
	'BBCODE_USAGE_EXPLAIN'		=> 'Hér skilgreinir þú hvernig BBCode-kóðinn er notaður. Skiptu öllum breytilegum inntökum út fyrir samsvarandi tóka (%ssjá hér fyrir neðan%s).',

	'EXAMPLE'						=> 'Dæmi:',
	'EXAMPLES'						=> 'Dæmi:',

	'HTML_REPLACEMENT'				=> 'HTML-útskipting',
	'HTML_REPLACEMENT_EXAMPLE'		=> '&lt;span style="background-color: {COLOR};"&gt;{TEXT}&lt;/span&gt;<br /><br />&lt;span style="font-family: {SIMPLETEXT1};"&gt;{SIMPLETEXT2}&lt;/span&gt;',
	'HTML_REPLACEMENT_EXPLAIN'		=> 'Hér skilgreinir þú sjálfgefna HTML-útskiptingu. Mundu að setja aftur inn tóka sem þú notaðir hér fyrir ofan!',

	'TOKEN'					=> 'Tóki',
	'TOKENS'				=> 'Tókar',
	'TOKENS_EXPLAIN'		=> 'Tókar eru staðgenglar fyrir inntak notenda. Inntakið er aðeins staðfest ef það samsvarar viðkomandi skilgreiningu. Ef þarf má tölusetja þá með tölu sem síðasta staf innan slaufusviganna, t.d. {TEXT1}, {TEXT2}.<br /><br />Í HTML-útskiptingunni má einnig nota hvaða tungumálastreng sem er í language/-möppunni á forminu {L_<em>&lt;STRINGNAME&gt;</em>}, þar sem <em>&lt;STRINGNAME&gt;</em> er heiti þýdda strengsins. Til dæmis birtist {L_WROTE} sem „skrifaði“ eða samsvarandi þýðing á tungumáli notandans.<br /><br /><strong>Athugaðu að aðeins má nota tóka sem taldir eru upp hér fyrir neðan í sérsniðnum BBCode-kóðum.</strong>',
	'TOKEN_DEFINITION'		=> 'Hvað má þetta vera?',
	'TOO_MANY_BBCODES'		=> 'Ekki er hægt að búa til fleiri BBCode-kóða. Fjarlægðu einn eða fleiri og reyndu aftur.',

	'tokens'	=>	array(
		'TEXT'	=> 'Hvaða texti sem er, þar á meðal erlendir stafir, tölur o.s.frv.',
		'SIMPLETEXT'	=> 'Stafir úr latneska stafrófinu (A–Z), tölur, bil, kommur, punktar, mínus, plús, bandstrik og undirstrik',
		'INTTEXT'	=> 'Unicode-bókstafir, tölur, bil, kommur, punktar, mínus, plús, bandstrik, undirstrik og aðrir bilstafir.',
		'IDENTIFIER'	=> 'Stafir úr latneska stafrófinu (A–Z), tölur, bandstrik og undirstrik',
		'NUMBER'	=> 'Hvaða runa tölustafa sem er',
		'EMAIL'	=> 'Gilt netfang',
		'URL'	=> 'Gild vefslóð með leyfðri samskiptareglu (http, ftp o.s.frv.; ekki má nota javascript-árásir). Ef engin samskiptaregla er gefin er „http://“ sett fremst.',
		'LOCAL_URL'	=> 'Staðbundin vefslóð. Hún verður að vera afstæð við umræðusíðuna og má ekki innihalda heiti netþjóns eða samskiptareglu, þar sem „%s“ er sett fremst á tengla.',
		'RELATIVE_URL'	=> 'Afstæð vefslóð. Nota má hana til að samsvara hluta vefslóðar, en gættu að því að full vefslóð telst einnig gild afstæð slóð. Notaðu LOCAL_URL-tókann fyrir afstæðar slóðir spjallborðsins.',
		'COLOR'	=> 'HTML-litur, annaðhvort á talnasniði eins og <samp>#FF1234</samp> eða <a href="http://www.w3.org/TR/CSS21/syndata.html#value-def-color">CSS-litaheiti</a> eins og <samp>fuchsia</samp> eða <samp>InactiveBorder</samp>',
		'ALNUM'	=> 'Stafir úr latneska stafrófinu (A–Z) og tölur.',
		'CHOICE'	=> 'Eitt af tilgreindum gildum, t.d. <samp>{CHOICE=spades,hearts,diamonds,clubs}</samp>. Sjálfgefið er ekki gerður greinarmunur á há- og lágstöfum; virkja má hann með <samp>caseSensitive</samp>: <samp>{CHOICE=Spades,Hearts,Diamonds,Clubs;caseSensitive}</samp>',
		'FLOAT'	=> 'Tugabrot, t.d. <samp>0.5</samp>.',
		'HASHMAP'	=> 'Varpar strengjum yfir í staðgildi á forminu <samp>{HASHMAP=string1:replacement1,string2:replacement2}</samp>. Greinir há- og lágstafi og varðveitir sjálfgefið óþekkt gildi.',
		'INT'	=> 'Heiltala, t.d. <samp>2</samp>.',
		'IP'	=> 'Gilt IPv4- eða IPv6-vistfang.',
		'IPPORT'	=> 'Gilt IPv4- eða IPv6-vistfang með gáttarnúmeri.',
		'IPV4'	=> 'Gilt IPv4-vistfang.',
		'IPV6'	=> 'Gilt IPv6-vistfang.',
		'MAP'	=> 'Varpar strengjum yfir í staðgildi á forminu <samp>{MAP=string1:replacement1,string2:replacement2}</samp>. Greinir ekki há- og lágstafi og varðveitir sjálfgefið óþekkt gildi.',
		'RANGE'	=> 'Tekur við heiltölu á gefnu bili, t.d. <samp>{RANGE=-10,42}</samp>.',
		'REGEXP'	=> 'Staðfestir gildið með reglulegri segð, t.d. <samp>{REGEXP=/^foo\\w+bar$/}</samp>.',
		'TIMESTAMP'	=> 'Tímamerki eins og <samp>1h30m10s</samp> sem er umbreytt í fjölda sekúndna. Tekur einnig við tölu.',
		'UINT'	=> 'Óneikvæð heiltala. Sama og <samp>{INT}</samp>, en hafnar gildum undir 0.',
	),
));

// Smilies and topic icons
$lang = array_merge($lang, array(
	'ACP_ICONS_EXPLAIN'		=> 'Á þessari síðu getur þú bætt við, fjarlægt og breytt táknum sem notendur mega setja við umræður eða færslur. Táknin birtast venjulega við heiti umræðna í yfirliti spjallsvæðis eða við efni færslna í umræðulistum. Einnig getur þú sett upp og búið til nýja táknpakka.',
	'ACP_SMILIES_EXPLAIN'	=> 'Broskarlar eru yfirleitt litlar, stundum hreyfimyndir sem tjá tilfinningu. Á þessari síðu getur þú bætt við, fjarlægt og breytt broskörlum sem notendur mega nota í færslum og einkaskilaboðum. Einnig getur þú sett upp og búið til nýja broskarlapakka.',
	'ADD_SMILIES'			=> 'Bæta við mörgum broskörlum',
	'ADD_SMILEY_CODE'		=> 'Bæta við aukakóða fyrir broskarl',
	'ADD_ICONS'				=> 'Bæta við mörgum táknum',
	'AFTER_ICONS'			=> 'Á eftir %s',
	'AFTER_SMILIES'			=> 'Á eftir %s',

	'CODE'						=> 'Kóði',
	'CURRENT_ICONS'				=> 'Núverandi tákn',
	'CURRENT_ICONS_EXPLAIN'		=> 'Veldu hvað gera á við táknin sem eru uppsett.',
	'CURRENT_SMILIES'			=> 'Núverandi broskarlar',
	'CURRENT_SMILIES_EXPLAIN'	=> 'Veldu hvað gera á við broskarlana sem eru uppsettir.',

	'DISPLAY_ON_POSTING'		=> 'Birta á færslusíðu',
	'DISPLAY_POSTING'			=> 'Á færslusíðu',
	'DISPLAY_POSTING_NO'		=> 'Ekki á færslusíðu',

	'EDIT_ICONS'				=> 'Breyta táknum',
	'EDIT_SMILIES'				=> 'Breyta broskörlum',
	'EMOTION'					=> 'Tilfinning',
	'EXPORT_ICONS'				=> 'Flytja út og sækja icons.pak',
	'EXPORT_ICONS_EXPLAIN'		=> '%sÞegar smellt er á þennan tengil verður stillingum uppsettra tákna pakkað í <samp>icons.pak</samp>. Eftir niðurhal má nota skrána til að búa til <samp>.zip</samp>- eða <samp>.tgz</samp>-skrá með öllum táknunum og stillingaskránni <samp>icons.pak</samp>%s.',
	'EXPORT_SMILIES'			=> 'Flytja út og sækja smilies.pak',
	'EXPORT_SMILIES_EXPLAIN'	=> '%sÞegar smellt er á þennan tengil verður stillingum uppsettra broskarla pakkað í <samp>smilies.pak</samp>. Eftir niðurhal má nota skrána til að búa til <samp>.zip</samp>- eða <samp>.tgz</samp>-skrá með öllum broskörlunum og stillingaskránni <samp>smilies.pak</samp>%s.',

	'FIRST'			=> 'Fyrst',

	'ICONS_ADD'				=> 'Bæta við nýju tákni',
	'ICONS_ADDED'			=> array(
		0	=> 'Engum táknum var bætt við.',
		1	=> 'Tákninu var bætt við.',
		2	=> 'Táknunum var bætt við.',
	),
	'ICONS_CONFIG'			=> 'Stillingar tákna',
	'ICONS_DELETED'			=> 'Táknið var fjarlægt.',
	'ICONS_EDIT'			=> 'Breyta tákni',
	'ICONS_EDITED'			=> array(
		0	=> 'Engin tákn voru uppfærð.',
		1	=> 'Táknið var uppfært.',
		2	=> 'Táknin voru uppfærð.',
	),
	'ICONS_HEIGHT'			=> 'Hæð tákns',
	'ICONS_IMAGE'			=> 'Mynd tákns',
	'ICONS_IMPORTED'		=> 'Táknpakkinn var settur upp.',
	'ICONS_IMPORT_SUCCESS'	=> 'Táknpakkinn var fluttur inn.',
	'ICONS_LOCATION'		=> 'Staðsetning tákns',
	'ICONS_NOT_DISPLAYED'	=> 'Eftirfarandi tákn birtast ekki á færslusíðunni',
	'ICONS_ORDER'			=> 'Röð tákna',
	'ICONS_URL'				=> 'Myndskrá tákns',
	'ICONS_WIDTH'			=> 'Breidd tákns',
	'IMPORT_ICONS'			=> 'Setja upp táknpakka',
	'IMPORT_SMILIES'		=> 'Setja upp broskarlapakka',

	'KEEP_ALL'			=> 'Halda öllu',

	'MASS_ADD_SMILIES'	=> 'Bæta við mörgum broskörlum',

	'NO_ICONS_ADD'		=> 'Engin tákn eru tiltæk til viðbótar.',
	'NO_ICONS_EDIT'		=> 'Engin tákn eru tiltæk til breytinga.',
	'NO_ICONS_EXPORT'	=> 'Engin tákn eru til sem hægt er að búa til pakka úr.',
	'NO_ICONS_PAK'		=> 'Engir táknpakkar fundust.',
	'NO_SMILIES_ADD'	=> 'Engir broskarlar eru tiltækir til viðbótar.',
	'NO_SMILIES_EDIT'	=> 'Engir broskarlar eru tiltækir til breytinga.',
	'NO_SMILIES_EXPORT'	=> 'Engir broskarlar eru til sem hægt er að búa til pakka úr.',
	'NO_SMILIES_PAK'	=> 'Engir broskarlapakkar fundust.',

	'PAK_FILE_NOT_READABLE'		=> 'Ekki var hægt að lesa <samp>.pak</samp>-skrána.',

	'REPLACE_MATCHES'	=> 'Skipta út samsvörunum',

	'SELECT_PACKAGE'			=> 'Veldu pakkaskrá',
	'SMILIES_ADD'				=> 'Bæta við nýjum broskarli',
	'SMILIES_ADDED'				=> array(
		0	=> 'Engum broskörlum var bætt við.',
		1	=> 'Broskarlinum var bætt við.',
		2	=> 'Broskörlunum var bætt við.',
	),
	'SMILIES_CODE'				=> 'Kóði broskarls',
	'SMILIES_CONFIG'			=> 'Stillingar broskarla',
	'SMILIES_DELETED'			=> 'Broskarlinn var fjarlægður.',
	'SMILIES_EDIT'				=> 'Breyta broskarli',
	'SMILIE_NO_CODE'			=> 'Broskarlinn „%s“ var hunsaður þar sem enginn kóði var sleginn inn.',
	'SMILIE_NO_EMOTION'			=> 'Broskarlinn „%s“ var hunsaður þar sem engin tilfinning var valin.',
	'SMILIE_NO_FILE'			=> 'Broskarlinn „%s“ var hunsaður þar sem skrána vantar.',
	'SMILIES_EDITED'			=> array(
		0	=> 'Engir broskarlar voru uppfærðir.',
		1	=> 'Broskarlinn var uppfærður.',
		2	=> 'Broskarlarnir voru uppfærðir.',
	),
	'SMILIES_EMOTION'			=> 'Tilfinning',
	'SMILIES_HEIGHT'			=> 'Hæð broskarls',
	'SMILIES_IMAGE'				=> 'Mynd broskarls',
	'SMILIES_IMPORTED'			=> 'Broskarlapakkinn var settur upp.',
	'SMILIES_IMPORT_SUCCESS'	=> 'Broskarlapakkinn var fluttur inn.',
	'SMILIES_LOCATION'			=> 'Staðsetning broskarls',
	'SMILIES_NOT_DISPLAYED'		=> 'Eftirfarandi broskarlar birtast ekki á færslusíðunni',
	'SMILIES_ORDER'				=> 'Röð broskarla',
	'SMILIES_URL'				=> 'Myndskrá broskarls',
	'SMILIES_WIDTH'				=> 'Breidd broskarls',

	'TOO_MANY_SMILIES'			=> array(
		1	=> 'Hámarkinu %d broskarl hefur verið náð.',
		2	=> 'Hámarkinu %d broskarlar hefur verið náð.',
	),

	'WRONG_PAK_TYPE'	=> 'Tilgreindur pakki inniheldur ekki viðeigandi gögn.',
));

// Word censors
$lang = array_merge($lang, array(
	'ACP_WORDS_EXPLAIN'		=> 'Á þessu stjórnborði getur þú bætt við, breytt og fjarlægt orð sem verða sjálfkrafa ritskoðuð á spjallsvæðunum. Fólk má samt skrá notandanöfn sem innihalda þessi orð. Algildisstafurinn * er leyfður í orðareitnum; t.d. samsvarar *test* orðinu detestable, test* samsvarar testing og *test samsvarar detest.',
	'ADD_WORD'				=> 'Bæta við nýju orði',

	'EDIT_WORD'		=> 'Breyta ritskoðuðu orði',
	'ENTER_WORD'	=> 'Þú verður að slá inn orð og staðgildi þess.',

	'NO_WORD'	=> 'Ekkert orð valið til breytinga.',

	'REPLACEMENT'	=> 'Staðgildi',

	'UPDATE_WORD'	=> 'Uppfæra ritskoðað orð',

	'WORD'				=> 'Orð',
	'WORD_ADDED'		=> 'Ritskoðaða orðinu var bætt við.',
	'WORD_REMOVED'		=> 'Valda ritskoðaða orðið var fjarlægt.',
	'WORD_UPDATED'		=> 'Valda ritskoðaða orðið var uppfært.',
));

// Ranks
$lang = array_merge($lang, array(
	'ACP_RANKS_EXPLAIN'		=> 'Með þessu eyðublaði getur þú bætt við, breytt, skoðað og eytt tignum. Einnig má búa til sérstakar tignir sem hægt er að úthluta notanda í notendastjórnun.',
	'ADD_RANK'				=> 'Bæta við nýrri tign',

	'MUST_SELECT_RANK'		=> 'Þú verður að velja tign.',

	'NO_ASSIGNED_RANK'		=> 'Engin sérstök tign valin.',
	'NO_RANK_TITLE'			=> 'Þú hefur ekki tilgreint heiti tignarinnar.',
	'NO_UPDATE_RANKS'		=> 'Tigninni var eytt en notandareikningar sem nota hana voru ekki uppfærðir. Þú verður að endurstilla tign þessara reikninga handvirkt.',

	'RANK_ADDED'			=> 'Tigninni var bætt við.',
	'RANK_IMAGE'			=> 'Mynd tignar',
	'RANK_IMAGE_EXPLAIN'	=> 'Hér skilgreinir þú litla mynd sem tengist tigninni. Slóðin er afstæð við rótarmöppu phpBB.',
	'RANK_IMAGE_IN_USE'		=> '(Í notkun)',
	'RANK_MINIMUM'			=> 'Lágmarksfjöldi færslna',
	'RANK_REMOVED'			=> 'Tigninni var eytt.',
	'RANK_SPECIAL'			=> 'Gera að sérstakri tign',
	'RANK_TITLE'			=> 'Heiti tignar',
	'RANK_UPDATED'			=> 'Tignin var uppfærð.',
));

// Disallow Usernames
$lang = array_merge($lang, array(
	'ACP_DISALLOW_EXPLAIN'	=> 'Hér getur þú stjórnað notandanöfnum sem ekki má nota. Óleyfileg notandanöfn mega innihalda algildisstafinn *.',
	'ADD_DISALLOW_EXPLAIN'	=> 'Þú getur bannað notandanafn og notað algildisstafinn * til að samsvara hvaða staf sem er.',
	'ADD_DISALLOW_TITLE'	=> 'Bæta við óleyfilegu notandanafni',

	'DELETE_DISALLOW_EXPLAIN'	=> 'Þú getur fjarlægt óleyfilegt notandanafn með því að velja það af listanum og smella á Senda.',
	'DELETE_DISALLOW_TITLE'		=> 'Fjarlægja óleyfilegt notandanafn',
	'DISALLOWED_ALREADY'		=> 'Nafnið sem þú slóst inn er þegar óleyfilegt.',
	'DISALLOWED_DELETED'		=> 'Óleyfilega notandanafnið var fjarlægt.',
	'DISALLOW_SUCCESSFUL'		=> 'Óleyfilega notandanafninu var bætt við.',

	'NO_DISALLOWED'				=> 'Engin óleyfileg notandanöfn',
	'NO_USERNAME_SPECIFIED'		=> 'Þú hefur hvorki valið né slegið inn notandanafn.',
));

// Reasons
$lang = array_merge($lang, array(
	'ACP_REASONS_EXPLAIN'	=> 'Hér getur þú stjórnað ástæðum sem notaðar eru í tilkynningum og höfnunarskilaboðum þegar færslum er hafnað. Ein sjálfgefin ástæða, merkt með *, er ekki fjarlægjanleg og er venjulega notuð fyrir sérsniðin skilaboð þegar engin önnur ástæða á við.',
	'ADD_NEW_REASON'		=> 'Bæta við nýrri ástæðu',
	'AVAILABLE_TITLES'		=> 'Tiltæk staðfærð heiti ástæðna',

	'IS_NOT_TRANSLATED'			=> 'Ástæðan hefur <strong>ekki</strong> verið staðfærð.',
	'IS_NOT_TRANSLATED_EXPLAIN'	=> 'Ástæðan hefur <strong>ekki</strong> verið staðfærð. Til að gefa upp staðfærða útgáfu skaltu tilgreina rétta lykilinn úr hluta tungumálaskránna fyrir tilkynningarástæður.',
	'IS_TRANSLATED'				=> 'Ástæðan hefur verið staðfærð.',
	'IS_TRANSLATED_EXPLAIN'		=> 'Ástæðan hefur verið staðfærð. Ef heitið sem þú slærð inn er skilgreint í hluta tungumálaskránna fyrir tilkynningarástæður verður staðfærð útgáfa heitis og lýsingar notuð.',

	'NO_REASON'					=> 'Ástæðan fannst ekki.',
	'NO_REASON_INFO'			=> 'Þú verður að tilgreina heiti og lýsingu fyrir ástæðuna.',
	'NO_REMOVE_DEFAULT_REASON'	=> 'Ekki er hægt að fjarlægja sjálfgefnu ástæðuna „Annað“.',

	'REASON_ADD'				=> 'Bæta við ástæðu tilkynningar/höfnunar',
	'REASON_ADDED'				=> 'Ástæðu tilkynningar/höfnunar var bætt við.',
	'REASON_ALREADY_EXIST'		=> 'Ástæða með þessu heiti er þegar til; sláðu inn annað heiti.',
	'REASON_DESCRIPTION'		=> 'Lýsing ástæðu',
	'REASON_DESC_TRANSLATED'	=> 'Birt lýsing ástæðu',
	'REASON_EDIT'				=> 'Breyta ástæðu tilkynningar/höfnunar',
	'REASON_EDIT_EXPLAIN'		=> 'Hér getur þú bætt við eða breytt ástæðu. Ef ástæðan er þýdd er staðfærða útgáfan notuð í stað lýsingarinnar sem slegin er inn hér.',
	'REASON_REMOVED'			=> 'Ástæða tilkynningar/höfnunar var fjarlægð.',
	'REASON_TITLE'				=> 'Heiti ástæðu',
	'REASON_TITLE_TRANSLATED'	=> 'Birt heiti ástæðu',
	'REASON_UPDATED'			=> 'Ástæða tilkynningar/höfnunar var uppfærð.',

	'USED_IN_REPORTS'		=> 'Notað í tilkynningum',
));
