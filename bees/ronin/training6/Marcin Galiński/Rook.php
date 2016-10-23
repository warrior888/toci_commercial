<?php
	// Wie¿a
	class Rook extends Figure
	{
		public function Move($srcX, $srcY, $destX, $destY, $chessboard)
		{			
			return $this->RookMove($srcX, $srcY, $destX, $destY, $chessboard);
		}
	
		protected function CanOccupy( $chessField, $destChessField , $chessboard)
		{
			if( $chessField->figure->color == $destChessField->figure->color )
			{
				return false;
			}
			else
			{
				return true;
			}
		}
		
		
		public function Ruch($srcX, $srcY, $destX, $destY, $chessboard)
		{
			if( $this->Move($srcX, $srcY, $destX, $destY, $chessboard) )
			{
				if(( $chessboard->board[$destX][$destY]->figure->color != $chessboard->board[$srcX][$srcY]->figure->color) && ( $chessboard->board[$destX][$destY]->figure->color != "brak" ))
				{
					$chessboard->board[$destX][$destY] = $chessboard->board[$srcX][$srcY];
					$chessboard->board[$srcX][$srcY] = new EmptyField();
					$chessboard->board[$srcX][$srcY]->color = !($chessboard->board[$destX][$destY]->color);
					if($chessboard->board[$destX][$destY]->color == 1)
					{
						$chessboard->board[$srcX][$srcY]->color = 0;
					}
					else 
					{
						$chessboard->board[$srcX][$srcY]->color = 1;
					}
					//$chessboard->board[$destX][$destY]->figure = new EmptyField();
					//$chessboard->board[$destX][$destY]->figure->color = "brak";
				}
				else
				{
					$tmpObj = $chessboard->board[$destX][$destY];
					$chessboard->board[$destX][$destY] = $chessboard->board[$srcX][$srcY];
					$chessboard->board[$srcX][$srcY] = $tmpObj;
				}
				return 1;
			}
			return 0;
		}
		
		private function RookMove($srcX, $srcY, $destX, $destY, $chessboard)
		{
			if ($srcX == $destX || $srcY == $destY)
			{
				if( $srcY == $destY )
				{
					if($destX >  $srcX)
					{
						for( $i = $srcX+1 ; $i <= $destX ; $i++ )
						{
							$wynik = $this->CanOccupy($chessboard->board[$srcX][$srcY] , $chessboard->board[$i][$srcY] , $chessboard);
						}
					}
					else
					{
						for( $i = $srcX-1 ; $i >= $destX ; $i-- )
						{
							$wynik = $this->CanOccupy($chessboard->board[$srcX][$srcY] , $chessboard->board[$i][$srcY] , $chessboard);
						}
					}
				}
				elseif ( $srcX == $destX )
				{
					if( $destY > $srcY )
					{
						for( $i = $srcY+1 ; $i <= $destY ; $i++ )
						{
							$wynik = $this->CanOccupy($chessboard->board[$srcX][$srcY] , $chessboard->board[$srcX][$i] , $chessboard);
						}
					}
					else
					{
						for( $i = $srcY-1 ; $i >= $destY ; $i-- )
						{
							$wynik = $this->CanOccupy($chessboard->board[$srcX][$srcY] , $chessboard->board[$srcX][$i] , $chessboard);
						}
					}
				}
			}
			return $wynik;
	}
	}
?>
