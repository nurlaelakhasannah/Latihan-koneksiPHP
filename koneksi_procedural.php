<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "latihan";

    // Create Connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // Check connection
    if (!$conn){
        die("Connection Failed : " . mysqli_connect_error());
    }
    $sql = "SELECT kode, negara, champion FROM liga";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        // Output data dari setiap Row
        while ($row = mysqli_fetch_assoc($result)) {
            echo "Liga ". $row["negara"];
            echo " mempunyai " . $row["champion"];
            echo " wakil di liga champion<br>";
        }
    } else {
        echo "0 results";
    }
    mysqli_close($conn);
?>