<?php
	class developer extends Model
	{
		public $Id;
		public $Name;
		public $Surname;
		public $ExperienceInMonths;
		public $StartDate;
		public $Age;
		public $BirthDate;

		public function __construct()
		{
			$this->TableName = 'developer';
		}
	}