<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List</title>

    <?php
        include('config.php');
        $statements = file($filename, FILE_IGNORE_NEW_LINES);
    ?>

</head>
<body>
    <?php
        foreach ($statements as $stmt){
            echo "<p>". $stmt . "</p>";
        }
    ?>
</body>
</html>
