<?php
switch (rand(0,9)){
	case 0:
	case 1:
	case 2:
		$result = "‚²‚ß‚ñ‚È‚³‚¢B‚ ‚È‚½‚Ì¡“ú‚Ì‰^¨‚Í‹¥‚Å‚·B";
		break;
	case 3:
	case 4:
	case 5:
	case 6:
	case 7:
		$result = "‚ ‚È‚½‚Ì¡“ú‚Ì‰^¨‚Í‹g‚Å‚·B";
		break;		
	case 8:
	case 9:
	default:
		$result = "‚¨‚ß‚Å‚Æ‚¤‚²‚´‚¢‚Ü‚·I‚ ‚È‚½‚Ì¡“ú‚Ì‰^¨‚Í‘å‹g‚Å‚·Ih";
		break;
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8"/>
	<title>test</title>
</head>
<body>
<p><?php echo $result; ?></p>
</body>
</html>
