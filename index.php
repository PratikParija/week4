<?php

$obj = new main();

class main{
	public function __construct(){
		$date = date('Y-m-d', time());
		$date = str_replace('-', '/', $date);
		$display = "The value of \$date: ".$date."<br>";
		
		stringFunctions::printString($display);

		$tar = "2017/05/24";
		$display = "The value of \$tar: ".$tar."<br>";
		stringFunctions::printString($display);

		//Checking to see if the dates are the same or something else
		
		$year = array("2012", "396", "300","2000", "1100", "1089");
		echo "The value of \$year: ";
		arrayFunctions::printArray($year);
				
		htmlTags::lineBreak();

		if ($date > $tar) {
			echo 'the future<br>';

		}
		else if ($date < $tar) {
			echo 'the past<br>';

		}
		else if ($date = $tar) {
			echo 'Oops<br>';

		}
		
		echo "The positions of '/' in \$date are: ";
		$chr = '/';
		$lastPos = 0;
		$positions = array();
		while (($lastPos = strpos($date, $chr, $lastPos)) !== false){
			//echo $pos;
			$positions[] = $lastPos;
			$lastPos = $lastPos + strlen($chr);
		}

		foreach ($positions as $value){
			echo $value . ' ';
		}

		htmlTags::lineBreak();

		echo "The length of \$date: ";
		stringFunctions::stringLen($date);

		htmlTags::lineBreak();

		echo "The ASCII value of the first character in \$date: ";
		otherFunctions::asciiValue($date);

		htmlTags::lineBreak();

		echo "The string \$date as an array of elements: ";
		$dateSep = explode('/', $date);
		//dateDisplay::printArray($dateSep);
		foreach ($dateSep as $value){
			echo $value . ' ';
		}

		htmlTags::lineBreak();

		//$is_leap_year = false;
		foreach ($year as $value){
			//return $value;
			if ($value%4 == 0){
				if ($valuw%100 == 0){
					if ($value%400 == 0){
						echo $value . ' True ';
						//echo $is_leap_year = true;
					}
					else{
						echo $value . ' False ';
						//echo $is_leap_year = false;
					}
				}
				else {
					echo $value . ' False ';
					//echo $is_leap_year = true;
				}
			}
			else{
				//echo $is_leap_year = false;
				echo $value . ' False ';
				/*while ($value == null){
				}*/
			}
		}
	}	
}

class stringFunctions{
	static public function printString($text){
		echo $text;
	//Replacing - in date to /
	//$date = str_replace('-', '/', $date);
	//echo "The value of \$date: ".$date."<br>";
	}

	/*static public function findAllPos($text){
		while ($var=strpos($text){
			echo $var;
		}
	}*/

        static public function stringLen($text){
                echo strlen($text);
        }
}


class htmlTags{
	static public function lineBreak(){
		echo '<br>';
	}
}


class arrayFunctions{
	static public function printArray($array){
		print_r($array);
	}
}


class otherFunctions{
	static public function asciiValue($text){
		echo ord($text);
	}
	
}

?>
