<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AdminCP</title>
    <link rel="stylesheet" href="../css/style_ad.css">
    <style>
        /* Add some basic styling */
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }
        textarea{
            resize: none;
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <?php
        include("./config/config.php");
        include("./modules/header.php");
        include("./modules/menu.php");
        include("./modules/main.php");
        include("./modules/login.php");
        include("./modules/footer.php");
        ?>

    </div>
</body>

</html>