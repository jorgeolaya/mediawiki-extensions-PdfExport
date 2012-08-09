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
	'pdfprint' => 'The page title',
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

/** German (Deutsch)
 * @author Kghbln
 */
$messages['de'] = array(
	'pdfexport-desc' => 'Ermöglicht die Ausgabe einer Seite als PDF-Datei',
	'pdfprint' => 'RDF-Export',
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
);

/** Tagalog (Tagalog)
 * @author AnakngAraw
 */
$messages['tl'] = array(
	'pdfprint' => 'Pagluluwas ng PDF',
	'pdfprint_error' => 'Pagluluwas ng PDF - Kamalian',
	'pdf_fontface_label' => 'Mukha ng estilo ng titik',
	'pdf_fontsize_label' => 'Sukat ng estilo ng titik',
	'pdf_margins_label' => 'Mga pataan (ipinapakita na nasa mga milimetro)',
	'pdf_margins_label_top' => 'tuktok',
	'pdf_margins_label_sides' => 'mga gilid',
	'pdf_margins_label_bottom' => 'ilalim',
);

