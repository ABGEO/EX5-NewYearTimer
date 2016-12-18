<?php
		/*///////////////////////////////////////
	   ///	 Skript: "ახალ წლამდე დარჩა..."	 ///
	  ///	 18/12/2016						///
	 ///	 <DIRECTED ByABGEO />		   ///
	///*/////////////////////////////////////

	$date = strtotime("1 January 2017");  
	$sec = $date - time();  
	$days = floor(($date - time()) /86400);  
	$h1 = floor(($date - time()) /3600);  
	$m1 = floor(($date - time()) /60);  
	$hour = floor($sec/60/60 - $days*24);  
	$hours = floor($sec/60/60);  
	$min = floor($sec/60 - $hours*60);  
	  
	if ($sec>0) echo '<strong>ახალ წლამდე დარჩა:</strong><br/>'; 
	
	echo "<strong>";
		if ($days>0) 
			echo $days.' დღე,';
		if ($h1>0) 
			echo ' '.$hour.' საათი';
		if ($m1>0) 
			echo ' და '.$min.' წუთი';
		
		
		if ($sec<0) 
			echo ("გილოცავთ ახალ წელს!!!");
	echo "</strong>";
?>