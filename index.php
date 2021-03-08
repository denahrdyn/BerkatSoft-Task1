<?php
// given two words, return true if fall all the letters
// of the first word are contained in the second

function containLetters($str1, $str2, $m, $n)
{
	// Untuk Index str1
	$j = 0; 
	
	// Lintasi str2 dan str1, dan bandingkan arus
	// karakter str2 dengan karakter pertama dari
	// str1, jika cocok maka lanjutkan di str1
	for($i = 0; $i < $n and
		$j < $m; $i++)
		if ($str1[$j] == $str2[$i])
			$j++;
	
	// Jika semua karakter str1 ditemukan di str2
	return ($j == $m);
}

	// Driver Code
	$str1 = "brs";
	$str2 = strtolower("berkatco");
	$m = strlen($str1);
	$n = strlen($str2);
	
	if(containLetters($str1, $str2, $m, $n))
		echo "True";
	else
		echo "False";

?>
