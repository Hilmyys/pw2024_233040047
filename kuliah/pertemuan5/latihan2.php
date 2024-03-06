<?php
$animals = ["🐱", "🐰", "🐵", "🐨", "🐮"];
$foods = ["🍜", "🍣", "🌭", "🍗", "🍤"]
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>array</title>
</head>

<body>
    <h3>Daftar animals</h3>
    <ol>
        <?php for ($i = 0; $i < 5; $i++) { ?>
            <li><?php echo $animals[$i]; ?></li>
        <?php } ?>
    </ol>

    <h3>Daftar foods</h3>
    <ul>
        <?php for ($i = 0; $i < 5; $i++) { ?>
            <li><?php echo $foods[$i]; ?></li>
        <?php } ?>
    </ul>

    <hr>

    <h3>Daftar animals</h3>
    <ol>
        <?php foreach($animals as $b) : ?>
        <li><?= $b; ?> </li>
            <?php endforeach; ?>
    </ol>
    <h3>Daftar foods</h3>
    <ol>
        <?php foreach($foods as $a) : ?>
        <li><?= $a; ?> </li>
            <?php endforeach; ?>
    </ol>
</body>

</html>