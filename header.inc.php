<header>
    <nav>
        <a href="index.php" class="logo"></a>
        <a href="index.php">Cardcollector</a>
    </nav>
    <form action="" method="post">
        <input type="text" placeholder="Ik zoek naar...">
    </form>
    <div class="header-user">
        <?php if(isset($_SESSION["logged-in"]) && $_SESSION["logged-in"]):?>
            <a href="#" class="user-avatar"></a>
            <a href="logout.php" class="btn">logout</a>
        <?php else:?>
            <a href="login.php" class="btn">login</a>
        <?php endif;?>
    </div>
</header>