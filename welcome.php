<?php
session_start();
if (isset($_SESSION['user'])) 
    include 'header.inc';{
    echo "Welcome, " . $_SESSION['user'];
} else {
    header('Location: login.html');
}
include 'footer.inc';
?>