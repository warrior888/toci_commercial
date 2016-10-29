<?php
	class team extends Model
	{
		public $Id;
		public $Name;

		public function __construct()
		{
			$this->TableName = 'team';
		}
	}