<?php

class MJ_STRING {

	public static function strlen($str) {
		$i=0;
		while(isset($str[$i])) {
			$i++;
		}
		return $i;
	}
	
	public static function strrev($str) {
		$revStr = "";
		for($i=self::strlen($str)-1; $i>=0; $i--) {
			$revStr .= $str[$i];
		}
		return $revStr;
	}
	
	public static function strpos($string, $findEl, $offset = 0) {
		for($i=$offset; $i<mj_strlen($string); $i++) {
			if(mj_substr($string, $i, mj_strlen($findEl)) == $findEl) {
				return $i;
			}
		}
		return false;
	}
	
	public static function substr($string, $start, $length = false) {
		$strLenght = self::strlen($string);
		$returnStr = "";
		$forIterStart = $start;
	
		if(!$strLenght) {
			return false;
		}
	
		if(!($start>=0 && $start<$strLenght)) {
			$forIterStart = $strLenght-abs($start);
		}
	
		for($i=$forIterStart; $i<$strLenght; $i++) {
			$returnStr .= $string[$i];
			if($length && self::strlen($returnStr) == $length) {
				break;
			}
		}
		return $returnStr;
	}
	
	public static function str_replace($search, $replace, $subject) {
		$strOffset = 0;
		$firstChar = 0;
	
		if(!is_array($search)) {
			while(true) {
				$firstChar = self::strpos($subject, $search, $strOffset);
				if($firstChar !== false) {
					$strOffset = $firstChar+1;
					$beforeStr = self::substr($subject,0,$firstChar);
					$afterStr = self::substr($subject, $firstChar + self::strlen($search));
					$subject = $beforeStr.$replace.$afterStr;
				} else {
					break;
				}
			}
		} else {
			for($i=0; $i<self::strlen($search); $i++) {
				$subject = self::str_replace($search[$i], $replace[$i], $subject);
			}
		}
		return $subject;
	}
	
	public static function strtr($string, $from, $to) {
		for($i=0; $i<self::strlen($from); $i++) {
			$string = self::str_replace($from[$i], $to[$i], $string);
		}
		return $string;
	}
	
	public static function sort($string) {
		for($i = 0; $i < self::strlen($string)-1; $i++) {
			for($j = 0; $j < self::strlen($string)-1; $j++) {
				if($string[$j] > $string[$j+1]) {
					$tmp = $string[$j];
					$string[$j]  = $string[$j+1];
					$string[$j+1] = $tmp;
				}
			}
		}
		return $string;
	}
}