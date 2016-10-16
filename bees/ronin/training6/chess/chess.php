<?php 
	
	class ChessBoard
	{
		public $board = array();
		
		public function __construct()
		{
			for ($i = 0; $i < 8; $i++)
			{
				for ($j = 0; $j < 8; $j++)
				{
					$chessField = new ChessField();
					$chessField->color = ($i + $j) % 2;
					$this->board[i][j] = $chessField;
				}
			}
		}
	}
	
	class ChessField
	{
		public $color;
		/**
		 * 
		 * @var Figure
		 */
		public $figure;
	}
	
	abstract class Figure
	{
		public $color;
		public abstract function Move($srcX, $srcY, $destX, $destY, $chessboard);
		protected abstract function CanOccupy($chessField, $destChessField, $chessboard);
	}
	
	class Rook extends Figure
	{
		public function Move($srcX, $srcY, $destX, $destY, $chessboard)
		{
			if ($srcX == $destX || $srcY == $destY)
			{
				//for
				$this->CanOccupy($chessField, $destChessField, $chessboard);
			}
		}
	}
	//bishop, rook, knight, queen, king, pawn extends Figure