	var pw ="";
	var pwlength ="";

	// Wird benutzt wenn checkbox = true(Sonderzeichen gewünscht):
	var alphabetSpecial ='abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789~`!@#$%^&*()_+-={}[]:";\'<>?,./|\\';
	// Wird benutzt wenn checkbox = false(Sonderzeichen nicht gewünscht):
	var alphabet ='abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
	var random = "";

	$("#generate").click(function() {
		var pw="";
		
		// Überprüfen und festlegen der PW-Länge
		if($("#pwlength").val()==0){
			pwlength=8;
		} else {
			pwlength=$("#pwlength").val();
		}
		
		if(document.getElementById("special").checked){
			// Wenn Sonderzeichen gewünscht sind:
			for(var i=0;i<pwlength;i++) {
				random=Math.floor((Math.random() * alphabetSpecial.length));
				pw=pw+alphabetSpecial[random];
			}
		} else {
			// Wenn Sonderzeichen nicht gewünscht sind:
			for(var i=0;i<pwlength;i++) {
				random=Math.floor((Math.random() * alphabet.length));
				pw=pw+alphabet[random];
			}
		}
		document.getElementById("result").innerHTML = "<strong>"+pw+"</strong>";
	});