<?php
session_start();
$a=mysqli_connect("localhost","id5928797_root","22222","id5928797_reg");
$b=$_SESSION['login'];
$d=mysqli_fetch_assoc(mysqli_query($a,"SELECT id FROM user WHERE name='$b'"));
$g=$d['id'];
$r=mysqli_fetch_assoc(mysqli_query($a,"SELECT i,i2,i3,o,p,m,q FROM user WHERE id='$g'"));
$t = array('image/gif','image/png','image/jpeg');
if ($_SERVER['REQUEST_METHOD'] == 'POST' && in_array($_FILES['p']['type'],$t)){   
 rename($_FILES['p']['tmp_name'],'z/'.$d['id'].'.jpg');  
}
if( isset( $_POST['e2'] ) ){
   $name=trim(htmlspecialchars(stripslashes($_POST[m])));
   mysqli_query($a,"UPDATE user SET i ='$name' WHERE id='$g'");
   echo "<script>window.location.href='b.php'</script>";
    }
if( isset( $_POST['e3'] ) ){
    $fam=trim(htmlspecialchars(stripslashes($_POST[l])));
    mysqli_query($a,"UPDATE user SET i2 ='$fam' WHERE id='$g'");
   echo "<script>window.location.href='b.php'</script>";
    }
if( isset( $_POST['e4'] ) ){
   $date=trim(htmlspecialchars(stripslashes($_POST[n])));
   mysqli_query($a,"UPDATE user SET i3 ='$date' WHERE id='$g'");
   echo "<script>window.location.href='b.php'</script>";
    }
if( isset( $_POST['b5'] ) ){
  $h=trim(htmlspecialchars(stripslashes($_POST[b2])));
  $h1=trim(htmlspecialchars(stripslashes($_POST[b3])));
   $h2=trim(htmlspecialchars(stripslashes($_POST[b4])));
 mysqli_query($a,"UPDATE user SET o ='$h' WHERE id='$g'");
mysqli_query($a,"UPDATE user SET p ='$h1' WHERE id='$g'");
mysqli_query($a,"UPDATE user SET m ='$h2' WHERE id='$g'");
   echo"<script>window.location.href='b.php'</script>";
    }
if( isset( $_POST['g'] ) ){
   $q=trim(htmlspecialchars(stripslashes($_POST[f])));
   mysqli_query($a,"UPDATE user SET q ='$q' WHERE id='$g'");
   echo "<script>window.location.href='b.php'</script>";
    }
?>
<link  href="css.css" rel="stylesheet">
<body style="background:linear-gradient(to left, #F2C14E, #F78154);">
<p id="y">Hello user! Your ip:<?php echo $_SERVER['REMOTE_ADDR'];?></p>
 <div id="y2"><img id="z" src="z/<?php echo $d['id'];?>.jpg" alt="foto"></div>
<form id="x" enctype="multipart/form-data" method="post"> 
   <input name="p" type="file"/>
   <input type="submit" value="download"/>
</form> 
<p id="e">Hello, <?php echo $_SESSION['login']; ?>
<form class="mn" action="b.php" method="POST"><p class="w">Your name</p><input maxlength="20" name="m" class="text" type="text" value="<?php echo $r['i']; ?>"/><input class="save" name="e2" type="submit" value="save"/></form><br>
<form class="mn"action="b.php" method="POST"><p class="w">Your surname</p><input maxlength="20" name="l" class="text" type="text" value="<?php echo $r['i2']; ?>"/><input class="save" name="e3" type="submit" value="save"/></form><br>
<form class="mn"action="b.php" method="POST"><p class="w">Date</p><input maxlength="20" name="n" class="text" type="text" value="<?php echo $r['i3']; ?>"/><input class="save" name="e4" type="submit" value="save"/></form>          
<form id="m2" action="b.php" method="POST"><textarea id="m5" name="f" rows="10" cols="55" wrap="virtual"><?php echo $r['q']; ?></textarea> <input id="m3" name="g" type="submit" value="сохранить"/><input id="m4" type="reset" value="стереть"/></form>
<div id="m6">добавить информацию о себе</div>

<div id="pin">
    <div id="pon">
         
    </div>
</div>

<p id="min2"><</p><p id="min">></p>
<div id="m7">
    <p id="m8">x</p>
    <form action="b.php" method="post">
        <p class="te">Ваша работа:</p>
        <input maxlength="20" class="ne" type="text" name="b2" value="<?php echo $r['o']; ?>"/><br>
        <p class="te">Ваше хобби:</p>
        <input maxlength="20" class="ne" type="text" name="b3" value="<?php echo $r['p']; ?>"/><br>
        <p class="te">Ваша деятельность:</p>
        <input maxlength="20" class="ne" type="text" name="b4" value="<?php echo $r['m']; ?>"/><br>
        <input id="b3" type="submit" name="b5" placeholder="Сохранить">
    </form>
</div>
<script src="js.js"></script>
</body>