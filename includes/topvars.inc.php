<?php 
	$fileName = explode("/",$_SERVER['SCRIPT_NAME']); 
	$noSuffix = end($fileName);
	$pageTitle = basename($noSuffix, '.php');
	//$pageTitle = ucfirst($pageTitle);

	if ($pageTitle == "index") {
		$pageTitle = "Jonas Stolt";
	} elseif ($pageTitle == "about") {
		$pageTitle = "Om";
	} elseif ($pageTitle == "contact") {
		$pageTitle = "Kontakt";
	} elseif ($pageTitle == "cv") {
		$pageTitle = "CV";
	} elseif ($pageTitle == "gitrepo") {
		$pageTitle = "GIT repo";
	} else {
		$pageTitle = "&nbsp;";
	}
?>