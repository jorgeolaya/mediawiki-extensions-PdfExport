<?php
/**
 * Internationalisation file for the PdfExport extension.
 *
 * @file PdfExport.i18n.php
 * @ingroup PdfExport
 * @license http://www.gnu.org/copyleft/gpl.html GNU General Public License 2.0 or later
 */

$messages = array();

/** English
 * @author Thempel
 * @author Cneubauer
 * @author Kghbln
 */
$messages['en'] = array(
	'pdfexport-desc'                 => 'Renders a page as PDF',
	'pdfprint'                       => 'PDF Export',
	'pdfprint_error'                 => 'PDF Export - Error',
	'pdf_fontface_label'             => 'Fontface',
	'pdf_fontface_default'           => 'times',
	'pdf_fontface_options'           => 'times
courier
helvetica
monospace
sans
serif',
	'pdf_fontsize_label'             => 'Fontsize',
	'pdf_margins_label'              => 'Margins (displays in millimeters)',
	'pdf_margins_label_top'          => 'top',
	'pdf_margins_label_sides'        => 'sides',
	'pdf_margins_label_bottom'       => 'bottom',
	'pdf_print_link'                 => 'Print as PDF',
	'pdf_print_text'                 => 'Enter the title of the page you want to export to PDF',
	'pdf_submit'                     => 'Make PDF',
	'pdf_portrait'                   => 'Portrait',
	'pdf_landscape'                  => 'Landscape',
	'pdf_pass_protect_label'         => 'Password protection',
	'pdf_pass_protect_yes'           => 'yes',
	'pdf_pass_protect_no'            => 'no',
	'pdf_owner_pass_label'           => 'Owner password',
	'pdf_user_pass_label'            => 'User password',
	'pdf_perm_print_label'           => 'Allow printing?',
	'pdf_perm_print_yes'             => 'yes',
	'pdf_perm_print_no'              => 'no',
	'pdf_perm_modify_label'          => 'Allow modification?',
	'pdf_perm_modify_yes'            => 'yes',
	'pdf_perm_modify_no'             => 'no',
	'pdf_perm_copy_label'            => 'Allow copying text?',
	'pdf_perm_copy_yes'              => 'yes',
	'pdf_perm_copy_no'               => 'no',
	'pdf_perm_annotate_label'        => 'Allow annotation?',
	'pdf_perm_annotate_yes'          => 'yes',
	'pdf_perm_annotate_no'           => 'no',
	'pdf_size'                       => 'Paper size',
	'pdf_size_default'               => 'Letter',
	'pdf_size_options'               => 'Letter
A4',
	'pdf_filename'                   => 'Filename',
	'pdf_export_no_converter_found'  => 'No PDF Conversion software could be found. Please install either PrinceXML, DomPdf, or HTMLDoc.',
	'pdf_prince_error_not_installed' => 'The PrinceXML PDF creation software is not installed correctly. Please contact an administrator.',
	'pdf_prince_error'               => 'The PDF creation software was not able to create the PDF. If the problem persists, please contact an administrator.'
);

/** Message documentation (Message documentation)
 * @author Cneubauer
 * @author Kghbln
 */
$messages['qqq'] = array(
	'pdfexport-desc' => '{{desc}}',
	'pdfprint' => 'The title of the special page and the text of the link to it on [[Special:SpecialPages]]',
	'pdfprint_error' => 'The page title if there is an error',
	'pdf_fontface_label' => 'The special page form label for the fontface',
	'pdf_fontsize_label' => 'The special page form label for the fontsize',
	'pdf_margins_label' => 'The special page form label for the margins',
	'pdf_margins_label_top' => 'The special page form label for the margin top',
	'pdf_margins_label_sides' => 'The special page form label for the margin sides',
	'pdf_margins_label_bottom' => 'The special page form label for the margin bottom',
	'pdf_print_link' => 'The text of the link to print a page as PDF',
	'pdf_print_text' => 'The special page form text prompting the user to enter a page title',
	'pdf_submit' => 'The special page form submit button text',
	'pdf_portrait' => 'The text for the portrait layout option',
	'pdf_landscape' => 'The text for the landscaape layout option',
	'pdf_pass_protect_label' => 'The special page form label for the password protection',
	'pdf_pass_protect_yes' => 'The special page text for the yes option for password protection',
	'pdf_pass_protect_no' => 'The special page text for the no option for password protection',
	'pdf_owner_pass_label' => 'The special page form label for the owner password',
	'pdf_user_pass_label' => 'The special page form label for the user password',
	'pdf_perm_print_label' => 'The special page form label for the allow printing permission',
	'pdf_perm_print_yes' => 'The special page text for the yes option for print permission',
	'pdf_perm_print_no' => 'The special page text for the no option for print permission',
	'pdf_perm_modify_label' => 'The special page form label for the allow modification permission',
	'pdf_perm_modify_yes' => 'The special page text for the yes option for modification permission',
	'pdf_perm_modify_no' => 'The special page text for the no option for modification permission',
	'pdf_perm_copy_label' => 'The special page form label for the allow copying text permission',
	'pdf_perm_copy_yes' => 'The special page text for the yes option for copy text permission',
	'pdf_perm_copy_no' => 'The special page text for the no option for copy text permission',
	'pdf_perm_annotate_label' => 'The special page form label for the allow annotation permission',
	'pdf_perm_annotate_yes' => 'The special page text for the yes option for annotation permission',
	'pdf_perm_annotate_no' => 'The special page text for the no option for annotation permission',
	'pdf_size' => 'The special page form label for the paper size',
	'pdf_filename' => 'The special page form label for the filename',
	'pdf_export_no_converter_found' => 'An error message explaining that no PDF conversion software was configured',
	'pdf_prince_error_not_installed' => 'An error message explaining that the Prince PDF backend is not installed',
	'pdf_prince_error' => 'An error message describing a general error encountered when running the Prince PDF backend',
);

/** Breton (brezhoneg)
 * @author Y-M D
 */
$messages['br'] = array(
	'pdfexport-desc' => 'Pourvez a ra ur bajenn er furmad PDF',
	'pdfprint' => 'Ezporzh PDF',
	'pdfprint_error' => 'Ezporzh PDF - Fazi',
	'pdf_fontsize_label' => 'Ment ar font',
	'pdf_margins_label_sides' => 'kostezioù',
	'pdf_margins_label_bottom' => 'traoñ',
	'pdf_print_link' => 'Moullañ er furmad PDF',
	'pdf_print_text' => "Lakait titl ar bajenn a fell deoc'h ezporzhiañ er furmad PDF",
	'pdf_submit' => 'Krouiñ ur PDF',
	'pdf_portrait' => 'Poltred',
	'pdf_landscape' => 'Gweledva',
	'pdf_pass_protect_label' => 'Gwareziñ dre ur ger-tremen',
	'pdf_pass_protect_yes' => 'ya',
	'pdf_pass_protect_no' => 'ket',
	'pdf_owner_pass_label' => "Perc'henn ar ger-tremen",
	'pdf_perm_print_label' => 'Aotreañ moullañ ?',
	'pdf_perm_print_yes' => 'ya',
	'pdf_perm_print_no' => 'ket',
	'pdf_perm_modify_label' => "Aotreañ ar c'hemm ?",
	'pdf_perm_modify_yes' => 'ya',
	'pdf_perm_modify_no' => 'ket',
	'pdf_perm_copy_label' => 'Aotreañ eilañ an destenn ?',
	'pdf_perm_copy_yes' => 'ya',
	'pdf_perm_copy_no' => 'ket',
	'pdf_perm_annotate_label' => 'Aotreañ an notennaouiñ ?',
	'pdf_perm_annotate_yes' => 'ya',
	'pdf_perm_annotate_no' => 'ket',
	'pdf_size' => 'Ment ar paper',
	'pdf_filename' => 'Anv ar restr',
	'pdf_export_no_converter_found' => "N'eus bet kavet meziant amdreiñ e PDF ebet. Mar plij stalit PrinceXML, DomPdf pe HTMLDoc.",
	'pdf_prince_error_not_installed' => "N'eo ket staliet er mod reizh ar meziant PrinceXM evit krouiñ PDFoù. Mar plij kit e darempred gant ur merour.",
	'pdf_prince_error' => "N'en deus ket gellet ar meziant krouiñ PDFoù krouiñ ar restr PDF. Ma talc'h ar gudenn, mar plij kit e darempred gant ur merour.",
);

