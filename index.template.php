<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <nav>
<!--        ul>(li>a)*4 -->
        <ul>
            <li><a href="index.php">Tasques</a></li>
            <li><a href="persons.php">Persones</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="contact.php">Contact</a></li>
        </ul>
    </nav>

    <hi>
        <ul>
                <?php foreach ($tasks as  $task) : ?>
                    <li>
                        <?php if($task->completed) : ?>
                        <strike><?= $task->description ?></strike>
                        <?php else : ?>
                        <?= $task->description ?>
                        <?php endif;?>
                    </li>
                <?php endforeach; ?>
        </ul>

    </hi>
</body>
</html>