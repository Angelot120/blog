<header class="menu-bar">
    <table>
        <tr>
            <td>
                Blog
            </td>
            <td>
                <ul>
                    <li>
                        <a href="/blog/index.php" class="<?=(!isset($_GET["page"]) ? "menu-active" : ""); ?>">Home</a>
                    </li>
                    <li>
                        <a href="/blog/pages/articles.php?page=articles" class="<?=(isset($_GET["page"]) && $_GET["page"] == "articles" ? "menu-active" : ""); ?>">Article</a>
                    </li>
                    <?php
                    if (!isset($_COOKIE["username"])) {
                        ?>
                            <li>
                                <a href="/blog/pages/inscription.php?page=inscription" class="<?=(isset($_GET["page"]) && $_GET["page"] == "inscription" ? "menu-active" : ""); ?>">Inscription</a>
                            </li>
                            <li>
                                <a href="/blog/pages/connection.php?page=connection" class="<?=(isset($_GET["page"]) && $_GET["page"] == "connection" ? "menu-active" : ""); ?>">Connection</a>
                            </li>
                        <?php
                    }
                    ?>

                </ul>
            </td>
            <?php
            if (isset($_COOKIE["username"])) {
                ?>
                <td>
                    <?= $_COOKIE['username']?> <a href="/blog/processing/logout.php">Se déconnecter</a>
                </td>
                <?php
            }
            ?>
        </tr>
    </table>
</header>