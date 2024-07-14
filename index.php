<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Website</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .menu {
            background-color: #333;
            overflow: hidden;
        }
        .menu a {
            float: left;
            display: block;
            color: white;
            text-align: center;
            padding: 14px 20px;
            text-decoration: none;
        }
        .menu a:hover {
            background-color: #ddd;
            color: black;
        }
        .content {
            padding: 20px;
        }
    </style>
</head>
<body>

<div class="menu">
    <a href="index.php?page=home">Home</a>
    <a href="index.php?page=show">Show User</a>
    <a href="index.php?page=services">Services</a>
    <a href="index.php?page=dataseed">Data seed</a>
</div>

<div class="content">
    <?php
    if (isset($_GET['page'])) {
        $page = $_GET['page'];
        switch ($page) {
            case 'home':
                include 'home.php';
                break;
            case 'show':
                include 'show.php';
                break;
            case 'services':
                include 'services.php';
                break;
            case 'dataseed':
                include 'dataseed.php';
                break;
            default:
                echo "<h2>Page not found</h2>";
        }
    } else {
        include 'home.php';
    }
    ?>
</div>

</body>
</html>
