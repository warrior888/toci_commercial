<?php

set_include_path(get_include_path(). PATH_SEPARATOR . "PeselValidation");
set_include_path(get_include_path(). PATH_SEPARATOR . "StringLib");

function __autoload($className) {

	@include_once($className.".php");

}