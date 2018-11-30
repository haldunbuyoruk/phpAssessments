<?php
declare(strict_types=1);

require_once(__DIR__.'/../Haldun/Path.php');

use Haldun\Path;
use PHPUnit\Framework\TestCase;

Class PalindromeaTest extends TestCase {
	protected $path;
    public function setUp()
    {
        $this->path = new Path('/a/b/c/d');
    }
    public function testCd()
    {
        $this->assertEquals('/a/b/c/x', $this->path->cd('../x')->currentPath);
    }
}