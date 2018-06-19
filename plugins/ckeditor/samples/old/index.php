<!DOCTYPE html>
<!--
Copyright (c) 2003-2016, CKSource - Frederico Knabben. All rights reserved.
For licensing, see LICENSE.md or http://ckeditor.com/license
-->
<html>
<head>
	<meta charset="utf-8">
	<title>CKEditor Samples</title>
	<link rel="stylesheet" href="sample.css">
</head>
<body>
	<h1 class="samples">
		CKEditor Samples
	</h1>
	<div class="warning deprecated">
		These samples are not maintained anymore. Check out the <a href="http://sdk.ckeditor.com/">brand new samples in CKEditor SDK</a>.
	</div>
	<div class="twoColumns">
		<div class="twoColumnsLeft">
			<h2 class="samples">
				Basic Samples
			</h2>
			<dl class="samples">
				<dt><a class="samples" href="replacebyclass.php">Replace textarea elements by class name</a></dt>
				<dd>Automatic replacement of all textarea elements of a given class with a CKEditor instance.</dd>

				<dt><a class="samples" href="replacebycode.php">Replace textarea elements by code</a></dt>
				<dd>Replacement of textarea elements with CKEditor instances by using a JavaScript call.</dd>

				<dt><a class="samples" href="jquery.php">Create editors with jQuery</a></dt>
				<dd>Creating standard and inline CKEditor instances with jQuery adapter.</dd>
			</dl>

			<h2 class="samples">
				Basic Customization
			</h2>
			<dl class="samples">
				<dt><a class="samples" href="uicolor.php">User Interface color</a></dt>
				<dd>Changing CKEditor User Interface color and adding a toolbar button that lets the user set the UI color.</dd>

				<dt><a class="samples" href="uilanguages.php">User Interface languages</a></dt>
				<dd>Changing CKEditor User Interface language and adding a drop-down list that lets the user choose the UI language.</dd>
			</dl>


			<h2 class="samples">Plugins</h2>
<dl class="samples">
<dt><a class="samples" href="codesnippet/codesnippet.php">Code Snippet plugin</a> <span class="new">New!</span></dt>
<dd>View and modify code using the Code Snippet plugin.</dd>

<dt><a class="samples" href="image2/image2.php">New Image plugin</a> <span class="new">New!</span></dt>
<dd>Using the new Image plugin to insert captioned images and adjust their dimensions.</dd>

<dt><a class="samples" href="mathjax/mathjax.php">Mathematics plugin</a> <span class="new">New!</span></dt>
<dd>Create mathematical equations in TeX and display them in visual form.</dd>

<dt><a class="samples" href="sourcedialog/sourcedialog.php">Editing source code in a dialog</a> <span class="new">New!</span></dt>
<dd>Editing HTML content of both inline and classic editor instances.</dd>

<dt><a class="samples" href="autogrow/autogrow.php">AutoGrow plugin</a></dt>
<dd>Using the AutoGrow plugin in order to make the editor grow to fit the size of its content.</dd>

<dt><a class="samples" href="bbcode/bbcode.php">Output for BBCode</a></dt>
<dd>Configuring CKEditor to produce BBCode tags instead of HTML.</dd>

<dt><a class="samples" href="devtools/devtools.php">Developer Tools plugin</a></dt>
<dd>Using the Developer Tools plugin to display information about dialog window UI elements to allow for easier customization.</dd>

<dt><a class="samples" href="docprops/docprops.php">Document Properties plugin</a></dt>
<dd>Manage various page meta data with a dialog.</dd>

<dt><a class="samples" href="magicline/magicline.php">Magicline plugin</a></dt>
<dd>Using the Magicline plugin to access difficult focus spaces.</dd>

<dt><a class="samples" href="placeholder/placeholder.php">Placeholder plugin</a></dt>
<dd>Using the Placeholder plugin to create uneditable sections that can only be created and modified with a proper dialog window.</dd>

<dt><a class="samples" href="sharedspace/sharedspace.php">Shared-Space plugin</a></dt>
<dd>Having the toolbar and the bottom bar spaces shared by different editor instances.</dd>

<dt><a class="samples" href="stylesheetparser/stylesheetparser.php">Stylesheet Parser plugin</a></dt>
<dd>Using the Stylesheet Parser plugin to fill the Styles drop-down list based on the CSS classes available in the document stylesheet.</dd>

<dt><a class="samples" href="tableresize/tableresize.php">TableResize plugin</a></dt>
<dd>Using the TableResize plugin to enable table column resizing.</dd>

