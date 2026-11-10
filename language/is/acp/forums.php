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

// Forum Admin
$lang = array_merge($lang, array(
	'AUTO_PRUNE_DAYS'			=> 'Aldur færslna fyrir sjálfvirka grisjun',
	'AUTO_PRUNE_DAYS_EXPLAIN'	=> 'Fjöldi daga frá síðustu færslu þar til umræðan er fjarlægð.',
	'AUTO_PRUNE_FREQ'			=> 'Tíðni sjálfvirkrar grisjunar',
	'AUTO_PRUNE_FREQ_EXPLAIN'	=> 'Fjöldi daga milli grisjunaraðgerða.',
	'AUTO_PRUNE_VIEWED'			=> 'Aldur síðustu skoðunar fyrir sjálfvirka grisjun',
	'AUTO_PRUNE_VIEWED_EXPLAIN'	=> 'Fjöldi daga frá því að umræða var síðast skoðuð þar til hún er fjarlægð.',
	'AUTO_PRUNE_SHADOW_FREQ'	=> 'Tíðni sjálfvirkrar grisjunar skuggaumræðna',
	'AUTO_PRUNE_SHADOW_DAYS'	=> 'Aldur skuggaumræðna fyrir sjálfvirka grisjun',
	'AUTO_PRUNE_SHADOW_DAYS_EXPLAIN'	=> 'Fjöldi daga þar til skuggaumræða er fjarlægð.',
	'AUTO_PRUNE_SHADOW_FREQ_EXPLAIN'	=> 'Fjöldi daga milli grisjunaraðgerða.',

	'CONTINUE'						=> 'Halda áfram',
	'COPY_PERMISSIONS'				=> 'Afrita heimildir frá',
	'COPY_PERMISSIONS_EXPLAIN'		=> 'Til að auðvelda uppsetningu heimilda fyrir nýja spjallsvæðið getur þú afritað heimildir af spjallsvæði sem þegar er til.',
	'COPY_PERMISSIONS_ADD_EXPLAIN'	=> 'Þegar spjallsvæðið hefur verið stofnað fær það sömu heimildir og svæðið sem þú velur hér. Ef ekkert svæði er valið verður nýja spjallsvæðið ekki sýnilegt fyrr en heimildir hafa verið stilltar.',
	'COPY_PERMISSIONS_EDIT_EXPLAIN'	=> 'Ef þú velur að afrita heimildir fær spjallsvæðið sömu heimildir og svæðið sem þú velur hér. Það skrifar yfir allar heimildir sem áður voru stilltar fyrir svæðið. Ef ekkert svæði er valið haldast núverandi heimildir óbreyttar.',
	'COPY_TO_ACL'					=> 'Einnig getur þú %sstillt nýjar heimildir%s fyrir þetta spjallsvæði.',
	'CREATE_FORUM'					=> 'Stofna nýtt spjallsvæði',

	'DECIDE_MOVE_DELETE_CONTENT'		=> 'Eyða efni eða flytja á spjallsvæði',
	'DECIDE_MOVE_DELETE_SUBFORUMS'		=> 'Eyða undirsvæðum eða flytja á spjallsvæði',
	'DEFAULT_STYLE'						=> 'Sjálfgefinn stíll',
	'DELETE_ALL_POSTS'					=> 'Eyða færslum',
	'DELETE_SUBFORUMS'					=> 'Eyða undirsvæðum og færslum',
	'DISPLAY_ACTIVE_TOPICS'				=> 'Virkja virkar umræður',
	'DISPLAY_ACTIVE_TOPICS_EXPLAIN'		=> 'Ef já er valið birtast virkar umræður á völdum undirsvæðum undir þessum flokki.',

	'EDIT_FORUM'					=> 'Breyta spjallsvæði',
	'ENABLE_INDEXING'				=> 'Virkja leitarflokkun',
	'ENABLE_INDEXING_EXPLAIN'		=> 'Ef já er valið verða færslur á þessu spjallsvæði skráðar í leitarvísinn.',
	'ENABLE_POST_REVIEW'			=> 'Virkja yfirferð færslu',
	'ENABLE_POST_REVIEW_EXPLAIN'	=> 'Ef já er valið geta notendur yfirfarið færslu sína ef nýjar færslur bættust við umræðuna meðan þeir skrifuðu. Þetta ætti að vera óvirkt á spjallsvæðum fyrir rauntímaspjall.',
	'ENABLE_QUICK_REPLY'			=> 'Virkja flýtisvar',
	'ENABLE_QUICK_REPLY_EXPLAIN'	=> 'Virkjar flýtisvar á þessu spjallsvæði. Stillingin hefur engin áhrif ef flýtisvar er óvirkt á öllu spjallborðinu. Flýtisvarið birtist aðeins notendum sem mega senda færslur á svæðið.',
	'ENABLE_RECENT'					=> 'Birta virkar umræður',
	'ENABLE_RECENT_EXPLAIN'			=> 'Ef já er valið birtast umræður sem stofnaðar eru á þessu spjallsvæði á listanum yfir virkar umræður.',
	'ENABLE_TOPIC_ICONS'			=> 'Virkja umræðutákn',

	'FORUM_ADMIN'						=> 'Stjórnun spjallsvæða',
	'FORUM_ADMIN_EXPLAIN'				=> 'Í phpBB3 byggist allt á spjallsvæðum. Flokkur er aðeins sérstök tegund spjallsvæðis. Hvert spjallsvæði getur haft ótakmarkaðan fjölda undirsvæða og þú getur ákveðið hvort hægt sé að senda færslur á hvert þeirra. Hér getur þú bætt við, breytt, eytt, læst og aflæst einstökum spjallsvæðum ásamt því að stilla fleiri valkosti. Ef færslur og umræður hafa farið úr samstillingu getur þú einnig endursamstillt spjallsvæði. <strong>Þú verður að afrita eða stilla viðeigandi heimildir svo nýstofnuð spjallsvæði birtist.</strong>',
	'FORUM_AUTO_PRUNE'					=> 'Virkja sjálfvirka grisjun',
	'FORUM_AUTO_PRUNE_EXPLAIN'			=> 'Grisjar umræður á spjallsvæðinu samkvæmt tíðni- og aldursstillingunum hér fyrir neðan.',
	'FORUM_CREATED'						=> 'Spjallsvæðið var stofnað.',
	'FORUM_DATA_NEGATIVE'				=> 'Grisjunarstillingar mega ekki vera neikvæðar.',
	'FORUM_DESC_TOO_LONG'				=> 'Lýsing spjallsvæðisins er of löng; hún verður að vera styttri en 4000 stafir.',
	'FORUM_DELETE'						=> 'Eyða spjallsvæði',
	'FORUM_DELETE_EXPLAIN'				=> 'Með eyðublaðinu hér fyrir neðan getur þú eytt spjallsvæði. Ef hægt er að senda færslur á svæðið getur þú ákveðið hvert flytja eigi allar umræður eða undirsvæði þess.',
	'FORUM_DELETED'						=> 'Spjallsvæðinu var eytt.',
	'FORUM_DESC'						=> 'Lýsing',
	'FORUM_DESC_EXPLAIN'				=> 'HTML-kóði sem færður er inn hér birtist óbreyttur. Ef valin tegund spjallsvæðis er flokkur er lýsingin ekki notuð.',
	'FORUM_EDIT_EXPLAIN'				=> 'Með eyðublaðinu hér fyrir neðan getur þú sérsniðið spjallsvæðið. Athugaðu að stillingar fyrir stjórnendur og talningu færslna eru ákveðnar með heimildum spjallsvæðis fyrir hvern notanda eða notendahóp.',
	'FORUM_IMAGE'						=> 'Mynd spjallsvæðis',
	'FORUM_IMAGE_EXPLAIN'				=> 'Slóð, miðað við rótarmöppu phpBB, að viðbótarmynd sem tengja á þessu spjallsvæði.',
	'FORUM_IMAGE_NO_EXIST'				=> 'Tilgreind mynd spjallsvæðis er ekki til',
	'FORUM_LINK_EXPLAIN'				=> 'Full vefslóð, þar með talin samskiptareglan (t.d. <samp>http://</samp>), að staðnum sem notandinn fer á þegar smellt er á spjallsvæðið, t.d. <samp>http://www.phpbb.com/</samp>.',
	'FORUM_LINK_TRACK'					=> 'Telja áframsendingar tengils',
	'FORUM_LINK_TRACK_EXPLAIN'			=> 'Skráir hversu oft smellt hefur verið á tengil spjallsvæðisins.',
	'FORUM_NAME'						=> 'Heiti spjallsvæðis',
	'FORUM_NAME_EMPTY'					=> 'Þú verður að gefa spjallsvæðinu heiti.',
	'FORUM_NAME_EMOJI'					=> 'Heiti spjallsvæðisins er ógilt.<br>Það inniheldur eftirfarandi óstudda stafi:<br>%s',
	'FORUM_PARENT'						=> 'Yfirsvæði',
	'FORUM_PASSWORD'					=> 'Lykilorð spjallsvæðis',
	'FORUM_PASSWORD_CONFIRM'			=> 'Staðfesta lykilorð spjallsvæðis',
	'FORUM_PASSWORD_CONFIRM_EXPLAIN'	=> 'Þarf aðeins að tilgreina ef lykilorð er sett á spjallsvæðið.',
	'FORUM_PASSWORD_EXPLAIN'			=> 'Skilgreinir lykilorð fyrir spjallsvæðið; heimildakerfið ætti að hafa forgang.',
	'FORUM_PASSWORD_UNSET'				=> 'Fjarlægja lykilorð spjallsvæðis',
	'FORUM_PASSWORD_UNSET_EXPLAIN'		=> 'Merktu hér ef þú vilt fjarlægja lykilorð spjallsvæðisins.',
	'FORUM_PASSWORD_OLD'				=> 'Lykilorð spjallsvæðisins notar gamla tætiaðferð og ætti að breyta því.',
	'FORUM_PASSWORD_MISMATCH'			=> 'Lykilorðin sem þú slóst inn stemma ekki.',
	'FORUM_PRUNE_SETTINGS'				=> 'Grisjunarstillingar spjallsvæðis',
	'FORUM_PRUNE_SHADOW'				=> 'Virkja sjálfvirka grisjun skuggaumræðna',
	'FORUM_PRUNE_SHADOW_EXPLAIN'			=> 'Grisjar skuggaumræður af spjallsvæðinu samkvæmt tíðni- og aldursstillingunum hér fyrir neðan.',
	'FORUM_RESYNCED'					=> 'Spjallsvæðið „%s“ var endursamstillt',
	'FORUM_RULES_EXPLAIN'				=> 'Reglur spjallsvæðisins birtast á öllum síðum innan þess.',
	'FORUM_RULES_LINK'					=> 'Tengill á reglur spjallsvæðis',
	'FORUM_RULES_LINK_EXPLAIN'			=> 'Hér getur þú slegið inn vefslóð síðu eða færslu sem inniheldur reglur spjallsvæðisins. Þessi stilling hefur forgang fram yfir reglutextann sem þú tilgreindir.',
	'FORUM_RULES_PREVIEW'				=> 'Forskoðun reglna spjallsvæðis',
	'FORUM_RULES_TOO_LONG'				=> 'Reglur spjallsvæðisins verða að vera styttri en 4000 stafir.',
	'FORUM_SETTINGS'					=> 'Stillingar spjallsvæðis',
	'FORUM_STATUS'						=> 'Staða spjallsvæðis',
	'FORUM_STYLE'						=> 'Stíll spjallsvæðis',
	'FORUM_TOPICS_PAGE'					=> 'Umræður á síðu',
	'FORUM_TOPICS_PAGE_EXPLAIN'			=> 'Ef gildið er annað en núll hefur það forgang fram yfir sjálfgefinn fjölda umræðna á síðu.',
	'FORUM_TYPE'						=> 'Tegund spjallsvæðis',
	'FORUM_UPDATED'						=> 'Upplýsingar spjallsvæðisins voru uppfærðar.',

	'FORUM_WITH_SUBFORUMS_NOT_TO_LINK'		=> 'Þú vilt breyta spjallsvæði sem hægt er að senda færslur á og hefur undirsvæði í tengil. Færðu öll undirsvæði út af þessu svæði áður en þú heldur áfram, því eftir breytinguna í tengil verður ekki lengur hægt að sjá undirsvæðin sem nú tengjast því.',

	'GENERAL_FORUM_SETTINGS'	=> 'Almennar stillingar spjallsvæðis',

	'LINK'						=> 'Tengill',
	'LIMIT_SUBFORUMS'			=> 'Takmarka yfirlit við bein undirsvæði',
	'LIMIT_SUBFORUMS_EXPLAIN'	=> 'Takmarkar birt undirsvæði við þau sem eru beinir afkomendur núverandi spjallsvæðis. Ef þetta er óvirkt birtast öll undirsvæði þar sem valkosturinn „Sýna undirsvæði í yfirliti“ er virkur, óháð dýpt.',
	'LIST_INDEX'				=> 'Sýna undirsvæði í yfirliti yfirsvæðis',
	'LIST_INDEX_EXPLAIN'		=> 'Birtir þetta spjallsvæði á forsíðu og annars staðar sem tengil í yfirliti yfirsvæðisins, ef valkosturinn „Sýna undirsvæði í yfirliti“ er virkur á yfirsvæðinu.',
	'LIST_SUBFORUMS'			=> 'Sýna undirsvæði í yfirliti',
	'LIST_SUBFORUMS_EXPLAIN'	=> 'Birtir undirsvæði þessa spjallsvæðis á forsíðu og annars staðar sem tengla í yfirlitinu, ef valkosturinn „Sýna undirsvæði í yfirliti yfirsvæðis“ er virkur á þeim.',
	'LOCKED'					=> 'Læst',

	'MOVE_POSTS_NO_POSTABLE_FORUM'	=> 'Ekki er hægt að senda færslur á spjallsvæðið sem þú valdir sem áfangastað. Veldu spjallsvæði sem tekur við færslum.',
	'MOVE_POSTS_TO'					=> 'Flytja færslur á',
	'MOVE_SUBFORUMS_TO'				=> 'Flytja undirsvæði á',

	'NO_DESTINATION_FORUM'			=> 'Þú hefur ekki tilgreint spjallsvæði sem flytja á efnið á.',
	'NO_FORUM_ACTION'				=> 'Engin aðgerð hefur verið skilgreind fyrir efni spjallsvæðisins.',
	'NO_PARENT'						=> 'Ekkert yfirsvæði',
	'NO_PERMISSIONS'				=> 'Ekki afrita heimildir',
	'NO_PERMISSION_FORUM_ADD'		=> 'Þú hefur ekki nauðsynlegar heimildir til að bæta við spjallsvæðum.',
	'NO_PERMISSION_FORUM_DELETE'	=> 'Þú hefur ekki nauðsynlegar heimildir til að eyða spjallsvæðum.',

	'PARENT_IS_LINK_FORUM'		=> 'Tilgreint yfirsvæði er tengill. Tenglaspjallsvæði geta ekki innihaldið önnur spjallsvæði; veldu flokk eða venjulegt spjallsvæði sem yfirsvæði.',
	'PARENT_NOT_EXIST'			=> 'Yfirsvæðið er ekki til.',
	'PRUNE_ANNOUNCEMENTS'		=> 'Grisja tilkynningar',
	'PRUNE_STICKY'				=> 'Grisja límdar umræður',
	'PRUNE_OLD_POLLS'			=> 'Grisja gamlar skoðanakannanir',
	'PRUNE_OLD_POLLS_EXPLAIN'	=> 'Fjarlægir umræður með skoðanakönnunum sem ekki hefur verið kosið í í þann dagafjölda sem aldur færslu segir til um.',

	'REDIRECT_ACL'	=> 'Nú getur þú %sstillt heimildir%s fyrir þetta spjallsvæði.',

	'SYNC_IN_PROGRESS'			=> 'Samstilling spjallsvæðis',
	'SYNC_IN_PROGRESS_EXPLAIN'	=> 'Endursamstilli nú umræðubil %1$d/%2$d.',

	'TYPE_CAT'			=> 'Flokkur',
	'TYPE_FORUM'		=> 'Spjallsvæði',
	'TYPE_LINK'			=> 'Tengill',

	'UNLOCKED'			=> 'Ólæst',
));