/** Czech (česky)
 * @author Vks
 */
$messages['cs'] = array(
	'pdf_print_link' => 'Vytisknout jako PDF',
	'pdf_print_text' => 'Zadejte titulek stránky, kterou chcete vyexportovat do PDF',
	'pdf_submit' => 'Vytvořit PDF',
	'pdf_portrait' => 'Na výšku',
	'pdf_landscape' => 'Na šířku',
	'pdf_pass_protect_label' => 'Ochrana heslem',
	'pdf_pass_protect_yes' => 'ano',
	'pdf_pass_protect_no' => 'ne',
	'pdf_owner_pass_label' => 'Heslo vlastníka',
	'pdf_user_pass_label' => 'Uživatelské heslo',
	'pdf_perm_print_label' => 'Povolit tisk?',
	'pdf_perm_print_yes' => 'ano',
	'pdf_perm_print_no' => 'ne',
	'pdf_perm_modify_label' => 'Povolit změny?',
	'pdf_perm_modify_yes' => 'ano',
	'pdf_perm_modify_no' => 'ne',
	'pdf_perm_copy_label' => 'Povolit kopírování textu?',
	'pdf_perm_copy_yes' => 'ano',
	'pdf_perm_copy_no' => 'ne',
	'pdf_perm_annotate_label' => 'Povolit vkládání poznámek?',
	'pdf_perm_annotate_yes' => 'ano',
	'pdf_perm_annotate_no' => 'ne',
	'pdf_size' => 'Velikost papíru',
	'pdf_filename' => 'Název souboru',
);

/** German (Deutsch)
 * @author Kghbln
 */
$messages['de'] = array(
	'pdfexport-desc' => 'Ermöglicht die Ausgabe einer Seite als PDF-Datei',
	'pdfprint' => 'Seite als PDF exportieren',
	'pdfprint_error' => 'PDF-Export – Fehler',
	'pdf_fontface_label' => 'Schriftart',
	'pdf_fontsize_label' => 'Schriftgröße',
	'pdf_margins_label' => 'Ränder (in Millimetern)',
	'pdf_margins_label_top' => 'oben',
	'pdf_margins_label_sides' => 'an den Seiten',
	'pdf_margins_label_bottom' => 'unten',
	'pdf_print_link' => 'Als PDF-Datei ausgeben',
	'pdf_print_text' => 'Gib den Namen der Seite an, die als PDF-Datei exportiert werden soll.',
	'pdf_submit' => 'Als PDF ausgeben',
	'pdf_portrait' => 'Hochformat',
	'pdf_landscape' => 'Querformat',
	'pdf_pass_protect_label' => 'Passwortschutz',
	'pdf_pass_protect_yes' => 'Ja',
	'pdf_pass_protect_no' => 'Nein',
	'pdf_owner_pass_label' => 'Passwort des Besitzers',
	'pdf_user_pass_label' => 'Passwort des Benutzers',
	'pdf_perm_print_label' => 'Drucken zulassen?',
	'pdf_perm_print_yes' => 'Ja',
	'pdf_perm_print_no' => 'Nein',
	'pdf_perm_modify_label' => 'Änderungen zulassen?',
	'pdf_perm_modify_yes' => 'Ja',
	'pdf_perm_modify_no' => 'Nein',
	'pdf_perm_copy_label' => 'Entnehmen von Inhalten zulassen?',
	'pdf_perm_copy_yes' => 'Ja',
	'pdf_perm_copy_no' => 'Nein',
	'pdf_perm_annotate_label' => 'Kommentare zulassen?',
	'pdf_perm_annotate_yes' => 'Ja',
	'pdf_perm_annotate_no' => 'Nein',
	'pdf_size' => 'Papierformat',
	'pdf_filename' => 'Dateiname',
	'pdf_export_no_converter_found' => 'Es wurde keine Software zum Erzeugen der PDF-Datei gefunden. Es muss entweder PrinceXML, DomPdf, or HTMLDOC installiert werden.',
	'pdf_prince_error_not_installed' => 'Die Software PrinceXML zum Erzeugen der PDF-Datei wurde nicht richtig installiert. Bitte kontaktiere einen Systemadministrator.',
	'pdf_prince_error' => 'Die Software zum Erzeugen der PDF-Datei funktioniert nicht. Bitte kontaktiere einen Systemadministrator, sofern das Problem andauert.',
);

/** German (formal address) (‪Deutsch (Sie-Form)‬)
 * @author Kghbln
 */
$messages['de-formal'] = array(
	'pdf_print_text' => 'Geben Sie den Namen der Seite an, die als PDF-Datei exportiert werden soll.',
	'pdf_prince_error_not_installed' => 'Die Software PrinceXML, zum Erzeugen der PDF-Datei, wurde nicht richtig installiert. Bitte kontaktierem Sie einen Systemadministrator.',
	'pdf_prince_error' => 'Die Software zum Erzeugen der PDF-Datei funktioniert nicht. Bitte kontaktieren Sie einen Systemadministrator, sofern das Problem andauert.',
);

/** Estonian (eesti)
 * @author Avjoska
 */
$messages['et'] = array(
	'pdf_margins_label_top' => 'ülaosa',
	'pdf_margins_label_sides' => 'küljed',
	'pdf_margins_label_bottom' => 'alaosa',
	'pdf_pass_protect_label' => 'Parooli kaitsmine',
	'pdf_pass_protect_yes' => 'jah',
	'pdf_pass_protect_no' => 'ei',
	'pdf_owner_pass_label' => 'Omaniku parool',
	'pdf_user_pass_label' => 'Kasutaja parool',
	'pdf_perm_print_yes' => 'jah',
	'pdf_perm_print_no' => 'ei',
	'pdf_perm_modify_yes' => 'jah',
	'pdf_perm_modify_no' => 'ei',
	'pdf_perm_copy_yes' => 'jah',
	'pdf_perm_copy_no' => 'ei',
	'pdf_perm_annotate_yes' => 'jah',
	'pdf_perm_annotate_no' => 'ei',
	'pdf_size' => 'Paberi suurus',
	'pdf_filename' => 'Failinimi',
);

/** Basque (euskara)
 * @author පසිඳු කාවින්ද
 */
$messages['eu'] = array(
	'pdf_pass_protect_yes' => 'bai',
	'pdf_pass_protect_no' => 'ez',
	'pdf_perm_print_yes' => 'bai',
	'pdf_perm_print_no' => 'ez',
	'pdf_perm_modify_yes' => 'bai',
	'pdf_perm_modify_no' => 'ez',
	'pdf_perm_copy_yes' => 'bai',
	'pdf_perm_copy_no' => 'ez',
	'pdf_perm_annotate_yes' => 'bai',
	'pdf_perm_annotate_no' => 'ez',
);

/** Finnish (suomi)
 * @author Beluga
 * @author Nike
 */
$messages['fi'] = array(
	'pdfprint' => 'Vie PDF-tiedostoksi',
	'pdfprint_error' => 'PDF-vienti epäonnistui',
	'pdf_print_link' => 'Tulosta PDF-tiedostoksi',
	'pdf_submit' => 'Tee PDF',
	'pdf_portrait' => 'Pysty',
	'pdf_landscape' => 'Vaaka',
	'pdf_pass_protect_label' => 'Salasanasuojaus',
	'pdf_pass_protect_yes' => 'kyllä',
	'pdf_pass_protect_no' => 'ei',
	'pdf_perm_print_yes' => 'kyllä',
	'pdf_perm_print_no' => 'ei',
	'pdf_perm_modify_label' => 'Sallitaanko muutokset?',
	'pdf_perm_modify_yes' => 'kyllä',
	'pdf_perm_modify_no' => 'ei',
	'pdf_perm_copy_label' => 'Sallitaanko tekstin kopiointi?',
	'pdf_perm_copy_yes' => 'kyllä',
	'pdf_perm_copy_no' => 'ei',
	'pdf_perm_annotate_yes' => 'kyllä',
	'pdf_perm_annotate_no' => 'ei',
	'pdf_size' => 'Paperikoko',
	'pdf_filename' => 'Tiedostonimi',
);

