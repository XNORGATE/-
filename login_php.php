<?php
if(isset($_POST['submit'])){
    include 'cdb.php';
}else{
     echo '<script type="text/javascript">';
    echo ' alert("帳號或密碼錯誤1")';  //not showing an alert box.
    echo '</script>';
    header("Location: ../index.php?err");
    $url  =  "https://daandht11project.com" ; 
echo " <script language = 'javascript' 
type = 'text/javascript' > "; 
echo " window.location.href = '$url' "; 
echo " </script> "; 
    exit();
}

$Username = $_POST['Username'];
$Password = $_POST['Password'];
$IP = $_POST['ip'];

if(empty($Username) || empty($Password)){
    echo '<script type="text/javascript">';
    echo ' alert("帳號或密碼是空的😴不用這樣欸")';  //not showing an alert box.
    echo '</script>';
    header("Location: ../index.php?empty");
    $url  =  "https://daandht11project.com" ; 
echo " <script language = 'javascript' 
type = 'text/javascript' > "; 
echo " window.location.href = '$url' "; 
echo " </script> "; 
    exit();
}

$sel = "SELECT * FROM `users` WHERE Username = '$Username'";
$result = mysqli_query($conn, $sel);
$row = mysqli_fetch_array($result);

$c_pwd = $row['Password'];

if($Password == $c_pwd){
    $ins = "INSERT INTO `login_log` (`account`, `ip`) VALUE ('$Username', '$IP')";
    mysqli_query($conn, $ins);
    setcookie("imgenius", $Username, time() +3600, "/");
    header("Location: ../index.php?success");
    exit();
}else{
     echo '<script type="text/javascript">';
    echo ' alert("帳號或密碼錯誤😭")';  //not showing an alert box.
    echo '</script>';
    header("Location: ../index.php?err");
    $url = "https://daandht11project.com" ; 
echo " <script language = 'javascript' 
type = 'text/javascript' > "; 
echo " window.location.href = '$url' "; 
echo " </script> "; 
    exit();
}
?>