<?php  

$cookies_name1="num";
$cookies_value="";
$cookies_name2="op";
$cookies_values2="";

if(isset(($_POST['num'])))
{
    $num=$_POST['input'].$_POST['num']   ;

}
else{
    $num="";
}
if(isset($_POST['op']))
{
    $cookies_value=$_POST['input'];
    setcookie($cookies_name1,$cookies_value,time()+(86400*30),"/");
    $cookies_values2=$_POST['op'];
    setcookie($cookies_name2,$cookies_values2,time()+(86400*30),"/");
    $num="";
}
if(isset($_POST['equal']))
{
    $num=$_POST['input'];
    switch($_COOKIE['op'])
    {
        case"+";
        $result=$_COOKIE['num']+$num;
        break;
        case"-";
        $result=$_COOKIE['num']-$num;
        break;
        case"*";
        $result=$_COOKIE['num']*$num;
        break;
        case"/";
        $result=$_COOKIE['num']/$num;
        break;
    }
 $num=$result;
}


///now time to print the input 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>claculator</title>
</head>
<style>  
.calc{
    margin: auto;
    
    background-color: black;
   border: 2px solid  whitesmoke;
   width: 355px;
   height: 399px;
   border-radius: 20px;
   box-shadow: 15px 10px 35px;
}
.maininput{
    background-color: black;
    border: 2px solid grey;
    height: 70px;
    width: 349px;
    color: aliceblue;
    font-size: 40px;
}
.numbtn{
    padding: 20px 34px;
 border-radius: 150px;
 font-weight: 500px;
 font-size: x-large;
}
.numbtn:hover{
    background-color: #cdc4c4;
    color: white;
}
.calbtn{
   
    padding: 20px 34px;
    border-radius: 150px;
    font-size: 15px;
    font-style:oblique;
    color: azure;
   
    background-color:  orangered;
    font-weight: 500px;
 font-size: x-large;
}
.calbtn:hover{
    background-color: tomato;
    color: black;
}
.equal{
    padding: 20px 34px;
    border-radius: 150px;
    font-size: 15px;
    font-style:oblique;
    background-color:  lightgreen;
    font-weight: 500px;
    font-size: x-large;
}
.equal:hover{
    background-color: green;
    color: white;
}
.c{
    padding: 20px 34px;
    border-radius: 150px;
    font-weight: 500px;
    font-size: x-large;
    background-color:rgb(236, 66, 66);

}
.c:hover{
    background-color:rgb(210, 18, 18); 
    color: white;
}
 </style>
<body>
    <center>
        <h1> claculator</h1>
    <div class="calc">
        <div class="main">
    <form action="claculator.php" method="post"><br></div>
     <input type="text" class="maininput" name="input" value="<?php   echo @$num ?>"><br><br>
     <input type="submit" class="numbtn" name="num" value="7">
     <input type="submit" class="numbtn" name="num" value="8">
     <input type="submit" class="numbtn" name="num" value="9">
     <input type="submit" class="calbtn" name="op" value="+"><br>
     <input type="submit" class="numbtn" name="num" value="4">
     <input type="submit" class="numbtn" name="num" value="5">
     <input type="submit" class="numbtn" name="num" value="6">
     <input type="submit" class="calbtn" name="op" value="-"><br>
     <input type="submit" class="numbtn" name="num" value="1">
     <input type="submit" class="numbtn" name="num" value="2">
     <input type="submit" class="numbtn" name="num" value="3">
     <input type="submit" class="calbtn" name="op" value="*"><br>
     <input type="submit" class="c" name="num" value="c">
     <input type="submit" class="numbtn" name="num" value="0">
     <input type="submit" class="equal" name="equal" value="=">
     <input type="submit" class="calbtn" name="op" value="/"><br>

    </form>
    </div>
    </center>
</body>
</html>