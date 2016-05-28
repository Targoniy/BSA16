<?php
namespace Marvel\Cresskill;

class Wasp
{
	public static function whoami(){
		$className = explode('\\', __CLASS__);
		return (sprintf('I am %s from %s', array_pop($className), array_pop($className))) . PHP_EOL; 
	}
}

