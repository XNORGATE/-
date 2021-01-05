<!DOCTYPE html>
<html><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		
		<title>智慧管家登入</title>
		<link href="../login.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
	</head>
	<body>
	    <?php
if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    $ip = $_SERVER['HTTP_CLIENT_IP'];
} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
} else {
    $ip = $_SERVER['REMOTE_ADDR'];
}
?>
		<div class="login">
			<h1>智慧管家登入</h1>
			<form action="login_php.php" method="post">
				<label for="Username">
					<i class="fas fa-user"></i>
				</label>
				<input type="text" name="Username" placeholder="帳號" id="Username" required="">
				<label for="Password">
					<i class="fas fa-lock"></i>
				</label>
				<input type="password" name="Password" placeholder="密碼" id="Password" required="">
				<input type="hidden" name="ip" value="<?php echo $ip; ?>">
				<input type="submit" name="submit" value="登入">
			</form>
		</div>
<center>		
<a href="https://www.cookiebot.com/en/cookie-policy"><font size="300">📋</a><font size="300" color= #4169E1><=登入代表您已同意此cookie政策
</center>

<!---<center>
<p>&nbsp;</p>
<form action="login_php.php" method="post">
<input type="text" oninput="this.value = this.value.replace(/[\u4e00-\u9fa5d]/g, '');" style="width:200px;height:30px"; name="account" placeholder="請輸入帳號......">
<input type="password" oninput="this.value = this.value.replace(/[\u4e00-\u9fa5d]/g, '');" style="width:200px;height:30px"; name="password" placeholder="請輸入密碼......">
<input type="submit" style="width:40px;height:35px; background-color: yellow"; name="submit">
</form>
<a href="register.php"><font size="200">📋</a><font size="200"><=如無帳號請點此註冊 
</center>-->
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

</body>
</html>