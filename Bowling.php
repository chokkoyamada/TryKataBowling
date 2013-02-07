<?php

class Bowling
{
	public $score;
	public $frame;

	public function __construct($score)
	{
		$this->score = str_split($score);	
		$this->frame = array();
		$this->makeFrameData();
		$this->calcScore();
	}
	public function makeFrameData(){
		foreach ($this->score as $val){
			if($val === 'x'){

			}elseif($val === '-'){

			}elseif($val === '/'){

			}elseif(is_numeric($val){

			}
		}
	}

	public function getRawScore()
	{
		var_dump($this->score);
	}

	public function calcScore()
	{

	}
	public function getScore(){

	}
}