/** French (français)
 * @author Brunoperel
 */
$messages['fr'] = array(
	'pdfexport-desc' => 'Restitue une page en format PDF',
	'pdfprint' => 'Export PDF',
	'pdfprint_error' => 'Export PDF - Erreur',
	'pdf_fontsize_label' => 'Taille de police',
	'pdf_margins_label' => 'Marges (affichage en millimètres)',
	'pdf_margins_label_top' => 'haut',
	'pdf_margins_label_sides' => 'côtés',
	'pdf_margins_label_bottom' => 'bas',
	'pdf_print_link' => 'Imprimer au format PDF',
	'pdf_print_text' => 'Entrez le titre de la page que vous souhaitez exporter au format PDF',
	'pdf_submit' => 'Créer un PDF',
	'pdf_portrait' => 'Portrait',
	'pdf_landscape' => 'Paysage',
	'pdf_pass_protect_label' => 'Protection par mot de passe',
	'pdf_pass_protect_yes' => 'oui',
	'pdf_pass_protect_no' => 'non',
	'pdf_owner_pass_label' => 'Propriétaire du mot de passe',
	'pdf_user_pass_label' => 'Mot de passe utilisateur',
	'pdf_perm_print_label' => "Autoriser l'impression ?",
	'pdf_perm_print_yes' => 'oui',
	'pdf_perm_print_no' => 'non',
	'pdf_perm_modify_label' => 'Autoriser la modification ?',
	'pdf_perm_modify_yes' => 'oui',
	'pdf_perm_modify_no' => 'non',
	'pdf_perm_copy_label' => 'Autoriser la copie de texte ?',
	'pdf_perm_copy_yes' => 'oui',
	'pdf_perm_copy_no' => 'non',
	'pdf_perm_annotate_label' => 'Autoriser les annotations ?',
	'pdf_perm_annotate_yes' => 'oui',
	'pdf_perm_annotate_no' => 'non',
	'pdf_size' => 'Format du papier',
	'pdf_filename' => 'Nom du fichier',
	'pdf_export_no_converter_found' => "Aucun logiciel de conversion PDF n'a pu être trouvé. Veuillez installer PrinceXML, DomPdf ou HTMLDoc.",
	'pdf_prince_error_not_installed' => "Le logiciel de création de PDF PrinceXML n'est pas installé correctement. Veuillez contacter un administrateur.",
	'pdf_prince_error' => "Le logiciel de création de PDF n'a pas pu créer le fichier PDF. Si le problème persiste, veuillez contacter un administrateur.",
);

/** Franco-Provençal (arpetan)
 * @author ChrisPtDe
 */
$messages['frp'] = array(
	'pdf_print_link' => 'Emprimar u format PDF',
	'pdf_submit' => 'Fâre un PDF',
	'pdf_portrait' => 'Portrèt',
	'pdf_landscape' => 'Payisâjo',
	'pdf_pass_protect_label' => 'Protèccion per contresegno',
	'pdf_pass_protect_yes' => 'ouè',
	'pdf_pass_protect_no' => 'nan',
	'pdf_perm_print_yes' => 'ouè',
	'pdf_perm_print_no' => 'nan',
	'pdf_perm_modify_yes' => 'ouè',
	'pdf_perm_modify_no' => 'nan',
	'pdf_perm_copy_yes' => 'ouè',
	'pdf_perm_copy_no' => 'nan',
	'pdf_perm_annotate_yes' => 'ouè',
	'pdf_perm_annotate_no' => 'nan',
	'pdf_size' => 'Format du papiér',
	'pdf_filename' => 'Nom du fichiér',
);

/** Galician (galego)
 * @author Toliño
 */
$messages['gl'] = array(
	'pdfexport-desc' => 'Renderiza unha páxina en formato PDF',
	'pdfprint' => 'Exportación en PDF',
	'pdfprint_error' => 'Exportación en PDF - Erro',
	'pdf_fontface_label' => 'Fonte de letra',
	'pdf_fontsize_label' => 'Tamaño da letra',
	'pdf_margins_label' => 'Marxes (móstrase en milímetros)',
	'pdf_margins_label_top' => 'arriba',
	'pdf_margins_label_sides' => 'lados',
	'pdf_margins_label_bottom' => 'pé',
	'pdf_print_link' => 'Imprimir como PDF',
	'pdf_print_text' => 'Insira o título da páxina que queira exportar en formato PDF',
	'pdf_submit' => 'Crear o PDF',
	'pdf_portrait' => 'Retrato',
	'pdf_landscape' => 'Paisaxe',
	'pdf_pass_protect_label' => 'Protección por contrasinal',
	'pdf_pass_protect_yes' => 'si',
	'pdf_pass_protect_no' => 'non',
	'pdf_owner_pass_label' => 'Contrasinal de propietario',
	'pdf_user_pass_label' => 'Contrasinal de usuario',
	'pdf_perm_print_label' => 'Quere permitir a impresión?',
	'pdf_perm_print_yes' => 'si',
	'pdf_perm_print_no' => 'non',
	'pdf_perm_modify_label' => 'Quere permitir a modificación?',
	'pdf_perm_modify_yes' => 'si',
	'pdf_perm_modify_no' => 'non',
	'pdf_perm_copy_label' => 'Quere permitir a copia de texto?',
	'pdf_perm_copy_yes' => 'si',
	'pdf_perm_copy_no' => 'non',
	'pdf_perm_annotate_label' => 'Quere permitir as anotacións?',
	'pdf_perm_annotate_yes' => 'si',
	'pdf_perm_annotate_no' => 'non',
	'pdf_size' => 'Tamaño do papel',
	'pdf_filename' => 'Nome do ficheiro',
	'pdf_export_no_converter_found' => 'Non se atopou ningún software de conversión a PDF. Instale PrinceXML, DomPdf ou HTMLDoc.',
	'pdf_prince_error_not_installed' => 'O software de creación de ficheiros PDF PrinceXML non está instalado correctamente. Póñase en contacto cun administrador.',
	'pdf_prince_error' => 'O software de creación de ficheiros PDF non foi capaz de crear o PDF. Se o problema continúa, póñase en contacto cun administrador.',
);

/** Hindi (हिन्दी)
 * @author Karthi.dr
 */
$messages['hi'] = array(
	'pdf_pass_protect_yes' => 'हाँ',
	'pdf_pass_protect_no' => 'नहीं',
);

/** Upper Sorbian (hornjoserbsce)
 * @author Michawiki
 */
$messages['hsb'] = array(
	'pdfexport-desc' => 'Zmóžnja wudawanje strony jako PDF',
	'pdfprint' => 'PDF-eksport',
	'pdfprint_error' => 'PDF-eksport - zmylk',
	'pdf_fontface_label' => 'Družina pisma',
	'pdf_fontsize_label' => 'Wulkosć pisma',
	'pdf_margins_label' => 'Kromy (w milimetrach)',
	'pdf_margins_label_top' => 'horjeka',
	'pdf_margins_label_sides' => 'boki',
	'pdf_margins_label_bottom' => 'deleka',
	'pdf_print_link' => 'Jako PDF ćišćeć',
	'pdf_print_text' => 'Zapodaj titul strony, kotruž chceš jako PDF wudać',
	'pdf_submit' => 'Jako PDF wudać',
	'pdf_portrait' => 'Wysoki format',
	'pdf_landscape' => 'Prěčny format',
	'pdf_pass_protect_label' => 'Hesłowy škit',
	'pdf_pass_protect_yes' => 'haj',
	'pdf_pass_protect_no' => 'ně',
	'pdf_owner_pass_label' => 'Hesło wobsedźerja',
	'pdf_user_pass_label' => 'Wužiwarske hesło',
	'pdf_perm_print_label' => 'Ćišćenje dowolić?',
	'pdf_perm_print_yes' => 'haj',
	'pdf_perm_print_no' => 'ně',
	'pdf_perm_modify_label' => 'Změny dowolić?',
	'pdf_perm_modify_yes' => 'haj',
	'pdf_perm_modify_no' => 'ně',
	'pdf_perm_copy_label' => 'Kopěrowanje teksta dowolić?',
	'pdf_perm_copy_yes' => 'haj',
	'pdf_perm_copy_no' => 'ně',
	'pdf_perm_annotate_label' => 'Komentary dowolić?',
	'pdf_perm_annotate_yes' => 'haj',
	'pdf_perm_annotate_no' => 'ně',
	'pdf_size' => 'Papjerowy format',
	'pdf_filename' => 'Datajowe mjeno',
	'pdf_export_no_converter_found' => 'Softwara za PDF-konwertowanje njeje so namakała. Prošu instaluj pak PrinceXML, DomPdf abo HTMLDoc.',
	'pdf_prince_error_not_installed' => 'Softwara PrinceXML za wutworjenje PDF-datajow njeje so prawje instalowała. Prošu staj so z administratorom do zwiska.',
	'pdf_prince_error' => 'Softwara za wutworjenje PDF-datajow njemóže PDF-dataje wutworić. Jeli tutón problem dale eksistuje, staj so z administratorom do zwiska.',
);

