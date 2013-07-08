<?php
    include_once('database_config.php');
    if(!empty($_POST)){
    	$date = $_POST['date'];
	    $date = $mysqli->real_escape_string($date);
	    
	    $temperature = $_POST['temperature'];
	    $temperature = $mysqli->real_escape_string($temperature);

	    $humidity=$_POST['humidity'];
	    $humidity = $mysqli->real_escape_string($humidity);

	    $hours=$_POST['hours'];
	    $hours = $mysqli->real_escape_string($hours);

	    list($loc_id, $loc_name) = explode('|', $_POST['location']);

	    $image_hour_id=$_POST['images'];
	    $query="SELECT  `weather_hour`
                FROM weather_data 
                WHERE location_id_location='$loc_id'
                AND weather_date='$date'
                AND weather_hour = '$hours'";
        $res = $mysqli->query($query) or die($mysqli->error);
            if (($row = mysqli_fetch_row($res)) != null){                       
             echo false;
            }else {
                $result = $mysqli->query("INSERT INTO `weather_data` (`weather_date`,`weather_temp`,`weather_humidity`,`weather_hour`,`location_id_location`, `image_hour_id`) 
            VALUES ('$date','$temperature','$humidity','$hours','$loc_id','$image_hour_id')") 
            or die($mysqli->error); 
            echo true;
            }
    	}else{
    		echo false;
    	}
    