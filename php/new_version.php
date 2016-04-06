<?php
	include("pwgenerator.php");
?>
<!DOCTYPE html>
<html lang="de">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Passwort Generator</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script type="text/javascript" src="js/script.js"></script>
	
	<!-- jQuery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	<style>
	#alert {
		margin-top:20px;
	}
	</style>
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<h1>Passwort Generator</h1>
			<p class="lead">Diese Website generiert dir ein zufälliges, sicheres Passwort.</p>
			<p><strong>Empfohlen wird eine Mindestlänge von 8 Zeichen, sowie die Benutzung von Sonderzeichen.</strong><br />Zahlen und Klein- und Großbuchstaben werden automatisch benutzt, um dir die höchstmögliche Sicherheit deines Passworts zu gewährleisten. Der Rest liegt bei dir!</p>
			<form method="post">
				<div class="form-group">
					<label for="pwlength">Länge:</label>
					<input type="number" class="form-control" id="pwlength" name ="pwlength" placeholder="8" value="<?php echo @$_POST["pwlength"] ?>">
					<div class="checkbox">
						<label><input type="checkbox" value="" name="special" checked="true>">Mit Sonderzeichen</label>
					</div>
					<input name="submit" id ="generate"type="submit" class="btn btn-info btn-lg" value="Generieren" />
				</div>
			</form>
			<?php echo @$result ?>
		</div>
	</div>
</div>
</body>
</html>
