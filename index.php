<?php
    require_once("app\applicationContext.php");    
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <!-- Подключение меню и футера -->
    <?php include("layouts/header.php"); ?>
    <main>
        <div class="container">
            <div class="row">
                <div class="col-8">
                    <!-- Контент сайта -->
                    <?php foreach($recipes as $item): ?>
                        <div class="card p-2">
                            <p><?php echo $item["title"]; ?></p>
                            <p><?php echo $item["description"]; ?></p>
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="col-4">
                    <!-- Подключение сайдбара -->
                    <?php include("layouts/sidebar.php"); ?>
                </div>
            </div>
        </div>
    </main>
    <?php include("layouts/footer.php"); ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
