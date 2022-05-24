<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>FOR</title>
</head>
<body>
 <h2>Perulangan For</h2>
    <?php
    echo "perulangan 1 sampai 10 <br />";
    for ($i=1; $i<=10; $i++) {
        echo "perulangan ke:" . $i . '<br />';
    }
    echo "<br />";
    echo "perulangan menurun dari 10 ke 1 <br />";
    for ($i=10; $i>=1; $i--) {
        echo "perulangan ke: " . $i . '<br />';
    }
    ?>
</body>
</html>