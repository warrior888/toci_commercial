<?php

$testStrlen = array("sfgdf", "we345tet", "wowowdsd");
$testSubstr = array(
    array("kwadraty", 2, 4),
    array("kwasy", 1, -2),
    array("andrzejduda", 0, 7),
    array("tosieuda", 2, 6),
    array("dmuchawcelatawcewiatr", 6, -2),
    array("oleoleolaolaitylkolegialegiawarszawa", 5, -7),
);
    
$testElements = array(
    array('dir' => 'funkcje', 'file' => 'function.php', 'strlen' => 'pw_strlen', 'substr' => 'pw_substr')
);


foreach($testElements as $key => $value)
{
    require_once $value['dir'].'/'.$value['file'];
    echo "Test funkcji strlen:\n";
    foreach($testStrlen as $keyTest => $valueTest)
    {
        $result = $value['strlen']($valueTest);
        $result2 = strlen($valueTest);
        if($result == $result2)
        {
            echo 'Passed: '.$valueTest."\n";
        }
        else
        {
            echo 'Failed: '.$valueTest.' | '.$value['strlen'].': '.$result.' / strlen: '.$result2."\n";
        }
    }
    echo "##########################\nTest funkcji substr:\n";
    foreach($testSubstr as $keySub => $valueSub)
    {
        $result = $value['substr']($valueSub[0], $valueSub[1], $valueSub[2]);
        $result2 = substr($valueSub[0], $valueSub[1], $valueSub[2]);
        if($result == $result2)
        {
            echo 'Passed: '.$valueSub[0]."\n";
        }
        else
        {
            echo 'Failed: '.$valueSub[0].' | '.$value['substr'].': '.$result.' / substr: '.$result2."\n";
        }
    }
}
