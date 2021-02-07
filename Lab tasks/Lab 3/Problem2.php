<?php
  $marks= 88;
  if ($marks >= "90") 
  {
	echo "The grade is: A+";
  } 
  elseif ($marks > "80"&& $marks<"90") 
  {
	echo "The grade is: A";
  } 
  elseif ($marks > "70"&& $marks<"80") 
  {
	echo "The grade is: B";
  } 
  elseif ($marks > "60"&& $marks<"70") 
  {
	echo "The grade is: C";
  } 

  else 
  {
	echo "The grade is: F";
  }
  
  
?>