<html>
<head>
	<title>Display the result in 3rd text box</title>
<?php
extract($_POST);
//do addition and store the result in $res
if(isset($add))
	{$res=$fnum+$snum;}	
if(isset($sub))
	{$res=$fnum-$snum;}
if(isset($mult))
	{$res=$fnum*$snum;}
if(isset($div))
	{$res=$fnum/$snum;}
?>
</head>
<body>
<form method="post">
 <table align="center" border="1">
	<Tr>
	<th>Your Result</th>
	<td><input type="text" readonly="readonly" value="<?php echo @$res;?>"/></td>
	</tr>
	<tr>
		<th>Enter first number</th>
		<td><input type="text" name="fnum" value="<?php echo @$fnum;?>"/></td>
	</tr>	
	<tr>
		<th>Enter second number</th>
		<td><input type="text" name="snum" value="<?php echo @$snum;?>"/></td>
	</tr>
	<tr>
		<td align="center" colspan="2">
		<input type="submit" value="ADD +" name="add"/>
		<input type="submit" value="SUB -" name="sub"/>
		<input type="submit" value="MUL *" name="mult"/>
		<input type="submit" value="DIV /" name="div"/>
	</tr>
	</table>	
</form>
</body>
</html>