<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>お問い合わせ終了</title>
<link rel="stylesheet" href="style_result.css"/>
</head>

<body>
<div id="container2">
<!--見出し-->
<h1>お問い合わせ終了</h1><br><br>

<!--名前表示-->
<p>

<div class="left">
名前
</div>
<!--styleを付ける為divを入れる-->
<div class="right">
<!--contact.phpでnameにしたsirnameとnameを表示-->
<?php
echo $_POST['sirname'] ;
echo  $_POST['name'] ;
?>
</div>
</p>

<!--性別表示-->
<p>
<div class="left">
性別
</div>
<div class="right">
<!--ラジオボタンの結果の為、nameのgenderでvalueが男であるのを選ぶと"男"を表示-->
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
if ($_POST['gender'] == "男") {
print "男";
//そうじゃなくvalueが女であるのを選ぶと"女"を表示//
}elseif($_POST['gender'] == "女") {
print "女";
//そうじゃなくvalueが不明であるのを選ぶと"不明"を表示//
}elseif($_POST['gender'] == "不明") {
print "不明";
}
}
?>
</div>
</p>


<!--電話番号表示-->
<p>
<div class="left">
電話番号
</div>
<div class="right">
<?php
$hyphen="-";
echo $_POST['phonenumber1'];
echo $hyphen;
echo $_POST['phonenumber2'];
echo $hyphen;
echo $_POST['phonenumber3'];
?>
</div>
</p>


<!--住所表示-->
<p>
<div class="left">
住所
</div>
<div class="right">
<?php
echo $_POST['address'];
?>
</div>
</p>


<!--メールアドレス表示-->
<p>
<div class="left">
メールアドレス（送信先)
</div>
<div class="right">
<?php
echo $_POST['yourname'];
?>

＠

<?php
echo $_POST['com'];
?>
</div>
</p>

<!--質問カデゴリ表示-->
<p>
<div class="left">
質問カデゴリ
</div>
<div class="right">
<!--選ばれる内容を配列に入れる-->
<?php
echo $_POST['category'];
$ks=array("セキュリティについて","アカウントの削除","利用方法");
foreach($ks as $k){
echo("<option value='".$k."'</option>");
}
?>
</div>
</p>

<!--質問内容表示-->
<p>
<div class="left">
質問内容
</div>
<div class="right">
<?php
echo $_POST['question'];
?>
</div>
</p>

<!--どこで知りましたか表示-->
<p>
<div class="left">
どこで知りましたか
</div>
<!--配列に入れた値を表示-->
<div class="right">
<!--knowhowをPOSTする時-->
<?php
if (isset($_POST['knowhow'])) {
$kh = $_POST['knowhow'];
}
//配列[0]であれば
if(isset($kh[0])){
print "スマートフォンの広告";
}
//そうじゃなく配列[1]であれば
elseif(isset($kh[1])){
print "雑誌";
}
//そうじゃなく配列[2]であれば
elseif(isset($kh[2])){
print "友達から";
}
//そうじゃなく配列[3]であれば
elseif(isset($kh[3])){
print "その他";
}
?><br><br>
</div>
</p>


<p>
<!--文字をstyle入れる為divを入れる-->
<div class="done">
送信しました。
</div><br><br>
</p>

<!--元ページに戻って書き直す為、元のページにリンク-->
<p>
<div class="rewrite">
<a href="contact.php">元のページに戻ります</a>
</div>

</div>
</body>
</html>
