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
	// Get Max Value
	function get_max($array)
	{
		$max = $array[0];
		foreach ($array as $value)
		{
			if ($value > $max)
			{
				$max = $value;
			}
		}

		return $max;
	}
	// Get Min Value
	function get_min($array)
	{
		$min = $array[0];
		foreach ($array as $value)
		{
			if ($value < $min)
			{
				$min = $value;
			}
		}

		return $min;
	}
	// Determine array max and min values
	function get_max_and_min($array)
	{
		$max = get_max($array);
		$min = get_min($array);

		return $array = ['max' => $max, 'min' => $min];
	}

	// Declare Variables
	$int_array = [135, 2.4, 2.67, 1.23, 332, 2, 1.02];
?>
<!-- END OF PHP DECLARATIONS -->
<body>
	<div class="container">
			    <?php
			    	var_dump(get_max_and_min($int_array));
			    ?>
	</div> <!--End of #container -->
</body>
</html