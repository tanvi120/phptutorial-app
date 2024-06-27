<?php
include("/opt/lampp/htdocs/phptuto/config/database.php");
session_destroy();
header("LOCATION: index.php");