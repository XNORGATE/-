<!DOCTYPE html>
<html><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		
		<title>智慧管家註冊</title>
		<link href="../register.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
	</head>
	<body>
		<div class="login">
		<h1>智慧管家註冊</h1>
			<form action="register_php.php" method="post">
				<label for="Username">
					<i class="fas fa-user"></i>
				</label>
				<input type="text" name="Username" placeholder="你的帳號" id="Username" required="">
				<label for="Password">
					<i class="fas fa-lock"></i>
				</label>
				<input type="password" name="Password" placeholder="你的密碼" id="Password" required="">
				<input type="submit" name="submit" value="註冊">
			</form>
		</div>
<center>		
<a href="https://www.cookiebot.com/en/cookie-policy"><font size="300">📋</a><font size="300" color= #4169E1><=註冊代表您已同意此cookie政策
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
    </body>
</html>