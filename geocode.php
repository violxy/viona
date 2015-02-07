<?php
$servername = "134.173.43.8";
$username = "clinic";
$password = "trickypassword";
$dbname = "queries";

$geocodeInfo['queryAddress'] = $_POST['queryAddress'];
$geocodeInfo['formattedAddress'] = $_POST['formattedAddress'];
$geocodeInfo['lat'] = $_POST['lat'];
$geocodeInfo['lng'] = $_POST['lng'];
$geocodeInfo['hasBounds'] = $_POST['hasBounds'];
$geocodeInfo['NEBoundLat'] = $_POST['NEBoundLat'];
$geocodeInfo['NEBoundLng'] = $_POST['NEBoundLng'];
$geocodeInfo['SWBoundLat'] = $_POST['SWBoundLat'];
$geocodeInfo['SWBoundLng'] = $_POST['SWBoundLng'];
$geocodeInfo['foundGeocode'] = $_POST['foundGeocode'];

print "queryAddress is $queryAddress";
 $conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// $sqlFront = "INSERT INTO geocodes (queryAddress, formattedAddress, lat, lng, hasBounds, NEBoundLat, NEBoundLng, SWBoundLat, SWBoundLng, foundGeocode)";

if (condition) {
    # code...
}
$conn->close();
?>