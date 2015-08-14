<?php

	if(isset($_POST['submit'])) 
{

$numerWprowadzony = $_POST['any_name'];  

}

function ZwrocBank($numerWprowadzony)
{

	$banki = array(	
					'0' => 'Czekam na numer !',
					'1010'=>'Narodowy Bank Polski',    // dzieki TomaszLach za tablice :)
					'1020'=>'PKO BP',
					'1030'=>'Citybank Handlowy',
					'1050'=>'ING',
					'1060'=>'BPH',
					'1090'=>'BZ WBK',
					'1130'=>'BGK',
					'1140'=>'mBank',
					'1160'=>'Bank Millennium',
					'1240'=>'Pekao',
					'1280'=>'HSBC',
					'1300'=>'Meritum Bank',
					'1320'=>'Bank Pocztowy',
					'1440'=>'Nordea Bank',
					'1470'=>'Euro Bank',
					'1540'=>'BOŚ',
					'1580'=>'Mercedes-Benz Bank Polska',
					'1600'=>'BNP Paribas Fortis',
					'1610'=>'SGB - Bank',
					'1670'=>'RBS Bank (Polska)',
					'1680'=>'Plus Bank',
					'1750'=>'Raiffeisen Bank',
					'1840'=>'Societe Generale',
					'1870'=>'FM Bank PBP',
					'1910'=>'Deutsche Bank Polska',
					'1930'=>'Bank Polskiej Spółdzielczości',
					'1940'=>'Credit Agricole Bank Polska',
					'1950'=>'Idea Bank',
					'2000'=>'Rabobank Polska',
					'2030'=>'BGŻ',
					'2070'=>'FCE Bank Polska',
					'2120'=>'Santander Consumer Bank',
					'2130'=>'Volkswagen Bank',
					'2140'=>'Fiat Bank Polska',
					'2160'=>'Toyota Bank',
					'2190'=>'DnB Nord',
					'2480'=>'Getin Noble Bank',
					'2490'=>'Alior Bank'
					) ;

	$numerXxxx = substr($numerWprowadzony, 2, 4); 
	// metoda post do przechwytywania danych konta


	return $banki[$numerXxxx];
}



?>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Dodaj Numer Konta</title>

		<!-- Bootstrap CSS -->
		<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
	</head>
<body>


<div class="container">
	
		<div class="col-md-6">
			<!-- dorobiony formularz w html bo tak ladniej :) -->
			<form class="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
				<fieldset>

				<!-- Form Name -->
				<legend>Przelew z Banku PanRada</legend>

					<!-- Text input-->
					<div class="control-group">
						<label class="control-label" for="reciverbanknumber">Numer Konta Odbiorcy</label>
							<div class="controls">
								<input id="reciverbanknumber" name="any_name" type="text" placeholder=" Numer Konta" class="input-xlarge">
								<p>Wprowadź numer konta (wzór XX-XXXX-XXXXXXXX bez myślników)</p>
							</div>
					<div class="control-group">
						<label class="control-label" for="button1id"></label>
							<div class="controls">
								<button id="button1id" name="submit" class="btn btn-success">Wyślij</button>
								<button id="button2id" name="button2id" class="btn btn-danger">Anuluj</button>
							</div>
					</div>

				</fieldset>
			</form>
		</div>
		<div class="col-md-6">
			<h1><?php if(!empty ($numerWprowadzony)) { print_r(ZwrocBank($numerWprowadzony));};?></h1>
		</div>


</div>


</body>
</html>