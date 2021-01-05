<!DOCTYPE html>
<html>
    <head>
    	<title>
    		智慧管家
    	</title>
    	
    	<link rel="icon" href="icon.png">
    
    <?php
if(isset($_COOKIE["imgenius"])){
?>
<p>歡迎回來 閒置五分鐘會自動登出喔</p>
<?
}else{
  ?>
<style>
* { font-family: arial; background-color:#003366;}
*:focus {outline: none;}
    b { font-weight: bold; }
	table { height: 50%; border: 1px solid gray;}
  	td { text-align: center; padding: 25;}
	button {
    margin-top: 20%;
    border: 3px solid #a6352d;
    margin-right: 2%;
    margin-left: 2%;
    border-radius: 70px;
    width: 20%;
    height: 60%;
    font-size: 150%;
    color: white;
    font-weight: bold;
    }
        	
    button:hover {
    cursor: pointer;
    color: #a6352d;
    background-color: #362121;
    transition: 0.2s;
    }
    
</style>
</head>
<body>
        <center>
            <button onclick="window.location.href='login.php'">登入</button>
            <button onclick="window.location.href='register.php'">註冊帳號</button>
            <button onclick="window.location.href='ppt.php'">簡報點我</button>
            <button onclick="window.location.href='https://line.me/R/ti/g/lXWoROxklT'">line監控群組</button>
        </center>

<script>
  var oTimerId;
    function Timeout(){
      alert("\n您好\n五分鐘已到!\n很抱歉!!請重新登入系統\n謝謝!!");
        location.href= ('logout.php');
}
          function ReCalculate(){
          clearTimeout(oTimerId);
          oTimerId = setTimeout('Timeout()', 1 * 300 * 1000); //js 是用毫秒計算
}
        document.onmousedown = ReCalculate;
      document.onmousemove = ReCalculate;
    ReCalculate();
</script>

  <?php
  exit();
}
?>

<?php
$servername = "localhost";
// REPLACE with your Database name
$dbname = "zmxnqroi_daandhtproject";
// REPLACE with Database user
$username = "zmxnqroi";
// REPLACE with Database user password
$password = "5V43zDbes9";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "SELECT id, sensor, `location`, value1, value2, value3, reading_time FROM SensorData";
 
echo '<table cellspacing="50" cellpadding="50">
      <tr> 
        <td>資料ID</td> 
        <td>感測器</td> 
        <td>位置</td> 
        <td>溫度</td> 
        <td>濕度</td>
        <td>氣壓</td> 
        <td>時間</td> 
      </tr>';
 
if ($result = $conn->query($sql)) {
    while ($row = $result->fetch_assoc()) {
        $row_id = $row["id"];
        $row_sensor = $row["sensor"];
        $row_location = $row["location"];
        $row_value1 = $row["value1"];
        $row_value2 = $row["value2"]; 
        $row_value3 = $row["value3"]; 
        $row_reading_time = $row["reading_time"];
 
        echo '<tr> 
                <td>' . $row_id . '</td> 
                <td>' . $row_sensor . '</td> 
                <td>' . $row_location . '</td> 
                <td>' . $row_value1 . '</td> 
                <td>' . $row_value2 . '</td>
                <td>' . $row_value3 . '</td> 
                <td>' . $row_reading_time . '</td> 
              </tr>';
    }
    $result->free();
}
$conn->close();
?> 
</table>
<style>
        html {
            height: 100%;
        }

        body {
            background-color: lightblue
        }
        
        table {
         font-size: 200%;
        }
    </style>
</body>
</html></pre>
<pre>