/** Hungarian (magyar)
 * @author පසිඳු කාවින්ද
 */
$messages['hu'] = array(
	'pdf_pass_protect_yes' => 'igen',
	'pdf_pass_protect_no' => 'nem',
	'pdf_perm_print_yes' => 'igen',
	'pdf_perm_print_no' => 'nem',
	'pdf_perm_modify_yes' => 'igen',
	'pdf_perm_modify_no' => 'nem',
	'pdf_perm_copy_yes' => 'igen',
	'pdf_perm_copy_no' => 'nem',
	'pdf_perm_annotate_yes' => 'igen',
	'pdf_perm_annotate_no' => 'nem',
);

/** Interlingua (interlingua)
 * @author McDutchie
 */
$messages['ia'] = array(
	'pdfexport-desc' => 'Rende un pagina in formato PDF',
	'pdfprint' => 'Exportation in RDF',
	'pdfprint_error' => 'Exportation in PDF – Error',
	'pdf_fontface_label' => 'Typo de litteras',
	'pdf_fontsize_label' => 'Dimension de litteras',
	'pdf_margins_label' => 'Margines (in millimetros)',
	'pdf_margins_label_top' => 'superior',
	'pdf_margins_label_sides' => 'lateral',
	'pdf_margins_label_bottom' => 'inferior',
	'pdf_print_link' => 'Imprimer in un file PDF',
	'pdf_print_text' => 'Specifica le titulo del pagina que tu vole exportar in formato PDF',
	'pdf_submit' => 'Facer PDF',
	'pdf_portrait' => 'Portrait',
	'pdf_landscape' => 'Paisage',
	'pdf_pass_protect_label' => 'Protection per contrasigno',
	'pdf_pass_protect_yes' => 'si',
	'pdf_pass_protect_no' => 'no',
	'pdf_owner_pass_label' => 'Contrasigno del proprietario',
	'pdf_user_pass_label' => 'Contrasigno del usator',
	'pdf_perm_print_label' => 'Permitter impression?',
	'pdf_perm_print_yes' => 'si',
	'pdf_perm_print_no' => 'no',
	'pdf_perm_modify_label' => 'Permitter modification?',
	'pdf_perm_modify_yes' => 'si',
	'pdf_perm_modify_no' => 'no',
	'pdf_perm_copy_label' => 'Permitter de copiar texto?',
	'pdf_perm_copy_yes' => 'si',
	'pdf_perm_copy_no' => 'no',
	'pdf_perm_annotate_label' => 'Permitter annotation?',
	'pdf_perm_annotate_yes' => 'si',
	'pdf_perm_annotate_no' => 'no',
	'pdf_size' => 'Formato del papiro',
	'pdf_filename' => 'Nomine del file',
	'pdf_export_no_converter_found' => 'Nulle software pro le conversion in PDF ha essite trovate. Per favor installa PrinceXML, DomPdf o HTMLDoc.',
	'pdf_prince_error_not_installed' => 'Le software de creation de PDF PrinceXML non es installate correctemente. Per favor contacta un administrator.',
	'pdf_prince_error' => 'Le software de creation de PDF non ha potite crear le PDF. Si le problema persiste, per favor contacta un administrator.',
);

/** Italian (italiano)
 * @author Darth Kule
 */
$messages['it'] = array(
	'pdfexport-desc' => 'Esegue il rendering di una pagina in formato PDF',
	'pdfprint' => 'Esportazione in PDF',
	'pdfprint_error' => 'Esportazione in PDF - Errore',
	'pdf_fontface_label' => 'Tipo carattere',
	'pdf_fontsize_label' => 'Dimensione carattere',
	'pdf_margins_label' => 'Margini (in millimetri)',
	'pdf_margins_label_top' => 'superiore',
	'pdf_margins_label_sides' => 'laterali',
	'pdf_margins_label_bottom' => 'inferiore',
	'pdf_print_link' => 'Stampa in formato PDF',
	'pdf_print_text' => 'Inserire il titolo della pagina che si desidera esportare in PDF',
	'pdf_submit' => 'Rendere PDF',
	'pdf_portrait' => 'Verticale',
	'pdf_landscape' => 'Orizzontale',
	'pdf_pass_protect_label' => 'Protezione con password',
	'pdf_pass_protect_yes' => 'sì',
	'pdf_pass_protect_no' => 'no',
	'pdf_owner_pass_label' => 'Password del proprietario',
	'pdf_user_pass_label' => 'Password utente',
	'pdf_perm_print_label' => 'Consentire la stampa?',
	'pdf_perm_print_yes' => 'sì',
	'pdf_perm_print_no' => 'no',
	'pdf_perm_modify_label' => 'Consentire la modifica?',
	'pdf_perm_modify_yes' => 'sì',
	'pdf_perm_modify_no' => 'no',
	'pdf_perm_copy_label' => 'Consentire di copiare il testo?',
	'pdf_perm_copy_yes' => 'sì',
	'pdf_perm_copy_no' => 'no',
	'pdf_perm_annotate_label' => 'Consentire le annotazioni?',
	'pdf_perm_annotate_yes' => 'sì',
	'pdf_perm_annotate_no' => 'no',
	'pdf_size' => 'Formato della carta',
	'pdf_filename' => 'Nome del file',
	'pdf_export_no_converter_found' => 'Nessun software di conversione PDF trovato. Si prega di installare PrinceXML, DomPdf o HTMLDoc.',
	'pdf_prince_error_not_installed' => 'Il software di creazione di PDF PrinceXML non è installato correttamente. Si prega di contattare un amministratore.',
	'pdf_prince_error' => 'Il software di creazione di PDF non era in grado di creare il PDF. Se il problema persiste, contattare un amministratore.',
);

/** Japanese (日本語)
 * @author Shirayuki
 */
$messages['ja'] = array(
	'pdfexport-desc' => 'ページをPDF形式にレンダリングする',
	'pdfprint' => 'PDF書き出し',
	'pdfprint_error' => 'PDF書き出し - エラー',
	'pdf_fontface_label' => 'フォント名',
	'pdf_fontsize_label' => 'フォントサイズ',
	'pdf_margins_label' => '余白 (mm)',
	'pdf_margins_label_top' => '上',
	'pdf_margins_label_sides' => '左右',
	'pdf_margins_label_bottom' => '下',
	'pdf_print_link' => 'PDFとして印刷',
	'pdf_print_text' => 'PDF形式で書き出したいページ名を入力',
	'pdf_submit' => 'PDFを作成',
	'pdf_portrait' => '縦',
	'pdf_landscape' => '横',
	'pdf_pass_protect_label' => 'パスワード保護',
	'pdf_pass_protect_yes' => 'はい',
	'pdf_pass_protect_no' => 'いいえ',
	'pdf_owner_pass_label' => '所有者パスワード',
	'pdf_user_pass_label' => '利用者パスワード',
	'pdf_perm_print_label' => '印刷を許可しますか?',
	'pdf_perm_print_yes' => 'はい',
	'pdf_perm_print_no' => 'いいえ',
	'pdf_perm_modify_label' => '変更を許可しますか?',
	'pdf_perm_modify_yes' => 'はい',
	'pdf_perm_modify_no' => 'いいえ',
	'pdf_perm_copy_label' => 'テキストのコピーを許可しますか?',
	'pdf_perm_copy_yes' => 'はい',
	'pdf_perm_copy_no' => 'いいえ',
	'pdf_perm_annotate_label' => '注釈を許可しますか?',
	'pdf_perm_annotate_yes' => 'はい',
	'pdf_perm_annotate_no' => 'いいえ',
	'pdf_size' => '用紙サイズ',
	'pdf_filename' => 'ファイル名',
	'pdf_export_no_converter_found' => 'PDF変換ソフトウェアが見つかりません。PrinceXML、DomPdf、HTMLDocのいずれかをインストールしてください。',
	'pdf_prince_error_not_installed' => 'PDF作成ソフトウェアPrinceXMLが正しくインストールされていません。管理者にお問い合わせください。',
	'pdf_prince_error' => 'PDF作成ソフトウェアがPDFを作成できませんでした。この問題が続く場合は、管理者にお問い合わせください。',
);

