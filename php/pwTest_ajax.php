<?php
	$pw = $_GET["x"];
	$punkte=0;
	$punkte=strlen($pw);
	
	if(preg_match("/[a-z]+/", $pw)){
		$punkte=$punkte+5;
	}
	if(preg_match("/[A-Z]+/", $pw)){
		$punkte=$punkte+5;
	}
	if(preg_match("/[0-9]+/",$pw)){
		$punkte=$punkte+5;
	}
	if(preg_match("/[\W]+/", $pw)){
		$punkte=$punkte+5;
	}
	if($punkte<=18){
		echo "<span id='dangerPw'class='glyphicon glyphicon-warning-sign'></span>  Unsicheres Passwort: ".$punkte." Punkte. <br />Lass dir ein <a href='php/new_version.php'>sicheres Passwort</a> generieren. ";
	}elseif($punkte<=25){
		echo "<span id='goodPw' class='glyphicon glyphicon-thumbs-up'></span>   Sicheres Passwort : ".$punkte." Punkte. <br />Ein noch besseres Passwort kriegst du <a href='php/new_version.php'>hier.</a> ";
	}elseif($punkte>25){
		echo "<span id='securePw'class='glyphicon glyphicon-star'></span>   Sehr sicheres Passwort : ".$punkte." Punkte.";
	}
?>