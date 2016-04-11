<?php

function JakiBank($numerKonta)
{
	$idbank = '';
	$idbank = substr($numerKonta, 3,4);
	switch($idbank)
	{
		case '1010': return 'Narodowy Bank Polski'; break;
		case '1020': return 'PKO BP'; break;
		case '1030': return 'Citibank Handlowy'; break;
		case '1050': return 'ING'; break;
		case '1060': return 'BPH'; break;
		case '1090': return 'BZ WBK'; break;
		case '1130': return 'BGK'; break;
		case '1140': return 'mBank'; break;
		case '1160': return 'Bank Millennium'; break;
		case '1240': return 'Pekao'; break;
		case '1280': return 'HSBC'; break;
		case '1300': return 'Meritum Bank'; break;
		case '1320': return 'Bank Pocztowy'; break;
		case '1440': return 'Nordea Bank'; break;
		case '1470': return 'Eurobank'; break;
		case '1540': return 'BOŒ'; break;
		case '1580': return 'Mercedes-Benz Bank Polska'; break;
		case '1600': return 'BNP Paribas Fortis'; break;
		case '1610': return 'SGB - Bank'; break;
		case '1670': return 'RBS Bank (Polska)'; break;
		case '1680': return 'Plus Bank'; break;
		case '1750': return 'Raiffeisen Bank'; break;
		case '1840': return 'Societe Generale'; break;
		case '1870': return 'FM Bank PBP'; break;
		case '1910': return 'Deutsche Bank Polska'; break;
		case '1930': return 'Bank Polskiej Spó³dzielczoœci'; break;
		case '1940': return 'Credit Agricole Bank Polska'; break;
		case '1950': return 'Idea Bank'; break;
		case '2000': return 'Rabobank Polska'; break;
		case '2030': return 'BG¯'; break;
		case '2070': return 'FCE Bank Polska'; break;
		case '2120': return 'Santander Consumer Bank'; break;
		case '2130': return 'Volkswagen Bank'; break;
		case '2140': return 'Fiat Bank Polska'; break;
		case '2160': return 'Toyota Bank'; break;
		case '2190': return 'DnB Nord'; break;
		case '2480': return 'Getin Noble Bank'; break;
		case '2490': return 'Alior Bank'; break;
		default: return "Nie znaleziono banku!";
	}
	
	}

echo JakiBank("34 1160 2202 0000 0002 8044 4264");