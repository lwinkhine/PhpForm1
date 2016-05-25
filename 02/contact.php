<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>お問い合わせ</title>
<link rel="stylesheet" href="style_contact.css"/>
</head>

<body>

<form action="result.php" method="post">
<h1>お問い合わせ</h1>


<p>
<div class="q">
性
</div>

<div class="box">
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
<div class="box">
    <label for="男">男</label>
     <input type="radio" name="gender" value="男"checked>
     <label for="女">女</label>
     <input type="radio" name="gender" value="女">
     <label for="不明">不明</label>
     <input type="radio" name="gender" value="不明">
</div>
</P>

<p>
<div class="q">
電話番号
</div>
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
<div class="box">
<textarea name="address" class="txtfiled" cols="30" rows="5"></textarea>

</div>
</p>

<p>
<div class="q">
メールアドレス（送信先）
</div>
<div class="mailbox">
<input type="text" name="yourname" maxlength="30" placeholder="abc"/> @
<input type="text" name="com" maxlength="30" placeholder="gmail.com" /><strong>必要</strong>

</div>
</P>

<p>
<div class="q">
質問カデゴリ
</div>
<div class="box">
<select name="category">
<option value="セキュリティについて">セキュリティについて</option>
<option value="アカウントの削除">アカウントの削除</option>
<option value="利用方法">利用方法</option>
</select>
</div>
</p>

<p>
<div class="q">
質問内容
</div>
<div class="box">
<textarea name="question" class="txtfiled" cols="50" rows="10"></textarea>

</div>
</p>

<p>
<div class="q">
どこで知りましたか
</div>
<div class="box">
<label for="スマートフォンの広告">スマートフォンの広告</label>
<input type="checkbox" name="knowhow[0]" value="スマートフォンの広告" checked>
<label for="雑誌">雑誌</label>
<input type="checkbox" name="knowhow[1]" value="雑誌">
<label for="友達から">友達から</label>
<input type="checkbox" name="knowhow[2]" value="友達から">
<label for="その他">その他</label>
<input type="checkbox" name="knowhow[3]" value="その他">
</div>
</p>

</div>
<div class="q">
<input type="Submit"  value="送信">
<input type="reset" value="クリア">
</div>



</form>

</body>
</html>
