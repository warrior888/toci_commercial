<?php class developer extends Model {
			
			public function __construct()
			{
				$this->TableName = 'developer';
			}
			
			const ID = 'id';
			
			public $Id;
public $Name;
public $Surname;
public $ExperienceInMonths;
public $StartDate;
public $Age;
public $BirthDate;
 //array(self::ID => $this->Id)
		}