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
        <a href="#">Home</a>
        <a href="#">Find a Tutor</a>
        <a href="#">Become a Tutor</a>
        <a href="#">Courses</a>
        <?php
        if(isLoggedIn()) {
            echo "<a href=\"http://26.238.198.155:8000/core/account/dashboard.php\">Account</a>";
            echo "<a href=\"http://26.238.198.155:8000/auth/logout.php\">Logout</a>";
        } else {
            echo "<a href=\"http://26.238.198.155:8000/auth/login/login.php\">Login</a>";
        }
        ?>
    </ul>
</nav>