/** Georgian (ქართული)
 * @author David1010
 */
$messages['ka'] = array(
	'pdfprint' => 'PDF-ის ექსპორტი',
	'pdfprint_error' => 'PDF-ის ექსპორტი - შეცდომა',
	'pdf_fontsize_label' => 'შრიფტის ზომა',
	'pdf_margins_label_top' => 'ზედა',
	'pdf_margins_label_bottom' => 'ქვედა',
	'pdf_print_link' => 'შენახვა PDF ფორმატში',
	'pdf_print_text' => 'შეიყვანეთ გვერდის სათაური რომლის PDF-ში ექსპორტიც გსურთ',
	'pdf_submit' => 'PDF-ის შექმნა',
	'pdf_portrait' => 'პორტრეტი',
	'pdf_landscape' => 'ლანდშაფტი',
	'pdf_pass_protect_yes' => 'დიახ',
	'pdf_pass_protect_no' => 'არა',
	'pdf_perm_print_yes' => 'დიახ',
	'pdf_perm_print_no' => 'არა',
	'pdf_perm_modify_yes' => 'დიახ',
	'pdf_perm_modify_no' => 'არა',
	'pdf_perm_copy_yes' => 'დიახ',
	'pdf_perm_copy_no' => 'არა',
	'pdf_perm_annotate_yes' => 'დიახ',
	'pdf_perm_annotate_no' => 'არა',
	'pdf_size' => 'ქაღალდის ზომა',
	'pdf_filename' => 'ფაილის სახელი',
);

/** Korean (한국어)
 * @author 아라
 */
$messages['ko'] = array(
	'pdfexport-desc' => 'PDF로 문서 렌더',
	'pdfprint' => 'PDF 내보내기',
	'pdfprint_error' => 'PDF 내보내기 - 오류',
	'pdf_fontface_label' => '글꼴',
	'pdf_fontsize_label' => '글자 크기',
	'pdf_margins_label' => '여백 (밀리미터로 표기)',
	'pdf_margins_label_top' => '위쪽',
	'pdf_margins_label_sides' => '양쪽',
	'pdf_margins_label_bottom' => '아래쪽',
	'pdf_print_link' => 'PDF로 인쇄',
	'pdf_print_text' => 'PDF로 내보낼 문서 제목을 입력하세요',
	'pdf_submit' => 'PDF 만들기',
	'pdf_portrait' => '인물 사진',
	'pdf_landscape' => '풍경',
	'pdf_pass_protect_label' => '비밀번호 보호',
	'pdf_pass_protect_yes' => '예',
	'pdf_pass_protect_no' => '아니오',
	'pdf_owner_pass_label' => '소유자 비밀번호',
	'pdf_user_pass_label' => '사용자 비밀번호',
	'pdf_perm_print_label' => '인쇄를 허용하겠습니까?',
	'pdf_perm_print_yes' => '예',
	'pdf_perm_print_no' => '아니오',
	'pdf_perm_modify_label' => '수정을 허용하겠습니까?',
	'pdf_perm_modify_yes' => '예',
	'pdf_perm_modify_no' => '아니오',
	'pdf_perm_copy_label' => '텍스트 복사를 허용하겠습니까?',
	'pdf_perm_copy_yes' => '예',
	'pdf_perm_copy_no' => '아니오',
	'pdf_perm_annotate_label' => '주석을 허용하겠습니까?',
	'pdf_perm_annotate_yes' => '예',
	'pdf_perm_annotate_no' => '아니오',
	'pdf_size' => '용지 크기',
	'pdf_filename' => '파일 이름',
	'pdf_export_no_converter_found' => 'PDF 변환 소프트웨어를 찾을 수 없습니다. PrinceXML, DomPdf, 또는 HTMLDoc 중 하나를 설치하세요.',
	'pdf_prince_error_not_installed' => 'PrinceXML PDF 만들기 소프트웨어를 올바르게 설치하지 않았습니다. 관리자에게 문의하세요.',
	'pdf_prince_error' => 'PDF 만들기 소프트웨어가 PDF를 만들 수 없습니다. 문제가 계속되면 관리자에게 문의하세요.',
);

/** Luxembourgish (Lëtzebuergesch)
 * @author Robby
 */
$messages['lb'] = array(
	'pdfexport-desc' => 'Transforméiert eng Säit a PDF',
	'pdfprint' => 'PDF-Export',
	'pdfprint_error' => 'PDF-Export – Feeler',
	'pdf_margins_label' => 'Ränner (a Millimeter)',
	'pdf_margins_label_top' => 'uewen',
	'pdf_margins_label_sides' => 'Säiten',
	'pdf_margins_label_bottom' => 'ënnen',
	'pdf_print_link' => 'Als PDF drécken',
	'pdf_print_text' => 'Gitt den Titel vun der Säit an déi Dir als PDF wëllt',
	'pdf_submit' => 'PDF maachen',
	'pdf_portrait' => 'Portrait',
	'pdf_landscape' => 'Landscape',
	'pdf_pass_protect_label' => 'Passwuertschutz',
	'pdf_pass_protect_yes' => 'jo',
	'pdf_pass_protect_no' => 'neen',
	'pdf_user_pass_label' => 'Benotzer-Passwuert',
	'pdf_perm_print_label' => 'Drécken erlaben?',
	'pdf_perm_print_yes' => 'jo',
	'pdf_perm_print_no' => 'neen',
	'pdf_perm_modify_label' => 'Änneren erlaben?',
	'pdf_perm_modify_yes' => 'jo',
	'pdf_perm_modify_no' => 'neen',
	'pdf_perm_copy_label' => 'Kopéiere vum Text erlaben?',
	'pdf_perm_copy_yes' => 'jo',
	'pdf_perm_copy_no' => 'neen',
	'pdf_perm_annotate_yes' => 'jo',
	'pdf_perm_annotate_no' => 'neen',
	'pdf_size' => 'Pabeiergréisst',
	'pdf_filename' => 'Numm vum Fichier',
);

/** Macedonian (македонски)
 * @author Bjankuloski06
 */
$messages['mk'] = array(
	'pdfexport-desc' => 'Испис на страница во PDF',
	'pdfprint' => 'PDF-извоз',
	'pdfprint_error' => 'PDF-извоз — Грешка',
	'pdf_fontface_label' => 'Фонт',
	'pdf_fontsize_label' => 'Големина на фонтот',
	'pdf_margins_label' => 'Маргини (се прикажува во милиметри)',
	'pdf_margins_label_top' => 'горе',
	'pdf_margins_label_sides' => 'странично',
	'pdf_margins_label_bottom' => 'долу',
	'pdf_print_link' => 'Печати како PDF',
	'pdf_print_text' => 'Внесете го насловот на страницата што сакате да ја извезете како PDF',
	'pdf_submit' => 'Направи PDF',
	'pdf_portrait' => 'Исправено',
	'pdf_landscape' => 'Водорамно',
	'pdf_pass_protect_label' => 'Заштита со лозинка',
	'pdf_pass_protect_yes' => 'да',
	'pdf_pass_protect_no' => 'не',
	'pdf_owner_pass_label' => 'Лозинка на сопственикот',
	'pdf_user_pass_label' => 'Лозинка на корисникот',
	'pdf_perm_print_label' => 'Да може да се печати?',
	'pdf_perm_print_yes' => 'да',
	'pdf_perm_print_no' => 'не',
	'pdf_perm_modify_label' => 'Да може да се менува?',
	'pdf_perm_modify_yes' => 'да',
	'pdf_perm_modify_no' => 'не',
	'pdf_perm_copy_label' => 'Да може текстот да се копира?',
	'pdf_perm_copy_yes' => 'да',
	'pdf_perm_copy_no' => 'не',
	'pdf_perm_annotate_label' => 'Да може да се ставаат прибелешки?',
	'pdf_perm_annotate_yes' => 'да',
	'pdf_perm_annotate_no' => 'не',
	'pdf_size' => 'Големина на листот',
	'pdf_filename' => 'Име на податотеката',
	'pdf_export_no_converter_found' => 'Не пронајдов програм за претворање во PDF. Инсталирајте еден од следниве: PrinceXML, DomPdf или HTMLDoc.',
	'pdf_prince_error_not_installed' => 'Програмот PrinceXML за создавање на PDF не е инсталиран како што треба. Обратете се кај администраторот.',
	'pdf_prince_error' => 'Програмот за испис на PDF не можеш да ја создаде податотеката. Обратете се кај администраторот.',
);

