<?php
    $server = "localhost";
    $user = "root";
    $pass = "";
    $dbname = "hocphp";

    $conn = mysqli_connect($server, $user, $pass, $dbname);

    if (!$conn) {
        die("Kết nối không thành công " . mysqli_connect_error());
    }

    echo "Kết nối thành công";

    mysqli_close($conn);
?>