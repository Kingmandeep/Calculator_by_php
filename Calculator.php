<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Calculator</title>
    <style>
        body{
            background-color: grey;
            font-size:24px;
            margin:0;
            padding:0;

        }
        .container{
            height:40vh;
            width:40%;
            text-align:center;
            margin: 10% 30%;
            background-color: #fff;
            border-radius:6%;
        }
        .right{
            padding-top:30px;
        }
        input{
            width:80%;
            height:25px;
            margin:5px;
            outline:none;
        }
        select{
            width:50%;
            background-color:rgb(110,124,123);
            cursor:pointer;
            height:25px;
            margin:10px;
        }
        .sub{
            height:30px;
            cursor:pointer;
            color:#fff;
            background-color:blue;
            border:none;
            border-radius:5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="box">
            
            <div class="right">
                <form action="#" method="POST">
                <input type="text" name="a" placeholder="Enter first Number"><br>
                <input type="text" name="b" placeholder="Enter second Number"><br>
                <select name="subm">
                    <option name="add">add</option>
                    <option name="sub">sub</option>
                    <option name="mul">mul</option>
                    <option name="div">div</option>
                </select>
                <br>
                <input class="sub" type="submit" name="submit" value="Submit">
                <p>
                <?php
                        if(isset($_POST['submit'])){
                            $a = $_POST['a'];
                            $b = $_POST['b'];
                            $c=$_POST['subm'];
                            if($b!=0){
                                switch($c){
                                    case "add": 
                                        echo "Add of ".$a." and ".$b." is : ".$a+$b;
                                        break;
                                    case "sub": 
                                        echo "Subtract of ".$a." and ".$b." is : ".$a-$b;
                                        break;
                                    case "mul": 
                                        echo "Multiply of ".$a." and ".$b." is : ".$a*$b;
                                        break;
                                    case "div": 
                                        echo "Division of ".$a." and ".$b." is : ".$a/$b;
                                        break;
                                    default: 
                                        echo "Sorry i can't predict";
                                        break;
                                }
                            }else{
                                echo "Any Number can't be divisible by 0";
                            }
                        }
                    ?>
                    
                </p>
                </form>
            </div>
        </div>
    </div>
</body>
</html>


