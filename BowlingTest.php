<?php
                               
//require_once 'PHPUnit/Framework.php';
require_once 'PHPUnit.php';
require_once 'Bowling.php';
class BowlingTest extends PHPUnit_TestCase
{
    public function testScoreAllGutter()
    {
        $score = new Bowling("--------------------");
        $this->assertEquals(0, $score->getScore());
    }

	public function testScoreAllStrike()
	{
        $score = new Bowling("xxxxxxxxxxxx");
        $this->assertEquals(300, $score->getScore());
	}

	public function testScoreAllFiveSpare()
	{
        $score = new Bowling("5/5/5/5/5/5/5/5/5/5/5");
        $this->assertEquals(150, $score->getScore());
	}

	public function testScoreAllNineGutter()
	{
        $score = new Bowling("9-9-9-9-9-9-9-9-9-9-");
        $this->assertEquals(90, $score->getScore());
	}
 
}

$suite = new PHPUnit_TestSuite('BowlingTest');
$result = PHPUnit::run($suite);
print $result->toHTML();
