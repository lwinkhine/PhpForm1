<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>お問い合わせ</title>
<style>
form{
background: #f0f0f0;
}




</style>
</head>


<body>
<form action="result.php" method="post">

<p>
性:
<input type="text" name="sirname" id="sirname">
</p>

<p>
名:
<input type="text" name="name" id="name">
</p>

<p>
性別:
<input　type="radio" name="sex"  value="male" checked>男性
<input type="radio"　name="sex"  value="female">女性
<input type="radio"　name="sex"  value="unknown">不明
</P>


<p>
電話番号:
<input type="text" name="phonenumber" id="phonenumber" placeholder="(123)1234-1234"/>
</P>

<p>
住所:
<input name="address" id="address" cols="30" rows="5">
</p>

<p>
メールアドレス（送信先）:
    <input type="text" name="emailname" id="emailname" value="" />
     @<input type="text" name="emailcom" id="emailcom" value="" />
</P>

<p>
質問カデゴリ:

<select name="category" id="category">
<option value="髪スタイル">髪スタイル</option>
<option value="服装スタイル">服装スタイル</option>
<option value="靴スタイル">靴スタイル</option>
</select>
</P>

<p>
質問内容:
<textarea name="question" id="question" cols="50" rows="10"></textarea>
</p>

<p>
どこで知りましたか:
    <input type="checkbox" name="phone" value="phoneadver"> スマートフォンの広告<br>
    <input type="checkbox" name="magazine" value="magazineadver"checked>雑誌<br>
　　　<input type="checkbox" name="friend" value="friendtalk"checked>友達から<br>
　　　<input type="checkbox" name="other" value="other"checked>その他<br>
</p>


<p>
submit:
<input type="submit" value="送信" />
</P>
</form>

</body>
</html>
