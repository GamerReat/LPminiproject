<?php include("db.php");

$result = $conn->query("SELECT * FROM gadgets");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Gadgets</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>All Gadgets</h1>
    <div style="width: 80%; margin: auto;">
        <?php while($row = $result->fetch_assoc()): ?>
            <div style="background: #fff; padding: 15px; margin: 10px; border-radius: 8px; box-shadow: 2px 2px 5px #999;">
                <h3><?= $row['name']; ?> (<?= $row['type']; ?>)</h3>
                <p><strong>Brand:</strong> <?= $row['brand']; ?></p>
                <p><strong>Price:</strong> $<?= $row['price']; ?></p>
                <p><strong>Description:</strong> <?= $row['description']; ?></p>
            </div>
        <?php endwhile; ?>
    </div>
</body>
</html>
<div style="text-align: center; margin-top: 20px;">
    <a href="index.html"><button>Back to Home</button></a>
</div>
