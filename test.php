<?php
if(isset($_GET['test'])) {
    echo "yes";
} else {
    echo "no";
}
?>
<form action="" method="get">
    <input type="submit" value="test" name="test">
</form>