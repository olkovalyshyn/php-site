<?php
$page = 'contact';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <section class="container">
        <header>
            <?php require('../view/header.php'); ?>
        </header>
        <main class="main-area">
            <section class="contact">
                <h3>Contact us</h3>
                <form action="contact-form.php" method="post" target="_blank">
                    <input type="text" name="user" placeholder="Your full name" />
                    <input type="tel" name="tel" placeholder="Your phone number" />
                    <input type="email" name="email" placeholder="Your mail" />
                    <textarea name="message" placeholder="Type your message here ........"></textarea>
                    <button class="main-btn" type="submit">Send message</button>
                </form>

            </section>

        </main>
        <footer>
            <?php require('../view/footer.php') ?>
        </footer>
    </section>
</body>

</html>