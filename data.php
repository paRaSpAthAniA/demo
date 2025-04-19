<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "student_db";

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $section = $_POST['section'];
    $marks = $_POST['marks'];


    $target_dir = "uploads/";
    if (!is_dir($target_dir)) {
        mkdir($target_dir);
    }

    $image_name = basename($_FILES["image"]["name"]);
    $target_file = $target_dir . $image_name;
    move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);

    $sql = "INSERT INTO students (name, password, image, section, marks)
            VALUES ('$name', '$password', '$image_name', '$section', $marks)"; 
    
    if ($conn->query($sql) === TRUE) {
        echo "<p style='color: green;'>Record inserted successfully.</p>";
    } else {
        echo "<p style='color: red;'>Error: " . $conn->error . "</p>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Registration</title>
</head>
<body>

<h2>Registration Form</h2>
<form action="" method="POST" enctype="multipart/form-data">
    Name: <input type="text" name="name" required><br><br>
    Password: <input type="password" name="password" required><br><br>
    Upload Image: <input type="file" name="image" required><br><br>
    Section: <input type="text" name="section" required><br><br>
    Marks: <input type="number" name="marks" required><br><br>
    <input type="submit" name="submit" value="Submit">
</form>

<form method="GET">
    <input type="submit" name="show" value="Show All">
</form>

<?php

if (isset($_GET['show'])) {
    $result = $conn->query("SELECT * FROM students");

    echo "<h2>All Registered Students</h2>";
    echo "<table border='1'>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Image</th>
                <th>Section</th>
                <th>Marks</th>
            </tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['name']}</td>
                <td><img src='uploads/{$row['image']}' width='100'></td>
                <td>{$row['section']}</td>
                <td>{$row['marks']}</td>
              </tr>";
    }

    echo "</table>";
}
$conn->close();
?>

</body>
</html>