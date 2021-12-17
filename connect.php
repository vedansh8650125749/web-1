<?php
session_start();
$con = mysqli_connect("localhost", "root", "", "mini_project_vedansh");
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

const BOOK_PATH = 'http://localhost/photography%20website' . '/';
