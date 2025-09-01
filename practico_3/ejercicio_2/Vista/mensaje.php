<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./CSS/style.css">
</head>
<body>
    <div id="divMensaje">
        <textarea name="" id="" cols="30" rows="10">
        <?php 
        echo htmlspecialchars($mensaje); 
        ?>
        </textarea>
        <a href="./index.php">ir a inicio</a>
    </div>
</body>
</html>