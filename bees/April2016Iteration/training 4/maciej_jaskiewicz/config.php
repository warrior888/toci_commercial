<?php

set_include_path(get_include_path(). PATH_SEPARATOR . "ZADANIA/PeselValidation");
set_include_path(get_include_path(). PATH_SEPARATOR . "ZADANIA/ComplexStrings");

set_include_path(get_include_path(). PATH_SEPARATOR . "library/StringLib");

function __autoload($className) {

	require_once($className.".php");

}