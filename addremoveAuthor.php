<?php
$username = $_POST["username"];
echo "Currently logged in as: $username<br>";
exec("./sc addremoveAuthor.wpml $username", $return);
foreach($return as $line) {
    echo "$line";
}
?>
