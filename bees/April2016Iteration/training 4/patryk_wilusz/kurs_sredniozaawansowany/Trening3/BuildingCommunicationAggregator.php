<?php
require_once 'Interfaces/IInteligentBuildingCommunication.php';
abstract class BuildingCommunicationAggregator implements IInteligentBuildingCommunication {
    public abstract function AggregateInfo(); //kilka array of InteligentBuildingCommunicationModel
}
