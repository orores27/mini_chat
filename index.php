<?php
require_once('db.php');

$requete = 'SELECT *, DATE_FORMAT(date, "%d/%m/%Y à %H:%i:%s")AS formated_date FROM messages';
$statement = $db->query($requete);
$messages = $statement->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mini chat</title>
</head>
<body>
    <main>
        <section>
            <form action="chat.php" method="POST">
                <label for="name">Prénom</label>
                <input type="text" name="name" placeholder="Amine" value='<?= isset($_SESSION['name']) ? $_SESSION['name'] : '' ?>'>
                <label for="message">Message</label>
                <input type="text" name="message" placeholder="Ecrire votre commentaire ici !" <?= isset($_SESSION['name']) ? 'autofocus' : '' ?> >
                <button type="submit">Envoyer</button>
            </form>
            <table>
                <caption>Mini Chat</caption>
                <tr>
                    <th>Utilisateur</th>
                    <th>Message</th>
                    <th>Date</th>
                </tr>
                <?php foreach($messages as $message): ?> 
                    <tr>
                        <td><?= $message['user'] ?></td>
                        <td><?= $message['message'] ?></td>
                        <td><?= $message['formated_date'] ?></td>
                    </tr>
                <?php endforeach ?>
            </table>
        </section>
    </main>
</body>
</html>