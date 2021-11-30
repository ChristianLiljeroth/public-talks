<?php
//Resets the state counter to 0 and returns you to admin controls.
$myfile = fopen("state.txt", "w") or die("Unable to open file!");
fwrite($myfile, "0");
fclose($myfile);
header("Location: https://talk.christianliljeroth.dk/admin/");
?>