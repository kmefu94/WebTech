<?php

 session_start();

 $phrase = $_POST['phrase']; //retrieves the data from the textbox
 $submit = $_POST['submitB'];  //retrieves name of button pressed
//variables for determining cases
 $string = $phrase;
 $split = explode(' ',$string); //adds to session for use
 $count = count($split);



 if($submit != 'Submit')
 {
 	echo "<script type= 'text/javascript' > window.alert('Error 1: Please use the submit button to input phrase'); </script>";
	echo "<a href='../Phrase.html'>Return to input page</a>";
 }
 
 else if(empty($phrase))
 {
 	echo "<script type = 'text/javascript'> window.alert('Error 2: The inputted string is empty'); </script>";
 	echo "<a href='../Phrase.xhtml'>Return to input page</a>";	
 }

 else if($count < 3)
 {
 	echo "<script type = 'text/javascript'> window.alert('Error 3: Please enter at least 3 phrases with no special characters separated by whitespace'); </script>";
 	echo "<a href='../Phrase.xhtml'>Return to input page</a>";
 }

 else
 {
 	echo "Your phrase parsed into words : ";
 	echo "<table id = 'phraseTb' name ='table1'>
 		<tr>
 		<th>Word</th>
 		<th>Length</th>
 		<th>Type</th>
 		</tr>";

 	foreach($split as $word)
 	{
 		$len = strlen($word);
 		$first3 = substr($word, 0, 3);

 		if(ctype_alpha($first3))
 		{
 			$type = "starts with 3 alphabetic characters";
 			$alpstack[] = $word; 		}
 		else if(ctype_digit($first3))
 		{
 			$type = "starts with 3 digits";

 		}
 		else
 		{
 			$type = "undefined type";
 		}
 		 echo "<tr>
 		<td>$word</td>
 		<td>$len</td>
 		<td>$type</td>
 		</tr>";
 	}
 }

 ?>