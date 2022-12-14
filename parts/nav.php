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
                echo '<li><a href="/auth/register/choices/tutor.php">Become a Tutor</a></li>';
            }
        } else {
            echo '<li><a href="/auth/register/choices/tutor.php">Become a Tutor</a></li>';
        }

        if(isLoggedIn()) {
            echo '<li><a href="/core/dashboard">Dashboard</a></li>';
            echo '<li><a href="/auth/logout.php">Logout</a></li>';
        } else {
            echo '<li><a href="/auth/login/login.php">Login</a></li>';
        }
        ?>
    </ul>
</nav>