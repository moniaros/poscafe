<!DOCTYPE html>
<!--
Copyright (c) 2003-2016, CKSource - Frederico Knabben. All rights reserved.
For licensing, see LICENSE.md or http://ckeditor.com/license
-->
<html>
<head>
	<meta charset="utf-8">
	<title>BBCode Plugin &mdash; CKEditor Sample</title>
	<script src="../../../ckeditor.js"></script>
	<script src="../../../samples/old/sample.js"></script>
	<link rel="stylesheet" href="../../../samples/old/sample.css">
	<meta name="ckeditor-sample-required-plugins" content="sourcearea">
	<meta name="ckeditor-sample-name" content="Output for BBCode">
	<meta name="ckeditor-sample-group" content="Additional Plugins">
	<meta name="ckeditor-sample-description" content="Configuring CKEditor to produce BBCode tags instead of HTML.">
</head>
<body>
	<h1 class="samples">
		<a href="../../../samples/old/index.php">CKEditor Samples</a> &raquo; BBCode Plugin
	</h1>
	<div class="warning deprecated">
		This sample is not maintained anymore. Check out its <a href="http://sdk.ckeditor.com/samples/bbcode.php">brand new version in CKEditor SDK</a>.
	</div>
	<div class="description">
		<p>
			This sample shows how to configure CKEditor to output <a href="http://en.wikipedia.org/wiki/BBCode">BBCode</a> format instead of HTML.
			Please note that the editor configuration was modified to reflect what is needed in a BBCode editing environment.
			Smiley images, for example, were stripped to the emoticons that are commonly used in some BBCode dialects.
		</p>
		<p>
			Please note that currently there is no standard for the BBCode markup language, so its implementation
			for different platforms (message boards, blogs etc.) can vary. This means that before using CKEditor to
			output BBCode you may need to adjust the implementation to your own environment.
		</p>
		<p>
			A snippet of the configuration code can be seen below; check the source of this page for
			a full definition:
		</p>
		<pre class="samples">
CKEDITOR.replace( 'editor1', {
	<strong>extraPlugins: 'bbcode',</strong>
	toolbar: [
		[ 'Source', '-', 'Save', 'NewPage', '-', 'Undo', 'Redo' ],
		[ 'Find', 'Replace', '-', 'SelectAll', 'RemoveFormat' ],
		[ 'Link', 'Unlink', 'Image' ],
		'/',
		[ 'FontSize', 'Bold', 'Italic', 'Underline' ],
		[ 'NumberedList', 'BulletedList', '-', 'Blockquote' ],
		[ 'TextColor', '-', 'Smiley', 'SpecialChar', '-', 'Maximize' ]
	],
	... <i>some other configurations omitted here</i>
});	</pre>
	</div>
	<form action="../../../samples/sample_posteddata.php" method="post">
		<p>
			<label for="editor1">
				Editor 1:
			</label>
			<textarea cols="80" id="editor1" name="editor1" rows="10">This is some [b]sample text[/b]. You are using [url=http://ckeditor.com/]CKEditor[/url].</textarea>
			<script>

				// Replace the <textarea id="editor"> with an CKEditor
				// instance, using the "bbcode" plugin, shaping some of the
				// editor configuration to fit BBCode environment.
				CKEDITOR.replace( 'editor1', {
					extraPlugins: 'bbcode',
					// Remove unused plugins.
					removePlugins: 'bidi,dialogadvtab,div,filebrowser,flash,format,forms,horizontalrule,iframe,justify,liststyle,pagebreak,showborders,stylescombo,table,tabletools,templates',
					// Width and height are not supported in the BBCode format, so object resizing is disabled.
					disableObjectResizing: true,
					// Define font sizes in percent values.
					fontSize_sizes: "30/30%;50/50%;100/100%;120/120%;150/150%;200/200%;300/300%",
					toolbar: [
						[ 'Source', '-', 'Save', 'NewPage', '-', 'Undo', 'Redo' ],
						[ 'Find', 'Replace', '-', 'SelectAll', 'RemoveFormat' ],
						[ 'Link', 'Unlink', 'Image', 'Smiley', 'SpecialChar' ],
						'/',
						[ 'Bold', 'Italic', 'Underline' ],
						[ 'FontSize' ],
						[ 'TextColor' ],
						[ 'NumberedList', 'BulletedList', '-', 'Blockquote' ],
						[ 'Maximize' ]
					],
					// Strip CKEditor smileys to those commonly used in BBCode.
					smiley_images: [
						'regular_smile.png', 'sad_smile.png', 'wink_smile.png', 'teeth_smile.png', 'tongue_smile.png',
						'embarrassed_smile.png', 'omg_smile.png', 'whatchutalkingabout_smile.png', 'angel_smile.png',
						'shades_smile.png', 'cry_smile.png', 'kiss.png'
					],
					smiley_descriptions: [
						'smiley', 'sad', 'wink', 'laugh', 'cheeky', 'blush', 'surprise',
						'indecision', 'angel', 'cool', 'crying', 'kiss'
					]
				});

			</script>
		</p>
		<p>
			<input type="submit" value="Submit">
		</p>
	</form>
	<div id="footer">
		<hr>
		<p>
			CKEditor - The text editor for the Internet - <a class="samples" href="http://ckeditor.com/">http://ckeditor.com</a>
		</p>
		<p id="copy">
			Copyright &copy; 2003-2016, <a class="samples" href="http://cksource.com/">CKSource</a> - Frederico
			Knabben. All rights reserved.
		</p>
	</div>
</body>
</html>
