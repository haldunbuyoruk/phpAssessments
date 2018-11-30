<?php
namespace Haldun;
class Path
{
    public $currentPath;

    function __construct($path)
    {
        $this->currentPath = $path;
    }

    public function cd($newPath)
    {
    	$counter = 0;
        $output = '';
        $newPath = explode('/',$newPath);
        $previousPath = explode('/', $this->currentPath);
        
        foreach($newPath as $path) {
            if($path == '..') $counter++;
        }
        
        $previousPathLength = count($previousPath);        
            for($i=0;$i<($previousPathLength - $counter);$i++)
                $output .= $previousPath[$i]."/";
        
        $newPathLength = count($newPath);
            for($i=0;$i<$newPathLength;$i++){
                if($newPath[$i] !='..'){
                    $output = $output.$newPath[$i].'';
                }
            } 
            
        $this->currentPath = $output;
        return $this;  
    }
}
/*
$path = new Path('/a/b/c/d');
echo $path->cd('/x')->currentPath;
*/