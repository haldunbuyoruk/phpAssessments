<?php
declare(strict_types=1);

require_once(__DIR__.'/../Haldun/Thesaurus.php');

use Haldun\Thesaurus;
use PHPUnit\Framework\TestCase;

Class ThesaurusTest extends TestCase {
	protected $thesaurus;
    public function setUp()
    {
        $this->thesaurus = new Thesaurus();
    }
    public function testGetSynonymsSuccess()
    {
        $this->assertJsonStringEqualsJsonString('{"word":"big","synonyms":["great", "large"]}',$this->thesaurus->getSynonyms('big'));
        $this->assertJsonStringEqualsJsonString('{"word":"agelast","synonyms":[]}',$this->thesaurus->getSynonyms('agelast'));
    }


}