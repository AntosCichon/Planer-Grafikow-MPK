<?php

if (!isset($_POST['submit'])) {
    header("Location: /index.php");
}

require_once("functions.php");