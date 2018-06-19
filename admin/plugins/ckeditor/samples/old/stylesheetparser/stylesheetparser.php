<!DOCTYPE html>
<!--
Copyright (c) 2003-2016, CKSource - Frederico Knabben. All rights reserved.
For licensing, see LICENSE.md or http://ckeditor.com/license
-->
<html>
<head>
	<meta charset="utf-8">
	<title>Using Stylesheet Parser Plugin &mdash; CKEditor Sample</title>
	<script src="../../../ckeditor.js"></script>
	<script src="../../../samples/old/sample.js"></script>
	<link rel="stylesheet" href="../../../samples/old/sample.css">
	<meta name="ckeditor-sample-required-plugins" content="stylescombo">
	<meta name="ckeditor-sample-name" content="Stylesheet Parser plugin">
	<meta name="ckeditor-sample-description" content="Using the Stylesheet Parser plugin to fill the Styles drop-down list based on the CSS classes available in the document stylesheet.">
	<meta name="ckeditor-sample-group" content="Plugins">
</head>
<body>
	<h1 class="samples">
		<a href="../../../samples/old/index.php">CKEditor Samples</a> &raquo; Using the Stylesheet Parser Plugin
	</h1>
	<div class="warning deprecated">
		This sample is not maintained anymore. Check out its <a href="http://sdk.ckeditor.com/samples/styles.php">brand new version in CKEditor SDK</a>.
	</div>
	<div class="description">
		<p>
			This sample shows how to configure CKEditor instances to use the
			<strong>Stylesheet Parser</strong> (<code>stylesheetparser</code>) plugin that fills
			the <strong>Styles</strong> drop-down list based on the CSS rules available in the document stylesheet.
		</p>
		<p>
			To add a CKEditor instance using the <code>stylesheetparser</code> plugin, insert
			the following JavaScript call into your code:
		</p>
<pre class="samples">
CKEDITOR.replace( '<em>textarea_id</em>', {
	<strong>extraPlugins: 'stylesheetparser'</strong>
});</pre>
		<p>
			Note that <code><em>textarea_id</em></code> in the code above is the <code>id</code> attribute of
			the <code>&lt;textarea&gt;</code> element to be replaced with CKEditor.
		</p>
	</div>
	<form action="../../../samples/sample_posteddata.php" method="post">
		<p>
			<label for="editor1">
				CKEditor using the <code>stylesheetparser</code> plugin with its default configuration:
			</label>
			<textarea cols="80" id="editor1" name="editor1" rows="10">&lt;p&gt;This is some &lt;strong&gt;sample text&lt;/strong&gt;. You are using &lt;a href="http://ckeditor.com/"&gt;CKEditor&lt;/a&gt;.&lt;/p&gt;</textarea>
			<script>

				// This call can be placed at any point after the
				// <textarea>, or inside a <head><script> in a
				// window.onload event handler.

				// Replace the <textarea id="editor"> with an CKEditor
				// instance, using default configurations.
				CKEDITOR.replace( 'editor1' , {
					extraPlugins: 'stylesheetparser',

					// Stylesheet for the contents.
					contentsCss: 'assets/sample.css',

					// Do not load the default Styles configuration.
					stylesSet: []
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
