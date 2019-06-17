<?php
session_start();
$_SESSION['id'] = -1;
header("location: ../login.html");