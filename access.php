<?php
	
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script type="text/javascript" >
		function findmatch()
		{
			if (window.XMLHttpRequest) 
			{
				// code for modern browsers
				xhttp = new XMLHttpRequest();
			} 
			else 
			{
				// code for IE6, IE5
				xhttp = new ActiveXObject("Microsoft.XMLHTTP");
			}
			xhttp.onreadystatechange = function() 
			{
				if (this.readyState == 4 && this.status == 200) 
				{
					document.getElementById('results').innerHTML = this.responseText;
				}
			};
			
			xhttp.open("GET", 'search.php?search_text='+document.search.search_text.value, true);
			xhttp.send();
						
		}
	
	
	</script>
</head>
<body>
	<form id="search" name="search">
		Type a name: <br>
		<input type="text" name="search_text" onkeyup="findmatch();">
	</form>
	
	<div id="results">
	</div>
	
	
	
</body>
</html>