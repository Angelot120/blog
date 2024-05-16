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
                    <li>
                        <a href="/blog/pages/inscription.php?page=inscription" class="<?=(isset($_GET["page"]) && $_GET["page"] == "inscription" ? "menu-active" : ""); ?>">Inscription</a>
                    </li>
                    <li>
                        <a href="/blog/pages/connection.php?page=connection" class="<?=(isset($_GET["page"]) && $_GET["page"] == "connection" ? "menu-active" : ""); ?>">Connection</a>
                    </li>
                </ul>
            </td>
        </tr>
    </table>
</header>