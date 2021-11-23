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
?>