<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "latihan";

    // Create Connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check Connection
    if ($conn -> connect_error) {
        die ("Connection Failed: ".$conn->connect_error);
    }

    $sql = "SELECT kode, negara, champion FROM liga";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Output data dari row
        while ($row = $result->fetch_assoc()){
            echo "Liga ".$row["negara"];
            echo " mempunyai ".$row["champion"];
            echo " wakil di Liga Champion<br>";
        }
    }
    else {
        echo "0 results";
    }
    $conn->close();
?>