<!DOCTYPE html>
<html>
    <head>
        <title>Result Page</title>
        <style>
              
              #searchbtn{
                width : 500px;
                height : 35px;
                border-radius : 5px;
                border : 1px solid green;
              }
              #gobtn{
                width : 100px;
                height : 39px;
                border-radius : 5px;
                border : 1px solid green;
                background-color : white;
                font-size :17px;
              }
              #gobtn:hover{
                background-color:green;
                color:white;
              }
              a{
                color:#0000cc;
                text-decoration:none;
              }
        </style>
    </head>
<body>

<form action="" method="GET">
    <table border = "0" width = "100%" bgcolor = "f2f2f2">
    
        <tr>
            <td width="10%">
                <a href="index.php"><img src="image9-2.webp"  width = "100%"></a>
            </td>     
            <td>
                <input type = "text" name = "" id = "searchbtn">
                <input type = "submit" name = "" value = "GO!" id = "gobtn">
            </td>
        </tr>  
        </center>       
    </table>
       

    <table border ="0" style = "margin-left: 100px ;">
        <tr>
            <?php
            include("connection.php");
            if(isset($_GET['submitbtn']))
            {
                $search = $_GET['searchbar'];
                if($search == ""){
                    echo "<h1 align = 'center'>Please write something in Search Box</h1>";
                    exit();
                }

                $query = "select * from add_website where website_keywords like '%$search%' limit 0,4";
                $data = mysqli_query($conn,$query);

                if(mysqli_num_rows($data) < 1){
        
                    echo "<h1 align = 'center'> No Result Found!!</h1>";
                    exit();
                }
                echo "<a href= '#' style='margin-left:105px;'><font size='4'> More Images for $search </font></a>";
                
                while ($row = mysqli_fetch_array($data))
                {
                    echo "
                           <td>
                           <img src='$row[4]' width = '200px;' >
                           </td>
                    ";
                }
            }

?>
<tr>
</form>
<?php 
include("final.php");
?>
</body>
</html>    
