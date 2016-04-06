<!DOCTYPE html>
<html lang="de">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Passwort Checker</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script type="text/javascript" src="js/script.js"></script>
	
	<!-- jQuery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
	<!-- Latest compiled and minified JavaScript hi-->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	<style>
	#dangerPw{
		font-size: 200%;
		color:red;
	}
	#goodPw{
		font-size: 200%;
	}
	#securePw {
		font-size: 200%;
	}
	a {
		color:green;
	}
	</style>
	<script type="text/javascript">
	function pwQuali(){
		var pw=document.getElementById("pwInput").value;
		if (pw==""){
			document.getElementById("kennworthinweis").innerHTML = "keine Eingabe";
			return;
		}
		// AJAX
		if(window.XMLHttpRequest){
			// AJAX nutzen mit IE7+, Chrome, Firefox, Safari, Opera
			xmlhttp = new XMLHttpRequest();
		} else {
			// AJAX mit IE6, IE5
			xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');
		}
		xmlhttp.onreadystatechange = function(){
			if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
				document.getElementById("kennworthinweis").innerHTML = xmlhttp.responseText;
			}
		}
		xmlhttp.open("GET","php/pwTest_ajax.php?x="+pw,true);
		xmlhttp.send();
	}
</script>
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<h1>Passwort Check</h1>
			<p class="lead">Diese Website checkt die Sicherheit deines Passworts.</p>
			<label for="password">Gib dein Passwort ein.</label><br />
			<input type="password" value="" class="form-control"id="pwInput" onchange="pwQuali()" /><br />
			<div class='alert alert-info' id="result">
				<span id="kennworthinweis"></span>
			</div>
		</div>
	</div>
</div>
</body>
</html>