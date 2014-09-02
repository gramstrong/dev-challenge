<?php

/*	Graham Armstrong
	Sept. 2, 2014 */
	
function my_strpos($haystack, $needle, $offset = 0)
{
	$n = strlen($haystack);
	/*prefix array for needle*/
	$pre = array();					
	
	$i = 0;
	$pre[0] = -1;
	$j = -1;
	
	/*if needle is not a string, use ordinal value*/
	if (!is_string($needle))		
	{
		$needle = chr(intval($needle));
	}
	
	$m = strlen($needle);
	
	/*if offset is outside of string boundaries or needle is larger than haystack, return false*/
	if ($offset > $n or $offset < 0 or $m > $n)
	{
		return false;
	}
	
	/*create prefix array for needle*/
	while ($i < $m)
	{
		while ($j > -1 and $needle[$i] != $needle[$j])
		{
			$j = $pre[$j];
		}
		$pre[++$i] = ++$j;
	}
	
	/*Loop once through haystack using prefix array to count the current # of matched characters. Knuth-Morris-Pratt algorithm.*/
	$j = 0;
	for ($i = ++$offset; $i < $n; $i++)
	{
		while ($j > 0 and $needle[$j] != $haystack[$i])
		{
			$j = $pre[$j];
		}
		if ($needle[$j] == $haystack[$i])
		{
			$j++;	
		}
		if ($j == $m)
		{
			return $i - $m + 1;
		}
	}
	return false;
}

$alphabet = 'abcdefghijklmnopqrstuvwxyz';

# Should print "17"
print(my_strpos($alphabet, 'r') . "\n");

# Should print "6"
print(my_strpos($alphabet, 'ghi') . "\n");

# Should print "bool(false)"
var_dump(my_strpos($alphabet, 'u', 22));

# Should print "bool(false)"
var_dump(my_strpos($alphabet, 'A'));

# Should print "bool(false)"
var_dump(my_strpos($alphabet, 'ghk'));
