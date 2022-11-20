       <nav class="navigation">
           <a href="/" class="logo">
               <img class="logo-img" src="/img/logo.png">
           </a>
           <ul class="menu-header">
               <li class="menu-item" class="<?php if ($page === "home") {
                                                echo "active";
                                            } ?>"><a class="menu-link" href="/pages/home.php">Home</a></li>
               <li class="menu-item" class="<?php if ($page === 'portfolio') {
                                                echo "active";
                                            } ?>"><a class="menu-link" href="/pages/portfolio.php">Portfolio</a></li>
               <li class="menu-item" class="<?php if ($page === 'contact') {
                                                echo "active";
                                            }  ?>"><a class="menu-link" href="/pages/contact.php">Contact</a></li>
           </ul>
       </nav>