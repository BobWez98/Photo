<?php
if(!isset($_POST['submit']))
{
    echo "error, u moet eerst het formulier invullen!";
}
$naam  = $_POST['naam'];
$email  = $_POST['email'];
$message  = $_POST['naam'];
