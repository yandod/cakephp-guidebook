<form action="/spoofed_form/add" method="post">
名前：<input name="data[User][name]" value="shin" type="text" id="UserName" /><br />
パスワード：<input type="password" name="data[User][password]" value="pass" id="UserPassword" /><br />
<input type="hidden" name="data[User][id]" value="1" />
<input type="submit" value="送信" />
</form>