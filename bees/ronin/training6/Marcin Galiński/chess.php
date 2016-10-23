<?php 
	// Tworzenie szachownicy, wstepne rozstawienie figur
	class ChessBoard
	{
		public $board = array();
		
		public function __construct()
		{
			for( $i = 0 ; $i < 8 ; $i++ )
			{
				$board[$i] = array();
			}
			
			
			for ($i = 0; $i < 8; $i++)
			{
				for ($j = 0; $j < 8; $j++)
				{
					$chessField = new ChessField();
					$chessField->color = ($i + $j) % 2;
					$this->board[$i][$j] = $chessField;
					
					// Rozstawienie bialych i czarnych bierek na szachownicy
					$this->RozstawFigury($i,$j);
					
					echo $this->board[$i][$j]->color . "\t";
				}
				echo "\n";
			}
			
			//$this->board[0][0]->figure = new Rook();
		}
		
		private function RozstawFigury( $i , $j )
		{	
			//for( $i = 0 ; $i < 8 ; $i++ )
			//{
				//for( $j = 0 ; $j < 8 ; $j++ )
				//{
					if( $i == 0 )
					{
						if( $j == 0 || $j == 7 )
						{
							$this->board[$i][$j]->figure = new Rook();
							$this->board[$i][$j]->figure->color = "black";
							$this->board[$i][$j]->color = "W";
						}
						elseif( $j == 1 || $j == 6 )
						{
							$this->board[$i][$j]->figure = new Knight();
							$this->board[$i][$j]->figure->color = "black";
							$this->board[$i][$j]->color = "S";
						}
						elseif( $j == 2 || $j == 5 )
						{
							$this->board[$i][$j]->figure = new Bishop();
							$this->board[$i][$j]->figure->color = "black";
							$this->board[$i][$j]->color = "G";
						}
						elseif( $j == 3 )
						{
							$this->board[$i][$j]->figure = new Queen();
							$this->board[$i][$j]->figure->color = "black";
							$this->board[$i][$j]->color = "Q";
						}
						elseif( $j == 4 )
						{
							$this->board[$i][$j]->figure = new King();
							$this->board[$i][$j]->figure->color = "black";
							$this->board[$i][$j]->color = "K";
						}
					}
					elseif ( $i == 1)
					{
						$this->board[$i][$j]->figure = new Pawn();
						$this->board[$i][$j]->figure->color = "black";
						$this->board[$i][$j]->color = "P";
					}
					elseif( $i == 6 )
					{
						$this->board[$i][$j]->figure = new Pawn();
						$this->board[$i][$j]->figure->color = "white";
						$this->board[$i][$j]->color = "P";
					}
					elseif( $i == 7 )
					{
						if( $j == 0 || $j == 7 )
						{
							$this->board[$i][$j]->figure = new Rook();
							$this->board[$i][$j]->figure->color = "white";
							$this->board[$i][$j]->color = "W";
						}
						elseif( $j == 1 || $j == 6 )
						{
							$this->board[$i][$j]->figure = new Knight();
							$this->board[$i][$j]->figure->color = "white";
							$this->board[$i][$j]->color = "S";
						}
						elseif( $j == 2 || $j == 5 )
						{
							$this->board[$i][$j]->figure = new Bishop();
							$this->board[$i][$j]->figure->color = "white";
							$this->board[$i][$j]->color = "G";
						}
						elseif( $j == 3 )
						{
							$this->board[$i][$j]->figure = new King();
							$this->board[$i][$j]->figure->color = "white";
							$this->board[$i][$j]->color = "K";
						}
						elseif( $j == 4 )
						{
							$this->board[$i][$j]->figure = new Queen();
							$this->board[$i][$j]->figure->color = "white";
							$this->board[$i][$j]->color = "Q";
						}
					}
					else 
					{
						$this->board[$i][$j]->figure = new EmptyField();
						$this->board[$i][$j]->figure->color = "brak";
					}
			}

		public function RysujPlansze()
		{
			for( $i = 0 ; $i < 8 ; $i++ )
			{
				for( $j = 0 ; $j < 8 ; $j++ )
				{
					echo $this->board[$i][$j]->color . "\t";
				}
				echo "\n";
			}
		}
	}
	
	// Pojedyncze pole szachownicy
	class ChessField
	{
		// kolor pola
		public $color;
		
		/**
		 * 
		 * @var Figure
		 */
		// figura, ktora stoi na tym polu
		public $figure;
	}
	
	
	// Pojedyncza figura
	abstract class Figure
	{
		public $color;
		public abstract function Move($srcX, $srcY, $destX, $destY, $chessboard);
		protected abstract function CanOccupy($chessField, $destChessField, $chessboard);
	}

	// Reprezentuje brak figury na danym polu
	class EmptyField extends Figure
	{
		public function Move($srcX, $srcY, $destX, $destY, $chessboard)
		{
			
		}
		
		protected function CanOccupy( $chessField, $destChessField , $chessboard)
		{
				
		}
	}
	