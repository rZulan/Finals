<div class="side-bar">
    <ul>
        <li><a href="/core/home.php">HOME</a></li>
        <?php
        if(isTutor($SQL_Handle, $_SESSION['user_id'])) {
            echo '<li><a href="/core/dashboard/tutor">TUTOR</a></li>';
        }
        ?>

        <?php
        if(isAdmin($SQL_Handle, $_SESSION['user_id'])) {
            echo '<li><a href="/core/dashboard/admin">ADMIN</a></li>';
        }
        ?>
        <li><a href="/core/dashboard/user">USER</a></li>
        <li><a href="/auth/logout.php">LOGOUT</a></li>
    </ul>
</div>