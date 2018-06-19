<!DOCTYPE html>
<!--
Copyright (c) 2003-2016, CKSource - Frederico Knabben. All rights reserved.
For licensing, see LICENSE.md or http://ckeditor.com/license
-->
<html>
<head>
	<meta charset="utf-8">
	<title>Placeholder Plugin &mdash; CKEditor Sample</title>
	<script src="../../../ckeditor.js"></script>
	<script src="../../../samples/old/sample.js"></script>
	<link rel="stylesheet" href="../../../samples/old/sample.css">
	<meta name="ckeditor-sample-name" content="Placeholder plugin">
	<meta name="ckeditor-sample-group" content="Plugins">
	<meta name="ckeditor-sample-description" content="Using the Placeholder plugin to create uneditable sections that can only be created and modified with a proper dialog window.">
</head>
<body>
	<h1 class="samples">
		<a href="../../../samples/old/index.php">CKEditor Samples</a> &raquo; Using the Placeholder Plugin
	</h1>
	<div class="warning deprecated">
		This sample is not maintained anymore. Check out its <a href="http://sdk.ckeditor.com/samples/placeholder.php">brand new version in CKEditor SDK</a>.
	</div>
	<div class="description">
		<p>
			This sample shows how to configure CKEditor instances to use the
			<strong>Placeholder</strong> plugin that lets you insert read-only elements
			into your content. To enter and modify read-only text, use the
			<strong>Create Placeholder</strong> <span class="button_icon" data-icon="placeholder">&nbsp;</span> button and its matching dialog window.
		</p>
		<p>
			To add a CKEditor instance that uses the <code>placeholder</code> plugin and a related
			<strong>Create Placeholder</strong> <span class="button_icon" data-icon="placeholder">&nbsp;</span> toolbar button, insert the following JavaScript
			call to your code:
		</p>
<pre class="samples">
CKEDITOR.replace( '<em>textarea_id</em>', {
	<strong>extraPlugins: 'placeholder',</strong>
	toolbar: [ [ 'Source', 'Bold' ], [<strong>'CreatePlaceholder'</strong>] ]
});</pre>
		<p>
			Note that <code><em>textarea_id</em></code> in the code above is the <code>id</code> attribute of
			the <code>&lt;textarea&gt;</code> element to be replaced with CKEditor.
		</p>
	</div>
	<form action="../../../samples/sample_posteddata.php" method="post">
		<p>
			<label for="editor1">
				CKEditor using the <code>placeholder</code> plugin with its default configuration:
			</label>
			<textarea cols="80" id="editor1" name="editor1" rows="10">&lt;p&gt;This is a [[sample placeholder]]. You are using &lt;a href="http://ckeditor.com/"&gt;CKEditor&lt;/a&gt;. &lt;/p&gt;</textarea>
			<script>

				CKEDITOR.replace( 'editor1', {
					extraPlugins: 'placeholder'
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
