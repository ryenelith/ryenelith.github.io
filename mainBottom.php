								
		</div>	<!-- main content end -->
		
				
	</div> 	<!-- workbench end -->
	

	<!-- ##############   VISITOR COUNT   ############## -->

	<div id="visitorCount">
		<?php
			//echo "test begin";
			if(isset($_SESSION['views']))
			{}
			else 
			{		
				//write to file
				$txt = fopen("views.txt","r+"); 
				$strviews=file_get_contents("views.txt");
				//echo "read from file: ".$strviews;
				$views=$strviews+1;
				//echo "writen to file: ".$views;
				fwrite($txt,$views);
				fclose($txt);
				//Change Session Variable so that not counted double
				$_SESSION['views']=$views;
				//echo "test complete";
			}
		
			echo "<hr><div style=\"color:white\" align=\"center\">";
			echo "Total Views: ".$_SESSION['views'];
			echo "</div>"
			?>

	</div>
	
	
</body>
</html>




















