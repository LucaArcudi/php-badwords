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

        <?php
        $textContent = $_GET["content"];
        $userBadWord = $_GET["badword"];
        ?>

        <div>

            <h2>PARAGRAFO</h2>

            <p>
                <?php
                echo $textContent;
                ?>
            </p>

            <span>
                <?php
                echo "lunghezza: " . strlen($textContent);
                ?>
            </span>
        </div>

        <div>

            <h2>NUOVO PARAGRAFO</h2>

            <p>
                <?php
                if (str_contains($textContent, strtolower($userBadWord)) || str_contains($textContent, ucfirst($userBadWord))) {
                    $textContent = str_ireplace($userBadWord, "***", $textContent);
                    echo $textContent;
                } else {
                    echo $textContent;
                }
                ?>
            </p>

            <span>
                <?php
                echo "lunghezza: " . strlen($textContent);
                ?>
            </span>
        </div>
    </main>
</body>

</html>