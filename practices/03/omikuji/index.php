<?php
switch (rand(0,9)){
	case 0:
	case 1:
	case 2:
		$result = "���߂�Ȃ����B���Ȃ��̍����̉^���͋��ł��B";
		break;
	case 3:
	case 4:
	case 5:
	case 6:
	case 7:
		$result = "���Ȃ��̍����̉^���͋g�ł��B";
		break;		
	case 8:
	case 9:
	default:
		$result = "���߂łƂ��������܂��I���Ȃ��̍����̉^���͑�g�ł��I�h";
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
