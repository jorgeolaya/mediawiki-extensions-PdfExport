<?php
/**
 * Internationalisation file for PdfExport extension.
 *
 * @addtogroup Extensions
 */

$messages = array();

$messages['en'] = array(
	'pdfprint'                       => 'Pdf Export',
	'pdfprint_error'                 => 'Pdf Export - Error',
	'pdf_fontface_label'             => 'Fontface',
	'pdf_fontface_default'           => 'times',
	'pdf_fontface_options'           => 'times
courier
helvetica',
	'pdf_fontsize_label'             => 'Fontsize',
	'pdf_margins_label'              => 'Margins (Displays in millimeters)',
	'pdf_margins_label_top'          => 'top',
	'pdf_margins_label_sides'        => 'sides',
	'pdf_margins_label_bottom'       => 'bottom',
	'pdf_print_link'                 => 'Print as PDF',
	'pdf_print_text'                 => 'Enter the title of the article you want to export to PDF',
	'pdf_submit'                     => 'Make PDF',
	'pdf_portrait'                   => 'Portrait',
	'pdf_landscape'                  => 'Landscape',
	'pdf_pass_protect_label'         => 'Password Protection',
	'pdf_pass_protect_yes'           => 'yes',
	'pdf_pass_protect_no'            => 'no',
	'pdf_owner_pass_label'           => 'Owner Password',
	'pdf_user_pass_label'            => 'User Password',
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
	'pdf_size'                       => 'Paper Size',
	'pdf_size_default'               => 'Letter',
	'pdf_size_options'               => 'Letter
A4',
	'pdf_filename'                   => 'Filename',
	'pdf_export_no_converter_found'  => '<span class="errorbox">No Pdf Conversion software could be found. Please install either PrinceXML, DomPdf, or HTMLDoc.</span>',

	'pdf_prince_error_not_installed' => 'The PrinceXML PDF creation software is not installed correctly. Please contact an administrator.',
	'pdf_prince_error'               => 'The PDF creation software was not able to create the PDF. If the problem persists, please contact an administrator.'
);
