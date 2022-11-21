        <?php $activePage = basename($_SERVER['PHP_SELF'], ".php"); ?>

        <nav class="navigation">
            <a href="/" class="logo">
                <img class="logo-img" src="/img/logo.png">
            </a>
            <ul class="menu-header">

                <li class="menu-item <?php if ($activePage === "services") {
                                            echo "active";
                                        } ?>"><a class="menu-link" href="/pages/services.php">Services</a></li>
                <li class="menu-item <?php if ($activePage === 'portfolio') {
                                            echo "active";
                                        } ?>"><a class="menu-link" href="/pages/portfolio.php">Portfolio</a></li>
                <li class="menu-item  <?php if ($activePage === 'contact') {
                                            echo "active";
                                        }  ?>"><a class="menu-link" href="/pages/contact.php">Contact</a></li>
            </ul>
        </nav>