/** Malay (Bahasa Melayu)
 * @author Anakmalaysia
 */
$messages['ms'] = array(
	'pdfexport-desc' => 'Memaparkan halaman dalam bentuk PDF',
	'pdfprint' => 'Eksport PDF',
	'pdfprint_error' => 'Eksport PDF - Ralat',
	'pdf_fontface_label' => 'Rupa huruf',
	'pdf_fontsize_label' => 'Saiz huruf',
	'pdf_margins_label' => 'Jidar (mm)',
	'pdf_margins_label_top' => 'atas',
	'pdf_margins_label_sides' => 'tepi',
	'pdf_margins_label_bottom' => 'bawah',
	'pdf_print_link' => 'Cetak dalam bentuk PDF',
	'pdf_print_text' => 'Isikan tajuk halaman yang ingin anda eksport dalam bentuk PDF',
	'pdf_submit' => 'Buat PDF',
	'pdf_portrait' => 'Potret',
	'pdf_landscape' => 'Landskap',
	'pdf_pass_protect_label' => 'Perlindungan kata laluan',
	'pdf_pass_protect_yes' => 'ya',
	'pdf_pass_protect_no' => 'tidak',
	'pdf_owner_pass_label' => 'Kata laluan pemilik',
	'pdf_user_pass_label' => 'Kata laluan pengguna',
	'pdf_perm_print_label' => 'Benarkan pencetakan?',
	'pdf_perm_print_yes' => 'ya',
	'pdf_perm_print_no' => 'tidak',
	'pdf_perm_modify_label' => 'Benarkan pengubahsuaian?',
	'pdf_perm_modify_yes' => 'ya',
	'pdf_perm_modify_no' => 'tidak',
	'pdf_perm_copy_label' => 'Benarkan penyalinan teks?',
	'pdf_perm_copy_yes' => 'ya',
	'pdf_perm_copy_no' => 'tidak',
	'pdf_perm_annotate_label' => 'Benarkan anotasi?',
	'pdf_perm_annotate_yes' => 'ya',
	'pdf_perm_annotate_no' => 'tidak',
	'pdf_size' => 'Saiz kertas',
	'pdf_filename' => 'Nama fail',
	'pdf_export_no_converter_found' => 'Perisian Penukar PDF tidak dijumpai. Sila pasang PrinceXML, DomPdf atau HTMLDoc.',
	'pdf_prince_error_not_installed' => 'Perisian membuat PDF PrinceXML tidak dipasang dengan betul. Sila hubungi pentadbir.',
	'pdf_prince_error' => 'Perisian membuat PDF tidak dapat membuat PDF. Jika masalah ini berlanjutan, sila hubungi pentadbir.',
);

/** Maltese (Malti)
 * @author පසිඳු කාවින්ද
 */
$messages['mt'] = array(
	'pdf_pass_protect_yes' => 'iva',
	'pdf_pass_protect_no' => 'le',
	'pdf_perm_print_yes' => 'iva',
	'pdf_perm_print_no' => 'le',
	'pdf_perm_modify_yes' => 'iva',
	'pdf_perm_modify_no' => 'le',
	'pdf_perm_copy_yes' => 'iva',
	'pdf_perm_copy_no' => 'le',
	'pdf_perm_annotate_yes' => 'iva',
	'pdf_perm_annotate_no' => 'le',
);

/** Dutch (Nederlands)
 * @author Siebrand
 */
$messages['nl'] = array(
	'pdfexport-desc' => 'Geeft uitvoer van een pagina in PDF-opmaak',
	'pdfprint' => 'Naar PDF exporteren',
	'pdfprint_error' => 'PDF-export - Fout',
	'pdf_fontface_label' => 'Lettertype',
	'pdf_fontsize_label' => 'Lettergrootte',
	'pdf_margins_label' => 'Marges (weergave in millimeters)',
	'pdf_margins_label_top' => 'boven',
	'pdf_margins_label_sides' => 'zijkanten',
	'pdf_margins_label_bottom' => 'onder',
	'pdf_print_link' => 'Afdrukken als PDF',
	'pdf_print_text' => 'Geef de naam op van de pagina die u als PDF wilt exporteren',
	'pdf_submit' => 'PDF maken',
	'pdf_portrait' => 'Portret',
	'pdf_landscape' => 'Landschap',
	'pdf_pass_protect_label' => 'Wachtwoordbeveiliging',
	'pdf_pass_protect_yes' => 'ja',
	'pdf_pass_protect_no' => 'nee',
	'pdf_owner_pass_label' => 'Wachtwoord eigenaar',
	'pdf_user_pass_label' => 'Wachtwoord gebruiker',
	'pdf_perm_print_label' => 'Afdrukken toestaan?',
	'pdf_perm_print_yes' => 'ja',
	'pdf_perm_print_no' => 'nee',
	'pdf_perm_modify_label' => 'Wijzigingen toestaan?',
	'pdf_perm_modify_yes' => 'ja',
	'pdf_perm_modify_no' => 'nee',
	'pdf_perm_copy_label' => 'Kopiëren van tekst toestaan?',
	'pdf_perm_copy_yes' => 'ja',
	'pdf_perm_copy_no' => 'nee',
	'pdf_perm_annotate_label' => 'Opmerkingen toevoegen toestaan?',
	'pdf_perm_annotate_yes' => 'ja',
	'pdf_perm_annotate_no' => 'nee',
	'pdf_size' => 'Papierformaat',
	'pdf_filename' => 'Bestandsnaam',
	'pdf_export_no_converter_found' => 'Er is geen software aangetroffen voor omzetten naar PDF. Installeer PrinceXML, DomPdf of HTMLDoc.',
	'pdf_prince_error_not_installed' => 'PrinceXML, de software voor het maken van PDF-bestanden, is niet correct geïnstalleerd. Neem contact op met een systeembeheerder.',
	'pdf_prince_error' => 'De software voor het maken van PDF-bestanden was niet in staat een PDF-bestand te maken. Neem contact op met een systeembeheerder als het probleem aanhoudt.',
);

/** Oriya (ଓଡ଼ିଆ)
 * @author Jnanaranjan Sahu
 */
$messages['or'] = array(
	'pdfexport-desc' => 'ପୃଷ୍ଠାଟିକୁ ପିଡ଼ିଏଫ ଭାବେ ବାହାର କରନ୍ତୁ',
	'pdfprint' => 'ପିଡ଼ିଏଫ ରପ୍ତାନି',
);

/** Pashto (پښتو)
 * @author Ahmed-Najib-Biabani-Ibrahimkhel
 */
