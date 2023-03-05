<meta charset="UTF-8">

<?php
if(isset($_POST["id"])){

    $id = $_POST["id"];
    $pwd = $_POST["pwd"];
    $city = $_POST["city"];
    $gender = $_POST["gender"];
    
    echo "您的帳號是:".$id. "</br>";
    echo "您的密碼是:".$pwd."</br>";

    echo "您的居住地為:";
    if($city == "taipei"){
        echo "台北";
    }else if($city == "taichung"){
        echo "台中";
    }else if($city == "tainan"){
        echo "台南";
    }else{
        echo "高雄";
    }
    echo "<br>";

    if($gender == "male"){
        echo "您的性別為男性</br>";
    }else{
        echo "您的性別為女性</br>";
    }

    $old = $_POST["old"];
    echo "您的年齡為:";
    foreach($old as $years){
        echo $years." ";
    }

    echo "<br>";

    $comment = $_POST["comment"];
    echo "您的建議:";
    echo nl2br(strip_tags($comment));

}else{
    echo"資料輸入錯誤";
}

?>