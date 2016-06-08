<?php

require_once 'config.php';

$peselValid = new PeselValidation();
var_dump($peselValid->ValidatePesel('06321509556'));

$complexString = new ComplexStrings();
var_dump($complexString->CheckStrings("test", "tset"));
