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

$lang = array_merge($lang, array(
	'HELP_FAQ_ATTACHMENTS_ALLOWED_ANSWER'	=> 'Kerfisstjóri hvers spjallborðs getur leyft eða bannað tilteknar tegundir viðhengja. Ef þú ert ekki viss um hvað má hlaða upp skaltu hafa samband við kerfisstjóra spjallborðsins.',
	'HELP_FAQ_ATTACHMENTS_ALLOWED_QUESTION'	=> 'Hvaða viðhengi eru leyfð á þessu spjallborði?',
	'HELP_FAQ_ATTACHMENTS_OWN_ANSWER'	=> 'Til að sjá lista yfir viðhengi sem þú hefur hlaðið upp skaltu fara á stjórnborð notanda og velja hlutann Viðhengi.',
	'HELP_FAQ_ATTACHMENTS_OWN_QUESTION'	=> 'Hvernig finn ég öll viðhengin mín?',

	'HELP_FAQ_BLOCK_ATTACHMENTS'	=> 'Viðhengi',
	'HELP_FAQ_BLOCK_BOOKMARKS'	=> 'Áskriftir og bókamerki',
	'HELP_FAQ_BLOCK_FORMATTING'	=> 'Snið og tegundir umræðna',
	'HELP_FAQ_BLOCK_FRIENDS'	=> 'Vinir og óvinir',
	'HELP_FAQ_BLOCK_GROUPS'	=> 'Notendastig og hópar',
	'HELP_FAQ_BLOCK_ISSUES'	=> 'Atriði varðandi phpBB',
	'HELP_FAQ_BLOCK_LOGIN'	=> 'Vandamál við innskráningu og skráningu',
	'HELP_FAQ_BLOCK_PMS'	=> 'Einkaskilaboð',
	'HELP_FAQ_BLOCK_POSTING'	=> 'Vandamál við færslur',
	'HELP_FAQ_BLOCK_SEARCH'	=> 'Leit á spjallsvæðunum',
	'HELP_FAQ_BLOCK_USERSETTINGS'	=> 'Kjörstillingar og stillingar notanda',

	'HELP_FAQ_BOOKMARKS_DIFFERENCE_ANSWER'	=> 'Í phpBB 3.0 virkuðu bókamerki umræðna svipað og bókamerki í vafra og engin tilkynning barst við uppfærslu. Frá phpBB 3.1 líkist bókamerki frekar áskrift að umræðu og hægt er að fá tilkynningu þegar bókamerkt umræða er uppfærð. Áskrift tilkynnir hins vegar um uppfærslur á umræðu eða spjallsvæði. Hægt er að stilla tilkynningar fyrir bókamerki og áskriftir á stjórnborði notanda undir „Stillingar spjallborðs“.',
	'HELP_FAQ_BOOKMARKS_DIFFERENCE_QUESTION'	=> 'Hver er munurinn á bókamerki og áskrift?',
	'HELP_FAQ_BOOKMARKS_FORUM_ANSWER'	=> 'Til að gerast áskrifandi að tilteknu spjallsvæði skaltu opna það og smella á tengilinn „Gerast áskrifandi að spjallsvæði“ neðst á síðunni.',
	'HELP_FAQ_BOOKMARKS_FORUM_QUESTION'	=> 'Hvernig gerist ég áskrifandi að tilteknum spjallsvæðum?',
	'HELP_FAQ_BOOKMARKS_REMOVE_ANSWER'	=> 'Til að fjarlægja áskriftir skaltu fara á stjórnborð notanda og velja Áskriftir.',
	'HELP_FAQ_BOOKMARKS_REMOVE_QUESTION'	=> 'Hvernig fjarlægi ég áskriftir?',
	'HELP_FAQ_BOOKMARKS_TOPIC_ANSWER'	=> 'Þú getur bókamerkt eða gerst áskrifandi að tiltekinni umræðu með viðeigandi tengli í valmyndinni „Umræðuverkfæri“, sem er nálægt efri og neðri hluta umræðunnar.<br />Ef þú svarar umræðu með valkostinn „Láta mig vita þegar svar berst“ merktan gerist þú einnig áskrifandi að henni.',
	'HELP_FAQ_BOOKMARKS_TOPIC_QUESTION'	=> 'Hvernig bókamerki ég eða gerist áskrifandi að tilteknum umræðum?',

	'HELP_FAQ_FORMATTING_ANNOUNCEMENT_ANSWER'	=> 'Tilkynningar innihalda oft mikilvægar upplýsingar um spjallsvæðið sem þú ert að lesa og þú ættir að lesa þær þegar mögulegt er. Þær birtast efst á hverri síðu spjallsvæðisins þar sem þær voru birtar. Kerfisstjóri spjallborðsins veitir heimild til að birta tilkynningar, rétt eins og almennar tilkynningar.',
	'HELP_FAQ_FORMATTING_ANNOUNCEMENT_QUESTION'	=> 'Hvað eru tilkynningar?',
	'HELP_FAQ_FORMATTING_BBOCDE_ANSWER'	=> 'BBCode er sérstök útfærsla á HTML sem veitir mikla stjórn á sniði efnis í færslu. Kerfisstjóri veitir heimild til notkunar BBCode en einnig er hægt að gera það óvirkt fyrir einstaka færslu á færslueyðublaðinu. BBCode svipar til HTML, en merki eru innan hornklofa [ og ] í stað &lt; og &gt;. Nánari upplýsingar eru í BBCode-leiðbeiningunum sem hægt er að opna af færslusíðunni.',
	'HELP_FAQ_FORMATTING_BBOCDE_QUESTION'	=> 'Hvað er BBCode?',
	'HELP_FAQ_FORMATTING_GLOBAL_ANNOUNCE_ANSWER'	=> 'Almennar tilkynningar innihalda mikilvægar upplýsingar og þú ættir að lesa þær þegar mögulegt er. Þær birtast efst á öllum spjallsvæðum og á stjórnborði notanda. Kerfisstjóri spjallborðsins veitir heimild til að birta almennar tilkynningar.',
	'HELP_FAQ_FORMATTING_GLOBAL_ANNOUNCE_QUESTION'	=> 'Hvað eru almennar tilkynningar?',
	'HELP_FAQ_FORMATTING_HTML_ANSWER'	=> 'Nei. Ekki er hægt að birta HTML á þessu spjallborði þannig að það sé túlkað sem HTML. Flest snið sem hægt er að gera með HTML er hægt að framkvæma með BBCode í staðinn.',
	'HELP_FAQ_FORMATTING_HTML_QUESTION'	=> 'Get ég notað HTML?',
	'HELP_FAQ_FORMATTING_ICONS_ANSWER'	=> 'Umræðutákn eru myndir sem höfundur velur og tengjast færslum til að gefa efni þeirra til kynna. Heimildir sem kerfisstjóri spjallborðsins stillir ráða því hvort hægt er að nota umræðutákn.',
	'HELP_FAQ_FORMATTING_ICONS_QUESTION'	=> 'Hvað eru umræðutákn?',
	'HELP_FAQ_FORMATTING_IMAGES_ANSWER'	=> 'Já, hægt er að sýna myndir í færslum. Ef kerfisstjóri hefur leyft viðhengi getur þú hlaðið myndinni upp á spjallborðið. Annars verður þú að tengja við mynd á opinberlega aðgengilegum vefþjóni, til dæmis http://www.example.com/my-picture.gif. Ekki er hægt að tengja við myndir á eigin tölvu nema hún sé opinber vefþjónn, né myndir á bak við auðkenningu, svo sem í Hotmail- eða Yahoo-pósthólfum eða á lykilorðsvarinni síðu. Notaðu BBCode-merkið [img] til að birta myndina.',
	'HELP_FAQ_FORMATTING_IMAGES_QUESTION'	=> 'Get ég birt myndir?',
	'HELP_FAQ_FORMATTING_LOCKED_ANSWER'	=> 'Notendur geta ekki lengur svarað læstum umræðum og öllum skoðanakönnunum í þeim er sjálfkrafa lokið. Umræðum má læsa af ýmsum ástæðum og stjórnandi spjallsvæðis eða kerfisstjóri spjallborðs gerir það. Þú kannt einnig að geta læst eigin umræðum, eftir heimildum sem kerfisstjóri hefur veitt.',
	'HELP_FAQ_FORMATTING_LOCKED_QUESTION'	=> 'Hvað eru læstar umræður?',
	'HELP_FAQ_FORMATTING_SMILIES_ANSWER'	=> 'Broskarlar, eða tjákn, eru litlar myndir sem tjá tilfinningu með stuttum kóða; til dæmis táknar :) gleði og :( sorg. Allur listinn birtist á færslueyðublaðinu. Ekki ofnota broskarla því þeir geta fljótt gert færslu ólæsilega og stjórnandi kann að fjarlægja þá eða alla færsluna. Kerfisstjóri spjallborðsins kann einnig að hafa takmarkað fjölda broskarla í færslu.',
	'HELP_FAQ_FORMATTING_SMILIES_QUESTION'	=> 'Hvað eru broskarlar?',
	'HELP_FAQ_FORMATTING_STICKIES_ANSWER'	=> 'Límdar umræður birtast fyrir neðan tilkynningar og aðeins á fyrstu síðu spjallsvæðisins. Þær eru oft mikilvægar og því ættir þú að lesa þær þegar mögulegt er. Kerfisstjóri spjallborðsins veitir heimild til að líma umræður, rétt eins og tilkynningar og almennar tilkynningar.',
	'HELP_FAQ_FORMATTING_STICKIES_QUESTION'	=> 'Hvað eru límdar umræður?',

	'HELP_FAQ_FRIENDS_BASIC_ANSWER'	=> 'Þú getur notað þessa lista til að skipuleggja aðra meðlimi spjallborðsins. Meðlimir sem bætt er á vinalistann þinn birtast á stjórnborði notanda, svo auðvelt sé að sjá hvort þeir séu tengdir og senda þeim einkaskilaboð. Ef sniðmátið styður það kunna færslur frá þessum notendum einnig að vera auðkenndar. Ef þú bætir notanda á óvinalistann þinn eru færslur hans sjálfgefið faldar.',
	'HELP_FAQ_FRIENDS_BASIC_QUESTION'	=> 'Hvað eru vina- og óvinalistarnir mínir?',
	'HELP_FAQ_FRIENDS_MANAGE_ANSWER'	=> 'Þú getur bætt notendum á listann þinn með tvennum hætti. Á notandasíðu hvers notanda er tengill til að bæta honum annaðhvort á vina- eða óvinalistann. Einnig geturðu farið á stjórnborð notanda og bætt notendum beint við með því að slá inn meðlimanafn þeirra. Á sömu síðu geturðu einnig fjarlægt notendur af listanum.',
	'HELP_FAQ_FRIENDS_MANAGE_QUESTION'	=> 'Hvernig bæti ég notendum á vina- eða óvinalistann eða fjarlægi þá af honum?',

	'HELP_FAQ_GROUPS_ADMINISTRATORS_ANSWER'	=> 'Kerfisstjórar eru meðlimir sem hafa æðsta stjórnunarstig yfir öllu spjallborðinu. Þeir geta stjórnað öllum þáttum reksturs spjallborðsins, meðal annars stillt heimildir, bannað notendur, stofnað notendahópa eða tilnefnt stjórnendur, allt eftir ákvörðun stofnanda spjallborðsins og þeim heimildum sem hann hefur veitt öðrum kerfisstjórum. Þeir kunna einnig að hafa fullar stjórnandaheimildir á öllum spjallsvæðum, eftir stillingum stofnandans.',
	'HELP_FAQ_GROUPS_ADMINISTRATORS_QUESTION'	=> 'Hvað eru kerfisstjórar?',
	'HELP_FAQ_GROUPS_COLORS_ANSWER'	=> 'Kerfisstjóri spjallborðsins getur úthlutað meðlimum notendahóps lit svo auðvelt sé að þekkja meðlimi hópsins.',
	'HELP_FAQ_GROUPS_COLORS_QUESTION'	=> 'Af hverju birtast sumir notendahópar í öðrum lit?',
	'HELP_FAQ_GROUPS_DEFAULT_ANSWER'	=> 'Ef þú tilheyrir fleiri en einum notendahópi ræður sjálfgefni hópurinn hvaða hóplitur og hópstaða birtast sjálfgefið hjá þér. Kerfisstjóri spjallborðsins kann að veita þér heimild til að breyta sjálfgefnum notendahópi á stjórnborði notanda.',
	'HELP_FAQ_GROUPS_DEFAULT_QUESTION'	=> 'Hvað er „sjálfgefinn notendahópur“?',
	'HELP_FAQ_GROUPS_MODERATORS_ANSWER'	=> 'Stjórnendur eru einstaklingar (eða hópar einstaklinga) sem sjá daglega um spjallsvæðin. Þeir hafa heimild til að breyta eða eyða færslum og læsa, opna, færa, eyða og skipta umræðum á spjallsvæðinu sem þeir stjórna. Almennt er hlutverk stjórnenda að koma í veg fyrir að notendur víki út fyrir efnið eða birti móðgandi eða særandi efni.',
	'HELP_FAQ_GROUPS_MODERATORS_QUESTION'	=> 'Hvað eru stjórnendur?',
	'HELP_FAQ_GROUPS_TEAM_ANSWER'	=> 'Þessi síða sýnir lista yfir starfslið spjallborðsins, þar á meðal kerfisstjóra og stjórnendur, auk annarra upplýsinga eins og hvaða spjallsvæðum þeir stjórna.',
	'HELP_FAQ_GROUPS_TEAM_QUESTION'	=> 'Hvað er tengillinn „Stjórnendur“?',
	'HELP_FAQ_GROUPS_USERGROUPS_ANSWER'	=> 'Notendahópar eru hópar notenda sem skipta samfélaginu í viðráðanlega hluta sem kerfisstjórar spjallborðsins geta unnið með. Hver notandi getur tilheyrt mörgum hópum og hverjum hópi má úthluta sérstökum heimildum. Þannig geta kerfisstjórar auðveldlega breytt heimildum margra notenda í einu, til dæmis breytt stjórnandaheimildum eða veitt notendum aðgang að lokuðu spjallsvæði.',
	'HELP_FAQ_GROUPS_USERGROUPS_JOIN_ANSWER'	=> 'Þú getur skoðað alla notendahópa með tenglinum „Hópar“ á stjórnborði notanda. Ef þú vilt ganga í hóp skaltu smella á viðeigandi hnapp. Aðgangur að öllum hópum er þó ekki opinn. Sumir krefjast samþykkis, sumir eru lokaðir og aðild að öðrum kann jafnvel að vera falin. Ef hópur er opinn getur þú gengið í hann með því að smella á viðeigandi hnapp. Ef samþykki þarf getur þú óskað eftir aðild með viðeigandi hnappi. Hópstjóri þarf að samþykkja beiðnina og kann að spyrja hvers vegna þú viljir ganga í hópinn. Ekki áreita hópstjóra ef hann hafnar beiðninni; hann hefur sínar ástæður.',
	'HELP_FAQ_GROUPS_USERGROUPS_JOIN_QUESTION'	=> 'Hvar eru notendahóparnir og hvernig geng ég í hóp?',
	'HELP_FAQ_GROUPS_USERGROUPS_LEAD_ANSWER'	=> 'Hópstjóri er yfirleitt tilnefndur þegar kerfisstjóri spjallborðsins stofnar notendahóp. Ef þú hefur áhuga á að stofna notendahóp skaltu fyrst hafa samband við kerfisstjóra, til dæmis með einkaskilaboðum.',
	'HELP_FAQ_GROUPS_USERGROUPS_LEAD_QUESTION'	=> 'Hvernig verð ég hópstjóri?',
	'HELP_FAQ_GROUPS_USERGROUPS_QUESTION'	=> 'Hvað eru notendahópar?',

	'HELP_FAQ_ISSUES_ADMIN_ANSWER'	=> 'Allir notendur spjallborðsins geta notað eyðublaðið „Hafa samband“, ef kerfisstjóri hefur virkjað það.<br />Meðlimir geta einnig notað tengilinn „Teymið“.',
	'HELP_FAQ_ISSUES_ADMIN_QUESTION'	=> 'Hvernig hef ég samband við kerfisstjóra spjallborðsins?',
	'HELP_FAQ_ISSUES_FEATURE_ANSWER'	=> 'Hugbúnaðurinn var skrifaður af phpBB Limited og er veittur með leyfi þess. Ef þú telur að bæta þurfi eiginleika við skaltu heimsækja <a href="https://www.phpbb.com/ideas/">hugmyndamiðstöð phpBB</a>, þar sem hægt er að styðja hugmyndir sem þegar eru til eða leggja til nýja eiginleika.',
	'HELP_FAQ_ISSUES_FEATURE_QUESTION'	=> 'Hvers vegna er eiginleikinn X ekki tiltækur?',
	'HELP_FAQ_ISSUES_LEGAL_ANSWER'	=> 'Einhver kerfisstjóranna á síðunni „Teymið“ ætti að vera réttur tengiliður vegna kvartana. Ef ekkert svar berst skaltu hafa samband við eiganda lénsins (gerðu <a href="http://www.google.com/search?q=whois">WHOIS-leit</a>) eða, ef vefurinn er á ókeypis þjónustu, stjórnendur eða misnotkunardeild þeirrar þjónustu. Athugaðu að phpBB Limited hefur <strong>alls ekkert lögsagnarumboð</strong> og ber enga ábyrgð á því hvernig, hvar eða af hverjum spjallborðið er notað. Ekki hafa samband við phpBB Limited vegna lagalegra mála sem tengjast <strong>ekki beint</strong> phpBB.com eða sjálfum phpBB-hugbúnaðinum. Ef þú sendir phpBB Limited tölvupóst um notkun þriðja aðila á hugbúnaðinum má búast við stuttu svari eða engu svari.',
	'HELP_FAQ_ISSUES_LEGAL_QUESTION'	=> 'Við hvern hef ég samband vegna misnotkunar eða lagalegra mála sem tengjast þessu spjallborði?',
	'HELP_FAQ_ISSUES_WHOIS_PHPBB_ANSWER'	=> 'Þessi hugbúnaður, í óbreyttri mynd, er framleiddur og gefinn út af <a href="https://www.phpbb.com/">phpBB Limited</a>, sem á höfundarréttinn. Hann er veittur samkvæmt GNU General Public License, útgáfu 2 (GPL-2.0), og má dreifa frjálst. Nánari upplýsingar eru á <a href="https://www.phpbb.com/about/">Um phpBB</a>.',
	'HELP_FAQ_ISSUES_WHOIS_PHPBB_QUESTION'	=> 'Hver skrifaði þennan spjallborðshugbúnað?',

	'HELP_FAQ_LOGIN_AUTO_LOGOUT_ANSWER'	=> 'Ef þú merkir ekki við <em>Muna eftir mér</em> við innskráningu heldur spjallborðið innskráningunni aðeins virkri í fyrirfram ákveðinn tíma. Þetta kemur í veg fyrir að aðrir misnoti aðganginn þinn. Til að halda innskráningu virkri skaltu merkja við <em>Muna eftir mér</em> við innskráningu. Ekki er mælt með þessu ef þú opnar spjallborðið í samnýttri tölvu, til dæmis á bókasafni, netkaffihúsi eða tölvuveri háskóla. Ef þessi valreitur birtist ekki hefur kerfisstjóri spjallborðsins gert eiginleikann óvirkan.',
	'HELP_FAQ_LOGIN_AUTO_LOGOUT_QUESTION'	=> 'Hvers vegna skráist ég sjálfkrafa út?',
	'HELP_FAQ_LOGIN_CANNOT_LOGIN_ANSWER'	=> 'Þetta getur gerst af ýmsum ástæðum. Gakktu fyrst úr skugga um að notandanafn og lykilorð séu rétt. Ef svo er skaltu hafa samband við kerfisstjóra spjallborðsins til að ganga úr skugga um að þú hafir ekki verið sett í bann. Einnig er hugsanlegt að stillingarvilla sé hjá eiganda vefsvæðisins og hann þurfi að laga hana.',
	'HELP_FAQ_LOGIN_CANNOT_LOGIN_ANYMORE_ANSWER'	=> 'Kerfisstjóri kann að hafa gert aðganginn þinn óvirkan eða eytt honum af einhverri ástæðu. Mörg spjallborð fjarlægja einnig reglulega notendur sem hafa ekki sent inn færslur lengi til að minnka gagnagrunninn. Ef þetta hefur gerst skaltu reyna að skrá þig aftur og taka virkari þátt í umræðum.',
	'HELP_FAQ_LOGIN_CANNOT_LOGIN_ANYMORE_QUESTION'	=> 'Ég skráði mig áður en get ekki lengur skráð mig inn!',
	'HELP_FAQ_LOGIN_CANNOT_LOGIN_QUESTION'	=> 'Hvers vegna get ég ekki skráð mig inn?',
	'HELP_FAQ_LOGIN_CANNOT_REGISTER_ANSWER'	=> 'Kerfisstjóri spjallborðsins kann að hafa gert skráningar óvirkar til að koma í veg fyrir að nýir gestir skrái sig. Kerfisstjóri kann einnig að hafa bannað IP-töluna þína eða óheimilað notandanafnið sem þú reynir að skrá. Hafðu samband við kerfisstjóra spjallborðsins til að fá aðstoð.',
	'HELP_FAQ_LOGIN_CANNOT_REGISTER_QUESTION'	=> 'Hvers vegna get ég ekki skráð mig?',
	'HELP_FAQ_LOGIN_COPPA_ANSWER'	=> 'COPPA, eða Children’s Online Privacy Protection Act frá 1998, eru bandarísk lög sem krefjast þess að vefsvæði sem kunna að safna upplýsingum frá börnum yngri en 13 ára afli skriflegs samþykkis foreldris eða staðfestingar löglegs forráðamanns með öðrum hætti, svo heimilt sé að safna persónugreinanlegum upplýsingum frá barni yngra en 13 ára. Ef þú ert ekki viss um hvort þetta eigi við um þig sem reynir að skrá þig eða vefsvæðið sem þú reynir að skrá þig á skaltu leita aðstoðar lögfræðings. Athugaðu að phpBB Limited og eigendur þessa spjallborðs geta ekki veitt lögfræðiráðgjöf og eru ekki tengiliðir vegna lagalegra álitamála af neinu tagi, nema eins og lýst er í spurningunni „Við hvern hef ég samband vegna misnotkunar eða lagalegra mála sem tengjast þessu spjallborði?“.',
	'HELP_FAQ_LOGIN_COPPA_QUESTION'	=> 'Hvað er COPPA?',
	'HELP_FAQ_LOGIN_DELETE_COOKIES_ANSWER'	=> '„Eyða vefkökum“ eyðir vefkökum sem phpBB býr til og notaðar eru til að auðkenna þig og halda innskráningunni virkri á spjallborðinu. Vefkökur sjá einnig um eiginleika á borð við rakningu lesinna færslna, ef kerfisstjóri hefur virkjað þá. Ef vandamál koma upp við inn- eða útskráningu getur hjálpað að eyða vefkökum spjallborðsins.',
	'HELP_FAQ_LOGIN_DELETE_COOKIES_QUESTION'	=> 'Hvað gerir „Eyða vefkökum“?',
	'HELP_FAQ_LOGIN_LOST_PASSWORD_ANSWER'	=> 'Ekki örvænta! Ekki er hægt að endurheimta lykilorðið þitt en auðvelt er að endurstilla það. Opnaðu innskráningarsíðuna og smelltu á <em>Ég gleymdi lykilorðinu mínu</em>. Fylgdu leiðbeiningunum og þú ættir fljótlega að geta skráð þig inn aftur.<br />Ef þú getur samt ekki endurstillt lykilorðið skaltu hafa samband við kerfisstjóra spjallborðsins.',
	'HELP_FAQ_LOGIN_LOST_PASSWORD_QUESTION'	=> 'Ég hef glatað lykilorðinu mínu!',
	'HELP_FAQ_LOGIN_REGISTER_ANSWER'	=> 'Þú þarft þess hugsanlega ekki; kerfisstjóri spjallborðsins ákveður hvort skráning sé nauðsynleg til að senda inn færslur. Skráning veitir þér hins vegar aðgang að fleiri eiginleikum sem gestir hafa ekki, svo sem sérsniðnum smámyndum, einkaskilaboðum, tölvupósti til annarra notenda og aðild að notendahópum. Skráning tekur aðeins örfáar mínútur og því er mælt með henni.',
	'HELP_FAQ_LOGIN_REGISTER_CONFIRM_ANSWER'	=> 'Athugaðu fyrst notandanafnið þitt og lykilorðið. Ef þau eru rétt getur tvennt hafa gerst. Ef stuðningur við COPPA er virkur og þú gafst upp að vera yngri en 13 ára við skráningu þarftu að fylgja leiðbeiningunum sem þú fékkst. Sum spjallborð krefjast einnig þess að ný skráning sé virkjuð, annaðhvort af þér eða kerfisstjóra, áður en þú getur skráð þig inn; upplýsingar um þetta birtust við skráninguna. Ef þér var sendur tölvupóstur skaltu fylgja leiðbeiningunum í honum. Ef enginn tölvupóstur barst kanntu að hafa gefið upp rangt netfang eða skilaboðin kunna að hafa lent í ruslpóstssíu. Ef þú ert viss um að netfangið sé rétt skaltu reyna að hafa samband við kerfisstjóra.',
	'HELP_FAQ_LOGIN_REGISTER_CONFIRM_QUESTION'	=> 'Ég skráði mig en get ekki skráð mig inn!',
	'HELP_FAQ_LOGIN_REGISTER_QUESTION'	=> 'Hvers vegna þarf ég að skrá mig?',

	'HELP_FAQ_PMS_CANNOT_SEND_ANSWER'	=> 'Þrjár ástæður geta verið fyrir þessu: þú ert ekki skráður notandi og/eða ekki skráður inn, kerfisstjóri spjallborðsins hefur gert einkaskilaboð óvirk á öllu spjallborðinu eða hann hefur bannað þér að senda skilaboð. Hafðu samband við stjórnanda spjallborðsins til að fá nánari upplýsingar.',
	'HELP_FAQ_PMS_CANNOT_SEND_QUESTION'	=> 'Ég get ekki sent einkaskilaboð!',
	'HELP_FAQ_PMS_SPAM_ANSWER'	=> 'Það er leitt að heyra. Tölvupóstseyðublað spjallborðsins inniheldur varnir sem hjálpa til við að rekja notendur sem senda slík skilaboð. Sendu kerfisstjóra spjallborðsins fullkomið afrit af tölvupóstinum sem þú fékkst. Mikilvægt er að hausar með upplýsingum um sendandann fylgi með. Kerfisstjórinn getur þá gripið til aðgerða.',
	'HELP_FAQ_PMS_SPAM_QUESTION'	=> 'Ég fékk ruslpóst eða móðgandi tölvupóst frá einhverjum á spjallborðinu!',
	'HELP_FAQ_PMS_UNWANTED_ANSWER'	=> 'Þú getur eytt einkaskilaboðum frá tilteknum notanda sjálfkrafa með skilaboðareglum á stjórnborði notanda. Ef þú færð móðgandi einkaskilaboð frá notanda skaltu tilkynna þau til stjórnenda; þeir geta komið í veg fyrir að notandinn sendi einkaskilaboð.',
	'HELP_FAQ_PMS_UNWANTED_QUESTION'	=> 'Ég fæ sífellt óumbeðin einkaskilaboð!',

	'HELP_FAQ_POSTING_BUMP_ANSWER'	=> 'Með því að smella á tengilinn „Færa umræðu upp“ þegar þú skoðar umræðuna getur þú fært hana efst á fyrstu síðu spjallsvæðisins. Ef tengillinn birtist ekki kann þessi eiginleiki að vera óvirkur eða tilskilinn biðtími ekki liðinn. Einnig er hægt að færa umræðu upp með því að svara henni, en fylgdu reglum spjallborðsins.',
	'HELP_FAQ_POSTING_BUMP_QUESTION'	=> 'Hvernig færi ég umræðuna mína efst?',
	'HELP_FAQ_POSTING_CREATE_ANSWER'	=> 'Smelltu á „Ný umræða“ til að stofna umræðu á spjallsvæði. Smelltu á „Senda svar“ til að svara umræðu. Þú gætir þurft að skrá þig áður en þú getur sent skilaboð. Listi yfir heimildir þínar á hverju spjallsvæði birtist neðst á síðum spjallsvæðis og umræðu, til dæmis: Þú getur stofnað nýjar umræður, Þú getur sent viðhengi o.s.frv.',
	'HELP_FAQ_POSTING_CREATE_QUESTION'	=> 'Hvernig stofna ég nýja umræðu eða sendi svar?',
	'HELP_FAQ_POSTING_DRAFT_ANSWER'	=> 'Þetta gerir þér kleift að vista drög sem þú getur klárað og sent síðar. Opnaðu stjórnborð notanda til að hlaða vistuðum drögum aftur.',
	'HELP_FAQ_POSTING_DRAFT_QUESTION'	=> 'Til hvers er hnappurinn „Vista“ þegar umræða er skrifuð?',
	'HELP_FAQ_POSTING_EDIT_DELETE_ANSWER'	=> 'Nema þú sért kerfisstjóri eða stjórnandi getur þú aðeins breytt eða eytt eigin færslum. Smelltu á breytingarhnapp við viðkomandi færslu; stundum er það aðeins hægt í takmarkaðan tíma eftir birtingu. Ef einhver hefur þegar svarað birtist lítill texti undir færslunni sem sýnir hversu oft henni var breytt ásamt dagsetningu og tíma. Textinn birtist aðeins eftir að svar hefur borist og ekki þegar stjórnandi eða kerfisstjóri breytir færslunni, þótt þeir geti skilið eftir skýringu. Venjulegir notendur geta ekki eytt færslu eftir að henni hefur verið svarað.',
	'HELP_FAQ_POSTING_EDIT_DELETE_QUESTION'	=> 'Hvernig breyti ég eða eyði færslu?',
	'HELP_FAQ_POSTING_FORUM_RESTRICTED_ANSWER'	=> 'Sum spjallsvæði kunna að vera takmörkuð við tiltekna notendur eða hópa. Sérstakar heimildir kunna að vera nauðsynlegar til að skoða, lesa, senda færslu eða framkvæma aðra aðgerð. Hafðu samband við stjórnanda eða kerfisstjóra spjallborðsins til að fá aðgang.',
	'HELP_FAQ_POSTING_FORUM_RESTRICTED_QUESTION'	=> 'Af hverju fæ ég ekki aðgang að spjallsvæði?',
	'HELP_FAQ_POSTING_NO_ATTACHMENTS_ANSWER'	=> 'Heimildir viðhengja eru veittar fyrir hvert spjallsvæði, hvern hóp eða hvern notanda. Kerfisstjóri spjallborðsins kann að hafa bannað viðhengi á viðkomandi spjallsvæði eða aðeins leyft ákveðnum hópum þau. Hafðu samband við kerfisstjórann ef þú veist ekki af hverju þú getur ekki bætt við viðhengjum.',
	'HELP_FAQ_POSTING_NO_ATTACHMENTS_QUESTION'	=> 'Af hverju get ég ekki bætt við viðhengjum?',
	'HELP_FAQ_POSTING_POLL_ADD_ANSWER'	=> 'Kerfisstjóri spjallborðsins stillir hámarksfjölda valkosta í skoðanakönnun. Hafðu samband við hann ef þú þarft fleiri valkosti en leyfilegir eru.',
	'HELP_FAQ_POSTING_POLL_ADD_QUESTION'	=> 'Af hverju get ég ekki bætt við fleiri valkostum í skoðanakönnun?',
	'HELP_FAQ_POSTING_POLL_CREATE_ANSWER'	=> 'Þegar þú stofnar nýja umræðu eða breytir fyrstu færslu umræðu skaltu smella á flipann „Stofna skoðanakönnun“ fyrir neðan aðaleyðublaðið. Ef flipinn birtist ekki hefur þú ekki heimild til að stofna skoðanakannanir. Sláðu inn heiti og að minnsta kosti tvo valkosti í viðeigandi reiti, einn valkost í hverja línu. Einnig má stilla fjölda valkosta sem hver notandi má velja undir „Valkostir á notanda“, tímamörk könnunar í dögum (0 fyrir ótakmarkaðan tíma) og hvort notendur megi breyta atkvæðum sínum.',
	'HELP_FAQ_POSTING_POLL_CREATE_QUESTION'	=> 'Hvernig stofna ég skoðanakönnun?',
	'HELP_FAQ_POSTING_POLL_EDIT_ANSWER'	=> 'Eins og með færslur getur aðeins upphaflegur höfundur, stjórnandi eða kerfisstjóri breytt skoðanakönnun. Til að breyta könnuninni skaltu breyta fyrstu færslu umræðunnar, sem könnunin er alltaf tengd við. Ef enginn hefur kosið getur höfundur eytt könnuninni eða breytt öllum valkostum. Eftir að atkvæði hafa verið greidd geta aðeins stjórnendur eða kerfisstjórar breytt eða eytt henni. Þannig er komið í veg fyrir að valkostum sé breytt meðan könnun stendur.',
	'HELP_FAQ_POSTING_POLL_EDIT_QUESTION'	=> 'Hvernig breyti ég eða eyði skoðanakönnun?',
	'HELP_FAQ_POSTING_QUEUE_ANSWER'	=> 'Kerfisstjóri spjallborðsins kann að hafa ákveðið að yfirfara þurfi færslur á þessu spjallsvæði áður en þær birtast. Einnig kann hann að hafa sett þig í hóp notenda sem þurfa slíka yfirferð. Hafðu samband við kerfisstjórann til að fá nánari upplýsingar.',
	'HELP_FAQ_POSTING_QUEUE_QUESTION'	=> 'Af hverju þarf að samþykkja færsluna mína?',
	'HELP_FAQ_POSTING_REPORT_ANSWER'	=> 'Ef kerfisstjóri spjallborðsins hefur leyft það birtist tilkynningarhnappur við færsluna. Þegar smellt er á hann færð þú leiðbeiningar um nauðsynleg skref til að tilkynna færsluna.',
	'HELP_FAQ_POSTING_REPORT_QUESTION'	=> 'Hvernig tilkynni ég færslu til stjórnanda?',
	'HELP_FAQ_POSTING_SIGNATURE_ANSWER'	=> 'Til að bæta undirskrift við færslu verður þú fyrst að búa hana til á stjórnborði notanda. Síðan getur þú merkt við <em>Hengja undirskrift við</em> á færslueyðublaðinu. Þú getur einnig valið sjálfgefið að bæta undirskrift við allar færslur á stjórnborði notanda. Þá getur þú samt sleppt undirskrift í einstakri færslu með því að afmerkja reitinn á færslueyðublaðinu.',
	'HELP_FAQ_POSTING_SIGNATURE_QUESTION'	=> 'Hvernig bæti ég undirskrift við færsluna mína?',
	'HELP_FAQ_POSTING_WARNING_ANSWER'	=> 'Hvert spjallborð hefur eigin reglur sem kerfisstjóri þess setur. Ef þú brýtur reglu kannt þú að fá viðvörun. Ákvörðunin er alfarið kerfisstjórans og phpBB Limited tengist ekki viðvörunum á viðkomandi vefsvæði. Hafðu samband við kerfisstjórann ef þú veist ekki af hverju þú fékkst viðvörun.',
	'HELP_FAQ_POSTING_WARNING_QUESTION'	=> 'Af hverju fékk ég viðvörun?',

	'HELP_FAQ_SEARCH_BLANK_ANSWER'	=> 'Leitin skilaði fleiri niðurstöðum en vefþjónninn ræður við. Notaðu „Ítarlega leit“ og tilgreindu nákvæmari leitarorð og spjallsvæði.',
	'HELP_FAQ_SEARCH_BLANK_QUESTION'	=> 'Hvers vegna skilar leitin auðri síðu?',
	'HELP_FAQ_SEARCH_FORUM_ANSWER'	=> 'Sláðu leitarorð inn í leitarreitinn á forsíðu, spjallsvæði eða umræðusíðu. Ítarleg leit er aðgengileg með tenglinum „Ítarleg leit“ á öllum síðum spjallborðsins. Nákvæm staðsetning leitarinnar getur farið eftir stílnum sem er notaður.',
	'HELP_FAQ_SEARCH_FORUM_QUESTION'	=> 'Hvernig leita ég á einu eða fleiri spjallsvæðum?',
	'HELP_FAQ_SEARCH_MEMBERS_ANSWER'	=> 'Opnaðu meðlimalistann og smelltu á tengilinn „Finna meðlim“.',
	'HELP_FAQ_SEARCH_MEMBERS_QUESTION'	=> 'Hvernig leita ég að meðlimum?',
	'HELP_FAQ_SEARCH_NO_RESULT_ANSWER'	=> 'Leitin var líklega of almenn og innihélt mörg algeng orð sem phpBB skráir ekki í leitarvísinn. Notaðu nákvæmari orð og valkostina í Ítarlegri leit.',
	'HELP_FAQ_SEARCH_NO_RESULT_QUESTION'	=> 'Hvers vegna skilar leitin engum niðurstöðum?',
	'HELP_FAQ_SEARCH_OWN_ANSWER'	=> 'Þú getur fundið eigin færslur með tenglinum „Sýna færslurnar þínar“ á stjórnborði notanda, „Leita að færslum notanda“ á eigin notandasíðu eða valmyndinni „Flýtitenglar“ efst á spjallborðinu. Til að leita að eigin umræðum skaltu nota Ítarlega leit og fylla út viðeigandi valkosti.',
	'HELP_FAQ_SEARCH_OWN_QUESTION'	=> 'Hvernig finn ég eigin færslur og umræður?',

	'HELP_FAQ_USERSETTINGS_AVATAR_ANSWER'	=> 'Tvær myndir geta birst við notandanafn þegar færslur eru skoðaðar. Önnur þeirra getur tengst tign þinni og er yfirleitt í formi stjarna, kubba eða punkta sem gefa til kynna hversu margar færslur þú hefur skrifað eða stöðu þína á spjallborðinu. Hin, venjulega stærri, kallast smámynd og er yfirleitt einstök eða persónuleg fyrir hvern notanda.',
	'HELP_FAQ_USERSETTINGS_AVATAR_DISPLAY_ANSWER'	=> 'Á stjórnborði notanda, undir „Prófíll“, geturðu bætt við smámynd með einni af fjórum eftirfarandi aðferðum: Gravatar, myndasafni, ytri smámynd eða upphleðslu. Kerfisstjóri spjallborðsins ákveður hvort smámyndir séu virkjaðar og með hvaða hætti þær eru aðgengilegar. Ef þú getur ekki notað smámyndir skaltu hafa samband við kerfisstjóra spjallborðsins.',
	'HELP_FAQ_USERSETTINGS_AVATAR_DISPLAY_QUESTION'	=> 'Hvernig birti ég smámynd?',
	'HELP_FAQ_USERSETTINGS_AVATAR_QUESTION'	=> 'Hvaða myndir eru við notandanafnið mitt?',
	'HELP_FAQ_USERSETTINGS_CHANGE_SETTINGS_ANSWER'	=> 'Ef þú ert skráður notandi eru allar stillingar þínar vistaðar í gagnagrunni spjallborðsins. Til að breyta þeim skaltu fara á stjórnborð notanda; tengil á það má yfirleitt finna með því að smella á notandanafnið þitt efst á síðum spjallborðsins. Þar geturðu breytt öllum stillingum þínum og kjörstillingum.',
	'HELP_FAQ_USERSETTINGS_CHANGE_SETTINGS_QUESTION'	=> 'Hvernig breyti ég stillingunum mínum?',
	'HELP_FAQ_USERSETTINGS_EMAIL_LOGIN_ANSWER'	=> 'Aðeins skráðir notendur geta sent öðrum notendum tölvupóst með innbyggða tölvupósteyðublaðinu, og aðeins ef kerfisstjóri hefur virkjað þennan eiginleika. Þetta kemur í veg fyrir misnotkun nafnlausra notenda á tölvupóstkerfinu.',
	'HELP_FAQ_USERSETTINGS_EMAIL_LOGIN_QUESTION'	=> 'Hvers vegna þarf ég að skrá mig inn þegar ég smelli á tölvupósttengil notanda?',
	'HELP_FAQ_USERSETTINGS_HIDE_ONLINE_ANSWER'	=> 'Á stjórnborði notanda, undir „Stillingar spjallborðs“, finnurðu valkostinn <em>Fela netstöðu mína</em>. Virkjaðu hann og þá birtist þú aðeins kerfisstjórum, stjórnendum og sjálfum þér. Þú telst þá falinn notandi.',
	'HELP_FAQ_USERSETTINGS_HIDE_ONLINE_QUESTION'	=> 'Hvernig kem ég í veg fyrir að notandanafnið mitt birtist á lista yfir notendur á netinu?',
	'HELP_FAQ_USERSETTINGS_LANGUAGE_ANSWER'	=> 'Annaðhvort hefur kerfisstjóri ekki sett upp tungumálið þitt eða enginn hefur þýtt þetta spjallborð á það. Spurðu kerfisstjóra hvort hægt sé að setja upp tungumálapakkann sem þú þarft. Ef tungumálapakkinn er ekki til geturðu búið til nýja þýðingu. Nánari upplýsingar er að finna á vefsvæði <a href="https://www.phpbb.com/">phpBB</a>&reg;.',
	'HELP_FAQ_USERSETTINGS_LANGUAGE_QUESTION'	=> 'Tungumálið mitt er ekki á listanum!',
	'HELP_FAQ_USERSETTINGS_RANK_ANSWER'	=> 'Tignir, sem birtast undir notandanafninu þínu, gefa til kynna fjölda færslna sem þú hefur skrifað eða auðkenna tiltekna notendur, t.d. stjórnendur og kerfisstjóra. Almennt geturðu ekki breytt heiti tigna beint þar sem kerfisstjóri spjallborðsins ákveður þau. Ekki misnota spjallborðið með óþarfa færslum aðeins til að hækka tign þína. Flest spjallborð umbera það ekki og stjórnandi eða kerfisstjóri lækkar þá einfaldlega færslufjöldann þinn.',
	'HELP_FAQ_USERSETTINGS_RANK_QUESTION'	=> 'Hver er tign mín og hvernig breyti ég henni?',
	'HELP_FAQ_USERSETTINGS_SERVERTIME_ANSWER'	=> 'Ef þú ert viss um að tímabeltið sé rétt stillt en tíminn er enn rangur er klukka þjónsins röng. Láttu kerfisstjóra vita svo hægt sé að leiðrétta vandann.',
	'HELP_FAQ_USERSETTINGS_SERVERTIME_QUESTION'	=> 'Ég breytti tímabeltinu en tíminn er enn rangur!',
	'HELP_FAQ_USERSETTINGS_TIMEZONE_ANSWER'	=> 'Verið getur að tíminn sem birtist miðist við annað tímabelti en það sem þú ert á. Ef svo er skaltu fara á stjórnborð notanda og breyta tímabeltinu þannig að það passi við staðsetningu þína, t.d. London, París, New York, Sydney o.s.frv. Athugaðu að einungis skráðir notendur geta breytt tímabeltinu, líkt og flestum öðrum stillingum. Ef þú ert ekki skráður notandi er þetta góður tími til að skrá þig.',
	'HELP_FAQ_USERSETTINGS_TIMEZONE_QUESTION'	=> 'Tíminn er ekki réttur!',
));
