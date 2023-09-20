<?php
session_start();
session_destroy();
require ('../../config/constant.php');
header("Location: ".ROOT_URL."login.php");
die();