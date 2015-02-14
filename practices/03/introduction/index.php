<?php
$words = array('World', 'PHP', 'Web Application');
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8"/>
	<title>test</title>
</head>
<body>
<?php foreach ($words as $word) { ?>
	<p>Hello,<?php echo $word; ?>!</p>
<?php } ?>
</body>
</html>

