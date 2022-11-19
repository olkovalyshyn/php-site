       <nav class="navigation">
           <a href="#" class="logo">
               <img class="logo-img" src="/img/logo.png">
           </a>
           <ul class="menu-header">
               <li class="<?php if ($page === "home") {
                                echo "active";
                            } ?>"><a class="menu-item" href="/pages/home.php">Home</a></li>
               <li class="<?php if ($page === 'about') {
                                echo "active";
                            } ?>"><a class="menu-item" href="/pages/about.php">About</a></li>
               <li class="<?php if ($page === 'contact') {
                                echo "active";
                            }  ?>"><a class="menu-item" href="/pages/contact.php">Contact</a></li>
           </ul>
       </nav>