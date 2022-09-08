<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$conn= mysqli_connect("localhost","root","");
mysqli_select_db($conn,"scores");


$sql = "SELECT * FROM login where userid='pranav'";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    $r=$row["userid"];
                    echo " Name: " . $row["userid"]. ", Email: " . $row["email"]. " ,Mobile:" . 
                          $row["mobile"]. ", score:: ". $row["score"]."<br>";
                  }
            }
            echo $r;
            ?>