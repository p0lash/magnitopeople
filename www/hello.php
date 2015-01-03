
<div style="color:white;">
<?php
$servername = "localhost";
$username = "aupolash_admin";
$password = "thisispolash07";
$dbname = "aupolash_mobile";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT id, name, email FROM form_element";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["name"]. " " . $row["email"]. " " ."<img src='like.png'>". "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>


<?php echo "Hello"; ?>
</div>