<dt><a class="samples" href="uicolor/uicolor.php">UIColor plugin</a></dt>
<dd>Using the UIColor plugin to pick up skin color.</dd>

<dt><a class="samples" href="wysiwygarea/fullpage.php">Full page support</a></dt>
<dd>CKEditor inserted with a JavaScript call and used to edit the whole page from &lt;html&gt; to &lt;/html&gt;.</dd>
</dl>
		</div>
		<div class="twoColumnsRight">
			<h2 class="samples">
				Inline Editing
			</h2>
			<dl class="samples">
				<dt><a class="samples" href="inlineall.php">Massive inline editor creation</a></dt>
				<dd>Turn all elements with <code>contentEditable = true</code> attribute into inline editors.</dd>

				<dt><a class="samples" href="inlinebycode.php">Convert element into an inline editor by code</a></dt>
				<dd>Conversion of DOM elements into inline CKEditor instances by using a JavaScript call.</dd>

				<dt><a class="samples" href="inlinetextarea.php">Replace textarea with inline editor</a> <span class="new">New!</span></dt>
				<dd>A form with a textarea that is replaced by an inline editor at runtime.</dd>

				
			</dl>

			<h2 class="samples">
				Advanced Samples
			</h2>
			<dl class="samples">
				<dt><a class="samples" href="datafiltering.php">Data filtering and features activation</a> <span class="new">New!</span></dt>
				<dd>Data filtering and automatic features activation basing on configuration.</dd>

				<dt><a class="samples" href="divreplace.php">Replace DIV elements on the fly</a></dt>
				<dd>Transforming a <code>div</code> element into an instance of CKEditor with a mouse click.</dd>

				<dt><a class="samples" href="appendto.php">Append editor instances</a></dt>
				<dd>Appending editor instances to existing DOM elements.</dd>

				<dt><a class="samples" href="ajax.php">Create and destroy editor instances for Ajax applications</a></dt>
				<dd>Creating and destroying CKEditor instances on the fly and saving the contents entered into the editor window.</dd>

				<dt><a class="samples" href="api.php">Basic usage of the API</a></dt>
				<dd>Using the CKEditor JavaScript API to interact with the editor at runtime.</dd>

				<dt><a class="samples" href="xhtmlstyle.php">XHTML-compliant style</a></dt>
				<dd>Configuring CKEditor to produce XHTML 1.1 compliant attributes and styles.</dd>

				<dt><a class="samples" href="readonly.php">Read-only mode</a></dt>
				<dd>Using the readOnly API to block introducing changes to the editor contents.</dd>

				<dt><a class="samples" href="tabindex.php">"Tab" key-based navigation</a></dt>
				<dd>Navigating among editor instances with tab key.</dd>


				
<dt><a class="samples" href="dialog/dialog.php">Using the JavaScript API to customize dialog windows</a></dt>
<dd>Using the dialog windows API to customize dialog windows without changing the original editor code.</dd>

<dt><a class="samples" href="divarea/divarea.php">Replace Textarea with a &quot;DIV-based&quot; editor</a></dt>
<dd>Using <code>div</code> instead of <code>iframe</code> for rich editing.</dd>

<dt><a class="samples" href="enterkey/enterkey.php">Using the &quot;Enter&quot; key in CKEditor</a></dt>
<dd>Configuring the behavior of <em>Enter</em> and <em>Shift+Enter</em> keys.</dd>

<dt><a class="samples" href="htmlwriter/outputforflash.php">Output for Flash</a></dt>
<dd>Configuring CKEditor to produce HTML code that can be used with Adobe Flash.</dd>

<dt><a class="samples" href="htmlwriter/outputhtml.php">Output HTML</a></dt>
<dd>Configuring CKEditor to produce legacy HTML 4 code.</dd>

<dt><a class="samples" href="toolbar/toolbar.php">Toolbar Configurations</a></dt>
<dd>Configuring CKEditor to display full or custom toolbar layout.</dd>

			</dl>
		</div>
	</div>
	<div id="footer">
		<hr>
		<p>
			CKEditor - The text editor for the Internet - <a class="samples" href="http://ckeditor.com/">http://ckeditor.com</a>
		</p>
		<p id="copy">
			Copyright &copy; 2003-2016, <a class="samples" href="http://cksource.com/">CKSource</a> - Frederico Knabben. All rights reserved.
		</p>
	</div>
</body>
</html>
