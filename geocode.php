<?php
$servername = "134.173.43.8";
$username = "clinic";
$password = "trickypassword";
$dbname = "queries";

$geocodeInfo['queryAddress'] = $_GET['queryAddress'];
$geocodeInfo['formattedAddress'] = $_GET['formattedAddress'];
$geocodeInfo['lat'] = $_GET['lat'];
$geocodeInfo['lng'] = $_GET['lng'];
$geocodeInfo['hasBounds'] = $_GET['hasBounds'];
$geocodeInfo['NEBoundLat'] = $_GET['NEBoundLat'];
$geocodeInfo['NEBoundLng'] = $_GET['NEBoundLng'];
$geocodeInfo['SWBoundLat'] = $_GET['SWBoundLat'];
$geocodeInfo['SWBoundLng'] = $_GET['SWBoundLng'];
$geocodeInfo['foundGeocode'] = $_GET['foundGeocode'];

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