<?php require "array.php" ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/topnav.css">
        <link rel="stylesheet" href="css/liste.css">
        <title>Les Livres de la semaine</title>
    </head>
    <body>
        <?php require_once "templates/topmenu.php"  ?>
        <h1>Cette semaine, l'IT Book Club vous propose</h1>

        <table>
            <?php foreach ($arr as $user): ?>
                <tr class="list">
                    <td class="column"><?= $user['title'] ?></td>
                    <td class="column"><?= $user['pic'] ?></td>
                    <td class="column"><?= $user['description'] ?></td>
                </tr>
            <?php endforeach ?>
        </table>


        <?php require_once "templates/footer.php"  ?>
    </body>
</html>
