<?php
$products = [
    ["id" => 1, "name" => "Samsung", "buying_price" => 10000, "selling_price" => 15000, "display" => "Yes"],
    ["id" => 2, "name" => "Nokia",   "buying_price" => 8500,  "selling_price" => 10000, "display" => "Yes"],
    ["id" => 3, "name" => "Xiaomi",  "buying_price" => 7000,  "selling_price" => 10300, "display" => "Yes"]
];

echo "<h2>DISPLAY</h2>";
echo "<table border='1' cellpadding='5'>
<tr><th>NAME</th><th>PROFIT</th><th>Action</th></tr>";

foreach ($products as $row) {
    if ($row['display'] == "Yes") {   // only show if display=Yes
        $profit = $row['selling_price'] - $row['buying_price'];
        echo "<tr>
                <td>{$row['name']}</td>
                <td>{$profit}</td>
                <td>
                    <a href='edit.php?id={$row['id']}'>edit</a> | 
                    <a href='delete.php?id={$row['id']}'>delete</a>
                </td>
              </tr>";
    }
}

echo "</table>";
?>
