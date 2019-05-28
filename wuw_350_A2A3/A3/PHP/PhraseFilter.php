<?php

session_start();

$nums = []; 
$nums = $_SESSION['num'];
$alps =[];
$alps= $_SESSION['alp'];

	echo "Your phrase parsed into words : ";
 	echo "<table id = 'phraseTb' name ='table1'>
 	<tr>
 	<th>Word</th>
 	<th>Length</th>
 	<th>Type</th>
 	</tr>";

if(isset($_POST['submit1B']))
{
 	foreach($alps as $words)
 	{
 		$len = strlen($words);
 		$first3 = substr($words, 0, 3);
 		$type = "starts with 3 alphabetic characters";

 	echo "<tr>
 		<td>$words</td>
 		<td>$len</td>
 		<td>$type</td>
 		</tr>";
 	}
 }
 else if(isset($_POST['submit2B'])) 	
 {
 	foreach($nums as $words)
 	{

 	$len = strlen($words);
 	$first3 = substr($words, 0, 3);
	$type = "starts with 3 digits";

 	echo "<tr>
 		<td>$words</td>
 		<td>$len</td>
 		<td>$type</td>
 		</tr>";
 	}
 }
 else
 {
 	$wordt = $_GET['type'];
 	if($wordt == 'alp')
 	{
 		foreach($alps as $words)
 		{
 			$len = strlen($words);
 			$first3 = substr($words, 0, 3);
 			$type = "starts with 3 alphabetic characters";

 		echo "<tr>
	 		<td>$words</td>
 			<td>$len</td>
 			<td>$type</td>
 			</tr>";
 		}
 	}
 	else
 	{
 		foreach($nums as $words)
 		{
 			$len = strlen($words);
 			$first3 = substr($words, 0, 3);
 			$type = "starts with 3 digits";

 		echo "<tr>
	 		<td>$words</td>
 			<td>$len</td>
 			<td>$type</td>
 			</tr>";
 		}
 	}
 }

 echo "Return to the main page <a href = ../Phrase.xhtml>Here</a>"

?>