<form action="result.php" method="post">

<dl>

<dt>性</dt>
<dd><input type="text" name="sirname" id="sirname" ></dd>

<dt>名</dt>
<dd><input type="text" name="name" id="name"></dd>


<dt>性別</dt>
<dd>
<input　type="radio" name="gender" id="man"  value="男性" /><label for="man">男性</label>
<input type="radio"　name="gender" id="woman" value="女性" /><label for="woman">女性</label>
<input type="radio"　name="gender" id="unknown"  value="不明" /><label for="man">不明</label>
</dd>

<dt>電話番号</dt>
<dd>
<input type="text" id="phoneNumber" placeholder="(123)1234-1234" />
</dd>

<dt>住所</dt>
<dd><textarea name="address" id="address" cols="30" rows="5"></textarea></dd>

<dt>メールアドレス（送信先）</dt>
<dd> <input type="text" name="emailname" id="emailname" value="" />
     @<input type="text" name="emailcom" id="emailcom" value="" />
</dd>

<dt>質問カデゴリ</dt>
<dd>
<select name="category" id="category">
<option value="髪スタイル">髪スタイル</option>
<option value="服装スタイル">服装スタイル</option>
<option value="靴スタイル">靴スタイル</option>
</select>
</dd>

<dt>質問内容</dt>
<dd><textarea name="question" id="question" cols="50" rows="10"></textarea></dd>

<dt>どこで知りましたか</dt>
<dd><input type="checkbox" name="phone" value="phoneadver"> スマートフォンの広告<br>
    <input type="checkbox" name="magazine" value="magazineadver"checked>雑誌<br>
　　　<input type="checkbox" name="friend" value="friendtalk"checked>友達から<br>
　　　<input type="checkbox" name="other" value="other"checked>その他<br>
</dd>

</dl>
<input type="submit" value="送信" />
</form>
