<?php
	class team_developer extends Model
	{
		public $Id;
		public $Id_team;
		public $Id_developer;

		public function __construct()
		{
			$this->TableName = 'team_developer';
		}
	}