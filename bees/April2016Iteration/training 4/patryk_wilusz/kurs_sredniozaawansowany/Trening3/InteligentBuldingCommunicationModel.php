<?php
require_once 'Operation.php';
require_once 'FileOperations.php';
require_once 'BuildingCommunicationAggregator.php';

class InteligentBuldingCommunicationModel extends BuildingCommunicationAggregator {
    public $_homeAddress;
    public $_deviceName;
    public $_operation;
    
    public function __construct() {
        $this->_operation = new Operation();
    }
    
    public function GetOperations() {
        $data = FileOperations::FileContentToArray('dane/001.txt');
        $operations = array();
        foreach($data as $value)
        {
            $one_operation = explode(" ", $value);
            $operations[] = array(
                'data' => $one_operation[0], 
                'time' => $one_operation[1],
                'homeName' => $one_operation[2],
                'deviceName' => $one_operation[3],
                'actionName' => $one_operation[4],
                'error' => $one_operation[5],
                'author' => $one_operation[6],
                    );
        }
        return $operations;
    }
    
    public function AggregateInfo() {
        return $this->GetOperations();
    }
}

$building = new InteligentBuldingCommunicationModel();
var_dump($building->AggregateInfo());