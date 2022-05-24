<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Switch</title>
</head>
<body>
 <h2>Kondisi Switch</h2>
    <?php
    $nama_hari = date("l");
    switch ($nama_hari) {
        case "sunday";
            echo "Minggu";
            break;
        case "Monday";
            echo "Senin";
            break;
        case "Tuesday";
            echo "Selasa";
            break;
        default:
        echo "Sabtu";
    }
    ?>
</body>
</html>