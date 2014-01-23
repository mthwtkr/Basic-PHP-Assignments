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
	// Get Heads or Tails
	function get_heads_or_tails()
	{
		return rand(0,1);
	}
	// Coin Results Tracker
	function coin_results_tracker($heads, $tails)
	{
		echo "Got ". $heads ." head(s) so far and ". 
					$tails ." tail(s) so far</p>"; 
	}
	// Throw Coin Function
	function throw_coin()
	{
		// Declare Variables
		$heads_count = 0;
		$tails_count = 0;

		for ($index = 1; $index <= 5000; $index++)
		{
			$winning_side = get_heads_or_tails();
			echo "<p>Attempt #". $index .": Throwing a coin... ";
			if ($winning_side == 1)
			{
				echo "It's a head!... ";
				$heads_count++;
			}
			else
			{
				echo "It's a tail!... ";
				$tails_count++;
			}
			coin_results_tracker($heads_count, $tails_count);
		}
	}
?>
<!-- END OF PHP DECLARATIONS -->
<body>
	<div class="container">
			    <?php
			    	throw_coin();
			    ?>
	</div> <!--End of #container -->
</body>
</html