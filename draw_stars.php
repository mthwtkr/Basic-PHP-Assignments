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
	// 
	function draw_stars($array)
	{
		foreach ($array as $value)
		{
			echo "<p>";
			if (is_numeric($value)) // If $value is a number
			{
				for ($index = 0; $index <= $value; $index++)
				{
					echo "*";
				}
			}
			else // Else $value is a string
			{
				for ($index = 0; $index < strlen($value); $index++)
				{
					echo strtolower($value[0]);
				}
			}
			echo "</p>";
		}
	}

	// Declare Variables
	$star_array = [4, "omo", 1, "Michael", 5, 7, "Jimmy Smith"];
?>
<!-- END OF PHP DECLARATIONS -->
<body>
	<div class="container">
			    <?php
			    	draw_stars($star_array);
			    ?>
	</div> <!--End of #container -->
</body>
</html>