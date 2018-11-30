<?php
declare(strict_types=1);

require_once(__DIR__.'/../Haldun/Palindrome.php');

use Haldun\Palindrome;
use PHPUnit\Framework\TestCase;

Class PalindromeaTest extends TestCase {
	protected $palindrome;
    public function setUp()
    {
        $this->palindrome = new Palindrome();
    }
    public function testisPalindrome()
    {
        $this->assertEquals('Deleveled is Palindrome', $this->palindrome->isPalindrome('Deleveled'));
    }
}