<?php
	require_once '/chess.php';
	require_once '/Bishop.php';
	require_once '/Knight.php';
	require_once '/King.php';
	require_once '/Pawn.php';
	require_once '/Queen.php';
	require_once '/Rook.php';

	//bishop, rook, knight, queen, king, pawn extends Figure
	
	//***************************************************************************************
	//TESTY
	//***************************************************************************************
	$plansza = new ChessBoard();
	echo "Czy mozna ruszyc pion: " . $plansza->board[1][0]->figure->Ruch(1,0,2,0,$plansza);
	echo "\n\n";
	$plansza->RysujPlansze();
	echo "Czy mozna ruszyc pion: " . $plansza->board[2][0]->figure->Ruch(2,0,3,0,$plansza);
	echo "\n\n";
	$plansza->RysujPlansze();
	echo "Czy mozna ruszyc pion: " . $plansza->board[3][0]->figure->Ruch(3,0,4,0,$plansza);
	echo "\n\n";
	$plansza->RysujPlansze();
	echo "Czy mozna ruszyc pion: " . $plansza->board[4][0]->figure->Ruch(4,0,5,0,$plansza);
	echo "\n\n";
	$plansza->RysujPlansze();
	echo "Czy mozna ruszyc wieze: " . $plansza->board[0][0]->figure->Ruch(0,0,2,0,$plansza);
	echo "\n\n";
	$plansza->RysujPlansze();
	echo "Czy mozna ruszyc wieze: " . $plansza->board[2][0]->figure->Ruch(2,0,2,4,$plansza);
	echo "\n\n";
	$plansza->RysujPlansze();
	echo "Czy mozna ruszyc wieze: " . $plansza->board[2][4]->figure->Ruch(2,4,6,4,$plansza);
	echo "\n\n";
	$plansza->RysujPlansze();
	
	//var_dump($plansza->board[6][4]);
	
	echo "Czy mozna ruszyc wieze: " . $plansza->board[6][4]->figure->Ruch(6,4,6,5,$plansza);
	echo "\n\n";
	$plansza->RysujPlansze();
	
	
	//var_dump($plansza->board[6][4]);
?>