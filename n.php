<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $latitude = $_POST["latitude"];
    $longitude = $_POST["longitude"];
    
    // Save coordinates to file
    $file = fopen("5.txt", "w");
    fwrite($file, "Latitude: $latitude\r\nLongitude: $longitude");
    fclose($file);
}
?>￼Enter
