<?php
/**
 * TV Widget Dutch lexicon topic
 *
 * @language nl
 * @package modx
 * @subpackage lexicon
 * 
 * @author Bert Oost <bertoost85@gmail.com>
 */
$_lang['attributes'] = 'Attributen';
$_lang['capitalize'] = 'Kapitaliseren';
$_lang['checkbox'] = 'Checkbox';
$_lang['class'] = 'Class';
$_lang['combo_allowaddnewdata'] = 'Nieuwe items toevoegen toestaan';
$_lang['combo_allowaddnewdata_desc'] = 'Wanneer Ja, dan is het mogelijk om items toe te voegen welke nog niet bestaan. Standaard op Nee.';
$_lang['combo_forceselection'] = 'Forceer selectie voor lijst';
$_lang['combo_forceselection_desc'] = 'Indien Type-Ahead is gebruikt en deze is op Ja gezet, alleen items in de lijst zijn toegestaan.';
$_lang['combo_listempty_text'] = 'Lege lijst tekst';
$_lang['combo_listempty_text_desc'] = 'Indien Type-Ahead aanstaat en de gebruiker typt een waarde welke niet in de lijst voorkomt, toon deze tekst.';
$_lang['combo_listwidth'] = 'Lijst breedte';
$_lang['combo_listwidth_desc'] = 'De breedte, in pixels, van de dropdown zelf. Standaard de breedte van de combobox.';
$_lang['combo_maxheight'] = 'Max hoogte';
$_lang['combo_maxheight_desc'] = 'De maximale hoogte in pixels van de dropdown lijst voordat scrollbalken getoond worden (standaard op 300).';
$_lang['combo_stackitems'] = 'Geselecteerde items verzamelen';
$_lang['combo_stackitems_desc'] = 'Indien op Ja gezet, de items worden 1 per regel verzameld. Standaard op Nee wat de items inline toont.';
$_lang['combo_title'] = 'Lijst header';
$_lang['combo_title_desc'] = 'Als opgegeven, een header element met deze tekst wordt bovenin de dropdown lijst getoond.';
$_lang['combo_typeahead'] = 'Type-Ahead activeren';
$_lang['combo_typeahead_desc'] = 'Indien ja, voorzie en selecteer automatisch de rest of de tekst welke getypt wordt, na een configureerbare vertraging (Type Ahead Delay) indien een bekende waarde overeenkomt (standaard op uit).';
$_lang['combo_typeahead_delay'] = 'Type-Ahead vertraging';
$_lang['combo_typeahead_delay_desc'] = 'De tijd in milliseconden waarop gewacht wordt voordat de Type-Ahead tekst getoond wordt, als Type-Ahead aangezet is (standaard op 250).';
$_lang['date'] = 'Datum';
$_lang['date_format'] = 'Datum formaat';
$_lang['date_use_current'] = 'Indien geen data, gebruik huidige data';
$_lang['default'] = 'Standaard';
$_lang['delim'] = 'Scheidingsteken';
$_lang['delimiter'] = 'Scheidingsteken';
$_lang['disabled_dates'] = 'Uitgesloten datums';
$_lang['disabled_dates_desc'] = '
Een komma gescheiden lijst van datums welke uitgesloten moeten worden, als tekst. Deze tekst wordt gebruikt om dynamische reguliere expressies te maken, dus zijn erg krachtig. Enkele voorbeelden<br />
- Schakel exacte datums uit: 2003-03-08,2003-09-16<br />
- Schakel deze dagen uit voor elk jaar: 03-08,09-16<br />
- Alleen het begin vergelijken (handig bij gebruik van korte jaren): ^03-08<br />
- Schakel alle dagen in Maart 2006 uit: 03-..-2006<br />
- Schakel elke dag in Maart uit: ^03<br />
Let op dat het formaat van de datums in de lijst exact overeen moeten komen met het config formaat. Om reguliere expressies te ondersteunen, als je een datum formaat met "." erin gebruikt, dan moet de punt ge-escaped worden.';
$_lang['disabled_days'] = 'Dagen uitgeschakeld';
$_lang['disabled_days_desc'] = '
Een komma gescheiden lijst of dagen welke uitgesloten moeten worden, 0 gebasseerd (standaard op null). Enkele voorbeelden<br />
- Zondag en Zaterdag uitsluiten: 0,6<br />
- Weekdagen uitschakelen: 1,2,3,4,5';
$_lang['dropdown'] = 'Dropdown lijst menu';
$_lang['earliest_date'] = 'Eerste datum';
$_lang['earliest_date_desc'] = 'De eerste datum die geselecteerd kan worden.';
$_lang['earliest_time'] = 'Eerste tijd';
$_lang['earliest_time_desc'] = 'De eerste tijd die geselecteerd kan worden.';
$_lang['email'] = 'Email';
$_lang['file'] = 'Bestand';
$_lang['height'] = 'Hoogte';
$_lang['hidden'] = 'Verborgen';
$_lang['htmlarea'] = 'HTML Area';
$_lang['htmltag'] = 'HTML Tag';
$_lang['image'] = 'Afbeelding';
$_lang['image_align'] = 'Uitlijning';
$_lang['image_align_list'] = 'none,baseline,top,middle,bottom,texttop,absmiddle,absbottom,left,right';
$_lang['image_alt'] = 'ALT tekst';
$_lang['image_allowedfiletypes'] = 'Toegestane bestandsextenties';
$_lang['image_allowedfiletypes_desc'] = 'Indien gezet, zal alleen bestanden tonen overeenkomend met deze extenties. Specificeer een komma gescheiden lijst, zonder de .';
$_lang['image_basepath'] = 'Basis Path';
$_lang['image_basepath_desc'] = 'Het bestands pad om de image TV aan te linknen. Als niet gezet, dan wordt de filemanager_path of de basis MODX pad wordt gebruikt. Er mag [[++base_path]], [[++core_path]] en [[++assets_path]] placeholders in deze waarde gebruikt worden.';
$_lang['image_basepath_relative'] = 'Basis Pad Relatief';
$_lang['image_basepath_relative_desc'] = 'Indien het basis pad hierboven niet relatief is aan de MODX install path, zet dit op Ja.';
$_lang['image_baseurl'] = 'Basis URL';
$_lang['image_baseurl_desc'] = 'Het bestand URL om de Afbeelding TV naar te verwijzen. Indien niet gezet, dan wordt de filemanager_url instelling gebruikt of de basis MODX URL. Er mag [[++base_url]], [[++core_url]] en [[++assets_url]] placeholders in deze waarde gebruikt worden.';
$_lang['image_baseurl_relative'] = 'Relatieve basis URL';
$_lang['image_baseurl_relative_desc'] = 'Indien de basis URL instelling hierboven niet relatief is aan de MODX installatie URL, zet deze op Ja.';
$_lang['image_border_size'] = 'Border grootte';
$_lang['image_hspace'] = 'H Space';
$_lang['image_vspace'] = 'V Space';
$_lang['listbox'] = 'Listbox (Single-Select)';
$_lang['listbox-multiple'] = 'Listbox (Multi-Select)';
$_lang['lower_case'] = 'Lower Case';
$_lang['name'] = 'Naam';
$_lang['number'] = 'Nummeriek';
$_lang['option'] = 'Radio button';
$_lang['rawtext'] = 'Raw Text (deprecated)';
$_lang['rawtextarea'] = 'Raw Textarea (deprecated)';
$_lang['richtext'] = 'RichText';
$_lang['sentence_case'] = 'Sentence Case';
$_lang['string'] = 'String';
$_lang['string_format'] = 'String Format';
$_lang['style'] = 'Style';
$_lang['tag_id'] = 'Tag ID';
$_lang['tag_name'] = 'Tag Name';
$_lang['target'] = 'Target';
$_lang['text'] = 'Text';
$_lang['textarea'] = 'Textarea';
$_lang['textareamini'] = 'Textarea (Mini)';
$_lang['title'] = 'Title';
$_lang['upper_case'] = 'Upper Case';
$_lang['url'] = 'URL';
$_lang['url_display_text'] = 'Display Text';
$_lang['width'] = 'Breedte';