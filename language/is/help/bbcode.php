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
	'HELP_BBCODE_BLOCK_IMAGES'	=> 'Sýna myndir í færslum',
	'HELP_BBCODE_BLOCK_INTRO'	=> 'Kynning',
	'HELP_BBCODE_BLOCK_LINKS'	=> 'Búa til tengla',
	'HELP_BBCODE_BLOCK_LISTS'	=> 'Búa til lista',
	'HELP_BBCODE_BLOCK_OTHERS'	=> 'Önnur atriði',
	'HELP_BBCODE_BLOCK_QUOTES'	=> 'Tilvitnanir og texti með fastri breidd',
	'HELP_BBCODE_BLOCK_TEXT'	=> 'Sníða texta',

	'HELP_BBCODE_IMAGES_ATTACHMENT_ANSWER'	=> 'Hægt er að setja viðhengi hvar sem er í færslu með BB-kóðanum <strong>[attachment=][/attachment]</strong>, ef kerfisstjóri hefur virkjað viðhengi og þú hefur heimild til að búa þau til. Á færslusíðunni er fellilisti eða hnappur til að setja viðhengi inn í textann.',
	'HELP_BBCODE_IMAGES_ATTACHMENT_QUESTION'	=> 'Bæta viðhengi við færslu',
	'HELP_BBCODE_IMAGES_BASIC_ANSWER'	=> 'BB-kóði phpBB hefur tagg til að birta myndir í færslum. Hafðu í huga að mörgum notendum líkar ekki að margar myndir séu í færslu og að myndin verður þegar að vera aðgengileg á internetinu; hún getur ekki aðeins verið á tölvunni þinni nema hún keyri vefþjón. Settu vefslóð myndarinnar milli <strong>[img][/img]</strong>:<br /><br /><strong>[img]</strong>https://www.phpbb.com/theme/images/logos/blue/160x52.png<strong>[/img]</strong><br /><br />Eins og lýst er í kaflanum um tengla má einnig setja mynd innan <strong>[url][/url]</strong>:<br /><br /><strong>[url=https://www.phpbb.com/][img]</strong>https://www.phpbb.com/theme/images/logos/blue/160x52.png<strong>[/img][/url]</strong><br /><br />Útkoman verður:<br /><br /><a href="https://www.phpbb.com/"><img src="https://www.phpbb.com/theme/images/logos/blue/160x52.png" alt="" /></a>',
	'HELP_BBCODE_IMAGES_BASIC_QUESTION'	=> 'Bæta mynd við færslu',

	'HELP_BBCODE_INTRO_BBCODE_ANSWER'	=> 'BB-kóði er sérstök útfærsla á HTML. Kerfisstjóri ákveður hvort hægt sé að nota BB-kóða í færslum og þú getur einnig gert hann óvirkan fyrir einstaka færslu á færslueyðublaðinu. BB-kóði líkist HTML en tagg eru innan hornklofa [ og ] í stað &lt; og &gt;, sem veitir öruggari stjórn á því hvað er birt og hvernig. Eftir sniðmáti getur smellanlegt viðmót fyrir ofan skilaboðareitinn auðveldað notkunina. Þessi handbók getur engu að síður komið að gagni.',
	'HELP_BBCODE_INTRO_BBCODE_QUESTION'	=> 'Hvað er BB-kóði?',

	'HELP_BBCODE_LINKS_BASIC_ANSWER'	=> 'BB-kóði phpBB býður nokkrar leiðir til að búa til URI-vefföng, betur þekkt sem URL.<ul><li>Með <strong>[url=][/url]</strong> verður efnið innan taggsins að tengli á slóðina eftir =. Til dæmis:<br /><br /><strong>[url=https://www.phpbb.com/]</strong>Skoða phpBB!<strong>[/url]</strong><br /><br />býr til <a href="https://www.phpbb.com/">Skoða phpBB!</a>. Tengillinn opnast í sama eða nýjum glugga eftir stillingum vafrans.</li><li>Til að birta sjálfa slóðina sem tengil skaltu nota:<br /><br /><strong>[url]</strong>https://www.phpbb.com/<strong>[/url]</strong><br /><br />sem býr til <a href="https://www.phpbb.com/">https://www.phpbb.com/</a>.</li><li>phpBB styður einnig <i>töfratengla</i>: gild vefslóð verður sjálfkrafa að tengli án tagga eða http://. Textinn www.phpbb.com verður til dæmis að <a href="http://www.phpbb.com/">www.phpbb.com</a>.</li><li>Sama gildir um netföng. Þú getur notað <strong>[email]</strong>no.one@domain.adr<strong>[/email]</strong>, sem birtir <a href="mailto:no.one@domain.adr">no.one@domain.adr</a>, eða einfaldlega skrifað netfangið og látið phpBB breyta því sjálfkrafa.</li></ul>Hægt er að setja tengil utan um önnur BB-tögg, svo sem <strong>[img][/img]</strong> eða <strong>[b][/b]</strong>. Gættu þess að opna og loka töggum í réttri röð. Eftirfarandi er <span style="text-decoration: underline">rangt</span>:<br /><br /><strong>[url=https://www.phpbb.com/][img]</strong>https://www.phpbb.com/theme/images/logos/blue/160x52.png<strong>[/url][/img]</strong>',
	'HELP_BBCODE_LINKS_BASIC_QUESTION'	=> 'Tengja á annað vefsvæði',

	'HELP_BBCODE_LISTS_ORDERER_ANSWER'	=> 'Raðaður listi gerir þér kleift að stjórna merkinu á undan hverju atriði. Notaðu <strong>[list=1][/list]</strong> fyrir tölusettan lista eða <strong>[list=a][/list]</strong> fyrir stafrófslista. Atriði eru merkt með <strong>[*]</strong>:<br /><br /><strong>[list=1]</strong><br /><strong>[*]</strong>Fara í búðina<br /><strong>[*]</strong>Kaupa nýja tölvu<br /><strong>[*]</strong>Skammast út í tölvuna þegar hún hrynur<br /><strong>[/list]</strong><br /><br />Útkoman verður:<ol style="list-style-type: decimal;"><li>Fara í búðina</li><li>Kaupa nýja tölvu</li><li>Skammast út í tölvuna þegar hún hrynur</li></ol>Fyrir stafrófslista má nota <strong>[list=a]</strong> eða <strong>[list=A]</strong>; fyrir rómverskar tölur <strong>[list=i]</strong> eða <strong>[list=I]</strong>. Í öllum tilvikum eru atriði merkt með <strong>[*]</strong>.',
	'HELP_BBCODE_LISTS_ORDERER_QUESTION'	=> 'Búa til raðaðan lista',
	'HELP_BBCODE_LISTS_UNORDERER_ANSWER'	=> 'BB-kóði styður óraðaða og raðaða lista, svipað og HTML. Óraðaður listi birtir atriði í röð með áherslumerki. Notaðu <strong>[list][/list]</strong> og merktu hvert atriði með <strong>[*]</strong>:<br /><br /><strong>[list]</strong><br /><strong>[*]</strong>Rauður<br /><strong>[*]</strong>Blár<br /><strong>[*]</strong>Gulur<br /><strong>[/list]</strong><br /><br />Útkoman verður:<ul><li>Rauður</li><li>Blár</li><li>Gulur</li></ul><br />Einnig má velja gerð áherslumerkis með <strong>[list=disc][/list]</strong>, <strong>[list=circle][/list]</strong> eða <strong>[list=square][/list]</strong>.',
	'HELP_BBCODE_LISTS_UNORDERER_QUESTION'	=> 'Búa til óraðaðan lista',

	'HELP_BBCODE_OTHERS_CUSTOM_ANSWER'	=> 'Ef þú ert kerfisstjóri spjallborðsins og hefur viðeigandi heimildir getur þú bætt við fleiri BB-kóðum í hlutanum Sérsniðnir BB-kóðar.',
	'HELP_BBCODE_OTHERS_CUSTOM_QUESTION'	=> 'Get ég bætt við eigin töggum?',

	'HELP_BBCODE_QUOTES_CODE_ANSWER'	=> 'Ef þú vilt birta forritskóða eða annað sem krefst leturs með fastri breidd, til dæmis Courier, skaltu setja textann innan <strong>[code][/code]</strong>:<br /><br /><strong>[code]</strong>echo &quot;Þetta er forritskóði&quot;;<strong>[/code]</strong><br /><br />Allt snið innan <strong>[code][/code]</strong> helst óbreytt þegar efnið er skoðað.',
	'HELP_BBCODE_QUOTES_CODE_QUESTION'	=> 'Birta kóða eða gögn með fastri breidd',
	'HELP_BBCODE_QUOTES_TEXT_ANSWER'	=> 'Hægt er að vitna í texta með tilvísun eða án hennar.<ul><li>Þegar aðgerðin Vitna er notuð til að svara færslu birtist textinn innan <strong>[quote=&quot;&quot;][/quote]</strong>. Til að vitna í Jón má til dæmis skrifa:<br /><br /><strong>[quote=&quot;Jón&quot;]</strong>Textinn sem Jón skrifaði<strong>[/quote]</strong><br /><br />Þá birtist „Jón skrifaði:“ á undan textanum. Gæsalappirnar &quot;&quot; utan um nafnið eru nauðsynlegar.</li><li>Til að vitna án tilvísunar skaltu setja textann innan <strong>[quote][/quote]</strong>. Þá birtist hann einfaldlega í tilvitnunarreit.</li></ul>',
	'HELP_BBCODE_QUOTES_TEXT_QUESTION'	=> 'Vitna í texta í svörum',

	'HELP_BBCODE_TEXT_BASIC_ANSWER'	=> 'BB-kóði hefur tögg til að breyta grunnsniði texta:<ul><li>Feitletraðu með <strong>[b][/b]</strong>:<br /><br /><strong>[b]</strong>Halló<strong>[/b]</strong><br /><br />verður <strong>Halló</strong>.</li><li>Undirstrikaðu með <strong>[u][/u]</strong>:<br /><br /><strong>[u]</strong>Góðan dag<strong>[/u]</strong><br /><br />verður <span style="text-decoration: underline">Góðan dag</span>.</li><li>Skáletraðu með <strong>[i][/i]</strong>:<br /><br />Þetta er <strong>[i]</strong>frábært!<strong>[/i]</strong><br /><br />verður Þetta er <i>frábært!</i>.</li></ul>',
	'HELP_BBCODE_TEXT_BASIC_QUESTION'	=> 'Hvernig feitletra, skáletra og undirstrika ég texta?',
	'HELP_BBCODE_TEXT_COLOR_ANSWER'	=> 'Notaðu eftirfarandi tögg til að breyta lit eða stærð. Birtingin getur ráðist af vafra og kerfi lesandans.<ul><li>Settu texta innan <strong>[color=][/color]</strong> og tilgreindu viðurkennt litaheiti eða sextándagildi:<br /><br /><strong>[color=red]</strong>Halló!<strong>[/color]</strong><br /><br />eða<br /><br /><strong>[color=#FF0000]</strong>Halló!<strong>[/color]</strong><br /><br />Hvort tveggja birtir <span style="color:red">Halló!</span>.</li><li>Breyttu stærð með <strong>[size=][/size]</strong>. Mælt er með prósentugildi frá 20 (mjög lítið) til 200 (mjög stórt):<br /><br /><strong>[size=30]</strong>LÍTIÐ<strong>[/size]</strong> verður <span style="font-size:30%;">LÍTIÐ</span>, en <strong>[size=200]</strong>RISASTÓRT!<strong>[/size]</strong> verður <span style="font-size:200%;">RISASTÓRT!</span>.</li></ul>',
	'HELP_BBCODE_TEXT_COLOR_QUESTION'	=> 'Hvernig breyti ég lit eða stærð texta?',
	'HELP_BBCODE_TEXT_COMBINE_ANSWER'	=> 'Já. Til að vekja athygli mætti til dæmis skrifa:<br /><br /><strong>[size=200][color=red][b]</strong>HORFÐU Á MIG!<strong>[/b][/color][/size]</strong><br /><br />sem birtir <span style="color:red;font-size:200%;"><strong>HORFÐU Á MIG!</strong></span>.<br /><br />Ekki er ráðlagt að birta mikið af slíkum texta. Þú berð ábyrgð á að loka töggum í réttri röð. Eftirfarandi er rangt:<br /><br /><strong>[b][u]</strong>Þetta er rangt<strong>[/b][/u]</strong>',
	'HELP_BBCODE_TEXT_COMBINE_QUESTION'	=> 'Get ég sameinað sniðtögg?',
));
