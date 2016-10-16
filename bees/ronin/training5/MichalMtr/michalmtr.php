<?php
    abstract class DbHandler
    {
        protected $host;
        protected $user;
        protected $pass;
        protected $db;
    
        protected function __construct($host, $user, $pass, $db)
        {
            $this->host = $host;
            $this->user = $user;
            $this->pass = $pass;
            $this->db = $db;
        }
    }
    
    class MySqlDbHandler extends DbHandler
    {
        protected $link; 
    
        public function __construct()
        {
            parent::__construct('localhost', 'root', '', 'samochody');
        }
    
        public function Connect()
        {
            $this->link = new mysqli($this->host, $this->user, $this->pass, $this->db);
        }
        
        public function StartQuery($query)
        {
            $resource = mysqli_query($this->link, $query);
            
            $result = mysqli_fetch_array($resource); 
            
            return $result;
            }
    }    

    class DbSelect
    {
        public function Select($table, array $asterisk, array $where)
        {
            
        }
    }
        
    class MySqlSelect extends DbSelect
    {          
        protected $selectPart = 'SELECT ';
        protected $fromPart = ' FROM ';      
        protected $wherePart = ' WHERE ';
        protected $andPart = ' AND ';
        public $asterisk = array('marka', 'model', 'przebieg', 'rocznik');
        public $where = array(array('marka', 'LIKE', '\'Ford\''), array('model', 'LIKE', '\'Fiesta\''));
        public $table = 'auta';
                  
        public function Select() 
        {
            $select = $this->selectPart . implode(', ', $this->asterisk) . $this->fromPart . 
                      $this->table . $this->wherePart . implode(' ', $this->where[0]) . 
                      $this->andPart . implode(' ', $this->where[1]);
            
            return $select;
        }        
    }
    
    $task = new MySqlDbHandler();
    $select = new MySqlSelect();
    
    $task->Connect();   
    print_r($task->StartQuery($select->Select()));
    
//     Fatal error: Call to undefined function pg_fetch_all() in line 36
    
    
     
    
    

    
    