<!DOCTYPE html>

<html>
	<head>
		<title>Vergelijking tussen Engelse en Nederlandse taalbestand van MODX Revolution</title>
		<style type="text/css">
			* {
				font-family: arial,helvetica,sans-serif;
				font-size: 13px;
			}
			h1 {
				font-weight: bold;
				margin: 1.5em 0 0.5em;
			}
			ol {
				margin: 0.5em 0;
			}
			li {
				line-height: 1.3em;
			}
			ol .inserted,
			ol .deleted,
			ol .duplicate {
				color: #aaa;
			}
			ol .inserted .key {
				color: #0b0;
			}
			ol .deleted .key {
				color: #c00;
			}
			ol .duplicate .key {
				color: #57e;
			}
			ol .duplicate .value {
				color: #444;
			}
			ol .key {
				font-family: 'courier new',courier,monospace;
				font-weight: bold;
				font-size: 12px;
				padding-right: 12px;
			}
			ol .value {
				font-family: 'times new roman',times,serif;
				font-style: italic;
				font-size: 14px;
				padding-left: 12px;
			}
		</style>
	</head>
	<body>

<?php

/* The text lines should be changed in such a way that each line starts with the (colored) key name.
 * I don't think these key names need quotation marks
 */

$default = realpath('D:/dev/www/modx_dbbuilder/core/lexicon/en').'/';
$local = realpath(dirname(__FILE__).'/core/lexicon/nl').'/';
$handle = opendir($default);

// find default files
$theFiles = array();
if($handle) {
    while(false !== ($file = readdir($handle))) {
		if($file != '.' && $file != '..' && is_file($default.$file)) {
			$theFiles[] = $file;
		}
    }

    closedir($handle);
}
sort($theFiles);

// compare
$_lang = array();
foreach($theFiles as $filename) {

	// load the local file
	require_once($local.$filename);
	$localLang = $_lang;
	unset($_lang);

	// load the default
	require_once($default.$filename);
	$defaultLang = $_lang;
	unset($_lang);

	echo '<h1>'.$filename.'</h1>'."\n".'<ol>'."\n";

	// compare keys
	foreach($defaultLang as $key => $value) {

		// inserted
		if(!isset($localLang[$key])) {
			//echo '<input type="checkbox" /> ';
			echo '<li class="inserted"><span class="key">'.$key.'</span> needs to be added</li>'."\n";
		}
		// duplicate
		else if($localLang[$key] == $value) {
			if ($value == strip_tags(substr($localLang[$key], 0, 25))) {
				$hellip = '';
			}
			else {
				$hellip = '&hellip;';
			}
			//echo '<input type="checkbox" /> ';
			echo '<li class="duplicate"><span class="key">'.$key.'</span> seems to be untranslated. ';
			echo '<span class="value">'.strip_tags(substr($localLang[$key], 0, 50)).$hellip.'</span></li>'."\n";
		}
	}

	foreach($localLang as $key => $value) {

		// deleted
		if(!isset($defaultLang[$key])) {
			//echo '<input type="checkbox" /> ';
			echo '<li class="deleted"><span class="key">'.$key.'</span> can be removed</li>'."\n";
		}
	}

	echo '</ol>'."\n";
}

?>

	</body>
</html>
