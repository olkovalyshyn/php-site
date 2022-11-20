<?php
$page = 'portfolio';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <section class="container">
        <header>
            <?php require('../view/header.php'); ?>
        </header>
        <main class="main-area">
            <section class="pf">
                <h3>Portfolio</h3>

                <ul class="pf-section">
                    <?php for ($i = 1; $i <= 6; $i += 1) :  ?>
                        <li class="pf-box">
                            <img class="pf-img" src="../img/portfolio_<?php echo $i ?>.png">
                        </li>
                    <?php endfor; ?>
                </ul>

            </section>

        </main>
        <footer>
            <?php require('../view/footer.php') ?>
        </footer>
    </section>
</body>

</html>