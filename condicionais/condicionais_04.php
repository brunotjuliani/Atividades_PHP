<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

echo "<select>";

for($i = date("Y"); $i >= date("Y")-100; $i--) {

    echo '<option value="'.$i.'" > '.$i.'</option>';

}

echo "</select>";

?>