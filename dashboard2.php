

<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: dashboard.php");
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <title>View complaints</title>

    <?php
    require 'config.php';
    $sqlStatement = "SELECT * FROM complaints WHERE issue = 'l';";
    $dOut = mysqli_query($classDbLink,$sqlStatement);
    $nRow = mysqli_num_rows($dOut);
    ?>

    <style>
        nav{
            background-color: gray;
            color: white;
            padding: 20px;
            text-align: center;
            margin-bottom: 10px;
        }
     
        a{
            background-color: white;
            color: black;
            text-decoration: none;
        }
        .small_col{
            background-color: grey;
            width: 15%;
            border: 1px solid black;
        }
        .big_col{
            background-color: whitesmoke;
            width:83%;
            border: 1px solid black;
        }
        .linkange{
            display: block;
            margin: 0 50px;
            margin-top: 10px;
            
        }

        dl{
            border-width: 2px 4px;
            border-radius: 5px 0px;
            padding: 2px 5px;
        }
    </style>

    
</head>
<body>
    <nav>

   <?php
   echo "Welcome " . $_SESSION['username'] . " This is the Login Issues Category"  ?>;
    </nav>
    
    <div>
        <table style="width: 100%; height:80%; text-align: center;">
            <tr>
                <td class="small_col">
                <a href="dashboard.php" button type="button" class="btn btn-success">Courses Issues</button> </a> <br><br>
                    <a href="dashboard2.php"button type="button" class="btn btn-primary">Login Issues</button> </a><br><br>
                    <a href="dashboard3.php"button type="button" class="btn btn-secondary">Others</button> </a><br><br>    
                    <a href="logout.php"button type="button" class="btn btn-danger">Log out</button> </a>                   
                </td>
                <td class="big_col">
                    <div class="field">
                        <?php
                        if($nRow > 0)

while($rowData = mysqli_fetch_array($dOut))
{
    echo "<h4>Full Name: ".$rowData['fullname'].
    "<h4> Index Number:".$rowData['indexnumber'].
    "<h4>Current Level: ".$rowData['level'].
    "<h4> Complaint:".$rowData['complaint'].
    "<hr>";
}

else
{
    echo "<h4>No Feedbacks. <a href='logout.php' style='text-decoration: underline; color:#010129'>To logoot</a></h4>";
}
                        ?>
                        
                    </div>
                </td>
            </tr>
        </table>
    </div>
    
</body>
</html>