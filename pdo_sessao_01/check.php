<?php
require_once 'init.php';
if (!isLoggedIn())
{
header('Location: form_login.php');
}
?>