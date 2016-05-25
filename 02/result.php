<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>お問い合わせ終了</title>
<link rel="stylesheet" href="style_result.css"/>
</head>

<body>
<h1>お問い合わせ終了</h1>

<p>
<div id="box1">
<div class="left">
名前
</div>
<div class="right">
<?php
echo $_POST['sirname'] ;
echo  $_POST['name'] ;
?>
</div>
</p>

<p>
<div class="left">
性別
</div>
<div class="right">
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
if ($_POST["gender"] == "男") {
print "男";
}elseif($_POST["gender"] == "女") {
print "女";
}elseif($_POST["gender"] == "不明") {
print "不明";
}
}
?>
</div>
</p>

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

<p>
<div class="left">
質問カデゴリ
</div>
<div class="right">
<?php
echo $_POST['category'];
$ks=array("セキュリティについて","アカウントの削除","利用方法");
foreach($ks as $k){
echo("<option value='".$k."'</option>");
}
?>
</div>
</p>

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

<p>
<div class="left">
どこで知りましたか
</div>
<div class="right">
<?php
if (isset($_POST["knowhow"])) {
$kh = $_POST["knowhow"];
}
if(isset($kh[0])){
print "スマートフォンの広告";
}
if(isset($kh[1])){
print "雑誌";
}
if(isset($kh[2])){
print "友達から";
}
if(isset($kh[3])){
print "その他";
}
?>
</div>
</p>

<p>
<div class="sent">
送信しました。
</div>
</div>
</p>

</body>
</html>
