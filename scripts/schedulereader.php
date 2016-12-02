<?php
	function getFileContents() {
		$file = fopen("data/schedule.csv","r"); //Open file
		$data = array();
		while(!feof($file)) { //While there is a next line, convert each line into an array and add it to the array
			$line = fgetcsv($file);
			$data[] = $line;
		}
		fclose($file); //close file
		return $data;
	}
	function turnDataIntoArray($data) {
		$list = array();
		foreach ($data as $line) { //For each array in data, get first value to be the key and the second value to be the value
			$list[$line[0]] = $line[1] + ': ' + $line[2];
		}
		ksort($list); //Sort elements in array in alphabetical order
		return $list;
	}
	function createTableElement($list) {
		echo "<dl>";
		$i = 0;
		foreach ($list as $key=>$value) { //For each key value pair in the list, print the keys in bold and print the values
			$i++;
			echo "<dt>".$key."</dt>";
			echo "<dd class=\"$i\">".$value."</dd>";
		}
		echo "</dl>";
	}
	//Call all three functions
	$data = getFileContents();
	$list = turnDataIntoArray($data);
	createTableElement($list); 
	echo"ALSKDJOASDJALSDKALSKDMASD";
?>