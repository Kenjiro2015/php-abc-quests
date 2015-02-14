<?php
$answer = 100;
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8"/>
	<title>test</title>
</head>
<body>
<input type="text" name="left" required autofocus/>
<select name="operator">
	<option valuse="+" selected>+</option>
	<option valuse="-">-</option>
	<option valuse="*">*</option>
	<option valuse="/">/</option>
</select>
<input type="text" name="right" required/>
<p><?php echo $answer; ?></p>
</body>
</html>