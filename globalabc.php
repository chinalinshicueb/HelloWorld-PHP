<?php
	function globalabc($username, $password){
		static $counter=0;
		$counter++;
		echo $username." and ".$password."@".$counter;
	}
	
	class GlobalABC{
		public static $counter=0;
		
		public static function addOne(){
			self::$counter++;
		}
	}
?>