$messages['ps'] = array(
	'pdf_fontface_label' => 'د ليکبڼې مخ',
	'pdf_fontsize_label' => 'د ليکبڼې کچه',
	'pdf_margins_label_top' => 'سر',
	'pdf_margins_label_sides' => 'اړخونه',
	'pdf_print_link' => 'د پي ډي اېف په توګه چاپول',
	'pdf_submit' => 'پي ډي اېف جوړول',
	'pdf_pass_protect_label' => 'پټنوم ژغورنه',
	'pdf_pass_protect_yes' => 'هو',
	'pdf_pass_protect_no' => 'نه',
	'pdf_owner_pass_label' => 'د خاوند پټنوم',
	'pdf_user_pass_label' => 'د کارن پټنوم',
	'pdf_perm_print_label' => 'تر جوړېدو وروسته چاپ ته يې پرېږدې؟',
	'pdf_perm_print_yes' => 'هو',
	'pdf_perm_print_no' => 'نه',
	'pdf_perm_modify_label' => 'تر جوړېدو وروسته بدلون ته يې پرېږدې؟',
	'pdf_perm_modify_yes' => 'هو',
	'pdf_perm_modify_no' => 'نه',
	'pdf_perm_copy_label' => 'تر جوړېدو وروسته، د متن لمېسلو ته پرېږدې؟',
	'pdf_perm_copy_yes' => 'هو',
	'pdf_perm_copy_no' => 'نه',
	'pdf_perm_annotate_yes' => 'هو',
	'pdf_perm_annotate_no' => 'نه',
	'pdf_size' => 'د کاغذ کچه',
	'pdf_filename' => 'د دوتنې نوم',
);

/** Romanian (română)
 * @author Stelistcristi
 */
$messages['ro'] = array(
	'pdfprint' => 'Export PDF',
	'pdfprint_error' => 'Export PDF - Eroare',
	'pdf_margins_label' => 'Margini (exprimate în milimetrii)',
	'pdf_print_link' => 'Tipărește ca PDF',
	'pdf_submit' => 'Fă PDF',
	'pdf_portrait' => 'Portret',
	'pdf_landscape' => 'Peisaj',
	'pdf_pass_protect_label' => 'Protecție pentru parolă',
	'pdf_pass_protect_yes' => 'da',
	'pdf_pass_protect_no' => 'nu',
	'pdf_user_pass_label' => 'Parola utilizatorului',
	'pdf_perm_print_label' => 'Permiți tipărirea?',
	'pdf_perm_print_yes' => 'da',
	'pdf_perm_print_no' => 'nu',
	'pdf_perm_modify_label' => 'Permiți modificarea?',
	'pdf_perm_modify_yes' => 'da',
	'pdf_perm_modify_no' => 'nu',
	'pdf_perm_copy_label' => 'Permiți copierea textului?',
	'pdf_perm_copy_yes' => 'da',
	'pdf_perm_copy_no' => 'nu',
	'pdf_perm_annotate_label' => 'Perimiți adnotarea?',
	'pdf_perm_annotate_yes' => 'da',
	'pdf_perm_annotate_no' => 'nu',
	'pdf_size' => 'Dimensiunea foii',
	'pdf_filename' => 'Numele fișierului',
);

/** Russian (русский)
 * @author Kalan
 */
$messages['ru'] = array(
	'pdfexport-desc' => 'Преобразует страницу в формат PDF',
	'pdfprint' => 'Экспорт в PDF',
	'pdfprint_error' => 'Экспорт в PDF — ошибка',
	'pdf_fontface_label' => 'Шрифт',
	'pdf_fontsize_label' => 'Размер',
	'pdf_margins_label' => 'Поля (в миллиметрах)',
	'pdf_margins_label_top' => 'верхнее',
	'pdf_margins_label_sides' => 'боковые',
	'pdf_margins_label_bottom' => 'нижнее',
	'pdf_print_link' => 'Печатать как PDF',
	'pdf_print_text' => 'Введите название страницы, которую вы хотите экспортировать в PDF',
	'pdf_submit' => 'Создать PDF',
	'pdf_portrait' => 'Портретная',
	'pdf_landscape' => 'Ландшафтная',
	'pdf_pass_protect_label' => 'Защита паролем',
	'pdf_pass_protect_yes' => 'да',
	'pdf_pass_protect_no' => 'нет',
	'pdf_owner_pass_label' => 'Пароль владельца',
	'pdf_user_pass_label' => 'Пароль пользователя',
	'pdf_perm_print_label' => 'Разрешить печать?',
	'pdf_perm_print_yes' => 'да',
	'pdf_perm_print_no' => 'нет',
	'pdf_perm_modify_label' => 'Разрешить правки?',
	'pdf_perm_modify_yes' => 'да',
	'pdf_perm_modify_no' => 'нет',
	'pdf_perm_copy_label' => 'Разрешить копирование текста?',
	'pdf_perm_copy_yes' => 'да',
	'pdf_perm_copy_no' => 'нет',
	'pdf_perm_annotate_label' => 'Разрешить аннотации?',
	'pdf_perm_annotate_yes' => 'да',
	'pdf_perm_annotate_no' => 'нет',
	'pdf_size' => 'Размер бумаги',
	'pdf_filename' => 'Имя файла',
	'pdf_export_no_converter_found' => 'Не удалось обнаружить средства преобразования в PDF. Пожалуйста, установите PrinceXML, DomPdf или HTMLDoc.',
	'pdf_prince_error_not_installed' => 'Программа для создания PDF, PrinceXML, не установлена корректно. Пожалуйста, обратитесь к администратору.',
	'pdf_prince_error' => 'Программе для создания PDF не удалось создать файл. Если проблема повторяется, пожалуйста, обратитесь к администратору.',
);

/** Sinhala (සිංහල)
 * @author පසිඳු කාවින්ද
 */
$messages['si'] = array(
	'pdf_margins_label_top' => 'ඉහළ',
	'pdf_pass_protect_yes' => 'ඔව්',
	'pdf_pass_protect_no' => 'නැත',
	'pdf_perm_print_yes' => 'ඔව්',
	'pdf_perm_print_no' => 'නැත',
	'pdf_perm_modify_yes' => 'ඔව්',
	'pdf_perm_modify_no' => 'නැත',
	'pdf_perm_copy_yes' => 'ඔව්',
	'pdf_perm_copy_no' => 'නැත',
	'pdf_perm_annotate_yes' => 'ඔව්',
	'pdf_perm_annotate_no' => 'නැත',
	'pdf_size' => 'පිටු ප්‍රමාණය',
	'pdf_filename' => 'ගොනුනාමය',
);

/** Tamil (தமிழ்)
 * @author Karthi.dr
 * @author Shanmugamp7
 */
$messages['ta'] = array(
	'pdfprint' => 'PDF ஏற்றுமதி',
	'pdfprint_error' => 'PDF ஏற்றுமதி - பிழை',
	'pdf_fontsize_label' => 'எழுத்துரு அளவு',
	'pdf_margins_label' => 'ஓரங்கள் (மில்லிமீட்டரில் காண்பிக்கப்படுகிறது)',
	'pdf_margins_label_top' => 'மேல்',
	'pdf_margins_label_sides' => 'பக்கங்கள்',
	'pdf_margins_label_bottom' => 'கீழ்',
	'pdf_print_link' => 'PDF ஆக அச்சிடு',
	'pdf_print_text' => 'PDFக்கு நீங்கள் ஏற்றுமதி செய்ய விரும்பும் பக்கத்தின் தலைப்பை உள்ளிடவும்.',
	'pdf_submit' => 'PDF உருவாக்கு',
	'pdf_portrait' => 'நெடுக்கு வாட்டு',
	'pdf_landscape' => 'அகலவாட்டு',
	'pdf_pass_protect_label' => 'கடவுச்சொல் பாதுகாப்பு',
	'pdf_pass_protect_yes' => 'ஆம்',
	'pdf_pass_protect_no' => 'இல்லை',
	'pdf_owner_pass_label' => 'உரிமையாளர் கடவுச்சொல்',
	'pdf_user_pass_label' => 'பயனர் கடவுச்சொல்',
	'pdf_perm_print_label' => 'அச்சிடுதலை அனுமதிப்பதா ?',
	'pdf_perm_print_yes' => 'ஆம்',
	'pdf_perm_print_no' => 'இல்லை',
	'pdf_perm_modify_label' => 'மாற்றத்தை அனுமதிக்கவா ?',
	'pdf_perm_modify_yes' => 'ஆம்',
	'pdf_perm_modify_no' => 'இல்லை',
	'pdf_perm_copy_label' => 'உரையை நகலெடுப்பதை அனுமதிப்பதா ?',
	'pdf_perm_copy_yes' => 'ஆம்',
	'pdf_perm_copy_no' => 'இல்லை',
	'pdf_perm_annotate_label' => 'விளக்க உரைகளை அனுமதிப்பதா ?',
	'pdf_perm_annotate_yes' => 'ஆம்',
	'pdf_perm_annotate_no' => 'இல்லை',
	'pdf_size' => 'தாள் அளவு',
	'pdf_filename' => 'கோப்பின் பெயர்',
);

