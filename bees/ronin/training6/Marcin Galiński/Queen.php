<?php
	class Queen extends Figure
	{
		public function Move($srcX, $srcY, $destX, $destY, $chessboard)
		{
			/*for( $i = $srcX ; $i <= $destX ; $i++ )
			{
				for( $j = $srcY ; $j <= $destY ; $j++ )
				{
					//$wynik = $this->CanOccupy( $chessboard->board[$i][$j] , $chessboard->board[$i+1][$j+1] , $chessboard );
					$wynik = $this->CanOccupy($chessboard->board[$srcX][$srcY] , $chessboard->board[$i][$srcY] , $chessboard);
				}
			}*/
			// Ruch wiezy
			if( $srcY == $destY )
			{
				if($destX >  $srcX)
				{
					for( $i = $srcX+1 ; $i <= $destX ; $i++ )
					{
						//echo $i;
						$wynik = $this->CanOccupy($chessboard->board[$srcX][$srcY] , $chessboard->board[$i][$srcY] , $chessboard);
						//echo " " . $wynik . "\n";
						//if( $wynik == false )
						//{
						//break;
						//}
					}
				}
				else
				{
					for( $i = $srcX-1 ; $i >= $destX ; $i-- )
					{
						//echo $i;
						$wynik = $this->CanOccupy($chessboard->board[$srcX][$srcY] , $chessboard->board[$i][$srcY] , $chessboard);
						//echo " " . $wynik . "\n";
						//if( $wynik == false )
						//{
						//break;
						//}
					}
				}
			}
			elseif ( $srcX == $destX )
			{
				if( $destY > $srcY )
				{
					for( $i = $srcY+1 ; $i <= $destY ; $i++ )
					{
						//echo $i;
						$wynik = $this->CanOccupy($chessboard->board[$srcX][$srcY] , $chessboard->board[$srcX][$i] , $chessboard);
						//echo " " . $wynik . "\n";
						//if( $wynik == false )
						//{
						//break;
						//}
					}
				}
				else
				{
					for( $i = $srcY-1 ; $i >= $destY ; $i-- )
					{
						//echo $i;
						$wynik = $this->CanOccupy($chessboard->board[$srcX][$srcY] , $chessboard->board[$srcX][$i] , $chessboard);
						//echo " " . $wynik . "\n";
						//if( $wynik == false )
						//{
						//break;
						//}
					}
				}
			}
			else 
			{
				if( $destX > $srcX && $destY > $srcY )
				{
					for( $i = $srcX ; $i <= $destX ; $i++ )
					{
						for( $j = $srcY ; $j <= $destY ; $j++ )
						{
							//$wynik = $this->CanOccupy( $chessboard->board[$i][$j] , $chessboard->board[$i+1][$j+1] , $chessboard );
							if (($srcX - $srcY) == ($i - $j) || ($srcX + $srcY) == ($i + $j))
							{
								$wynik = $this->CanOccupy($chessboard->board[$srcX][$srcY] , $chessboard->board[$i][$j] , $chessboard);
							}
							else
							{
								$wynik = false;
							}
						}
					}
				}
				elseif ($destX <= $srcX && $destY <= $srcY )
				{
					for( $i = $srcX ; $i >= $destX ; $i-- )
					{
						for( $j = $srcY ; $j >= $destY ; $j-- )
						{
							//$wynik = $this->CanOccupy( $chessboard->board[$i][$j] , $chessboard->board[$i+1][$j+1] , $chessboard );
							if (($srcX - $srcY) == ($i - $j) || ($srcX + $srcY) == ($i + $j))
							{
								$wynik = $this->CanOccupy($chessboard->board[$srcX][$srcY] , $chessboard->board[$i][$j] , $chessboard);
							}
							else
							{
								$wynik = false;
							}
						}
					}
				}
				elseif ($destX <= $srcX && $destY > $srcY )
				{
					for( $i = $srcX ; $i >= $destX ; $i-- )
					{
						for( $j = $srcY ; $j <= $destY ; $j++ )
						{
							//$wynik = $this->CanOccupy( $chessboard->board[$i][$j] , $chessboard->board[$i+1][$j+1] , $chessboard );
							if (($srcX - $srcY) == ($i - $j) || ($srcX + $srcY) == ($i + $j))
							{
								$wynik = $this->CanOccupy($chessboard->board[$srcX][$srcY] , $chessboard->board[$i][$j] , $chessboard);
							}
							else
							{
								$wynik = false;
							}
						}
					}
				}
				elseif ($destX > $srcX && $destY <= $srcY )
				{
					for( $i = $srcX ; $i <= $destX ; $i++ )
					{
						for( $j = $srcY ; $j >= $destY ; $j-- )
						{
							//$wynik = $this->CanOccupy( $chessboard->board[$i][$j] , $chessboard->board[$i+1][$j+1] , $chessboard );
							if (($srcX - $srcY) == ($i - $j) || ($srcX + $srcY) == ($i + $j))
							{
								$wynik = $this->CanOccupy($chessboard->board[$srcX][$srcY] , $chessboard->board[$i][$j] , $chessboard);
							}
							else
							{
								$wynik = false;
							}
						}
					}
				}
			}
			return $wynik;
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
				$tmpObj = $chessboard->board[$destX][$destY];
				$chessboard->board[$destX][$destY] = $chessboard->board[$srcX][$srcY];
				$chessboard->board[$srcX][$srcY] = $tmpObj;
				return 1;
			}
			return 0;
		}
		
	}
?>