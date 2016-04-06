<?php
$pw="";
$pwLength=8;

$alphabetSpecial='abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789~`!@#$%^&*()_+-={}[]:";\'<>?,./|\\';
$alphabet='abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
$random="";
$check=false;


if(@$_POST["submit"]=="Generieren"){
	$pw="";
	
	if(!$_POST["pwlength"]==0){
		$pwLength=$_POST["pwlength"];
	} 
	
	if(isset($_POST["special"])){
		$check=true;
		for($i=0;$i<$pwLength;$i++){
			$random=rand(0,strlen($alphabetSpecial)-1);
			$pw=$pw.$alphabetSpecial[$random];
		}
	} else {
		for($i=0;$i<$pwLength;$i++){
			$random=rand(0,strlen($alphabet)-1);
			$pw=$pw.$alphabet[$random];
		}
	}
	$result="<div class='alert alert-success'><strong>".$pw."</strong></div>";
}
?>