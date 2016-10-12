<?php 
	/*Et näitaks erroreid */
	error_reporting(E_ALL);
	ini_set("display_errors",1);


	//var_dump($_GET);
	//echo "<br>";
	//var_dump($_POST);
	
	$signupEmailError = "";
	
	//kas on üldse olemas
	if (isset ($_POST["signupEmail"])) {
		
		// oli olemas, ehk keegi vajutas nuppu
		// kas oli tühi
		if (empty ($_POST["signupEmail"])) {
			
			//oli tõesti tühi
			$signupEmailError = "See väli on kohustuslik";
			
		}
		
	}
	
	$signupPasswordError = "";
	
	//kas on üldse olemas
	if (isset ($_POST["signupPassword"])) {
		
		// oli olemas, ehk keegi vajutas nuppu
		// kas oli tühi
		if (empty ($_POST["signupPassword"])) {
			
			//oli tõesti tühi
			$signupPasswordError = "See väli on kohustuslik";
			
		} else {
			
			// oli midagi, ei olnud tühi
			
			// kas pikkus vähemalt 8
			if (strlen ($_POST["signupPassword"]) < 8 ) {
				
				$signupPasswordError = "Parool peab olema vähemalt 8 tm pikk";
				
			}
			
		}
		
	}
	
		$signupPhoneError = "";
	
	//kas on üldse olemas
	if (isset ($_POST["phone"])) {
		
		// oli olemas, ehk keegi vajutas nuppu
		// kas oli tühi
		if (empty ($_POST["phone"])) {
			
			//oli tõesti tühi
			$signupPhoneError = "See väli on kohustuslik";
			
		}
		else {
			
			// oli midagi, ei olnud tühi
			
			// kas pikkus vähemalt 8
			if (strlen ($_POST["phone"]) > 8 ) {
				
				$signupPhoneError = "Telefon peab olema maksimaalselt 8 numbrit pikk";
				
			}
			
		}
	}
?>
<!DOCTYPE html>
<html>
	<head>
    <meta charset="utf-8" />
		<title>Sisselogimise leht</title>
	</head>
	<body>

		<h1>Logi sisse</h1>
		
		<form method="POST">
			
			<label>E-post</label><br>
			<input name="loginEmail" type="email">
			
			<br><br>
			
			<label>Parool</label><br>
			<input name="loginPassword" type="password">
						
			<br><br>
			
			<input type="submit">
		
		</form>
		
		<h1>Loo kasutaja</h1>
		
		<form method="POST">
			
			<label>E-post</label><br>
			<input name="signupEmail" type="email" autofocus> <?php echo $signupEmailError; ?>
			
			<br><br>
            
			<label>Parool</label><br />
			<input placeholder="Parool" name="signupPassword" type="password"> <?php echo $signupPasswordError; ?>
						
			<br><br>
            
                <label>Telefon</label><br />
            	<input type="tel" name="phone" placeholder="Telefon" /><?php  echo $signupPhoneError; ?>
                
            <br><br>
            
                <label>Sünniaeg</label><br />
            	<input type="date" name="dateOfBirth" placeholder="Sünniaeg" />
               
            <br><br>
			
			<input type="submit" value="Loo kasutaja">
		
		</form>

	</body>
</html>