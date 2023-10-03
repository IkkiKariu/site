<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3><?php var_dump($_FILES) ?></h3>
    <?php foreach ($_FILES["files"] as $fileProp): ?>
        <p>"1."<?php echo $fileProp[0] ?></p>
        <p>"0."<?php echo $fileProp[1] ?></p>
    <?php endforeach ?>

    <?php for ($i = 0; $i < count($_FILES["files"]["name"])-1; $i++) ?>
    <?php move_uploaded_file($_FILES["files"]["tmp_name"][$i], "../uploadedFiles/" . $_FILES["files"]["name"][$i]); ?>

</body>
</html>