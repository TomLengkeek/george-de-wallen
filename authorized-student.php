<?php 
session_start();
include("./functions.php");
is_authorized(['student', 'docent']);
?> 