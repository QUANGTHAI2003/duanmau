<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../content/css/reset.css">
    <link rel="stylesheet" href="../content/style.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://pictogrammers.github.io/@mdi/font/2.0.46/css/materialdesignicons.min.css" media="all" rel="stylesheet" type="text/css" />
</head>

<body>
    <nav>
        <?php include __DIR__ . "/menu.php" ?>
    </nav>
    <section class="dashboard">
        <?php include $VIEW_NAME ?>
    </section>
    <script src="../content/app.js"></script>
    <script src="https://cdn.lordicon.com/xdjxvujz.js"></script>
</body>

</html>