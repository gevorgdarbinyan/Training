<?php

$number = rand(1,2016);
if($number >= 10 && $number <= 99)
{
	$first = (int)($number / 10);
	$second = $number % 10;
	if($first > $second)
	{
		$max = $first;
	}
	else
	{
		$max = $second;
	}
	echo "Մուտոագրվել է ".$number." թիվը: Մեծագույնը = ".$max;
}
elseif($number >= 100 && $number <= 999)
{
	$first = (int)($number / 100);
	$second = $number / 10 % 10;
	$third = $number % 10;
	
	$r = ($first + $second + $third) % ($first - $second - $third);
	if($r >= 1)
	{
		for($j = 1; $j <= $r;$j++)
		{
			echo "<img src='images/1.jpg' width='150' alt='' /><br />";
		}
	}
	
}
elseif($number >= 1000 && $number <= 2016)
{
	$first = (int)($number / 1000);
	$second = $number / 100 % 10;
	$third = $number /10 % 10;
	$fourth = $number % 10;
	
	if($number % 4 == 0 && $fourth !=0 )
	{
		echo $fourth.$third.$second.$first;
	}
}