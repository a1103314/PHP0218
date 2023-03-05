<html>
<head>
<title>系考報名網頁</title>
</head>
<meta charset="UTF-8">
<body text="149376" bgcolor="51d6d3">

<form action="phphw0302.php" method="post">
請輸入您的帳號：<input type="text" name="id" placeholder="只能輸入英文" required></br>
請輸入您的密碼：<input type="password" name="pwd" value="123" required></br>
請選擇您住的地方：
台北<input type="checkbox" name="city" value="taipei"> 
台中<input type="checkbox" name="city" value="taichung" checked>
台南<input type="checkbox" name="city" value="tainan">
高雄<input type="checkbox" name="city" value="kaohsiung"></br>
<input type="color"></br>
<input type="email"></br>
<input type="date"></br>
<input type="datetime"></br>
<input type="range"></br>
<input type="url"></br>
<input type="radio" name="gender" value = "male" >男</br>
<input type="radio" name="gender" value = "female">女</br>
<select name="old[]" size="4">
    <option value = "0-18">0-18
    <option value = "18-35">18-35
    <option value = "35-60">35-60
</select></br>
<textarea name = "comment" cols="50" rows="10"></textarea>
<input type="submit">
<input type="reset">
</form>

</body>
</html>