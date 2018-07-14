<?php
	session_start();
	//toggle de langue en francais et anglais
	if($_SESSION['language'] == "EN"){
		$_SESSION['language'] = "FR";
	}else{
		$_SESSION['language'] = "EN";
	}
?>