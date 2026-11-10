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

// Custom profile fields
$lang = array_merge($lang, array(
	'ADDED_PROFILE_FIELD'	=> 'Sérsniðnum notandareit var bætt við.',
	'ALPHA_DOTS'			=> 'Bók- og tölustafir ásamt punktum',
	'ALPHA_ONLY'			=> 'Aðeins bók- og tölustafir',
	'ALPHA_SPACERS'			=> 'Bók- og tölustafir ásamt bilstöfum',
	'ALPHA_UNDERSCORE'		=> 'Bók- og tölustafir ásamt undirstrikum',
	'ALPHA_PUNCTUATION'		=> 'Bók- og tölustafir ásamt kommu, punktum, undirstriki og bandstrikum, byrjar á bókstaf',
	'ALWAYS_TODAY'			=> 'Alltaf núverandi dagsetning',

	'BOOL_ENTRIES_EXPLAIN'	=> 'Sláðu inn valkostina núna',
	'BOOL_TYPE_EXPLAIN'		=> 'Skilgreindu tegundina, annaðhvort gátreit eða valhnappa. Gátreitur birtist aðeins ef hakað er við hann hjá viðkomandi notanda. Þá er <strong>seinni</strong> tungumálavalkosturinn notaður. Valhnappar birtast óháð gildinu.',

	'CHANGED_PROFILE_FIELD'		=> 'Notandareitnum var breytt.',
	'CHARS_ANY'					=> 'Hvaða stafur sem er',
	'CHECKBOX'					=> 'Gátreitur',
	'COLUMNS'					=> 'Dálkar',
	'CP_LANG_DEFAULT_VALUE'		=> 'Sjálfgefið gildi',
	'CP_LANG_EXPLAIN'			=> 'Lýsing reits',
	'CP_LANG_EXPLAIN_EXPLAIN'	=> 'Skýringin á þessum reit sem birtist notandanum.',
	'CP_LANG_NAME'				=> 'Heiti reits sem birtist notandanum',
	'CP_LANG_OPTIONS'			=> 'Valkostir',
	'CREATE_NEW_FIELD'			=> 'Stofna nýjan reit',
	'CUSTOM_FIELDS_NOT_TRANSLATED'	=> 'Að minnsta kosti einn sérsniðinn notandareitur hefur ekki enn verið þýddur. Færðu inn nauðsynlegar upplýsingar með því að smella á tengilinn „Þýða“.',

	'DEFAULT_ISO_LANGUAGE'			=> 'Sjálfgefið tungumál [%s]',
	'DEFAULT_LANGUAGE_NOT_FILLED'	=> 'Tungumálafærslur sjálfgefna tungumálsins hafa ekki verið fylltar út fyrir þennan notandareit.',
	'DEFAULT_VALUE'					=> 'Sjálfgefið gildi',
	'DELETE_PROFILE_FIELD'			=> 'Fjarlægja notandareit',
	'DELETE_PROFILE_FIELD_CONFIRM'	=> 'Ertu viss um að þú viljir eyða þessum notandareit?',
	'DISPLAY_AT_PROFILE'			=> 'Birta á stjórnborði notanda',
	'DISPLAY_AT_PROFILE_EXPLAIN'	=> 'Notandinn getur breytt þessum notandareit á stjórnborði sínu.',
	'DISPLAY_AT_REGISTER'			=> 'Birta á skráningarsíðu',
	'DISPLAY_AT_REGISTER_EXPLAIN'	=> 'Ef þessi valkostur er virkur birtist reiturinn við skráningu.',
	'DISPLAY_ON_MEMBERLIST'			=> 'Birta á meðlimalista',
	'DISPLAY_ON_MEMBERLIST_EXPLAIN'	=> 'Ef þessi valkostur er virkur birtist reiturinn í notandalínum meðlimalistans.',
	'DISPLAY_ON_PM'					=> 'Birta þegar einkaskilaboð eru skoðuð',
	'DISPLAY_ON_PM_EXPLAIN'			=> 'Ef þessi valkostur er virkur birtist reiturinn í smásniðinu á síðu einkaskilaboða.',
	'DISPLAY_ON_VT'					=> 'Birta þegar umræða er skoðuð',
	'DISPLAY_ON_VT_EXPLAIN'			=> 'Ef þessi valkostur er virkur birtist reiturinn í smásniðinu á umræðusíðunni.',
	'DISPLAY_PROFILE_FIELD'			=> 'Birta notandareit opinberlega',
	'DISPLAY_PROFILE_FIELD_EXPLAIN'	=> 'Notandareiturinn birtist á öllum stöðum sem hleðslustillingarnar leyfa. Ef „nei“ er valið felst reiturinn á umræðusíðum, notandasniðum og meðlimalistanum.',
	'DROPDOWN_ENTRIES_EXPLAIN'		=> 'Sláðu inn valkostina núna, einn í hverja línu.',

	'EDIT_DROPDOWN_LANG_EXPLAIN'	=> 'Athugaðu að þú getur breytt texta valkosta og bætt nýjum valkostum við endann. Ekki er ráðlagt að bæta nýjum valkostum inn á milli þeirra sem fyrir eru, því þá geta rangir valkostir tengst notendum. Sama getur gerst ef valkostir eru fjarlægðir úr miðjunni. Ef valkostir eru fjarlægðir af endanum færist val notenda sem höfðu þá valda aftur á sjálfgefna valkostinn.',
	'EMPTY_FIELD_IDENT'				=> 'Auðkenni reits er autt',
	'EMPTY_USER_FIELD_NAME'			=> 'Sláðu inn heiti reits',
	'ENTRIES'						=> 'Færslur',
	'EVERYTHING_OK'					=> 'Allt í lagi',

	'FIELD_BOOL'				=> 'Rökgildi (Já/Nei)',
	'FIELD_CONTACT_DESC'		=> 'Lýsing tengiliðar',
	'FIELD_CONTACT_URL'			=> 'Tengill tengiliðar',
	'FIELD_DATE'				=> 'Dagsetning',
	'FIELD_DESCRIPTION'			=> 'Lýsing reits',
	'FIELD_DESCRIPTION_EXPLAIN'	=> 'Skýringin á þessum reit sem birtist notandanum.',
	'FIELD_DROPDOWN'			=> 'Fellilisti',
	'FIELD_IDENT'				=> 'Auðkenni reits',
	'FIELD_IDENT_ALREADY_EXIST'	=> 'Valið auðkenni reits er þegar til. Veldu annað heiti.',
	'FIELD_IDENT_EXPLAIN'		=> 'Auðkenni reits er heiti sem auðkennir notandareitinn í gagnagrunninum og sniðmátunum.',
	'FIELD_INT'					=> 'Tölur',
	'FIELD_IS_CONTACT'			=> 'Birta reit sem tengiliðareit',
	'FIELD_IS_CONTACT_EXPLAIN'	=> 'Tengiliðareitir birtast í tengiliðahluta notandasniðsins og á annan hátt í smásniðinu við færslur og einkaskilaboð. Þú getur notað <samp>%s</samp> sem staðgengilsbreytu sem verður skipt út fyrir gildi frá notandanum.',
	'FIELD_LENGTH'				=> 'Lengd innsláttarreits',
	'FIELD_NOT_FOUND'			=> 'Notandareiturinn fannst ekki.',
	'FIELD_STRING'				=> 'Einfaldur textareitur',
	'FIELD_TEXT'				=> 'Marglína textareitur',
	'FIELD_TYPE'				=> 'Tegund reits',
	'FIELD_TYPE_EXPLAIN'		=> 'Ekki er hægt að breyta tegund reitsins síðar.',
	'FIELD_URL'					=> 'Vefslóð (tengill)',
	'FIELD_VALIDATION'			=> 'Sannprófun reits',
	'FIRST_OPTION'				=> 'Fyrri valkostur',

	'HIDE_PROFILE_FIELD'			=> 'Fela notandareit',
	'HIDE_PROFILE_FIELD_EXPLAIN'	=> 'Felur notandareitinn fyrir öllum nema stjórnendum, sem geta áfram séð hann. Ef valkosturinn Birta á stjórnborði notanda er óvirkur getur notandinn hvorki séð né breytt reitnum og aðeins kerfisstjórar geta breytt honum.',

	'INVALID_CHARS_FIELD_IDENT'	=> 'Auðkenni reits má aðeins innihalda lágstafina a-z og _',
	'INVALID_FIELD_IDENT_LEN'	=> 'Auðkenni reits má að hámarki vera 17 stafir',
	'ISO_LANGUAGE'				=> 'Tungumál [%s]',

	'LANG_SPECIFIC_OPTIONS'		=> 'Tungumálasértækir valkostir [<strong>%s</strong>]',

	'LETTER_NUM_DOTS'			=> 'Hvaða bókstafir, tölur og punktar sem er',
	'LETTER_NUM_ONLY'			=> 'Hvaða bókstafir og tölur sem er',
	'LETTER_NUM_PUNCTUATION'	=> 'Hvaða bókstafir, tölur, kommur, punktar, undirstrik og bandstrik sem er, byrjar á bókstaf',
	'LETTER_NUM_SPACERS'		=> 'Hvaða bókstafir, tölur og bilstafir sem er',
	'LETTER_NUM_UNDERSCORE'		=> 'Hvaða bókstafir, tölur og undirstrik sem er',

	'MAX_FIELD_CHARS'		=> 'Hámarksfjöldi stafa',
	'MAX_FIELD_NUMBER'		=> 'Hæsta leyfða tala',
	'MIN_FIELD_CHARS'		=> 'Lágmarksfjöldi stafa',
	'MIN_FIELD_NUMBER'		=> 'Lægsta leyfða tala',

	'NO_FIELD_ENTRIES'			=> 'Engar færslur skilgreindar',
	'NO_FIELD_ID'				=> 'Ekkert auðkenni reits tilgreint.',
	'NO_FIELD_TYPE'				=> 'Engin tegund reits tilgreind.',
	'NO_VALUE_OPTION'			=> 'Valkostur sem jafngildir engu innsláttargildi',
	'NO_VALUE_OPTION_EXPLAIN'	=> 'Gildi fyrir ekkert val. Ef reiturinn er nauðsynlegur fær notandinn villu þegar hann velur valkostinn sem hér er valinn.',
	'NUMBERS_ONLY'				=> 'Aðeins tölur (0-9)',

	'PROFILE_BASIC_OPTIONS'		=> 'Grunnvalkostir',
	'PROFILE_FIELD_ACTIVATED'	=> 'Notandareiturinn var virkjaður.',
	'PROFILE_FIELD_DEACTIVATED'	=> 'Notandareiturinn var gerður óvirkur.',
	'PROFILE_LANG_OPTIONS'		=> 'Tungumálasértækir valkostir',
	'PROFILE_TYPE_OPTIONS'		=> 'Valkostir fyrir tegund notandareits',

	'RADIO_BUTTONS'				=> 'Valhnappar',
	'REMOVED_PROFILE_FIELD'		=> 'Notandareiturinn var fjarlægður.',
	'REQUIRED_FIELD'			=> 'Nauðsynlegur reitur',
	'REQUIRED_FIELD_EXPLAIN'	=> 'Krefst þess að notandi eða kerfisstjóri fylli út eða tilgreini notandareitinn. Ef birting á skráningarsíðu er óvirk verður aðeins krafist að reiturinn sé fylltur út þegar notandinn breytir notandasniði sínu.',
	'ROWS'						=> 'Raðir',

	'SAVE'							=> 'Vista',
	'SECOND_OPTION'					=> 'Seinni valkostur',
	'SHOW_NOVALUE_FIELD'			=> 'Sýna reit ef ekkert gildi var valið',
	'SHOW_NOVALUE_FIELD_EXPLAIN'	=> 'Ákveður hvort notandareiturinn birtist þegar ekkert gildi var valið í valfrjálsum reitum eða ekkert gildi hefur enn verið valið í nauðsynlegum reitum.',
	'STEP_1_EXPLAIN_CREATE'			=> 'Hér getur þú fært inn fyrstu grunnstillingar nýja notandareitsins. Þessar upplýsingar þarf fyrir annað skrefið, þar sem þú getur stillt þá valkosti sem eftir eru og fínstillt reitinn frekar.',
	'STEP_1_EXPLAIN_EDIT'			=> 'Hér getur þú breytt grunnstillingum notandareitsins. Viðeigandi valkostir eru endurreiknaðir í öðru skrefi.',
	'STEP_1_TITLE_CREATE'			=> 'Bæta við notandareit',
	'STEP_1_TITLE_EDIT'				=> 'Breyta notandareit',
	'STEP_2_EXPLAIN_CREATE'			=> 'Hér getur þú skilgreint nokkra almenna valkosti sem þú kannt að vilja laga.',
	'STEP_2_EXPLAIN_EDIT'			=> 'Hér getur þú breytt nokkrum almennum valkostum.<br /><strong>Athugaðu að breytingar á notandareitum hafa ekki áhrif á fyrirliggjandi gildi sem notendur hafa fært inn.</strong>',
	'STEP_2_TITLE_CREATE'			=> 'Valkostir fyrir tegund notandareits',
	'STEP_2_TITLE_EDIT'				=> 'Valkostir fyrir tegund notandareits',
	'STEP_3_EXPLAIN_CREATE'			=> 'Þar sem fleiri en eitt tungumál er uppsett á spjallborðinu þarftu einnig að fylla út tungumálafærslurnar sem eftir eru. Ef þú gerir það ekki verða stillingar sjálfgefna tungumálsins notaðar fyrir þennan sérsniðna notandareit. Þú getur einnig fyllt út færslurnar síðar.',
	'STEP_3_EXPLAIN_EDIT'			=> 'Þar sem fleiri en eitt tungumál er uppsett á spjallborðinu getur þú nú breytt eða bætt við tungumálafærslunum sem eftir eru. Ef þú gerir það ekki verða stillingar sjálfgefna tungumálsins notaðar fyrir þennan sérsniðna notandareit.',
	'STEP_3_TITLE_CREATE'			=> 'Tungumálaskilgreiningar sem eftir eru',
	'STEP_3_TITLE_EDIT'				=> 'Tungumálaskilgreiningar',
	'STRING_DEFAULT_VALUE_EXPLAIN'	=> 'Sláðu inn sjálfgefna setningu eða sjálfgefið gildi sem á að birta. Skildu reitinn eftir auðan ef hann á að vera auður í upphafi.',

	'TEXT_DEFAULT_VALUE_EXPLAIN'	=> 'Sláðu inn sjálfgefinn texta eða sjálfgefið gildi sem á að birta. Skildu reitinn eftir auðan ef hann á að vera auður í upphafi.',
	'TRANSLATE'						=> 'Þýða',

	'USER_FIELD_NAME'	=> 'Heiti reits sem birtist notandanum',

	'VISIBILITY_OPTION'				=> 'Sýnileikavalkostir',
));
