<!DOCTYPE html>
<html>
<head>
    <title>Product</title>
</head>
<body>
<h2>EDIT PRODUCT</h2>
<form method="POST" action="">
    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
    Name <input type="text" name="name" value="<?php echo $row['name']; ?>"><br><br>
    Buying Price <input type="number" name="buying_price" value="<?php echo $row['buying_price']; ?>"><br><br>
    Selling Price <input type="number" name="selling_price" value="<?php echo $row['selling_price']; ?>"><br><br>
    Display <input type="checkbox" name="display" value="Yes" <?php if($row['display']=="Yes") echo "checked"; ?>><br><br>
    <input type="submit" value="SAVE">
</form>
