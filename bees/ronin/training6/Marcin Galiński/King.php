<?php
	class King extends Figure
	{
		public function Move($srcX, $srcY, $destX, $destY, $chessboard)
		{
			$wynik = $this->CanOccupy( $chessboard->board[$srcX][$srcY] , $chessboard->board[$destX][$destY] , $chessboard );
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