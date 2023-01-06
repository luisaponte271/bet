<html>

<head>
    <title>Add Data</title>
</head>

<body>
    <?php

if(isset($_POST['Submit'])) {	
	$title =  $_POST['title'];
    $team1 =  $_POST['team1'];
	/*	if (isset($_FILES['team1imagen'])) {
			$team1imagen_name =  $_FILES['team1imagen']["name"]; 
			$team1imagen_size= $_FILES["team1imagen"]["size"];
			$team1imagen_type= $_FILES["team1imagen"]["type"];
			$team1imagen_temporal= $_FILES["team1imagen"]["tmp_name"]; 

			if ($team1imagen_type=="image/x-png" || $team1imagen_type=="image/png") {
			 $extension="image/png";
			}
			if ($team1imagen_type=="image/pjpeg" || $team1imagen_type=="image/jpeg") {
			 $extension="image/jpeg";
			}
			if ($team1imagen_type=="image/gif" || $team1imagen_type=="image/gif") {
			 $extension="image/gif";
			}

			$f1= fopen($team1imagen_temporal,"wb"); 
			$f1_reconvertida = fread($f1, $team1imagen_size);
			$f1_reconvertida = base64_encode($f1_reconvertida);
 
			fclose($f1);

		} else { 
			echo "<font color='red'>imagen team 1 not set</font><br/>";
		} */
		$team1imagen_name =  $_FILES['team1imagen']["name"]; 
		$team1imagen_size= $_FILES["team1imagen"]["size"];
		$team1imagen_type= $_FILES["team1imagen"]["type"]; 
		$team1imagen_temporal= $_FILES["team1imagen"]["tmp_name"]; 
		$team1imagen_temporal = file_get_contents($team1imagen_temporal);
		//echo 'test - ' . $team1imagen_temporal;

		
    $team2 =  $_POST['team2'];
	/*	if (isset($_FILES['team2imagen'])) {
			$team2imagen_name = $_FILES['team2imagen']["name"];
			$team2imagen_size = $_FILES["team2imagen"]["size"];
			$team2imagen_type = $_FILES["team2imagen"]["type"];
			$team2imagen_temporal = $_FILES["team2imagen"]["tmp_name"];

			if ($team2imagen_type=="image/x-png" || $team2imagen_type=="image/png") {
				$extension="image/png";
			   }
			   if ($team2imagen_type=="image/pjpeg" || $team2imagen_type=="image/jpeg") {
				$extension="image/jpeg";
			   }
			   if ($team2imagen_type=="image/gif" || $team2imagen_type=="image/gif") {
				$extension="image/gif";
				}

				$f2= fopen($team2imagen_temporal,"rb");
				$f2_reconvertida = fread($f2, $team2imagen_size);
				$f2_reconvertida = base64_encode($f2_reconvertida);
				 
				fclose($f2);
		} else { 
			echo "<font color='red'>imagen team 2 not set</font><br/>";
		} */

		$team2imagen_name =  $_FILES['team2imagen']["name"]; 
		$team2imagen_size= $_FILES["team2imagen"]["size"];
		$team2imagen_type= $_FILES["team2imagen"]["type"]; 
		$team2imagen_temporal= $_FILES["team2imagen"]["tmp_name"]; 
		$team2imagen_temporal = file_get_contents($team2imagen_temporal);
		$profit = $_POST['profit'];
    	$date =  $_POST['date'];

		
	// checking empty fields
 	if(empty($title) || empty($team1) || empty($team1imagen_name) || empty($team2) 
	    || empty($team2imagen_name) || empty($date) || empty($profit) ) { 
		if(empty($title)) {
			echo "<font color='red'>title field is empty.</font><br/>";
		}
		
		if(empty($team1)) {
			echo "<font color='red'>team1 field is empty.</font><br/>";
		}

		if(empty($team1imagen_name)) {
			echo "<font color='red'>team1imagen field is empty.</font><br/>";
		}
		
		if(empty($team2)) {
			echo "<font color='red'>team2 field is empty.</font><br/>";
		}

		if(empty($team2imagen_name)) {
			echo "<font color='red'>team2imagen field is empty.</font><br/>";
		}

        if(empty($date)) {
			echo "<font color='red'>date field is empty.</font><br/>";
		}

		if(empty($profit)) {
			echo "<font color='red'>profit field is empty.</font><br/>";
		}
		
		//link to the previous page
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else {  
		//insert data to database	
		$sql = $dbh->prepare("INSERT INTO confrontation(
							 title, 
							 team1, 
							 team1imagen, 
							 team2, 
							 team2imagen, 
							 profit,
							 date_hour_confrontation) 
							 VALUES (
							 :title,
							 :team1,
							 :team1imagen,
							 :team2,
							 :team2imagen,
							 :profit,
							 :date)");
        $sql->bindParam(':title', $title);
        $sql->bindParam(':team1', $team1);
		$sql->bindParam(':team1imagen', $team1imagen_temporal);
        $sql->bindParam(':team2', $team2);
		$sql->bindParam(':team2imagen', $team2imagen_temporal);
		$sql->bindParam(':profit', $profit);
        $sql->bindParam(':date', $date);
		$sql->execute();
		 
         

		//display success message
		echo "<font color='green'>Data added successfully.";
		echo "<br/><a href='apuesta'>View Result</a>";
	}
}
?>
</body>

</html>