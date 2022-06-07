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
                <label for="name">Nom</label>
                <input type="text" name="name" placeholder="Amin">
                <label for="message">Message</label>
                <input type="text" name="message" placeholder="Ecrire votre commentaire ici !">
                <button type="submit">Envoyer</button>
            </form>
        </section>
    </main>
</body>
</html>