<html>
	
<head>
		

		
<title>get_browser</title></head>
	
<body bgcolor="sky color">
		
<form method="GET">
			
<table border="1" bgcolor="green">
				
<tr>
					
<td>Enter your name</td>
					
<td><input type="text" name="n"/></td>
				
</tr>
				
<tr>
					<?php
			
echo $_GET['n'];		
		
?>
					
<td colspan="2" align="center">
					
<input type="submit" value="show my name"/></td>
				
</tr>
				
			
</table>
		
</form>
	
</body>
 
</html>