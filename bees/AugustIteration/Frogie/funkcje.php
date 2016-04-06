<?php
//true / false
//$string = 49040501580;

function OwnSubString($string, $start, $end) {
    $string = (string) $string;
    $result = '';
    //$begin = $string[$start];
    for ($i = $start; $i < $start + $end; $i++) {
        $result .= $string[$i];
    }
    return $result;
}

function GetDateOfBirth($pesel) {

    $dateOfBirth = array();

    $dateOfBirth['yearOfBirth'] = OwnSubString($pesel, 0, 2);
    $dateOfBirth['mounthOfBirth'] = OwnSubString($pesel, 2, 2);
    $dateOfBirth['dayOfBirth'] = OwnSubString($pesel, 4, 2);

    return $dateOfBirth;
}

function GetPersonSex($pesel) {
    //sizeof count
    $sex = $pesel[strlen($pesel) - 2];
    $sex = (int) $sex;

    $result = '';

    if ($sex % 2 == 0) {
        $result = 'Female';
    } else {
        $result = 'Male';
    }

    return $result;
}

$pesel = "49040501580";
$peselInfo = array();
$peselInfo['dateOfBirth'] = GetDateOfBirth($pesel);
$peselInfo['sex'] = GetPersonSex($pesel);

var_dump($peselInfo);