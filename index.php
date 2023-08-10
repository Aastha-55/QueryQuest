<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Engine</title>
    <style>
        input{
            width: 700px ;
            height: 35px;
            border-radius: 5px;
            border: 1px solid green;
            font-size :20px;

        }
        #btn{
            width: 200px ;
            height: 40px;
            border-radius: 5px;
            border: 1px solid blue;
            color: blue;
            font-size: 18px;
        }
        #btn:hover {
       background-color: blue;
       color: white;
        }

     /* center {
            text-align: center;
            margin-bottom: 40px;
        }

       img {
            width: 150px;
            border-radius: 50%;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        } */
    </style>
</head>
<body>
    <br><br>
    <center><img src="image9-2.webp" alt="logo" width="20%"></center>
    <form action="result.php" method="GET">
  <center>  <input type="text "  name = "searchbar"   placeholder="Enter your search term"></center>
 
  <br><br>
  <center>  <input type="submit" name = "submitbtn" id="btn" value=" Search "></center>

  
</body>
</html>

