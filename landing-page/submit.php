<?php include "header.php" ?>

<div id="content-body">
<div class="content">
<?php

$name = $_POST['name'];
$country = $_POST['country'];
$number = $_POST['number'];
$email = $_POST['email'];

define( "DB_DSN", "mysql:host=localhost;dbname=faspay" );
define( "DB_USERNAME", "root" );
define( "DB_PASSWORD", "" );


try {
    $conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO faspaydb (name, country, number, email) VALUES ('$name', '$country', '$number', '$email')";
    $conn->exec($sql);
    echo "New user record submitted successfully!";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

$conn = null;

?>
<br />
<br />
<button><a href=".">Click to go back home</a></button>
</div>
</div>

<?php include "footer.php" ?>