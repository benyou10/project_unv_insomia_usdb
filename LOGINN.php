<?php
    session_start();
    include("database.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LogIn</title>
    <style>
        *{
            margin: 0px;
        }
        .split-screen{
            display: flex;
            flex-direction: column;
        }
        @media (min-width: 860px){
            .split-screen{
                flex-direction: row;
            }
            
        }
        @media (max-width: 860px){
            .split-screen div:first-child{
                display: none;
            }
        }
        .split-screen div{
            flex: 1;
            height: 100vh;
        }
        html{
            overflow: hidden;
        }
        .div1{
            background-color: #2D5ABF;
            height: 100vh;
        }
        .div1 img{
            position: absolute;
            height: 60.9087%;
            width: 42.41735%;
            left: 1.86515%;
            top: 28.6587%;
            border-radius: 0px;
        }
        .div2{
            position: relative;
            top: 110px;
            text-align: center;
            height: 100vh;

        }
        .div2 img{
            position: relative;
            
        }
        p{
            color: #6DAFA7;
            font-family: Arial, Helvetica, sans-serif;
            font-style:  italic;
            font-weight: bold;
            font-size: 40px;
            line-height: 48px;
            text-transform: uppercase;
            cursor: default;
        }
        .email{
            background: #D9D9D9;
            height: 44.22px;
            width: 45.79%;
            border: transparent;
            border-radius: 8px;
            position: relative;
            /*left: 20.64%;*/
            
            padding-left: 10px;

            font-family: 'Inter';
            
            font-weight: 600;
            font-size: 20px;
            line-height: 24px;
        }
        .password{
            background: #D9D9D9;
            height: 44.22px;
            width: 45.79%;
            border-radius: 8px;
            border: transparent;
            position: relative;
            /*left: 20.64%;*/
            padding-left: 10px;

            font-family: 'Inter';
            
            font-weight: 600;
            font-size: 20px;
            line-height: 24px;
        }
        .checkbox{
            position: relative;
            right: 8%;
            top: 1.5%;
            height: 15px;
            width: 15px;
            
            background: #FFFFFF;
            border: 1px solid #000000;
            cursor: pointer;
        }
        .check{
            position: relative;
            right: 8%;
            top: 1.5%;

            font-family: 'Inter';
            
            font-weight: 600;
            font-size: 20px;
            line-height: 24px;
            text-transform: capitalize;

            color: #000000;
        }
        a{
            position: relative;
            top: 1.5%;
            left: 9%;

            font-family: 'Inter';
            
            font-weight: 600;
            font-size: 15px;
            line-height: 18px;
            text-transform: capitalize;

            color: #2D5ABF;
            text-decoration: none;
        }
        .login{
            background-color: #2D5ABF;
            color: white;
            position: relative;
            top: 10%;
            height: 44.22px;
            width: 45.79%;
            border-radius: 8px; 
            border: transparent;

            font-family: 'Inter';
        
            font-weight: 600;
            font-size: 20px;
            line-height: 24px;
            cursor: pointer;
        }
        
    </style>
</head>
<body>
    <div class="split-screen">
        <div class="div1">
            <i class="fa-regular fa-chevron-left fa-sm" style="color: #8fbfb7;"></i>
            <img style="max-width: 400px;" src="Rectangle 39.png" >
        </div>
        <div class="div2">
            <form action="login_php.php" method="post">
            <img style="max-width: 80px;" src="Web capture_13-5-2023_03853_www.univ-blida.dz.png" >
            <p>LRDSI</p><br>
            <input type="text" name="username" placeholder="username" class="email" id="email" required><br><br>
            <input type="password" name="password" placeholder="Password" class="password" id="password" required style="margin-bottom: 10px;"><br>
          
            <input type="submit" value="LOG IN" class="login">
            </form>
        </div>
    </div>
</body>
</html>
