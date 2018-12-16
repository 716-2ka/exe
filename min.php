<?php 
$a=mysqli_connect("localhost","id5928797_root","22222","id5928797_reg");
$b=trim(htmlspecialchars(stripslashes($_POST[n])));
$c=trim(htmlspecialchars(stripslashes($_POST[m])));
/*регистрация*/
if($_POST['a']){
    $d=mysqli_fetch_assoc(mysqli_query($a,"SELECT id FROM user WHERE name='$b'"));
if($d){echo'login in base,you cant do it again';exit();
 }else{mysqli_query($a,"INSERT INTO user VALUES ('','$b','$c','','','','','','','')");echo'congratulte.You are registrate'."<a href='index.html'>Log In</a>";exit();}}
/*вход в зарегестрированный аккаунт*/
if($_POST['b']){
    session_start();
    $e=mysqli_fetch_assoc(mysqli_query($a,"SELECT name FROM user WHERE name='$b'"));
    if($e){
        if (mysqli_fetch_assoc(mysqli_query($a,"SELECT password FROM user WHERE password='$c'"))){
            $_SESSION['login']=$e['name'];
            header("Location:b.php");  
        }else{echo'not write password';}
        }else{echo'nety tokogo logina';}
}
?>
<body style="background:#373059;font-size:6vw;color:#fff;text-align:center;padding-top:4vw;"></body>