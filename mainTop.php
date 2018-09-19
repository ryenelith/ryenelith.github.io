<?php	session_start(); ?>	

<html>
<title>Ryen Elith</title>

<head>
	<link rel="stylesheet" href="styles/main.css" />
</head>

<body>

	<!-- ############################################ -->
	<!-- ##############   WORK BENCH   ############## -->
	<!-- ############################################ -->

	<div id="workbench" >
	
	
		<!-- ##############   TITLE   ############## -->

		<div id="title">
		
			<table width=100% padding=>
				  <tr>
				    <th width="33.3%">
						<font face="Calibri" color="Black" size="15px"><a href="index.php">Ryen Elith</a></font>
					</th>
				    <th width="33.3%">
				    			<img class="circleimage" src="resources/ryen.jpg" alt="Profile Picture" />	
				    </th >
				    <th width="33.3%">
				    		
								<a href="https://www.linkedin.com/in/ryen-elith-712519170/">
									<img class="connectItem" src="resources/icons/linkedin.png" alt="Linkedin-logo" />
								</a>
								<img id="myBtn" class="connectItem" src="resources/icons/skype.png" alt="Skype-logo" />
								<a href="mailto:ryen.elith@gmail.com">		
									<img class="connectItem" src="resources/icons/gmail.png" alt="gmail-logo" />
								</a>	
								<a href="https://github.com/ryenelith">
								<img class="connectItem" src="resources/icons/github.png" alt="github-logo" />				
				   	</th>
				  </tr>	 
			</table>   

			<!-- The Modal -->
			<div id="myModal" class="modal">
			
			  <!-- Modal content -->
			  <div class="modal-content">
			    <span class="close">&times;</span>
			    <p>My Skype name is:  <b>ryen.e</b></p>
			  </div>
			  
			</div> <!-- modal end -->
		
			<script>
				// Get the modal
				var modal = document.getElementById('myModal');
				
				// Get the button that opens the modal
				var btn = document.getElementById("myBtn");
				
				// Get the <span> element that closes the modal
				var span = document.getElementsByClassName("close")[0];
				
				// When the user clicks the button, open the modal 
				btn.onclick = function() {
				    modal.style.display = "block";
				}
				
				// When the user clicks on <span> (x), close the modal
				span.onclick = function() {
				    modal.style.display = "none";
				}
				// When the user clicks anywhere outside of the modal, close it
				window.onclick = function(event) {
				    if (event.target == modal) {
				        modal.style.display = "none";
				    }
				}
			</script>	
			
		</div>  <!-- title end -->
		
		<hr size="2px">
		
		<!-- ##############   MAIN CONTENT   ############## -->
		
		<div id="mainContent">