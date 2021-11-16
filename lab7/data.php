<!doctype html>
<html>
    <head>
        <!-- meta tags -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="style.css">
        <title>Lab 7</title>
    </head>
    <body>
        <h1>LAB 7: GRADEBOOK</h1>
        <?php
            $user = 'root';
            $pass = 'DiTomasso2024+1';
            try {
                $dbconn = new PDO('mysql:host=localhost;dbname=websyslab7',$user,$pass);
                echo "<p>success</p>";
            }
            catch (Exception $e) {
                $err[] = $e->getMessage();
                echo "<p>error</p>";
            }
            /* Students Table Output*/
            $stmt = $dbconn->query('SELECT * FROM `students`');
            print_r($stmt->fetchAll());
            echo '<br>';
            echo '<br>';

            /* Courses Table Output*/
            $stmt = $dbconn->query('SELECT * FROM `courses`');
            print_r($stmt->fetchAll());
            echo '<br>';
            echo '<br>';

            /* Grades Table Output*/
            $stmt = $dbconn->query('SELECT * FROM `grades`');
            print_r($stmt->fetchAll());
            echo '<br>';
            echo '<br>';
        ?>
    </body>
</html>