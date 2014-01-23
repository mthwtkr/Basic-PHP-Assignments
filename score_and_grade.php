<?php

function determine_score($score)
{
	// Evaluate for A grade
	if ($score >= 90 AND $score <= 100)
	{
		echo "<h1>Your score: ". $score ."/100</h1>";
		echo "<h2>Your grade is A</h2>";
	}
	// Evaluate for B grade
	else if ($score >= 80 AND $score < 90)
	{
		echo "<h1>Your score: ". $score ."/100</h1>";
		echo "<h2>Your grade is C</h2>";
	}
	// Evaluate for C Grade
	else if ($score > 70 AND $score < 80)
	{
		echo "<h1>Your score: ". $score ."/100</h1>";
		echo "<h2>Your grade is C</h2>";
	}
	else
	{
		echo "<h1>Your score: ". $score ."/100</h1>";
		echo "<h2>Your grade is D</h2>";
	}
}

$score = rand(50,100);
determine_score($score);

?>