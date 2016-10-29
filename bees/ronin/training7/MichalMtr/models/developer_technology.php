<?php
	class developer_technology extends Model
	{
		public $Id;
		public $Id_developer;
		public $Id_technology;

		public function __construct()
		{
			$this->TableName = 'developer_technology';
		}
	}