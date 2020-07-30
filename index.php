<!DOCTYPE html>
<html>
	<head>
		<title>14</title>
		<style>
		  #name{
			<?php
			if(isset($_GET['user_name']) and $_GET['user_name'] > ""){
				echo 'display:none';
			  }
			?>
		  }
		  #user_date{
			  <?php
			  if(isset($_GET['day']) and isset($_GET['month']) and isset($_GET['year'])){
				  echo 'display:none';
			  }
			  ?>
		  }
		</style>
	</head>
	<body>
	<?php
	function runMyFunction() {
		echo 'Hello, '.$_GET['user_name']."!";
		;
	}

	if (isset($_GET['user_name'])) {
		if($_GET['user_name'] > "")runMyFunction();
	}
	?>
	<div id="name" style="margin:10px 10px 10px 10px">
		<p>Enter your name:</p>
		<form action="index.php">
			<input type="text" name="user_name">
			<input type="submit">
		</form>
	</div>
	<table>
		<?php
			$array = array("banana" => 20,  
              "orange" => 25, "apple" => 18, 
              "cherry" => 35
              );
              
			foreach( $array as $key => $value ){
				echo "<tr>"."<td style='border:1px solid grey; padding:10px 10px 10px 10px;'>".
				$key."</td>"."<td style='border:1px solid grey; padding:10px 10px 10px 10px;'>".$value."grn</td>"."</tr>";
			}
			echo date("l dS of F Y h:i:s A");
		?>
	</table>
	<div id="user_date" style="padding:20px">
		<p>Input any date(example : 10.8.1937)</p>
		<form action="index.php">
			<input type="number" name="day">
			<input type="number" name="month">
			<input type="number" name="year">
			<input type="submit">
		</form>
	</div>
	<?php
		if (isset($_GET['day']) and isset($_GET['month']) and isset($_GET['year'])) {
			$days = 365*(date("Y") - $_GET['year']) + 30 * (date("m") - $_GET['month']) + $_GET['day'] - date("d");
			echo "<p> Your input: ".$_GET['day']."  ".$_GET['month']."  ".$_GET['year']."</p>";
			echo "<p> Today: ".date("d")."  ".date("m")."  ".date("Y")."</p>"."Days paste: ".$days;
		}
	?>
	</body>
</html>