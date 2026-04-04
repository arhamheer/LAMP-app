<?php
$host = getenv('MYSQL_HOST') ?: 'mysql';
$db   = getenv('MYSQL_DATABASE') ?: 'mydb';
$user = getenv('MYSQL_USER') ?: 'root';
$pass = getenv('MYSQL_PASSWORD') ?: 'rootpass';

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("<h3>Connection failed: " . $conn->connect_error . "</h3>");
}

$result = $conn->query("SELECT * FROM employees");

echo "<h2>Employee Records</h2>";

if ($result && $result->num_rows > 0) {
    echo "<table border='1' cellpadding='8' cellspacing='0'>";
    echo "<tr><th>ID</th><th>Name</th><th>Position</th><th>Salary (Rs.)</th></tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>{$row['id']}</td>";
        echo "<td>{$row['name']}</td>";
        echo "<td>{$row['position']}</td>";
        echo "<td>{$row['salary']}</td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "<p>No records found.</p>";
}

$conn->close();
?>

