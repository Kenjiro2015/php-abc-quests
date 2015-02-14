<?php
if(isset($_GET['operator'])){
	switch($_GET['operator']){
		case '-':
			$answer = $_GET['left'] - $_GET['right'];
			break;		
		case '*':
			$answer = $_GET['left'] * $_GET['right'];
			break;		
		case '/':
			$answer = $_GET['left'] / $_GET['right'];
			break;		
		case '+':
		default:
			$answer = $_GET['left'] + $_GET['right'];
			break;		
	}
}else{
	$answer = 'No Result';
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8"/>
	<title>test</title>
</head>
<body>
<form action = "index.php" method = "GET">
	<input type="text" name="left" required autofocus/>
	<select name="operator">
		<option valuse="+" selected>+</option>
		<option valuse="-">-</option>
		<option valuse="*">*</option>
		<option valuse="/">/</option>
	</select>
	<input type="text" name="right" required/>
	<input type="submit" value="Calc">
</form>
<p><?php echo $answer; ?></p>
</body>
</html>