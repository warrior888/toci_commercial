<?php

require_once 'config.php';

$peselValid = new PeselValidation();
var_dump($peselValid->ValidatePesel('06321509556'));