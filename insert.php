<?php

    require "config.php";   

    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $fullname =  $_REQUEST['fullname'];
        $indexnumber = $_REQUEST['indexnumber'];
        $level =  $_REQUEST['level'];
        $issue = $_REQUEST['issue'];
        $complaint = $_REQUEST['complaint'];


// sql insert query
        $insertSQL = "INSERT INTO complaints (fullname, indexnumber, level, issue, complaint) VALUES ('$fullname', '$indexnumber',
        '$level','$issue','$complaint')"; 
        

        if(mysqli_query($classDbLink, $insertSQL)){ 
            echo "<h3>Your Complaint has been sent successfully.</h3>"; 
  
        } else{
            echo "<h3>Complaint lodging Failed.Try again later</h3>";
            
        }
          
        // Close connection
        mysqli_close($classDbLink);
    }

    ?>
    
    
    <p >Click Here to Lodge another complaint <a href="complaint.php">Click Here</a>.</p>

    