<html>
    <head>
        <meta charset="utf-8">
        <title>KJ Tool Database</title>
        <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@1.5.10/css/pico.min.css"> -->
        <link rel="stylesheet" href="styles.css">
    </head>

<body>

<div align="center">
<a href="https://000webhostapp.com/">
<img  src="foto/logo_kj.png" height="10%" width="18%" alt="[Rozmiar: 4189 bajtów]">
</a>
</div>

<?PHP 

$servername = "localhost";
$username = "root";
$password = "admin";
$db_name = "baza";
// Create connection

$conn = mysqli_connect($servername, $username, $password, $db_name);
// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error); }
	
//echo "Connected successfully with Database" . "<br>";
?>
<h1>System zarządzania procesem regeneracji narzędzi kuźniczych</h1>