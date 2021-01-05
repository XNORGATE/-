<?php

if(isset($_POST['submit'])){
    include 'cdb.php';
}else{
    header("Location: ../register.php?err");
    exit();
}

$account = $_POST['Username'];
$password = $_POST['Password'];

if(empty($account) || empty($password)){
     echo '<script type="text/javascript">';
    echo ' alert("帳號或密碼不能是空的")';  //not showing an alert box.
    echo '</script>';
    header("Location: ../register.php?empty");
    $url  =  "https://daandht11project.com/register.php" ; 
echo " <script language = 'javascript' 
type = 'text/javascript' > "; 
echo " window.location.href = '$url' "; 
echo " </script> "; 
    exit();
}

$ins = "INSERT INTO `users` (`Username`, `Password`) VALUE ('$account', '$password')";
mysqli_query($conn, $ins);
    echo '<script type="text/javascript">';
    echo ' alert("註冊成功")';  //not showing an alert box.
    echo '</script>';
header("Location: ../login.php?success");
    $url = "https://daandht11project.com/login.php" ; 
echo " <script language = 'javascript' 
type = 'text/javascript' > "; 
echo " window.location.href = '$url' "; 
echo " </script> "; 
    exit();

?>