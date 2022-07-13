<?php
include 'database.php';


?>


<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title></title>

</head>

<body>
    
    <main>
        <div class="container">
            <ul>
                <?php foreach ($database as $cd) { ?>
                    <li>
                        <img src="<?php echo $cd["poster"]; ?>" alt="">
                        <h3><?php echo $cd["title"]; ?></h3>
                        <p><?php echo $cd["author"]; ?></p>
                        <small><?php echo $cd["year"]; ?></small>
                    </li>
                <?php } ?>
            </ul>
        </div>
    </main>
</body>

</html>