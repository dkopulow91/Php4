<?php
    require ('1.php')
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>HomeWork4</title>
</head>
<body>
    <div class="container">
        <div>
            <?php foreach ($images as $image) : ?>
            <a href="<?= $source.'/'.$image ?>">
                <img src="<?= $source.'/'.$image ?>" alt="Picture" width="250 px" height="250 px">
            </a>
        </div>
        <?php endforeach?>



    </div>
</body>
</html>
