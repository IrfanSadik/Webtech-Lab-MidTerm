<?php
	
	if(isset($_POST['dd'])){
		echo $_POST['dd'];
	}
	
	if(isset($_POST['mm'])){
		echo $_POST['mm'];
	}
	
	if(isset($_POST['yy'])){
		echo $_POST['yy'];
	}
?>

<form action="#" method="post">
	<fieldset>
		<legend>DOB</legend>
		
		dd
		<select name="dd">
			<option value="01">01</option>
			<option value="02">02</option>
			<option value="03">03</option>
			<option value="04">04</option>
		</select>
		mm
		<select name="mm">
			<option value="01" >01</option>
			<option value="02" >02</option>
			<option value="03" >03</option>
			<option value="04" >04</option>
		</select>
		yy
		<select name="yy">
			<option value="2000" >2000</option>
			<option value="2001" >2001</option>
			<option value="2002" >2002</option>
			<option value="2003" >2003</option>
		</select>
		<br/>
		
		<input type="submit" name="submit" value="Submit">
	</fieldset>
</form>