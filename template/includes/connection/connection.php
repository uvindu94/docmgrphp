<?php

// error_reporting(E_ALL);
// ini_set('display_errors', 'On');

    // Database connection
    // $conn = new mysqli('localhost', 'sltdigitalweb_giftvouchers', '4lln9gts@#1', 'sltdigitalweb_giftvouchers');
    $conn = new mysqli('localhost', 'root', '', 'php_doc_manager');
    // $conn = new mysqli('localhost', 'rixo84na_user', '4lln9gts@#1', 'rixo84na_db');

    if ($conn->connect_error) {
        echo json_encode(['code' => 500, 'message' => 'Database connection failed']);
        exit();
    }
    ?>