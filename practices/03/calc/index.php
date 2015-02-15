<?php
$left = isset($_GET['left']) ? $_GET['left'] : null;
$operator = isset($_GET['operator']) ? $_GET['operator'] : '+';
$right = isset($_GET['right']) ? $_GET['right'] : null;

if(!is_null($left) && !is_null($right)){
	switch($operator){
		case '-':
			$answer = $left - $right;
			break;		
		case '*':
			$answer = $left * $right;
			break;		
		case '/':
			$answer = $left / $right;
			break;		
		case '+':
		default:
			$answer = $left + $right;
			break;		
	}
	$result = "{$left}{$operator}{$right} = {$answer}";
}else{
	$result = 'No Result';
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
	<input type="text" name="left" value="<?php echo $left; ?>" required autofocus/>
	<select name="operator">
		<option valuse="+" <?php if($operator === '+'){echo 'selected';} ?>>+</option>
		<option valuse="-" <?php if($operator === '-'){echo 'selected';} ?>>-</option>
		<option valuse="*" <?php if($operator === '*'){echo 'selected';} ?>>*</option>
		<option valuse="/" <?php if($operator === '/'){echo 'selected';} ?>>/</option>
	</select>
	<input type="text" name="right" value="<?php echo $right; ?>"required/>
	<input type="submit" value="Calc">
</form>
<p><?php echo $result; ?></p>

</body>
</html>