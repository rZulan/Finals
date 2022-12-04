<div class="side-bar">
    <ul>
        <a href="../../home.php">HOME</a>
        <?php
        if(isTutor($SQL_Handle, $_SESSION['user_id'])) {
            echo "<a href=\"../tutor/index.php\">TUTOR</a>";
        }
        ?>
        <a href="">PROFILE</a>
        <a href="">ACCOUNT</a>
        <a href="/auth/logout.php">LOGOUT</a>
    </ul>
</div>