
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        input{
            width: 500px;
            height: 35px;
            border: 1px solid green;
            border-radius: 5px;
          
        }
        #addbtn{
            width: 100px;
            height: 35px;
            border: 1px solid green;
            border-radius: 5px;
            background-color: white;
            color: green;
            font-size: 20px;
        }
        #addbtn:hover{
            background-color: green;
            color: white;
        }
        #cancelbtn{
            width: 100px;
            height: 35px;
            border: 1px solid red;
            border-radius: 5px;
            background-color: white;
            color: red;
            font-size: 20px;
        }
        #cancelbtn:hover{
            background-color: red;
            color: white;
        }
        #desc{
            width: 500px;
            height: 100px;
            border: 1px solid green;
            border-radius: 5px;
        }
    </style>
</head>

<body>
    <font size = "7"><b><p align="center">Add a Website</p></b></font>

    <form action = "" method = "POST" enctype = "multipart/form-data">
        <table border = "0" width = "55%" align = "center" cellspacing = "10">
            <tr>
                <td> website title </td>
                <td><input type="text" name="websitetitle" /></td>
            </tr>
            <tr>
                <td> website link </td>
                <td><input type="text" name="websitelink" /></td>
            </tr>
            <tr>
                <td> website keywords </td>
                <td><input type="text" name="websitekeywords" /></td>
            </tr>
            <tr>
                <td> website discription </td>
                <td><textarea  name="websitediscription" id="desc" /></textarea></td>
            </tr>
            <tr>
                <td> website Images </td>
                <td><input type="file" name="image" /></td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" name="addwebsite" id="addbtn">
                &nbsp;&nbsp;
                <input type="Reset" name="websitetitle" id="cancelbtn" /> </td>
            </tr>
        </table >
    </form>

</body>
</html>


<?php

include("connection.php");

if($_POST['addwebsite'])
{
    $website_title = $_POST['websitetitle'];
    $website_link = $_POST['websitelink'];
    $website_keywords = $_POST['websitekeywords'];
    $website_discription = $_POST['websitediscription'];

  
//     $filename = $_FILES["websiteupload"]["name"]; 
//     $tempname = $_FILES["websiteupload"]["tmp_name"];

    
$file_name = $_FILES['image']['name'];
$file_size = $_FILES['image']['size'];
$file_tmp = $_FILES['image']['tmp_name'];
$file_type = $_FILES['image']['type'];

// move_uploaded_file($file_tmp , "web_images/".$file_name);
    
    $folder = "web_images/".$file_name;
    move_uploaded_file($file_tmp , $folder);
  

    if($website_title != "" && $website_link != "" && $website_keywords != "" && $website_discription != "" && $file_name != "")
    {
        $query = "INSERT INTO add_website values ('$website_title','$website_link','$website_keywords',' $website_discription','$folder')";
        $data = mysqli_query($conn , $query);

        if($data){
            echo "<script>alert('Website Inserted')</script>";
        }
    }  
    else
    {
            echo "<script>alert('Website Inserting Failed')</script>";
    }

}

?>
