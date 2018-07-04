<?php
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
    header("Location: http://www.google.com");
} elseif (isset($_COOKIE['Loggedin']) && $_COOKIE['Loggedin'] === true) {
    header("Location: http://www.google.com");
}
