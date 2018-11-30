<?php 
namespace Haldun;
Class Thesaurus{
	public $data = ["buy" => ["purchase"], "big" => ["great", "large"]];

	public function getSynonyms($word){
		if(isset($this->data[$word])){
			return json_encode(['word' => $word, 'synonyms' => $this->data[$word]]);
		}
		return json_encode(['word' => $word, 'synonyms' => []]);	
	}
}
?>
