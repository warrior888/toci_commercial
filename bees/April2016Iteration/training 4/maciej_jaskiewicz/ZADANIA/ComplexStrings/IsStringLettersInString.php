<?php

class IsStringLettersInString
{
	private $sortedSubject;
	private $sortedSeek;
	private $subjectLength;
	private $seekLength;

	protected function sortSubjectAndSeek($subject, $seek) {
		$this->sortedSubject= MJ_STRING::sort($subject);
		$this->sortedSeek = MJ_STRING::sort($seek);
	}
	
	protected function getSubjectAndSeekLength($subject, $seek) {
		$this->subjectLength = MJ_STRING::strlen($subject);
		$this->seekLength = MJ_STRING::strlen($seek);
	}
	
	protected function findEl($seek) {
		for ($i = 0; $i < $this->subjectLength; $i++) {
			if(MJ_STRING::substr($this->sortedSubject, $i, MJ_STRING::strlen($seek)) == $seek) {
				return true;
			}
		}
		return false;
	}

	protected function checkString() {
		$tmpStr = '';

		for ($i = 0; $i < $this->seekLength; $i++) {
			$tmpStr .= $this->sortedSeek[$i];
			if(isset($this->sortedSeek[$i+1])) {
				if($this->sortedSeek[$i] != $this->sortedSeek[$i+1]) {
					if(!$this->findEl($tmpStr)) {
						return false;
					}
					$tmpStr = '';
				}
			}
		}
		return true;
	}

	public function checkLettersInString($subject, $seek) {
		$this->sortSubjectAndSeek($subject, $seek);
		$this->getSubjectAndSeekLength($subject, $seek);

		return $this->checkString();
	}

}