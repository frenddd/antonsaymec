
<!DOCTYPE html>
    <html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="css\login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=M+PLUS+Rounded+1c&display=swap" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Caesar Dressing' rel='stylesheet'>
    <title>Un1Class: Sign In</title>
</head>
<Body class="body">
    <!--Logoul si butonul de sign in/up-->
    <div class="head">
        <div class="logo"><a href=index.html><img src="imagini\logo.png" width="130px"></a></div>
        <div class="sign"></div>
    </div>
    <center>
        <!--Cadranul de informatii-->
    
    <div><span id="slideup" class="login">Sign In</span></div><br>
    <div class="patrat" center>

<div>
<div><input class="input" type="text" placeholder="E-mail"></div>
<div><input class="input" type="password" placeholder="Password"></div>
<div><a href="index.php"><button class="buton">Sign in</button></a></div>

</div>
<div><span class="already"> Don't have an account? <a href="createaccount.html">Click here to create one!</a></span></div>
</div></center>
</body>
    </html>
<?php
session_start();
include "bazadedate.php";

if(isset($_POST['Name'])&&isset($_POST['Pass'])){
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars(($data));
        return data;
    }
}

$Uname =validate($_POST['Name']);
$Pass = validate($_POST['Pass']);

if(empty($Uname)){
    header("Location:index.php?err=User Name trebe");
    exit();
}
else if(empty($Pass)){
    header("Location:index.php?err=Password trebe");
    exit();
}


    $sql = "SELECT * FROM `info` WHERE LogUser='$Uname' AND LogPass='$Pass'";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result)===1){
$row = mysqli_fetch_assoc($result);
if($row['LogUser']===$Uname && $row['LogPass']===$pass){
echo "login";
$_SESSION['Name'] = $row['Name'];
$_SESSION['name'] = $row['name'];
$_SESSION['id'] = $row['id'];
header("Location:index copy.php");
exit();

    }
    else{
        header("Location:index.php?err=Nu e bun");
        exit();
    }
}
else{
    header("Location:index.php");
    exit();
}
?>