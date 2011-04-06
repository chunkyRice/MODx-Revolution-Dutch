<?php

$default = realpath('/path/to/core/lexicon/en').'/';
$local = realpath(dirname(__FILE__).'/core/lexicon/nl').'/';

// find default files
$theFiles = array();
if($handle = opendir($default)) {
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
	
	echo '<strong>'.$filename.'</strong><br />';
	
	// compare keys
	foreach($defaultLang as $key => $value) {
		
		if(!isset($localLang[$key])) {
			echo '&nbsp;&nbsp;&nbsp;&nbsp;';
			//echo '<input type="checkbox" /> ';
			echo 'The key <span style="color:red;">"'.$key.'"</span> <strong>doesn\'t exists</strong> in translated file<br />';
		}
		else if($localLang[$key] == $value) {
			echo '&nbsp;&nbsp;&nbsp;&nbsp;';
			//echo '<input type="checkbox" /> ';
			echo '<span style="color:gray;">The value of key "'.$key.'" is the <strong>same as the default</strong> ';
			echo '(<strong>'.strip_tags(substr($localLang[$key], 0, 25)).'...</strong> vs. <strong>'.strip_tags(substr($value, 0, 25)).'...</strong>)</span><br />';
		}
	}
	
	foreach($localLang as $key => $value) {
		
		if(!isset($defaultLang[$key])) {
			echo '&nbsp;&nbsp;&nbsp;&nbsp;';
			//echo '<input type="checkbox" /> ';
			echo 'The key "'.$key.'" exists in the translated file, but is <span style="color:blue;">removed by the default</span>.<br />';
		}
	}
	
	echo '<br />';
}

?>