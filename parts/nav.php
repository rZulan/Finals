<style>
nav {
    display: grid;
    grid-template-columns: 1fr 4fr;

    align-items: center;

    background-color: rgb(6, 128, 87);
}

nav ul {
    width: 30%;
    margin-left: 60%;

    white-space: nowrap;
}

nav ul a {
    flex: 1;
    margin: 0 20px 0 20px;
}
</style>

<nav>
    <?php
    include('logo.php');
    ?>

    <ul>
        <a href="/core/home.php">Home</a>
        <a href="#">Find a Tutor</a>
        <?php
        if(!isTutor($SQL_Handle, $_SESSION['user_id'])) {
            echo "<a href=\"../auth/register/choices/tutor.php\">Become a Tutor</a>";
        }
        ?>
        <?php
        if(isLoggedIn()) {
            echo "<a href=\"/core/dashboard/index.php\">Dashboard</a>";
            echo "<a href=\"/auth/logout.php\">Logout</a>";
        } else {
            echo "<a href=\"/auth/login/login.php\">Login</a>";
        }
        ?>
    </ul>
</nav>