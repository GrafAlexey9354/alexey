<?php
declare(strict_types=1);
use PHPUnit\Framework\TestCase;
include_once __DIR__ . '/../core/EquationInterface.php';
include_once __DIR__ . '/../core/LogInterface.php';
include_once __DIR__ . '/../core/LogAbstract.php';
include_once __DIR__ . '/../Alex/linear.php';
include_once __DIR__ . '/../Alex/Square.php';
include_once __DIR__ . '/../Alex/SjedinException.php';
include_once __DIR__ . '/../Alex/Log.php';
class linearTest extends TestCase {
	public function testlinear1() : void
	{
		$a = new Alex\linear();
		$this->assertEquals([-2],$a->linear(5,10));
	}
	public function testlinear2() : void
	{
        $a = new Alex\linear();
        $this->assertEquals([0],$a->linear(5,0));
	}
	public function testExpectException1() : void
	{
        $a = new Alex\linear();
        $this->expectException(Alex\SjedinException::class);
        $a->linear(0,5);
	}
	public function testExpectException2() : void
	{
        $a = new Alex\linear();
        $this->expectException(Alex\SjedinException::class);
        $a->linear(0,0);
	}
}
