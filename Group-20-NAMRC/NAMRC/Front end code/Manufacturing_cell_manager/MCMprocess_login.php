<!-- processing the HSM database details and created a SQL query to select all details - Done by ARIBA -->
<?php
session_start();

$db = new SQLite3('C:\xampp\htdocs\Group-20-NAMRC\NAMRC\NAMRC.db');

// Check if connection was successful
if (!$db) {
    die("Connection failed: " . $db->lastErrorMsg());
}

$email = $_POST["email"];
$password = $_POST["password"];

// SQL query to select the emails from the table 
$stmt = $db->prepare("SELECT * FROM 'Manufacturing Cell Manager' WHERE MCM_email = :email"); //done for ya ariba
$stmt->bindValue(':email', $email, SQLITE3_TEXT);
$result = $stmt->execute();

if ($row = $result->fetchArray(SQLITE3_ASSOC)) {
    if ($row['MCM_password'] === $password) {
        $_SESSION['logged_in'] = true;
        header("Location:MCM_Home.php");
        exit();
    } else {
        echo"<h2>Invalid username or password</h2>";
    }
} else {
    echo "<h2>Email not recognized as a Manufacturing Cell Manager</h2>";
}
$db->close();
?>
