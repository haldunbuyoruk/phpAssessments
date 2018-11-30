<?php

namespace Haldun;

class Palindrome {
	public function isPalindrome($word)
    {
        // Add your code here
    	 return (strtolower(strrev($word)) == strtolower($word)) ? $word .' is Palindrome' : $word . ' is\'t Palindrome' ;
    }   
}
/*
$palindrome = new Palindrome;
echo $palindrome->isPalindrome('Deleveled');
*/