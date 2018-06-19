<!DOCTYPE html>
<!--
Copyright (c) 2003-2012, CKSource - Frederico Knabben. All rights reserved.
For licensing, see LICENSE.md or http://ckeditor.com/license
-->
<html>
<head>
	<meta charset="utf-8">
	<title>Shared-Space Plugin &mdash; CKEditor Sample</title>
	<script src="../../../ckeditor.js"></script>
	<link rel="stylesheet" href="../../../samples/old/sample.css">
	<meta name="ckeditor-sample-name" content="Shared-Space plugin">
	<meta name="ckeditor-sample-group" content="Plugins">
	<meta name="ckeditor-sample-description" content="Having the toolbar and the bottom bar spaces shared by different editor instances.">
</head>
<body>
	<h1 class="samples">
		<a href="../../../samples/old/index.php">CKEditor Samples</a> &raquo; Sharing Toolbar and Bottom-bar Spaces
	</h1>
	<div class="warning deprecated">
		This sample is not maintained anymore. Check out its <a href="http://sdk.ckeditor.com/samples/sharedspace.php">brand new version in CKEditor SDK</a>.
	</div>
	<div class="description">
		<p>
			This sample shows several editor instances that share the very same spaces for both the toolbar and the bottom bar.
		</p>
	</div>
	<div id="top">
		<!-- This div will handle all toolbars -->
	</div>

	<div style="height: 300px; overflow: auto; border: 1px solid #afafaf; padding: 20px; margin: 20px;">

		<div id="framed1" style="width: 49%; float: left; margin-bottom: 20px;"></div>
		<div id="framed2" style="width: 49%; float: right; margin-bottom: 20px;"></div>

		<hr style="clear: both; margin: 20px 0;">

		<div contenteditable="true" id="inline1" style="width: 49%; float: left;">
			<h3>
				Integer condimentum sit amet
			</h3>
			<p>
				<strong>Aenean nonummy a, mattis varius. Cras aliquet.</strong>
				Praesent <a href="http://ckeditor.com/">magna non mattis ac, rhoncus nunc</a>, rhoncus eget, cursus pulvinar mollis.</p>
			<p>Proin id nibh. Sed eu libero posuere sed, lectus. Phasellus dui gravida gravida feugiat mattis ac, felis.</p>
			<p>Integer condimentum sit amet, tempor elit odio, a dolor non ante at sapien. Sed ac lectus. Nulla ligula quis eleifend mi, id leo velit pede cursus arcu id nulla ac lectus. Phasellus vestibulum. Nunc viverra enim quis diam.</p>
		</div>
		<div contenteditable="true" id="inline2" style="width: 49%; float: right;">
			<h3>
				Praesent wisi accumsan sit amet nibh
			</h3>
			<p>Donec ullamcorper, risus tortor, pretium porttitor. Morbi quam quis lectus non leo.</p>
			<p style="margin-left: 40px; ">Integer faucibus scelerisque. Proin faucibus at, aliquet vulputate, odio at eros. Fusce <a href="http://ckeditor.com/">gravida, erat vitae augue</a>. Fusce urna fringilla gravida.</p>
			<p>In hac habitasse platea dictumst. Praesent wisi accumsan sit amet nibh. Maecenas orci luctus a, lacinia quam sem, posuere commodo, odio condimentum tempor, pede semper risus. Suspendisse pede. In hac habitasse platea dictumst. Nam sed laoreet sit amet erat. Integer.</p>
		</div>

	</div>

	<div id="bottom">
		<!-- This div will handle all toolbars -->
	</div>

	<script>

		// Turn off automatic editor creation first.
		CKEDITOR.disableAutoInline = true;

		CKEDITOR.inline( 'inline1', {
			extraPlugins: 'sharedspace',
			removePlugins: 'floatingspace,resize',
			sharedSpaces: {
				top: 'top',
				bottom: 'bottom'
			}
		});

		CKEDITOR.inline( 'inline2', {
			extraPlugins: 'sharedspace',
			removePlugins: 'floatingspace,resize',
			sharedSpaces: {
				top: 'top',
				bottom: 'bottom'
			}
		});

		CKEDITOR.appendTo( 'framed1', {
				extraPlugins: 'sharedspace',
				removePlugins: 'maximize,resize',
				sharedSpaces: {
					top: 'top',
					bottom: 'bottom'
				}
			},
			document.getElementById( 'inline1' ).innerHTML
		);

		CKEDITOR.appendTo( 'framed2', {
				extraPlugins: 'sharedspace',
				removePlugins: 'maximize,resize',
				sharedSpaces: {
					top: 'top',
					bottom: 'bottom'
				}
			},
			document.getElementById( 'inline2' ).innerHTML
		);

	</script>

	<div id="footer">
		<hr>
		<p>
			CKEditor - The text editor for the Internet - <a class="samples" href="http://ckeditor.com/">http://ckeditor.com</a>
		</p>
		<p id="copy">
			Copyright &copy; 2003-2012, <a class="samples" href="http://cksource.com/">CKSource</a> - Frederico
			Knabben. All rights reserved.
		</p>
	</div>
</body>
</html>
