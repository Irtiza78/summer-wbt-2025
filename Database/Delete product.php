<!DOCTYPE html>
<html>
<head>
    <title>Product</title>
</head>
<body>

<h2>DELETE PRODUCT</h2>
<p>Name: <?php echo $row['name']; ?></p>
<p>Buying Price: <?php echo $row['buying_price']; ?></p>
<p>Selling Price: <?php echo $row['selling_price']; ?></p>
<p>Displayable: <?php echo $row['display']; ?></p>

<form method="POST" action="delete_action.php">
    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
    <input type="submit" value="Delete">
</form>
