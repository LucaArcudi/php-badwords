<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <main>
        <p>
            <?php
            $textContent = $_GET["content"];
            echo $textContent;
            ?>
        </p>

        <span>
            <?php
            echo strlen($textContent);
            ?>
        </span>
    </main>
</body>

</html>