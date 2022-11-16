<?php

session_start(); // Must be called before accessing any session data

if (isset($_SESSION['username'])) {
    echo "<h1>Hello, {$_SESSION['username']} </h1>";
    echo "<a href='logout.php'>Logout</a>";
} else {
    echo "<h1>Welcome GUEST</h1>";
    echo "<a href='../13_sessions.php'>Home</a>";
}