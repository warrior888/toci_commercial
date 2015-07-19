<?php 

// znajdowanie palindromów
// 
// PanRada szkolenie TOCI

//dodane aby nie wywalalo bledu na php develop
$kandydat = 0;
$podzielna = 0;


//pobierz lancuch slow
if(isset($_POST['submit'])) 
{

$kandydat = $_POST['any_name'];  

}
//podziel lancuch na dwie rowne czesci ale nie mniejsze niz 2 znaki zmienna mósi miec conajmniej 2 znaki
	
	if(isset($kandydat)) {
		// echo strlen($kandydat);

		$liczbaSlowKandydata = strlen($kandydat);
	}



	if ($liczbaSlowKandydata > 1) {

	//	if ($liczbaSlowKandydata%2 > 0) {
	//		$podzielna = (($liczbaSlowKandydata / 2) - 1);
				
	//	}
	//		else {

			$podzielna = $liczbaSlowKandydata / 2;
			// echo $podzilna;
	//	}
	}

	

//stworz zmienne px i lx ktore odpowiadaja za dwa rowne lancuch
		$lx = $kandydat;
	//	$px = substr($kandydat, $podzielna);
		$px = strrev($kandydat);
	//	echo $px . "\n";
	//	$lx = (substr($kandydat,0, $podzielna));
	//	echo $lx;

		$slowo = strrev(substr($lx, $podzielna));
//porownaj px i lx jezeli rozne od siebie zakoncz program i wyswietl komunikat


		







 ?>

	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title></title>

		<!-- Bootstrap CSS -->
		<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
	</head>
<body>


<div class="container">
	
		<div class="col-md-6">
			<!-- dorobiony formularz w html bo tak ladniej :) -->
			<form class="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
				<fieldset>


					<!-- Text input-->
					<div class="control-group">
						<label class="control-label" for="reciverbanknumber">Sprawdzanie palindromów</label>
							<div class="controls">
								<input id="reciverbanknumber" name="any_name" type="text" placeholder=" Wprowadź slowo" class="input-xlarge">
								
							</div>
					<div class="control-group">
						<label class="control-label" for="button1id"></label>
							<div class="controls">
								<button id="button1id" name="submit" class="btn btn-success">Wyślij</button>
								
							</div>
					</div>

				</fieldset>
			</form>
		</div>
		<div class="col-md-6">
			<h1>
				<?php 
				//jezeli sie mijna wyswietl komunikat znalazlem
					if( $lx==$px)
  					{
   					   print("Sukces");
   					   print("<br>"."Znalezione slowo to: " . $slowo);
				    }
					  else
					  {
					      print("Blad");
					  }

				?>

			</h1>
		</div>


</div>


</body>
