<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pgae d'accueil</title>
</head>
<body>
    <h1>Page d'accueil</h1>
    <ul>
        <?php
            foreach($users as $user){
                echo "<li>".$user->name. " - ".$user->email."</li>";
            }
        ?>
    </ul>
</body>
</html>