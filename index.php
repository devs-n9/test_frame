<?php
require 'library/engine/DB.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Engine</title>
</head>
<body>
	<?php
		$db = DB::getInstance();

		$arr = $db->query('SELECT * FROM table_name');

	?>
</body>
</html>