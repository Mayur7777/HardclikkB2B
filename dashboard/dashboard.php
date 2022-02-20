<?php
$link = mysqli_connect("localhost", "root", "", "viv");
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error()); }
$sql = "SELECT * FROM contacts";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table border='1'>";
            echo "<tr>";
                echo "<th>Name</th>";
                echo "<th>Email</th>";
                echo "<th>Subject</th>";
                echo "<th>Message</th>";
            echo "</tr>";
            while($row = mysqli_fetch_array($result)){
                echo "<tr>";
                    echo "<td>" . $row['Name'] . "</td>";
                    echo "<td>" . $row['Email'] . "</td>";
                    echo "<td>" . $row['Subject'] . "</td>";
                    echo "<td>" . $row['Message'] . "</td>";
                echo "</tr>";
            }        echo "</table>";
          mysqli_free_result($result);
        } else{
            echo "No records matching your query were found.";
        }
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }
    mysqli_close($link); ?>
    