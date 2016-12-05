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
			$day = $line[0];
			$time = $line[1];
			$artist = $line[2];
			
			$performance = array();
			$performance[] = $time;
			$performance[] = $artist;
			
			if (!array_key_exists($day, $list)) {
				$list[$day] = array();
			}
			$list[$day][] = $performance;
		}
		//ksort($list); //Sort elements in array in alphabetical order
		return $list;
	}
	function createTableElement($list) {
		echo "<dl>";
		$i = 0;
		foreach ($list as $day=>$performers) { //For each key value pair in the list, print the keys in bold and print the values
			$i++;
			echo "<dt onclick=\"collapse($i);\">".$day."</dt>";
			foreach ($performers as $time_artist) {
				echo "<dd class=\"$i\"><span class=\"time\">".$time_artist[0]
					."</span><span class=\"artist\">".$time_artist[1]."</span></dd>";
			}
		}
		echo "</dl>";
	}
	//Call all three functions
	$data = getFileContents();
	$list = turnDataIntoArray($data);
	createTableElement($list);
?>