/** Telugu (తెలుగు)
 * @author Veeven
 */
$messages['te'] = array(
	'pdf_margins_label_sides' => 'ప్రక్కలు',
	'pdf_pass_protect_yes' => 'అవును',
	'pdf_pass_protect_no' => 'వద్దు',
	'pdf_owner_pass_label' => 'యజమాని సంకేతపదం',
	'pdf_user_pass_label' => 'వాడుకరి సంకేతపదం',
	'pdf_perm_print_yes' => 'అవును',
	'pdf_perm_print_no' => 'వద్దు',
	'pdf_perm_modify_yes' => 'అవును',
	'pdf_perm_modify_no' => 'వద్దు',
	'pdf_perm_copy_yes' => 'అవును',
	'pdf_perm_copy_no' => 'వద్దు',
	'pdf_perm_annotate_yes' => 'అవును',
	'pdf_perm_annotate_no' => 'వద్దు',
	'pdf_size' => 'కాగితపు పరిమాణం',
);

/** Tagalog (Tagalog)
 * @author AnakngAraw
 */
$messages['tl'] = array(
	'pdfexport-desc' => 'Naghaharap ng isang pahina bilang PDF',
	'pdfprint' => 'Pagluluwas ng PDF',
	'pdfprint_error' => 'Pagluluwas ng PDF - Kamalian',
	'pdf_fontface_label' => 'Mukha ng estilo ng titik',
	'pdf_fontsize_label' => 'Sukat ng estilo ng titik',
	'pdf_margins_label' => 'Mga pataan (ipinapakita na nasa mga milimetro)',
	'pdf_margins_label_top' => 'tuktok',
	'pdf_margins_label_sides' => 'mga gilid',
	'pdf_margins_label_bottom' => 'ilalim',
	'pdf_print_link' => 'Ilimbag bilang PDF',
	'pdf_print_text' => 'Ipasok ang pamagat ng pahinang nais mong iluwas na papunta sa PDF',
	'pdf_submit' => 'Gawing PDF',
	'pdf_portrait' => 'Larawan',
	'pdf_landscape' => 'Tanawin',
	'pdf_pass_protect_label' => 'Prutektahan ng hudyat',
	'pdf_pass_protect_yes' => 'oo',
	'pdf_pass_protect_no' => 'huwag',
	'pdf_owner_pass_label' => 'Hudyat ng may-ari',
	'pdf_user_pass_label' => 'Hudyat ng tagagamit',
	'pdf_perm_print_label' => 'Payagan ang paglilimbag?',
	'pdf_perm_print_yes' => 'oo',
	'pdf_perm_print_no' => 'huwag',
	'pdf_perm_modify_label' => 'Pahintulutan ang pagbabago?',
	'pdf_perm_modify_yes' => 'oo',
	'pdf_perm_modify_no' => 'huwag',
	'pdf_perm_copy_label' => 'Payagan ang pagkopya ng teksto?',
	'pdf_perm_copy_yes' => 'oo',
	'pdf_perm_copy_no' => 'huwag',
	'pdf_perm_annotate_label' => 'Payagan ang anotasyon?',
	'pdf_perm_annotate_yes' => 'oo',
	'pdf_perm_annotate_no' => 'huwag',
	'pdf_size' => 'Sukat ng papel',
	'pdf_filename' => 'Pangalan ng talaksan',
	'pdf_export_no_converter_found' => 'Walang matagpuang sopwer ng Pagpapalit na PDF. Paki iluklok ang PrinceXML, DomPdf, o kaya ang HTMLDoc.',
	'pdf_prince_error_not_installed' => 'Hindi tama ang pagkakaluklok ng sopwer na panlikha ng PDF. Paki makipag-ugnayan sa tagapangasiwa.',
	'pdf_prince_error' => 'Hindi nagawang makalikha ng PDF ng sopwer na panlikha ng PDF. Kapag nagtagal ang suliranin, paki makipag-ugnayan sa tagapangasiwa.',
);

/** Urdu (اردو)
 * @author පසිඳු කාවින්ද
 */
$messages['ur'] = array(
	'pdf_margins_label_top' => 'سب سے اوپر',
	'pdf_portrait' => 'پورٹریٹ',
	'pdf_landscape' => 'زمین کی تزئین کی',
	'pdf_pass_protect_label' => 'پاس ورڈ کی حفاظت',
	'pdf_pass_protect_yes' => 'جی ہاں',
	'pdf_pass_protect_no' => 'نہیں',
	'pdf_owner_pass_label' => 'مالک کے پاس ورڈ',
	'pdf_user_pass_label' => 'صارف کے پاس ورڈ',
	'pdf_perm_print_yes' => 'جی ہاں',
	'pdf_perm_print_no' => 'نہیں',
	'pdf_perm_modify_label' => 'سی ترمیم کی اجازت دیتے ہیں ؟',
	'pdf_perm_modify_yes' => 'جی ہاں',
	'pdf_perm_modify_no' => 'نہیں',
	'pdf_perm_copy_label' => 'اجازت متن نقل کر رہا ہے ؟',
	'pdf_perm_copy_yes' => 'جی ہاں',
	'pdf_perm_copy_no' => 'نہیں',
	'pdf_perm_annotate_yes' => 'جی ہاں',
	'pdf_perm_annotate_no' => 'نہیں',
);

/** Vietnamese (Tiếng Việt)
 * @author පසිඳු කාවින්ද
 */
$messages['vi'] = array(
	'pdf_pass_protect_yes' => 'Có',
	'pdf_pass_protect_no' => 'Không',
	'pdf_perm_print_yes' => 'Có',
	'pdf_perm_print_no' => 'Không',
	'pdf_perm_modify_yes' => 'Có',
	'pdf_perm_modify_no' => 'Không',
	'pdf_perm_copy_yes' => 'Có',
	'pdf_perm_copy_no' => 'Không',
	'pdf_perm_annotate_yes' => 'Có',
	'pdf_perm_annotate_no' => 'Không',
);

/** Yiddish (ייִדיש)
 * @author පසිඳු කාවින්ද
 */
$messages['yi'] = array(
	'pdf_pass_protect_yes' => 'יא',
	'pdf_pass_protect_no' => 'ניין',
	'pdf_perm_print_yes' => 'יא',
	'pdf_perm_print_no' => 'ניין',
	'pdf_perm_modify_yes' => 'יא',
	'pdf_perm_modify_no' => 'ניין',
	'pdf_perm_copy_yes' => 'יא',
	'pdf_perm_copy_no' => 'ניין',
	'pdf_perm_annotate_yes' => 'יא',
	'pdf_perm_annotate_no' => 'ניין',
);

/** Simplified Chinese (‪中文（简体）‬)
 * @author Shirayuki
 */
$messages['zh-hans'] = array(
	'pdf_pass_protect_yes' => '是',
	'pdf_pass_protect_no' => '否',
	'pdf_perm_print_yes' => '是',
	'pdf_perm_print_no' => '否',
	'pdf_perm_modify_yes' => '是',
	'pdf_perm_modify_no' => '否',
	'pdf_perm_copy_yes' => '是',
	'pdf_perm_copy_no' => '否',
	'pdf_perm_annotate_yes' => '是',
	'pdf_perm_annotate_no' => '否',
	'pdf_filename' => '文件名',
);

/** Traditional Chinese (‪中文（繁體）‬)
 * @author Shirayuki
 */
$messages['zh-hant'] = array(
	'pdf_pass_protect_yes' => '是',
	'pdf_pass_protect_no' => '否',
	'pdf_perm_print_yes' => '是',
	'pdf_perm_print_no' => '否',
	'pdf_perm_modify_yes' => '是',
	'pdf_perm_modify_no' => '否',
	'pdf_perm_copy_yes' => '是',
	'pdf_perm_copy_no' => '否',
	'pdf_perm_annotate_yes' => '是',
	'pdf_perm_annotate_no' => '否',
);

