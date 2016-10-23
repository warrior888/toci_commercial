<?php
	class Knight extends Figure
	{
		public function Move($srcX, $srcY, $destX, $destY, $chessboard)
		{
				
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
	}
?>
