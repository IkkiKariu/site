<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p><?php var_dump($_FILES); ?></p>

    <?php 
        if ($_FILES && !$_FILES["image"]["error"]) {
            $name = "../uploadedFiles/" . $_FILES["image"]["name"];
            move_uploaded_file($_FILES["image"]["tmp_name"], $name);
        }
    ?>
</body>
</html>