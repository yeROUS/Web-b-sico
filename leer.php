<?php
include 'conex.php';

$sql = "SELECT id, name, email, created_at FROM users";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Read Users</title>
</head>
<body>
    <table border="3">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Created At</th>
            <th>Actions</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["id"]. "</td><td>" . $row["name"]. "</td><td>" . $row["email"]. "</td><td>" . $row["created_at"]. "</td>";
                echo "<td><a href='actualizar.php?id=".$row['id']."'>Editt</a> | <a href='eliminar.php?id=".$row['id']."'>Delete</a></td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='5'>0 results</td></tr>";
        }
        ?>
    </table>
</body>
</html>

<?php
$conn->close();
?>