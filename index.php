<?php
//include once db.php
include_once "db.php";
//fetch data from table products
$sql = "SELECT * FROM products";
$result = mysqli_query($conn, $sql);
//check if there are any records in the table
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Inventory management system</h1>
    <table>
        <tr>
            <th>name</th>
            <th>price</th>
            <th>quantity</th>
        </tr>
            <?php 
            if(mysqli_num_rows($result)>0){
                while($row = mysqli_fetch_assoc($result)){
                    echo "<tr><td>".$row['name']."</td><td>".$row['price']."</td><td>".$row['quantity']."</td></tr>";
                }
            }
            ?>
    </table>
</body>
</html>