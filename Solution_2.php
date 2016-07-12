<?php
function duplicate_at_4_indices($all_numbers)
{
$numbers = $all_numbers;
$duplicate_numbers = array();
$array_length = count($numbers);
$j=0;
for($i = 0;$i < $array_length;$i++){
		$j = $i+3;
		if($j < $array_length){
			if($numbers[$i] == $numbers[$j]){
			//to ensure desired duplicate number doesn't get repeated in the resultant array
				if(!in_array($numbers[$i],$duplicate_numbers)){
					$duplicate_numbers[$i] = $numbers[$i];
					}	
			

			}
		}
	
	}
return 	$duplicate_numbers;
}

$resultant_array = duplicate_at_4_indices(array(1,3,4,1,2,6,1,9,8,3)) ;
//to print all the desired duplicate numbers
echo"The desired duplicate number(s) :<br>";
foreach($resultant_array as $duplicate){
	echo $duplicate."<br>";
}
?>