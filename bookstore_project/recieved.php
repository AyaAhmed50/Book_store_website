<?php
    $name = $_POST['Name'];
    $Email = $_POST['Email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
    $conn = new mysqli("localhost","root","","bookstore");
    $stmt = $conn->prepare("insert into contacts(Name,Email,Phone,comment) values(?,?,?,?)");
    $stmt ->bind_param("ssis",$name,$Email,$phone,$message);
    $stmt->execute();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="fontawesome-free-6.2.0-web\css\all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Charmonman&family=Cousine&family=Happy+Monkey&family=Leckerli+One&display=swap" rel="stylesheet">

    <title>recieved</title>
    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;

        }
        a{
            text-decoration:none;
        }
        body{
            background: linear-gradient(120deg,#2980b9, #8e44ad);
            height:100vh;

        }
        .content{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 700px;
            height: 600px;
            background: white;
            border-radius: 10px;
            box-shadow: 10px 10px 15px rgba(0,0,0,0.05);
            font-family: 'Happy Monkey', cursive;
        }
        .center{
            position:relative;
            width: 700px;
            height: 600px;
        }
        .center i{
            font-size:100px;
            display:flex;
            justify-content:center;
            align-content:center;
            color:#1ba61b;
            margin-top:40px;
        }
        .center p{
            text-align:center;
            padding:50px;
            font-size:35px;
        }
        .center button{
            background-color:#2980b9;
            border:none;
            position:absolute;
            bottom:0;
            font-size:30px;
            padding: 20px;
            border-radius:20px;
            bottom: 40px;
            left: 29%
            
        }
        .center a{
            color:white;
        }
    </style>
</head>
<body>
    <div class="content">
        <div class="center">
            <p>Message Recieved</p>
            <i class="fa-solid fa-check"></i>
            <button><a href="index.php">Go to Home page</a></button>
        </div>
    </div>
</body>
</html>