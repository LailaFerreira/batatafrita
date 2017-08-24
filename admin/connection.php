<?php
    error_reporting (E_ALL & ~ E_NOTICE & ~ E_DEPRECATED);

    $localhost = "localhost";
    $user = "root";
    $password = " ";

    $con = @mysql_connect($localhost, $user, $password);
    mysql_select_db("batatafrita");
?>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            