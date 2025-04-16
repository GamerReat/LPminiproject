<?php include("db.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $type = $_POST["type"];
    $brand = $_POST["brand"];
    $price = $_POST["price"];
    $description = $_POST["description"];

    $stmt = $conn->prepare("INSERT INTO gadgets (name, type, brand, price, description) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssds", $name, $type, $brand, $price, $description);

    if ($stmt->execute()) {
        echo "Gadget added successfully!";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Gadget</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Add New Gadget</h1>
    <form method="post">
        <input type="text" name="name" placeholder="Gadget Name" required>
        <input type="text" name="type" placeholder="Type (e.g., Phone, TV)" required>
        <input type="text" name="brand" placeholder="Brand" required>
        <input type="number" step="0.01" name="price" placeholder="Price" required>
        <textarea name="description" placeholder="Description" required></textarea>
        <button type="submit">Add Gadget</button>
    </form>
</body>
</html>
<div style="text-align: center; margin-top: 20px;">
    <a href="index.html"><button>Back to Home</button></a>
</div>
