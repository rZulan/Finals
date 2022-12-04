<style>
nav {
    display: grid;
    grid-template-columns: 1fr 4fr;

    align-items: center;

    background-color: rgb(6, 128, 87);
}

nav ul {
    display: flex;
    
    width: 30%;
    margin-left: 60%;

    white-space: nowrap;
}

nav ul li {
    flex: 1;
    margin: 0 20px 0 20px;

    list-style: none;
}
</style>

<nav>
    <?php
    include('logo.php');
    ?>

    <ul>
        <li><a href="/core/home.php">Home</a></li>
        <li><a href="/core/courses.php">Courses</a></li>
        <?php
        if(isLoggedIn()) {
            if(!isTutor($SQL_Handle, $_SESSION['user_id'])) {
                echo "<li><a href=\"../auth/register/choices/tutor.php\">Become a Tutor</a></li>";
            }
        } else {
            echo "<li><a href=\"../auth/register/choices/tutor.php\">Become a Tutor</a></li>";
        }
        ?>
        <?php
        if(isLoggedIn()) {
            echo "<li><a href=\"/core/dashboard/index.php\">Dashboard</a></li>";
            echo "<li><a href=\"/auth/logout.php\">Logout</a></li>";
        } else {
            echo "<li><a href=\"/auth/login/login.php\">Login</a></li>";
        }
        ?>
    </ul>
</nav>