<?php	session_start(); 

	echo "test begin";
	if(isset($_SESSION['views']))
	{}
	else 
	{		
		//write to file
		$txt = fopen("views.txt","r+"); 
		$strviews=file_get_contents("views.txt");
		echo "read from file: ".$strviews;
		$views=$strviews+1;
		echo "writen to file: ".$views;
		fwrite($txt,$views);
		fclose($txt);
		//Change Session Variable so that not counted double
		$_SESSION['views']=$views;
		echo "test complete";
	}

	
	echo "Tis is a test";
	echo "views =". $_SESSION['views'];
	
	?>