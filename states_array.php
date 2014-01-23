
<!doctype HTML>
<html>
<head>
	<meta charset="UTF-8" />
	<meta name="description" content="" />
	<title></title>
	<link rel="stylesheet" type="text/css" href="http://code.jquery.com/ui/1.10.3/themes/dark-hive/jquery-ui.css"/>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css"/>
	<script type="text/javascript" src="http://code.jquery.com/jquery-2.0.3.js"></script>
	<script type="text/javascript" src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
	<script type="text/javascript" src="./jquery.zoom.min.js"></script>
	
	<script>
	$(document).ready(function(){
	

	});
	</script>
</head>
<!-- PHP DECLARE FUNCTIONS AND VARIABLES -->
<?php
	// Get length of an array
	function get_length($array)
	{
		return count($array);
	}
	// Display dropdown using for loop
	function for_dropdown($array)
	{
		$length = get_length($array);
		echo "<select>";
		for ($index = 0; $index < $length; $index++)
		{
			echo "<option>". $array[$index] ."</option>";
		}
		echo "</select>";
	}
	// Display dropdown using foreach loop
	function foreach_dropdown($array)
	{
		echo "<select>";
		foreach ($array as $value)
		{
			echo "<option>". $value ."</option>";
		}
		echo "</select>";
	}
	// Declare Variables
	$states = ["CA", "WA", "VA", "UT", "AZ"];
?>
<!-- END OF PHP DECLARATIONS -->
<body>
	<div class="container">
		<header>
			    <?php
			    	for_dropdown($states);
			    	foreach_dropdown($states);
			    	array_push($states, 'NJ', 'NY', 'DE');
			    	for_dropdown($states);
			    ?>
		</header> 
	</div> <!--End of #container -->
</body>
</html