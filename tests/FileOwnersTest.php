<?php
declare(strict_types=1);

require_once(__DIR__.'/../Haldun/FileOwners.php');

use Haldun\FileOwners;
use PHPUnit\Framework\TestCase;

Class FileOwnersTest extends TestCase {
	protected $fileOwners;
    public function setUp()
    {
        $this->fileOwners = new FileOwners();
    }
    public function testGroupByOwners()
    {
        $files = [
            "Input.txt" => "Randy",
            "Code.py" => "Stan",
            "Output.txt" => "Randy"
        ];
        $this->assertEquals([
            "Randy" => [
                "Input.txt",
                "Output.txt"
            ],
            "Stan" => [
                "Code.py"
            ]
        ], $this->fileOwners->groupByOwners($files));
    }
}