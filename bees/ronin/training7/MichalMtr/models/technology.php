<?php
	class technology extends Model
	{
		public $Id;
		public $Name;
		public $Rating;

		public function __construct()
		{
			$this->TableName = 'technology';
		}
	}