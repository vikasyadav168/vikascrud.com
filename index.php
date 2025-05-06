<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>CRUD App</title>
</head>
<body>
    <h2>Add Record</h2>
    <form method="POST" action="insert.php">
        Name: <input type="text" name="name" required>
        Email: <input type="email" name="email" required>
        <button type="submit">Add</button>
    </form>

    <h2>Records</h2>
    <table border="1" cellpadding="5">
        <tr><th>ID</th><th>Name</th><th>Email</th><th>Actions</th></tr>
        <?php
        $result = $conn->query("SELECT * FROM users");
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                <td>{$row['id']}</td><td>{$row['name']}</td><td>{$row['email']}</td>
                <td>
                    <a href='update.php?id={$row['id']}'>Edit</a> | 
                    <a href='delete.php?id={$row['id']}'>Delete</a>
                </td>
            </tr>";
        }
        ?>
    </table>
</body>
</html>