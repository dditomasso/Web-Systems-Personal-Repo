<!doctype html>
<html>
    <head>
        <!-- meta tags -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="style.css">
        <title>Quiz2</title>
    </head>
    <body>
    <?php
        $user = 'root';
        $pass = 'DiTomasso2024+1';
        try {
            $dbconn = new PDO('mysql:host=localhost;dbname=websys_quiz',$user,$pass);
        }
        catch (Exception $e) {
            $err[] = $e->getMessage();
            echo "<p>error</p>";
        }
        //sorting of price of items
        $sql = "SELECT * FROM `items` ORDER BY price;";
        $pstmt = $dbconn->query($sql);
        while($row = $pstmt->fetch()) {
            echo "<tr>";
            echo "<td>$row[0]</td>";
            echo "<td>$row[1]</td>";
            echo "<td>$row[2]</td>";
            echo "<td>$row[3]</td>";
            echo "<td>$row[4]</td>";
            echo "</tr>";
        }
        $stmt = $dbconn->query("SELECT DISTINCT discounts.discount INNER JOIN tiems on discounts.id = items.id");
           $discount_item = //discounts*price 
           $val = //price - $disocunt_itemSS
            while($row = $stmt->fetch()){
                echo "<tr>";
                echo "<td>$row[0]</td>";
                echo "<td>$row[1] $row[2]</td>";
                echo "<td>$row[3] $row[4] $row[5] $row[6]</td>";
                echo "</tr>"; 
            }
    ?>