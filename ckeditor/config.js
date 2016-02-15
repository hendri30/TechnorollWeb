/**
 * @license Copyright (c) 2003-2015, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.md or http://ckeditor.com/license
 */

CKEDITOR.editorConfig = function( config ) {
	// Define changes to default configuration here.
	// For complete reference see:
	// http://docs.ckeditor.com/#!/api/CKEDITOR.config

	// The toolbar groups arrangement, optimized for two toolbar rows.
	config.toolbarGroups = [
		{ name: 'clipboard',   groups: [ 'clipboard', 'undo' ] },
		{ name: 'editing',     groups: [ 'find', 'selection', 'spellchecker' ] },
		{ name: 'links' },
		{ name: 'insert' },
		{ name: 'forms' },
		{ name: 'tools' },
		{ name: 'document',	   groups: [ 'mode', 'document', 'doctools' ] },
		{ name: 'others' },
		'/',
		{ name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ] },
		{ name: 'paragraph',   groups: [ 'list', 'blocks', 'align', 'bidi' ] },
		{ name: 'indent'},
		{ name: 'styles' },
		{ name: 'colors' },
		{ name: 'about' },
		//{ name: 'inlinesave'},
	];

	// Remove some buttons provided by the standard plugins, which are
	// not needed in the Standard(s) toolbar.
	config.removeButtons = 'Underline,Subscript,Superscript';

	// Set the most common block elements.
	config.format_tags = 'p;h1;h2;h3;pre';

	// Simplify the dialog windows.
	config.removeDialogTabs = 'image:advanced;link:advanced';

	// add extra plugins
	config.extraPlugins='inlinesave,imgbrowse,indent';

	// allowing content template
	config.allowedContent = true;

	// toolbar configuration ckeditor
	config.toolbar = [
		['Cut','Copy','Paste','PasteText','PasteFromWord','-','Undo','Redo'],
		['Scayt'],
		['Link','Unlink','Anchor'],
		['Table','Image','HorizontalRule','SpecialChar'],
		['Maximize'],
		['Source'],'/',
		['Bold','Italic','Strike','-','RemoveFormat'],
		['NumberedList','BulletedList','-','Outdent','Indent','-','Blockquote'],
		['Styles','Format'],
		['Inlinesave'],
	];

};
