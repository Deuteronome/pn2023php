<header>
        <div class="header-left">
            <img id="header-logo" src="../asset/image/logo.png" alt="logo"/>
            <h1><?php echo($title);?></h1>
        </div>
        <nav class="header-right">
          <?php
            foreach($navList as $nav) {
                ?>
                    <a class="nav-but" href=<?php echo($nav["link"]) ?>><?php echo($nav["label"]) ?></a>
                <?php
            }
          ?>
          <div class="nav-but" id="login-but">Login</button>
        </nav>
   </header>