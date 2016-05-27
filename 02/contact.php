<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>お問い合わせ</title>
<link rel="stylesheet" href="style_contact.css"/>
</head>
<body>
<div id="container">
<!--result.phpに繋ぐ-->
<form action="result.php" method="post">

<!--見出し-->
<h1>お問い合わせ</h1>
<p>
<!--styleを付ける為divを入れる-->
<div class="q">
性
</div>
<div class="box">
<!--性を30文字以上入れられないようにする、必要も見せる-->
<input type="text" name="sirname" maxlength="30" required><strong>必要</strong>
</div>
</p>

<p>
<div class="q">
名
</div>
<div class="box">
<input type="text" name="name" maxlength="30" required><strong>必要</strong>
</div>
</P>


<p>
<div class="q">
性別
</div>
<!--ラジオボタン作成-->
<div class="box">
    <input type="radio" name="gender" value="男"checked>
    <label for="男">男</label>
    <input type="radio" name="gender" value="女">
    <label for="女">女</label>
    <input type="radio" name="gender" value="不明">
    <label for="不明">不明</label>
</div>
</P>

<p>
<div class="q">
電話番号
</div>
<!--入れた番号を3-4-4式しか入れないようにする、例としてplaceholderで見せる-->
<div class="phbox">
<input type="text" name="phonenumber1" maxlength="3" placeholder="(080)"/> -
<input type="text" name="phonenumber2" maxlength="4" placeholder="1234"/> -
<input type="text" name="phonenumber3" maxlength="4"placeholder="5678"/><strong>必要</strong>
</div>
</p>

<p>
<div class="q">
住所
</div>
<!--住所書く為、列と行を決める-->
<div class="box">
<textarea name="address" class="txtfield" cols="30" rows="5"></textarea>
</div>
</p>

<p>
<div class="q">
メールアドレス（送信先）
</div>
<!--30文字以上入れないようにする、例としてplaceholderで見せる-->
<div class="mailbox">
<input type="text" name="yourname" maxlength="30" placeholder="abc"/> @
<input type="text" name="com" maxlength="30" placeholder="gmail.com" /><strong>必要</strong>
</div>
</P>

<p>
<div class="q">
質問カデゴリ
</div>
<!--選択ボックスの作成-->
<div class="box">
<select name="category" class="cataQ">
<option value="セキュリティについて">セキュリティについて</option>
<option value="アカウントの削除">アカウントの削除</option>
<option value="利用方法">利用方法</option>
</select>
</div>
</p>


<p>
<div class="q">
どこで知りましたか
</div>
<!--チェックボックスの作成（複数選択可）-->
<!--配列に値を入れる-->
<div class="box">
<input type="checkbox" name="knowhow[0]" value="スマートフォンの広告">
<label for="スマートフォンの広告">スマートフォンの広告</label>
<input type="checkbox" name="knowhow[1]" value="雑誌">
<label for="雑誌">雑誌</label>
<input type="checkbox" name="knowhow[2]" value="友達から">
<label for="友達から">友達から</label>
<input type="checkbox" name="knowhow[3]" value="その他">
<label for="その他">その他</label>
</div>
</p>



<p>
<div class="q">
質問内容
</div>
<!--質問内容書く為、列と行を決める-->
<div class="box">
<textarea name="question" class="txtfield" cols="50" rows="10"></textarea>
</div>
</p>


<!--送信(sumit)ボタンを押すと、result.phpに行きます-->
<div class="q">
<input type="Submit"  value="送信">

<!--クリア（reset)ボタンを押すと、最初の何も入力してない状態に戻す-->
<input type="reset" value="クリア">
</div>

</form>
</div>

<?php

$a= $_POST['sirname'];
$b= $_POST['name'];
$c= $_POST['gender'];
$d= $_POST['phonenumber1'];
$e= $_POST['phonenumber2'];
$f= $_POST['phonenumber3'];
$g= $_POST['address'];
$h= $_POST['yourname'];
$i= $_POST['com'];
$j= $_POST['category'];
$k= $_POST['knowhow'];
$l= $_POST['question'];
$g = nl2br($g);
$l = nl2br($l);


$data = "<hr>¥r¥n";
$data = $data."<p>名前:".$a." ".$b."</p>¥r¥n";
$data = $data."<p>性別:".$c."</p>¥r¥n";
$data = $data."<p>電話番号:".$d." ".$e."　".$f."</p>¥r¥n";
$data = $data."<p>住所質問カデゴリ:".$g."</p>¥r¥n";
$data = $data."<p>メールアドレス（送信先）:".$h." ".$i."</p>¥r¥n";
$data = $data."<p>質問カデゴリ:".$j."</p>¥r¥n";
$data = $data."<p>どこで知りましたか:".$k."</p>¥r¥n";
$data = $data."<p>質問内容:".$l."</p>¥r¥n";




$keijban_file = 'contact_log.txt';

$fp = fopen($keijban_file, 'ab');

if ($fp){
    if (flock($fp, LOCK_EX)){
        if (fwrite($fp,  $data) === FALSE){
            print('ファイル書き込みに失敗しました');
        }

        flock($fp, LOCK_UN);
    }else{
        print('ファイルロックに失敗しました');
    }
}

fclose($fp);

?>

</body>
</html>
