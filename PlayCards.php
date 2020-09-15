<?php

$personsCount = $_GET['count'];


if($personsCount == null || $personsCount < 0)
 throw new Exception("Input value does not exist or value is invalid");


echo "<br>";
echo "<br>";

$deck = array(
    'D-A', 'D-2', 'D-3', 'D-4', 'D-5', 'D-6', 'D-7', 'D-8', 'D-9', 'D-T', 'D-J', 'D-Q', 'D-K',
    'C-A', 'C-2', 'C-3', 'C-4', 'C-5', 'C-6', 'C-7', 'C-8', 'C-9', 'C-T', 'C-J', 'C-Q', 'C-K',
    'H-A', 'H-2', 'H-3', 'H-4', 'H-5', 'H-6', 'H-7', 'H-8', 'H-9', 'H-T', 'H-J', 'H-Q', 'H-K',
    'S-A', 'S-2', 'S-3', 'S-4', 'S-5', 'S-6', 'S-7', 'S-8', 'S-9', 'S-T', 'S-J', 'S-Q', 'S-K'
);

 shuffle($deck);

       $personArray = array();
        for($i = 0; $i < count($deck); $i++){
            $personArray[$i % $personsCount][] = $deck[$i];
        }


        $keys = array_keys($personArray);
		for($i = 0; $i < count($personArray); $i++) {
		    echo "Person".$i." " ;
		    foreach($personArray[$keys[$i]] as  $value) {
		     if( $value === end( $personArray[$keys[$i]] ))
		        echo $value ;
		        else
		        echo  $value."," ;
		    }
		    echo "<br>";
		 }



?>
