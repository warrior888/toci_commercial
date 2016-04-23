<?php

function OpenFile($filePath) {
    $zmienna = file_get_contents($filePath);
    
    echo $zmienna;
}

function ReadDirectory($directory)
{
    $handle = opendir($directory);

    while($katalogi = readdir($handle))
    {
        //echo $katalogi."\n";
        if(is_dir($directory.$katalogi) && $katalogi != '.' && $katalogi != '..')
        {
                ReadDirectory($directory.$katalogi.'/');
        }
        
        if(is_file($directory.'/'.$katalogi) && $katalogi != $_SERVER['SCRIPT_NAME']) 
        {
            require_once $directory.'/'.$katalogi;
        }
    }
}
ReadDirectory('../');
$text = 'dsfgtg34rt324'; // test require_once
echo 'Dlugosc wyrazu'.$text.' jest rowna: '.pw_strlen($text);