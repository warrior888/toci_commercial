<?php

class FileOperations {
    static function FileContentToArray($source) {
        $handle = fopen($source,'r');
        $arrayFile = array();
        while(!feof($handle)) {
            $arrayFile[] = fgets($handle);
        }
        fclose($handle);
        return $arrayFile;
    }
}