<?php

class Text
{
	private static $devise = " €";

	public static function displayTxt($string){
		echo '<p>' . $string . '</p>';
	}

	public static function withzero($nb){
		if($nb < 10){
			return "0".$nb . self::$devise;
		}
		else{
			return $nb . self::$devise; /* self = référence à la classe */ 
		}

		self::displayTxt($rep);
	}

	public static function displayTab($tab){
		echo "<ul>";

		foreach ($tab as $value) {
			echo "<li>$value</li>";
		}
		echo "</ul>";
	}

}