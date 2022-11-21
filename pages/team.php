<?php
$page = 'team';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Team</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <section class="container">
        <header>
            <?php require('../view/header.php'); ?>
        </header>
        <main class="main-area">
            <section class="team">
                <h3>Our team</h3>

                <ul class="team-section">
                    <li class="team-box">
                        <img class="team-img" src="../img/team-1.png">
                    </li>
                    <li class="team-box">
                        <img class="team-img" src="../img/team-2.png">
                    </li>
                    <li class="team-box">
                        <img class="team-img" src="../img/team-3.png">
                    </li>
                    <li class="team-box">
                        <img class="team-img" src="../img/team-4.png">
                    </li>

                </ul>

            </section>

        </main>
        <footer>
            <?php require('../view/footer.php') ?>
        </footer>
    </section>
</body>

</html>