<?php
//nickStringOperability.php
//nickStringOperability extends CheckStringOperability

abstract class CheckStringOperability {
    public abstract function StringLength($string);
    public abstract function SubString($string, $start, $length);
    public abstract function GetNick();
    
    public function ChceckImplemetation()
    {
        $table = array(
            array('przykladowo', 11, 4, 2),
            array('przykladowo', 11, 4, 5),
        );
            
        foreach ($table as $item) {
            $length = $this->StringLength($item[0]);
            if($length == $item[1]) {
                echo $this->GetNick()." : positive for length operation\n";
            }
            $substr = $this->SubString($item[0], $item[2], $item[3]);
            $substr2 = substr($item[0], $item[2], $item[3]);
            if($substr == $substr2)
            {
                echo $this->GetNick()." : positive for substr operation\n";
            }
        }
    }
}

class SingleTester {
    const SEP = '/';
    protected $directory;
    protected $nick;
    protected $className;
    protected $methodName;
    protected $parameters;
    
    public function __construct($elements)
    {
        $this->directory = $elements[0];
        $this->nick = $elements[1];
        $this->className = $elements[2];
        $this->methodName = $elements[3];
        $this->parameters = $elements[4];
    }
    
    function RunTest()
    {
        if(is_file($this->directory.self::SEP.$this->nick.$this->className.'.php'))
        {
            require_once $this->directory.self::SEP.$this->nick.$this->className.'.php';
            $class = $this->nick.$this->className;
            $obj = new $class();
            $obj->{$this->methodName}($this->parameters);
        }
    }
}

class Tester
{
    protected $tab = array(
        array('../PW', 'PW', 'StringOperability', 'ChceckImplemetation', null),
    );
    
    public function TestAll()
    {
        $objects = array();
        foreach($this->tab as $element)
        {
            $object[] = new SingleTester($element);
        }
        foreach($object as $item)
        {
            $item->RunTest();
        }
    }
}

$tester = new Tester();
$tester->TestAll();
