<meta charset="UTF-8">

<?php
if(isset($_POST["id"])){

$id = $_POST["id"];
$pwd = $_POST["pwd"];
$gender = $_POST["gender"];


echo "你的帳號是:".$id."</br>";
echo "你的密碼是:".$pwd."</br>";

if($gender == "male"){
    echo "你的性別是:男性</br>";
    }else{
        echo "你的性別是:女性</br>";
    }
echo "你的興趣是:";
if(isset($_POST["swim"])){
    $swim=$_POST["swim"];
    echo "游泳";
}
if(isset($_POST["ball"])){
    $ball=$_POST["ball"];
    echo "打球";
}
if(isset($_POST["sleep"])){
    $sleep=$_POST["sleep"];
    echo "睡覺";
}

echo "<br>";

$city = $_POST["city"];
echo "您居住的城市為:";
foreach($city as $value){
    echo $value." ";
}

echo "<br>";

$comment = $_POST["comment"];
echo "您的建議:</br>";
echo nl2br(strip_tags($comment));

}else{
    echo "資料輸入錯誤";
}


?>