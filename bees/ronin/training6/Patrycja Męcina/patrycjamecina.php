<?php
class CheckersBoard
{
	public $board = array();

	public function __construct()
	{
		for ($i = 0; $i < 8; $i++)
		{
			for ($j = 0; $j < 8; $j++)
			{
				$checkersField = new CheckersField();
				$checkersField->color = ($i + $j) % 2;
				$this->board[$i][$j] = $checkersField;
				
				$this->SetCheckers($i,$j);
			}
		}
	}
	
	public function Draw()
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
	
	private function SetCheckers($i,$j)
	{
		//for( $i = 0 ; $i < 3 ; $i++ )
		//{
			//for( $j = 0 ; $j < 8 ; $j++ )
			//{
			if( $i == 0 || $i == 1 || $i == 2)
			{
				if( $this->board[$i][$j]->color == 0)
				{
					$this->board[$i][$j]->figure = new Checker;
					$this->board[$i][$j]->figure->color = "B";
					$this->board[$i][$j]->color = "B";
				}
			}
			elseif( $i == 5 || $i == 6 || $i == 7 )
			{
				if( $this->board[$i][$j]->color == 0)
				{
					$this->board[$i][$j]->figure = new Checker;
					$this->board[$i][$j]->figure->color = "W";
					$this->board[$i][$j]->color = "W";
				}
			}
			else
			{
				$this->board[$i][$j]->figure = new EmptyField();
				$this->board[$i][$j]->figure->color = "empty";
			}
			//}
		//}
		
		/*for( $i = 3 ; $i < 8 ; $i++ )
		{
			for( $j = 0 ; $j < 8 ; $j++ )
			{
				$this->board[$i][$j]->figure = new EmptyField;
				$this->board[$i][$j]->figure->color = $this->board[$i][$j]->color;
			}
		}*/
	}
}

class CheckersField
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
	protected abstract function CanOccupy($checkerField, $destCheckerField, $checkerBoard);
}

class Checker extends Figure
{
	public function Move($srcX, $srcY, $destX, $destY, $checkerBoard)
	{
		if( $this->CanOccupy($checkerBoard->board[$srcX][$srcY], $checkerBoard->board[$destX][$destY], $checkerBoard) )
		{
				$help = $checkerBoard->board[$destX][$destY];
				$checkerBoard->board[$destX][$destY] = $checkerBoard->board[$srcX][$srcY];
				$checkerBoard->board[$srcX][$srcY] = $help;
			
		}
	}
		
	protected function CanOccupy($checkerField, $destCheckerField, $checkerBoard)
	{
		if( $checkerField->figure->color == $destCheckerField->figure->color )
		{
			return false;
		}
		else
		{
			return true;
		}
	}
}

class EmptyField extends Figure
{
	public function Move($srcX, $srcY, $destX, $destY, $chessboard)
	{
		
	}
	protected function CanOccupy($checkerField, $destCheckerField, $checkerBoard)
	{
		
	}
}

/*

//test

$board = new CheckersBoard();
$board->Draw();
echo "\n\n";
$board->board[2][2]->figure->Move(2,2,3,3,$board);
$board->Draw();
echo "\n\n";
$board->board[3][3]->figure->Move(3,3,4,2,$board);
$board->Draw();
*/
?>