<html>
<head>
</head>
<meta charset="UTF-8">
<body>
<form action="result.php" method="post">
請輸入您的帳號：<input type="text" name="id"></br>
請輸入您的密碼：<input type="password" name="pwd"></br>
請選擇你的性別:
男<input type = "radio" name = "gender" value = "male">
女<input type = "radio" name = "gender" value = "female">
</br>
請選擇你的興趣:
<input type = "checkbox" name = "swim" value = "swim">游泳
<input type = "checkbox" name = "ball" value = "ball">打球
<input type = "checkbox" name = "sleep" value = "sleep">睡覺</br>

請選擇你居住的城市:
<select name = "city[]" multiple>
    <option value = "taipei">台北
    <option value = "taichung">台中
    <option value = "kaohsiung">高雄
</select></br>

<textarea name = "comment" cols = "10" rows="10">
</textarea>

</br><input type="submit">
<input type="reset">
</form>

</body>
</html>