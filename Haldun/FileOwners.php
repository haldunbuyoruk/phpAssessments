<?php

// Some PHP
namespace Haldun;
Class FileOwners{

	public  function groupByOwners($files)
	{
		if(is_array($files)){
			$data = [];
			foreach ($files as $key => $value) {
				$data[$value][] = $key;
			}
			return $data;
		}
		return false;
	}
}

/*$files = [
    "Input.txt" => "Randy",
    "Code.py" => "Stan",
    "Output.txt" => "Randy"
];
$fileOwners = new FileOwners;
var_dump($fileOwners->groupByOwners($files));
*/