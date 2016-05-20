<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>お問い合わせ</title>
<style>
h1{
    color:#00FFFF;
    margin-left:600px;
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

<form action="result.php" method="post">
<h1>お問い合わせ</h1>
<p>
<label><span>性:</span><br>
<input type="text" name="sirname" maxlength="30" required><br>
</label>
</P>


<p>
<label><span>名:</span><br>
<input type="text" name="name" maxlength="30" required><br>
</label>
</P>


<p>
<label><span>性別:</span><br>
<span class="radio">
<label><input type="radio"　name="gender"  value="male" />男</label>
<label><input type="radio"　name="gender"  value="female"/>女</label>
<label><input type="radio"　name="gender"  value="unknown"/>不明</label>
</span>
</label><br>
</P>

<p>
<label><span>電話番号:</span><br>
<input type="text" name="phonenumber" maxlength="3" placeholder="(080)"/>
<input type="text" name="phonenumber" maxlength="4" placeholder="1234"/>
<input type="text" name="phonenumber" maxlength="4"placeholder="1234"/>
</label><br>
</p>

<p>
<label><span>住所:</span><br>
<input name="address" cols="30" rows="5">
</label><br>
</p>

<p>
<label><span>メールアドレス（送信先）:</span><br>
<input type="emailname" name="yourname" maxlength="30" placeholder="abc"/> @
<input type="emailcom" name="com" maxlength="30" placeholder="gmail.com" />
</label>
<br>
</P>

<p>
<label><span>質問カデゴリ:</span><br>

<select name="category"><br>

<option value="セキュリティについて">セキュリティについて</option>
<option value="アカウントの削除">アカウントの削除</option>
<option value="利用方法">利用方法</option>
</select>
</label>
<br>
</p>

<p>
<label><span>質問内容:</span><br>
<textarea name="question" class="txtfiled" cols="50" rows="10"></textarea>
</label>
<br>
</p>

<p>
<label><span>どこで知りましたか:</span><br>
<label><input type="checkbox" name="phone" value="phoneadver">スマートフォンの広告</label>
<label><input type="checkbox" name="magazine" value="magazineadver">雑誌</label>
<label><input type="checkbox" name="friend" value="friendtalk">友達から</label>
<label><input type="checkbox" name="other" value="other">その他</label>
</label>
<br>
</p>


<p>
<label><span>submit:</span><br>
<input type="Submit" name="send "value="送信">
</P>


</form>

</body>
</html>
