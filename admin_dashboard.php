<?php
session_start();
if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
    header("Location: login.php");
    exit();
}


include 'db.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="form-box">
        <h2>Admin Dashboard</h2>
        <a href="add_product.php">➕ Add Product</a><br><br>
        <a href="view_products.php">📦 View Products</a><br><br>
        <a href="manage_users.php">👥 Manage Users</a><br><br>
        <a href="logout.php">🚪 Logout</a>
    </div>
</body>
</html>
