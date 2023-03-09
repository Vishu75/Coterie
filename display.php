<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display post</title>
    <style>
        table{
            /* border-collapse: collapse; */
            width: 100%;
            border-spacing: 15px;
        }
        th{
           text-align: center;
           border-radius: 2px;
           padding: 8px;
           /* color: #1B4F72; */
        }
        tr:nth-child(even){
            background-color: #B2F0F5;
        }
        tr:nth-child(odd){
            background-color: #7FB3D5;
        }
        table, td, th{
            border-bottom: 1px solid #ddd;
            border-radius: 12px;
        }

        td, th {
            border-style: dotted;
            padding-top: 25px ;
            padding-bottom: 25px ;
        }

        tr:hover{
            background-color: #1A5276;
            color: #fff;
        }

    </style>
</head>


<body style="background-color:#154360;">
    <table border= "2">
        <tr>
            <th  style ="width:20%">
                BRIEF
            </th>
            <th style ="width:70%">
                DESCRIPTION
            </th>
            <th>
                CONTACT
            </th>
        </tr>
        


<?php
error_reporting(0);
include("connection.php");
$query = "SELECT * FROM POSTING";
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);
// $result = mysqli_fetch_assoc($data);

// echo $result['id']." ".$result['briefme']." ".$result['detailme']." ".$result['contactme'];

echo "$total";

if($total !=0) 
{
    $result = mysqli_fetch_assoc($data);
    while(($result=mysqli_fetch_assoc($data)))
    {
            echo "
            <tr>
                <th>".$result['briefme']."</th>
                <th>".$result['detailme']."</th>
                <th>".$result['contactme']."</th>
            </tr>
            ";
        
    }
}
else
{
    echo "NO RECORD FOUND";
}
?>
</table>
</body>
</html>