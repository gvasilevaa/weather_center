<?php 
session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	
	<meta content='text/html; charset=UTF-8' http-equiv='Content-Type' />
	<title>dalipiche.com</title>
	<link rel="stylesheet" type="text/css" href="weather.css">
	<link rel="stylesheet" type="text/css" href="admin_form.css">
	
</head>
<body>
	<?php  require_once "database_config.php";?>
	<div id="wrapper">
		<header> 
			<h1>Weather center</h1>
		</header>
		<nav class="left clear">
			<ul>
				<li><a href="weather.php">Main</a></li>
				<li id="logout"><a href="logout.php">Log out</a></li>
				<li id="login"><a href="login.html">Log in</a></li>
			</ul>
		</nav>
		<div id="wrapper-content">
			<section>
				<div id="warning"></div>
				<div id="content">
					<h2 id="add">Add information</h2>
				<form action="" method="post" onsubmit="return false;" id="add_data">
					<div class="enter_data">
						<label for="location">Location&nbsp;&nbsp;&nbsp;</label>
						
						<?php 
							// $query="SELECT id_location, location_name
						 //            FROM location";
							// 	$res = $mysqli->query($query);
							// 	if (!$res) {
							// 	    echo 'Could not run query: ' . $mysqli->error();
							// 	    exit;
							// 	}
								echo '<select name="location" id="location" class="location">';
								// while (($row = mysqli_fetch_row($res)) != null)
								// {
								// 	 echo '<option value='."$row[0]|$row[1]".'>'. $row[1].'</option>'; 
							    
								// } 
								echo "</select>";?>
								<br> <br>
						<label for="date">Date&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
						<input type="date" id="date" name="date" placeholder="DD/MM/YYYY" required="required"> <br><br>
						<label for="temperature">Temperature&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
						<input type="number" id="temperature" name="temperature" placeholder="&#x2103;" required="required" min="-40" max="40"><br><br>
						<label for="humidity">Humidity&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
						<input type="number" id="humidity" name="humidity" placeholder="%" required="required" min="0" max="100"> <br/><br/>
						<label for="hours">Time&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
						<input type="number" id="hours" name="hours" placeholder="hours" required="required" min="0" max="24" step="2"> <br/><br/>
						<label for="images">Image&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
						<select name="images" id="imges" >
							<option value="1">Sunny</option>
							<option value="2">Cloudy</option>
							<option value="3">Rain</option>
						</select><button type="submit" id="emp_submit1">Add</button>
					</div>
				</form>
				<form action="" method="post" onsubmit="return false;" id="add_data_day">
					<div class="enter_data">
						<label for="location">Location&nbsp;&nbsp;&nbsp;</label>
						
						<?php 
							// $query="SELECT id_location, location_name
						 //            FROM location";

							// 	$res = $mysqli->query($query);
							// 	if (!$res) {
							// 	    echo 'Could not run query: ' . $mysqli->error();
							// 	    exit;
							// 	}
								echo '<select name="location" id="location" class="location">';
								// while (($row = mysqli_fetch_row($res)) != null)
								// {
								// 	 echo '<option value='."$row[0]|$row[1]".'>'. $row[1].'</option>'; 
							    
								// } 
								echo "</select>";?>
								<br> <br>
						<label for="date">Date&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
						<input type="date" id="date" name="date" placeholder="DD/MM/YYYY" required="required"> <br><br>						
						<label for="temperature">Temperature&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
						<input type="text" id="temperature" name="temperature" placeholder="&#x2103;" required="required"><br><br>
						<label for="humidity">Humidity&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
						<input type="text" id="humidity" name="humidity" placeholder="%" required="required"> <br/><br/>
						<label for="images">Image&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
						<select name="images" id="imges" >
							<option value="1">Sunny</option>
							<option value="2">Cloudy</option>
							<option value="3">Rain</option>
						</select>
						<button type="submit" id="emp_submit">Add</button>
					</div>
				</form>
			<br/>
				<h2 id="del">Delete information</h2>
				<form action="" method="post" onsubmit="return false;" id="delete_data">
					<div class="delete_data">
						<label for="location">Location&nbsp;&nbsp;&nbsp;</label>
						<select name="location" id="location" class="location"></select>
								<br> <br>
						<label for="date">Date&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
						<input type="date" id="date" name="date" placeholder="DD/MM/YYYY" required="required"> <br><br>
						<label for="hours">Time&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
						<input type="number" id="hours" name="hours" placeholder="hours" required="required" min="0" max="24" step="2"> <br/><br/>
						<button type="submit" id="delete">Delete</button>
					</div>
				</form>
				<br/>
				<form action="" method="post" onsubmit="return false;" id="delete_day_data">
					<div class="delete_data">
						<label for="location">Location&nbsp;&nbsp;&nbsp;</label>
						<select name="location" id="location" class="location"></select>
								<br> <br>
						<label for="date">Date&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
						<input type="date" id="date" name="date" placeholder="DD/MM/YYYY" required="required"> <br><br>
						<button type="submit" id="delete1">Delete</button>
					</div>
				</form>
			</div>
			</section>
			<footer>
		 		<p>Designed by <a href="http://martomarinov.wordpress.com/">Martin Marinov</a> and <a href="http://bg.linkedin.com/pub/gergana-atanasova/72/2b4/165/">Gergana Atanasova</a>, Copyright &#169; 2013. All rights reserved.</p>
			</footer>
		 </div>
	</div>
	<script src="http://code.jquery.com/jquery-1.10.2.js"></script> 
	<script type="text/javascript" src="ajax_session.js"></script>
	<script src="http://malsup.github.com/jquery.form.js"></script> 
	<script type="text/javascript">
		$(document).ready(function () {

			$('#emp_submit1').click(function() {
    			$.ajax({
				    type: "POST",
				    url: "add_data.php",
				    data: $("#add_data").serialize(),
				    success: function(data){
				    	console.log(data);

				    	/*$('#warning').show("fast").delay(2000).hide("slow");
*/				    	$('#warning').text("Proccesing...");
				    	if(data==true){
				    		$('#warning').text("Yep success");
				    		$('#warning').show("fast").delay(2000).hide("slow");
				    	}else{
				    		$('#warning').text("Ooh no can not insert data");
				    		$('#warning').show("fast").delay(2000).hide("slow");
				    	}
				    }
				 });
        	});
        	
        		$('#emp_submit').click(function() {
        			$('#warning').show('fast');
        			
    			$.ajax({
				    type: "POST",
				    url: "add_day_data.php",
				    data: $("#add_data_day").serialize(),
				    success: function(data){
				    	console.log(data);
				    	$('#warning').text("Proccesing...");
				    	if(data=="success"){
				    		$('#warning').text("Yep success");
				    		$('#warning').show("fast").delay(2000).hide("slow");
				    	}else{
				    		$('#warning').text("Ooh no can not insert data");
				    		$('#warning').show("fast").delay(2000).hide("slow");
				    	}
				    }
				 });
        	});
        		$('#delete').click(function() {
        		var hour=$('input[id=hours]').text();
        		console.log(hour);
    			$.ajax({
				    type: "POST",
				    url: "del_data.php",
				    data: $("#delete_data").serialize(),
				    success: function(data){
				    	console.log(data);
				    	// $('#warning').show('fast');
				    	$('#warning').text("Proccesing...");
				    	if(data==true){
				    		$('#warning').text("Yep success");
				    		$('#warning').show("fast").delay(2000).hide("slow");
				    	}else{
				    		$('#warning').text("Ooh no can not delete data");
				    		$('#warning').show("fast").delay(2000).hide("slow");
				    	}
				    }
				 });
        	});
        		$('#delete1').click(function() {
    			$.ajax({
				    type: "POST",
				    url: "del_data_day.php",
				    data: $("#delete_day_data").serialize(),
				    success: function(data){
				    	console.log(data);
				    	/*$('#warning').show('fast');*/
				    	$('#warning').text("Proccesing...");
				    	if(data==true){
				    		$('#warning').text("Yep success");
				    		$('#warning').show("fast").delay(2000).hide("slow");
				    	}else{
				    		$('#warning').text("Ooh no can not delete data!");
				    		$('#warning').show("fast").delay(2000).hide("slow");
				    	}
				    }
				 });
        	});
        		$('#add').click(function() {
        		$("#delete_data").hide("fast");
        		$("#delete_day_data").hide("fast");	
	    		$("#add_data").show("slow");	
	    		$("#add_data_day").show("slow");		 
        	});
        		$('#del').click(function() {
        		$("#add_data").hide("fast");
        		$("#add_data_day").hide("fast");	
	    		$("#delete_data").show("slow");	
	    		$("#delete_day_data").show("slow");		 
        	});

		});

	</script>
	
</body>
</html>
