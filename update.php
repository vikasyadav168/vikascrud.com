<?php
include 'db.php';
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $result = $conn->query("SELECT * FROM users WHERE id=$id");
    $row = $result->fetch_assoc();
}
if (isset($_POST['update'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $conn->query("UPDATE users SET name='$name', email='$email' WHERE id=$id");
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html>
<body>
<h2>Update Record</h2>
<form method="POST">
    Name: <input type="text" name="name" value="<?= $row['name'] ?>" required>
    Email: <input type="email" name="email" value="<?= $row['email'] ?>" required>
    <button name="update">Update</button>
</form>
</body>
</html>