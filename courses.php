<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbName = "it1150";

    //create connection
    try{
        $conn = new PDO("mysql:host=$servername;dbname=$dbName", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connected sucessfully";

        //Fetch ALL data from table
        $query = "SELECT * FROM courses";

        $data = $conn->query($query);

        echo '<table width="70%" border="1" cellpadding="5" cellspacing="5">
                <tr>
                    <th>course_id</th>
                    <th>title</th>
                    <th>credit_hrs</th>
                </tr>';

        foreach($data as $row)
        {
            echo '<tr>
                    <td>'.$row["course_id"].'</td>
                    <td>'.$row["title"].'</td>
                    <td>'.$row["credit_hrs"].'</td>
                  </tr>';
        }

        echo '</table>';
    }
    catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
?>
