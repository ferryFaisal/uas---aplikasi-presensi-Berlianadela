<?php
include "connect_db.php";

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO mahasiswa (nim, nama, kelas)
        VALUES ('3202016102', 'SYAHRUL FEBRIANSYAH', '5B')";

if ($conn->query($sql) === TRUE) {
  echo "<br>";
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>