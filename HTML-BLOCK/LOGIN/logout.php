<?php
session_start();
session_destroy();
header("Location: ../INDEX/homePage.html");
exit();
