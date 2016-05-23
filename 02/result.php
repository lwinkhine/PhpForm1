<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>入力終了</title>

<style>
h1{
    color:#00FFFF;
    text-align: center;
}
body{
background-color:Lavender;
}
p{
margin-top: 20px;
margin-left: 600px;
margin-right:600px;
margin-bottom: 20px;


}

</style>
</head>

<body>
<h1>入力終了</h1>
<p>
<label><span>名前:</span></label>


<?php
echo $_POST['sirname'] ;
echo  $_POST['name'] ."<br />\n";
?>
</p>
<p>
<label><span>性別:</span></label>


<?php

?>
</p>
<p>
<label><span>電話番号:</span></label>


<?php

echo $_POST['phonenumber']."<br />\n";
?>
</p>
<p>
<label><span>:住所</span></label>


<?php
echo $_POST['address']."<br />\n";
?>
</p>
<p>
<label><span>メールアドレス（送信先):</span></label>


<?php
echo $_POST['yourname'];
?>

＠

<?php
echo $_POST['com']."<br />\n";
?>
</p>
<p>
<label><span>質問カデゴリ:</span></label>


<?php
echo $_POST['category'];
$ks=array("セキュリティについて","アカウントの削除","利用方法");
foreach($ks as $k){
echo("<option value='".$k."'</option>");

    }

?>
</p>
<p>
<label><span>質問内容::</span></label>


<?php
echo $_POST['question']."<br />\n";
?>
</p>
<p>
<label><span>どこで知りましたか:</span></label>


<?php

echo $_POST['knowhow']."<br />\n";


?>
</p>
<p>
<label><span>送信しました</span></label>
</p>

</body>
</html>
