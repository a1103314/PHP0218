<?php
session_start();

if($_SESSION["login"]=="Yes"){

}else{
    header("Location:error.php");
}
?>
<html>
<head>
<meta charset="utf-8">
</head>
<body>

機密資訊
<a href="logout.php">Logout</a>
</body>
</html>